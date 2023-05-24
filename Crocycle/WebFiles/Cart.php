<?php

include "connection.php";

?>
<!-- This is the html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="../WebFiles/headerfooter.css">
    <link rel="stylesheet" href="Cart.css">


</head>

<body>

    <div class="banner">

        <div class="header">

            <!-- a hrefs lead to #, replace with the actual links-->

            <img src="../Images/Logo/CrocycleLogo.png" height="75px" width="75px" class="croLogo"> </img>

            <div class="options">
                <!-- Hyperlinks that transfers you to other pages -->
                <a href="../index.php">
                    <h3>HOME</h3>
                </a>

                <a href="../WebFiles/Shop.php">
                    <h3>SHOP</h3>
                </a>

                <a href="../WebFiles/About.php">
                    <h3>ABOUT US</h3>
                </a>

                <?php
                // check if user is not logged in
                if (!isset($_SESSION['loggedin'])) {
                    echo "
                    <a href='../WebFiles/LoginPage.php'>
                    <h3>LOG IN/SIGN UP</h3>
                    </a>";
                } else {
                    echo "
                    <a href='../WebFiles/acctsDetails.php'>
                        <h3>YOUR ACCOUNT</h3>
                    </a>";

                }
                ?>

                <a href="#"><img src="../Images/Icons/Basket.png" /> </a>

            </div>

        </div>

        <div class="welcome">
            <!-- div class for the "Welcome to Crocycle" text on the banner-->

            <div>
                <h1>Cart</h1>
            </div>

        </div>



    </div>

    <div class="rcpt">
        <!-- div that contains the checkout forms and items as a whole -->

        <div class="rciptWrap">


            <div class='listHead'>
                <!--<p>
                    Product ID
                </p>-->
                <p>
                    Name
                </p>
                <p>
                    Image
                </p>
                <p>
                    Quantity
                </p>
                <p>
                    Price
                </p>
            </div>

            <div class="bodyWrap">

                <?php

                $Products = "SELECT id, name, price, quantity, img FROM cartitems";

                $result = mysqli_query($conn, $Products);

                $total = 0;

                $loop = 0;

                // var_dump($_SESSION["NewItems"]);
                /*
                While ($loop <= $_SESSION["itemNo"]) {
                $loop++;
                $total = ($total + ($_SESSION["NewItems"][$loop][2] * $_SESSION["NewItems"][$loop][3]));
                //Header first div, Table items below
                
                //<div class='listItem'>
                //<p> " . $row["id"] . "
                //</div>
                if (($loop % 2) == 0) {
                echo "
                <div class='listBody2'>
                <div class='listItem'>
                <p> " . $_SESSION["NewItems"][$loop][0] . "
                </div>
                
                <div class='listItem'>
                <img src='../Images/ProductImgs/" . $_SESSION["NewItems"][$loop][1] . "'/>
                </div>
                
                <div class='listItem'>
                <p> " . $_SESSION["NewItems"][$loop][2] . " Pcs
                </div>
                
                <div class='listItem'>
                <p> " . $_SESSION["NewItems"][$loop][3] . " AED
                </div>
                
                </div>
                ";
                } else {
                echo "
                <div class='listBody'>
                <div class='listItem'>
                <p> " . $row["name"] . "
                </div>
                
                <div class='listItem'>
                <img src='../Images/ProductImgs/" . $row["img"] . "'/>
                </div>
                
                <div class='listItem'>
                <p> " . $row["quantity"] . " Pcs
                </div>
                
                <div class='listItem'>
                <p> " . $row["price"] . " AED
                </div>
                
                </div>
                ";
                }
                
                }
                */
                if (mysqli_num_rows($result) > 0) {
                    $loop = 0;
                    while ($row = $result->fetch_assoc()) {
                        $loop++;

                        $total = ($total + ($row["price"] * $row["quantity"]));

                        //Header first div, Table items below
                
                        //<div class='listItem'>
                        //<p> " . $row["id"] . "
                        //</div>
                        if (($loop % 2) == 0) {
                            echo "
                            <div class='listBody2'>
                                <div class='listItem'>
                                    <p> " . $row["name"] . "
                                </div>
                                
                                <div class='listItem'>
                                    <img src='../Images/ProductImgs/" . $row["img"] . "'/>
                                </div>
                                
                                <div class='listItem'>
                                    <p> " . $row["quantity"] . " Pcs
                                </div>
                                
                                <div class='listItem'>
                                    <p> " . $row["price"] . " AED
                                </div>
                            
                            </div>
                        ";
                        } else {
                            echo "
                            <div class='listBody'>
                                <div class='listItem'>
                                    <p> " . $row["name"] . "
                                </div>
                                
                                <div class='listItem'>
                                    <img src='../Images/ProductImgs/" . $row["img"] . "'/>
                                </div>
                                
                                <div class='listItem'>
                                    <p> " . $row["quantity"] . " Pcs
                                </div>
                                
                                <div class='listItem'>
                                    <p> " . $row["price"] . " AED
                                </div>
                            
                            </div>
                        ";
                        }
                    }
                } else {
                    echo "No Products Found";
                }
                ?>

            </div>
            <div class="TotlWrap">

                <div class="total">
                    <!-- input php action here -->
                    <?php echo "Total Price: <b>" . $total . "</b> AED" ?>

                    <a class="checkout-button" href="Checkout.html"> Checkout </a>

                </div>
            </div>
        </div>
    </div>

    <footer class="bottom">
        <div>
            <h1>CONTACT US</h1>
            <hr>
            <li><a>crocycleinfo@info.ae</a></li>
            <li><a>00000000</a></li>
            <li><a>RAKEZ Academic Zone, Ras Al Khaimah, U.A.E</a></li>
        </div>

        <div>
            <h1>LINKS</h1>
            <hr>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../WebFiles/Shop.php">Shop</a></li>
            <li><a href="../WebFiles/About.php">About</a> </li>
        </div>

        <div>
            <h1>FOLLOW</h1>
            <hr>
            <a href="https://www.facebook.com/profile.php?id=100092578235204"><img
                    src="../Images/Socials/Facebook.png"></a>
            <a href="https://www.instagram.com/crocycled/"><img src="../Images/Socials/Instagram.png"></a>
            <a href="https://www.tiktok.com/@crocyclee?is_from_webapp=1&sender_device=pc"><img
                    src="../Images/Socials/TikTok.png"></a>
        </div>

        <div class="Foot Logo">
            <img src="../Images/Logo/CrocycleLogo.png" height="50%" width="50%"></img>
            <p>@Crocycle 2023</p>

        </div>
    </footer>




</body>

</html>