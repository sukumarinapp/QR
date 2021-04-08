<?php
session_start();
$order_id = 0;
include "admin/config.php";
$hotel_id = $_REQUEST['hotel_id'];
$tblnub = $_REQUEST['tblnub'];
$sales = $_REQUEST['sales'];
$sales = stripslashes($sales);
$sales_array = array();
$sales_array = json_decode($sales);
$status = "Pending";
$kotdat =  date("Ymd");
$kottim = date("H.i");
$kotnub=1;
$conn->autocommit(FALSE);

$table_suffix = "";
$sql="select max(kotnub) as maxkot from posord where hotel_id=$hotel_id";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
if(mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $kotnub = $row['maxkot']+1;
    echo "sukumar";
}
echo $kotnub;

 
$sql = "INSERT INTO posord (hotel_id,kotnub,kotdat,kottim,tblnub,status) VALUES  ($hotel_id,$kotnub,$kotdat,$kottim,'$tblnub','$status')";
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$order_id = mysqli_insert_id($conn);

$itmval = 0;
$orddat = date("Ymd");
for ($i = 0; $i < count($sales_array); $i++) {
    $itmcod = $sales_array[$i]->itmcod;
    $itmnam = $sales_array[$i]->itmnam;
    $itmrat = $sales_array[$i]->itmrat;
    $quantity = $sales_array[$i]->quantity;
    $itmval = $sales_array[$i]->itmrat * $sales_array[$i]->quantity;
    $sql = "INSERT INTO poskot (order_id,kotnub,itmcod,itmnam,itmrat,itmqty,itmval,status,tblnub) VALUES  ($order_id,'$kotnub','$itmcod','$itmnam',$itmrat,$quantity,$itmval,'$status','$tblnub')";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
$conn->commit();    
echo "ok";
