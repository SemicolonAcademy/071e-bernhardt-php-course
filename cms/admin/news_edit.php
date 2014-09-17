<?php

//1. Connecti to MySQL server
mysql_connect('localhost', 'root', '');    

//2. Selecting database
mysql_select_db('bernhardt');

//3. Performing SQL query
$id = $_GET['id'];
$query = "SELECT * FROM news where id=$id";
$result = mysql_query($query); //resource or similar to file handle
$news = mysql_fetch_assoc($result);
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

    <h1>Edit News</h1>
    
	<br/>

	
	<form method="POST" action="db.php?news_id=<?php echo $id;?>">
            
			<div class="control-group">
              <label class="control-label" >Title</label>
              <div class="controls">
                <input name="title" value="<?php echo $news['title'];?>" type="text" placeholder="News Title"/>
              </div>
            </div>
			
			
			
            <div class="control-group">
              <label class="control-label" >Content</label>
              <div class="controls">
                <textarea name="content" rows="10" class="span6"><?php echo $news['content'];?></textarea>
              </div>
            </div>
            
			<div class="control-group">
              <div class="controls">                
                <button name="btn_action" value="update_news" type="submit" class="btn btn-info">Update</button>
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
