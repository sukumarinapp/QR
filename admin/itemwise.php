<?php
session_start();
$page = "Itemwise";
$page1 = "Itemwise";
include "timeout.php";
include "config.php";
if (($_SESSION['user_type'] != "Superadmin") && ($_SESSION['user_type'] != "Admin") && ($_SESSION['user_type'] != "Billing")) header("location: index.php");
$user_id=$_SESSION['user_id'];
$center_id=$_SESSION['center_id'];

$fromdate=date("Y-m-d");
$todate=date("Y-m-d");

$sql="";
if (isset($_POST['submit'])) {
  if (isset($_POST['hotel'])) {
    $center_id = $_POST['hotel'];
  }
  $fromdate = $_POST['fromdate'];
  $todate = $_POST['todate'];  
  $fromdatesql = explode("-", $fromdate);
  $todatesql = explode("-", $todate);
  $fromdatesql = $fromdatesql[0].$fromdatesql[1].$fromdatesql[2];
  $todatesql = $todatesql[0].$todatesql[1].$todatesql[2];
  $sql="select itmcod,itmnam,sum(itmval) as daytotal from posord a,poskot b where a.order_id=b.order_id and a.hotel_id=$center_id and kotdat>=$fromdatesql and kotdat<=$todatesql group by itmcod,itmnam order by itmcod";
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Daily Summary</title>
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
      <div class="bs-example">
    <form action="" method="post">
      <?php
          if($_SESSION['user_type']=="Superadmin"){
        ?>
        <div class="form-group row">
            <label style="color:white" for="hotel" class="col-sm-2 col-form-label">Select Hotel</label>
            <div class="col-sm-8">
                <select class="form-control" name="hotel"  id="hotel" required>
                  <option value="">Select Hotel</option>
                  <?php
                  $sql2="select center_id,full_name from users where user_type='Admin' order by full_name";
                  $result2 = mysqli_query($conn, $sql2);
                  while($row2 = mysqli_fetch_assoc($result2)){
                  ?>
                  <option value="<?php echo $row2['center_id']; ?>" 
                    <?php
                    if($row2['center_id']==$center_id) echo " selected ";
                    ?>
                    ><?php echo $row2['full_name']; ?></option>
                  <?php
                  }
                  ?>
                </select>  
            </div>
        </div>
        <?php
          }
        ?>
        <div class="form-group row">
            <label style="color:white" for="fromdate" class="col-sm-2 col-form-label">From Date</label>
            <div class="col-sm-3">
                <input value="<?php echo $fromdate; ?>" type="date" class="form-control" name="fromdate"  id="fromdate" placeholder="From Date" required>
            </div>
            <label style="color:white"  for="todate" class="col-sm-2 col-form-label">To Date</label>
            <div class="col-sm-3">
                <input value="<?php echo $todate; ?>" type="date" class="form-control" name="todate" id="todate" placeholder="To date" required>
            </div>
            <div class="col-sm-2 text-center">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
<div class="table-responsive">
<table class="table table-bordered" style="background-color: white!important">
<thead>
<tr>
<th>Item Code</th>
<th>Item Name</th>
<th>Amount</th>
</tr>
</thead>
<tbody>
<?php
if (isset($_POST['submit'])) {
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
?>
<tr> 
<td><?php echo $row['itmcod']; ?> </td>
<td><?php echo $row['itmnam']; ?> </td>
<td><?php echo $row['daytotal']; ?> </td>
</tr>
<?php
}
}
?>
</tbody>
</table>
</div>
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
