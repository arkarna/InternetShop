<?php

$check = new filter;

	@session_start();
	
	if($_POST)
	{
		$check->check_array = $_POST;
		$check->check_arrays($db);
		if(!empty($check->check_array['email']) and !empty($check->check_array['password']) and !empty($_POST['go']))
		{
			$login = trim(strip_tags($check->check_array['email']));
			$password = md5(md5(trim(strip_tags($check->check_array['password']))));
			$sql = "SELECT * FROM `users` WHERE  email = '".$login."'  AND password ='".$password."'";
			$us = $db->query($sql);
			$user = $us->fetch_assoc();
			if(!empty($user['id']))
			{
				$_SESSION['user'] = $user;
				#$_SESSION['user']['director'] = '1'; #- когда будет директор
				$ip = $lk->GetRealIp();
				$sql_update_ip = 'update users set ip="'.$ip.'",date_login="'.date('Y-m-d H:s:i').'" where id='.$user['id'];
				$db->query($sql_update_ip);
				header('Location: http://zkmagaz.ru');
				}
			else
			{
				$error='Проверьте правильность введенных логина и пароля!';
			}
		}
		else
		{
			$template->assign('error_message','Проверьте правильность введенных логина и пароля!');
		}	 
	}
?>
