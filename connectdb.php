<!-- connectdb.php -->

<?php

// ip address (hostname -I) : example 192.168.48.133
// username example : phpmyadmin
// db pass exsample : codetopanda123456789
// your database to connect

$con= mysqli_connect("192.168.48.133", "testuser", "root1234", "mydatabase") or die("Error ! : " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");
error_reporting( error_reporting() & ~E_NOTICE );
date_default_timezone_set('Asia/Bangkok');
?>