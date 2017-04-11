
{include file='header.tpl'}
<div class="page" style="display: block;">
<li id='full' class="mobile_li">
<a class="button mobile_back" href="?page=cart">Корзина(<small class="a_hover" id="gooding1">{$gooding}</small>)</a></li>
<div id="mobile_back" style="display:none">
<li class="mobile_li"><a class="button mobile_back"  href="?page=cart">Корзина(<small class="a_hover" id="gooding2">{$gooding}</small>)</a></li>
<li class="mobile_li"><a class="button mobile_back"  href="?c=">◄ К категориям</a></li>
</div>
<aside id="asides">
	{include file='aside.tpl'}
</aside><main> 

<content id="content">
{if $smarty.get.page == 'register'}
	{include file='users/register.tpl'}
{elseif $smarty.get.page == 'restore'}
	{include file='users/restore.tpl'}
{elseif $smarty.get.page == 'login'}
	{include file='users/login.tpl'}
{elseif $smarty.get.page == 'cart'}
	{include file='cart.tpl'}
{elseif $smarty.get.page == 'product'}
	{include file='home_product.tpl'}
{elseif $smarty.get.page == 'delivery'}
	{include file='static/delivery.tpl'}
{elseif $smarty.get.page == 'contacts'}
	{include file='static/contacts.tpl'}
{elseif $smarty.get.page == 'rules'}
	{include file='static/rules.tpl'}
{elseif $smarty.get.page == 'profile'}
	{include file='users/profile.tpl'}
{elseif $smarty.get.page == 'conditions'}
	{include file='static/conditions.tpl'}
{else}
	{include file='home.tpl'}
{/if}
</content>
</main>
<footer>

</footer>
</div>

<script type="text/javascript">
ScreenWidth = $(window).width();  
	if (ScreenWidth<720||screen.width<720) 
	{  
	{if $smarty.get.page != ''}
		$('#content').show();
		$('#asides').hide();
		$('#mobile_back').show();
	{/if} 
	$('#full').hide();
	}
	else
	{
	$('#full').show();
	$('#asides').show();
	}
</script>