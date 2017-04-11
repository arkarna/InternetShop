<?php
	error_reporting (E_ALL & ~E_NOTICE);
	define( 'check_arg', 1 );
	#############Цепляем базовый класс########
	require_once('core/lk.class');
	$lk = new lk;
	$db = $lk->start();
	if($lk->type == 'isadmin')
	{
		$_SESSION['template_directory'] = 'admin/templates';
		$templated = $lk->site_patch . $_SESSION['template_directory'].'/';
	}
	else
	{
		$_SESSION['template_directory'] = 'shop/templates';
		$templated = $lk->site_patch . $_SESSION['template_directory'].'/';
	}
	#########Смарти############
	require_once('libs/smarty3.1.29/Smarty.class.php');
	$template = new Smarty();
	$template->template_dir = $templated;
	$template->compile_dir = $lk->site_patch . 'libs/smarty3.1.29/templates_c/';
	$template->config_dir = $lk->site_patch . 'libs/smarty3.1.29/configs/';
	$template->cache_dir = $lk->site_patch . 'libs/smarty3.1.29/cache/';
	$template->caching = false;
	$template->debugging = false;
	
	if($lk->type == 'isadmin')
	{
		include "admin/admin.php";
	}
	else
	{
		include "shop/shop.php";
	}
	$template->assign("template_directory", $_SESSION['template_directory']); 
	$template->assign("user_id", $lk->user['id']);
	$template->assign("warning", $warning);
	$template->assign("error", $error); 
	$template->assign("success", $success); 
	$template->assign("user", $lk->user); 
	$template->assign("site_name", $lk->site_name); 
	$template->assign("site_url", $lk->site_url); 
	$template->display('index.tpl');
?>