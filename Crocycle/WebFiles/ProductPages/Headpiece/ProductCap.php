<?php
session_start();
?>
<!DOCTYPE html>
<html>
<!-- Crocycle -->

<head>
    <title>Crocyle</title>
    <link rel="stylesheet" href="../../../WebFiles/ProductPages/productemp.css">
    <link rel="stylesheet" href="../../../WebFiles/headerfooter.css">

</head>
<!-- import stylesheet mainstyles in head-->

<body>
    <!-- Header Section-->
    <!-- this div class is the navbar -->
    <div class="banner">

        <div class="header">

            <!-- a hrefs lead to #, replace with the actual links-->

            <img class="croLogo" src="../../../Images/Logo/CrocycleLogo.png" height="75px" width="75px"
                class="croLogo"> </img>

            <div class="options">
                <!-- Hyperlinks that transfers you to other pages -->
                <a href="../../../WebFiles/Index.php">
                    <h3>HOME</h3>
                </a>

                <a href="../../../WebFiles/Shop.php">
                    <h3>SHOP</h3>
                </a>

                <a href="../../../WebFiles/About.php">
                    <h3>ABOUT US</h3>
                </a>

                <?php
                // check if user is not logged in
                if (!isset($_SESSION['loggedin'])) {
                  echo "
                <a href='../../../WebFiles/LoginPage.php'>
                  <h3>LOG IN/SIGN UP</h3>
                </a>";
                }else{
                  echo "
                  <a href='../../../WebFiles/acctsDetails.php'>
                    <h3>YOUR ACCOUNT</h3>
                  </a>";
    
                }
                ?>

                <a href="#"><img src="../../../Images/Icons/Basket.png" /> </a>


            </div>

        </div>


    </div>

    <main> <!-- Main Page Body -->
        
        <!-- This Div contains all the elements related to the product info display-->
        <div class="productWrap">
            <div class="productImg">
                <img src="../../../Images/ProductImgs/Headpiece/NewsboyCap.png">
            </div>


            <div class="productDesc">

                <h1>Newsboy Cap</h1>
                <h2> 10.00 AED </h2>

                <div class="sizeSelect">

                    <h2>Sizes</h2>

                    <div class="sizeOptions">


                        <button class="sizeOp">XXS</button>
                        <button class="sizeOp">XS</button>
                        <button class="sizeOp">S</button>
                        <button class="sizeOp">M</button>
                        <button class="sizeOp">L</button>
                        <button class="sizeOp">XL</button>
                        <button class="sizeOp">XXL</button>
                        <button class="sizeOp">3XL</button>
                        <button class="sizeOp">4XL</button>
                        <button class="sizeOp">5XL</button>
                        <button class="sizeOp">6XL</button>

                    </div>

                    <h3>Availability: <span style="color:#F3A60F">In Stock</span></h3>

                </div>

                <div>
                    <h3> Quantity </h3>
                    <div class="quantityWrap">
                        <input type="number" class="quantity" id="quantity" min="1" max="10" value="1" onKeyDown="return false"> <!-- The Number input goes from 1 - 10 and doen't allow for keyboard input-->

                        <div>
                            <button onclick="document.getElementById('quantity').stepUp()">+</button> <!-- Using JS the button will increment the number input value by 1-->
                            <button onclick="document.getElementById('quantity').stepDown()">-</button><!-- Using JS the button will decrement the number input value by 1-->
                        </div>

                        <button class="cartButton">
                           Add to Basket &nbsp; &nbsp; 
                            <img src="../../../Images/Icons/Basket.png" />
                        </button>

                    </div>
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
            <a href="https://www.facebook.com/profile.php?id=100092578235204"><img src="../../../Images/Socials/Facebook.png"></a>
            <a href="https://www.instagram.com/crocycled/"><img src="../../../Images/Socials/Instagram.png"></a>
            <a href="https://www.tiktok.com/@crocyclee?is_from_webapp=1&sender_device=pc"><img src="../../../Images/Socials/TikTok.png" ></a>
        </div>

        <div class="Foot Logo">
            <img src="../../../Images/Logo/CrocycleLogo.png" height="50%" width="50%"></img>
            <p>@Crocycle 2023</p>

        </div>
    </footer>