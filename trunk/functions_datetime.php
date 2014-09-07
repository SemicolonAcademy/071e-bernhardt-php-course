<html>

	<head>
		<title>
			Bernhardt PHP
		</title>

	<body>
		
		
		<?php 
		
			//date_default_timezone_set("Asia/Kathmandu");
			//date_default_timezone_get();
			
			echo $now = time();
			
			echo "<br/>";
			
			echo date("Y-m-d H:i:s", $now);
			
			echo "<br/>";
			
			echo date("l, M jS Y H:iA", $now);
			
			echo "<br/>";
			
			echo date("l, M jS Y H:iA");
			
			echo "<br/>";
			
			echo date("l, M jS Y H:iA", 0);
			
		?>
		
	</body>
</html>

	