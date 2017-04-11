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
      ">{$error_message}</h4>
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

