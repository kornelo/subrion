<?php
//##copyright##

$iaDb->setTable('questions_and_answers');

if (iaView::REQUEST_JSON == $iaView->getRequestType())
{
	$iaGrid = $iaCore->factory('grid', iaCore::ADMIN);

	switch ($pageAction)
	{
		case iaCore::ACTION_READ:

			switch ($_GET['get'])
			{
				case 'alias':
					iaUtil::loadUTF8Functions('ascii', 'utf8_to_ascii');

					$title = $_GET['title'];
					utf8_is_ascii($title) || $title = utf8_to_ascii($title);

					$output['url'] = IA_PLUGIN_URL . $iaDb->getNextId() . '-' . iaSanitize::alias($title) . '.html';

					break;

				default:

					$start = isset($_GET['start']) ? (int)$_GET['start'] : 0;
					$limit = isset($_GET['limit']) ? (int)$_GET['limit'] : 15;
					$order = isset($_GET['sort']) ? " ORDER BY `{$_GET['sort']}` {$_GET['dir']}" : '';
					$where = $values = array();

					if (isset($_GET['status']) && in_array($_GET['status'], array(iaCore::STATUS_ACTIVE, iaCore::STATUS_INACTIVE)))
					{
						$where[] = '`status` = :status';
						$values['status'] = $_GET['status'];
					}

					if (isset($_GET['text']) && $_GET['text'])
					{
						$where[] = '(`name` LIKE :text OR `email` LIKE :text OR `url` LIKE :text OR `body` LIKE :text)';
						$values['text'] = '%' . $_GET['text'] . '%';
					}

					$where || $where[] = iaDb::EMPTY_CONDITION;

					$where = implode(' OR ', $where);
					$iaDb->bind($where, $values);

					$output = array(
						'total' => $iaDb->one(iaDb::STMT_COUNT_ROWS, $where),
						'data' => $iaDb->all(array('id', 'title', 'email', 'body', 'date', 'status', 'update' => 1, 'delete' => 1), $where . $order, $start, $limit)
					);
			}

			break;

		case iaCore::ACTION_DELETE:

			$output = $iaGrid->gridDelete($_POST, 'deleted');

			break;

		case iaCore::ACTION_EDIT:
		
			$output = $iaGrid->gridUpdate($_POST);
	}

	if (isset($output))
	{
		$iaView->assign($output);
	}
}

if (iaView::REQUEST_HTML == $iaView->getRequestType())
{
	$iaUsers = $iaCore->factory('users');	

	if (iaCore::ACTION_ADD == $pageAction || iaCore::ACTION_EDIT == $pageAction)
	{
		

		$id = 0;
		$questions_and_answers = array(
			'date' => date(iaDb::DATE_FORMAT),
			'lang' => IA_LANGUAGE,
			'status' => iaCore::STATUS_ACTIVE
		);

		if (iaCore::ACTION_EDIT == $pageAction)
		{
			$id = (int)$iaCore->requestPath[0];
			$questions_and_answers = $iaDb->row(iaDb::ALL_COLUMNS_SELECTION, "`id` = '{$id}'");
		}

		$iaCore->util();

		$questions_and_answers = array(
			'id' => isset($id) ? $id : 0,
			'title' => iaUtil::checkPostParam('title', $questions_and_answers),
			'email' => iaUtil::checkPostParam('email', $questions_and_answers),
			'body' => iaUtil::checkPostParam('body', $questions_and_answers),
			'date' => iaUtil::checkPostParam('date', $questions_and_answers),
			'status' => iaUtil::checkPostParam('status', $questions_and_answers)
		);

		if (isset($_POST['save']))
		{
			iaUtil::loadUTF8Functions('ascii', 'validation', 'bad', 'utf8_to_ascii');

			$error = false;
			$messages = array();

			$questions_and_answers['status'] = in_array($questions_and_answers['status'], array('active', 'approval')) ? $questions_and_answers['status'] : 'approval';
			$questions_and_answers['title'] = iaUtil::safeHTML($questions_and_answers['title']);
			$questions_and_answers['member_id'] = $iaUsers->getIdentity()->id;
			$questions_and_answers['body'] = iaUtil::safeHTML($questions_and_answers['body']);
			$questions_and_answers['name'] = $iaUsers->getIdentity()->fullname;
			$questions_and_answers['email'] = $iaUsers->getIdentity()->email;
			$questions_and_answers['date'] = iaSanitize::html($questions_and_answers['date']);

			$len = array('min' => $iaCore->get('questions_and_answers_min_len'), 'max' => $iaCore->get('questions_and_answers_max_len'));
			$body_len = utf8_strlen(trim(strip_tags($questions_and_answers['body'])));

			if (empty($questions_and_answers['title']))
			{
				$error = true;
				$messages[] = 'Title is empty';
			}

			if (!$error)
			{
				if (iaCore::ACTION_EDIT == $pageAction)
				{
					$questions_and_answers['id'] = $id;
					$iaDb->update($questions_and_answers);
					$messages[] = iaLanguage::get('saved');
				}
				else
				{	
					$id = $iaDb->insert($questions_and_answers);
					$messages[] = iaLanguage::get('questions_and_answers_added');
				}

				$iaView->setMessages($messages, $error ? iaView::ERROR : iaView::SUCCESS);

				if (isset($_POST['goto']))
				{
					$url = IA_ADMIN_URL . 'questions_and_answers/';
					iaUtil::post_goto(array(
						'add' => $url . 'add/',
						'list' => $url,
						'stay' => $url . 'edit/' . $id . '/',
					));
				}
				else
				{
					iaUtil::go_to(IA_ADMIN_URL . 'questions_and_answers/');
				}
			}

			$iaView->setMessages($messages, $error ? iaView::ERROR : iaView::SUCCESS);
		}

		$options = array('list' => 'go_to_list', 'add' => 'add_another_one', 'stay' => 'stay_here');
		$iaView->assign('goto', $options);

		$iaView->assign('questions', $questions_and_answers);
		$iaView->display('index');
	}
	else
	{
		$iaView->grid('_IA_URL_plugins/questions_and_answers/js/admin/index');
	}
}

$iaDb->resetTable();