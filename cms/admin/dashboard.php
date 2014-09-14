<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>CMS Backend</title>
    
	<link href="assets/css/bootstrap.css" rel="stylesheet">
    
	<style>
      body {
        padding-top: 60px; 
		
		/* 60px to make the container go all the way to the 
		bottom of the topbar */
      }
    </style>
    
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          
          <a class="brand" href="#">CMS Administration</a>
          
		  <div class="nav-collapse collapse">
            <ul class="nav">
              <li  class="active"><a href="">Users</a></li>
              <li><a href="">News</a></li>
              <li><a href="">Pages</a></li>
              <li><a href="">Navs</a></li>
              <li><a href="">Settings</a></li>
            </ul>
          </div>
		  
        </div>
      </div>
    </div>

    <div class="container">

    <h1>Users</h1>
    
	<p>
		Users Administration
		&nbsp;&nbsp;&nbsp;
		<a href=""><i class="icon-plus"></i> Add User</a>		
	</p>
	  
	<br/>

	<table class="table table-hover">

		<tr>
			<th>SN.</th>
			<th>Email</th>
			<th>Full Name</th>
			<th>Created At</th>
			<th>Action</th>
		</tr>
		
		<tr>
			<td>1</td>
			<td>ram@gmail.com</td>
			<td>Ram Thapa</td>
			<td>2014 Sept 14</td>
			
			<td>
				<a href="">Edit</a>
				/ 
				<a href="">Delete</a>
			</td>
		</tr>	

<tr>
			<td>1</td>
			<td>ram@gmail.com</td>
			<td>Ram Thapa</td>
			<td>2014 Sept 14</td>
			
			<td>
				<a href="">Edit</a>
				/ 
				<a href="">Delete</a>
			</td>
		</tr>	

<tr>
			<td>1</td>
			<td>ram@gmail.com</td>
			<td>Ram Thapa</td>
			<td>2014 Sept 14</td>
			
			<td>
				<a href="">Edit</a>
				/ 
				<a href="">Delete</a>
			</td>
		</tr>	


<tr>
			<td>1</td>
			<td>ram@gmail.com</td>
			<td>Ram Thapa</td>
			<td>2014 Sept 14</td>
			
			<td>
				<a href="">Edit</a>
				/ 
				<a href="">Delete</a>
			</td>
		</tr>	

<tr>
			<td>1</td>
			<td>ram@gmail.com</td>
			<td>Ram Thapa</td>
			<td>2014 Sept 14</td>
			
			<td>
				<a href="">Edit</a>
				/ 
				<a href="">Delete</a>
			</td>
		</tr>	

<tr>
			<td>1</td>
			<td>ram@gmail.com</td>
			<td>Ram Thapa</td>
			<td>2014 Sept 14</td>
			
			<td>
				<a href="">Edit</a>
				/ 
				<a href="">Delete</a>
			</td>
		</tr>	

<tr>
			<td>1</td>
			<td>ram@gmail.com</td>
			<td>Ram Thapa</td>
			<td>2014 Sept 14</td>
			
			<td>
				<a href="">Edit</a>
				/ 
				<a href="">Delete</a>
			</td>
		</tr>			
		</tr>			
		</tr>			
		
	</table>

	<h4>Add User</h4><br/>
	
	<form method="" action="">
            
			<div class="control-group">
              <label class="control-label" >Email</label>
              <div class="controls">
                <input name="email" type="text" placeholder="Email"/>
              </div>
            </div>
			
			
			
            <div class="control-group">
              <label class="control-label" >Password</label>
              <div class="controls">
                <input name="password" type="password" placeholder="Password">
              </div>
            </div>
            
			<div class="control-group">
              <label class="control-label">Full Name</label>
              <div class="controls">
                <input name="full_name" type="text" placeholder="Full Name">
              </div>
            </div>
			
			
			<div class="control-group">
              <div class="controls">                
                <button type="submit" class="btn btn-info">Save</button>
              </div>
            </div>
			
	</form>
	
	
	
	  
    </div> <!-- /container -->
    
  </body>
</html>
