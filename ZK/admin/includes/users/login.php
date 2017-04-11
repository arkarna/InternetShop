<?php
	date_default_timezone_set('Etc/UTC');
	$ip = $lk->GetRealIp();
	$check = new filter;
	$check->check_array = $_POST;
	$check->check_arrays($db);
	@session_start();
	if($_POST)
	{
		if(!empty($check->check_array['login']) and !empty($check->check_array['password']) and !empty($_POST['go']))
		{
			$login = trim(strip_tags($check->check_array['login']));
			$password = md5(md5($check->check_array['password']).$lk->adminkey);
			$sql_get_admin = "SELECT u.id, u.name, u.status FROM `admins` AS `u`WHERE  u.login = '".$login."' AND u.password ='".$password."'";
			$us = $db->query($sql_get_admin);
			if($us)
			{
				$user = $us->fetch_assoc();
				if(!empty($user['id']))
				{
					$user['adminkey'] = $lk->adminkey;
					$_SESSION['user'] = $user;
					header( 'Location: ?type=is-admin' ); 
				}
				else
				{
					$error = 'Неверный логин или пароль';
				}
			}
			else
			{
				echo "Critical Error";
			}
		}
		else
		{
			$error = 'Заполните все поля!';
		}	 
	}
		$template->assign("post", $check->check_array);
?>
