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
        <div class="manage-hero">
            <h2>Manage Experiance</h2>
            <table class="hero-table">
                <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>Heading</th>
                        <th>Sub Heading</th>
                        <th>paragraph 1</th>
                        <th>paragraph 2</th>
                        <th>paragraph 3</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <!-- php work start -->
                <?php
                 

                 include("connection.php");
                 $data=$con->query("select * from add_experiance");

                 while ($row=$data->fetch_object()) {
                 
                ?>
                <tbody>
                    <tr>
                        <td id="heroDescription"><?php echo $row->id; ?></td>
                        <td id="heroDescription"><?php echo $row->heading; ?></td>
                        <td id="heroDescription"><?php echo $row->subHeading; ?></td>
                        <td id="heroDescription"><?php echo $row->para1; ?></td>
                        <td id="heroDescription"><?php echo $row->para2; ?></td>
                        <td id="heroDescription"><?php echo $row->para3; ?></td>
                        <td>
                            <button class="update-btn">Update</button>
                        </td>
                    </tr>
                </tbody>
                <?php
                    }
                ?>
                <!-- php work end -->
            </table>
        </div>
    </div>
</div>

    
</body>
</html>
