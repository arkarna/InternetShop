	{foreach from = $goods item=item}
	<div class="till">
		<div class="till_image">
			<a href="?page=product&id={$item.id}">
			<img src="{$site_url}archive/site/goods/goods/{$item.image}">
			</a>
		</div>
		<h2 class="till_title">
			<a href="?page=product&id={$item.id}">{$item.title}</a>
		</h2>
		<h3 class="till_price"><span>{$item.price}</span> рублей</h3>
		<div class="till_description">
			<p>{$item.description}</p>
		</div>
		<div class="till_params">
			<h3><span class="till_count">{$item.packing}</span> грамм</h3>
		</div>
		<div>
			<button style="min-width:175px;" onclick="open_bay('{$item.id}');" id="btn_bay{$item.id}" class="button" >В корзину</button>
		</div>
		<div  id="form_bay{$item.id}" class="form_bay" style="display:none;width: 200px;">
		<input style="width:45%;margin: 3px 0;" id="col{$item.id}" type="number" name="col" value="1">
		<input type="hidden" id="id_go_post{$item.id}" name="id" value="{$item.id}">
		<button  class="button" style="width:45%; padding:0;" onclick="go_post({$item.id});"name="ok_go_cart" >Ok</button>
		</div>
	</div>	
	{/foreach}
	<script type="text/javascript">
	/* прикрепить событие submit к форме */
var a,b;
	function open_bay(a)
	{
		if($('#form_bay'+a).css('display')=='none')
		{
			$('.form_bay').hide();
			$('#form_bay'+a).show();
		}
		else
		{
			$('.form_bay').hide();
		}
	}
	function go_post(a)
	{
		$.post("{$site_url}?page=productadd", { col: $('#col'+a).val(), id: $('#id_go_post'+a).val()})
			.done(function(data) {
				json = jQuery.parseJSON(data);
				console.log(json);
			});
		a=parseInt($('#gooding1').text());
		b=parseInt($('#gooding2').text());
		$('#gooding1').text(a+1);
		$('#gooding2').text(b+1);		
	}
	ScreenWidth = $(window).width();  

	if (ScreenWidth<720||screen.width<720) 
	{  
	{if $smarty.get.c != ''}

		$('#content').show();
		$('#asides').hide();
		$('#mobile_back').show();
	{/if}
	}
	</script>