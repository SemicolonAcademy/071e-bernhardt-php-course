<html>

	<head>
		<title>
			Bernhardt PHP
		</title>

		
	<body>
	
	<form align="center " method="GET" action="">
		Enter your date of birth:
		Year:
		<input name="year" type ="text"/><br/>
		Month:
		<input name="month" type="text"/>
		<br/>
		Day:
		<input name="day" type="text"/>
		
		<br/>
		<input type="submit" name="btnsubmit" value="OK"/>
		
	</form>
	
	<?php
	 
	$dob= mktime(0,0,0,$_GET['month'],$_GET['day'],$_GET['year']);
	$tm=time();
	
	$dif=$tm-$dob;
	
	$year=$dif/(365*24*60*60);
	
	
	$dif=$dif-($year*365*24*60*60);
	$month=$dif/(30*24*60*60);
	$dif=$dif-($month*30*24*60*60);
	$day=$dif/(24*60*60);
	
	echo "YOUR AGE = ";
	echo "Year=" . $year;
	echo"<br/>";
	echo "month=" .  $month;
	echo "<br/>";
	echo "day=". $day;
	
	
	
	?>
		
				
	</body>
</html>

	