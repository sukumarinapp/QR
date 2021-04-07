<?php
session_start();
$page = "Category";
$page1 = "Main Category";
include "timeout.php";
include "config.php";
if (($_SESSION['user_type'] != "Superadmin") && ($_SESSION['user_type'] != "Admin")) header("location: index.php");
$user_id=$_SESSION['user_id'];
$msg = "";
$msg_color = "";
$category_name="";
$status="Active";
$category_description="";
if (isset($_POST['submit'])) {
	$date = date('y/m/d');   
    $category_name= trim($_POST['category_name']);
    $category_description= trim($_POST['category_description']);
   
   
   
 $sql = "SELECT * FROM category WHERE trim(category_name)='$category_name'";

    $result = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($result);



    if ($count >= 1) {

        $msg = "category_name already in use";

        $msg_color = "red";

    } else {

        
        $stmt = $conn->prepare("INSERT INTO category (category_name,category_description,status) VALUES (?,?,?)");
        $stmt->bind_param("sss",$category_name,$category_description, $status);
        $stmt->execute();

       
        header("location: view_category.php");
	} 
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Add Category</title>
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
                                <h1 class="panel-title">Add Category</h1>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                            <form method="post" action="" enctype="multipart/form-data">

                            <div class="panel-body">

                                <div class="row">

                                    <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="category_name required"
                                                       class="control-label required">Category Name</label>
                                                <input value="<?php echo $category_name; ?>" required="required" type="text"
                                                       maxlength="50"
                                                       name="category_name" id="category_name" class="form-control"
                                                       placeholder="category name">
                                            </div>
											
											<div class="form-group">
                                                <label for="category_description required"
                                                       class="control-label required">Category Description</label>
                                                <input value="<?php echo $category_description; ?>" required="required" type="text"
                                                       maxlength="50"
                                                       name="category_description" id="category_description" class="form-control"
                                                       placeholder="">
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
 <div class="box-body">

                         <table id="example1" class="table table-bordered table-striped">
                    <thead>
                         <tr style="background-color: #2a6b90;color:white">
                            <th>Category Name</th>
							<th>Category Description</th>
                            <th width="30px" style="text-align:right">Edit</th>
							<th width="30px" style="text-align:right">Delete</th>
                                        </tr>
                                    </thead>
                                       <tbody>
                        <?php
                       
                            $sql = "select * from category";
                        
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr> 
                                 <td><?php echo $row['category_name']; ?> </td> <td> <?php echo $row['category_description']; ?></td>
                               <td><a class="btn btn-info fa fa-edit" href="edit_category.php?id=<?php echo $row['id']; ?>"> Edit</a></td>
                                <td><a class="btn btn-info fa fa-trash-o" href="delete_category.php?id=<?php echo $row['id']; ?>"> Delete</a></td>
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
