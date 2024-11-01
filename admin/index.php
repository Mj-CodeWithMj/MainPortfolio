<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard - Login</title>
  <link rel="stylesheet" href="css/loginpage.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
  <div class="login-container">
    <div class="login-card">
      <h2>Welcome Back</h2>
      <p>Please login to your account</p>
      <form action="#" method="POST">
        <div class="input-group">
          <label for="fullName">Full Name</label>
          <input type="text" id="fullName" name="fullName" placeholder="Enter your Name" required>
        </div>
        <div class="input-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <div class="options">
          <a href="forgotPassword.php">Forgot password?</a>
        </div>
        <button type="submit" class="btn-login">Login</button>
      </form>

      <!-- php connection start -->
       <?php
       if ($_POST) {
        
        $fullName=$_POST['fullName'];
        $password=$_POST['password'];

        include("connection.php");

        $data=$con->query("select * from adminlogin where fullName='$fullName' and password='$password'");

        $total=mysqli_num_rows($data);

          if ($total == 1) {

            $_SESSION['fullName']=$fullName;
            echo "<script>window.location.href='master.php';</script>";

          }else {

            echo "<script>alert('login Failed')</script>";
            echo "<script>window.location.href='index.php';</script>";

          }
       }
       ?>
      <!-- php connection end  -->

      <p class="signup-link">
        Don't have an account? <a href="sign-up.php">Sign up</a>
      </p>
    </div>
  </div>
</body>
</html>
