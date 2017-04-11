<?php
$sql_select_category="SELECT * FROM category";
$array_select_category = $db->query($sql_select_category);
while($value_select_category=$array_select_category->fetch_assoc())
{
	$category[$value_select_category['id']] = $value_select_category;
}
$sql_select_subcategory="SELECT * FROM subcategory";
$array_select_subcategory = $db->query($sql_select_subcategory);
while($value_select_subcategory=$array_select_subcategory->fetch_assoc())
{
	$category[$value_select_subcategory['category']]['subcategory'][] = $value_select_subcategory;
}
$template->assign('category' ,$category);
$template->assign('subcategory' ,$subcategory);
?>
