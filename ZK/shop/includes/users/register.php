<?php
$check = new filter;
$check->check_array = $_POST;
$check->check_arrays;
if (!empty($_POST['register_go'])) 
{
	if ($check->check_array['pass']==$check->check_array['pass_confirm']) 
	{
		$sql_check_email = "SELECT `id` FROM `users` where `email`= '".$check->check_array['email']."'";
		$check_email= $db->query($sql_check_email);
		if(!empty($check_email->num_rows))
		{	
			$error = 'Пользователь с данным email уже зарегистрирован!';
		}
		else
		{
				$sql_insert_user="INSERT INTO `users`
					(
					`email`,
					`password`, 
					`lastname`,
					`name`,
					`birthday`, 
					`phone`,
					`date`,
					`ip`
					) 
					VALUES 
					(
					'".$check->check_array['email']."',
					'".md5(md5($check->check_array['pass']))."',
					'".$check->check_array['lastname']."',
					'".$check->check_array['name']."',
					'".$check->check_array['birthday']."',
					'".$check->check_array['phone']."',
					'".$lk->date."',
					'".$lk->GetRealIp()."'
					)";
				if ($db->query($sql_insert_user))
				{
					$success="регистрация завершена";
					header("Location: http://zkmagaz.ru");
				}
				else
				{
					$error="Критическая ошибка";
					echo $sql_insert_user;
				}
		}
		
	}
	else
	{
		$error="пароли не совпадают";
	}
	
}
?>