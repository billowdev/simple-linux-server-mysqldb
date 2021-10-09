<!-- connectdb.php -->

<?php
$dbServerName = "localhost:3306"; // ip address (hostname -I)
$dbUsername = "myuser"; // username
$dbPassword = "root1234"; // db pass
$dbName = "mydatabase"; // your database to connect

$con= mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName) or die("Error ! : " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");
error_reporting( error_reporting() & ~E_NOTICE );
date_default_timezone_set('Asia/Bangkok');
?>