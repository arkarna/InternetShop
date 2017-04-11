<?php
/* Smarty version 3.1.29, created on 2016-02-29 15:24:55
  from "/var/www/u0149883/data/www/zkmagaz.ru/shop/templates/home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56d43897ba9ec8_35667860',
  'file_dependency' => 
  array (
    'edfddb9c22340f3218d8c215a4862d27d069466a' => 
    array (
      0 => '/var/www/u0149883/data/www/zkmagaz.ru/shop/templates/home.tpl',
      1 => 1454602676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56d43897ba9ec8_35667860 ($_smarty_tpl) {
?>
	<?php
$_from = $_smarty_tpl->tpl_vars['goods']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
	<div class="till">
		<div class="till_image">
			<a href="?page=product&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
			<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
archive/site/goods/goods/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
">
			</a>
		</div>
		<h2 class="till_title">
			<a href="?page=product&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
		</h2>
		<h3 class="till_price"><span><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</span> рублей</h3>
		<div class="till_description">
			<p><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</p>
		</div>
		<div class="till_params">
			<h3><span class="till_count"><?php echo $_smarty_tpl->tpl_vars['item']->value['packing'];?>
</span> грамм</h3>
		</div>
		<div>
			<button style="min-width:175px;" onclick="open_bay('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
');" id="btn_bay<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="button" >В корзину</button>
		</div>
		<div  id="form_bay<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="form_bay" style="display:none;width: 200px;">
		<input style="width:45%;margin: 3px 0;" id="col<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" type="number" name="col" value="1">
		<input type="hidden" id="id_go_post<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" name="id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
		<button  class="button" style="width:45%; padding:0;" onclick="go_post(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);"name="ok_go_cart" >Ok</button>
		</div>
	</div>	
	<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
	<?php echo '<script'; ?>
 type="text/javascript">
	/* прикрепить событие submit к форме */
var a,b;
	function open_bay(a)
	{
		if($('#form_bay'+a).css('display')=='none')
		{
			$('.form_bay').hide();
			$('#form_bay'+a).show();
		}
		else
		{
			$('.form_bay').hide();
		}
	}
	function go_post(a)
	{
		$.post("<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
?page=productadd", { col: $('#col'+a).val(), id: $('#id_go_post'+a).val()})
			.done(function(data) {
				json = jQuery.parseJSON(data);
				console.log(json);
			});
		a=parseInt($('#gooding1').text());
		b=parseInt($('#gooding2').text());
		$('#gooding1').text(a+1);
		$('#gooding2').text(b+1);		
	}
	ScreenWidth = $(window).width();  

	if (ScreenWidth<720||screen.width<720) 
	{  
	<?php if ($_GET['c'] != '') {?>

		$('#content').show();
		$('#asides').hide();
		$('#mobile_back').show();
	<?php }?>
	}
	<?php echo '</script'; ?>
><?php }
}
