<?php include('partials-front/menu.php');?>

    <!-- Food search section STARTS here -->
    <section class="food-search text-center">
        <div class="container">

            <form action="">
                <input type="search" name="search" placeholder="Search for your favourite cuisine...">
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>
        </div>
    </section>
    <!-- Food search bar ENDS here -->

    <!-- Random images STARTS here  -->

    <section class="random">
        <div class="container">
            <h2>Sorry, we couldn't show you the selected items &#128557;</h2>
            <h3>How about some of our other deliverable delicacies? <a href="<?php echo HOMEURL;?>menu.php" target="_blank">Click here</a></h3><br> 
            
        </div>
    </section>

    <?php include('partials-front/footer.php');?>





   
</body>
</html>