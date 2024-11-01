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
            <h2>Add Technology</h2>
            <form method="POST" enctype="multipart/form-data" class="hero-form">
                <div class="form-group">
                    <label for="title">Technology Name:</label>
                    <input type="text" id="techName" name="techName" placeholder="Enter Image Name" required>
                </div>

                <div class="form-group">
                    <label for="techImage">Upload Hero Image:</label>
                    <input type="file" id="techImage" name="techImage" accept="image/*" required>
                </div>

                <button type="submit" class="btn-submit">Add Technology</button>
            </form>
        <!-- php start  -->
        <?php
            if ($_POST) {
                
                $ext = strtolower(pathinfo($_FILES["techImage"]["name"],PATHINFO_EXTENSION));
                $name=uniqid();
                $name=$name.".".$ext;
                move_uploaded_file($_FILES["techImage"]["tmp_name"], "image/$name");

                $techName=$_POST['techName'];
                    
                include("connection.php");

                $con->query("INSERT INTO `add_tech`(`techName`, `techImage`) VALUES ('$techName','$name')");

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
