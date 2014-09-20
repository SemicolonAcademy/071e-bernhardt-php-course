<?php 

//1. Connecti to MySQL server
mysql_connect('localhost', 'root', '');    

//2. Selecting database
mysql_select_db('bernhardt');


$setting = mysql_fetch_assoc(
				mysql_query("SELECT * FROM settings")
			); 

//Left sidebar news items
$news_query = "SELECT * FROM news order by created_at DESC LIMIT 3";
$news_result = mysql_query($news_query); 

//Navigation Menus
$menus_result = mysql_query("SELECT * FROM menus order by `order` ASC ");
		
		
?>