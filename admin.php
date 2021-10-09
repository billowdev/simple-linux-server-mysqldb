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

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Page</title>
	<style>
      form { 
      margin: 0 auto; 
      width:250px;
      }
    </style>
</head>

<div class="row justify-content-center">

<div class="card-title">
    <img src="https://raw.githubusercontent.com/lacakp/simple-linux-server-mysqldb/site/images/cs63proj.png" width="300px" class="img-fluid d-block mx-auto" alt="logo">
</div>

<header class="d-flex align-items-center">
      <div class="container">
          <h1 class="fw-bold"> Welcome ! to หน้าผู้ดูแลระบบ Admin Page </h1>
          <h2> Hello World! สวัสดี ! <?php echo $Name; ?> Your Status is <?php echo $Status; ?> </h2>
      </div>
</header>
</div>


<form action="logout.php">
  <button type="submit" class="btn btn-danger" id="btn">
  <span class="glyphicon glyphicon-log-out"> </span>
    ออกจากระบบ </button>
</form>
