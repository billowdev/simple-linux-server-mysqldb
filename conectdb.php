<!-- connectdb.php -->

<?php
$con= mysqli_connect("192.168.xx.xx","usernamedb","","thisisdb") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");
error_reporting( error_reporting() & ~E_NOTICE );
date_default_timezone_set('Asia/Bangkok');
?>