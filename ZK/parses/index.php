<?php
	error_reporting (E_ALL & ~E_NOTICE);
	define( 'check_arg', 1 );
	#############Цепляем базовый класс########
	require_once('../core/lk.class');
	$lk = new lk;
	$db = $lk->start();
	
	function check($sta) {
		$sta = strtr($sta, array(
			'"' => '',	  "'" => '', "'" => ' '
		));
		return $sta;
	}
	$link_id = '185';
	$link = 'http://xn--80agzpj5dm.xn--p1ai/store/'.$link_id.'/?PAGEN_1=3';
	
	
	$sql_add_goods = "insert into goods (title,price,packing,packing_type,category,subcategory,description,image,status) values ";
	
		$filename = 'not_found.jpg';
		$sql_add_subcategory = "insert into subcategory (title,category,description,image) values ('Термобелье/Нательное белье','26','','".$filename."')";
		if($db->query($sql_add_subcategory))
		{
			$sub_id = $db->insert_id;
		}
	include './phpQuery.php';
	$html = file_get_contents($link);
	phpQuery::newDocumentHTML($html, $charset = 'utf-8');
		foreach (pq('div.bx_catalog_item') as $name) {
			$image = substr (pq($name)->find('div.bx_catalog_item_container')->find('a')->attr('style'),23,-2);
			$ch = curl_init('http://xn--80agzpj5dm.xn--p1ai'.$image);
			$filename = 'goods_site_'.rand(10000000,99999999).'.jpg';
			$fp = fopen('../archive/site/goods/goods/'.$filename, 'wb');
			curl_setopt($ch, CURLOPT_FILE, $fp);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_exec($ch);
			curl_close($ch);
			fclose($fp);
			$title = $db->real_escape_string(pq($name)->find('div.bx_catalog_item_title')->text());
			$price = preg_replace('/[^0-9.]/', '',pq($name)->find('div.bx_catalog_item_price')->text());
			$price = $price*1;
			$articul = preg_replace('/[^0-9]/', '',pq($name)->find('div.bx_catalog_item_articul')->text());
			$sql_add_goods .= "('".$title."','".$price."','".$articul."','2','26','".$sub_id."','','".$filename."','1'),";
		}
		$sql_add_goods = substr($sql_add_goods,0,-1);
		if($db->query($sql_add_goods))
		{
			echo 'Товары добавлены ';
		}
		else
		{
			echo $sql_add_goods;
		}
?>
