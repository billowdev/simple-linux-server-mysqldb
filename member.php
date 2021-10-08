<!-- member.php -->

<?php session_start();  

include('connectdb.php');

  $UserID = $_SESSION['UserID'];
  $Name = $_SESSION['Name'];
  $Status = $_SESSION['Status'];
 	if($Status!='USER'){
    Header("Location: ../logout.php");  
  }  
  include('pull_bootstrap.php');
?>
<!DOCTYPE html>
<html>

<style type="text/css">
#btn{
width:100%;
}
</style>

<div class="container" style="padding-top:100px">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4" style="background-color: #89ADCB">
      <h3 align="center">
      <span class="glyphicon glyphicon-lock"> </span>
      Member - Page </h3>
		<form action="logout.php">
		<h1>หน้าสมาชิก</h1>
		<h3> สวัสดี คุณ <?php echo $name; ?> สถานะ <?php echo $level; ?> </h3>
		<input type="submit" value="ออกจากระบบ">
		</form>

    </div>
</div>
</div>
</body>
</html>
