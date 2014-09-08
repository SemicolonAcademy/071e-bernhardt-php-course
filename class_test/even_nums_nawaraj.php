<html>

	<head>
		<title>
			Bernhardt PHP
		</title>

		
	<body>
	
	<form align="center " method="GET" action="">
		no1<br/>;
		<input name="n" type ="text"/><br/>
	</form>
	
	<?php
	$num=$_GET['n'];
	
	for($i=1;$i<=$num;$i++)
	{
		if($i%2==0)	 
		echo $i."<br/>";
	}
	
	?>
		
				
	</body>
</html>

	