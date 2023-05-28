<?php
session_start();
// check if user is not logged in
if (!isset($_SESSION['loggedin'])) {
  header('Location: WebFiles/LoginPage.php'); // redirect to login page
  exit;

}
?>

<!DOCTYPE html>
<html>
<!-- Crocycle -->

<head>
  <title>Crocycle</title>
  <link rel="stylesheet" href="WebFiles/headerfooter.css">
  <link rel="stylesheet" href="WebFiles/home.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

</head>
<!-- import stylesheet mainstyles in head-->

<body>
  <!-- Header Section-->
  <!-- this div class is the navbar -->
  <div class="banner">

    <div class="header">

      <!-- a hrefs lead to #, replace with the actual links-->

      <img src="Images/Logo/crocyclelogo.png" height="75px" width="75px" class="croLogo"> </img>

      <div class="options">
        <!-- Hyperlinks that transfers you to other pages -->
        <a href="#">
          <h3>HOME</h3>
        </a>

        <a href="WebFiles/Shop.php">
          <h3>SHOP</h3>
        </a>

        <a href="WebFiles/About.php">
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


        <a href="WebFiles\Cart.php"><img src="../Images/icons/basket.png" /> </a>

      </div>

    </div> 

    <div class="welcome">
      <!-- div class for the "Welcome to Crocycle" text on the banner-->
      <div>
        <h3>WELCOME,
          <?= $_SESSION['name'] ?>, TO
        </h3>
      </div>
      <div>
        <h1>CROCYCLE</h1>
      </div>

    </div>

  </div>

  <!--Slider Section-->
  <div class="slider-section">

    <h1>Our Products</h1>

    <!-- Swiper carousel source: https://www.youtube.com/watch?v=BKKcGb80MOs -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <!-- Swiper Carousel Wrapper-->

        <div class="swiper-slide">
          <!-- Swiper Carousel Slide 1 -->

          <div class="slider-box">
            <!-- Swiper Carousel Item 1 -->
            <div class="slider-img">
              <img src="Images/ProductImgs/Headpiece/beanie.png"> </img>
              <div class="slider-txt">

                <form action="./WebFiles/sendvalue.php" method="POST">
                  <input type="hidden" name="ProductID" value='1'>
                  <button type="submit">VIEW</button>

                </form>
              </div>
            </div>
          </div>

        </div>


        <div class="swiper-slide">
          <!-- Swiper Carousel Slide 2 -->

          <div class="slider-box">
            <!-- Swiper Carousel box -->
            <div class="slider-img">
              <img src="Images/ProductImgs/Headpiece/headwear.png"> </img>
              <div class="slider-txt">

                <form action="./WebFiles/sendvalue.php" method="POST">
                  <input type="hidden" name="ProductID" value='7'>
                  <button type="submit">VIEW</button>

                </form>
              </div>
            </div>
          </div>

        </div>


        <div class="swiper-slide">
          <!-- Swiper Carousel Slide 3 -->

          <div class="slider-box">
            <!-- Swiper Carousel box -->
            <div class="slider-img">
              <img src="Images/ProductImgs/Tops/croshirt.png"> </img>
              <div class="slider-txt">

                <form action="./WebFiles/sendvalue.php" method="POST">
                  <input type="hidden" name="ProductID" value='14'>
                  <button type="submit">VIEW</button>

                </form>
                </a>
              </div>
            </div>
          </div>

        </div>

        <div class="swiper-slide">
          <!-- Swiper Carousel Slide 4 -->

          <div class="slider-box">
            <!-- Swiper Carousel box -->
            <div class="slider-img">
              <img src="Images/ProductImgs/Accessories/ballear.png"> </img>
              <div class="slider-txt">

                <form action="./WebFiles/sendvalue.php" method="POST">
                  <input type="hidden" name="ProductID" value='3'>
                  <button type="submit">VIEW</button>

                </form>
              </div>
            </div>
          </div>

        </div>

        <div class="swiper-slide">
          <!-- Swiper Carousel Slide 5 -->

          <div class="slider-box">
            <!-- Swiper Carousel box -->
            <div class="slider-img">
              <img src="Images/ProductImgs/Headpiece/flowerhat.png"> </img>
              <div class="slider-txt">

                <form action="./WebFiles/sendvalue.php" method="POST">
                  <input type="hidden" name="ProductID" value='6'>
                  <button type="submit">VIEW</button>

                </form>
              </div>
            </div>
          </div>

        </div>

        <div class="swiper-slide">
          <!-- Swiper Carousel Slide 6 -->

          <div class="slider-box">
            <!-- Swiper Carousel box -->
            <div class="slider-img">
              <img src="Images/ProductImgs/Accessories/yarnglove.png"> </img>
              <div class="slider-txt">

                <form action="./WebFiles/sendvalue.php" method="POST">
                  <input type="hidden" name="ProductID" value='5'>
                  <button type="submit">VIEW</button>

                </form>
              </div>
            </div>
          </div>

        </div>

        <div class="swiper-slide">
          <!-- Swiper Carousel Slide 7 -->

          <div class="slider-box">
            <!-- Swiper Carousel box -->
            <div class="slider-img">
              <img src="Images/ProductImgs/Accessories/flowerear.png"> </img>
              <div class="slider-txt">

                <form action="./WebFiles/sendvalue.php" method="POST">
                  <input type="hidden" name="ProductID" value='4'>
                  <button type="submit">VIEW</button>

                </form>
              </div>
            </div>
          </div>

        </div>


        <div class="swiper-slide">
          <!-- Swiper Carousel Slide 8 -->

          <div class="slider-box">
            <!-- Swiper Carousel box -->
            <div class="slider-img">
              <img src="Images/ProductImgs/Headpiece/newsboycap.png"> </img>
              <div class="slider-txt">

                <form action="./WebFiles/sendvalue.php" method="POST">
                  <input type="hidden" name="ProductID" value='8'>
                  <button type="submit">VIEW</button>

                </form>
              </div>
            </div>
          </div>

        </div>



      </div>


    </div>



  </div>
  <!-- Description -->
  <div class="waw">

    <div class="textdiv">
      <!-- Description of who we are and what our business is about -->
      <h1>Who We Are</h1>
      <p>
        In Crocycle, we are a clothing business that aims to upgrade your style while promoting the wellness and health
        of our environment.</p>
      <p>We launched in 2016 and partnered with local waste management programs in the UAE to help create a more
        sustainable business, by converting recyclable materials and repurposing them into products.</p>
      <p>While we sell our own assortment of clothing items and accessories. We aim to help spread the opportunity to
        personally hand-craft items, it is a joy we understand and wish to share to others. </p>
      <p>Our products include hand-made Clothing and Accessories, however we also provide tools to help others build
        their own pieces from Yarn, Hooks, Pins, Needles, Stitch Markers, Scissors, etc. </p>

    </div>

    <div class="imgdiv">

      <img src="Images/stockImages/Handknitting.png"> </img>
    </div>

  </div>

  <!--Clothing Description-->
  <div class="waw">

    <div class="imgdiv2">
      <div class="bigLeft">
        <img src="Images/ProductImgs/Tops/redsweater.png"> </img>
      </div>

      <div class="smallRight">

        <div>
          <img src="Images/ProductImgs/Headpiece/beanie.png"> </img>
        </div>

        <div>
          <img src="Images/ProductImgs/Headpiece/flowerhat.png"> </img>
        </div>

      </div>
    </div>

    <div class="textdiv">
      <!-- Description of our Clothing -->
      <h1>Clothing</h1>
      <p>Our products are made with both quality and sustainability in mind.</p>
      <p>Our partners and Crocycle work together to transform the recyclable materials into an assortment of tools, for
        example plastic into crochet hooks, stitching markers, needles. </p>
      <p>We would like to provide quality tools while also aiding efforts to reuse wastes that still have use, instead
        of leaving them to remain debris. </p>

    </div>

  </div>

  <!-- Accessories Section -->
  <div class="waw">
    <div class="textdiv">
      <!-- Description of our Accessories -->
      <h1>Accessories</h1>
      <p>Headbands, Handbags, Hairpins, etc. items with both utility and style are another category of goods we offer at
        Crocycle.</p>
      <p>Similarly to our clothing, these are made with practical use and comfortable fashion in mind.</p>
      <p>We also provide some other accessories for your animal companions as well (Be fashionable, but remember to also
        keep your pets needs in mind)</p>

    </div>

    <div class="imgdiv2">
      <!-- imgdiv2 class-->
      <div class="bigLeft">
        <!-- class bigLeft for the big image on the left -->
        <img src="Images/ProductImgs/Accessories/yarnglove.png"> </img>
      </div>

      <div class="smallRight">
        <!-- class smallRight for the two small images on the right -->

        <div>
          <img src="Images/ProductImgs/Accessories/ballear.png"> </img>
        </div>

        <div>
          <img src="Images/ProductImgs/Accessories/flowerear.png"> </img>
        </div>

      </div>
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
      <li><a href="WebFiles/index.php">Home</a></li>
      <li><a href="WebFiles/Shop.php">Shop</a></li>
      <li><a href="WebFiles/About.php">About</a> </li>
    </div>

    <div>
      <h1>FOLLOW</h1>
      <hr>
      <a href="https://www.facebook.com/profile.php?id=100092578235204" target="_blank"><img src="Images/Socials/facebook.png"></a>
      <a href="https://www.instagram.com/crocycled/" target="_blank"><img src="Images/Socials/instagram.png"></a>
      <a href="https://www.tiktok.com/@crocyclee?is_from_webapp=1&sender_device=pc" target="_blank"><img
          src="Images/Socials/TikTok.png"></a>
    </div>

    <div class="Foot Logo">
      <img src="Images/Logo/crocyclelogo.png" height="50%" width="50%"></img>
      <p>@Crocycle 2023</p>

    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 10,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 50,
        },
      },
    });
  </script>

</body>

</html>