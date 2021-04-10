<?php
session_start();
$page = "Hotels";
$page1 = "View Hotels";
include "timeout.php";
include "config.php";
if ($_SESSION['user_type'] != "Superadmin") header("location: index.php");
$id=$_GET['id'];
$user_id=$_SESSION['user_id'];
$center_id = $_SESSION['center_id'];
$center_id2 = $_GET['center_id'];

$msg = "";
$msg_color = "";
$table_name="";
$status="Active";
$table_description="";
if (isset($_POST['submit'])) {
    $table_name= trim($_POST['table_name']);
    $table_description= trim($_POST['table_description']);
   
    $sql = "SELECT * FROM hotel_table WHERE trim(table_name)='$table_name' and center_id=$center_id2 and id <> $id";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if ($count >= 1) {
        $msg = "Table Name already exists";
        $msg_color = "red";
    } else {
        $sql="update hotel_table set table_name='$table_name',table_description='$table_description' where id='$id'";;
        mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $url="add-table.php?center_id=$center_id2";
        header("location: $url");
  	}     
}
$sql = "select * from hotel_table where id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Edit Table</title>
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
                                <h1 class="panel-title">Edit Table</h1>
                                <h3 style="color: red;font-weight: bold"><?php echo $msg; ?></h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                            <form method="post" action="" enctype="multipart/form-data">

                            <div class="panel-body">

                                <div class="row">

                                    <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="table_name required"
                                                       class="control-label required">Table Name</label>
                                                <input value="<?php echo $row['table_name']; ?>" required="required" type="text" maxlength="10"
                                                       name="table_name" id="table_name" class="form-control" placeholder="Table Name">
                                            </div>
											
											<div class="form-group">
                                                <label for="table_description required"
                                                       class="control-label required">Table Description</label>
                                                <input value="<?php echo $row['table_description']; ?>" required="required" type="text" maxlength="50" name="table_description" id="table_description" class="form-control" placeholder="Table Description">
                                            </div>
											
                                        
                                        <div class="form-group text-center">
                                            <input required="required" class="btn btn-info"
                                                   type="submit"
                                                   name="submit" value="Save"/>
                                            <a href="view_category.php" class="btn btn-info">Back</a>
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
