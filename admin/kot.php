<?php
session_start();
$page = "Kitchen";
$page1 = "Dashboard1";
include "timeout.php";
include "config.php";
if (($_SESSION['user_type'] != "Admin") && ($_SESSION['user_type'] != "Kitchen")) header("location: index.php");
$user_id=$_SESSION['user_id'];
$center_id=$_SESSION['center_id'];
$msg = "";
$msg_color = "";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>KOT</title>
  <meta http-equiv="refresh" content="20"> 
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
      <div class="row">

				 <div class="col-xs-12">
				
		                   <div class="login-panel panel panel-default">

						<div class="table-responsive">
       <!-- <div class="box-header">
             <center> <h3>KOT</h3> </center>
            </div> -->
   <div class="box-body">

                         <table class="table table-bordered table-striped">
                    <thead>
                         <tr style="background-color: steelblue;color:white">
                             <th>Table</th>
                                                      <th>KOT#</th>
                             <th>Description</th>
						    
                                        </tr>
                                    </thead>
                                       <tbody>
                    <?php
                        $sql = "select * from posord where hotel_id='$center_id' and status='Pending' order by kotnub desc";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                          $order_id=$row['order_id'];
                            ?>
                            <tr> 
                                 <td width=10%><?php echo $row['tblnub']; ?> </td>
                              
                                 <td width=10%><?php echo $row['kotnub']; ?> </td>
                                 <td><table class="table table-bordered table-striped">
<tr style="background-color: #2a6b90;color:white">
                            <th>Item</th>
                             <th width="10%" style="text-align: right">Qty</th>
                
                                        </tr>
                                  <tbody>
<?php
$sql2 = "select * from poskot where status='Pending' and order_id=$order_id";
$result2 = mysqli_query($conn, $sql2);
while ($row2 = mysqli_fetch_assoc($result2)) {
  echo "<tr><td>".$row2['itmnam']."</td><td style='text-align: right'>".$row2['itmqty']."</td></tr>";
}
?>                               
</tbody></table>
                                 </td>
                            </tr>
                        <?php

                        }
                        ?>
                        </tbody>
                                        </tbody>
									</table>
									<!-- /.box -->
 </div>
            </div>
          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>


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

</body>
</html>
