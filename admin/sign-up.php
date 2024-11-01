<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginpage.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Signup Page</title>
</head>
<body>
    <div class="sign-up-container">
        <div class="sign-up-card">
            <h2>Create an Account</h2>
            <p>Please fill in the details below to create an account.</p>
            <form method="POST">
                <div class="input-group">
                    <label for="fullName">Full Name</label>
                    <input type="text" id="fullName" name="fullName" placeholder="Enter Your Name" required>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter Your Email" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter Your Password" required>
                </div>
                <div class="input-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" id="confrimpassword" name="confrimpassword" placeholder="Confirm Your Password" required>
                </div>
                <button type="submit" class="btn-login">Sign Up</button>
            </form>

            <!-- php connection start -->
             <?php

                if ($_POST) {

                   $fullName=$_POST['fullName'];
                   $email=$_POST['email'];
                   $password=$_POST['password'];
                   $confrimpassword=$_POST['confrimpassword'];

                   include("connection.php");
                  
                   if ($password == $confrimpassword) {
                    
                    $con->query("INSERT INTO `adminlogin`(`fullName`, `email`, `password`, `confrimpassword`) VALUES ('$fullName','$email','$password','$confrimpassword')");

                        if ($con) {
                            
                                echo "<script> alert ('User Registerd succesfully')</script>";
                                echo "<script>window.location.href='index.php';</script>";

                        }else {
                                echo "<script> alert('User data not Registerd')</script>";    
                        }

                   }else {
                            echo "<script> alert('Password Not Matched')</script>";
                   }
                }
             ?>
            <!-- php connection start -->
            <div class="signup-link">
                <p>Already have an account? <a href="index.php">Log in</a></p>
            </div>
        </div>
    </div>
</body>
</html>
