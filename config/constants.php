<?php 
    // Start Session
    session_start();
    //Create constants to store non-repeating values
    define('HOMEURL','http://localhost/Bazinga/');
    define('LOCALHOST','localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD', '');
    define('DB_NAME','bazinga-order');

    $conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error()); // Database connection
    $db_select = mysqli_select_db($conn,'bazinga-order') or die(mysqli_error()); //Selecting Database

?>