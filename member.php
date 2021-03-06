<!-- member.php -->

<?php session_start();  

include('connectdb.php');
  $UserID = $_SESSION['UserID'];
  $Name = $_SESSION['Name'];
  $Status = $_SESSION['Status'];
 	if($Status!='USER'){
    Header("Location: ../logout.php");  
  }  
?>

<head>
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit" >
    <link rel="stylesheet" href="https://raw.githubusercontent.com/lacakp/simple-linux-server-mysqldb/site/refcss/sytle.css">
    <title>Member-Page</title>
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
          <h1 class="fw-bold" class="fw-bold"> Welcome ! to หน้าสมาชิก Member Page </h1>
          <h2> Hello World! สวัสดี ! <?php echo $Name; ?> Your Status is <?php echo $Status; ?> </h2>
      </div>
</header>
</div>


<form action="logout.php">
  <button type="submit" class="btn btn-danger" id="btn">
  <span class="glyphicon glyphicon-log-out"> </span>
    ออกจากระบบ </button>
</form>
