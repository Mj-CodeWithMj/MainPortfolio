<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginpage.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <title>Forgot Password</title>
</head>
<body>
    <div class="forgot-password-container">
        <div class="login-card">
            <h2>Forgot Password</h2>
            <p>Please enter your email address to reset your password.</p>
            <form method="POST">
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter Your Email" required>
                </div>
                <button type="submit" class="btn-login">Search Email</button>
            </form>
            <!-- php work start -->
            <?php
            if ($_POST) {

                $email = $_POST['email'];

                include("connection.php");
            
                $data = $con->prepare("SELECT * FROM adminlogin WHERE email = ?");
                
                $data->bind_param("s", $email);
                $data->execute();
                $result = $data->get_result();
            
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc(); 
                    $id = $row['id']; 

                    echo "<script>window.location.href='updatePassword.php?id=$id';</script>";
                } else {
                    echo "<script>alert('Email Not Found');</script>"; // Fixed typo
                }
            }
            ?>
            <!-- php work end -->

            <div class="signup-link">
                <p>Remembered your password? <a href="index.php">Log in</a></p>
            </div>
        </div>
    </div>
</body>
</html>
