<?php
session_start();
session_unset();  
session_destroy(); 

// echo "<script>alert('You have logged out successfully.');</script>";
echo "<script>window.location.href='index.php';</script>";
exit();
?>
