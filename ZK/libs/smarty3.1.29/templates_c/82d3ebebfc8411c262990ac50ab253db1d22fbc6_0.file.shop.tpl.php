<?php
/* Smarty version 3.1.29, created on 2016-02-29 15:24:55
  from "/var/www/u0149883/data/www/zkmagaz.ru/shop/shop.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56d438973503e3_42704803',
  'file_dependency' => 
  array (
    '82d3ebebfc8411c262990ac50ab253db1d22fbc6' => 
    array (
      0 => '/var/www/u0149883/data/www/zkmagaz.ru/shop/shop.tpl',
      1 => 1456742545,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:aside.tpl' => 1,
    'file:users/register.tpl' => 1,
    'file:users/restore.tpl' => 1,
    'file:users/login.tpl' => 1,
    'file:cart.tpl' => 1,
    'file:home_product.tpl' => 1,
    'file:static/delivery.tpl' => 1,
    'file:static/contacts.tpl' => 1,
    'file:static/rules.tpl' => 1,
    'file:users/profile.tpl' => 1,
    'file:static/conditions.tpl' => 1,
    'file:home.tpl' => 1,
  ),
),false)) {
function content_56d438973503e3_42704803 ($_smarty_tpl) {
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="page" style="display: block;">
<li id='full' class="mobile_li">
<a class="button mobile_back" href="?page=cart">Корзина(<small class="a_hover" id="gooding1"><?php echo $_smarty_tpl->tpl_vars['gooding']->value;?>
</small>)</a></li>
<div id="mobile_back" style="display:none">
<li class="mobile_li"><a class="button mobile_back"  href="?page=cart">Корзина(<small class="a_hover" id="gooding2"><?php echo $_smarty_tpl->tpl_vars['gooding']->value;?>
</small>)</a></li>
<li class="mobile_li"><a class="button mobile_back"  href="?c=">◄ К категориям</a></li>
</div>
<aside id="asides">
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:aside.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</aside><main> 

<content id="content">
<?php if ($_GET['page'] == 'register') {?>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:users/register.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } elseif ($_GET['page'] == 'restore') {?>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:users/restore.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } elseif ($_GET['page'] == 'login') {?>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:users/login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } elseif ($_GET['page'] == 'cart') {?>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } elseif ($_GET['page'] == 'product') {?>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:home_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } elseif ($_GET['page'] == 'delivery') {?>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:static/delivery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } elseif ($_GET['page'] == 'contacts') {?>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:static/contacts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } elseif ($_GET['page'] == 'rules') {?>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:static/rules.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } elseif ($_GET['page'] == 'profile') {?>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:users/profile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } elseif ($_GET['page'] == 'conditions') {?>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:static/conditions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } else { ?>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }?>
</content>
</main>
<footer>

</footer>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
ScreenWidth = $(window).width();  
	if (ScreenWidth<720||screen.width<720) 
	{  
	<?php if ($_GET['page'] != '') {?>
		$('#content').show();
		$('#asides').hide();
		$('#mobile_back').show();
	<?php }?> 
	$('#full').hide();
	}
	else
	{
	$('#full').show();
	$('#asides').show();
	}
<?php echo '</script'; ?>
><?php }
}
