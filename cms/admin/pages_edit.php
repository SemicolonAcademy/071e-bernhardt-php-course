<?php

session_start();
if ($_SESSION['id'] == ""){
	header("location: index.php");
}

//1. Connecti to MySQL server
mysql_connect('localhost', 'root', '');    

//2. Selecting database
mysql_select_db('bernhardt');

//3. Performing SQL query
$id = $_GET['id'];
$query = "SELECT * FROM pages where id=$id";
$result = mysql_query($query); //resource or similar to file handle
$pages = mysql_fetch_assoc($result);
//print_r($user);

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>CMS Backend</title>
    
	<link href="assets/css/bootstrap.css" rel="stylesheet">
    
	<style>
      body {
        padding-top: 60px; 
		
		/* 60px to make the container go all the way to the 
		bottom of the topbar */
      }
    </style>
    
  </head>

  <body>
	
	<?php include "nav.php";?>
	
    <div class="container">

    <h1>Edit Pages</h1>
    
	<br/>

	
	<form method="POST" action="db.php?page_id=<?php echo $id;?>">
            
			<div class="control-group">
              <label class="control-label" >Title</label>
              <div class="controls">
                <input name="title" value="<?php echo $pages['title'];?>" type="text" placeholder="Page Title"/>
              </div>
            </div>
			
			
			
            <div class="control-group">
              <label class="control-label" >Content</label>
              <div class="controls">
                <textarea name="content" rows="10" class="span6"><?php echo $pages['content'];?></textarea>
              </div>
            </div>
            
			<div class="control-group">
              <div class="controls">                
                <button name="btn_action" value="update_pages" type="submit" class="btn btn-info">Update</button>
              </div>
            </div>
			
	</form>
	
	  
    </div> <!-- /container -->
    
  </body>
</html>

<?
//5. Close connection
mysql_close();
?> 
