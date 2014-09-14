<html>
	<head>	
		<title>Lorem Ipsum Website</title>
		
		<link href="styles.css"	rel="stylesheet" type="text/css" />
		
	</head>
		
	<body>
	
	<div id="wrapper">
	
		<div id="header">
		
			<div id="logo">
				<h1>Bernhardt Website</h1>
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
				
						<h2>Services</h2>
						
						<p>
							Services lorem ipsum dolar sit amet ipsum dolar sit amet
							ipsum dolar sit amet ipsum dolar sit amet Lorem ipsum dolar sit amet 
							ipsum dolar. Ipsum dolar sit amet ipsum. Lorem ipsum dolar sit amet ipsum dolar sit amet
							ipsum dolar sit amet ipsum dolar sit amet Lorem ipsum dolar sit amet 
							ipsum dolar. 						
							
						</p>
						
				
				</div> <!-- content_are end -->
				
				
		
		</div> <!-- content_wrapper end -->
		
		<div class="clear"></div>
		
		<div id="footer">
			<?php include "footer_inc.php"; ?>
		</div>
		
	
	</div> <!-- wrapper end -->
	
	</body>
</html>

	