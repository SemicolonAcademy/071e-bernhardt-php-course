<html>

	<head>
		<title>
			B
		</title> 		
	<body>
	<form method="GET" action=""> 
       	No. 1 <br/>
		<input name= "n1" type= "text"/>
		
		
		
		<input type= "submit" value = "submit" />
	</form>
	<?php
	    $num1 = $_GET['n1'];
		
		
		echo $num1*($num1+1)/2;
		echo "<br/>";
		
		
		
	    
		
	?>
	
	</body>
</html>

	