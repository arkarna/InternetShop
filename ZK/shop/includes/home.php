<?php
$check = new filter;
$check->check_array = $_GET;
$check->check_arrays;
if(empty($_GET['c']))
{
	$sql_select_goods="SELECT * FROM goods order by rating";
}
else
{
	$sql_select_goods="SELECT * FROM goods where subcategory='".$check->check_array['c']."' order by rating";
}

$array_select_goods = $db->query($sql_select_goods);
		while($value_select_goods=$array_select_goods->fetch_assoc())
		{
			$goods[] = $value_select_goods;
		}

$template->assign('goods' ,$goods);
?>