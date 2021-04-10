<?php
session_start();
$page = "Hotels";
$page1 = "Add Hotel";
include "timeout.php";
include "config.php";
if (($_SESSION['user_type'] != "Superadmin") && ($_SESSION['user_type'] != "Admin")) header("location: index.php");
$user_id=$_SESSION['user_id'];
$center_id=$_SESSION['center_id'];
$msg = "";
$msg_color = "";
$full_name = "";
$email = "";
$status = "Active";
$password = "";
$mobile = "";
$address = "";
$payment_type = "";
$merchant_key = "";
$merchant_secret = "";
$user_type = "";
$photo = "logo.png";
if (isset($_POST['submit'])){	
    $full_name = trim($_POST['full_name']);
    $short_name = trim($_POST['short_name']);
    $email = trim($_POST['email']);
    $address = trim($_POST['address']);
    $password = trim($_POST['password']);
    $mobile = trim($_POST['mobile']);
    $payment_type = trim($_POST['payment_type']);
    $merchant_key = trim($_POST['merchant_key']);
    $merchant_secret = trim($_POST['merchant_secret']);
    $user_type = trim($_POST['user_type']);	
    $file_name = $_FILES['photo']['name'];
    $stmt = $conn->prepare("INSERT INTO users (full_name,short_name,email,address,status,password,mobile,user_type,payment_type,merchant_key,merchant_secret) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssssssss", $full_name,$short_name,$email,$address,$status,$password,$mobile,$user_type,$payment_type,$merchant_key,$merchant_secret);
    $stmt->execute() or die ($stmt->error);
    $id=$stmt->insert_id;				
    if (trim($file_name) != "") {
        $ext = pathinfo($file_name, PATHINFO_EXTENSION);
        $file_name = $id . "." . $ext;
        $query = "update users set photo = '" . $file_name . "' where id=$id";
        mysqli_query($conn, $query);
        $target_path = "photo/logo/";
        $target_path = $target_path . $file_name;
        move_uploaded_file($_FILES['photo']['tmp_name'], $target_path);
    }
	  if($_SESSION['user_type']=="Superadmin"){
        $sql="update users set center_id=$id where id=$id";
        mysqli_query($conn,$sql);
    }else if($_SESSION['user_type']=="Admin"){
        $sql="update users set center_id=$center_id where id=$id";
        mysqli_query($conn,$sql);
    }		
    header("location: view_users.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>New Hotel</title>
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
                                <h1 class="panel-title">Add Hotel</h1>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                            <form method="post" action="" enctype="multipart/form-data">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                       
                                            <div class="form-group">
                                        <?php if($_SESSION['user_type']=="Superadmin"){ ?>
                                              <label for="full_name required" class="control-label required">Hotel Full Name</label>
									    <?php } else if($_SESSION['user_type']=="Admin"){ ?>
                                              <label for="full_name required" class="control-label required">User Full Name</label> 
										<?php  } ?>
                                                <input value="<?php echo $full_name; ?>" required="required" type="text"
                                                       maxlength="50"
                                                       name="full_name" id="full_name" class="form-control"
                                                       placeholder="Hotel Full Name">
                                            </div>
                   
                   <div class="form-group">
                                                <label for="short_name required"
                                                       class="control-label required">Short Name</label>
                                                <input required="required" type="text"
                                                       maxlength="10"
                                                       name="short_name" id="short_name" class="form-control"
                                                       placeholder="">
                                            </div>
                                        <div class="form-group">
                                            <label for="email" class="control-label required">Email</label>
                                            <input value="<?php echo $email; ?>" required="required" maxlength="50" type="email"
                                                   name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="form-control" placeholder="Email ID">
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="control-label required">Password</label>
                                            <input value="<?php echo $password; ?>" required="required" type="text" maxlength="20"
                                                   name="password" id="password" class="form-control"
                                                   placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="mobile" class="control-label">Mobile</label>
                                            <input value="<?php echo $mobile; ?>" pattern="[0-9]+\[1-9]+" maxlength="50"
                                                   name="mobile" class="form-control" placeholder="Mobile">
                                        </div>
										
										 <div class="form-group">
                                                <label>Address</label>
                                                <textarea rows="5" value="<?php echo $address; ?>" class="form-control" name="address" type="text" id="address" placeholder="Address" class="validate[required,length[0,200]] text-input"  required aria-required="true" pattern="[A-Za-z]+\[A-Za-z]+"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="user_type" class="control-label required">User Type</label>
                                                <select name="user_type" id="user_type" class="form-control">
										       <?php if($_SESSION['user_type']=="Superadmin"){ ?>
                                                    <option value="Admin">Admin</option>
									           <?php } else if($_SESSION['user_type']=="Admin"){ ?>
                                                    <option value="Kitchen">Kitchen
                                                    </option>
													<option value="Billing">Billing
                                                    </option>
											   <?php } ?>	
                                                </select>
                                            </div>
										<?php if($_SESSION['user_type']=="Superadmin"){ ?>

											<div class="form-group">
                                                <label for="payment_type" class="control-label required">Payment Type</label>
                                                <select name="payment_type" id="payment_type" class="form-control">
                                                    <option value="1">Only Menu</option>
                                                    <option value="2">Cash Counter</option>
                                                    <option value="3">Online Payment</option>
                                                </select>
                                            </div>
											<div class="form-group">
                                            <label for="merchant_key" class="control-label required">Merchant Key</label>
                                            <input value="<?php echo $merchant_key; ?>" type="text" maxlength="20"
                                                   name="merchant_key" id="merchant_key" class="form-control"
                                                   placeholder="Merchant Key">
                                        </div>
										<div class="form-group">
                                            <label for="merchant_secret" class="control-label required">Merchant Secret</label>
                                            <input value="<?php echo $merchant_secret; ?>"  type="text" maxlength="20"
                                                   name="merchant_secret" id="merchant_secret" class="form-control"
                                                   placeholder="Merchant Secret">
                                        </div>
                                        <div class="form-group">
                                          <label for="photo"
                                         class="control-label">Hotel Logo</label>
                                          <input type="file" accept="image/x-png,image/gif,image/jpeg" name="photo" id="photo" class="form-control">
-                                           </div>    
										<?php } ?>
										
										<div class="form-group">
                                        <div class="form-group text-center">
                                            <input required="required" class="btn btn-info"
                                                   type="submit"
                                                   name="submit" value="Save"/>
                                            <a href="view_users.php" class="btn btn-info">Back</a>
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
                </div>
                </div>
             </section>	
			 <?php include "footer.php"; ?>
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