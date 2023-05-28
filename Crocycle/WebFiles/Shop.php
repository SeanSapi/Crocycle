<?php
session_start();


$_SESSION["IDReq"] = 0;
?>

<!DOCTYPE html>
<html>
<!-- Crocycle -->

<head>
  <title>Products</title>
  <link rel="stylesheet" href="shop.css">
  <link rel="stylesheet" href="headerfooter.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

</head>
<!-- import stylesheet mainstyles in head-->

<body>
  <!-- Header Section-->
  <!-- this div class is the navbar -->
  <div class="banner">

    <div class="header">

      <!-- a hrefs lead to #, replace with the actual links-->

      <img src="../Images/Logo/crocyclelogo640x640.png" height="75px" width="75px" class="croLogo"> </img>

      <div class="options">
        <!-- Hyperlinks that transfers you to other pages -->
        <a href="WebFiles/index.php">
          <h3>HOME</h3>
        </a>

        <a href="#">
          <h3>SHOP</h3>
        </a>

        <a href="WebFiles/About.php">
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

        <a href= "../WebFiles/Cart.php"> <img src ="../Images/icons/basket.png" /> </a>

      </div>

    </div>


    <div class="welcome">
      <!-- div class for the "Welcome to Crocycle" text on the banner-->

      <div>
        <h1>SHOP</h1>
      </div>

    </div>

  </div>

  <div class="sectionsbanner">

    <div class="options2">
      <!-- Hyperlinks that transfers you to SECTIONS OF THE PAGE -->
      <a rel="noopener" href="#tops">
        <h3>TOPS</h3>
      </a>

      <a rel="noopener" href="#headpiece">
        <h3>HEADPIECE</h3>
      </a>

      <a rel="noopener" href="#sweaters">
        <h3>SWEATERS</h3>
      </a>

      <a rel="noopener" href="#accessories">
        <h3>ACCESSORIES</h3>
      </a>

      <a rel="noopener" href="#pet">
        <h3>PET ACCESSORIES</h3>
      </a>

    </div>


  </div>




  <!--Slider Section-->
  <div class="slider-section" id="tops">
    <!--this slider is for tops crochet products-->

    <h1>TOPS</h1>

    <!-- Swiper carousel source: https://www.youtube.com/watch?v=BKKcGb80MOs -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <!-- Swiper Carousel Wrapper-->

        <div class="swiper-slide">
          <!-- Swiper Carousel Slide 1 -->

          <div class="slider-box">
            <!-- Swiper Carousel Item 1 -->
            <div class="slider-img">
              <img src="../Images/ProductImgs/Tops/crochettop.png"> </img>
              <div class="slider-txt">
                <form action="sendvalue.php" method="POST">
                  <input type="hidden" name="ProductID" value='13'>
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
              <img src="../Images/ProductImgs/Tops/croshirt.png"> </img>
              <div class="slider-txt">

                <form action="sendvalue.php" method="POST">
                  <input type="hidden" name="ProductID" value='14'>
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
              <img src="../Images/ProductImgs/Tops/womantop.png"> </img>
              <div class="slider-txt">

                <form action="sendvalue.php" method="POST">
                  <input type="hidden" name="ProductID" value='17'>
                  <button type="submit">VIEW</button>

                </form>
              </div>
            </div>
          </div>

        </div>



      </div>

    </div>

  </div>


  <!--Slider Section-->
  <div class="slider-section" id="headpiece">
    <!--this slider is for headpiece crochet products-->

    <h1>HEADPIECE</h1>

    <!-- Swiper carousel source: https://www.youtube.com/watch?v=BKKcGb80MOs -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <!-- Swiper Carousel Wrapper-->

        <div class="swiper-slide">
          <!-- Swiper Carousel Slide 1 -->

          <div class="slider-box">
            <!-- Swiper Carousel Item 1 -->
            <div class="slider-img">
              <img src="../Images/ProductImgs/Headpiece/beanie.png"> </img>
              <div class="slider-txt">

                <form action="sendvalue.php" method="POST">
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
              <img src="../Images/ProductImgs/Headpiece/flowerhat.png"> </img>
              <div class="slider-txt">

                <form action="sendvalue.php" method="POST">
                  <input type="hidden" name="ProductID" value='6'>
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
              <img src="../Images/ProductImgs/Headpiece/headwear.png"> </img>
              <div class="slider-txt">

                <form action="sendvalue.php" method="POST">
                  <input type="hidden" name="ProductID" value='7'>
                  <button type="submit">VIEW</button>

                </form>
              </div>
            </div>
          </div>

        </div>

        <div class="swiper-slide">
          <!-- Swiper Carousel Slide 4 -->

          <div class="slider-box">
            <!-- Swiper Carousel box -->
            <div class="slider-img">
              <img src="../Images/ProductImgs/Headpiece/newsboycap.png"> </img>
              <div class="slider-txt">

                <form action="sendvalue.php" method="POST">
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


  <!--Slider Section-->
  <div class="slider-section" id="sweaters">
    <!--this slider is for sweaters crochet products-->

    <h1>SWEATERS</h1>

    <!-- Swiper carousel source: https://www.youtube.com/watch?v=BKKcGb80MOs -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <!-- Swiper Carousel Wrapper-->

        <div class="swiper-slide">
          <!-- Swiper Carousel Slide 4 -->

          <div class="slider-box">
            <!-- Swiper Carousel box -->
            <div class="slider-img">
              <img src="../Images/ProductImgs/Tops/redsweater.png"> </img>
              <div class="slider-txt">

                <form action="sendvalue.php" method="POST">
                  <input type="hidden" name="ProductID" value='16'>
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
              <img src="../Images/ProductImgs/Tops/graysweater.png"> </img>
              <div class="slider-txt">

                <form action="sendvalue.php" method="POST">
                  <input type="hidden" name="ProductID" value='15'>
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
              <img src="../Images/ProductImgs/Tops/sweater.png"> </img>
              <div class="slider-txt">

                <form action="sendvalue.php" method="POST">
                  <input type="hidden" name="ProductID" value='18'>
                  <button type="submit">VIEW</button>

                </form>
              </div>
            </div>
          </div>

        </div>








      </div>

    </div>

  </div>


  <!--Slider Section-->
  <div class="slider-section" id="accessories">
    <!--this slider is for tops crochet products-->

    <h1>ACCESSORIES</h1>

    <!-- Swiper carousel source: https://www.youtube.com/watch?v=BKKcGb80MOs -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <!-- Swiper Carousel Wrapper-->

        <div class="swiper-slide">
          <!-- Swiper Carousel Slide 1 -->

          <div class="slider-box">
            <!-- Swiper Carousel Item 1 -->
            <div class="slider-img">
              <img src="../Images/ProductImgs/Accessories/ballear.png"> </img>
              <div class="slider-txt">

                <form action="sendvalue.php" method="POST">
                  <input type="hidden" name="ProductID" value='3'>
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
              <img src="../Images/ProductImgs/Accessories/flowerear.png"> </img>
              <div class="slider-txt">

                <form action="sendvalue.php" method="POST">
                  <input type="hidden" name="ProductID" value='4'>
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
              <img src="../Images/ProductImgs/Accessories/shellear.png"> </img>
              <div class="slider-txt">

                <form action="sendvalue.php" method="POST">
                  <input type="hidden" name="ProductID" value='2'>
                  <button type="submit">VIEW</button>

                </form>
              </div>
            </div>
          </div>

        </div>

        <div class="swiper-slide">
          <!-- Swiper Carousel Slide 4 -->

          <div class="slider-box">
            <!-- Swiper Carousel box -->
            <div class="slider-img">
              <img src="../Images/ProductImgs/Accessories/yarnglove.png"> </img>
              <div class="slider-txt">

                <form action="sendvalue.php" method="POST">
                  <input type="hidden" name="ProductID" value='5'>
                  <button type="submit">VIEW</button>

                </form>
              </div>
            </div>
          </div>

        </div>


      </div>

    </div>

  </div>




  <!--Slider Section-->
  <div class="slider-section" id="pets">
    <!--this slider is for pet accessories crochet products-->

    <h1>PET ACCESSORIES</h1>

    <!-- Swiper carousel source: https://www.youtube.com/watch?v=BKKcGb80MOs -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <!-- Swiper Carousel Wrapper-->

        <div class="swiper-slide">
          <!-- Swiper Carousel Slide 1 -->

          <div class="slider-box">
            <!-- Swiper Carousel Item 1 -->
            <div class="slider-img">
              <img src="../Images/ProductImgs/PetItems/dogcoat.png"> </img>
              <div class="slider-txt">

                <form action="sendvalue.php" method="POST">
                  <input type="hidden" name="ProductID" value='9'>
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
              <img src="../Images/ProductImgs/PetItems/dogcoatblue.png"> </img>
              <div class="slider-txt">

                <form action="sendvalue.php" method="POST">
                  <input type="hidden" name="ProductID" value='10'>
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
              <img src="../Images/ProductImgs/PetItems/dogcoatpink.png"> </img>
              <div class="slider-txt">

                <form action="sendvalue.php" method="POST">
                  <input type="hidden" name="ProductID" value='11'>
                  <button type="submit">VIEW</button>

                </form>
              </div>
            </div>
          </div>

        </div>

        <div class="swiper-slide">
          <!-- Swiper Carousel Slide 4 -->

          <div class="slider-box">
            <!-- Swiper Carousel box -->
            <div class="slider-img">
              <img src="../Images/ProductImgs/PetItems/dogpurplecoat.png"> </img>
              <div class="slider-txt">

                <form action="sendvalue.php" method="POST">
                  <input type="hidden" name="ProductID" value='7'>
                  <button type="submit">VIEW</button>

                </form>
              </div>
            </div>
          </div>

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
      <li><a href="../index.php">Home</a></li>
      <li><a href="../WebFiles/Shop.php">Shop</a></li>
      <li><a href="../WebFiles/About.php">About</a> </li>
    </div>

    <div>
      <h1>FOLLOW</h1>
      <hr>
      <a href="https://www.facebook.com/profile.php?id=100092578235204"><img src="../Images/Socials/facebook.png"></a>
      <a href="https://www.instagram.com/crocycled/"><img src="../Images/Socials/instagram.png"></a>
      <a href="https://www.tiktok.com/@crocyclee?is_from_webapp=1&sender_device=pc"><img
          src="../Images/Socials/TikTok.png"></a>
    </div>

    <div class="Foot Logo">
      <img src="../Images/Logo/crocyclelogo.png" height="50%" width="50%"></img>
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