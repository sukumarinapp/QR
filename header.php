<?php
include "admin/config.php";
$page = "Home";
$table_id = $_GET['table_id'];
$center_id = $_GET['center_id'];
$sql = "select * from users where id=$center_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$project_name = $row['project_name'];
$email = $row['email'];
$mobile = $row['mobile'];
$address = $row['address'];
$map = $row['map'];
$photo  = $row['photo'];
?>
<header id="site-header" class="main-heaader fixed-top">
		<div class="container w3HeaderLogoEd">
			<nav class="navbar navbar-expand-lg navbar-dark stroke">
					<h1><a class="navbar-brand" href="index.php?table_id=<?php echo $table_id; ?>&center_id=<?php echo $center_id; ?>">
						<span class="fa fa-coffee"></span> <?php echo $project_name ?>					</a></h1>
								<button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
					aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
					<span class="navbar-toggler-icon fa icon-close fa-times"></span>
					</span>
				</button>

				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<ul id="primary-menu" class="navbar-nav ml-auto"><li id="menu-item-9" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-9 nav-item"><a href="index.php?table_id=<?php echo $table_id; ?>&center_id=<?php echo $center_id; ?>" class="nav-link">Home</a></li>
<li id="menu-item-10" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10 nav-item"><a href="about.php?table_id=<?php echo $table_id; ?>&center_id=<?php echo $center_id; ?>" class="nav-link">About Us</a></li>
<li id="menu-item-49" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-12 current_page_item menu-item-49 nav-item active"><a href="menu.php?table_id=<?php echo $table_id; ?>&center_id=<?php echo $center_id; ?>" class="nav-link active">Menu</a></li>

<li id="menu-item-54" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54 nav-item"><a href="contact.php?table_id=<?php echo $table_id; ?>&center_id=<?php echo $center_id; ?>" class="nav-link">Contact Us</a></li>
</ul>					
				</div>


				<!-- toggle switch for light and dark theme -->
												<div class="mobile-position DarkandLight">
					<nav class="navigation">
						<div class="theme-switch-wrapper">
							<label class="theme-switch" for="checkbox">
								<input type="checkbox" id="checkbox">
								<div class="mode-container py-1">
									<i class="gg-sun"></i>
									<i class="gg-moon"></i>
								</div>
							</label>
						</div>
					</nav>
				</div>
								<!-- //toggle switch for light and dark theme -->

			</nav>
		</div>
	</header>