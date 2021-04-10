<?php
session_start();
include "timeout.php";
include "config.php";
$id=$_GET['id'];
$center_id=$_GET['center_id'];
$url="add-table.php?center_id=$center_id";
if($_SESSION['user_type'] != "Superadmin"){
    header("location: $url");
} else{
    $sql = "delete from hotel_table where id=$id";
    mysqli_query($conn, $sql);
    header("location: $url");
}
