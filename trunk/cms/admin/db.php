<?php

mysql_connect('localhost', 'root', '');    
mysql_select_db('bernhardt');

$action=$_GET['action'];
$id= $_GET['id'];

//DELETE USER
if($action== "user_delete" && $id!='')
{
	//3. Performing SQL query
	$query = "DELETE FROM users WHERE id =$id";
	mysql_query($query); //resource or similar to file handle
	
	//header function to redirect to dashboard.php
	header("location: dashboard.php");
}

/*************************************************
ADD USER
**************************************************/

//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

$email = $_POST['email'];
$password = $_POST['password'];
$full_name = $_POST['full_name'];
$status = $_POST['status'];
$btn_adduser =   $_POST['btn_adduser'];
$btn_action= $_POST['btn_action'];
	
if ($btn_adduser == "add_user")	{

	if ($email !="" && $password !="" && $full_name !=""){
	
		$p = md5($password);
		$time= time();
		
		$query = "INSERT INTO `users` (`id`, `email`, 
		`password`, `full_name`, `status`, `created_at`) 
		VALUES (NULL, '$email', '$p', '$full_name','$status', $time);";
		
		mysql_query($query) or die (mysql_error()); //resource or similar to file handle
		header("location: dashboard.php");
	}
}	


if ($btn_action == "update_user")	{

	$user_id = $_GET['user_id'];
	
	if ($email !="" && $password !="" && $full_name !="" && $user_id !=""){
	
		$p = md5($password);
		
		$query = "UPDATE `users` 
		SET `email` = '$email', 
		`password` = '$p',
		`full_name` = '$full_name', 
		`status` = '$status' 
		 WHERE `id` = $user_id LIMIT 1;";
		
		mysql_query($query) or die (mysql_error()); //resource or similar to file handle
		header("location: dashboard.php");
	}
}


/*************************************************
NEWS MANAGEMENT
**************************************************/

$id= $_GET['id'];

//DELETE USER
if($action== "news_delete" && $id!='')
{
	//3. Performing SQL query
	$query = "DELETE FROM news WHERE id =$id";
	mysql_query($query); //resource or similar to file handle
	
	//header function to redirect to dashboard.php
	header("location: news.php");
}

//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

$btn_action= $_POST['btn_action'];

//print_r($_POST)	;

if ($btn_action == "add_news")	{

	$title = $_POST['title'];
	$content = $_POST['content'];

	if ($title !="" && $content !=""){
	
		$time= time();
		
		$query = "INSERT INTO `news` (`id`, `title`, 
		`content`, `created_at`) 
		VALUES (NULL, '$title', '$content', $time);";
		
		mysql_query($query) or die (mysql_error()); //resource or similar to file handle
		header("location: news.php");
	}
}	

if ($btn_action == "update_news")	{

	$news_id = $_GET['news_id'];
	$title = $_POST['title'];
	$content = $_POST['content'];
	
	
	if ($title !="" && $content !="" && $news_id !=""){
	
		$query = "UPDATE `news` 
		SET `title` = '$title', 
		`content` = '$content'
		 WHERE `id` = $news_id LIMIT 1;";
		
		mysql_query($query) or die (mysql_error()); //resource or similar to file handle
		header("location: news.php");
	}
}




?>


