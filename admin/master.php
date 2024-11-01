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
            <h1>Welcome <?php echo $fullName?>  </h1>          
        </div>
    </div>
    
</body>
</html>
