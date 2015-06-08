<?php
/******************************************************************************
 *
 * Subrion - open source content management system
 * Copyright (C) 2014 Intelliants, LLC <http://www.intelliants.com>
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

if (iaView::REQUEST_HTML == $iaView->getRequestType())
{
	if (empty($data))
	{
		return;
	}

	$plugin = 'youtube';
	$field = 'youtube_video';
	$pages = array(
		'accounts' => array('view_member', 'profile'),
		'autos' => array('submit_auto', 'auto_edit'),
		'articles' => array('submit_article', 'edit_article'),
		'estates' => array('estate_submit', 'estate_edit'),
		'listings' => array('add_listing', 'edit_listing')
	);

	foreach ($data as $node)
	{
		$item = $node['item'];
		switch($node['action'])
		{
			case '+':
				if($iaDb->exists('`item` = :item AND `name` = :field_name', array('item' => $item, 'field_name' => $field), 'fields'))
				{
					$iaDb->update(array('status' => 'active'), "`name` = '$field' AND `item` = '$item'", null, 'fields');
				}
				else
				{
					$sql = sprintf("ALTER TABLE `%s%s` ADD `%s` VARCHAR(%d) NOT NULL DEFAULT ''", $iaCore->iaDb->prefix, $item, $field, 128);
					$iaDb->query($sql);

					$id = $iaDb->insert(array(
						'extras' => $plugin,
						'item' => $item,
						'name' => $field,
						'type' => 'text',
						'length' => 128,
						'status' => 'active'
					), false, 'fields');
					if (isset($pages[$item]))
					{
						$data = array();
						foreach ($pages[$item] as $page)
						{
							$data[] = array(
								'page_name' => $page,
								'field_id' => $id,
								'extras' => $plugin
							);
						}
						$iaDb->insert($data, false, 'fields_pages');
					}
				}
				break;

			case '-':
				$iaDb->update(array('status' => 'approval'), "`name` = '$field' AND `item` = '$item'", null, 'fields');
				break;
		}
	}
}