<html>

	<head>
		<title>
			Bernhardt PHP
		</title>

	<body>
		
		
		<?php 
		
		//phpinfo();
		
		$filename = "sample.jpg";
		
		
		/*
		for ($i = 0; $i < strlen($filename);  $i++){
			echo $filename[$i]
		}*/
		
		// substr ( string string, int start [, int length] )

		echo substr($filename, -4);
		
		echo "<br/>";
		
		$msg = "Hello World!";
		
		
		echo substr($msg, 0, 5);
		
		echo "<br/>";
		
		echo substr($msg, 6);
		
		echo "<br/>";
		
		
		echo substr($msg, -6, 2);
		
		echo "<br/>";
		
		echo substr($filename, -3);
		
		/*
		sample.jpg
		file.doc
		word2007.docx
		*/
		
		//character position in the string
		echo "<br/>";
		echo strpos($filename, ".");
		
		echo "<br/>";
		echo substr($filename, strpos($filename, ".") + 1);
		
		echo "<br/>";
		echo strtoupper("hello world");
		echo "<br/>";
		echo strtolower("HELLO WORLD");
		
		echo "<br/>";
		echo ucfirst("uttam giri");
		
		echo "<br/>";
		echo ucwords("uttam giri");
		
		
		//Hashing
		echo "<br/>";
		
		$password = "iloveyou";
		
		echo "md5: " . md5($password);
		
		echo "<br/>";
		
		echo "sha1: ". sha1($password);
		
		echo "<br/>";
		
		$num = 10/3;
		echo $num;
		echo "<br/>";
		echo number_format ($num, 2);
		
		echo "<br/>";
		
		echo stripslashes ("10 o\'clock");
		
		echo "<br/>";
		
		echo addslashes ("10 o'clock");
		
		echo "<br/>";
		
		$html = "<p><b>hello</b> world in paragraph</p>";
		
		echo $html;
		
		echo "<br/>";
		
		echo strip_tags ($html);
		
		echo "<br/>";
		
		$msg = "Hi \"Ram\" it\'s 10 o\'clock";
		echo stripslashes ($msg);
		
		
		echo "<br/>";
		
		/*
		
		strcmp -- Binary safe string comparison

		Description
		int strcmp ( string str1, string str2 )

		Returns < 0 if str1 is less than str2; 
		> 0 if str1 is greater than str2, 
		and 0 if they are equal. 
		
		*/
		
		if (strcmp("PHP","PHP") == 0){
			echo "yes";
		}else {
			echo "no";
		}
		
		
		
		
		?>
		
	</body>
</html>

	