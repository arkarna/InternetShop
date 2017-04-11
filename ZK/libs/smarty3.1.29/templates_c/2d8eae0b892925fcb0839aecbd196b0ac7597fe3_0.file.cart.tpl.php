<?php
/* Smarty version 3.1.29, created on 2016-03-03 09:11:55
  from "/var/www/u0149883/data/www/zkmagaz.ru/shop/templates/cart.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56d7d5ab6962b7_46426821',
  'file_dependency' => 
  array (
    '2d8eae0b892925fcb0839aecbd196b0ac7597fe3' => 
    array (
      0 => '/var/www/u0149883/data/www/zkmagaz.ru/shop/templates/cart.tpl',
      1 => 1456741041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56d7d5ab6962b7_46426821 ($_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['all_summ']->value <> '') {?>
<h1>ТОВАРЫ В ВАШЕЙ КОРЗИНЕ</h1>
	<?php
$_from = $_smarty_tpl->tpl_vars['cart_goods']->value;
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
	<span>
	<p class="cart_list"><?php echo $_smarty_tpl->tpl_vars['goods']->value[$_smarty_tpl->tpl_vars['key']->value]['title'];?>
(<?php echo $_smarty_tpl->tpl_vars['goods']->value[$_smarty_tpl->tpl_vars['key']->value]['description'];?>
) <span><button onclick="minus(<?php echo $_smarty_tpl->tpl_vars['goods']->value[$_smarty_tpl->tpl_vars['key']->value]['price'];?>
,<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
)" class="button" style="width:auto;margin-top:-5px;">-</button><a id="col<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a><button class="button" onclick="plus(<?php echo $_smarty_tpl->tpl_vars['goods']->value[$_smarty_tpl->tpl_vars['key']->value]['price'];?>
,<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
)" style="width:auto;margin-top:-5px;">+</button></span></p>
	</span>
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
	<p class="cart_list">Общая сумма<span><a id="allsumm"><?php echo $_smarty_tpl->tpl_vars['all_summ']->value;?>
</a></span></p>
	<?php if ($_smarty_tpl->tpl_vars['signaturevalue']->value <> '') {?>
    <form id="robokassa" action='https://merchant.roboxchange.com/Index.aspx' method='post'>
    <?php } else { ?>
    <form method='post' style="background:white;">
    <?php }?>
    <input type='hidden' name='MrchLogin' value='zkmagaz'>
    <input type='hidden' name='OutSum' id='allsummform' value='<?php echo $_smarty_tpl->tpl_vars['all_summ']->value;?>
'>
    <input type='hidden' name='InvId' value='<?php echo $_smarty_tpl->tpl_vars['InvId']->value;?>
'>
    <input type='hidden' name='Desc' value='<?php
$_from = $_smarty_tpl->tpl_vars['cart_goods']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_1_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$__foreach_item_1_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_1_saved_local_item = $_smarty_tpl->tpl_vars['item'];
echo $_smarty_tpl->tpl_vars['goods']->value[$_smarty_tpl->tpl_vars['key']->value]['title'];?>
,<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved_local_item;
}
if ($__foreach_item_1_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved_item;
}
if ($__foreach_item_1_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_item_1_saved_key;
}
?>'>
    <input type='hidden' name='SignatureValue' value='<?php echo $_smarty_tpl->tpl_vars['signaturevalue']->value;?>
'>
    <input type='hidden' name='Shp_item' value='<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
'>
    <input type='hidden' name='IncCurrLabel' value=''>
    <input type='hidden' name='Culture' value='ru'>
    <input type='hidden' name='IsTest' value='1'>
	<?php if ($_smarty_tpl->tpl_vars['signaturevalue']->value <> '') {?>
    <input class="button" type='submit' value='Оплатить'>
    <?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['user']->value['id'] == '') {?>
    <h1>Введите контактые данные</h1>
    <input type='text' placeholder="email" name='email' required value=''>
    <input type='text' placeholder="Телефон" name='phone' required value=''>	
    <?php }?>
    <input name="check" class="button" type='submit' value='Оплатить'> 
    <?php }?>
    </form>


	<form method="post" style="background:white;">
	<input type="submit" name="cancel" class="button" value="Очистить корзину">
	</form>
<?php } else { ?>
	<p class="cart_list"><h1>Корзина пуста</h1></p>
<?php }?>
	<?php echo '<script'; ?>
 type="text/javascript">

  $(document).ready(function go(){
    if('<?php echo $_smarty_tpl->tpl_vars['signaturevalue']->value;?>
'!='')
    {
		setTimeout($('#robokassa').submit(), 2000)
    }; 
});

	function minus(summ,i)
	{
		if(($('#col'+i).text()*1)>0)allsummform
		{
			$('#col'+i).text(($('#col'+i).text()*1)-1);
			$('#allsumm').text((($('#allsumm').text()*1)-summ).toFixed(2));
			$('#allsummform').val((($('#allsummform').val()*1)-summ).toFixed(2));
			$.post("<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
?page=productadd", { minus:1, id:i})
			.done(function(data) {
				json = jQuery.parseJSON(data);
				console.log(json);
			});	
		}
		
	}
	function plus(summ,i)
	{
			$('#col'+i).text(($('#col'+i).text()*1)+1);
			$('#allsumm').text((($('#allsumm').text()*1)+summ).toFixed(2));
			$('#allsummform').val((($('#allsummform').val()*1)+summ).toFixed(2));
			$.post("<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
?page=productadd", { plus: 1, id:i})
			.done(function(data) {
				json = jQuery.parseJSON(data);
				console.log(json);
			});
	}



	<?php echo '</script'; ?>
><?php }
}
