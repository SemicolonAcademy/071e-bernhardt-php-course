<html>

	<head>
		<title>
			Bernhardt PHP
		</title>

		
	<body>
		
		<form method="GET" action="">
			
			N1? <br/>			
			<input name="n1" type="text"/><br/>			
			
			N2? <br/>			
			<input name="n2" type="text"/><br/>
			
			<input name="btnsubmit" type="submit" value="Calculate Sum"/>
		
		</form>
		
		<?php 
		
		echo "<pre>"; print_r($_GET); echo "</pre>";
		
		$num1 = $_GET['n1'];
		$num2 = $_GET['n2'];
		echo "Sum= " . ($num1 + $num2);
		
		?>
		
		
		
	</body>
</html>

	