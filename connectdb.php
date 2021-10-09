<!-- connectdb.php -->

<?php
// Your IP -> 192.168.48.132  USER -> testuser   PASS -> root1234    Database -> mydatabase
$con= mysqli_connect("192.168.48.132","testuser","root1234","mydatabase") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");
error_reporting( error_reporting() & ~E_NOTICE );
date_default_timezone_set('Asia/Bangkok');
?>