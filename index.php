<?php include('partials-front/menu.php'); ?>

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

    <!-- Category section STARTS here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Cuisines</h2>

            <a href="<?php echo HOMEURL;?>random.php" target="_blank">
            <div class="box float-container">
                <img src="Images/pizza.jpg" alt="Your dream Pizza is loading" class="img-responsive img-curve category-btn" height="450px">
                <h3 class="float-text text-white">Pizza</h3>
            </div>
            </a>

            <a href="<?php echo HOMEURL;?>random.php" target="_blank">
            <div class="box float-container">
                <img src="Images/burger.jpg" alt="Your dream Burger is loading" class="img-responsive img-curve category-btn" height="450px">
                <h3 class="float-text text-white">Burger</h3>
            </div>
            </a>

            <a href="<?php echo HOMEURL;?>random.php" target="_blank">
            <div class="box float-container">
                <img src="Images/milkshake.jpg" alt="Your dream Smoothie is loading" class="img-responsive img-curve category-btn" height="450px">
                <h3 class="float-text text-white">Milkshake/ <br> Smoothie</h3>
            </div>
            </a>

            <a href="<?php echo HOMEURL;?>random.php" target="_blank">
            <div class="box float-container">
                <img src="Images/thali.jpg" alt="Your dream Thali is loading" class="img-responsive img-curve category-btn" height="450px">
                <h3 class="float-text text-white">Thali</h3>
            </div>
            </a>

            <a href="<?php echo HOMEURL;?>random.php" target="_blank">
            <div class="box float-container">
                <img src="Images/maggi.jpg" alt="Your dream Maggi is loading" class="img-responsive img-curve category-btn" height="450px">
                <h3 class="float-text text-white">Maggi</h3>
            </div>
            </a>

            <a href="<?php echo HOMEURL;?>random.php" target="_blank">
            <div class="box float-container">
                <img src="Images/roll.jpg" alt="Your dream Rolls are loading" class="img-responsive img-curve category-btn" height="450px">
                <h3 class="float-text text-white">Roll</h3>
            </div>
            </a>
            <p class="text-center">
                <a href="<?php echo HOMEURL;?>categories.php" target="_blank">Show more<br>
                <img src="https://img.icons8.com/material-rounded/24/000000/expand-arrow--v2.png" class="down-btn"></a>
            </p>
            <div class="fix"></div>
        </div>
    </section>
    <!-- Category section ENDS here -->

     <!-- Food-Menu STARTS here -->
     <section class="food-menu">
         <div class="container">
            <h2 class="text-center">Menu</h2>

            <div class="menu-box">
                <div class="menu-img">
                    <img src="Images/butter chicken-menu.jpg" alt="Butter Chicken" class="img-responsive img-curve">
                </div>

                <div class="menu-desc">
                    <h4>Butter Chicken</h4>
                    <p class="food-price">₹110(2pc) &nbsp;  ₹190(4pc) &nbsp;  ₹360(8pc)</p>
                    <p class="food-desc">
                        Made with xyz
                    </p>
                    <a href="<?php echo HOMEURL;?>order.php" target="_blank" class="btn btn-primary">Order Now</a>
                </div>
                <div class="fix"></div>
            </div>
            
            <div class="menu-box">
                <div class="menu-img">
                    <img src="Images/Tandoori roti-menu.jpg" alt="Tandoori roti" class="img-responsive img-curve">
                </div>

                <div class="menu-desc">
                    <h4>Tandoori roti</h4>
                    <p class="food-price">₹12</p>
                    <p class="food-desc">
                        Made with xyz
                    </p>
                    <a href="<?php echo HOMEURL; ?>order.php" target="_blank" class="btn btn-primary">Order Now</a>
                </div>
                <div class="fix"></div>
            </div>

            <div class="menu-box">
                <div class="menu-img">
                    <img src="Images/paneer tikka-menu.jpg" alt="Paneer tikka" class="img-responsive img-curve">
                </div>

                <div class="menu-desc">
                    <h4>Paneer Tikka</h4>
                    <p class="food-price">₹100</p>
                    <p class="food-desc">
                        Made with xyz
                    </p>
                    <a href="<?php echo HOMEURL;?>order.php" target="_blank" class="btn btn-primary">Order Now</a>
                </div>
                <div class="fix"></div>
            </div>

            <div class="menu-box">
                <div class="menu-img">
                    <img src="Images/sandwich-menu.jpg" alt="veg cheese grilled sandwich" class="img-responsive img-curve">
                </div>

                <div class="menu-desc">
                    <h4>Veg cheese grilled Sandwich</h4>
                    <p class="food-price">₹50</p>
                    <p class="food-desc">
                        Made with xyz
                    </p>
                    <a href="<?php echo HOMEURL;?>order.php" target="_blank" class="btn btn-primary">Order Now</a>
                </div>
                <div class="fix"></div>
            </div>

            <div class="menu-box">
                <div class="menu-img">
                    <img src="Images/momo-menu.jpg" alt="Chicken momo" class="img-responsive img-curve">
                </div>

                <div class="menu-desc">
                    <h4>Chicken Momo</h4>
                    <p class="food-price">₹40(steam) &nbsp; ₹50(fry)</p>
                    <p class="food-desc">
                        Made with xyz
                    </p>
                    <a href="<?php echo HOMEURL; ?>order.php" target="_blank" class="btn btn-primary">Order Now</a>
                </div>
                <div class="fix"></div>
            </div>

            <div class="menu-box">
                <div class="menu-img">
                    <img src="Images/sundae-menu.jpg" alt="Sundae fudge" class="img-responsive img-curve">
                </div>

                <div class="menu-desc">
                    <h4>Sundae fudge</h4>
                    <p class="food-price">₹50</p>
                    <p class="food-desc">
                        Made with xyz
                    </p>
                    <a href="<?php echo HOMEURL; ?>order.php" target="_blank" class="btn btn-primary">Order Now</a>
                </div>
                <div class="fix"></div>
            </div>
            <div class="fix"></div>
        </div>

        <p class="text-center">
            <a href="<?php echo HOMEURL;?>menu.php" target="_blank">Show more<br>
            <img src="https://img.icons8.com/material-rounded/24/000000/expand-arrow--v2.png" class="down-btn"></a>
        </p>
    </section>
    <!-- Food-Menu ENDS here -->

    <?php include('partials-front/footer.php');?>