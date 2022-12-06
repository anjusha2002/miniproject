<?php
include("Assets/Connection/connection.php");

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>fresh</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="Assets/Temp/Main/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="Assets/Temp/Main/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="Assets/Temp/Main/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="Assets/Temp/Main/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="Assets/Temp/Main/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="Assets/Temp/Main/images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="index.html"> Home  </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="Guest/NewShop.php">Shop</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="Guest/Newuser.php">User</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="Guest/Login.php"> Login</a>
                              </li>
                             
                              <li class="nav-item d_none">
                                 <a class="nav-link" href="#productss"><i class="fa fa-search" aria-hidden="true"></i></a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header -->

      <!-- banner -->
      <section class="banner_main">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="test_box">
                     <div class="text-bg">
                        <h1><span> Welcome to</span> <br>Malanad Plantations</h1>
                        <p></p>
                        
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div id="banner1" class="carousel slide banner_Carousel " data-ride="carousel">
                    <!-- <ol class="carousel-indicators">
                        <li data-target="#banner1" data-slide-to="0" class="active"></li>
                        <li data-target="#banner1" data-slide-to="1"></li>
                        <li data-target="#banner1" data-slide-to="2"></li>
                        <li data-target="#banner1" data-slide-to="3"></li>
                     </ol>-->
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption ">
                                 <div class="row">
                                    <div class="col-md-12">
                                       
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-12">
                                       
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="banner_img">
                                        <!--  <figure><img src="Assets/Temp/Main/images/banner_img.png" alt="#"/></figure>-->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="banner_img">
                                          <figure><img src="Assets/Temp/Main/images/banner_img.png" alt="#"/></figure>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!-- about -->
      <div  class="about">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><img src="Assets/Temp/Main/images/about.png" alt="#" /></figure>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>About Us</h2>
                     <p>Malanad has farms in Idukki and Kambam where we cultivate our delicious fruits and products.Our aim is to provide nutritious yet delicious fruit products that are made from the fruits grown in our own plantations,with no artificial ingredient </p>
                     <a class="read_more" href="#">About More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <div id="productss">
      <div class="col-lg-9">
                   
                    <hr>
                    <div class="text-center">
                        <img src="../Asset/Temp/Search/loader.gif" id='loder' width="200" style="display: none"/>
                    </div>
                    <div class="row" id="result">

                    </div>

                </div>

            </div>
                        </div>
      </div>

      <!-- Our Juices -->
      <div class="juices ">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>OUR PRODUCTS</h2>
                     
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="our_main_box">
                     <div class="our_img">
                        <figure><img src="Assets/Temp/Main/images/image3.jpeg" alt="#"/></figure>
                     </div>
                     <div class="our_text"><h4><strong class="yellow"></strong></h4>
                        <h3>Passion Fruit Squash</h3>
                        <p>For the seasons where the fruits are not available, enjoy the sweet and delicious passion fruit squash.</p>
                        <a class="read_more" href="#">Order Now</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
               </div>
               <div class="col-md-4">
                  <div class="our_main_box">
                     <div class="our_img">
                        <figure><img src="Assets/Temp/Main/images/image2.jpeg" alt="#"/></figure>
                     </div>
                     <div class="our_text">
                        <h4><strong class="yellow"></strong></h4>
                        <h3>Pink Guava Crush</h3>
                        <p>Enjoy the pink creamy texture of guava with its nutritional benefits of vitamins, potassium, lycopene, proteins, and fibre with our very delicious Guava Crush!</p>
                        <a class="read_more" href="#">Order Now</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 ">
                  <div class="our_main_box">
                     <div class="our_img">
                        <figure><img src="Assets/Temp/Main/images/image1.jpeg" alt="#"/></figure>
                     </div>
                     <div class="our_text">
                        <h4><strong class="yellow"></strong></h4>
                        <h3>Ball Grape Crush</h3>
                        <p>Refreshing and delicious Grape Crush to enjoy on the sunny days, with real grape balls for that extra flavour!</p>
                        <a class="read_more" href="#">Order Now</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 margin_top">
                  <div class="our_main_box">
                     <div class="our_img">
                        <figure><img src="Assets/Temp/Main/images/image4.jpeg" alt="#"/></figure>
                     </div>
                     <div class="our_text">
                        <h4><strong class="yellow"></strong></h4>
                        <h3>Mango Crush</h3>
                        <p>The authentic mango king of all fruits, bottled into golden yellow mango crush is the perfect choice to enjoy the fun of summer.</p>
                        <a class="read_more" href="#">Order Now</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="our_main_box">
                     <div class="our_img">
                        <figure><img src="Assets/Temp/Main/images/image5.jpeg" alt="#"/></figure>
                     </div>
                     <div class="our_text">
                        <h4><strong class="yellow"></strong></h4>
                        <h3>Pinepple Crush</h3>
                        <p>The pineapple tartness bottled as crushes gives your taste buds a sweet and tangy experience, by bringing the authentic tropical flavour to your tables.</p>
                        <a class="read_more" href="#">Order Now</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Our Juices  section -->
      
      <!-- testimonial -->
      <div class="testimonial">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>OUR STORY</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide testimonial_Carousel " data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption ">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="test_box">
                                          <i><img src="Assets/Temp/Main/images/image6.jpeg" alt="#"/></i>
                                          
                                          <p>Malanad Plantations is located in Puttady, a small plantation town in the high ranges of Idukki. The place is blessed with a salubrious climate that supports the healthy growth of Brazilian tropical fruit Salubrious edulis (commonly known as Passion fruit), Ball grapes, Pink Guavas, and many other delicious yet nutritious fruits.

Every Malanad Plantation products are made from the pulps of the fruits that grew in our farms and are rich in antioxidants, vitamins, and fibres, and absolutely delicious. Every product is 100 percent natural with zero artificial ingredients. We practice sustainable organic production methods in our farms and ensure to provide the best farm-to-folk services.  </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="test_box">
                                          <i><img src="Assets/Temp/Main/images/image6.jpeg" alt="#"/></i>
                                          <b><h5>OUR PHILOSOPHY</h5></b>
                                          <p>Right from the green haven in Kambam, we bring to you flavours that gives you pure bliss the moment you taste it. We believe in giving you only the best of the best. We make crushes and pulps in a variety of flavours like passion fruit, pink guava, pineapple, grape and naruneendi. What can you do with them? Well, for starters, open the bottle and take in the absolutely blissful aroma of each and let us know when you’re done with it. We’re pretty sure you’ll just do this for some good amount of time because that’s how pure and authentic our flavours are. Once you bring yourself out of this, go and whip everything your heart desires, from juices, milkshakes, desserts, cakes to even mocktails and cocktails!  </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="test_box">
                                          <i><img src="Assets/Temp/Main/images/family.jpeg" alt="#"/></i>
                                          <h4>MEET THE  FAMILY</h4>
                                          
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end testimonial -->
 
      <!--  footer -->
      <footer id="contact">
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="titlepage">
                        <h2>Contact Us</h2>
                     </div>
                  </div>
                  <div class="col-md-10 offset-md-1">
                     <form id="request" class="main_form">
                        <div class="row">
                           <div class="col-md-12 ">
                              <input class="contactus" placeholder="Full Name" type="type" name="Full Name"> 
                           </div>
                           <div class="col-md-7">
                              <input class="contactus" placeholder="Email" type="type" name="Email"> 
                           </div>
                           <div class="col-md-7">
                              <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">                          
                           </div>
                           <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                              <ul class="social_icon">
                                 <h3>Follow Me</h3>
                                 <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                              </ul>
                           </div>
                           
                     </form>
                  </div>
                  <div class="col-md-10 offset-md-1">
                     
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>Copyright 2019 All Right Reserved By <a href="https://html.design/"> Free  html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="Assets/Temp/Main/js/jquery.min.js"></script>
      <script src="Assets/Temp/Main/js/popper.min.js"></script>
      <script src="Assets/Temp/Main/js/bootstrap.bundle.min.js"></script>
      <script src="Assets/Temp/Main/js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="Assets/Temp/Main/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="Assets/Temp/Main/js/custom.js"></script>
   </body>
</html>

