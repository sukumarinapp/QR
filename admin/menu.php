<?php
	
	$user_id=$_SESSION['user_id'];
?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
		<ul class="sidebar-menu" data-widget="tree">
			<?php if(($_SESSION['user_type']=="Superadmin")) { ?>
				<li class="<?php if($page=="Dashboard") echo "active"; ?>"><a href="dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
					<ul class="treeview  <?php if($page1=="Dashboard1") echo "active"; ?>">
					</ul>
				</li>
			<?php } else if(($_SESSION['user_type']=="Admin")) { ?>
					<li class="<?php if($page=="Dashboard") echo "active"; ?>"><a href="dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
						<ul class="treeview  <?php if($page1=="Dashboard1") echo "active"; ?>">
						</ul>
					</li>
			<?php } else if(($_SESSION['user_type']=="Kitchen")) { ?>
					<li class="<?php if($page=="Dashboard") echo "active"; ?>"><a href="dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
						<ul class="treeview  <?php if($page1=="Dashboard1") echo "active"; ?>">
						</ul>
					</li>
			<?php } else if(($_SESSION['user_type']=="Billing")) { ?>
					<li class="<?php if($page=="Dashboard") echo "active"; ?>"><a href="dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
						<ul class="treeview  <?php if($page1=="Dashboard1") echo "active"; ?>">
						</ul>
					</li>
					<?php } ?>	
						<?php if(($_SESSION['user_type']=="Admin") || ($_SESSION['user_type']=="Kitchen")) { ?>
					<li class="<?php if($page=="K O T") echo "active"; ?>"><a href="kot.php"><i class="fa fa-dashboard"></i> <span>K O T</span></a>
						<ul class="treeview  <?php if($page1=="K O T") echo "active"; ?>">
						</ul>
					</li>
					     <?php } ?>	
						<?php if(($_SESSION['user_type']=="Admin") || ($_SESSION['user_type']=="Billing")) { ?>
					<li class="<?php if($page=="Billing") echo "active"; ?>"><a href="billing.php"><i class="fa fa-dashboard"></i> <span>Billing</span></a>
						<ul class="treeview  <?php if($page1=="Billing") echo "active"; ?>">
						</ul>
					</li>
					     <?php } ?>	

					     <?php if(($_SESSION['user_type']=="Superadmin") || ($_SESSION['user_type']=="Admin") || ($_SESSION['user_type']=="Billing")) { ?>
					<li class="<?php if($page=="Summary") echo "active"; ?>"><a href="summary.php"><i class="fa fa-circle-o"></i> <span>Daily Summary</span></a>
						<ul class="treeview  <?php if($page1=="Summary") echo "active"; ?>">
						</ul>
					</li>

					<li class="<?php if($page=="Itemwise") echo "active"; ?>"><a href="itemwise.php"><i class="fa fa-circle-o"></i> <span>Itemwise Sales</span></a>
						<ul class="treeview  <?php if($page1=="Itemwise") echo "active"; ?>">
						</ul>
					</li>
					     <?php } ?>	
						 
						<?php if(($_SESSION['user_type']=="Admin") || ($_SESSION['user_type']=="Superadmin")) { ?>
							<li class="<?php if($page=="Category") echo "active"; ?>"><a href="main-category.php"><i class="fa fa-tag -o"></i> <span>Category</span></a>
						<ul class="treeview  <?php if($page1=="Category") echo "active"; ?>">
						</ul>
					</li>

					     <?php } ?>	
						 
						<?php if(($_SESSION['user_type']=="Admin")) { ?>
						<li class="treeview <?php if($page=="Menus") echo "active"; ?>">
							<a href="#">
								<i class="fa fa-bars -o"></i> <span> Menus</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
							<?php if(($_SESSION['user_type']=="Admin")) { ?>
							<li <?php if($page1=="Add Menu") echo "class='active'"; ?>><a href="add_project.php"><i class="fa fa-circle-o text-green"></i>Add Menus</a></li>
							<?php } ?>
							<?php if(($_SESSION['user_type']=="Admin")) { ?>

								<li <?php if($page1=="Active Menus") echo "class='active'"; ?>><a href="active_project.php"><i class="fa fa-circle-o text-orange"></i> Active Menus </a></li>
								<li <?php if($page1=="Inactive Menus") echo "class='active'"; ?>><a href="inactive_project.php"><i class="fa fa-circle-o text-orange"></i> Inactive Menus </a></li>
								<li <?php if($page1=="All Menus") echo "class='active'"; ?>><a href="view_project.php"><i class="fa fa-circle-o text-orange"></i> All Menus </a></li>
					     
						 
							<?php } ?>
							</ul>
						</li>
					<?php } ?>	
						<li class="treeview <?php if($page=="Hotels") echo "active"; ?>">
							<a href="#">
							<?php if($_SESSION['user_type']=="Superadmin") { ?>
								<i class="fa fa-user-o"></i> <span>Hotels</span>
							<?php } else if($_SESSION['user_type']=="Admin") { ?>
								<i class="fa fa-user-o"></i> <span>User</span>
							<?php } else if(($_SESSION['user_type']=="Kitchen") || ($_SESSION['user_type']=="Billing")) { ?>
								<i class="fa fa-user-o"></i> <span><?php echo $_SESSION['full_name']; ?></span>
							<?php } ?>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<?php if($_SESSION['user_type']=="Superadmin") { ?>
								<li <?php if($page1=="Add Hotel") echo "class='active'"; ?>><a href="add-users.php"><i class="fa fa-circle-o text-green"></i> Add Hotel</a></li>
								<li <?php if($page1=="View Hotels") echo "class='active'"; ?>><a href="view_users.php"><i class="fa fa-circle-o text-orange"></i> View Hotels </a></li>
								<?php } ?>
								<?php if($_SESSION['user_type']=="Admin") { ?>
								<li <?php if($page1=="Add Hotel") echo "class='active'"; ?>><a href="add-users.php"><i class="fa fa-circle-o text-green"></i> Add User</a></li>
								<li <?php if($page1=="View Hotels") echo "class='active'"; ?>><a href="view_users.php"><i class="fa fa-circle-o text-orange"></i> View Users </a></li>
								<?php } ?>
								<li <?php if($page1=="My Profile") echo "class='active'"; ?>><a href="my-profile.php"><i class="fa fa-circle-o fa-fw"></i>My Profile</a></li>
								<li <?php if($page1=="Change Password") echo "class='active'"; ?>><a href="password.php"><i class="fa fa-circle-o fa-fw"></i>Change Password</a></li>
								<li <?php if($page1=="Demo-project") echo "class='active'"; ?>><a href="https://remotedesktop.google.com/support/" target="_blank" class="nav-link"><i class="fa fa-circle-o fa-fw"></i>Screen Share</a></li>

								<li <?php if($page1=="Logout") echo "class='active'"; ?>><a href="logout.php"><i class="fa fa-circle-o fa-fw"></i>Logout</a></li>
							</ul>
						</li>
						
						</ul>
					</section>
					<!-- /.sidebar -->
				</aside>				