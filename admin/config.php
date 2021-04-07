<?php
    date_default_timezone_set("Asia/Kolkata");
	$displayCurrency = 'INR';
    $mysql_hostname = "localhost";
    $mysql_user = "root";
    $mysql_password = "";
    $mysql_database = "food";
    #$mysql_user = "galaxy";
    #$mysql_password = "Galaxy123$";
    #$mysql_database = "hotels";
    $conn = new mysqli($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);
