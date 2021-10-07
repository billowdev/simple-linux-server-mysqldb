<?php
$dbServerName = "192.168.xx.xxx"; // ip address (hostname -I)
$dbUsername = "root"; // username
$dbPassword = "thisispass"; // db pass
$dbName = "mydatabase"; // your database to connect

// create connection
$conn = new mysqli($dbServerName, $dbUsername, $dbPassword, $dbName);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
