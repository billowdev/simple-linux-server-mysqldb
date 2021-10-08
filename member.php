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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MemberPage</title>
    <style>
      form { 
      margin: 0 auto; 
      width:250px;
      }
    /* Section Navbar */
    .navbar { background-color: #26272b; }
    .navbar .navbar-nav .nav-link { color: #fff; }
    .navbar .navbar-nav .nav-link:hover { color: #fbc531; }
    .navbar .navbar-nav .active > .nav-link { color: #fbc531; }

      /* Section Footer */
      .site-footer{
    background-color: #26272b;
    color: #737373;
    padding: 10px;
    } 
    </style>
</head>

<body>

 <!-- Navbar -->
 <nav class="navbar navbar-expand-md fixed-top">
	<div class="container">

		<a class="navbar-brand text-white " href="./"><img src="https://raw.githubusercontent.com/lacakp/testServerPHP/main/cs63proj.png" height="50px" alt="">Computer Science</a>
		
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nvbCollapse" aria-controls="nvbCollapse">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="nvbCollapse">
			<ul class="navbar-nav ml-auto">
					<li class="nav-item pl-1">
					<a class="nav-link" href="./index.html"><i class="fa fa-home fa-fw mr-1"></i>index.html</a>
				</li>
				<li class="nav-item active pl-1">
					<a class="nav-link" href="https://classroom.google.com/"><i class="fa fa-th-list fa-fw mr-1"></i>Google Classroom</a>
				</li>
			</ul>
		</div>
	</div>

		<div class="progressContainer">
				<div class="progressBar"></div>
		</div>

</nav>

<div class="d-flex p-2 bd-highlight">
  <div class="card-title">
      <img src="https://raw.githubusercontent.com/lacakp/testServerPHP/main/cs63proj.png" width="300px" class="img-fluid d-block mx-auto" alt="logo">
  </div>

<header class="d-flex align-items-center">
      <div class="container">
          <h1 class="fw-bold"> Welcome ! to หน้าสมาชิก Member Page</h1>
          <h2>Hello World! สวัสดี ! <?php echo $Name; ?> Your Status is <?php echo $Status; ?></h2>
      </div>
</header>
</div>

  <form action="logout.php">
    <button type="submit" class="btn btn-danger" id="btn">
    <span class="glyphicon glyphicon-log-out"> </span>
      ออกจากระบบ </button>
  </form>



<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://web.facebook.com/Lacakp" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>
      <!-- Linkedin -->
      <!-- <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a> -->

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/lacakp" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
      <div class="text-center p-3 site">
    © 2021 All Rights Reserved by
    <a class="text-white" href="https://github.com/lacakp">lacakp</a>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

</footer>
<!-- Footer -->

</body>
</html>
