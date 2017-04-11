
{if $all_summ<>''}
<h1>ТОВАРЫ В ВАШЕЙ КОРЗИНЕ</h1>
	{foreach from = $cart_goods key=key item=item}
	<span>
	<p class="cart_list">{$goods.$key.title}({$goods.$key.description}) <span><button onclick="minus({$goods.$key.price},{$key})" class="button" style="width:auto;margin-top:-5px;">-</button><a id="col{$key}">{$item}</a><button class="button" onclick="plus({$goods.$key.price},{$key})" style="width:auto;margin-top:-5px;">+</button></span></p>
	</span>
	{/foreach}
	<p class="cart_list">Общая сумма<span><a id="allsumm">{$all_summ}</a></span></p>
	{if $signaturevalue<>''}
    <form id="robokassa" action='https://merchant.roboxchange.com/Index.aspx' method='post'>
    {else}
    <form method='post' style="background:white;">
    {/if}
    <input type='hidden' name='MrchLogin' value='zkmagaz'>
    <input type='hidden' name='OutSum' id='allsummform' value='{$all_summ}'>
    <input type='hidden' name='InvId' value='{$InvId}'>
    <input type='hidden' name='Desc' value='{foreach from = $cart_goods key=key item=item}{$goods.$key.title},{/foreach}'>
    <input type='hidden' name='SignatureValue' value='{$signaturevalue}'>
    <input type='hidden' name='Shp_item' value='{$user.id}'>
    <input type='hidden' name='IncCurrLabel' value=''>
    <input type='hidden' name='Culture' value='ru'>
    <input type='hidden' name='IsTest' value='1'>
	{if $signaturevalue<>''}
    <input class="button" type='submit' value='Оплатить'>
    {else}
    {if $user.id==''}
    <h1>Введите контактые данные</h1>
    <input type='text' placeholder="email" name='email' required value=''>
    <input type='text' placeholder="Телефон" name='phone' required value=''>	
    {/if}
    <input name="check" class="button" type='submit' value='Оплатить'> 
    {/if}
    </form>


	<form method="post" style="background:white;">
	<input type="submit" name="cancel" class="button" value="Очистить корзину">
	</form>
{else}
	<p class="cart_list"><h1>Корзина пуста</h1></p>
{/if}
	<script type="text/javascript">

  $(document).ready(function go(){
    if('{$signaturevalue}'!='')
    {
		setTimeout($('#robokassa').submit(), 2000)
    }; 
});

	function minus(summ,i)
	{
		if(($('#col'+i).text()*1)>0)allsummform
		{
			$('#col'+i).text(($('#col'+i).text()*1)-1);
			$('#allsumm').text((($('#allsumm').text()*1)-summ).toFixed(2));
			$('#allsummform').val((($('#allsummform').val()*1)-summ).toFixed(2));
			$.post("{$site_url}?page=productadd", { minus:1, id:i})
			.done(function(data) {
				json = jQuery.parseJSON(data);
				console.log(json);
			});	
		}
		
	}
	function plus(summ,i)
	{
			$('#col'+i).text(($('#col'+i).text()*1)+1);
			$('#allsumm').text((($('#allsumm').text()*1)+summ).toFixed(2));
			$('#allsummform').val((($('#allsummform').val()*1)+summ).toFixed(2));
			$.post("{$site_url}?page=productadd", { plus: 1, id:i})
			.done(function(data) {
				json = jQuery.parseJSON(data);
				console.log(json);
			});
	}



	</script>