<?php
/* Smarty version 3.1.29, created on 2016-02-29 15:24:55
  from "/var/www/u0149883/data/www/zkmagaz.ru/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56d438972c1556_09611754',
  'file_dependency' => 
  array (
    '535de38fe089df59a89c8afea0d6abe82e42d621' => 
    array (
      0 => '/var/www/u0149883/data/www/zkmagaz.ru/index.tpl',
      1 => 1454339387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/admin.tpl' => 1,
    'file:shop/shop.tpl' => 1,
  ),
),false)) {
function content_56d438972c1556_09611754 ($_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
	<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
favicon.ico" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, minimum-scale=0.55, user-scalable=yes" />
	<title><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
</title>
	<meta charset="utf-8" />
	<link href='https://fonts.googleapis.com/css?family=PT+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;
echo $_smarty_tpl->tpl_vars['template_directory']->value;?>
/css/style.css?ver=1.4">
	<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-1.7.1.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;
echo $_smarty_tpl->tpl_vars['template_directory']->value;?>
/js/main.js"><?php echo '</script'; ?>
>
 </head>
<body>
<?php if ($_GET['type'] == 'is-admin') {?>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } else { ?>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:shop/shop.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }?>
</body>
</html><?php }
}
