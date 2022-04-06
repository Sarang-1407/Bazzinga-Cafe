<?php include('partials/menu.php') ?>
<div class="main-content">
    <div class="wrapper">
        <h1>Update Password</h1><br><br>

        <?php 
        if(isset($_GET['id'])){
            $id=$_GET['id'];

        } 
        ?>
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Current Password: </td>
                    <td><input type="password" name="current_password" placeholder="Current Password" required></td>
                </tr>

                <tr>
                    <td>Create New Password: </td>
                    <td><input type="password" name="new_password" placeholder="New Password" required></td>
                </tr>

                <tr>
                    <td>Confirm New Password: </td>
                    <td><input type="password" name="confirm_password" placeholder="Confirm New Password" required></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id;?>">
                        <input type="submit" name="submit" value="Change Password" class="btn-secondary">
                    </td>
                </tr>

            </table>
        </form>
    </div>
</div>


<?php 
    // Check whether the submit button is clicked or not 
    if(isset($_POST['submit'])){
        // echo "Button Clicked";

        // 1. Get the data from the form
        $id=$_POST['id'];
        $current_password=md5($_POST['current_password']);
        $new_password=md5($_POST['new_password']);
        $confirm_password=md5($_POST['confirm_password']); 
        
        // 2. Check whether the user with current id and password exists or not 
        $sql="SELECT * FROM tbl_admin WHERE id=$id AND password='$current_password'";

        // Execute the query
        $res=mysqli_query($conn, $sql);

        if($res==TRUE){
            // Check whether the query is available or not 
            $count=mysqli_num_rows($res);

            if($count==1){
                // User exists and password can be updated
                // echo "User Found";
                // Check whether the new password and confirm password match or not
                if($new_password==$confirm_password){
                   
                    // Update the password
                    $sql2="UPDATE tbl_admin SET
                        password='$new_password'
                        WHERE id=$id
                    ";

                    // Execute the query
                    $res2=mysqli_query($conn,$sql2);

                    // Check whether the query is executed or not 
                    if($res==TRUE){
                        // Display success message
                        // Redirect to manage-admin page with success message 
                        
                        $_SESSION['change-pwd'] = "<div class='success'> Password Updated Successfully</div>";
                        // Redirect to manage-admin.php 
                        header('location:'.HOMEURL.'admin/manage-admin.php');
                        
                    }
                    else{
                        // Display error message 
                        // Redirect to manage-admin page with error message 
                        
                        $_SESSION['change-pwd'] = "<div class='error'> Passwords didn't match </div>";
                        // Redirect to manage-admin.php 
                        header('location:'.HOMEURL.'admin/manage-admin.php');
                    }
                }

                else{
                    // Redirect to manage-admin page with error message 
                    // Passwords didn't match, set error message and redirect
                    $_SESSION['pwd-not-match'] = "<div class='error'> Passwords didn't match </div>";
                    // Redirect to manage-admin.php 
                    header('location:'.HOMEURL.'admin/manage-admin.php');
                }
            }

            else{
                // User doesn't exist set error message and redirect
                $_SESSION['user-not-found'] = "<div class='error'> User Not Found </div>";
                // Redirect to manage-admin.php 
                header('location:'.HOMEURL.'admin/manage-admin.php');
            }
        }


        // 3. Check whether the "New Password" and "Confirm Password" match or not


        // 4. Change Password if all the conditions match 
    }
?>



<?php include('partials/footer.php') ?>