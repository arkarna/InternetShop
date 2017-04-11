<?php
/* Smarty version 3.1.29, created on 2016-03-03 10:23:17
  from "/var/www/u0149883/data/www/zkmagaz.ru/shop/templates/users/login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56d7e665282e34_41323221',
  'file_dependency' => 
  array (
    '711afc2b24e7d6f211c653cd70438e1199599057' => 
    array (
      0 => '/var/www/u0149883/data/www/zkmagaz.ru/shop/templates/users/login.tpl',
      1 => 1454940797,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56d7e665282e34_41323221 ($_smarty_tpl) {
?>
<section class="register_form;"> 
    <div style="width: 480px;
margin: 110px auto;
text-align: center;" class="login">
	    <h4 class="normal_text" style="
        color: rgb(246, 220, 194);
        text-align: center;
        padding: 5px;
        font-size: 23px;
        text-shadow: 2px 2px 0px rgb(144, 82, 19);
      "><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
</h4>
      <h1 class="bold_text">Войти в личный кабинет</h1>
      <form style="margin-top: 30px; background:none;" method="post">
        <input style="width: 50%;" type="text" name="email" value="" placeholder="Email">
        <input style="width: 50%;" type="password" name="password" value="" placeholder="Пароль">
        <input class="button" style="width: 50%;margin-top: 30px;" type="submit" name="go" value="Войти">
      </form>
      <div class="login-help" style="margin: 0px 0;">
      <a class="normal_text_w" href="index.php?page=restore">Забыли&nbsp;пароль</a>
      <a class="normal_text_w" href="index.php?page=register">Регистрация</a>
      </div>
    </div>
</section>

<?php }
}
