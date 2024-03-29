<?php

include 'connection.php';
?>

<!DOCTYPE html>
<html>
<!-- Crocycle -->

<head>
    <title>Crocyle</title>
    <link rel="stylesheet" href="../WebFiles/ProductPages/productemp.css">
    <link rel="stylesheet" href="../WebFiles/headerfooter.css">

    <script>
        function SelectedSize(test) {
            //alert(test);
            document.getElementById("Quant").value = test;
        };
    </script>

</head>
<!-- import stylesheet mainstyles in head-->

<body>
    <!-- Header Section-->
    <!-- this div class is the navbar -->
    <div class="banner">

        <div class="header">

            <!-- a hrefs lead to #, replace with the actual links-->

            <img class="croLogo" src="../Images/Logo/crocyclelogo.png" height="75px" width="75px" class="croLogo">
            </img>

            <div class="options">
                <!-- Hyperlinks that transfers you to other pages -->
                <a href="../index.php">
                    <h3>HOME</h3>
                </a>

                <a href="Shop.php">
                    <h3>SHOP</h3>
                </a>

                <a href="About.php">
                    <h3>ABOUT US</h3>
                </a>
                <?php
                // check if user is not logged in
                if (!isset($_SESSION['loggedin'])) {
                    echo "
            <a href='WebFiles/LoginPage.php'>
              <h3>LOG IN/SIGN UP</h3>
            </a>";
                } else {
                    echo "
              <a href='WebFiles/acctsDetails.php'>
                <h3>YOUR ACCOUNT</h3>
              </a>";

                }
                ?>

                <a href="Cart.php"><img src="../Images/icons/basket.png" /> </a>


            </div>

        </div>


    </div>

    <main>
        <!-- Main Page Body -->

        <?php

        $req = $_SESSION["Req"];

        $Products = "SELECT id, name, price, quantity, img FROM cartitems WHERE id = $req";

        $result = mysqli_query($conn, $Products);

        $total = 0;

        $item = $result->fetch_assoc();

        ?>

        <!-- This Div contains all the elements related to the product info display-->

        <div class="productWrap">

            <?php
            echo "<div class='productImg'>
                <img src='../Images/ProductImgs/" . $item["img"] . "'>
            </div>"
                ?>

            <div class="productDesc">
                <?php
                echo "<h1>" . $item["name"] . "</h1>" .
                    "<h2>" . $item["price"] . " AED</h2>"
                    ?>
                <div class="sizeSelect">

                    <h2>Sizes</h2>

                    <div class="sizeOptions">

                        <button onclick="SelectedSize(this.value)" id="XXS" class="sizeOp" name="XXS" value="XXS">XXS</button>
                        <button onclick="SelectedSize(this.value)" id="XS" class="sizeOp" name="XS" value="XS">XS</button>
                        <button onclick="SelectedSize(this.value)" id="S" class="sizeOp" name="S" value="S">S</button>
                        <button onclick="SelectedSize(this.value)" id="M" class="sizeOp" name="M" value="M">M</button>
                        <button onclick="SelectedSize(this.value)" id="L" class="sizeOp" name="L" value="L">L</button>
                        <button onclick="SelectedSize(this.value)" id="XL" class="sizeOp" name="XL" value="XL">XL</button>
                        <button onclick="SelectedSize(this.value)" id="XXL" class="sizeOp" name="XXL" value="XXL">XXL</button>
                        <button onclick="SelectedSize(this.value)" id="3XL" class="sizeOp" name="3XL" value="3XL">3XL</button>
                        <button onclick="SelectedSize(this.value)" id="4XL" class="sizeOp" name="4XL" value="4XL">4XL</button>
                        <button onclick="SelectedSize(this.value)" id="5XL" class="sizeOp" name="5XL" value="5XL">5XL</button>
                        <button onclick="SelectedSize(this.value)" id="6XL" class="sizeOp" name="6XL" value="6XL">6XL</button>

                    </div>
                    <?php
                    if ($item["quantity"] > 0) {
                        echo "
                        <h3>Availability: <span style='color:#F3A60F'>
                        In Stock ( " . $item["quantity"] . " Left)
                        </span></h3>";
                    } else {
                        echo "
                        <h3>Availability: <span style='color:#F3A60F'>
                        Out of Stock(" . $item["quantity"] . " Left)
                        </span></h3>";
                    }
                    ?>
                </div>

                <div>
                    <h3> Quantity </h3>

                    <form class="quantityWrap" action="PurePHP/ProductDB.php" method="post">
                        <input type="number" class="quantity" id="quantity" min="1" max="<?= $item["quantity"] ?>"
                            name="quantity" value="1">
                        <input type="hidden" value="M" name="ItmSize" id="Quant">

                        <!-- The Number input goes from 1 - amount of the quantity left and doen't allow for keyboard input-->

                        <button class="cartButton">
                            Add to Basket &nbsp; &nbsp;
                            <img src="../Images/icons/basket.png" />
                        </button>

                    </form>
                </div>


            </div>



        </div>


    </main>



    <!-- Footer Section -->
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
            <li><a>Home</a></li>
            <li><a>Shop</a></li>
            <li><a>About</a> </li>
        </div>

        <div>
            <h1>FOLLOW</h1>
            <hr>
            <a href="https://www.facebook.com/profile.php?id=100092578235204"><img
                    src="../Images/Socials/facebook.png"></a>
            <a href="https://www.instagram.com/crocycled/"><img src="../Images/Socials/instagram.png"></a>
            <a href="https://www.tiktok.com/@crocyclee?is_from_webapp=1&sender_device=pc"><img
                    src="../Images/Socials/TikTok.png"></a>
        </div>

        <div class="Foot Logo">
            <img src="../Images/Logo/crocyclelogo.png" height="50%" width="50%"></img>
            <p>@Crocycle 2023</p>

        </div>
    </footer>