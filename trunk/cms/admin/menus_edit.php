<?php

//1. Connecti to MySQL server
mysql_connect('localhost', 'root', '');    

//2. Selecting database
mysql_select_db('bernhardt');

//3. Performing SQL query
$id = $_GET['id'];
$query = "SELECT * FROM menus where id=$id";
$result = mysql_query($query); //resource or similar to file handle
$menus = mysql_fetch_assoc($result);
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

	
	<form method="POST" action="db.php?menu_id=<?php echo $id;?>">
            
			<div class="control-group">
              <label class="control-label" >Name</label>
              <div class="controls">
                <input name="name" value="<?php echo $menus['name'];?>" type="text" placeholder="Menu Name"/>
              </div>
            </div>
			
			<div class="control-group">
              <label class="control-label" >href</label>
              <div class="controls">
                <input name="href" value="<?php echo $menus['href'];?>" type="text" placeholder="href"/>
              </div>
            </div>
			
			
            <div class="control-group">
              <label class="control-label" >Description</label>
              <div class="controls">
                <input name="description" value="<?php echo $menus['description'];?>" type="text" placeholder="Description"/>
              </div>
            </div>
            
			<div class="control-group">
              <label class="control-label" >Menu Order</label>
              <div class="controls">
                <input name="order" value="<?php echo $menus['order'];?>" type="text" placeholder="Menu Order"/>
              </div>
            </div>
            
			
			<div class="control-group">
              <div class="controls">                
                <button name="btn_action" value="update_menus" type="submit" class="btn btn-info">Update</button>
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
