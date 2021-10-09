<!-- login.php -->

<?php session_start();?>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit" >
    <link rel="stylesheet" href="https://raw.githubusercontent.com/lacakp/simple-linux-server-mysqldb/site/assets/css/sytle.css">
    <title>Login Page</title>
	<style>
      form { 
      margin: 0 auto; 
      width:250px;
      }
  </style>
</head>
<div class="bg"> </div>
<div class="container" id="app">
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-md-6">
            <div class="card py-3 p-lg-5 shadow">
                <div class="card-title">
                    <img src="https://raw.githubusercontent.com/lacakp/simple-linux-server-mysqldb/site/assets/images/cs63proj.png" width="300px" class="img-fluid d-block mx-auto" alt="logo">
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