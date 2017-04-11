<?php
/* Smarty version 3.1.29, created on 2016-03-19 12:53:13
  from "/var/www/u0149883/data/www/zkmagaz.ru/shop/templates/users/register.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56ed2189deed52_06249739',
  'file_dependency' => 
  array (
    '80ccb96dfdbf8034a1d5dbfe79b3d98128541688' => 
    array (
      0 => '/var/www/u0149883/data/www/zkmagaz.ru/shop/templates/users/register.tpl',
      1 => 1458292054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56ed2189deed52_06249739 ($_smarty_tpl) {
?>
<div class="main_content_wrapper">
<div id="content">
<div class="main_content_inner registration">
<h1>Регистрация</h1>
<h3>После регистрации у вас появится уникальная возможность получать скидки, подарки  и специальные предложения для зарегистрированных пользователей</h3>
<article>
<div class="register_form">
<form method="post" onsubmit="return pre_submit();">
<fieldset>
<div class="inner">
<label>Электронный адрес</label>
<input type="text" id="email" name="email" required class="required"/>
<p id="email_info" ></p>
</div>
<div>
<label>Пароль</label>
<input id="pass" name="pass" class="required" required type="password">
</div>
<div>
<label>Подтверждение пароля</label>
<input id="pass_confirm" name="pass_confirm" required class="required" type="password"/>
<p id="pass_info" ></p>
</div>
<div>
<label>Фамилия</label>
<input id="registration_user_lastname" name="lastname" required class="required" type="text"/>
</div>
<div>
<label>Имя</label>
<input id="registration_user_name"name="name" required class="required" type="text"/>
</div>
</fieldset>
<fieldset>
<div class="form_item">
<label>Дата рождения</label>
<input name="birthday" id="user_birth_date" value="" type="text"/>
</div>
<div class="form_item middle">
<label >Мобильный телефон</label>
<input id="registration_user_phone" name="phone" type="text"/>
<p class="example">формат: +7 XXX XXX-XX-XX</p>
</div>
<div class="fields_block" style="padding-left:0;">
<input style="float: left;width: 0px;" name="agreement" id="agreement" type="checkbox">
<label style="width:90%;display:block;">Настоящим подтверждаю, что я ознакомлен и согласен с условиями 
<a href="/about/privacy-policy/">политики обработки персональных данных.</a></label>
</div>
</fieldset>
<p id="valid" ></p>
<input type="submit" name="register_go" onSubmit="" value="Продолжить">
</form>
<div>
<p>
<a href="/?page=login/">Уже регистрировались?</a>
</p>
</div>
</div>
</article>
</div>
</div>
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
	1952

    $(document).ready(function() {
    $('#email').keyup(function() {
	if ($('#email').val()!='')
			{
	            var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
	            if(pattern.test($('#email').val()))
	            {
	                $('#email').css('border' , '1px solid #569b44');
	                $('#email_info').css('color' , '#569b44');
	                $('#email_info').text('Верно');
	                 a='';
	            }
	            else 
	            {
	                $('#email').css('border' , '1px solid #ff0000');
	                $('#email_info').css('color' , '#ff0000');
	                $('#email_info').text('Не верно');
	                 a=1;
	            }
	        } 
	        else 
	        {
	            $('#email').css('border' , '1px solid #ff0000');
	            $('#email_info').text('Поле email не должно быть пустым');
			}
		});
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
>
<?php }
}
