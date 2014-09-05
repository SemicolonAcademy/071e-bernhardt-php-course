<html>

	<head>
		<title>
			Bernhardt PHP
		</title>
	</head>

	<body>
		
		<?php 
		
		/*Associative Array in PHP*/
		
		$zone_headquarters = array (
		
			"bagmati" => "kathmandu",
			"kaski" => "pokhara",
			"narayani" => "chitwan"
		
		);
		
		/*
		echo $zone_headquarters['bagmati'];		
		echo "<pre>";
		print_r($zone_headquarters);
		echo "</pre>";
				
		
		foreach ($zone_headquarters as $v){
		
			echo $v;
			echo "<br/>";
		}
		
		
		foreach ($zone_headquarters as $k => $v){
		
			echo $k . " --- " .$v;
			echo "<br/>";
		}
		
		*/
		
		
		$students = array (
		
					array (
						"name" 		=> "ram", 
						"address"   => "bafal", 
						"email" 	=> "ram@gmail.com"
					),
					
					array (
						"name" 		=> "sita", 
						"address"   => "kalanki", 
						"email" 	=> "sita@gmail.com"
					)
					
		);
		
		echo "<pre>"; print_r($students); echo "</pre>";
		
		?>
		
		
		<table border="1"> 
		
			<tr>
				<th>S.No.</th> <th>Name</th> <th>Address</th><th>Email</th>
			</tr>
			
			<?php 
			
				$i=1; 
				foreach($students as $s){ 
			?>
			
				<tr>				
					<td><?php echo $i++;?></td>
					<td><?php echo $s['name'];?></td>
					<td><?php echo $s['address'];?></td>
					<td><?php echo $s['email'];?></td>
				</tr>
			
			<?php
			}
			?>
									
		</table>
		
		
		
	</body>
</html>


<?php /*foreach($students as $s){
			
				echo "<tr>";
				echo "<td>1</td>";
				echo "<td>". $s['name'] . "</td>";
				echo "<td>". $s['address'] . "</td>";
				echo "<td>". $s['email']."</td>";
				echo "</tr>";
			
			} */
			
			?>
