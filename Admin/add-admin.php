<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>ADD Admin</h1><br><br>
        <?php 
            if(isset($_SESSION['add'])){ //Check whether the session is set or not
                echo $_SESSION['add']; //Display the session message if set
                unset($_SESSION['add']);//Remove the session message 
            }
        ?>
        

        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full name: </td>
                    <td><input type="text" name="full_name" placeholder="E.g. Deacon St. John" required></td>
                </tr>

                <tr>
                    <td>Username: </td>
                    <td><input type="text" name="username" placeholder="E.g. deaconjohn" required></td>
                </tr>

                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="password" placeholder="E.g. deacon@267250" required></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="ADD Admin" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php include('partials/footer.php'); ?>

<?php
    // Process the values from form and save them in database
    // Check whether button is clicked or not

    if (isset($_POST['submit'])){
        // button clicked 
        //echo "Button Clicked";

        //STEP 1: Get data from form 
        $full_name = $_POST['full_name'];

        $username = $_POST['username'];

        $password = md5($_POST['password']); // Password encrypted using MD5

        //STEP 2: SQL query to save data to database
        $sql = "INSERT INTO tbl_admin SET
            full_name='$full_name',
            username='$username',
            password='$password'
        ";

        //STEP 3: Execute query and save data in database
        $conn = mysqli_connect('localhost','root','') or die(mysqli_error()); // Database connection
        $db_select = mysqli_select_db($conn,'bazinga-order') or die(mysqli_error()); //Selecting Database
        
        $res = mysqli_query($conn, $sql) or die(mysqli_error());

        //STEP 4: Check whether the data is inserted or not (Query is executed) and display appropriate message
        if($res==TRUE){
            // Data Inserted
            // echo "Data Inserted"; 
            // Create a session variable to display message
            $_SESSION['add'] = "<div class='success'> Admin Added Successfully </div>";
            //Redirect page to manage-admin page
            header("Location:".HOMEURL.'admin/manage-admin.php');
        }
        else{
            // Failed to Insert data
            // echo "Failed to Insert Data";
            // Create a session variable to display message
            $_SESSION['add'] = "<div class='error'> Sorry, couldn't ADD Admin </div>";
            //Redirect page to manage-admin page
            header("Location:".HOMEURL.'admin/manage-admin.php');
        }
        
        
    }
    
    else{
        // button not clicked 
        // echo "Button Not Clicked";
    }
?>