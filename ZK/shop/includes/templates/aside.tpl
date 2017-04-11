

{foreach from = $category key=key item=item}
	<li onclick="opensub({$item.id});" id="categor{$item.id}" class="categor"><a >{$item.title}</a></li>
	<ul id="subcategor{$item.id}"  class="subcategor">
	<li><a onclick="back();" style="font-size:22px;background:#FF7300;color:#fff;">◄</a></li>
	{foreach from = $item.subcategory item=items}
		<li><a href="?c={$items.id}" id="subcategory_item{$items.id}">{$items.title}</a></li>
	{/foreach}
	</ul>
{/foreach}
{literal}
<script type="text/javascript">

	function opensub(a)
	{
		if($('#subcategor'+a).css('display')=='none')
		{
			$('#subcategor'+a).show(0);
			$('.categor').css('position','relative')
			$('.categor').animate({'left':-1000},500);
			$('#subcategor'+a).animate({'top':321},500);
			//$('.categor').hide();
		}
		else
		{
			$('.subcategor').hide();
		}
	}
	function back()
	{
		$('.subcategor').hide();
		$('.categor').show();
		$('.categor').animate({'left':0},500);
	}
	{/literal}
	{if $smarty.get.c != ''}
		$('#subcategory_item{$smarty.get.c}').parents('ul').show(0);
		$('.categor').css('position','relative')
		$('.categor').animate({ 'left':-1000 },500);
		$('#subcategory_item{$smarty.get.c}').parents('ul').animate({ 'top':321 },500);
	{else}
	$('#mobile_back').hide();
	{/if}
</script>

