<html>

	<head>
		<title>
			Bernhardt PHP
		</title>
	</head>

	<body>
				
		<?php 

		//function to add two numbers
		function add($n1, $n2){
			
			$sum = $n1 + $n2; 
			return $sum;
		}
		
		
		$s = add (234, 876);		
		echo "Sum is: ".$s;
		
		echo "<br/>";
		echo "<br/>";
		
		/*****************************
		WAP function to find largest number 
		in a give integer array
		*****************************/
		
		function arr_max($int_arr){
			
			$max = $int_arr[0];		
			
			for ($i=0; $i < count($int_arr); $i++){				
				
				if ( $int_arr[$i] > $max ) {					
					$max = $int_arr[$i];
			
				}//end if
			
			}//end for
		
			return $max;
			
		}//end arr_max function
		
		echo "maximum value is: "; 
		echo arr_max( 				
					array (39,40,45,9,20)			
				);

		
		

		?>
		
	</body>
</html>
