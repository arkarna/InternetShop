<?php
/* Smarty version 3.1.29, created on 2016-03-02 02:00:07
  from "/var/www/u0149883/data/www/zkmagaz.ru/shop/templates/home_product.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56d61ef72d3668_59101614',
  'file_dependency' => 
  array (
    '4372bf80122ba537c7c15b521c28aa1de756920e' => 
    array (
      0 => '/var/www/u0149883/data/www/zkmagaz.ru/shop/templates/home_product.tpl',
      1 => 1454603805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56d61ef72d3668_59101614 ($_smarty_tpl) {
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
		<h2 class="product_title">
			<a><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
		</h2>
		<div class="product_image" style="height: auto;">
			<a href="?page=product&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
			<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
archive/site/goods/goods/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
">
			</a>
			<h3 style="text-align: center;"><span class="till_count"><?php echo $_smarty_tpl->tpl_vars['item']->value['packing'];?>
</span> грамм</h3>
		</div>
		<div class="product_btn">
			<button onclick="open_bay('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
');" class="button" >В корзину</button>
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
			<h3 class="till_price"><span><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</span> рублей</h3>
		</div>


			
	
		<div class="till_description">
			<p><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</p>
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
	function open_bay(a)
	{
		if($('#form_bay'+a).css('display')=='none')
		{
			$('.form_bay').hide(300);
			$('#form_bay'+a).show(300);
		}
		else
		{
			$('.form_bay').hide(300);
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
	<?php echo '</script'; ?>
><?php }
}
