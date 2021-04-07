<?php
session_start();
$page = "Hotels";
$page1 = "View Hotels";
include "timeout.php";
include "config.php";
if (($_SESSION['user_type'] != "Superadmin") && ($_SESSION['user_type'] != "Admin")) header("location: index.php");
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
  <title> View Hotels</title>
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
      <div class="row">

				 <div class="col-xs-12">
				
		                   <div class="login-panel panel panel-default">

						<div class="table-responsive">
       <div class="box-header">
             <center> <h3>View Hotels</h3> </center>
            <hr>
            </div>
   <div class="box-body">

                         <table id="example1" class="table table-bordered table-striped">
                    <thead>
                         <tr style="background-color: #2a6b90;color:white">
                            <th>Full Name</th>
							<th>Email</th>
						    <th>User Type</th>
                            <th width="30px" style="text-align:right">Edit</th>
                            <th width="30px" style="text-align:right">Table</th>
                            <th width="30px" style="text-align:right">Delete</th>
                                        </tr>
                                    </thead>
                                       <tbody>
                    <?php
                        if($_SESSION['user_type']=="Superadmin"){
                            $sql = "select * from users where user_type='Admin'";
                        }
                        else if($_SESSION['user_type']=="Admin"){
                            $sql = "select * from users where user_type<>'Superadmin' and center_id='$center_id'";
                      }
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr> 
                                 <td><?php echo $row['full_name']; ?> </td>
								 <td> <?php echo $row['email']; ?></td>
								 <td><?php echo $row['user_type']; ?> </td>
                               <td><a class="btn btn-info fa fa-edit" href="edit_users.php?id=<?php echo $row['id']; ?>"> Edit</a></td>
                               <td><a class="btn btn-info fa fa-plus" href="add-table.php?center_id=<?php echo $row['center_id']; ?>"> Table</a></td>
                                <td><a class="btn btn-info fa fa-trash-o" href="delete_users.php?id=<?php echo $row['id']; ?>"> Delete</a></td>
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
<script s