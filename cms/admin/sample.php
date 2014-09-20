<?php

//1. Connecti to MySQL server
mysql_connect('localhost', 'root', '');    

//2. Selecting database
mysql_select_db('bernhardt');

//3. Performing SQL query
$query = "SELECT * FROM menus";
$result = mysql_query($query); //resource or similar to file handle

while ($row = mysql_fetch_assoc($result)){
	
	echo "<pre>";
	print_r($row);
	echo "</pre>";
	
}

?>