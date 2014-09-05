<html>

	<head>
		<title>
			Bernhardt PHP
		</title>
	</head>

	<body>
		Arrays in PHP <br/>
		
		<?php 
		
		
		$name = "Hari Chandra Mathema";
		echo $name;
		
		echo "<br/>";
		
		$students_arr = array ("ram", "shyam","hari", "sita");
		//echo $students_arr;
		echo "<pre>";
		print_r($students_arr);
		echo "</pre>"; 
		
		for ($i = 0 ; $i < count($students_arr) ; $i++){
		
			echo $students_arr[$i];
			echo "<br/>";
		}
		
		
		foreach ($students_arr as $std) {
		
			echo $std;
			echo "<br/>";
		}
		
		echo "<br/>";
		echo "<br/>";
		
		
		$marks_arr = array(50,60, 45, 65, 75);
		
		foreach ($marks_arr as $v) {
		
			echo $v;
			echo "<br/>";
		}
		
		echo "<pre>";
		print_r($marks_arr);
		echo "</pre>";
		
		
		echo "<br/>";
		echo "<br/>";
		
		
		$mix_arr = array (1, "ram", "shyam", 12.5 );
		print_r($mix_arr);
		
		
		
		
		?>
		
		
		
		<p>
		  lorem ipsum  dolar sit amet  dolar sit amet
		  dolar sit amet dolar sit amet dolar sit amet
		  dolar sit amet dolar sit amet dolar sit amet
		</p>
		
		
		<pre>
		lorem ipsum  dolar sit amet  dolar sit amet
		dolar sit amet dola r          sit amet dolar sit amet
		dolar sit amet dolar sit amet dolar sit amet
		</pre>
		
	</body>
</html>
