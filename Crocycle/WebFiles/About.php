<?php
session_start();
?>

<!DOCTYPE html>
<html>
<!-- Crocycle -->

<head>
  <title>About Us</title>
  <link rel="stylesheet" href="about.css">
  <link rel="stylesheet" href="headerfooter.css">

</head>
<!-- import stylesheet mainstyles in head-->

<body>
  <!-- Header Section-->
  <!-- this div class is the navbar -->
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
        <h1>ABOUT US</h1>
      </div>

    </div>

  </div>

  <!--Slider Section-->
  <div class="info">

    <div class="mot">

      <h1>Meet Our Team</h1>

    </div>

  </div>


  <div class="staff">
    <!-- Div class for our staff list  -->

    <div class="staffimg">

      <img src="../Images/ourTeam/Sean.png">

      <h3>Sean Patrick A. Sapitanan</h3>
      <p>CEO</p>

    </div>

    <div class="staffimg">

      <img src="../Images/ourTeam/John.jpg">

      <h3>John Andre Y. <br> Federiso</h3>
      <p>Programmer/Designer</p>

    </div>

    <div class="staffimg">

      <img src="../Images/ourTeam/sjinga.png">

      <h3>Sjinga V. <br> Awal</h3>
      <p>Programmer/Designer</p>

    </div>

    <div class="staffimg">

      <img src="../Images/ourTeam/Sol.png">

      <h3>Sol Andrew R. Domingo</h3>
      <p>Marketing</p>

    </div>

    <div class="staffimg">

      <img src="../Images/ourTeam/Xander.png">

      <h3>Xander <br> Gloria</h3>
      <p>Marketing</p>

    </div>

    <div class="staffimg">

      <img src="../Images/ourTeam/chloe.png">

      <h3>Chloe <br> Patero</h3>
      <p>Marketing</p>

    </div>

    <div class="staffimg">

      <img src="../Images/ourTeam/majed.png">

      <h3>Majed <br> Albloushi</h3>
      <p>Designer</p>

    </div>
  </div>

  </div>
  </div>


  <!-- Description -->
  <div class="banner2">

    <img src="../Images/StockImages/ParallImg.png"> </img>

    <div class="ab">
      <h1>OUR BUSINESS</h1>
    </div>

  </div>

  <!--About Us Description-->
  <div class="waw">



    <div class="textdiv">
      <!-- Description of our business, currently placeholder text -->

      <p>
        In 2016, we launched and partnered with local waste management programs within the UAE, by converting recyclable
        materials and repurposing them into products.
        Our products are made with both quality and sustainability in mind.
        Our partners and Crocycle work together to transform the recyclable materials into an assortment of tools, for
        example plastic into crochet hooks, stitching markers, needles.
        We would like to provide quality tools while also aiding efforts to reuse waste, instead of leaving them to
        remain.

      </p>

      <p>
        We are a team of extremely skilled college students, with experience in coding, web and interface design. Rest
        assured that our products are of high quality and are always delivered on time, courtesy
        of our partnership with Amazon. If ethically-produced crocheted products and practices are what you're after,
        you can find it here at Crocycle
      </p>

    </div>

  </div>


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
      <li><a href="../index.php">Home</a></li>
      <li><a href="../WebFiles/Shop.php">Shop</a></li>
      <li><a href="../WebFiles/About.php">About</a> </li>
    </div>

    <div>
      <h1>FOLLOW</h1>
      <hr>
      <a><img src="../Images/Socials/Facebook.png"></a>
      <a><img src="../Images/Socials/Instagram.png"></a>
      <a><img src="../Images/Socials/TikTok.png"></a>
    </div>

    <div class="Foot Logo">
      <img src="../Images/Logo/CrocycleLogo.png" height="50%" width="50%"></img>
      <p>@Crocycle 2023</p>

    </div>
  </footer>