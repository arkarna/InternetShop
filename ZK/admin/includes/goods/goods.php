<?php
	$check = new filter;
	$check->check_array = $_POST;
	$check->check_arrays($db);
	if($_POST['add']&&!empty($check->check_array['title']))
	{
		if(!empty($_FILES['load']['name']))
		{
			$download = new download;
			$download->type = 'goods';
			$download->document = 'goods';
			$download->user['id']= 'site';
			$filename = $download->get_start('');
		}
		else
		{
			$filename = 'not_found.jpg';
		}
		$sql_add_goods = "insert into goods (title,price,packing,packing_type,category,subcategory,description,image,status) values 
		('".$check->check_array['title']."','".$check->check_array['price']."','".$check->check_array['packing']."','".$check->check_array['packing_type']."',
		'".$check->check_array['category']."','".$check->check_array['subcategory']."','".$check->check_array['description']."','".$filename."',1)";
		if($db->query($sql_add_goods))
		{
			header( 'Location: ?type=is-admin&page=goods' ); 
		}
	}
	############ Редактирование #############
	if($_POST['edit']&&!empty($check->check_array['title']))
	{
		if(!empty($_FILES['load']['name']))
		{
			$download = new download;
			$download->type = 'goods';
			$download->document = 'goods';
			$download->user['id']= 'site';
			$filename = $download->get_start('');
			$and_image = ",image='".$filename."'";
		}
		$sql_edit_good = "update goods set 
		title='".$check->check_array['title']."',price='".$check->check_array['price']."',
		packing='".$check->check_array['packing']."',packing_type='".$check->check_array['packing_type']."',
		category='".$check->check_array['category']."',subcategory='".$check->check_array['subcategory']."',
		description='".$check->check_array['description']."' ".$and_image." where id='".$check->check_array['id']."'";
		if($db->query($sql_edit_good))
		{
			header( 'Location: ?type=is-admin&page=goods' ); 
		}
	}
	############ Удаление #############
	if($_POST['del'])
	{
		$sql_del_goods = "delete from goods where id=".$lk->post_id;
		if($db->query($sql_del_goods))
		{
			header( 'Location: ?type=is-admin&page=goods' ); 
		}		
	}
	########### Категории ###########
	$sql_get_category = 'select * from category';
	$array_get_category = $db->query($sql_get_category);
	while($value_get_category = $array_get_category->fetch_assoc())
	{
		$category[] = $value_get_category;
	}
	$template->assign("category", $category);
	########### Подкатегории ###########
	$sql_get_subcategory = 'select * from subcategory';
	$array_get_subcategory = $db->query($sql_get_subcategory);
	while($value_get_subcategory = $array_get_subcategory->fetch_assoc())
	{
		$subcategory[] = $value_get_subcategory;
	}
	$template->assign("subcategory", $subcategory);
	########### Товары ###########
	$sql_get_goods = 'select * from goods';
	$array_get_goods = $db->query($sql_get_goods);
	while($value_get_goods = $array_get_goods->fetch_assoc())
	{
		$goods[] = $value_get_goods;
	}
	$template->assign("goods", $goods);
?>