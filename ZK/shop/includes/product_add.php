<?php
	if (!empty($_POST['col'])) 
	{
	$_SESSION['product'][$lk->post_id] += $_POST['col'];
	}
	if (!empty($_POST['plus'])) 
	{
		$_SESSION['product'][$lk->post_id] += 1;
	}
	if (!empty($_POST['minus'])) 
	{
		$_SESSION['product'][$lk->post_id] -= 1;
	}
?>