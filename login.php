<!-- login.php -->

<?php session_start();?>
<?php
include('pull_bootstrap.php');
?>
<style type="text/css">
#btn{
width:100%;
}
#sbody{
  background-image: url("https://github.com/lacakp/lacakp/blob/2af8b45283fe90ff7fe223eba623c1f7c918163c/Images/t_Panda.gif");
  background-color: #89ADCB;
}
</style>
<div class="container sbody" style="padding-top:100px">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <h3 align="center">
      <span class="glyphicon glyphicon-lock"> </span>
      Form Login </h3>
      <form  name="formlogin" action="check_login.php" method="POST" id="login" class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-12">
            <input type="text"  name="username" class="form-control" required placeholder="Username" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input type="password" name="password" class="form-control" required placeholder="Password" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-primary" id="btn">
            <span class="glyphicon glyphicon-log-in"> </span>
             Login </button>
               <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
               </label>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>