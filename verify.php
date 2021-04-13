<?php
require('admin/config.php');
session_start();

//print_r($_REQUEST);

$order_id = '';
$tblnub = '';
$hotel_id = 0;
$shopping_order_id = $_REQUEST['shopping_order_id'];
$sql = "select a.*,b.tblnub,b.hotel_id from payment a,posord b where a.order_id=b.order_id and payment_id='$shopping_order_id'";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
while($row = mysqli_fetch_assoc($result)){
    $order_id = $row['order_id'];
    $tblnub = $row['tblnub'];
    $hotel_id = $row['hotel_id'];
}

$sql = "select * from users where center_id='$hotel_id' and user_type='Admin'";
$result = mysqli_query($conn, $sql);
$keyId = "";
$keySecret = "";
$cstcod = "";
while($row = mysqli_fetch_array($result)){
  $keyId = trim($row['merchant_key']);
  $keySecret = $row['merchant_secret'];
}

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_POST['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="Expires" content="0">
    <title>Razor Pay</title>
    <link rel="icon" href="favico.ico">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body style="font-weight:bold;background-color: steelblue;font-size: 24px;color:white;text-align: center">
    <div class="container my-4">    
        <div class="row">
          <div class="col-md-12 text-center">
<?php
if ($success === true){   
    $conn->autocommit(FALSE);
    $html = "<p>Your payment was successful</p><p>Payment ID: {$_POST['razorpay_payment_id']}</p>";
    $sql = "update posord set status='Paid' where tblnub='$tblnub'";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $sql = "update poskot set status='Paid' where tblnub='$tblnub'";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $sql = "update payment set status='Paid' where tblnub='$tblnub'";
    //mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $_SESSION['otp'] = "";
    $conn->commit();
    echo $html;
}else{
    $html = "<p>Your payment failed</p><p>{$error}</p>";
    echo $html;
}

?>
</div>
</div>
</div>
</body>
</html>