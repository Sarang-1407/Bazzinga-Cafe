<?php include('partials/menu.php'); ?>
    <!-- Main COntent section STARTS here -->

    <div class="main-content">
        <div class="wrapper">
            <h1>Dashboard</h1>
            <br>

            <?php 
                if(isset($_SESSION['login'])){
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }
            ?>
            <br>
            <div class="column">

                <?php 
                    // SQL Query
                    $sql="SELECT * FROM tbl_category";   
                    // Execute Query 
                    $res=mysqli_query($conn, $sql);
                    // Count rows 
                    $count=mysqli_num_rows($res); 
                ?>
                <h1><?php echo $count; ?></h1><br>
                Categories
            </div>

            <div class="column">

                <?php 
                    // SQL Query
                    $sql2="SELECT * FROM tbl_menu";   
                    // Execute Query 
                    $res2=mysqli_query($conn, $sql2);
                    // Count rows 
                    $count2=mysqli_num_rows($res2); 
                ?>
                <h1><?php echo $count2; ?></h1><br>
                Cuisines
            </div>

            <div class="column">
                <?php 
                    // SQL Query
                    $sql3="SELECT * FROM tbl_order";   
                    // Execute Query 
                    $res3=mysqli_query($conn, $sql3);
                    // Count rows 
                    $count3=mysqli_num_rows($res3); 
                ?>
                <h1><?php echo $count3; ?></h1><br>
                Orders
            </div>

            <div class="column">
                <?php 
                    // Create SQLQuery to get total revenue generated
                    // Aggregate function in SQL 
                    $sql4="SELECT SUM(total) AS Total FROM tbl_order WHERE status='Delivered' ";

                    // Execute the Query 
                    $res4=mysqli_query($conn, $sql4);

                    // Get the value
                    $row=mysqli_fetch_assoc($res4);

                    // Get the total revenue 
                    $total_revenue=$row['Total'];
                ?>
                <h1>₹<?php echo $total_revenue; ?></h1><br>
                Revenue Generated
            </div>
            <div class="fix"></div>
        </div>
    </div>

    <!-- Main COntent section ENDS here -->
<?php include('partials/footer.php'); ?> 