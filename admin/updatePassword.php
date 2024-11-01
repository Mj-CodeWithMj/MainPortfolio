<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginpage.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Update Password</title>
</head>
<body>
    <div class="update-password-container">
        <div class="login-card">
            <h2>Update Password</h2>
            <form method="POST">
                <div class="input-group">
                    <label for="new-password">New Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter New Password" required>
                </div>
                <div class="input-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" name="confrimpassword" id="confrimpassword" placeholder="Confirm New Password" required>
                </div>
                <button type="submit" class="btn-login">Update Password</button>
            </form>
            <!-- PHP work start -->
              <?php
                if ($_POST) {
                    $password = $_POST['password'];
                    $confrimpassword = $_POST['confrimpassword'];

                    // Include the database connection
                    include("connection.php");

                    // Check if passwords match
                    if ($password === $confrimpassword) {

                        // Get user ID from the URL
                        $id = isset($_GET['id']) ? $_GET['id'] : null;

                        if (!$id) {
                            die("<script>alert('Invalid or missing user ID.'); window.location.href='index.php';</script>");
                        }

                        // Prepare the SQL query
                        $data = $con->prepare("UPDATE adminlogin SET password = ?, confrimpassword = ? WHERE id = ?");

                        if (!$data) {
                            die("<script>alert('SQL error: " . $con->error . "');</script>");
                        }

                        // Bind parameters: 2 strings and 1 integer
                        $data->bind_param("ssi", $password, $confrimpassword, $id);

                        // Execute the query
                        if ($data->execute()) {
                            echo "<script>alert('Password updated successfully!');</script>";
                            echo "<script>window.location.href='index.php';</script>";
                        } else {
                            echo "<script>alert('Error updating password: " . $data->error . "');</script>";
                        }
                    } else {
                        echo "<script>alert('Passwords do not match!');</script>";
                    }
                }
              ?>
            <!-- PHP work end -->
            <div class="signup-link">
                <p>Remembered your password? <a href="index.php">Log in</a></p>
            </div>
        </div>
    </div>
</body>
</html>
