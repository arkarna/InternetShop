<?php
$check = new filter;
$check->check_array = $_POST;
$check->check_arrays;
if($_SESSION['product'] != '')
{
	foreach ($_SESSION['product'] as $key => $value) 
	{
		$goods_list .= $key.',';
		$all_count += $key*$value;
	}
	$goods_list = substr($goods_list,0,-1);
	$sql_get_goods = "SELECT * from goods where id in (".$goods_list.")";
	$array_get_goods = $db->query($sql_get_goods);
	while($value_get_goods = $array_get_goods->fetch_assoc())
	{
		$goods[$value_get_goods['id']]=$value_get_goods;
		$all_summ += $value_get_goods['price'] * $_SESSION['product'][$value_get_goods['id']];
	}
}
if ($_POST['cancel']) {
	unset($_SESSION['product']);
header("Location: http://zkmagaz.ru/?page=cart");
}
$InvId=rand(1000,999999);
if ($check->check_array['check'])
{
	if (!empty($check->check_array['email']))
	{
		$sql_insert_buyers="INSERT into buyers (`email`,`phone`) values ('".$check->check_array['email']."','".$check->check_array['phone']."')";
		$db->query($sql_insert_buyers);
	}
$signaturevalue=md5("zkmagaz:".$check->check_array['OutSum'].":".$check->check_array['InvId'].":EgGIMjl6i0X0OtFMdm80:Shp_item=".$lk->user['id']);
$InvId=$check->check_array['InvId'];
$all_summ=$check->check_array['OutSum'];
}




$template->assign('InvId' ,$InvId);
$template->assign('goods' ,$goods);
$template->assign('signaturevalue' ,$signaturevalue);
$template->assign('all_summ' ,$all_summ);
$template->assign('cart_goods' ,$_SESSION['product']);
?>