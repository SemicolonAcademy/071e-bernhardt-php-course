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
$query = "SELECT * FROM news";
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

    <h1>News</h1>
    
	<p>
		News Administration
		&nbsp;&nbsp;&nbsp;		
	</p>
	  
	<br/>

	<?php if (mysql_num_rows($result) > 0 ) { ?>
	
	<table class="table table-hover">

		<tr id="tablerow">
			<th>SN.</th>
			<th>Title</th>
			<th>Content</th>			
			<th>Created At</th>			
			<th>Action</th>
		</tr>
		
<?php
//4. Display results
$i=1;
while ($row = mysql_fetch_assoc($result)) { ?>

		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $row['title'];?></td>
			<td class="span4">
				<?php echo substr($row['content'],0,100);?>
			</td>
			
			
			<td><?php echo date("Y/m/d", $row['created_at']);?></td>
			
			<td>
				<a href="news_edit.php?id=<?php echo $row['id']; ?>">Edit</a>
				/ 
				<a href="db.php?action=news_delete&id=<?php echo $row['id']; ?>">Delete</a>
			</td>
		</tr>	

<?php $i++; } ?>


		
	</table>

<?php } ?>
	
	<h4>Add News</h4><br/>
	
	<form method="POST" action="db.php">
            
			<div class="control-group">
              <label class="control-label" >Title</label>
              <div class="controls">
                <input name="title" type="text" placeholder="News Title"/>
              </div>
            </div>
			
			
			
            <div class="control-group">
              <label class="control-label" >Content</label>
              <div class="controls">
                <textarea name="content" rows="10" class="span6"></textarea>
              </div>
            </div>
            
			<div class="control-group">
              <div class="controls">                
                <button name="btn_action" value="add_news" type="submit" class="btn btn-info">Save</button>
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
