<?php
session_start();
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
           <a href="../WebFiles/"><h3>HOME</h3></a>

           <a href="#"><h3>SHOP</h3></a>

           <a href="../WebFiles/About.html"><h3>ABOUT US</h3></a>
           
           
        <?php
            // check if user is not logged in
            if (!isset($_SESSION['loggedin'])) {
	          echo "
            <a href='../WebFiles/LoginPage.php'>
              <h3>LOG IN/SIGN UP</h3>
            </a>";
            }else{
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
             <h1>SHOP</h1>
            </div>
  
          </div>

       </div>

        <div class="sectionsbanner">

           <div class="options2">
              <!-- Hyperlinks that transfers you to SECTIONS OF THE PAGE -->
              <a rel="noopener" href="#tops"><h3>TOPS</h3></a>
    
              <a rel="noopener" href="#headpiece"><h3>HEADPIECE</h3></a>
    
              <a rel="noopener" href="#sweaters"><h3>SWEATERS</h3></a>
    
              <a rel="noopener" href="#accessories"><h3>ACCESSORIES</h3></a>
    
              <a rel="noopener" href="#pet"><h3>PET ACCESSORIES</h3></a>
    
            </div>

            
        </div>


      

      <!--Slider Section-->
      <div class="slider-section" id="tops"> <!--this slider is for tops crochet products-->

        <h1>TOPS</h1>
        
          <!-- Swiper carousel source: https://www.youtube.com/watch?v=BKKcGb80MOs -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper"> <!-- Swiper Carousel Wrapper-->

                  <div class="swiper-slide"> <!-- Swiper Carousel Slide 1 -->
                        
                       <div class="slider-box"> <!-- Swiper Carousel Item 1 -->
                        <div class="slider-img"> 
                          <img src="../Images/ProductImgs/Tops/CrochetTop.png"> </img>
                           <div class="slider-txt"> 
                              <a href="../WebFiles/ProductPages/Tops/ProductCrochetTop.html">VIEW</a>
                           </div>
                        </div>
                       </div> 

                  </div>

                   
                  <div class="swiper-slide"> <!-- Swiper Carousel Slide 2 -->
                        
                    <div class="slider-box"> <!-- Swiper Carousel box -->
                     <div class="slider-img"> 
                       <img src="../Images/ProductImgs/Tops/Croshirt.png"> </img>
                        <div class="slider-txt"> 
                          <a href="../WebFiles/ProductPages/Tops/ProductCroshirt.html">VIEW</a>
                        </div>
                     </div>
                    </div> 

                  </div>

                
                 

                 


                  <div class="swiper-slide"> <!-- Swiper Carousel Slide 6 -->
                        
                    <div class="slider-box"> <!-- Swiper Carousel box -->
                     <div class="slider-img"> 
                       <img src="../Images/ProductImgs/Tops/WomanTop.png"> </img>
                        <div class="slider-txt"> 
                         <a href="../WebFiles/ProductPages/Tops/ProductWomanTop.html">VIEW</a>
                        </div>
                     </div> 
                    </div> 

                  </div>


          
            </div>

        </div>

      </div>


      <!--Slider Section-->
      <div class="slider-section" id="headpiece"> <!--this slider is for headpiece crochet products-->

        <h1>HEADPIECE</h1>
        
          <!-- Swiper carousel source: https://www.youtube.com/watch?v=BKKcGb80MOs -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper"> <!-- Swiper Carousel Wrapper-->

                  <div class="swiper-slide"> <!-- Swiper Carousel Slide 1 -->
                        
                       <div class="slider-box"> <!-- Swiper Carousel Item 1 -->
                        <div class="slider-img"> 
                          <img src="../Images/ProductImgs/Headpiece/Beanie.png"> </img>
                           <div class="slider-txt"> 
                              <a href="../WebFiles/ProductPages/Headpiece/ProductBeanie.html">VIEW</a>
                           </div>
                        </div>
                       </div> 

                  </div>

                   
                  <div class="swiper-slide"> <!-- Swiper Carousel Slide 2 -->
                        
                    <div class="slider-box"> <!-- Swiper Carousel box -->
                     <div class="slider-img"> 
                       <img src="../Images/ProductImgs/Headpiece/FlowerHat.png"> </img>
                        <div class="slider-txt"> 
                          <a href="../WebFiles/ProductPages/Headpiece/ProductFlowerHat.html">VIEW</a>
                        </div>
                     </div>
                    </div> 

                  </div>

                
                  <div class="swiper-slide"> <!-- Swiper Carousel Slide 3 -->
                        
                    <div class="slider-box"> <!-- Swiper Carousel box -->
                     <div class="slider-img"> 
                       <img src="../Images/ProductImgs/Headpiece/Headwear.png"> </img>
                        <div class="slider-txt"> 
                         <a href="../WebFiles/ProductPages/Headpiece/ProductHeadwear.html">VIEW</a>
                        </div>
                     </div>
                    </div> 

                  </div>

                  <div class="swiper-slide"> <!-- Swiper Carousel Slide 4 -->
                        
                    <div class="slider-box"> <!-- Swiper Carousel box -->
                     <div class="slider-img"> 
                       <img src="../Images/ProductImgs/Headpiece/NewsboyCap.png"> </img>
                        <div class="slider-txt"> 
                         <a href="Crocycle/WebFiles/ProductPages/Headpiece/ProductCap.html">VIEW</a>
                        </div>
                     </div>
                    </div> 

                  </div>

            </div>

        </div>

      </div>


      <!--Slider Section-->
      <div class="slider-section" id="sweaters"> <!--this slider is for sweaters crochet products-->

        <h1>SWEATERS</h1>
        
          <!-- Swiper carousel source: https://www.youtube.com/watch?v=BKKcGb80MOs -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper"> <!-- Swiper Carousel Wrapper-->

              <div class="swiper-slide"> <!-- Swiper Carousel Slide 4 -->
                        
                <div class="slider-box"> <!-- Swiper Carousel box -->
                 <div class="slider-img"> 
                   <img src="../Images/ProductImgs/Tops/RedSweater.png"> </img>
                    <div class="slider-txt"> 
                     <a href="../WebFiles/ProductPages/Tops/ProductRedSweater.html">VIEW</a>
                    </div>
                 </div>
                </div> 

              </div>


              <div class="swiper-slide"> <!-- Swiper Carousel Slide 3 -->
                        
                <div class="slider-box"> <!-- Swiper Carousel box -->
                 <div class="slider-img"> 
                   <img src="../Images/ProductImgs/Tops/GraySweater.png"> </img>
                    <div class="slider-txt"> 
                     <a href="../WebFiles/ProductPages/Tops/ProductGraySweater.html">VIEW</a>
                    </div>
                 </div>
                </div> 

              </div>


              <div class="swiper-slide"> <!-- Swiper Carousel Slide 3 -->
                        
                <div class="slider-box"> <!-- Swiper Carousel box -->
                 <div class="slider-img"> 
                   <img src="../Images/ProductImgs/Tops/Sweater.png"> </img>
                    <div class="slider-txt"> 
                     <a href="../WebFiles/ProductPages/Tops/ProductSweater.html">VIEW</a>
                    </div>
                 </div>
                </div> 

              </div>


              
                   
                  


          
            </div>

        </div>

      </div>


      <!--Slider Section-->
      <div class="slider-section" id="accessories"> <!--this slider is for tops crochet products-->

        <h1>ACCESSORIES</h1>
        
          <!-- Swiper carousel source: https://www.youtube.com/watch?v=BKKcGb80MOs -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper"> <!-- Swiper Carousel Wrapper-->

                  <div class="swiper-slide"> <!-- Swiper Carousel Slide 1 -->
                        
                       <div class="slider-box"> <!-- Swiper Carousel Item 1 -->
                        <div class="slider-img"> 
                          <img src="../Images/ProductImgs/Accessories/BallEar.png"> </img>
                           <div class="slider-txt"> 
                              <a href="../WebFiles/ProductPages/Accessories/ProductBallEar.html">VIEW</a>
                           </div>
                        </div>
                       </div> 

                  </div>

                   
                  <div class="swiper-slide"> <!-- Swiper Carousel Slide 2 -->
                        
                    <div class="slider-box"> <!-- Swiper Carousel box -->
                     <div class="slider-img"> 
                       <img src="../Images/ProductImgs/Accessories/FlowerEar.png"> </img>
                        <div class="slider-txt"> 
                          <a href="../WebFiles/ProductPages/Accessories/ProductFlowerEar.html">VIEW</a>
                        </div>
                     </div>
                    </div> 

                  </div>

                
                  <div class="swiper-slide"> <!-- Swiper Carousel Slide 3 -->
                        
                    <div class="slider-box"> <!-- Swiper Carousel box -->
                     <div class="slider-img"> 
                       <img src="../Images/ProductImgs/Accessories/ShellEar.png"> </img>
                        <div class="slider-txt"> 
                         <a href="../WebFiles/ProductPages/Accessories/ProductShellEar.html">VIEW</a>
                        </div>
                     </div>
                    </div> 

                  </div>

                  <div class="swiper-slide"> <!-- Swiper Carousel Slide 4 -->
                        
                    <div class="slider-box"> <!-- Swiper Carousel box -->
                     <div class="slider-img"> 
                       <img src="../Images/ProductImgs/Accessories/YarnGlove.png"> </img>
                        <div class="slider-txt"> 
                         <a href="../WebFiles/ProductPages/Accessories/ProductYarnGlove.html">VIEW</a>
                        </div>
                     </div>
                    </div> 

                  </div>

          
            </div>

        </div>

      </div>




      <!--Slider Section-->
      <div class="slider-section" id="pets"> <!--this slider is for pet accessories crochet products-->

        <h1>PET ACCESSORIES</h1>
        
          <!-- Swiper carousel source: https://www.youtube.com/watch?v=BKKcGb80MOs -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper"> <!-- Swiper Carousel Wrapper-->

                  <div class="swiper-slide"> <!-- Swiper Carousel Slide 1 -->
                        
                       <div class="slider-box"> <!-- Swiper Carousel Item 1 -->
                        <div class="slider-img"> 
                          <img src="../Images/ProductImgs/PetItems/DogCoat.png"> </img>
                           <div class="slider-txt"> 
                              <a href="../WebFiles/ProductPages/PetItems/ProductDogCoat.html">VIEW</a>
                           </div>
                        </div>
                       </div> 

                  </div>

                   
                  <div class="swiper-slide"> <!-- Swiper Carousel Slide 2 -->
                        
                    <div class="slider-box"> <!-- Swiper Carousel box -->
                     <div class="slider-img"> 
                       <img src="../Images/ProductImgs/PetItems/DogCoatBlue.png"> </img>
                        <div class="slider-txt"> 
                          <a href="../WebFiles/ProductPages/PetItems/ProductDogCoatBlue.html">VIEW</a>
                        </div>
                     </div>
                    </div> 

                  </div>

                
                  <div class="swiper-slide"> <!-- Swiper Carousel Slide 3 -->
                        
                    <div class="slider-box"> <!-- Swiper Carousel box -->
                     <div class="slider-img"> 
                       <img src="../Images/ProductImgs/PetItems/DogCoatPink.png"> </img>
                        <div class="slider-txt"> 
                         <a href="../WebFiles/ProductPages/PetItems/ProductDogCoatPink.html">VIEW</a>
                        </div>
                     </div>
                    </div> 

                  </div>

                  <div class="swiper-slide"> <!-- Swiper Carousel Slide 4 -->
                        
                    <div class="slider-box"> <!-- Swiper Carousel box -->
                     <div class="slider-img"> 
                       <img src="../Images/ProductImgs/PetItems/DogPurpleCoat.png"> </img>
                        <div class="slider-txt"> 
                         <a href="../Crocycle/WebFiles/ProductPages/PetItems/ProductDogPurpleCoat.html">VIEW</a>
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
            <li><a>Home</a></li>
            <li><a>Shop</a></li>
            <li><a>About</a> </li>  
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
