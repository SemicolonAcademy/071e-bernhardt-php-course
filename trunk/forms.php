<html>

	<head>
		<title>
			Bernhardt PHP
		</title>

		
	<body>
		
		<form method="GET" action="">
			
			What's your name ? <br/>			
			<input name="username" type="text"/>			
			<input name="btnsubmit" type="submit" value="Submit"/>
		
		</form>
		
		
		<?php 
		
		echo "<pre>"; print_r($_GET); echo "</pre>";
		echo "Welcome - ";
		echo $_GET['username'];
		
		?>
		
		
		
	</body>
</html>

	