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
		
				
		$status = array (
		
					array (
						"image" 		=> "logo.jpg", 
						"name"   => "Semicolon Developers Network Pvt. Ltd.", 
						"date" 	=> "Sept 6th 2014",
						"status"  => "lorem ipsum dolar sit amet dolar sit amet lorem ipsum dolar sit amet dolar sit amet"						
					),
					array (
						"image" 		=> "sample.jpg", 
						"name"   => "Bernhardt College", 
						"date" 	=> "Aug 13th 2013",
						"status"  => "welcome all fresher to Bernhardt College"						
					)					
		);
		
		
		?>
		
		<?php foreach ($status as $s) { ?>
		<table align="center" 
			   style="width:400px;border-bottom:1px solid #999;"> 
			<tr>
				<td width="64">
					<img src="<?php echo $s['image'];?>" width="64" height="64"/>
				</td>
				<td>
					<!-- <b> tag is for bold -->
					<b><?php echo $s['name'];?></b>
					<br/>
					<small><?php echo $s['date'];?></small>					
				</td>
			</tr>						
			<tr>				
				<td colspan="2">
					<?php echo $s['status'];?>
				</td>
			</tr>								
		</table>		
		<?php    }  ?>
				
		
	</body>
</html>

