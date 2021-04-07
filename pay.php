<?php
require('admin/config.php');
require('razorpay-php/Razorpay.php');
session_start();

// Create the Razorpay Order

use Razorpay\Api\Api;

$hotel_id = isset($_GET['hotel_id']) ? $_GET['hotel_id']: "";

$sql = "select * from users where center_id='$hotel_id'";
$result = mysqli_query($conn, $sql);
$full_name = "";
$merchant_key="";
$merchant_secret="";
$email="";
$contact="";
$address="";
while($row = mysqli_fetch_array($result)){
  $full_name = trim($row['full_name']);
  $merchant_key = trim($row['merchant_key']);
  $merchant_secret = trim($row['merchant_secret']);
  $email = trim($row['email']);
  $contact = trim($row['mobile']);
  $address = trim($row['address']);
}

$_SESSION['keyId'] = $merchant_key;
$_SESSION['keySecret'] = $merchant_secret;


$api = new Api($merchant_key, $merchant_secret);

//
// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders
//

$net_total = $_SESSION['net_total'];
$order_id2 = $_SESSION['order_id'];
$orderData = [
    'receipt'         => $order_id2,
    'amount'          => $net_total * 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];

$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];


$checkout = 'automatic';

if (isset($_GET['checkout']) and in_array($_GET['checkout'], ['automatic', 'manual'], true))
{
    $checkout = $_GET['checkout'];
}

$data = [
    "key"               => $merchant_key,
    "amount"            => $net_total,
    "name"              => $full_name,
    "description"       => "Bill Amount",
    "image"             => "razor.png",
    "prefill"           => [
    "name"              => $full_name,
    "email"             => $email,
    "contact"           => $contact,
    ],
    "notes"             => [
    "address"           => $address,
    "merchant_order_id" => $order_id2,
    ],
    "theme"             => [
    "color"             => "#FF0000"
    ],
    "order_id"          => $razorpayOrderId,
];

if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);


require("checkout/{$checkout}.php");
