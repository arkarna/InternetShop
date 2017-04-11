<?
// регистрационная информация (пароль #2)
// registration info (password #2)
$mrh_pass2 = "P02TWtqCSZs3zDdQ5Vf6";
//установка текущего времени
//current date
$tm=getdate(time()+9*3600);
$date="$tm[year]-$tm[mon]-$tm[mday] $tm[hours]:$tm[minutes]:$tm[seconds]";
// чтение параметров
// read parameters
$out_summ = $_REQUEST["OutSum"];
$inv_id = $_REQUEST["InvId"];
$shp_item = $_REQUEST["Shp_item"];
$crc = $_REQUEST["SignatureValue"];
$description=$_REQUEST["Description"];
$crc = strtoupper($crc);
$my_crc = strtoupper(md5($out_summ.":".$inv_id.":".$mrh_pass2.":Shp_item=".$shp_item));
// проверка корректности подписи
// check signature
if ($my_crc !=$crc)
{
  echo "bad sign\n";
  exit();
}
// признак успешно проведенной операции

// запись в файл информации о проведенной операции
// save order info to file
$sql_insert_purchase="INSERT into purchase (`user_id`,`invid`,`desc`,`summ`,`date_create`,`status`) values ('".$shp_item."','".$inv_id."','".$description."','".$out_summ."','".$lk->date."','1')";

if ($db->query($sql_insert_purchase))
{
// success
echo "OK".$inv_id."\n";
}



