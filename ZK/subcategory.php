<?php
	$check = new filter;
	$check->check_array = $_POST;
	$check->check_arrays($db);
	
	if($lk->id != '')
	{
		$and_category = ' and s.category='.$lk->id;
	}
	############ Добавление #############
	if($_POST['add']&&!empty($check->check_array['title']))
	{
		if(!empty($_FILES['load']['name']))
		{
			$download = new download;
			$download->type = 'goods';
			$download->document = 'subcategory';
			$download->user['id']= 'site';
			$filename = $download->get_start('');
		}
		else
		{
			$filename = 'not_found.jpg';
		}
		$sql_add_subcategory = "insert into subcategory (title,category,description,image) values ('".$check->check_array['title']."','".$lk->id."','".$check->check_array['description']."','".$filename."')";
		if($db->query($sql_add_subcategory))
		{
			header( 'Location: '.$_SERVER["REQUEST_URI"] ); 
		}
	}
	############ Редактирование #############
	if($_POST['edit']&&!empty($check->check_array['title']))
	{
		if(!empty($_FILES['load']['name']))
		{
			$download = new download;
			$download->type = 'goods';
			$download->document = 'subcategory';
			$download->user['id']= 'site';
			$filename = $download->get_start('');
			$and_image = ",image='".$filename."'";
		}
		$sql_edit_subcategory = "update subcategory set title='".$check->check_array['title']."',description='".$check->check_array['description']."' where id='".$check->check_array['id']."'";
		if($db->query($sql_edit_subcategory))
		{
			header( 'Location: ?type=is-admin&page=subcategory' ); 
		}
	}
	############ Удаление #############
	if($_POST['del'])
	{
		$sql_del_subcategory = "delete from subcategory where id=".$lk->post_id;
		if($db->query($sql_del_subcategory))
		{
			header( 'Location: '.$_SERVER["REQUEST_URI"] ); 
		}		
	}
	$sql_get_subcategory = 'select s.*,c.title as category_title from subcategory as s, category as c where c.id=s.category '.$and_category;
	$array_get_subcategory = $db->query($sql_get_subcategory);
	while($value_get_subcategory = $array_get_subcategory->fetch_assoc())
	{
		$subcategory[] = $value_get_subcategory;
	}
	$template->assign("subcategory", $subcategory);
?>