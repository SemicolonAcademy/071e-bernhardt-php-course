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
						$id = $_GET['news_id'];
						//3. Performing SQL query
						$news_query = "SELECT * FROM news where `id` = $id";
						$news_result = mysql_query($news_query); //resource or similar to file handle
						$news_row = mysql_fetch_assoc($news_result);
						?>

						<h2><?php echo $news_row['title'];?></h2>
						
						<div>
							<?php echo $news_row['content'];?>
							
							<br/><br/>Posted On:
							<?php echo date("Y/m/d", $news_row['created_at']);?>
								
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

	