<?php

//1. Connecti to MySQL server
mysql_connect('localhost', 'root', '');    

//2. Selecting database
mysql_select_db('bernhardt');

//3. Performing SQL query
$id = $_GET['id'];
$query = "SELECT * FROM users where id=$id";
$result = mysql_query($query); //resource or similar to file handle
$user = mysql_fetch_assoc($result);
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

    <h1>Edit Users</h1>
    
	<br/>

	<form method="POST" action="db.php?user_id=<?php echo $id;?>">
            
			<div class="control-group">
              <label class="control-label" >Email</label>
              <div class="controls">
                <input name="email" value="<?php echo $user['email'];?>" type="text" placeholder="Email"/>
              </div>
            </div>
			
			
			
            <div class="control-group">
              <label class="control-label" >Password</label>
              <div class="controls">
                <input name="password" type="password" placeholder="Password">
              </div>
            </div>
            
			<div class="control-group">
              <label class="control-label">Full Name</label>
              <div class="controls">
                <input name="full_name" value="<?php echo $user['full_name'];?>" type="text" placeholder="Full Name">
              </div>
            </div>
			
			<div class="control-group">
              <label class="control-label">Status</label>
              <div class="controls">
                <select name="status">
					<option value="active">Active</option>
					<option value="inactive">Inavtice</option>
				</select>
              </div>
            </div>
			
			
			<div class="control-group">
              <div class="controls">                
                <button name="btn_action" value="update_user" type="submit" class="btn btn-info">Update</button>
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
