<header>
<div style="text-align: center;margin: 0 auto;">
<div class="header_left_block">
	<img style="width: 150px;" src="/shop/templates/images/logo.png">
</div><div class="header_right_block">
	<h1>Весточка с дома</h1>
	<h4>Магазин товаров для заключенных</h4>
</div>
</div>
</header>
<nav>
	<li><a href="{$site_url}">Магазин</a></li>
	<li><a href="{$site_url}?page=delivery">Доставка</a></li>
	<li><a href="{$site_url}?page=contacts">Контакты</a></li>
	<li><a href="{$site_url}?page=rules">Правила</a></li>
	<li><a href="{$site_url}?page=conditions">Условия</a></li>
	<li><a href="{$site_url}?page=cart">Корзина</a></li>
	{if $user.id==''}
	<li><a href="{$site_url}?page=login">Вход</a></li>
	<li><a href="{$site_url}?page=register">Регистрация</a></li>
	{else}
	<li><a href="{$site_url}?page=profile">Мой кабинет</a></li>
	<li><a href="{$site_url}?page=exit">Выход</a></li>
	{/if}
</nav>