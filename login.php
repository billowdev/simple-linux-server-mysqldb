<!-- login.php -->

<?php session_start();?>
<?php
include('pull_bootstrap.php');
?>

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

<div class="bg"> </div>
<div class="container" id="app">
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-md-6">
            <div class="card py-3 p-lg-5 shadow">
                <div class="card-title">
                    <img src="https://raw.githubusercontent.com/lacakp/testServerPHP/main/cs63proj.png" width="300px" class="img-fluid d-block mx-auto" alt="logo">
                </div>
                <div class="card-body">
                    <form name="formlogin" action="check_login.php" method="POST" id="login">

                        <div class="row mb-3">
                            <label for="username" class="col-sm-3" col-form-label>ชื่อผู้ใช้งาน</label>
                            <div class="col-sm-9">
                              <input type="text"  name="username" class="form-control" required placeholder="Username" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-sm-3" col-form-label>รหัสผ่าน</label>
                            <div class="col-sm-9">
                              <input type="password" name="password" class="form-control" required placeholder="Password" />
                            </div>
                        </div>
                        <div class="d-grid mb-3">
                            <button class="btn btn-primary"> เข้าสู่ระบบ </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

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