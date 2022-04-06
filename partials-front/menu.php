<?php include('config/constants.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bazinga Cafe</title>

    <!-- linking the css file -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navigation bar STARTS here -->
    <section class="navbar">
        <div class="container">
            <a href="<?php echo HOMEURL; ?>">
            <div class="logo">
                <img src="Images/logo_1.jpg" alt="Resturant logo" class="img-responsive">
            </div>
            </a>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="<?php echo HOMEURL; ?>">Home</a>
                    </li>

                    <li>
                        <a href="<?php echo HOMEURL; ?>categories.php">Categories</a>
                    </li>

                    <li>
                        <a href="<?php echo HOMEURL; ?>menu.php">Menu</a>
                    </li>

                    <li>
                        <a href="a">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="fix"></div>
        </div>
    </section>
    <!-- Navigation bar ENDS here -->