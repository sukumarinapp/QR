<?php
session_start();
include "admin/config.php";
//git test
$tblnub = isset($_GET['tblnub']) ? $_GET['tblnub']: "";
$hotel_id = isset($_GET['hotel_id']) ? $_GET['hotel_id']: "";
$sql = "select * from users where center_id='$hotel_id'";
$result = mysqli_query($conn, $sql);
$comnam = "";
$row = mysqli_fetch_array($result);
$comnam = trim($row['full_name']);
$payment_type = $row['payment_type'];

$order_id = 0;
$sql = "select b.* from posord a,poskot b where a.order_id=b.order_id and a.hotel_id='$hotel_id' and a.tblnub='$tblnub' and a.status='Pending'";
$result = mysqli_query($conn, $sql);
$cart_quantity = 0;                    
while($row = mysqli_fetch_array($result)){
  $cart_quantity = $cart_quantity + $row['itmqty'];
  $order_id = $row['order_id'];
}
$_SESSION['order_id'] = session_id();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $comnam; ?></title>
    <link rel="icon" href="favico.ico">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->

    <link href="admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <style type="text/css">
        .qty .count {
            color: #000;
            display: inline-block;
            vertical-align: top;
            font-size: 25px;
            font-weight: 700;
            line-height: 30px;
            padding: 0 2px
            ;min-width: 35px;
            text-align: center;
        }
        .qty .plus {
            cursor: pointer;
            display: inline-block;
            vertical-align: top;
            color: white;
            width: 30px;
            height: 30px;
            font: 30px/1 Arial,sans-serif;
            text-align: center;
            border-radius: 50%;
            }
        .qty .minus {
            cursor: pointer;
            display: inline-block;
            vertical-align: top;
            color: white;
            width: 30px;
            height: 30px;
            font: 30px/1 Arial,sans-serif;
            text-align: center;
            border-radius: 50%;
            background-clip: padding-box;
        }
    </style>
  </head>

  <body class="bg-light text-black">
    <div class="container my-4">    

    <hr class="my-4">

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark info-color">
   <a class="navbar-brand font-weight-bold" href="#"><?php echo $comnam; ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="menu.php?center_id=<?php echo $hotel_id; ?>&tblnub=<?php echo $tblnub; ?>">Menu</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="cart.php?hotel_id=<?php echo $hotel_id; ?>&tblnub=<?php echo $tblnub; ?>">Cart</a>
          </li>
        </ul>
      </div>
    </nav>

    <!--Main layout-->

        <br>
        <div class="row">
          <div class="col-md-12">
              <div class="table-responsive">
              <table class="text-black bg-white table" id="dataTables-example">
                <thead>
                  <tr style="text-align: center;background-color: whire;font-weight: bold !important">
                                <th colspan="4"><?php echo $comnam; ?></th>
                              </tr>
                              <tr style="background-color: white;font-weight: bold !important">
                                <th>Item</th>
                                <th style="text-align: right">Rate</th>
                                <th style="text-align: right">Qty</th>
                                <th style="text-align: right">Total</th>
                              </tr>
                            </thead>
                            <tbody>
                  <?php
                    $net_total = 0;

                    

                    $total = 0;
                    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                    while($row = mysqli_fetch_array($result)){
                      $total = $total + $row['itmval'];
                      $net_total = $net_total + $row['itmval'];
                  ?>
                              <tr>
                                <td><?php echo ucwords(strtolower($row['itmnam'])); ?></td>
                    <td style="text-align: right">&#2352;<?php echo $row['itmrat']; ?></td>
                                <td style="text-align: right"><?php echo $row['itmqty']; ?></td>
                                <td style="text-align: right">&#2352;<?php echo number_format($row['itmval'],2); ?></td>
                              </tr>
                  <?php
                    }
                  ?>
                                    
                  <tr style="background-color: white;font-weight: bold !important">
                    <td align="right" class="font-weight-bold" colspan="3">Total</td>
                    <td align="right" class="font-weight-bold" colspan="2" >&#2352;<?php echo number_format($net_total,2); ?></td>
                  </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                </div>
            <div class='row'><div class='col-md-12'><br></div></div>
            <div class='row'><div class='col-md-12'><br></div></div>
            <div class='row'><div class='col-md-12'><br></div></div>
                

    <!--Main layout-->
    <nav class="navbar fixed-bottom navbar-expand-lg">
      <a class="btn btn-lg btn-danger font-weight-bold" href="menu.php?center_id=<?php echo $hotel_id; ?>&table_id=<?php echo $tblnub; ?>" >Menu</a>
      <?php if($payment_type==3){ ?>
      <a style="text-align: right" class="btn btn-lg btn-danger font-weight-bold" href="pay.php?hotel_id=<?php echo $hotel_id; ?>&oid=<?php echo $order_id; ?>" >Pay</a>
      <?php } ?>  
      <?php
      $_SESSION['net_total'] = $net_total;
      ?>
    </nav>

  </strong>
    </div>

    <!-- Start your project here-->

    <!-- /Start your project here-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="admin/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="admin/js/bootstrap.min.js"></script>
</body>
</html>