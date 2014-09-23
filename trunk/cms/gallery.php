<?php 

include_once "config.php";

?>

<html>
	<head>	
		<title><?php echo $setting['site_name'];?></title>
		
		<link href="styles.css"	rel="stylesheet" type="text/css" />
		
		
	
		<script src="assets/jquery.js"></script>
		
		<link media="screen" rel="stylesheet" href="assets/colorbox/colorbox.css" />
		<script src="assets/colorbox/jquery.colorbox-min.js"></script>
		
		<script>
			$(document).ready(function(){			
				
				$(".c_box").colorbox(
					{
						width:"80%", 
						height:"80%"
					}
				);		
			
			});
		</script>
	
	
		
	</head>
		
	<body>
	
	<div id="wrapper">
	
		<div id="header">
		
			<div id="logo">
				<h1><?php echo $setting['site_name'];?></h1>
			</div>
			
			<div id="nav">	
				<?php
					include "nav_inc.php";
			
				?>		
			</div>
			
		</div>
		
		<div id="content-wrapper">
				
				<div id="left_sidebar">				
					
					<?php
						include "left_inc.php";
					?>
					
				</div> <!-- left_sidebar end -->
				
				<div id="content_area">
				 
				
						<?php				
						$query = "SELECT * FROM gallery";
						$result = mysql_query($query); //resource or similar to file handle
						
						while ($row = mysql_fetch_assoc($result)) {
						?>

						
						<div style="border:1px solid #ccc; float:left; margin:10px; padding:20px;">
						
						<h2><?php echo $row['name'];?></h2>
						
						<a class='c_box' href="<?php echo 'uploads/'.$row['photo'];?>" title="<?php echo $row['name'];?>">
		
							<img src="<?php echo 'uploads/'.$row['photo'];?>" 
					 width="100"
					 height="100"
					 />
					 
					 </a>
	
						</div>					
						
						<?php } ?>
					
				
				</div> <!-- content_are end -->
				
				
		
		</div> <!-- content_wrapper end -->
		
		<div class="clear"></div>
		
		<div id="footer">
			<?php include "footer_inc.php"; ?>
		</div>
		
	
	</div> <!-- wrapper end -->
	
	</body>
</html>

	