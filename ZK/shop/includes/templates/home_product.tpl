{foreach from = $goods item=item}
	<div class="till">
		<h2 class="product_title">
			<a>{$item.title}</a>
		</h2>
		<div class="product_image" style="height: auto;">
			<a href="?page=product&id={$item.id}">
			<img src="{$site_url}archive/site/goods/goods/{$item.image}">
			</a>
			<h3 style="text-align: center;"><span class="till_count">{$item.packing}</span> грамм</h3>
		</div>
		<div class="product_btn">
			<button onclick="open_bay('{$item.id}');" class="button" >В корзину</button>
			<div  id="form_bay{$item.id}" class="form_bay" style="display:none;width: 200px;">
			<input style="width:45%;margin: 3px 0;" id="col{$item.id}" type="number" name="col" value="1">
			<input type="hidden" id="id_go_post{$item.id}" name="id" value="{$item.id}">
			<button  class="button" style="width:45%; padding:0;" onclick="go_post({$item.id});"name="ok_go_cart" >Ok</button>
			</div>
			<h3 class="till_price"><span>{$item.price}</span> рублей</h3>
		</div>


			
	
		<div class="till_description">
			<p>{$item.description}</p>
		</div>
	</div>	
{/foreach}
	<script type="text/javascript">
	function open_bay(a)
	{
		if($('#form_bay'+a).css('display')=='none')
		{
			$('.form_bay').hide(300);
			$('#form_bay'+a).show(300);
		}
		else
		{
			$('.form_bay').hide(300);
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
	</script>