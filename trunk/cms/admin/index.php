<?php 
		//error_reporting(0);
		
		/*echo "<pre>";
		print_r($_POST);
		echo "</pre>"; */
		
		if ($_POST['btn_action'] == "login"){
			
			$email = $_POST['email'];			
			$pass = $_POST['password'];			
			
			if ($email !="" && $pass !="") {
			
				$p = md5($pass);
				
				mysql_connect('localhost', 'root', '');    
				mysql_select_db('bernhardt');

				$query = "SELECT * FROM users WHERE 
				`email` = '$email' AND `password` = '$p' 
				AND `status` = 'active' LIMIT 1";
				$result = mysql_query($query) or die(mysql_error()); 
				
				//!empty($result) &&
				
				if ( mysql_num_rows($result) > 0) {
					
					$user = mysql_fetch_assoc($result);					
					echo $msg_success = "Login successfull";
					//header("location: dashboard.php")
					
				}else {
				
					echo $msg_error = "Invalid login";
				}
			
			}else {
			
				echo $msg_error = "Username or password not provided";			
			}

		
		}
		
		?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign in &middot; Bernhardt CMS</title>

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    
  </head>

  <body>

    
		
		
	<div class="container">
	
	
      <form class="form-signin" method="POST">
	
		<?php if (!empty($msg_error)) { ?>
		<span class="label label-important">
			<?php echo $msg_error;?>
		</span>
		<?php }?>
		
		<?php if (!empty($msg_success)) { ?>
		<span class="label label-success">
			<?php echo $msg_success;?>
		</span>
		<?php }?>
	
	
        <h2 class="form-signin-heading">Please sign in</h2>
        
		<input name="email" type="text" class="input-block-level" placeholder="Email address">
        <input name="password" type="password" class="input-block-level" placeholder="Password">
        
		<label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        
		<button name="btn_action" value="login" class="btn btn-large btn-primary" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
  </body>
</html>
