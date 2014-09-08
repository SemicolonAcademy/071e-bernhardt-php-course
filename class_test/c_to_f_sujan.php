<html>

	<head>
		<title>
			B
		</title> 		
	<body>
	
	<form method="GET" action=""> 
       	enter temperature in centigrade <br/>
		<input name= "n1" type= "text"/>
		
		
		
		<input type= "submit" value = "submit" />
	</form>
	<?php
	    $c = $_GET['n1'];
		$f = (($c*9)/5) + 32 ;
		
		
		echo "temperature in fahrenheit is  ";
		echo $f;
		echo "<br/>";
	
		
	?>
	
	</body>
</html>

	