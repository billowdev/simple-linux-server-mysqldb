<!-- check_login.php -->

<?php 
session_start();
        if(isset($_POST['username'])){
                  include("conectdb.php");
                  $username = $_POST['username'];
                  $password = $_POST['password'];

                  $sql="SELECT * FROM login 
                  WHERE  Username='".$username."' 
                  AND  Password='".$password."' ";
                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);

                      $_SESSION["Username"] = $row["Username"];
                      $_SESSION["Name"] = $row["Name"];
                      $_SESSION["Status"] = $row["Status"];

                      if($_SESSION["Status"]=="ADMIN"){ 

                        Header("Location: admin.php");
                      }
                  if ($_SESSION["Status"]=="USER"){ 

                        Header("Location: member.php");
                      }
                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }else{

             Header("Location: index.php"); 
 
        }
?>