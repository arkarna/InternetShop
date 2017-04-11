<?php
/* Smarty version 3.1.29, created on 2016-02-29 15:49:45
  from "/var/www/u0149883/data/www/zkmagaz.ru/shop/templates/users/profile.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56d43e69233064_30944325',
  'file_dependency' => 
  array (
    '26195b757fd5c497d17101c2e02451478c9cef01' => 
    array (
      0 => '/var/www/u0149883/data/www/zkmagaz.ru/shop/templates/users/profile.tpl',
      1 => 1456750156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56d43e69233064_30944325 ($_smarty_tpl) {
?>

<button onclick="$('.hidden').hide();$('#profile').show();" class="button" style="display: inline-block;width: 49%;">Профиль</button>
<button onclick="$('.hidden').hide();$('#history').show();" class="button" style="display: inline-block;width: 49%;">История</button>
<h1 style="text-align: center; color: red; font-size: 32px; font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h1>
<h1 style="text-align: center; color: green; font-size: 32px; font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</h1>
<div id="profile" class="profile hidden" style="margin: 70px;">
	<h1 style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['userinfo']->value['lastname'];?>
</h1>
	<p>Email: <?php echo $_smarty_tpl->tpl_vars['userinfo']->value['email'];?>
</p>
	<p>Телефон: <?php echo $_smarty_tpl->tpl_vars['userinfo']->value['phone'];?>
</p>
	<p>Дата рождения: <?php echo $_smarty_tpl->tpl_vars['userinfo']->value['birthday'];?>
</p>
	<button onclick="$('.hidden').hide();$('#edit').show();" class="button" style="display: inline-block;width: 45%;">Редактировать</button>
	<button onclick="$('.hidden').hide();$('#new_pass').show();" class="button" style="display: inline-block;width: 45%;">Смена пароля</button>
</div>


<div style="margin-top: 25px; display: none;" id="edit" class="hidden">
		<h1 style="text-align: center;">Редактирование</h1>
		<form method="post" style="background: #F3F3F3;">
		<input type="text" name="name" placeholder="Имя" required value="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['name'];?>
"/>
		<input type="text" name="lastname" placeholder="Фамилия" required value="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['lastname'];?>
"/>
		<input type="text" name="phone" placeholder="Телефон" required value="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['phone'];?>
"/>
		<input type="date" name="birthday" placeholder="День рождения" required value="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['birthday'];?>
"/>
		<input onclick="$('.hidden').hide();$('#profile').show();"  style="display: inline-block; width: 45%" type="submit" class="button" name="go_edit" value="Сохранить">
		<button onclick="$('.hidden').hide();$('#profile').show();" class="button" style="display: inline-block; width: 45%;">Отмена</button>
		</form>
</div>

<div style="margin-top: 25px; display: none;" id="new_pass" class="hidden">
		<h1 style="text-align: center;">Смена пароля</h1>
		<form method="post" onsubmit="return pre_submit();" style="background: #F3F3F3;">
		<input type="password" name="oldpass" placeholder="Старый пароль" required/>
		<input type="password" id="pass" name="newpass" placeholder="Новый пароль" required/>
		<input type="password" id="pass_confirm" name="pass_confirm" placeholder="Повторите новый пароль" required/>
		<p id="pass_info" ></p>
		<input onclick="$('.hidden').hide();$('#profile').show();" style="display: inline-block; width: 45%" type="submit" class="button" name="go_newpass" value="Сохранить">
		<button onclick="$('.hidden').hide();$('#profile').show();" class="button" style="display: inline-block; width: 45%;">Отмена</button>
		</form>
</div>

<div id="history" class="hidden" style="margin-top: 20px; display: none;" >
	<table style="font-size: 17px;
font-weight: bold;">
	<tr>
		<td>id</td>
		<td>сумма</td>
		<td>дата</td>
		<td>статус</td>
	</tr>
<?php
$_from = $_smarty_tpl->tpl_vars['get_history']->value;
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
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['item']->value['summ'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['item']->value['date_create'];?>
</td>
		<td><?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == 1) {?>
			<p style="color:blue">Ожидание оплаты</p>
			<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['status'] == 2) {?>
			<p style="color: green">Оплачен</p>
			<?php } else { ?>
			<p style="color: red">Отклонён</p>
			<?php }?>
		</td>
	</tr>
<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
	</table>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
var a;
	function pre_submit()
	{
		if ($('.required').val()=='')
		{
			$('.required').css('border','1px solid red');
			$('#valid').text('заполните все поля');
			return false;
		}
		if(a==1)
		{
			return false;
		}
		else if(a==1)
		{
			return false;
		}
		else
		{
			return true;
		}
	};


    $(document).ready(function() {
	    	$('#pass_confirm').keyup(function() {
			if ($('#pass').val()==$('#pass_confirm').val())
			{
				 $('#pass').css('border' , '1px solid #569b44');
				 $('#pass_confirm').css('border' , '1px solid #569b44');
				 $('#pass_info').text('Пароли совпадают');
				 $('#pass_info').css('color' , '#569b44');
				 a='';
			}
			else
			{
				 $('#pass').css('border' , '1px solid #ff0000');
				 $('#pass_confirm').css('border' , '1px solid #ff0000');
				 $('#pass_info').text('Пароли не совпадают');
				 $('#pass_info').css('color' , '#ff0000');
				 a=1;
			}
		});
	 }); 	
<?php echo '</script'; ?>
><?php }
}
