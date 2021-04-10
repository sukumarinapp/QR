<?php
session_start();
include "timeout.php";
include "config.php";
$id=$_GET['id'];
$sql = "SELECT * FROM users where id=$id";
$result = mysqli_query($conn, $sql);
if($_SESSION['user_type'] != "Admin" && $_SESSION['user_type'] != "Superadmin"){
    header("location: view_users.php");
} else{
    $sql = "delete from users where id=$id";
    mysqli_query($conn, $sql);
    header("location: view_users.php");
}
