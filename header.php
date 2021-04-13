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
								

				

				

			</nav>
		</div>
	</header>