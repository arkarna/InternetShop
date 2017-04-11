<?php
/* Smarty version 3.1.29, created on 2016-02-29 15:24:55
  from "/var/www/u0149883/data/www/zkmagaz.ru/shop/templates/aside.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56d438973ce816_96575459',
  'file_dependency' => 
  array (
    '350c47c3c5bdde6818970cb70f02e2d567845633' => 
    array (
      0 => '/var/www/u0149883/data/www/zkmagaz.ru/shop/templates/aside.tpl',
      1 => 1454588356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56d438973ce816_96575459 ($_smarty_tpl) {
?>


<?php
$_from = $_smarty_tpl->tpl_vars['category']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$__foreach_item_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
	<li onclick="opensub(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);" id="categor<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="categor"><a ><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></li>
	<ul id="subcategor<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"  class="subcategor">
	<li><a onclick="back();" style="font-size:22px;background:#FF7300;color:#fff;">◄</a></li>
	<?php
$_from = $_smarty_tpl->tpl_vars['item']->value['subcategory'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_items_1_saved_item = isset($_smarty_tpl->tpl_vars['items']) ? $_smarty_tpl->tpl_vars['items'] : false;
$_smarty_tpl->tpl_vars['items'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['items']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['items']->value) {
$_smarty_tpl->tpl_vars['items']->_loop = true;
$__foreach_items_1_saved_local_item = $_smarty_tpl->tpl_vars['items'];
?>
		<li><a href="?c=<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" id="subcategory_item<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['items']->value['title'];?>
</a></li>
	<?php
$_smarty_tpl->tpl_vars['items'] = $__foreach_items_1_saved_local_item;
}
if ($__foreach_items_1_saved_item) {
$_smarty_tpl->tpl_vars['items'] = $__foreach_items_1_saved_item;
}
?>
	</ul>
<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
if ($__foreach_item_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_item_0_saved_key;
}
?>

<?php echo '<script'; ?>
 type="text/javascript">

	function opensub(a)
	{
		if($('#subcategor'+a).css('display')=='none')
		{
			$('#subcategor'+a).show(0);
			$('.categor').css('position','relative')
			$('.categor').animate({'left':-1000},500);
			$('#subcategor'+a).animate({'top':321},500);
			//$('.categor').hide();
		}
		else
		{
			$('.subcategor').hide();
		}
	}
	function back()
	{
		$('.subcategor').hide();
		$('.categor').show();
		$('.categor').animate({'left':0},500);
	}
	
	<?php if ($_GET['c'] != '') {?>
		$('#subcategory_item<?php echo $_GET['c'];?>
').parents('ul').show(0);
		$('.categor').css('position','relative')
		$('.categor').animate({ 'left':-1000 },500);
		$('#subcategory_item<?php echo $_GET['c'];?>
').parents('ul').animate({ 'top':321 },500);
	<?php } else { ?>
	$('#mobile_back').hide();
	<?php }
echo '</script'; ?>
>

<?php }
}
