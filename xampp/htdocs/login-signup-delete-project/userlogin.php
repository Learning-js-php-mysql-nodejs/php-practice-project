<!DOCTYPE html>

<html lang="en" dir="ltr">̥
  <head>
    <meta charset="utf-8">
    <title>login</title>
  </head>
  <body>
 <h2 style="color:blue">Login & Signup</h2>
   <form class="" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
      <div class="container">
                    <label for="uname"><b>Username :</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>
                      <br><br>

                    <label for="psw"><b>Password :</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required> <br><br>


                   <button type="submit" name="login">Login</button>

                   <button id="myButton" class="float-left submit-button" >Sign up</button>

                   <script type="text/javascript">
                       document.getElementById("myButton").onclick = function () {
                           location.href = "http://localhost/demologin/UserRegistration.php";
                       };
                   </script>
        </form>

        <?php if(isset($_POST['login'])){
          $conn = mysqli_connect("localhost","root","","crud") or die("connection failed");

           $username = mysqli_real_escape_string($conn,$_POST['uname']);
           $password = md5($_POST['psw']);

          $sql ="SELECT NAME, PASSWORD FROM user WHERE NAME = '{$username}' AND PASSWORD = '{$password}'";

           $result = mysqli_query($conn,$sql) or die("Query failed");

          if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
              session_start();
              $_SESSION["username"] = $row['NAME'];
              $_SESSION["password"] = $row['PASSWORD'];

              header("location: http://localhost/demologin/index.php");
            }

          }else{
            echo "<div>username and password are not match</div>";
          }
        }

         ?>
  </body>
</html>
