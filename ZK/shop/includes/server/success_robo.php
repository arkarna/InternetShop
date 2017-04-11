<?

// регистрационная информация (пароль #1)
// registration info (password #1)
$mrh_pass1 = "EgGIMjl6i0X0OtFMdm80";

// чтение параметров
// read parameters
$out_summ = $_REQUEST["OutSum"];
$inv_id = $_REQUEST["InvId"];
$shp_item = $_REQUEST["Shp_item"];
$crc = $_REQUEST["SignatureValue"];

$crc = strtoupper($crc);

$my_crc = strtoupper(md5("$out_summ:$inv_id:$mrh_pass1:Shp_item=$shp_item"));

// проверка корректности подписи
// check signature
if ($my_crc != $crc)
{
  echo "bad sign\n";
  exit();
}

// проверка наличия номера счета в истории операций
// check of number of the order info in history of operations
$sql_update_purchase="UPDATE purchase set date_answer='".$lk->date."', status='2' where invid=".$inv_id;
if ($db->query($sql_update_purchase))
{
// success
echo "OK".$inv_id."\n";
}
?>

