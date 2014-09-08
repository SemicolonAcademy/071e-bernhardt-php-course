<html>

	<head>
		<title>
			Bernhardt PHP
		</title>

		
	<body>
	<form method ="GET" action="">
		No. 1 <br/>
		<input name= "n1" type= "text"/>
		<br/>
		No. 2<br/>
		<input name= "n2" type= "text"/>
		<br/>
		<input type= "submit" value = "submit" />
	</form>
	
  <?php
    $num1 = $_GET['n1'];
	$num2 = $_GET['n2'];
	
	if($num1 >$num2) {
		
		echo $num1;
	}
	else{
	  
		echo $num2;
	}
	  
	?>	

	
	</body>
</html>

	