<?php
session_start();
if ($_SESSION['id'] == ""){
	header("location: index.php");
}

mysql_connect('localhost', 'root', '');    
mysql_select_db('bernhardt');


/*
echo "<pre>";
print_r($_POST);
print_r($_FILES);
echo "</pre>";
*/

$name = $_POST['name'];
$file_name = strtolower($_FILES['photo']['name']);

$file_ext = substr($file_name, strpos($file_name, ".") + 1);
$ext_arr = array ("png", "jpg", "bmp", "gif");

if ( in_array($file_ext, $ext_arr)) {
	
	//$file_name = time()."_".strtolower($_FILES['photo']['name']);

	$source_file = $_FILES['photo']['tmp_name'];
	$upload_dir = '../uploads/';
	$destination_file = $upload_dir . $file_name;
	move_uploaded_file($source_file, $destination_file);

	$query = "INSERT INTO `gallery` (`id`, `name`, `photo`) 
	VALUES (NULL, '$name', '$file_name');";
	mysql_query($query) or die (mysql_error()); //resource or similar to file handle
	
	header("location: gallery.php");

} else {

	echo "Not supported file type!";
	
}

?>