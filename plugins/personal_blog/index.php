<?php
/******************************************************************************
 *
 * Subrion - open source content management system
 * Copyright (C) 2015 Intelliants, LLC <http://www.intelliants.com>
 *
 * This file is part of Subrion.
 *
 * Subrion is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Subrion is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Subrion. If not, see <http://www.gnu.org/licenses/>.
 *
 *
 * @link http://www.subrion.org/
 *
 ******************************************************************************/

$iaDb->setTable('blog_entries');

if (iaView::REQUEST_HTML == $iaView->getRequestType())
{
	if (isset($iaCore->requestPath[0]))
	{
		$id = (int)$iaCore->requestPath[0];

		if (!$id)
		{
			return iaView::errorPage(iaView::ERROR_NOT_FOUND);
		}

		$sql =
			'SELECT SQL_CALC_FOUND_ROWS ' .
			'b.`id`, b.`title`, b.`date_added`, b.`body`, b.`alias`, b.`image`, m.`fullname` ' .
			'FROM `:prefix:table_blog_entries` b ' .
			'LEFT JOIN `:prefix:table_members` m ON (b.`member_id` = m.`id`) ' .
			'WHERE b.`id` = :id AND b.`status` = \':status\' ' .
			'ORDER BY b.`date_added`';

		$sql = iaDb::printf($sql, array(
			'prefix' => $iaDb->prefix,
			'table_blog_entries' => 'blog_entries',
			'table_members' => iaUsers::getTable(),
			'id' => iaSanitize::sql($id),
			'status' => iaCore::STATUS_ACTIVE
		));

		$blogEntry = $iaDb->getRow($sql);


		$sql =
			'SELECT DISTINCT bt.`title`, bt.`alias` ' .
			'FROM `:prefix:table_blog_tags` bt ' .
			'LEFT JOIN `:prefix:table_blog_entries_tags` bet ON (bt.`id` = bet.`tag_id`) ' .
			'WHERE bet.`blog_id` = :id';

		$sql = iaDb::printf($sql, array(
			'prefix' => $iaDb->prefix,
			'table_blog_entries_tags' => 'blog_entries_tags',
			'table_blog_tags' => 'blog_tags',
			'id' => iaSanitize::sql($id)
		));
		$blogTags = $iaDb->getAll($sql);


		if (empty($blogEntry))
		{
			return iaView::errorPage(iaView::ERROR_NOT_FOUND);
		}

		$title = iaSanitize::tags($blogEntry['title']);
		iaBreadcrumb::toEnd($title);

		$iaView->title($title);

		// add open graph data
		$openGraph = array(
			'title' => $title,
			'url' => IA_SELF,
			'image' => IA_CLEAR_URL . 'uploads/' . $blogEntry['image']
		);
		$iaView->set('og', $openGraph);

		$iaView->assign('tags', $blogTags);
		$iaView->assign('blog_entry', $blogEntry);
	}
	else
	{
		$page = empty($_GET['page']) ? 0 : (int)$_GET['page'];
		$page = ($page < 1) ? 1 : $page;

		$pageUrl = $iaCore->factory('page', iaCore::FRONT)->getUrlByName('blog');

		$pagination = array(
			'start' => ($page - 1) * $iaCore->get('blog_number'),
			'limit' => (int)$iaCore->get('blog_number'),
			'template' => $pageUrl . '?page={page}'
		);

		$order = ('date' == $iaCore->get('blog_order')) ? 'ORDER BY `date_added` DESC' : 'ORDER BY `title` ASC';

		$stmt = '`status` = :status AND `lang` = :language';
		$iaDb->bind($stmt, array('status' => iaCore::STATUS_ACTIVE, 'language' => $iaView->language));

		$sql =
			'SELECT SQL_CALC_FOUND_ROWS ' .
			'b.`id`, b.`title`, b.`date_added`, b.`body`, b.`alias`, b.`image`, m.`fullname` ' .
			'FROM `:prefix:table_blog_entries` b ' .
			'LEFT JOIN `:prefix:table_members` m ON (b.`member_id` = m.`id`) ' .
			'WHERE b.' . $stmt . $order . ' LIMIT :start, :limit';

		$sql = iaDb::printf($sql, array(
			'prefix' => $iaDb->prefix,
			'table_blog_entries' => 'blog_entries',
			'table_members' => 'members',
			'start' => $pagination['start'],
			'limit' => $pagination['limit']
			));
		$rows = $iaDb->getAll($sql);

		$pagination['total'] = $iaDb->foundRows();

		$sql =
			'SELECT bt.`title`, bt.`alias`, bet.`blog_id` ' .
			'FROM `:prefix:table_blog_tags` bt ' .
			'LEFT JOIN `:prefix:table_blog_entries_tags` bet ON (bt.`id` = bet.`tag_id`) ' .
			'ORDER BY bt.`title`';

		$sql = iaDb::printf($sql, array(
			'prefix' => $iaDb->prefix,
			'table_blog_entries_tags' => 'blog_entries_tags',
			'table_blog_tags' => 'blog_tags'
		));
		$blogTags = $iaDb->getAll($sql);

		$iaView->assign('tags', $blogTags);
		$iaView->assign('blog_entries', $rows);
		$iaView->assign('pagination', $pagination);
	}

	$pageActions[] = array(
		'icon' => 'icon-rss',
		'title' => '',
		'url' => IA_URL . 'blog.xml',
		'classes' => 'btn-warning'
	);

	$iaView->set('actions', $pageActions);

	$iaView->display('index');
}

if (iaView::REQUEST_XML == $iaView->getRequestType())
{
	$output = array(
		'title' => $iaCore->get('site') . ' :: ' . $iaView->title(),
		'description' => '',
		'url' => IA_URL . 'blog',
		'item' => array()
	);

	$listings = $iaDb->all(iaDb::ALL_COLUMNS_SELECTION, "`lang`= '" . $iaView->language . "'", 0, 20);
	$pageUrl = $iaCore->factory('page', iaCore::FRONT)->getUrlByName('blog');

	foreach ($listings as $entry)
	{
		$output['item'][] = array(
			'title' => $entry['title'],
			'link' => $pageUrl . $entry['id'] . '-' . $entry['alias'],
			'pubDate' => date('D, d M Y H:i:s T', strtotime($entry['date_modified'])),
			'description' => iaSanitize::tags($entry['body'])
		);
	}

	$iaView->assign('channel', $output);
}

$iaDb->resetTable();