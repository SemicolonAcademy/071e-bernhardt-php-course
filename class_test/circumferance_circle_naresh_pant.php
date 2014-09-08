<html>

	<head>
		<title>
			Bernhardt College PHP Course
		</title> 		
	<body>
	
	<form method="GET" action="">
	 <input name="r" type="text"/>
	 <input type="submit" value="result"/>
	 
	</form>
	<?php
	
	//define("PI", pi());
	define("PI", 3.14156);
	
	$n=$_GET['r'];
	
	//echo 2* pi() *$n;
	echo 2* PI *$n;
	?>
	
	</body>
</html>

	