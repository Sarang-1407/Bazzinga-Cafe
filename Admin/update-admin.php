<?php include('partials/menu.php')?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Admin</h1><br><br>

        <?php 
            // 1. Get the ID of selected Admin
            $id=$_GET['id'];

            // 2. Create SQL Query to get the details
            $sql="SELECT * FROM tbl_admin WHERE id=$id";

            // 3. Execute the Query
            $res=mysqli_query($conn,$sql);
            
            // 4. Check whether the query is executed or not
            if($res==TRUE){
                //Check whether the data is available or not
                $count=mysqli_num_rows($res);
                //Check whether we have the admin data or not
                if($count==1){
                    //Get the details
                    $row=mysqli_fetch_assoc($res);

                    $full_name=$row['full_name'];
                    $username=$row['username'];
                }
                else{
                    //Redirect to manage-admin page
                    header('location:'.HOMEURL.'admin/manage-admin.php');
                }
            }
        ?>

        <form action="" method="POST">
        <table class="tbl-30">
                <tr>
                    <td>Full name: </td>
                    <td><input type="text" name="full_name" placeholder="<?php echo $full_name; ?>" required></td>
                </tr>

                <tr>
                    <td>Username: </td>
                    <td><input type="text" name="username" placeholder="<?php echo $username; ?>" required></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <input type="submit" name="submit" value="Update Admin" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
    
<?php 
    //Check whether the submit button is clicked or not
    if(isset($_POST['submit'])){

        // echo "Button Clicked";
        // Get all the values from the form to update the info
        
        $full_name=$_POST['full_name'];
        $username=$_POST['username'];

        // Create a SQL Query to UPDATE the info 
        $sql="UPDATE tbl_admin SET
        full_name = '$full_name',
        username = '$username'
        WHERE id='$id';
        ";

        // Execute the query
        $res=mysqli_query($conn,$sql);

        // Check whether the query is executed or not 
        if($res==TRUE){
            // The query works
            $_SESSION['update']="<div class='success'> Admin Data UPDATED Successfully </div>";
            header('location:'.HOMEURL."admin/manage-admin.php");
        }
        else{
            // Query failed 
            $_SESSION['update']="<div class='error'> Failed to UPDATE Admin Data. Please try again later. </div>";
            header('location:'.HOMEURL."admin/manage-admin.php");
        }

    }
?>

<?php include('partials/footer.php')?>