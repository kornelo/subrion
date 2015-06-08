<?php
//##copyright##

$iaDb->setTable('questions_and_answers');

if (iaView::REQUEST_HTML == $iaView->getRequestType())
{
	$error = false;
	$messages = array();

	$iaQuestions_and_answers = $iaCore->factoryPlugin('questions_and_answers', iaCore::FRONT);

	if (iaCore::ACTION_ADD == $pageAction)
	{
		iaBreadcrumb::replaceEnd(iaLanguage::get('add_new_question'), IA_URL . 'questions_and_answers/add/');

		$iaView->title(iaLanguage::get('add_new_question'));

		if ($iaCore->get('questions_and_answers_authorized', true) && !iaUsers::hasIdentity())
		{
			return iaView::accessDenied(iaLanguage::getf('submission_is_not_allowed_for_guests', array('base_url' => IA_URL)));
		}
	}
	else
	{
		iaLanguage::set('no_questions_and_answers_yet', iaLanguage::get('no_questions_and_answers_yet', array('url' => IA_URL)));

		$num_per_page = $iaCore->get('questions_and_answers_num_on_page');

		$page = isset($_GET['page']) ? (int)$_GET['page'] : 0;
		$page = ($page < 1) ? 1 : $page;
		$start = ($page - 1) * $num_per_page;

		$topics = $iaDb->all('SQL_CALC_FOUND_ROWS *', " `status`='active' ORDER BY `last_answer` DESC", $start, $num_per_page);
		foreach ($topics as &$topic)
		{
			$topic['answers_count'] = $iaDb->keyvalue('`topic_id`, COUNT(*)', "`topic_id` = '{$topic['id']}'", 'questions_and_answers_otvety');
			$topic['avatar'] = $iaDb->one('avatar', "`id` = '{$topic['member_id']}'", 'members');
		}
		foreach ($topics as &$topic)
		{
			$topic['answers_count'] = $topic['answers_count'][$topic['id']];
		}

		foreach ($topics as &$topic)
		{
			mb_internal_encoding("UTF-8");
			$topic['avatar_letter'] = mb_substr($topic['name'], 0, 1);
		}

		$total_questions_and_answers = $iaDb->foundRows();

		$iaView->assign('topics', $topics);
		$iaView->assign('total_questions_and_answers', $total_questions_and_answers);
		$iaView->assign('aTemplate', IA_URL . 'questions_and_answers/?page={page}');
		$iaView->assign('message', $messages);
	}

	$len = array('min' => $iaCore->get('questions_and_answers_min_len'), 'max' => $iaCore->get('questions_and_answers_max_len')); // min and max message length

	if (isset($_POST['body']))
	{
		iaUtil::loadUTF8Functions();

		if (iaUsers::hasIdentity())
		{
			$data = array();
			$data['name'] = iaUsers::getIdentity()->fullname;
			$data['email'] = iaUsers::getIdentity()->email;
			$data['member_id'] = iaUsers::getIdentity()->id;
			$data['status'] = iaCore::STATUS_ACTIVE;
			$data['date'] = date(iaDb::DATETIME_FORMAT);
			$data['avatar_color'] = rand(5,200);
			$data['last_answer'] = date(iaDb::DATETIME_FORMAT);
			$data['title'] = iaSanitize::html($_POST['title']);
			$data['send_mail'] = iaSanitize::html($_POST['send_mail'] ? $_POST['send_mail'] : 0);
			$data['body'] = iaSanitize::html($_POST['body']);
			$body_len = utf8_strlen($data['body']);

			if (empty($data['title']))
			{
				$error = true;
				$messages[] = iaLanguage::get('incorrect_title');
			}

			if (empty($data['body']))
			{
				$error = true;
				$messages[] = iaLanguage::get('incorrect_body');
			}

			if (isset($data['title']))
			{
				$data['alias'] = $iaQuestions_and_answers->titleAlias($data['title']);
			}

		}
		else
		{
			$data = array();

			$data['name'] = iaSanitize::html($_POST['name']);
			$data['email'] = iaSanitize::html($_POST['email']);
			$data['member_id'] = 0;
			$data['status'] = $iaCore->get('questions_and_answers_approve') ? iaCOre::STATUS_ACTIVE : iaCore::STATUS_INACTIVE;
			$data['date'] = date(iaDb::DATETIME_FORMAT);
			$data['avatar_color'] = rand(5,200);
			$data['send_mail'] = iaSanitize::html($_POST['send_mail'] ? $_POST['send_mail'] : 0);
			$data['last_answer'] = date(iaDb::DATETIME_FORMAT);
			$data['title'] = iaSanitize::html($_POST['title']);
			$data['body'] = iaSanitize::html($_POST['body']);
			$body_len = utf8_strlen($data['body']);

			if (empty($data['name']))
			{
				$error = true;
				$messages[] = iaLanguage::get('incorrect_fullname');
			}

			if (empty($data['title']))
			{
				$error = true;
				$messages[] = iaLanguage::get('incorrect_title');
			}

			// if ($len['min'] > $body_len || $len['max'] < $body_len)
			// {
			// 	$error = true;
			// 	$messages[] = iaLanguage::getf('testimon_body_len', array('num' => $len['min'] . '-' . $len['max']));
			// }

			if (!iaUsers::hasIdentity() && !iaValidate::isCaptchaValid())
			{
				$error = true;
				$messages[] = iaLanguage::get('confirmation_code_incorrect');
			}

			if (!iaValidate::isEmail($data['email']))
			{
				$error = true;
				$messages[] = iaLanguage::get('error_email_incorrect');
			}

			if (isset($data['title']))
			{
				$data['alias'] = $iaQuestions_and_answers->titleAlias($data['title']);
			}

		}

		if (!$error)
		{
			$res = $iaDb->insert($data);
			$iaView->setMessages(iaLanguage::get('questions_and_answers_added'), iaView::SUCCESS);
//			iaUtil::go_to(IA_URL . 'questions_and_answers/');
			iaUtil::redirect(
				'Thank you!',
				'Your question has been added. You will be redirected.',
				IA_URL . 'questions_and_answers/'
			);
		}
	}
	if (isset($iaCore->requestPath[0]))
	{
		$id = (int)$iaCore->requestPath[0];

		$iaQuestions_and_answers->incrementViewsCounter($id);

		if (!$id)
		{
			return iaView::errorPage(iaView::ERROR_NOT_FOUND);
		}
		$topic = $iaDb->row(iaDb::ALL_COLUMNS_SELECTION, "`id` = '{$id}'");
		$topic['avatar'] = $iaDb->one('avatar', "`id` = '{$topic['member_id']}'", 'members');
		mb_internal_encoding("UTF-8");
		$topic['avatar_letter'] = mb_substr($topic['name'], 0, 1);

		$topic_answers = $iaDb->all(iaDb::ALL_COLUMNS_SELECTION, "`topic_id` = '{$id}'", null, null, 'questions_and_answers_otvety');
		foreach ($topic_answers as &$answers)
		{
			$answers['avatar'] = $iaDb->one('avatar', "`id` = '{$answers['member_id']}'", 'members');
		}

		foreach ($topic_answers as &$answers)
		{
			mb_internal_encoding("UTF-8");
			$answers['avatar_letter'] = mb_substr($answers['member'], 0, 1);
		}

		iaBreadcrumb::toEnd($topic['title']);
		$iaView->title(iaSanitize::tags($topic['title']));

		$iaView->assign('topic', $topic);
		$iaView->assign('topic_answers', $topic_answers);

		if (isset($_GET['del']))
		{
			$iaDb->delete("`id` = '{$_GET['post_id']}'", 'questions_and_answers_otvety');
			iaUtil::redirect(
				'Thank you!',
				'Your answer has been deleted. You will be redirected.',
				IA_URL . 'questions_and_answers/' . $topic['id'] . '-' . $topic['alias']
			);

		}

		if (isset($_POST['intopic_form']))
		{
			iaUtil::loadUTF8Functions();
			if (iaUsers::hasIdentity())
			{
				$data = array();
				$data['member'] = iaUsers::getIdentity()->fullname;
				$data['topic_id'] = $id;
				$data['member_id'] = iaUsers::getIdentity()->id;
				$data['avatar_color'] = rand(5,200);
				$data['email'] = iaUsers::getIdentity()->email;
				$data['status'] = iaCOre::STATUS_ACTIVE;
				$data['date'] = date(iaDb::DATETIME_FORMAT);
				$data['body'] = iaSanitize::html($_POST['intopic_body']);
				$body_len = utf8_strlen($data['body']);

				if (empty($data['body']))
				{
					$error = true;
					$messages[] = iaLanguage::get('incorrect_body');
				}

				if (!$error)
				{
					if (1 == $topic['send_mail'])
					{

						$mess = 'Hi ' . $topic['name'] . ',<br>'
						. 'You got the answer to your question';

						$iaMailer = $iaCore->factory('mailer');
						$iaMailer->addAddress($topic['email']);
						$iaMailer->FromName = 'Questions and Answers';
						$iaMailer->Subject = 'You got the answer to your question';
						$iaMailer->Body = $mess;
						$result = $iaMailer->send();

					}

					$iaDb->insert($data, null, 'questions_and_answers_otvety');

					$iaDb->update(array('last_answer' => date(iaDb::DATETIME_FORMAT)), "`id` = '{$id}'", null, "questions_and_answers");

					iaUtil::redirect(
						'Thank you!',
						'Your answer has been added. You will be redirected..',
						IA_URL . 'questions_and_answers/' . $topic['id'] . '-' . $topic['alias']
					);
				}
			}
			else
			{
				$data = array();
				$data['member'] = iaSanitize::html($_POST['intopic_name']);
				$data['email'] = iaSanitize::html($_POST['intopic_email']);
				$data['avatar_color'] = rand(5,200);
				$data['member_id'] = 0;
				$data['topic_id'] = $id;
				$data['status'] = $iaCore->get('questions_and_answers_approve') ? iaCOre::STATUS_ACTIVE : iaCore::STATUS_INACTIVE;
				$data['date'] = date(iaDb::DATETIME_FORMAT);
				$data['body'] = iaSanitize::html($_POST['intopic_body']);
				$body_len = utf8_strlen($data['body']);

				if (empty($data['member']))
				{
					$error = true;
					$messages[] = iaLanguage::get('incorrect_fullname');
				}

				if (!iaUsers::hasIdentity() && !iaValidate::isCaptchaValid())
				{
					$error = true;
					$messages[] = iaLanguage::get('confirmation_code_incorrect');
				}

				if (!iaValidate::isEmail($data['email']))
				{
					$error = true;
					$messages[] = iaLanguage::get('error_email_incorrect');
				}

				if (!$error)
				{
					if (1 == $topic['send_mail'])
					{
						$mess = 'Hi ' . $topic['name'] . ',<br>'
						. 'You got the answer to your question';

						$iaMailer = $iaCore->factory('mailer');
						$iaMailer->addAddress($topic['email']);
						$iaMailer->FromName = 'Questions and Answers';
						$iaMailer->Subject = 'You got the answer to your question';
						$iaMailer->Body = $mess;
						$result = $iaMailer->send();
					}

					$iaDb->insert($data, null, 'questions_and_answers_otvety');
					$iaDb->update(array('last_answer' => date(iaDb::DATETIME_FORMAT)), "`id` = '{$id}'", null, "questions_and_answers");
					iaUtil::redirect(
						'Thank you!',
						'Your answer has been added. You will be redirected.',
						IA_URL . 'questions_and_answers/' . $topic['id'] . '-' . $topic['alias']
					);
				}
			}
		}
	}
	$iaView->assign('authorized_member', $iaCore->get('questions_and_answers_authorized'));
}
$iaDb->resetTable();
$iaView->setMessages($messages);
$iaView->display('index');
