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

if (iaView::REQUEST_JSON == $iaView->getRequestType())
{
	$output = array();
	$output['status'] = $_POST['status'];

	if (isset($_POST['status']) && 'connected' == $_POST['status'] && isset($_POST['token']) && $_POST['token'] == $iaCore->get('fb_app_secret'))
	{
		$iaUtil = iaCore::util();
		$iaUsers = $iaCore->factory('users');

		$iaDb->setTable(iaUsers::getTable());

		$fbUser = $_POST['fb_user'];

		$userData = $iaDb->row_bind(iaDb::ALL_COLUMNS_SELECTION, '`fb_id`= :id', array('id' => (int)$fbUser['id']));

		if (empty($userData))
		{
			$username = $fbUser['username'];

			if ($iaDb->exists("`username` = '" . $username . "'") || empty($username))
			{
				$username = 'fb_' . $fbUser['id'];
			}

			$userData = array(
				'fb_id' => $fbUser['id'],
				'usergroup_id' => iaUsers::MEMBERSHIP_REGULAR,
				'username' => $username,
				'fullname' => $fbUser['name'],
				'password' => md5(rand() . rand()),
				'email' => $fbUser['email'],
				'status' => iaCore::STATUS_ACTIVE
			);

			$userData['id'] = $iaDb->insert($userData, array('date_reg' => iaDb::FUNCTION_NOW));

			$field = $iaDb->row(iaDb::ALL_COLUMNS_SELECTION, "`name` = 'avatar' AND `item` = 'members'", 'fields');

			if (!empty($field['folder_name']))
			{
				if (!is_dir( IA_UPLOADS . $field['folder_name']))
				{
					mkdir( IA_UPLOADS . $field['folder_name'] );
				}

				$path = $field['folder_name'] . IA_DS;
			}
			else
			{
				$path = iaUtil::getAccountDir();
			}

			$token = $field['file_prefix'] . iaUtil::generateToken();

			$field['image_width'] = $field['image_width'] ? $field['image_width'] : 300;
			$field['image_height'] = $field['image_height'] ? $field['image_height'] : 300;

			$sourcecode = file_get_contents($_POST['avatar_url']);
			$savefile = fopen(IA_UPLOADS . $path . 'fb_avatar.jpg', 'w');
			fwrite($savefile, $sourcecode);
			fclose($savefile);

			$file = array(
				'type' => 'image/jpeg',
				'tmp_name' => IA_UPLOADS . $path . 'fb_avatar.jpg'
			);

			$imageInfo = array(
				'image_width' => $iaCore->get('thumb_w'),
				'image_height' => $iaCore->get('thumb_h'),
				'thumb_width' => $iaCore->get('thumb_w'),
				'thumb_height' => $iaCore->get('thumb_h'),
				'resize_mode' => 'crop'
			);

			$iaPicture = $iaCore->factory('picture');

			$avatar = array(
				'title'	=> '',
				'path'	=> $iaPicture->processImage($file, $path, $token, $imageInfo)
			);
			$avatar['path'] = str_replace('~.', '.', $avatar['path']);

			$iaDb->update(array('avatar' => serialize($avatar)), "`id` = " . $userData['id']);

			unlink(IA_UPLOADS . $path . 'fb_avatar.jpg');
		}

		$iaUsers->getAuth($userData['id']);

		$iaDb->resetTable();
	}
	else
	{
		$output['status'] = 'error';
	}

	$iaView->assign($output);
}

if (iaView::REQUEST_HTML == $iaView->getRequestType())
{
	$iaView->disableLayout();
	$iaView->set('nodebug', 1);

	$cache_expire = 60 * 60 * 24 * 365;
	header("Pragma: public");
	header("Cache-Control: max-age=" . $cache_expire);
	header('Expires: ' . gmdate('D, d M Y H:i:s', time() + $cache_expire) . ' GMT');

	echo $iaCore->iaSmarty->fetch(IA_PLUGINS . 'facebook/templates/channel.tpl');

	$iaView->display('none');
}