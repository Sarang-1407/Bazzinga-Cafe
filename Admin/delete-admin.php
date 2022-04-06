<?php 
    // Include constants.php file here 
    include('../config/constants.php');
    // STEP 1- Get the id of admin to be deleted 
    $id = $_GET['id'];

    // STEP 2- Create SQL query to delete admin
    $sql = "DELETE FROM tbl_admin WHERE id=$id";
    
    // Execute the query
    $res = mysqli_query($conn, $sql);

    // Check whether query is successfully executed or not 
    if($res==TRUE){
        // Query is successfully executed and admin is deleted 
        // echo "Admin DELETED";
        // Create session variable to display message 
        $_SESSION['delete'] = "<div class='success'> Admin DELETED Successfully </div>";
        // Redirect to manage-admin.php page 
        header('location:'.HOMEURL.'admin/manage-admin.php');
    }

    else{
        // Query failed and admin not deleted
        // echo "Admin NOT DELETED";
        // Create session variable to display message 
        $_SESSION['delete'] = "<div class='error'> FAILED to DELETE Admin. Try again later. </div>";
        // Redirect to manage-admin.php page 
        header('location:'.HOMEURL.'admin/manage-admin.php');
    }


    // STEP 3- Redirect to manage admin page (success/failure)
?>