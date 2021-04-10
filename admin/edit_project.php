<?php
session_start();
$page = "Menus";
$page1 = "All Menus";
include "timeout.php";
include "config.php";
if (($_SESSION['user_type'] != "Superadmin")&&($_SESSION['user_type'] != "Admin"))header("location: index.php");
$id = $_GET['id'];
$msg = "";
$msg_color = "";
$user_id=$_SESSION['user_id'];

$category_id = "";
$project_name = "";
$description = "";
$pricing = "";
$status = "";
$last_update = date('y/m/d');
$photo = "";

if (isset($_POST['submit'])) {
   
    $category_id = trim($_POST['category_id']);
    $project_name = trim($_POST['project_name']);
    $description = trim($_POST['description']);
    $pricing = trim($_POST['pricing']);
    $status = trim($_POST['status']);

        $stmt = $conn->prepare("update project set category_id=?,project_name=?,description=?,pricing=?,status=?,last_update=? where id=?");
		
        $stmt->bind_param("sssssss", $category_id,$project_name,$description,$pricing,$status,$last_update,$id);
        $stmt->execute() or die ($stmt->error);
		$id=$stmt->update_id;
		
         $file_name = $_FILES['photo']['name'];
        if (trim($file_name) != "") {
            $ext = pathinfo($file_name, PATHINFO_EXTENSION);
            $file_name = $id . "." . $ext;
            $query = "update project set photo = '" . $file_name . "' where id =$id";
            mysqli_query($conn, $query);
            $target_path = "photo/";
            $target_path = $target_path . $file_name;
            move_uploaded_file($_FILES['photo']['tmp_name'], $target_path);
        }

        header("location: view_project.php");
    }


$sql3 = "select * from project where id=$id";
$result3 = mysqli_query($conn, $sql3);
$row3 = mysqli_fetch_assoc($result3);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Edit Project</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/dataTables.responsive.css">
<script src="css/dataTables.responsive.js"></script>
  <link rel="stylesheet" href="css/dataTables.responsive.scss">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">

     <?php include "header.php"; ?>

  
    <?php include "menu.php"; ?>

  <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
       <div class="row">
                  <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading" align="center">
                                <h1 class="panel-title">Edit Project</h1>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                            <form method="post" action="" enctype="multipart/form-data">

                            <div class="panel-body">

                                <div class="row">

                                    <div class="col-md-12">

												<div class="form-group">
                                                <label>Main Category Name</label>
<select id="category_id" name="category_id" class="form-control"required="required" >
<?php
	$sql = "select * from category";
	$result = mysqli_query($conn, $sql);
	while ($row = mysqli_fetch_array($result)) {
		echo '<option value="' . $row['id'] . '">' . $row['category_name'] . '</option>';
	}
?></select>
        </div>
		                                        <div class="form-group">
                                            <label for="project_name" class="control-label required">Menu Name</label>
                                            <input value="<?php echo $row3['project_name']; ?>" required="required"  type="text"
                                                   name="project_name" id="project_name"  class="form-control" placeholder="">
                                        </div>
	    <div class="form-group">
            <label for="description" class="control-label required">Description</label>
            <textarea value="<?php echo $row3['description']; ?>" rows="4" required="required" type="text" maxlength="" name="description" id="description" class="form-control" placeholder=""><?php echo $row3['description']; ?></textarea>
        </div>
                                      
                                         <div class="form-group">
                                            <label for="pricing" class="control-label required">Pricing</label>
                                            <input maxlength="5" value="<?php echo $row3['pricing']; ?>" required="required" type="text"  name="pricing" id="pricing" class="Number form-control" placeholder="">
                                        </div>
										
                                         <div class="form-group">
                                                <label for="status" class="control-label required">Status</label>
                                                <select name="status" id="status" class="form-control">
                                                    <option <?php if ($row3['status'] == "In Stock") echo " selected='selected'"; ?> value="In Stock">In Stock</option>
													
                                                    <option <?php if ($row3['status'] == "Out of Stock") echo " selected='selected'"; ?> value="Out of Stock">Out of Stock</option>
													
                                                </select>
                                            </div>
                                         <div class="form-group">

                                                <label for="photo" class="control-label">Photo</label>

                                                <input name="photo" class="form-control" type="file">

                                            </div>
                                        <div class="form-group text-center">
                                            <input required="required" class="btn btn-info" type="submit" name="submit" value="Update"/>
                                            <a href="view_project.php" class="btn btn-info">Back</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
                   </div>
								</div>
							</div>
						</div>
					</div>
				</div><?php include "footer.php"; ?>
			
		
				

	
  <!-- Control Sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<script>
$(document).ready(function() {
  $('.Number').keypress(function (event) {
          var keycode = event.which;
    if (!(event.shiftKey == false && (keycode == 46 || keycode == 8 || keycode == 37 || keycode == 39 || (keycode >= 48 && keycode <= 57)))) {
      event.preventDefault();
    }
  });
});
</script>
</body>
</html>
