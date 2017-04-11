
<?php
	$check = new filter;
	$check->check_array = $_POST;
	$check->check_arrays($db);
	############ Добавление #############
	if($_POST['add']&&!empty($check->check_array['title']))
	{
		if(!empty($_FILES['load']['name']))
		{
			$download = new download;
			$download->type = 'goods';
			$download->document = 'category';
			$download->user['id']= 'site';
			$filename = $download->get_start('');
		}
		else
		{
			$filename = 'not_found.jpg';
		}
		$sql_add_category = "insert into category (title,description,image) values ('".$check->check_array['title']."','".$check->check_array['description']."','".$filename."')";
		if($db->query($sql_add_category))
		{
			header( 'Location: ?type=is-admin&page=category' ); 
		}
	}
	############ Редактирование #############
	if($_POST['edit']&&!empty($check->check_array['title']))
	{
		if(!empty($_FILES['load']['name']))
		{
			$download = new download;
			$download->type = 'goods';
			$download->document = 'category';
			$download->user['id']= 'site';
			$filename = $download->get_start('');
			$and_image = ",image='".$filename."'";
		}
		$sql_edit_category = "update category set title='".$check->check_array['title']."',description='".$check->check_array['description']."' where id='".$check->check_array['id']."'";
		if($db->query($sql_edit_category))
		{
			header( 'Location: ?type=is-admin&page=category' ); 
		}
	}
	############ Удаление #############
	if($_POST['del'])
	{
		$sql_del_category = "delete from category where id=".$lk->post_id;
		if($db->query($sql_del_category))
		{
			header( 'Location: ?type=is-admin&page=category' ); 
		}		
	}
	$sql_get_category = 'select * from category';
	$array_get_category = $db->query($sql_get_category);
	while($value_get_category = $array_get_category->fetch_assoc())
	{
		$category[] = $value_get_category;
	}
	$template->assign("category", $category);
?>
