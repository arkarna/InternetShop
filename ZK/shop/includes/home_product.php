<?php
$sql_select_goods="SELECT * FROM goods where id=".$lk->id;
$array_select_goods = $db->query($sql_select_goods);
		while($value_select_goods=$array_select_goods->fetch_assoc())
		{
			$goods[] = $value_select_goods;
		}
	$template->assign("goods", $goods);
?>