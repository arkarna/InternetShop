<?php
$gooding=count($_SESSION['product']);
$template->assign('gooding' ,$gooding);

	####Подключаем страниц####
include "includes/aside.php";
	switch ($lk->page) 
	{
		case 'register':
			include "includes/users/register.php";
			break;
		case 'login':
			include "includes/users/login.php";
			break;
		case 'exit':
			unset($_SESSION['user']);
			unset($_SESSION);
			header('Location: /');
			break;
		case 'cart':
			include "includes/cart.php";
			break;
		case 'profile':
			include "includes/users/profile.php";
			break;
		case 'product':
			include "includes/home_product.php";
			break;
		case 'productadd':
			include "includes/product_add.php";
			exit;
		case 'result':
			include "server/result_robo.php";
			exit;
		case 'success':
			include "server/success_robo.php";
			exit;
		case 'fail':
			include "server/fail_robo.php";
			exit;
		default:
			include "includes/home.php";
			break;
	}
	$template->assign("user", $lk->user);
	$template->assign("array_pay_today", $array_pay_today);
	$template->assign("site_url", $lk->site_url); 
?>