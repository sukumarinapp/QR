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
    <style type="text/css">
      input{
        background-color: #4CAF50;
        font-size: 24px;
        color:white;
        border-radius: 4px
      }
    </style>
  </head>
  <body style="background-color: steelblue;color:white">
    <div class="container my-4">    
        <div class="row">
          <div class="col-md-12 text-center">
<?php
$payment_id = $data['order_id'];
$oid = $_REQUEST['oid'];
$sql = "insert into payment (order_id,payment_id,status) values ('$oid','$payment_id','pending')";
mysqli_query($conn, $sql) or die(mysqli_error($conn));
?>
<div style="background-color: steelblue;text-align: center">
<h1 class="text-center">Your bill amount is &#2352;<?php echo number_format($data['amount'],2); ?></h1> 
<form action="verify.php" method="POST" class="btn btn-success btn-block">
  <script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $data['key']?>"
    data-amount="<?php echo $data['amount']?>"
    data-currency="INR"
    data-name="<?php echo $data['name']?>"
    data-image="<?php echo $data['image']?>"
    data-description="<?php echo $data['description']?>"
    data-prefill.name="<?php echo $data['prefill']['name']?>"
    data-prefill.email="<?php echo $data['prefill']['email']?>"
    data-prefill.contact="<?php echo $data['prefill']['contact']?>"
    data-notes.shopping_order_id="<?php echo $data['order_id']?>"
    data-order_id="<?php echo $data['order_id']?>"
    <?php if ($displayCurrency !== 'INR') { ?> data-display_amount="<?php echo $data['display_amount']?>" <?php } ?>
    <?php if ($displayCurrency !== 'INR') { ?> data-display_currency="<?php echo $data['display_currency']?>" <?php } ?>
  >
  </script>
  <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
  <input type="hidden" name="shopping_order_id" value="<?php echo $data['order_id']?>">
</form>
</div>
</div>
</div>
</div>
</body>
</html>