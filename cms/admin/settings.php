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
$query = "SELECT * FROM settings";
$result = mysql_query($query); //resource or similar to file handle

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

    <h1>Website Settings</h1>
    
	<p>
		Website Settings Administration
		&nbsp;&nbsp;&nbsp;		
	</p>
	  
	<br/>

	<?php if (mysql_num_rows($result) > 0 ) {
		
		$settings = mysql_fetch_assoc($result)
	?>
	
	<table class="table table-hover">

		<tr>
			<td><b>Site Name</b></td>
			<td><?php echo $settings['site_name'];?></td>
		</tr>
		<tr>
			<td><b>Footer Content</b></td>			
			<td><?php echo $settings['footer_content'];?></td>
		</tr>
		<tr>
			<td><b>Contact Email</b></td>
			<td><?php echo $settings['contact_email'];?></td>			
		</tr>
		
				
	</table>

<?php } ?>
	
	<br/>
	<h4>Update Setting</h4><br/>
	
	<form method="POST" action="db.php">
            
			<div class="control-group">
              <label class="control-label" >Site Name</label>
              <div class="controls">
                <input name="site_name" value="<?php echo $settings['site_name'];?>" type="text" placeholder="Site Name"/>
              </div>
            </div>
			
            <div class="control-group">
              <label class="control-label" >Footer Content</label>
              <div class="controls">
                <textarea name="footer_content" rows="10" class="span6"><?php echo $settings['footer_content'];?></textarea>
              </div>
            </div>
            
			<div class="control-group">
              <label class="control-label" >Contact Email</label>
              <div class="controls">
                <input name="contact_email" value="<?php echo $settings['contact_email'];?>" type="text" placeholder="Email"/>
              </div>
            </div>
			
			<div class="control-group">
              <div class="controls">                
                <button name="btn_action" value="update_settings" type="submit" class="btn btn-info">Update</button>
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
