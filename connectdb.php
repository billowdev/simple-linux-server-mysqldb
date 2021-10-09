<!-- connectdb.php -->

<?php

$dbServerName = "192.168.48.133"; // ip address (hostname -I) : example 192.168.48.133
$dbUsername = "testuser"; // username example : phpmyadmin
$dbPassword = "root1234"; // db pass exsample : codetopanda123456789
$dbName = "mydatabase"; // your database to connect

$con= mysqli_connect($dbServerName,$dbUsername,$dbPassword,$dbName) or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");
error_reporting( error_reporting() & ~E_NOTICE );
date_default_timezone_set('Asia/Bangkok');
?>