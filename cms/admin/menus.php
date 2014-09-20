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
$query = "SELECT * FROM menus";
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

    <h1>Navigation Menus</h1>
    
	<p>
		Navigation Menu Administration
		&nbsp;&nbsp;&nbsp;		
	</p>
	  
	<br/>

	<?php if (mysql_num_rows($result) > 0 ) { ?>
	
	<table class="table table-hover">

		<tr id="tablerow">
			<th>SN.</th>
			<th>Name</th>
			<th>Link</th>			
			<th>Description</th>			
			<th>Order</th>			
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
				<a href="<?php echo $row['href'];?>">
					<?php echo $row['href'];?>
				</a>
			</td>
			<td><?php echo $row['description'];?></td>
			<td><?php echo $row['order'];?></td>
			
			<td>
				<a href="menus_edit.php?id=<?php echo $row['id']; ?>">Edit</a>
				/ 
				<a href="db.php?action=menus_delete&id=<?php echo $row['id']; ?>">Delete</a>
			</td>
		</tr>	

<?php $i++; } ?>


		
	</table>

<?php } ?>
	
	<h4>Add Menu</h4><br/>
	
	<form method="POST" action="db.php">
            
			<div class="control-group">
              <label class="control-label" >Name</label>
              <div class="controls">
                <input name="name" type="text" placeholder="Name"/>
              </div>
            </div>
			
			
			
            <div class="control-group">
              <label class="control-label" >href</label>
              <div class="controls">
                <input name="href" type="text" placeholder="href"/>
              </div>
            </div>
			
			<div class="control-group">
              <label class="control-label" >Description</label>
              <div class="controls">
                <input name="description" type="text" placeholder="Description"/>
              </div>
            </div>
			
			<div class="control-group">
              <label class="control-label" >Menu Order</label>
              <div class="controls">
                <input name="order" type="text" placeholder="Menu order"/>
              </div>
            </div>
            
			<div class="control-group">
              <div class="controls">                
                <button name="btn_action" value="add_menus" type="submit" class="btn btn-info">Save</button>
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
