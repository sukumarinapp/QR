<?php
session_start();
$page = "Hotels";
$page1 = "View Hotels";
include "timeout.php";
include "config.php";
include "phpqrcode/qrlib.php";
if (($_SESSION['user_type'] != "Superadmin")) header("location: index.php");
$user_id=$_SESSION['user_id'];
$id = $_GET['id'];
$table_id = $_GET['table_id'];
$center_id = $_GET['center_id'];

$msg = "";
$website = "";
$file = "";

if (isset($_POST['submit'])) {

	$website = $_POST['website'];
	$file = "qr/".$id.".png";
	
	QRcode::png($website,$file, QR_ECLEVEL_H, 3, 10);
	
        $stmt = $conn->prepare("update hotel_table set website=?,file=? where id=?");
		
        $stmt->bind_param("sss", $website,$file,$id);
        $stmt->execute() or die ($stmt->error);
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Create Qr Code</title>
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
                                <h1 class="panel-title">Create QR Code</h1>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                            <form method="post" action="" enctype="multipart/form-data">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="website required"
                                                       class="control-label required">website</label>
                                                <input value="http://demo.galaxytechnologypark.com/hotels/menu.php?table_id=<?php echo $table_id ?>&center_id=<?php echo $center_id ?>" required="required" type="text"
                                                       maxlength="50"
                                                       name="website" id="website" class="form-control"
                                                       placeholder="">
                                            </div>
                                        <div class="form-group text-center">
                                            <input required="required" class="btn btn-info"
                                                   type="submit"
                                                   name="submit" value="Generate"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>						
            </div>
          <!-- /.box -->
        </div>
		<?php
                            $sql = "select * from hotel_table where center_id='$center_id' and id='$table_id'";

                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
							<center><img src="<?php echo $row['file']; ?>" download width="250" height="250"/>
							</br>
							</br>
							<a class="btn btn-info fa fa-download" href="<?php echo $row['file']; ?>" download title="Download"> Download QR Code</a></center>
					
						<?php } ?>
						</br>
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
