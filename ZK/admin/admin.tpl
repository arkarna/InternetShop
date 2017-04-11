
{include file='header.tpl'}
<div class="page">
<main> 
{if $user.adminkey == ''}
	{include file='users/login.tpl'}
{else}
	{if $smarty.get.page == 'category'}
		{include file='goods/category.tpl'}
	{elseif $smarty.get.page == 'subcategory'}
		{include file='goods/subcategory.tpl'}
	{elseif $smarty.get.page == 'goods'}
		{include file='goods/goods.tpl'}
	{else}
		{include file='home.tpl'}
	{/if}
{/if}
</main>
</div>
