<!-- member.php -->

<?php session_start();  

include('conectdb.php');

  $UserID = $_SESSION['UserID'];
  $Name = $_SESSION['Name'];
  $Status = $_SESSION['Status'];
 	if($Status!='USER'){
    Header("Location: ../logout.php");  
  }  
?>

<!DOCTYPE html>
<html>
<head>
	<title>Member-Page</title>
</head>
<body>
	<form action="logout.php">
	<h1>หน้าสมาชิก</h1>
	<h3> สวัสดี คุณ <?php echo $name; ?> สถานะ <?php echo $level; ?> </h3>
	<input type="submit" value="ออกจากระบบ">
	</form>
</body>
</html>