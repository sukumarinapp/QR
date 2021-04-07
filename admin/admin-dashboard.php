<?php
session_start();
$page = "Dashboard";
$page1 = "Dashboard1";
include "timeout.php";
include "config.php";
$msg = "";
$msg_color = "";
$date=date('y/m/d');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead Of downloading all Of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">


  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<style>
table {
    max-width:980px;
    table-layout:fixed;
    margin:auto;
}
th, td {
    padding:5px 10px;
    border:0px solid #000;
}
thead, tfoot {
    background:#f9f9f9;
    display:table;
    width:100%;
    width:calc(100 - 18px);
}
tbody {
    height:100px;
    overflow:auto;
    overflow-x:hidden;
    display:block;
    width:100%;
}
tbody tr {
    display:table;
    width:100%;
    table-layout:fixed;
}
</style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

   <?php include "header.php"; ?>
    <?php include "menu.php"; ?>
  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
            <?php
    $notification_count=0;
  	if($_SESSION['user_type']=="admin"){ 
    $notification_sql = "select * from project";
	
	
  	}else 
	  {
      $user_id=$_SESSION['user_id'];
      $notification_sql = "select * from project";
	
	  }
      $notification_result = mysqli_query($conn, $notification_sql);
        while ($notification_row = mysqli_fetch_assoc($notification_result)) {
      
            $notification_count++;
        }
    
	?>
             

              <h4>Hotels</h4>
              <h3><?php echo $notification_count; ?></h3>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">

            <?php
    $notification_count2=0;
  	if($_SESSION['user_type']=="admin"){ 
    $notification_sql2 = "select * from users Where user_type='Admin'";
	
	
  	}else 
	  {
      $user_id=$_SESSION['user_id'];
      $notification_sql2 = "select * from users Where user_type='Admin'";
	
	  }
      $notification_result2 = mysqli_query($conn, $notification_sql2);
        while ($notification_row2 = mysqli_fetch_assoc($notification_result2)) {
      
            $notification_count2++;
        }
    
	?>
	     
             
              <h4>New Hotels</h4>

              <h3><?php echo $notification_count2; ?></h3>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
            <?php
    $notification_count3=0;
  	if($_SESSION['user_type']=="admin"){ 
    $notification_sql3 = "select * from category";
	
	
  	}else 
	  {
      $user_id=$_SESSION['user_id'];
      $notification_sql3 = "select * from category";
	
	  }
      $notification_result3 = mysqli_query($conn, $notification_sql3);
        while ($notification_row3 = mysqli_fetch_assoc($notification_result3)) {
      
            $notification_count3++;
        }
    
	?>
            
 <h4>Category</h4>

              <h3><?php echo $notification_count3; ?></h3>

            </div>
            <div class="icon">
			              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
            <?php
            $notification_count=0;
            if($_SESSION['user_type']=="admin"){ 
            $notification_sql = "select * from project";
          
          
            }else 
            {
              $user_id=$_SESSION['user_id'];
              $notification_sql = "select * from project";
          
            }
              $notification_result = mysqli_query($conn, $notification_sql);
                while ($notification_row = mysqli_fetch_assoc($notification_result)) {
              
                    $notification_count++;
                }
            
          ?>
                        <h4>Menus</h4>
        
                      <h3><?php echo $notification_count; ?></h3>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-12 col-xs-6">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15796.241989807046!2d77.4319196!3d8.1966608!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbfff5535181af409!2sSree+Moolam+Rama+Varma+Hr.+Sec.+School!5e0!3m2!1sen!2sin!4v1520233781674" width="1090" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
 	      </div>
 	      </div>
    </section>  
	<!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include"footer.php"?>
  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>

