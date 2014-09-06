<html>

	<head>
		<title>
			Bernhardt PHP
		</title>
	</head>

	<body>
		
		<?php 
		
			$ext = "doc";
			
			$ext_arr = array ("png", "jpg", "bmp", "gif");
			
			// in_array() function
			
			if ( in_array($ext, $ext_arr)) {
				
				echo "allowed !";
				
			} else {
				
				echo "Not supported file type!";
				
			}
			
			echo "<br/><br/>";
			echo "array count : " . count ($ext_arr);
			
			echo "<br/><br/>";
			
			$doc_ext_arr = array ("doc", "txt", "pdf", "xls");
			
			$both_ext_arr = array_merge($ext_arr,$doc_ext_arr);
			
			echo "<pre>";
			print_r($both_ext_arr);
			echo "</pre>";
			
			print_r(
					array_unique(
						array("ram","shyam","ram","shyam")
					)
				);
			
			//Push & POP operations in Array
			echo "<br/><br/>";
			$students = array ("ram","sita");
						
			print_r($students);
			echo "<br/><br/>";
			
			array_push($students, "hari");
			
			array_push($students, "gita");
			
			print_r($students);
			echo "<br/><br/>";
			
			$n = array_pop($students);
			echo $n;
			
			//Fliping Key & Values in Array
			
			$cities = array (
			
					"bagmati" => "kathmandu",
					"gandaki" => "pokhara",
					"narayani" => "bharatpur",					
					"mahakali" => "kanchanpur"
					
					);
			
			
			echo "<br/><br/>";
			echo "<pre>";
			print_r($cities);
			
			$zones = array_flip ($cities);
			
			//Sorting Array
			
			print_r($zones);
			
			asort($cities); //sort by value in ASC (ascending order)
			print_r($cities);
			
			ksort($cities); // sort by key in ASC
			print_r($cities);
			
			arsort($cities); //sort by value in DESC (descending order)
			print_r($cities);
			
			krsort($cities); // sort by key in DESC
			print_r($cities);
			
			
			echo "</pre>";
			
			
			
		?>
		
		
		
	</body>
</html>
