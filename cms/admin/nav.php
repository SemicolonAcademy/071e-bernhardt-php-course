<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          
          <a class="brand" href="dashboard.php">CMS Administration</a>
          
		  <?php 
				$filename = basename($_SERVER['PHP_SELF']);	
			?>
	
		  <div class="nav-collapse collapse">
            <ul class="nav">
              <li <?php if ($filename=="dashboard.php") echo "class='active'";?> >
				<a href="dashboard.php">Users</a>
			  </li>
              <li <?php if ($filename=="news.php") echo "class='active'";?>><a href="news.php">News</a></li>
              <li <?php if ($filename=="pages.php") echo "class='active'";?>><a href="pages.php">Pages</a></li>
              <li <?php if ($filename=="menus.php") echo "class='active'";?>><a href="menus.php">Menus</a></li>
              <li <?php if ($filename=="settings.php") echo "class='active'";?>><a href="settings.php">Settings</a></li>
              <li>
				<a href="logout.php">
					<?php echo $_SESSION['email'];?>
					Logout
				</a>
			</li>
            </ul>
          </div>
		  
        </div>
      </div>
    </div>

	