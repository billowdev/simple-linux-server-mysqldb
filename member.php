<!-- member.php -->

<?php session_start();  

include('connectdb.php');
include('pull_bootstrap.php');

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
	<title>
  		Member-page
	</title>
</head>

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
		<h1>Welcome ! to หน้าสมาชิก Member Page</h1>
		<h3> Hello World! สวัสดีจ้าาา <?php echo $Name; ?> Your Status is <?php echo $Status; ?> </h3>
		<button type="submit" class="btn btn-danger" id="btn">
            <span class="glyphicon glyphicon-log-out"> </span>
             Login </button>
		</form>

    </div>
</div>
</div>
</body>
</html>
