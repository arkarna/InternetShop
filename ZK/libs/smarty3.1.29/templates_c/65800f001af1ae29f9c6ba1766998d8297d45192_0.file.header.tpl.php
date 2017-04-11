<?php
/* Smarty version 3.1.29, created on 2016-02-29 15:24:55
  from "/var/www/u0149883/data/www/zkmagaz.ru/shop/templates/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56d43897382da5_69319446',
  'file_dependency' => 
  array (
    '65800f001af1ae29f9c6ba1766998d8297d45192' => 
    array (
      0 => '/var/www/u0149883/data/www/zkmagaz.ru/shop/templates/header.tpl',
      1 => 1456742279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56d43897382da5_69319446 ($_smarty_tpl) {
?>
<header>
<div style="text-align: center;margin: 0 auto;">
<div class="header_left_block">
	<img style="width: 150px;" src="/shop/templates/images/logo.png">
</div><div class="header_right_block">
	<h1>Весточка с дома</h1>
	<h4>Магазин товаров для заключенных</h4>
</div>
</div>
</header>
<nav>
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">Магазин</a></li>
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
?page=delivery">Доставка</a></li>
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
?page=contacts">Контакты</a></li>
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
?page=rules">Правила</a></li>
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
?page=conditions">Условия</a></li>
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
?page=cart">Корзина</a></li>
	<?php if ($_smarty_tpl->tpl_vars['user']->value['id'] == '') {?>
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
?page=login">Вход</a></li>
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
?page=register">Регистрация</a></li>
	<?php } else { ?>
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
?page=profile">Мой кабинет</a></li>
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
?page=exit">Выход</a></li>
	<?php }?>
</nav><?php }
}
