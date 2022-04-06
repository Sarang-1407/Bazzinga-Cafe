<?php include('../config/constants.php')?>
<html> 
    <head>
        <title>Login - Bazinga Cafe</title>
        <link rel="stylesheet" href="../css/admin.css">
    </head>

    <body>
        <div class="login">
            <h1 class=" text-center">Login</h1>
            <br><br>

            <?php 
                if(isset($_SESSION['login'])){
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }

                if(isset($_SESSION['no-login-message'])){
                    echo $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-message']);
                }
            ?>

            <!-- Login form starts here   -->
            <form action="" class="text-center" method="post"><br><br>
                Username: <br>
                <input type="text" name="username" placeholder= "Enter Username"><br><br>
                Password: <br>
                <input type="password" name="password" placeholder= "Enter Password"><br><br>

                <input type="submit" name="submit" value="Login" class="btn-primary">
                
            </form>
        
            <!-- Login form ends here  -->
            <br><p class="text-center">Created by - <a href="https://www.instagram.com/sarang_1407/">Sarang Dev Saha</a></p>
        </div>

    </body>
    
</html>

<?php 
    // Check whether the submit button is clicked or not
    if(isset($_POST['submit'])){
        // Process for login 
        // 1. Get the data from Login form 
        $username=$_POST['username'];
        $password=md5($_POST['password']); // Password encryption is IMPORTANT

        // 2. SQL to check whether the admin with the given username and password exists or not 
        $sql="SELECT * FROM tbl_admin WHERE username='$username' AND password='$password' ";

        // 3. Execute the Query 
        $res=mysqli_query($conn,$sql);

        // 4. Count rows to check whether the user exists or not
        $count=mysqli_num_rows($res);

        if($count==1){
            // User Available, Login SUCCESSFULL
            $_SESSION['login']="<div class='success'>Login Successful. </div>";
            $_SESSION['user']=$username;  //To check whether the user is logged in or not and logout will unset it
            // Redirect to HOME Page/Dashboard 
            header('location:'.HOMEURL.'Admin/');
        }
        else{
            // User NOT Available, Login FAILED
            $_SESSION['login']="<div class='error text-center'>Login FAILED. Username or Password didn't match. </div>";
            // Redirect to HOME Page/Dashboard 
            header('location:'.HOMEURL.'Admin/login.php');
        }

    }
?>