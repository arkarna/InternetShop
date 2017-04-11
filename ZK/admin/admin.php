<?php
if($lk->user['adminkey'] != $lk->adminkey)
{
	print_r($lk->user);
	include "admin/includes/users/login.php";
}
else
{
	####Подключаем страниц####
	switch ($lk->page) 
	{
		case 'category':
			include "admin/includes/goods/category.php";
			break;
		case 'subcategory':
			include "admin/includes/goods/subcategory.php";
			break;
		case 'goods':
			include "admin/includes/goods/goods.php";
			break;
		case 'exit':
			unset($_SESSION['user']);
			unset($_SESSION);
			header('Location: /?type=is-admin');
			break;
		default:
			include "admin/includes/home.php";
			break;
	}
}
?>
