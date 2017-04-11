
<button onclick="$('.hidden').hide();$('#profile').show();" class="button" style="display: inline-block;width: 49%;">Профиль</button>
<button onclick="$('.hidden').hide();$('#history').show();" class="button" style="display: inline-block;width: 49%;">История</button>
<h1 style="text-align: center; color: red; font-size: 32px; font-weight: bold;">{$error}</h1>
<h1 style="text-align: center; color: green; font-size: 32px; font-weight: bold;">{$success}</h1>
<div id="profile" class="profile hidden" style="margin: 70px;">
	<h1 style="text-align: center;">{$userinfo.name} {$userinfo.lastname}</h1>
	<p>Email: {$userinfo.email}</p>
	<p>Телефон: {$userinfo.phone}</p>
	<p>Дата рождения: {$userinfo.birthday}</p>
	<button onclick="$('.hidden').hide();$('#edit').show();" class="button" style="display: inline-block;width: 45%;">Редактировать</button>
	<button onclick="$('.hidden').hide();$('#new_pass').show();" class="button" style="display: inline-block;width: 45%;">Смена пароля</button>
</div>


<div style="margin-top: 25px; display: none;" id="edit" class="hidden">
		<h1 style="text-align: center;">Редактирование</h1>
		<form method="post" style="background: #F3F3F3;">
		<input type="text" name="name" placeholder="Имя" required value="{$userinfo.name}"/>
		<input type="text" name="lastname" placeholder="Фамилия" required value="{$userinfo.lastname}"/>
		<input type="text" name="phone" placeholder="Телефон" required value="{$userinfo.phone}"/>
		<input type="date" name="birthday" placeholder="День рождения" required value="{$userinfo.birthday}"/>
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
{foreach from=$get_history item=item}
	<tr>
		<td>{$item.id}</td>
		<td>{$item.summ}</td>
		<td>{$item.date_create}</td>
		<td>{if $item.status==1}
			<p style="color:blue">Ожидание оплаты</p>
			{elseif $item.status==2}
			<p style="color: green">Оплачен</p>
			{else}
			<p style="color: red">Отклонён</p>
			{/if}
		</td>
	</tr>
{/foreach}
	</table>
</div>
<script type="text/javascript">
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
</script>