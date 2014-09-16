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

//ADD USER
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

$email = $_POST['email'];
$password = $_POST['password'];
$full_name = $_POST['full_name'];
$btn_adduser =   $_POST['btn_adduser'];
	
if ($btn_adduser == "add_user")	{

	if ($email !="" && $password !="" && $full_name !=""){
	
		$p = md5($password);
		$time= time();
		
		$query = "INSERT INTO `users` (`id`, `email`, 
		`password`, `full_name`, `created_at`) 
		VALUES (NULL, '$email', '$p', '$full_name', $time);";
		
		mysql_query($query); //resource or similar to file handle
		header("location: dashboard.php");
	}
}	

//by default redirect to dashboard.php
header("location: dashboard.php");
?>


