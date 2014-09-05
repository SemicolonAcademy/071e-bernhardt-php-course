<html>

	<head>
		<title>
			This is title			
		</title>
	</head>

	<body>
		
		<?php 
		
		$customer_unit = 300;
		
		
		$first20 = 80;
		$twenty_to_150 = (150 - 20) * 8;
		$onefifty_to_250 = (250 - 150) * 10;
		
		$over_250 = ($customer_unit - 250 ) * 15;
		$total = $first20 + $twenty_to_150 + $one
		fifty_to_250 + $over_250;
		echo $total;
		
		
		
		?>
		
		
	</body>
</html>
