<?php 

include_once "config.php";

?>

<html>
	<head>	
		<title><?php echo $setting['site_name'];?></title>
		
		<link href="styles.css"	rel="stylesheet" type="text/css" />
		
	</head>
		
	<body>
	
	<div id="wrapper">
	
		<div id="header">
		
			<div id="logo">
				<h1><?php echo $setting['site_name'];?></h1>
			</div>
			
			<!-- nav -->
						
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
						$id = 4;
						//3. Performing SQL query
						$page_query = "SELECT * FROM pages where `id` = $id";
						$page_result = mysql_query($page_query); //resource or similar to file handle
						$page_row = mysql_fetch_assoc($page_result);
						?>
						
						<h2><?php echo $page_row['title'];?></h2>
						
						<div>
							<?php echo $page_row['content'];?>
							<br/><br/>	
						</div>
						
						
						<div class="content_box bg_red">						
							<p>
								Lorem ipsum dolar sit amet ipsum dolar sit amet
								ipsum dolar sit amet ipsum dolar sit amet Lorem ipsum dolar sit amet 
								ipsum dolar. Ipsum dolar sit amet ipsum.						
								
							</p>
						</div>
						
						<div class="content_box bg_green">						
							<p>
								Lorem ipsum dolar sit amet ipsum dolar sit amet
								ipsum dolar sit amet ipsum dolar sit amet Lorem ipsum dolar sit amet 
								ipsum dolar. Ipsum dolar sit amet ipsum.						
								
							</p>
						</div>
						
						<div class="content_box bg_blue">						
							<p>
								Lorem ipsum dolar sit amet ipsum dolar sit amet
								ipsum dolar sit amet ipsum dolar sit amet Lorem ipsum dolar sit amet 
								ipsum dolar. Ipsum dolar sit amet ipsum.						
								
							</p>
						</div>
				
				</div> <!-- content_are end -->
				
				
		
		</div> <!-- content_wrapper end -->
		
		<div class="clear"></div>
		
		<div id="footer">
			<?php include "footer_inc.php"; ?>
		</div>
		
	
	</div> <!-- wrapper end -->
	
	</body>
</html>

	