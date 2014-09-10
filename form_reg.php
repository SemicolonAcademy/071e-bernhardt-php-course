<html>

	<head>
		<title>
			Bernhardt PHP
		</title>

		
	<body>
		
		<h3>Registration Form</h3>
		
		<form method="POST" action="">
			
			
			First Name:
			<input type="text" name="fname" />
			<br/>
			
			Last Name:		
			<input type="text" name="lname"/>
			<br/>
			
			Password:
			<input type="password" name="password"/>
			<br/>
			
			Email Address:
			<input type="text" name="email"/>
			<br/>
			
			DOB:
			<select name="year">
				
				<option selected="1">Year</option>
				
				<?php 
				
					for ($y=1980; $y <=2005; $y++) { 						echo "<option> $y </option>";
					}
				?>				
				
			</select>
			
			<select name="month">
				<option>Month</option>
				<option>Jan</option>
				<option>Feb</option>
				<option>Mar</option>
			</select>
			
			<select name="day">
				<option>Day</option>
				
				<?php for ($d=1; $d <=31; $d++) { ?>
					<option><?php echo $d;?></option>
				<?php }?>
				
			</select>
			
			<br/>
			
			Gender:
			<input type="radio" name="gender" value="m"/> Male
			<input type="radio" name="gender" value="f"/> Female
			
			<br/>
			
			Experience:<br/>
			<input type="checkbox" name="exp[]" value="php"/> PHP <br/>
			<input type="checkbox" name="exp[]" value="c"/> C <br/>
			<input type="checkbox" name="exp[]" value="cpp"/> C++ <br/>
			
			<br/>
			
			Remarks:<br/>
			<textarea name="remarks" rows="10" cols="40"></textarea>
			
			<br/>
			<input type="submit" value="Submit"/>
			<input type="reset" value="Reset"/>
			
		</form>
		
		<?php 
		
		echo "<pre>";
		
		print_r($_POST);
		
		echo "</pre>";
		
		?>
				
	</body>
</html>

	