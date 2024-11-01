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
            <h2>Add Hero</h2>
            <form method="post"  enctype="multipart/form-data" class="hero-form">
                <div class="form-group">
                    <label for="heroImage">Enter image Description:</label>
                    <input type="text" id="descrip" placeholder="Enter Image Description (it not Mandatory)" name="descrip">
                </div>
                <div class="form-group">
                    <label for="heroImage">Upload Hero Image:</label>
                    <input type="file" id="heroImage" name="heroImage" required>
                </div>
                <button type="submit" class="btn-submit">Add Hero</button>
            </form>
            <!-- php start  -->
             <?php
             if ($_POST) {
                
                $ext = strtolower(pathinfo($_FILES["heroImage"]["name"],PATHINFO_EXTENSION));
                $name=uniqid();
                $name=$name.".".$ext;
                move_uploaded_file($_FILES["heroImage"]["tmp_name"], "image/$name");

                $descrip=$_POST['descrip'];
                    
                include("connection.php");

                $con->query("INSERT INTO `add_hero`(`heroImage`, `descrip`) VALUES ('$name','$descrip')");
               
             }
             ?>
            <!-- php end  -->
        </div>
    </div>
    
</body>
</html>
