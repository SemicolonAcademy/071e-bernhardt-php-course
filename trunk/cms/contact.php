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
				
						<h2>Contact Us</h2>
						
						<p>
							<form method="" action="">
								Name:<br/>
								<input type="text" name="username"/>
								<br/>
								Message<br/>
								<textarea name="message" rows="10" cols="30"></textarea>
								<br/>
								<input type="submit" value="Submit">
							</form>							
							
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

	