<header class="main-header">
    <!-- Logo -->
    <a href="dashboard.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>H</b>S</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b><?php echo $_SESSION['full_name']; ?></b>&nbsp;<b></b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
	  
        <ul class="nav navbar-nav"></br>
          <!-- Messages: style can be found in dropdown.less-->

          <?php
						$user_id = $_SESSION['user_id'];

                            $sql5 = "select * from users where id=$user_id";
                        $result5 = mysqli_query($conn, $sql5);
                        while ($row5 = mysqli_fetch_assoc($result5)) {
                            ?>   
			 
          <!-- User Account: style can be found in dropdown.less -->
		  <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             <img src="photo/user.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"> <?php echo $_SESSION['full_name']; ?></span>
            </a>

            <ul class="dropdown-menu">
              <!-- User image -->
              
              <li class="user-header">
              <img src="photo/logo/<?php echo $row5['photo']; ?>?<?php echo rand(); ?>"/>

                <p>
                <?php echo $row5['full_name']; ?>
                </p>
              </li>
              <!-- Menu Footer-->
    <li class="user-footer">

  <?php if(($_SESSION['user_type']=="Admin")) { ?>
                <b><a class="btn btn-default btn-flat" href="my-profile.php">Profile</a></b>

             <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Logout</a>
                </div>
  <?php } if(($_SESSION['user_type']=="Superadmin")) { ?>
                <b><a class="btn btn-default btn-flat" href="my-profile.php">Profile</a></b>

             <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Logout</a>
                </div>
				<?php } ?>
              </li>
			               

            </ul>
          </li>
          <?php } ?>
        </ul>
      </div>
    </nav>
  </header>