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
                <a href="../WebFiles/Index.php">
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

        <div class="welcome"> <!-- div class for the "Welcome to Crocycle" text on the banner-->

            <div>
                <h1>Cart</h1>
            </div>

        </div>



    </div>

    <div class="rcpt"> <!-- div that contains the checkout forms and items as a whole -->

        <div class="rciptWrap">
            <?php
            

           $Products = "SELECT name, price, quantity, img FROM cartitems WHERE id = 1";

           $result = $conn -> query($Products);

           if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"]. "- Name: ". $row["name"]. "- Price ". $row["price"];
            }
           }
           else {
            echo "0 results";
           }
            

            if (isset($_POST['id'], $_POST['quantity']) && is_numeric($_POST['id']) && is_numeric($_POST['quantity'])) {

                /*
                for ($i = 0; $i <= 5 ; $i++) {
                    
                }
                    */
            } else {

            }
            ?>

            <form action=""> <!-- input php action here -->
                <table>
                    <thead>
                        <tr>
                            <td>Product</td>
                            <td>Price</td>
                            <td>Quantity</td>
                            <td>Total</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        </tr>
                    </tbody>

                </table>
            </form>
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
            <li><a href="../WebFiles/Index.php">Home</a></li>
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