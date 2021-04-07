<?php
session_start();
include "timeout.php";
include "config.php";
$id=$_GET['id'];
$sql = "SELECT * FROM category where id=$id";
$result = mysqli_query($conn, $sql);
if($_SESSION['user_type'] != "Admin"){
    header("location: view_category.php");
} else{
    $sql = "delete from category where id=$id";
    mysqli_query($conn, $sql);
    header("location: view_category.php");
}
