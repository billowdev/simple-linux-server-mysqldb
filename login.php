<!-- login.php -->

<?php session_start();?>
<?php
include('pull_bootstrap.php');
?>


<div class="bg"> </div>
<div class="container" id="app">
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-md-6">
            <div class="card py-3 p-lg-5 shadow">
                <div class="card-title">
                    <img src="assets/images/textlogo2.png" class="img-fluid d-block mx-auto" alt="logo">
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