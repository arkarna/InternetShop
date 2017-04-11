<?php
$check = new filter;
$check->check_array = $_POST;
$check->check_arrays;
$select_history="SELECT * FROM purchase Where user_id=".$lk->user['id'];
$array_get_history = $db->query($select_history);
while($value_history = $array_get_history->fetch_assoc())
{
	$get_history[]=$value_history;
}







if(!empty($check->check_array['go_edit']))
{
	$update_users="UPDATE users SET 
	`name`='".$check->check_array['name']."',
	`lastname`='".$check->check_array['lastname']."',
	`phone`='".$check->check_array['phone']."',
	`birthday`='".$check->check_array['birthday']."' 
	WHERE id=".$lk->user['id'];
	if($db->query($update_users))
	{
		$success="Данные сохранены";
	}
}

$select_user="SELECT * FROM users Where id=".$lk->user['id']." limit 1";
$array_get_user = $db->query($select_user);
$userinfo =$array_get_user->fetch_assoc();


if(!empty($check->check_array['go_newpass']))
{
  if($userinfo['password']==(md5(md5($check->check_array['oldpass']))))
  {
	$update_pass="UPDATE users SET `password`='".md5(md5($check->check_array['newpass']))."' where id=".$lk->user['id'];
	$db->query($update_pass);
	 $success="Пароль изменён";
  }
  else
  {
   $error="Не верный старый пароль";
  }
}



$template->assign("success", $success);
$template->assign("error", $error);
$template->assign("userinfo", $userinfo);
$template->assign("get_history", $get_history);
?>
