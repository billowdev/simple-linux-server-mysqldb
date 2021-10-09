<!-- check_login.php -->

<?php 
session_start();
        if(isset($_POST['username']))
        {
                  include("connectdb.php");
                  $username = $_POST['username'];
                  $password = $_POST['password'];

                  $sql="SELECT * FROM member 
                  WHERE  Username='".$username."' 
                  AND  Password='".$password."' ";
                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1) 
                  {
                      $row = mysqli_fetch_array($result);
                      $_SESSION["UserID"] = $row["UserID"];
                      $_SESSION["Name"] = $row["Name"];
                      $_SESSION["Status"] = $row["Status"];

                      if($_SESSION["Status"]=="ADMIN")
                      { 
                        Header("Location: admin.php");
                      }

                      if ($_SESSION["Status"]=="USER") 
                          { 

                            Header("Location: member.php");
                          }
                  }

                  else 
                  {
                    echo "<script>";
                    echo "alert(\" USER OR PASSWORD INCORRECT !\");"; 
                    echo "window.history.back()";
                    echo "</script>";
                  }
        } 
        else
        {
          Header("Location: login.php"); 
        }
?>