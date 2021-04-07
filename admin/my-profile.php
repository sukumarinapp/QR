<?php
session_start();
$page = "Hotels";
$page1 = "My Profile";
include "timeout.php";
include "config.php";
if (($_SESSION['user_type'] != "Superadmin") && ($_SESSION['user_type'] != "Admin")) header("location: index.php");
$user_id=$_SESSION['user_id'];
$msg = "";
$msg_color = "";
$full_name = "";
$email = "";
$password = "";
$mobile = "";
$address = "";
if (isset($_POST['submit'])) {
	$full_name = trim($_POST['full_name']);
    $email = trim($_POST['email']);
    $address = trim($_POST['address']);
    $password = trim($_POST['password']);
    $mobile = trim($_POST['mobile']);
        $stmt = $conn->prepare("UPDATE users  set full_name=?,email=?,mobile=?,address=?,password=? where id=?");
        $stmt->bind_param("ssssss",$full_name, $email,$mobile,$address,$password,$id);
        $stmt->execute();
       
        header("location: view_users.php");
    
}
$sql = "select * from users where id=$user_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Edit Users</title>
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
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
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
      <div class="row">
 
				        <div class="panel-heading text-center">
                            <b>Edit Users</b>
                        </div>
        <div class="col-xs-12">
		                   <div class="login-panel panel panel-default">
 <form method="post" action="" enctype="multipart/form-data">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="full_name required"
                                                       class="control-label required">Full Name</label>
                                                <input value="<?php echo $row['full_name']; ?>" required="required" type="text"
                                                       maxlength="50"
                                                       name="full_name" id="full_name" class="form-control"
                                                       placeholder="">
                                            </div>
											
											<div class="form-group">
                                                <label for="email required"
                                                       class="control-label required">Username Or Email</label>
                                                <input value="<?php echo $row['email']; ?>" required="required" type="text"
                                                       maxlength="100"
                                                       name="email" id="email" class="form-control"
                                                       placeholder="">
                                            </div>
										
										<div class="form-group">
                                                <label for="password required"
                                                       class="control-label required">Password</label>
                                                <input value="<?php echo $row['password']; ?>" required="required" type="text"
                                                       maxlength="100"
                                                       name="password" id="password" class="form-control"
                                                       placeholder="">
                                            </div>
										
										<div class="form-group">
                                                <label for="mobile required"
                                                       class="control-label required">Mobile</label>
                                                <input value="<?php echo $row['mobile']; ?>" required="required" type="text"
                                                       maxlength="100"
                                                       name="mobile" id="mobile" class="form-control"
                                                       placeholder="">
                                            </div>
											
											<div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" name="address" rows="3" placeholder="Enter ..."><?php echo $row['address']; ?></textarea>
                      </div>
                                        <div class="form-group text-center">
                                            <input required="required" class="btn btn-info"
                                                   type="submit"
                                                   name="submit" value="Update"/>
                                            <a href="view_users.php" class="btn btn-info">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>						
            </div>
          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    <?php include "footer.php"; ?>
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
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>