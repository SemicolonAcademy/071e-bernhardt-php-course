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
$query = "SELECT * FROM gallery";
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

    <h1>Gallery</h1>
    
	<p>
		Gallery Administration
		&nbsp;&nbsp;&nbsp;		
	</p>
	  
	<br/>

	<?php if (mysql_num_rows($result) > 0 ) { ?>
	
	<table class="table table-hover">

		<tr id="tablerow">
			<th>SN.</th>
			<th>Name</th>
			<th>Photo</th>						
			<th>Action</th>
		</tr>
		
<?php
//4. Display results
$i=1;
while ($row = mysql_fetch_assoc($result)) { ?>

		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $row['name'];?></td>
			<td>
				<img src="<?php echo '../uploads/'.$row['photo'];?>" 
					 width="100"
					 height="100"
					 />
					
			</td>
			
			<td>
				<a href="">Edit</a>
				/ 
				<a href="">Delete</a>
			</td>
		</tr>	

<?php $i++; } ?>


		
	</table>

<?php } ?>
	
	<h4>Add Image</h4><br/>
	
	<form method="POST" action="upload.php" enctype="multipart/form-data">
            
			<div class="control-group">
              <label class="control-label" >Name</label>
              <div class="controls">
                <input name="name" type="text" placeholder="Image name"/>
              </div>
            </div>
			
			
			
            <div class="control-group">
              <label class="control-label" >Image</label>
              <div class="controls">
                <input name="photo" type="file" />
              </div>
            </div>
            
			<div class="control-group">
              <div class="controls">                
                <button name="btn_action" value="add_gallery" type="submit" class="btn btn-info">Save</button>
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
