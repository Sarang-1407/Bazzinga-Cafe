<?php include('partials/menu.php'); ?>

    <!-- Main COntent section STARTS here -->

    <div class="main-content">
        <div class="wrapper">
            <h1>Manage Admin</h1><br><br>

            <?php 
                if(isset($_SESSION['add'])){
                    echo $_SESSION['add'];  // Displaying Session message
                    unset($_SESSION['add']);//Removing Session message
                }

                if(isset($_SESSION['delete'])){
                    echo $_SESSION['delete'];
                    unset($_SESSION['delete']);
                }

                if(isset($_SESSION['update'])){
                    echo $_SESSION['update'];
                    unset($_SESSION['update']);
                }
                if(isset($_SESSION['user-not-found'])){
                    echo $_SESSION['user-not-found'];
                    unset($_SESSION['user-not-found']);
                }
                if(isset($_SESSION['pwd-not-match'])){
                    echo $_SESSION['pwd-not-match'];
                    unset($_SESSION['pwd-not-match']);
                }
                if(isset($_SESSION['change-pwd'])){
                    echo $_SESSION['change-pwd'];
                    unset($_SESSION['change-pwd']);
                }
            ?><br><br><br>

            <!-- Button for adding Admin  -->

            <a href="add-admin.php" class="btn-primary">ADD Admin</a>
            <br><br><br>

            <table class="tbl-full">
                <tr>
                    <th>Sl. no.</th>
                    <th>Full name</th>
                    <th>Username</th>
                    <th>Actions</th>
                </tr>

                <?php 
                // Query to get all the Admins
                    $sql = "SELECT * FROM tbl_admin";
                    // Executethe query
                    $res=mysqli_query($conn,$sql);

                    // Check whether the query is executed or not
                    if($res==TRUE){
                        // Count rows to check whether we have the data in database or not
                        $count = mysqli_num_rows($res); //Function to get all rows in database

                        $sn=1; // Create a variable and assign the value

                        // Check the number of rows
                        if($count>0){
                            // We have data in database
                            while($rows=mysqli_fetch_assoc($res)){
                                // Using while loop to get all the data from database 
                                // and while loop will run as long as we have data in database ie. as long as count>0

                                // Get individual data
                                $id=$rows['id'];
                                $full_name=$rows['full_name'];
                                $username=$rows['username'];
                            

                                // Display the values in our table 
                                ?>
                                <!-- Closing and restarting php tag to have space for entering html code for table -->
                                <tr>
                                    <td><?php echo $sn++; ?></td>
                                    <td><?php echo $full_name; ?></td>
                                    <td><?php echo $username; ?></td>
                                    <td>
                                        <a href="<?php echo HOMEURL; ?>admin/update-password.php?id=?>" class="btn-primary">UPDATE Password</a>
                                        <a href="<?php echo HOMEURL; ?>admin/update-admin.php?id=<?php echo $id; ?>" class='btn-secondary'>UPDATE Admin</a>
                                        <a href="<?php echo HOMEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class='btn-danger'>DELETE Admin</a>
                                    </td>
                                </tr>



                                <?php
                            }
                        }
                        else{
                            // We don't have data in database
                        }

                    }

                ?>

                
            </table>
            <div class="fix"></div>
        </div>
    </div>

    <!-- Main COntent section ENDS here -->
    <?php include('partials/footer.php'); ?>