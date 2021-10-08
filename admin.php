<!-- admin.php -->

<?php session_start(); 

include('connectdb.php');
include('pull_bootstrap.php');
  $UserID = $_SESSION['UserID'];
  $Name = $_SESSION['Name'];
  $Status = $_SESSION['Status'];
 	if($Status!='ADMIN'){
    Header("Location: ../logout.php");  
  }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminPage</title>
    
</head>
<body>
  
<header class="page-header d-flex align-items-center">
      <div class="container">
          <h1 class="fw-bold"> Welcome ! to หน้าผู้ดูแลระบบ Admin Page </h1>
          <h2> Hello World! สวัสดีจ้าาา <?php echo $Name; ?> Your Status is <?php echo $Status; ?> </h2>
      </div>
</header>
<form action="logout.php">
  <button type="submit" class="btn btn-danger" id="btn">
  <span class="glyphicon glyphicon-log-out"> </span>
    ออกจากระบบ </button>
</form>

</div>
</div>
</body>
</html>