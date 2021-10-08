<!-- admin.php -->

<?php session_start(); 
include('conectdb.php');

  $UserID = $_SESSION['UserID'];
  $Name = $_SESSION['Name'];
  $Status = $_SESSION['Status'];
 	if($Status!='ADMIN'){
    Header("Location: ../logout.php");  
  }  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin-Page</title>
</head>
<body>
	<form action="logout.php">
	<h1>หน้าแอดมิน</h1>
	<h3> สวัสดี คุณ <?php echo $name; ?> สถานะ <?php echo $level; ?> </h3>
	<input type="submit" value="ออกจากระบบ">
	</form>
</body>
</html>