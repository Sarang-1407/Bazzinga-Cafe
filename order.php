<?php include('partials-front/menu.php');?>

<!-- FORM section STARTS here -->
<section class="order-search text-center">
    <div class="container">

        <h1 class="text-center text-white">Please fill this form to confirm your order...</h1><br>
        <fieldset>
            <legend class="text-white order-label">Your Orders</legend>
        <form action="">
            <div class="text-white item">

        <ul>
            <li>
                    <label for="food" class="text-white order-menu order-label">Select Cuisine 1: </label>
                    <select name="food" class="input-responsive">
                        <option value="Butter Chicken">Butter Chicken &nbsp;&nbsp;₹190(4pc)</option>
                        <option value="Tandoori roti">Tandoori roti &nbsp;&nbsp;₹12</option>
                        <option value="Paneer Tikka">Paneer Tikka &nbsp;&nbsp;₹100</option>
                        <option value="Veg cheese grilled Sandwich">Veg cheese grilled Sandwich &nbsp;&nbsp;₹50</option>
                        <option value="Chicken Momo-steam">Chicken Momo(steamed) &nbsp;&nbsp;₹40</option>
                        <option value="Chicken Momo-fry">Chicken Momo(fried) &nbsp;&nbsp;₹50</option>
                        <option value="Sundae fudge">Sundae fudge &nbsp;&nbsp;₹50</option>
                        <option value="Chicken Soup" selected>Chicken Soup &nbsp;&nbsp;₹60</option>
                        <option value="Aaloo Paratha">Aaloo Paratha &nbsp;&nbsp;₹30</option>
                        <option value="Cappuccino">Cappuccino &nbsp;&nbsp;₹20</option>
                        <option value="Mint Lime Mojito">Mint Lime Mojito &nbsp;&nbsp;₹40</option>
                        <option value="Chicken Noodles">Chicken Noodles &nbsp;&nbsp;₹90</option>
                        <option value="Fried rice">Fried rice &nbsp;&nbsp;₹70</option>
                    </select>
                    <div class="text-white item order-menu order-label">
                        Quantity: <input type="number" name="qty" class="input-responsive" value="1" min="1" max="15" required>
                    </div>

            </li>

            <li>
                <label for="food" class="text-white order-menu order-label">Select Cuisine 2: </label>
                <select name="food" class="input-responsive">
                    <option value="NIL">---</option>
                    <option value="Butter Chicken">Butter Chicken &nbsp;&nbsp;₹190(4pc)</option>
                    <option value="Tandoori roti">Tandoori roti &nbsp;&nbsp;₹12</option>
                    <option value="Paneer Tikka">Paneer Tikka &nbsp;&nbsp;₹100</option>
                    <option value="Veg cheese grilled Sandwich">Veg cheese grilled Sandwich &nbsp;&nbsp;₹50</option>
                    <option value="Chicken Momo-steam">Chicken Momo(steamed) &nbsp;&nbsp;₹40</option>
                    <option value="Chicken Momo-fry">Chicken Momo(fried) &nbsp;&nbsp;₹50</option>
                    <option value="Sundae fudge" selected>Sundae fudge &nbsp;&nbsp;₹50</option>
                    <option value="Chicken Soup">Chicken Soup &nbsp;&nbsp;₹60</option>
                    <option value="Aaloo Paratha">Aaloo Paratha &nbsp;&nbsp;₹30</option>
                    <option value="Cappuccino">Cappuccino &nbsp;&nbsp;₹20</option>
                    <option value="Mint Lime Mojito">Mint Lime Mojito &nbsp;&nbsp;₹40</option>
                    <option value="Chicken Noodles">Chicken Noodles &nbsp;&nbsp;₹90</option>
                    <option value="Fried rice">Fried rice &nbsp;&nbsp;₹70</option>
                </select>
                <div class="text-white item order-menu order-label">
                    Quantity: <input type="number" name="qty" class="input-responsive" value="1" min="1" max="15" required>
                </div>
            </li>

            <li>
                <label for="food" class="text-white order-menu order-label">Select Cuisine 3: </label>
                <select name="food" class="input-responsive">
                    <option value="NIL">---</option>
                    <option value="Butter Chicken">Butter Chicken &nbsp;&nbsp;₹190(4pc)</option>
                    <option value="Tandoori roti">Tandoori roti &nbsp;&nbsp;₹12</option>
                    <option value="Paneer Tikka">Paneer Tikka &nbsp;&nbsp;₹100</option>
                    <option value="Veg cheese grilled Sandwich">Veg cheese grilled Sandwich &nbsp;&nbsp;₹50</option>
                    <option value="Chicken Momo-steam">Chicken Momo(steamed) &nbsp;&nbsp;₹40</option>
                    <option value="Chicken Momo-fry">Chicken Momo(fried) &nbsp;&nbsp;₹50</option>
                    <option value="Sundae fudge">Sundae fudge &nbsp;&nbsp;₹50</option>
                    <option value="Chicken Soup">Chicken Soup &nbsp;&nbsp;₹60</option>
                    <option value="Aaloo Paratha">Aaloo Paratha &nbsp;&nbsp;₹30</option>
                    <option value="Cappuccino" selected>Cappuccino &nbsp;&nbsp;₹20</option>
                    <option value="Mint Lime Mojito">Mint Lime Mojito &nbsp;&nbsp;₹40</option>
                    <option value="Chicken Noodles">Chicken Noodles &nbsp;&nbsp;₹90</option>
                    <option value="Fried rice">Fried rice &nbsp;&nbsp;₹70</option>
                </select> 
                <div class="text-white item order-menu order-label">
                    Quantity: <input type="number" name="qty" class="input-responsive" value="1" min="1" max="15" required>
                </div>
            </li>

            <details class="text-white order-label">
                <summary>Select more Cuisines</summary>
                <li>
                    <label for="food" class="text-white order-menu order-label">Select Cuisine 4: </label>
                    <select name="food" class="input-responsive">
                        <option value="NIL">---</option>
                        <option value="Butter Chicken">Butter Chicken &nbsp;&nbsp;₹190(4pc)</option>
                        <option value="Tandoori roti">Tandoori roti &nbsp;&nbsp;₹12</option>
                        <option value="Paneer Tikka">Paneer Tikka &nbsp;&nbsp;₹100</option>
                        <option value="Veg cheese grilled Sandwich">Veg cheese grilled Sandwich &nbsp;&nbsp;₹50</option>
                        <option value="Chicken Momo-steam">Chicken Momo(steamed) &nbsp;&nbsp;₹40</option>
                        <option value="Chicken Momo-fry">Chicken Momo(fried) &nbsp;&nbsp;₹50</option>
                        <option value="Sundae fudge">Sundae fudge &nbsp;&nbsp;₹50</option>
                        <option value="Chicken Soup">Chicken Soup &nbsp;&nbsp;₹60</option>
                        <option value="Aaloo Paratha">Aaloo Paratha &nbsp;&nbsp;₹30</option>
                        <option value="Cappuccino">Cappuccino &nbsp;&nbsp;₹20</option>
                        <option value="Mint Lime Mojito">Mint Lime Mojito &nbsp;&nbsp;₹40</option>
                        <option value="Chicken Noodles">Chicken Noodles &nbsp;&nbsp;₹90</option>
                        <option value="Fried rice">Fried rice &nbsp;&nbsp;₹70</option>
                    </select> 
                    <div class="text-white item order-menu order-label">
                        Quantity: <input type="number" name="qty" class="input-responsive" value="1" min="1" max="15" required>
                    </div>
                </li>

                <li>
                    <label for="food" class="text-white order-menu order-label">Select Cuisine 5: </label>
                    <select name="food" class="input-responsive">
                        <option value="NIL">---</option>
                        <option value="Butter Chicken">Butter Chicken &nbsp;&nbsp;₹190(4pc)</option>
                        <option value="Tandoori roti">Tandoori roti &nbsp;&nbsp;₹12</option>
                        <option value="Paneer Tikka">Paneer Tikka &nbsp;&nbsp;₹100</option>
                        <option value="Veg cheese grilled Sandwich">Veg cheese grilled Sandwich &nbsp;&nbsp;₹50</option>
                        <option value="Chicken Momo-steam">Chicken Momo(steamed) &nbsp;&nbsp;₹40</option>
                        <option value="Chicken Momo-fry">Chicken Momo(fried) &nbsp;&nbsp;₹50</option>
                        <option value="Sundae fudge">Sundae fudge &nbsp;&nbsp;₹50</option>
                        <option value="Chicken Soup">Chicken Soup &nbsp;&nbsp;₹60</option>
                        <option value="Aaloo Paratha">Aaloo Paratha &nbsp;&nbsp;₹30</option>
                        <option value="Cappuccino">Cappuccino &nbsp;&nbsp;₹20</option>
                        <option value="Mint Lime Mojito">Mint Lime Mojito &nbsp;&nbsp;₹40</option>
                        <option value="Chicken Noodles">Chicken Noodles &nbsp;&nbsp;₹90</option>
                        <option value="Fried rice">Fried rice &nbsp;&nbsp;₹70</option>
                    </select> 
                    <div class="text-white item order-menu order-label">
                        Quantity: <input type="number" name="qty" class="input-responsive" value="1" min="1" max="15" required>
                    </div>
                </li>

                <li>
                    <label for="food" class="text-white order-menu order-label">Select Cuisine 6: </label>
                    <select name="food" class="input-responsive">
                        <option value="NIL">---</option>
                        <option value="Butter Chicken">Butter Chicken &nbsp;&nbsp;₹190(4pc)</option>
                        <option value="Tandoori roti">Tandoori roti &nbsp;&nbsp;₹12</option>
                        <option value="Paneer Tikka">Paneer Tikka &nbsp;&nbsp;₹100</option>
                        <option value="Veg cheese grilled Sandwich">Veg cheese grilled Sandwich &nbsp;&nbsp;₹50</option>
                        <option value="Chicken Momo-steam">Chicken Momo(steamed) &nbsp;&nbsp;₹40</option>
                        <option value="Chicken Momo-fry">Chicken Momo(fried) &nbsp;&nbsp;₹50</option>
                        <option value="Sundae fudge">Sundae fudge &nbsp;&nbsp;₹50</option>
                        <option value="Chicken Soup">Chicken Soup &nbsp;&nbsp;₹60</option>
                        <option value="Aaloo Paratha">Aaloo Paratha &nbsp;&nbsp;₹30</option>
                        <option value="Cappuccino">Cappuccino &nbsp;&nbsp;₹20</option>
                        <option value="Mint Lime Mojito">Mint Lime Mojito &nbsp;&nbsp;₹40</option>
                        <option value="Chicken Noodles">Chicken Noodles &nbsp;&nbsp;₹90</option>
                        <option value="Fried rice">Fried rice &nbsp;&nbsp;₹70</option>
                    </select> 
                    <div class="text-white item order-menu order-label">
                        Quantity: <input type="number" name="qty" class="input-responsive" value="1" min="1" max="15" required>
                    </div>
                </li>
            </details>
        </ul>
        

            </div>

            
                
            
        </form>
    </fieldset>

    <fieldset>
        <legend class="text-white order-label">Delivery Details</legend>
        <form action="">
            <div class="order-label text-left text-white">Full Name: </div>
            <input type="text" name="full-name" class="input-responsive" placeholder="E.g. Deacon St. John" required>
            
            <div class="order-label text-left text-white">Phone Number: </div>
            <input type="tel" name="contact" class="input-responsive" placeholder="E.g. 9431xxxxxx" pattern="[0-9]{10}" required>

            <div class="order-label text-left text-white">Email: </div>
            <input type="email" name="email" class="input-responsive" placeholder="(optional) E.g. abc@gmail.com">

            <div class="order-label text-left text-white">Address: </div>
            <textarea name="address" class="input-responsive" cols="30" rows="10" placeholder="E.g. House no., Street, City" required></textarea>

            <div class="order-label text-left text-white mobile">
                <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary"> 
                <input type="reset" name="reset" value="Reset" class="btn btn-primary mobile">

            </div>


        </form>

        
    </fieldset>

    <?php 

                //CHeck whether submit button is clicked or not
                if(isset($_POST['submit']))
                {
                    // Get all the details from the form

                    $food = $_POST['food'];
                    $price = $_POST['food'];
                    $qty = $_POST['qty'];

                    $total = $price * $qty; // total = price x qty 

                    $order_date = date("Y-m-d h:i:sa"); //Order DAte

                    $status = "Ordered";  // Ordered, On Delivery, Delivered, Cancelled

                    $customer_name = $_POST['full-name'];
                    $customer_contact = $_POST['contact'];
                    $customer_email = $_POST['email'];
                    $customer_address = $_POST['address'];


                    //Save the Order in Databaase
                    //Create SQL to save the data
                    $sql2 = "INSERT INTO tbl_order SET 
                        food = '$food',
                        price = $price,
                        quantity = $qty,
                        total = $total,
                        order_date = '$order_date',
                        status = '$status',
                        customer_name = '$customer_name',
                        customer_contact = '$customer_contact',
                        customer_email = '$customer_email',
                        customer_address = '$customer_address'
                    ";

                    //echo $sql2; die();

                    //Execute the Query
                    $res2 = mysqli_query($conn, $sql2);

                    //Check whether query executed successfully or not
                    if($res2==true)
                    {
                        //Query Executed and Order Saved
                        $_SESSION['order'] = "<div class='success text-center'>Food Ordered Successfully.</div>";
                        header('location:'.HOMEURL);
                    }
                    else
                    {
                        //Failed to Save Order
                        $_SESSION['order'] = "<div class='error text-center'>Failed to Order Food.</div>";
                        header('location:'.HOMEURL);
                    }

                }
            
            ?>


    
    </div>
</section>
<!-- FORM section ENDS here -->
    
<?php include('partials-front/footer.php');?>