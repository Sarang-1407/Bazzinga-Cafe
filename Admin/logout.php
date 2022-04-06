<?php 
    // include constants.php file 
    include('../config/constants.php');
    // 1. Destroy the session and redirect to login page 
    session_destroy();  // Unsets $_SESSION['user']

    // 2. Redirect to login page 
    header('location:'.HOMEURL.'Admin/login.php');
?>