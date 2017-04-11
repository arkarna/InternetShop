<?
$inv_id = $_REQUEST["InvId"];
echo "Вы отказались от оплаты. Заказ# $inv_id\n";
echo "You have refused payment. Order# $inv_id\n";
$sql_update_purchase="UPDATE purchase set date_answer='".$lk->date."', status='0' where invid=".$inv_id;
if ($db->query($sql_update_purchase))
{
// success
echo "OK".$inv_id."\n";
}
?>
