<?php       
$dbServerName = "localhost:3306"; // ip address (hostname -I)
$dbUsername = "myuser"; // username
$dbPassword = "root1234"; // db pass
$dbName = "mydatabase"; // your database to connect

// create connection
$conn = new mysqli($dbServerName, $dbUsername, $dbPassword, $dbName);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
