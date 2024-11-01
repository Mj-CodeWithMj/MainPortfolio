<?php 
session_start();

if (!isset($_SESSION['fullName'])) {
    echo "<script>window.location.href='index.php';</script>";
    exit();
}

// Fetch user data (if needed)
$fullName = $_SESSION['fullName'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MJ-Portfolio Admin Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="mainCss/mains.css">
</head>
<body>

    <!-- side bar start  -->
    <?php
    include('files/sidebar.php');
    ?>
    <!-- side bar end  -->


    <div class="main-content">
        <div class="header">
            <i class="fas fa-bars toggle-btn"></i>
            <h1>M.J-Portfolio</h1>
            <div class="notification">
                <i class="fas fa-bell"></i>
            </div>
        </div>

        <div class="content">
            <h2>Add About</h2>
            <form method="POST" enctype="multipart/form-data" class="hero-form">
                <div class="form-group">
                    <label for="para1">About para1:</label>
                    <textarea  id="para1" name="para1" placeholder="Enter Paragraph 1" required></textarea>
                </div>
                <div class="form-group">
                    <label for="para2">About para2:</label>
                    <textarea  id="para2" name="para2" placeholder="Enter Paragraph 2" required></textarea>
                </div>
                <div class="form-group">
                    <label for="para3">About para3:</label>
                    <textarea  id="para3" name="para3" placeholder="Enter Paragraph 3" required></textarea>
                </div>

                <button type="submit" class="btn-submit">Add About</button>
            </form>
            <!-- php start  -->
            <?php
             if ($_POST) {

                $para1=$_POST['para1'];
                $para2=$_POST['para2'];
                $para3=$_POST['para3'];

                include("connection.php");

                $con->query("INSERT INTO `add_about`(`para1`, `para2`, `para3`) VALUES ('$para1','$para2','$para3')");

               
                if ($con) {
                    echo "<script>alert('Data Inserted SuccessFully')</script>";
                }else {
                    echo "<script>alert('Data Insertion Failed')</script>";
                }
             }
            ?>
            <!-- php end  -->
        </div>
    </div>
    
</body>
</html>
