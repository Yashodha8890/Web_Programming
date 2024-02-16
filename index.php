<?php include 'header.php'?>

<!--Hero section starts-->
<section id="home">
<div id="heroSlider" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item text-center bg-cover vh-100 active slide-1">
      <div class="container h-100 d-flex align-items-center justify-content-center">
          <div class="row justify-content-center">
              <div class="col-lg-8">
                  <h1 class="text-white frontpage-h1">Asian Delight Restaurant</h1>
                  <h3 class="text-white">Our ambiance captures the beauty and tranquility of Asia. Immerse yourself in an atmosphere that reflects the rich cultural tapestry of Asia, blending modern elegance with traditional charm. Enjoy your meal surrounded by the grace and elegance of the Far East.</h6>
                  <a href="#menu" class="btn btn-brand ">Explore Menu</a>
              </div>
          </div>
      </div>
    </div>
    <div class="carousel-item text-center bg-cover vh-100 slide-2">
      <div class="container h-100 d-flex align-items-center justify-content-center ">
          <div class="row justify-content-center">
              <div class="col-lg-8">
                  <h2 class="hero-h2">Our Sri Lankan taste</h2>
                  <h4 class="hero-h4">Embark on a culinary adventure in Sri Lanka, where every bite tells a story of vibrant flavors and exotic spices.</h4>
                  <a href="#menu" class="btn btn-brand">Explore Menu</a>
              </div>
          </div>
      </div>
    </div>
    <div class="carousel-item text-center bg-cover vh-100 slide-3">
      <div class="container h-100 d-flex align-items-center justify-content-center ">
          <div class="row justify-content-center">
              <div class="col-lg-8">
                  <h2 class="hero-h2">Our Indian taste</h2>
                  <h4 class="hero-h4">Indian cuisine, a symphony of flavors from north to south, weaves a rich tapestry of tradition and innovation.</h4>
                  <a href="#menu" class="btn btn-brand">Explore Menu</a>
              </div>
          </div>
      </div>
    </div>
    <div class="carousel-item text-center bg-cover vh-100 slide-4">
      <div class="container h-100 d-flex align-items-center justify-content-center ">
          <div class="row justify-content-center">
              <div class="col-lg-8">
                  <h3 class="hero-h2">Our Malaysian taste</h3>
                  <h4 class="hero-h4">Step into the enchanting world of Malaysian cuisine, a canvas painted with a diverse palette of flavors and cultural influences.</h4>
                  <a href="#menu" class="btn btn-brand">Explore Menu</a>
              </div>
          </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>
<!--Hero section ends-->

<!--About section starts-->
<section id="about" class="about-bg">
  <h1 class="text-center">About</h1>
  <div class="container">

      <div class="row">
          <div class="col-sm-4">
              <div class="about-image">
                  <img class="img-fluid aboutImage" alt="" src="images/about/about.jpg">
              </div>
                              
          </div>

          <div class="col-sm-4">
              <div class="about-content">
                  <div class="row text-center">
                      <p>We are offering delicious Asian food experiences all over the Finland to Asian customers as well as people who love to taste Asian food,since  2018. The food has a variety of textures which helps to satisfy the taste buds as this is best combination of salty, sour, sweet and spicy flavours.Our restaurant provides ideal service for any occasion with a reasonable price and friendly service as we prioritize your satisfaction. Our mission is to be the best Asian food restaurant in Finland.</p>
                      <h3 >Welcome to Asian Delight Restaurant !!!</h4>
                  </div>
                  <div class="row">
                      <div class="col-sm-4">
                          <p class="followUs">Follow us on :</p>
                      </div>
                      <div class="col-sm-2">
                          <img class="followUsIcon align-items-center" alt="fb" src="images/about/facebook.png">
                      </div>
                      <div class="col-sm-2">
                          <img class="followUsIcon" alt="Instagram" src="images/about/instagram.png">
                      </div>
                      <div class="col-sm-2">
                          <img class="followUsIcon" src="images/about/linkedin.png">
                      </div>
                      <div class="col-sm-2">
                          <img class="followUsIcon" src="images/about/twitter.png">
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-sm-2 text-center">
              <img class="managementImage" src="images/about/male.png">
              <p class="text-center">Edward Angelo,<br>
              Restaurant and Food Manager
              </p>
          </div>
          <div class="col-sm-2 text-center">
                  <img class="managementImage" src="images/about/female.png">
                  <p class="text-center">Mia Jawid(CEO)                        
                  </p>
          </div>
          </div>
      </div>  
  </div>

</section>
<!--About section ends-->

<!--Menu section starts-->
<section id="menu" class="bg-light">
  <div class="container">
      <div class="row">
          <div class="col-12 intro-text">
              <h1>Menu</h1>
              <p>Dive into a world of bold flavors, aromatic spices, and culinary finesse. Our menu is a treasure trove of Asian delights waiting to be explored.</p>
          </div>
      </div>
  </div>

  <!--Nav and tab-->
  <div class="container">
      <ul class="nav nav-pills mb-4 justify-content-center" id="pills-tab" role="tablist">

          <li class="nav-item" role="presentation">
            <button class="nav-link nav-link-menu active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" name="allMenu" aria-selected="true">All</button>
          </li>

          <li class="nav-item" role="presentation">
              <button class="nav-link nav-link-menu" id="pills-Sri-Lankan-tab" data-bs-toggle="pill" data-bs-target="#pills-Sri-Lankan" type="button" role="tab" aria-controls="pills-Sri-Lankan" name="sriLankanMenu" aria-selected="true">Sri Lankan</button>
            </li>

          <li class="nav-item" role="presentation">
              <button class="nav-link nav-link-menu" id="pills-Indian-tab" data-bs-toggle="pill" data-bs-target="#pills-Indian" type="button" role="tab" aria-controls="pills-Indian" aria-selected="true">Indian</button>
          </li>

          <li class="nav-item" role="presentation">
              <button class="nav-link nav-link-menu" id="pills-Malaysian-tab" data-bs-toggle="pill" data-bs-target="#pills-Malaysian" type="button" role="tab" aria-controls="pills-Malaysian" aria-selected="true">Malaysian</button>
          </li>

          <li class="nav-item" role="presentation">
              <button class="nav-link nav-link-menu" id="pills-Snacks-tab" data-bs-toggle="pill" data-bs-target="#pills-Snacks" type="button" role="tab" aria-controls="pills-Snacks" aria-selected="true">Snacks</button>
          </li> 
          <!-- <div class="cart-icon"> -->
        <!-- <i class= "fa-solid fa-cart-shopping"> -->
        <span>0</span>
      <!-- </div>   -->
                  
      </ul>
      <!--Nav and tab end-->

      <!--All menu tab starts-->


<?php

    include 'config/db.php';
?>

<div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
              <div class="row gy-4">
                  <!-- <div class="col-lg-3 col-sm-6"> -->
                      <!--<div class="menu-item bg-white shadow-on-hover">
                          <a href="#menu" class="image-button"> -->
<!-- <div class="container-fluid">
<div class="col-md-12">
  <div class="row"> -->
      <div class="col-md-12">
          <div class="row gy-4">                     
              <?php
                  
                  $query= "SELECT * FROM food_items";
                  $result= mysqli_query($conn,$query);

                  while($row = mysqli_fetch_array($result))
                  { 
              ?>
                      <div class="col-md-3">                            
                          <form method ="get" action="index.php?id=<?=$row['itemId']; ?>">
                              <img class="menu-all-image image-button" src="images/menu/all/<?= $row['image']; ?>">
                              <h2><b><?=$row['itemName']; ?></b></h2>
                              <p class="normal"><?=$row['itemDescription']; ?></p>
                              <h3 style="color:red;"><?=number_format($row['unitPrice'],2); ?> €</h3>
                              <!-- <i class="fa-solid fa-plus add-to-cart"</i> -->
                              <input type="submit" class="btn btn-warning" name="addToCart" value="Order Now">
                              <br><br>
                          </form>
                      </div>
              <?php 
                  }
              
              ?>
          </div>   
      </div>
  </div>
</div>
</div>

<!-- cart sidebar section -->
<!-- <div class="sidebar" id="sidebar">
<div class="sidebar-close">
  <i class ="fa-solid fa-close"></i>
  <div class="cart-menu">
      <h3>My Basket</h3>
      <div class="cart-items">test 1</div>
  </div>
  <div class="sidebar--footer">
      <div class="total--amount">
          <h5>Total</h5>
          <div class="cart-total">0.00 €</div>
      </div>
      <button class="checkout-btn">Check Out</button>
  </div>
</div>

</div>
 -->

      <!--Sri Lankan tab starts-->
          <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show " id="pills-Sri-Lankan" role="tabpanel" aria-labelledby="pills-Sri-Lankan-tab" tabindex="0">
                  <div class="row gy-4">
                      <div class="col-lg-3 col-sm-6">
                          <div class="menu-item bg-white shadow-on-hover">
                              <a href="#menu" class="image-button">
                              <img class="menu-all-image" src="images/menu/sri_lankan/rice_and curry.jpeg" alt="">
                              </a>
                              <div class="menu-item-content p-4">
                                  <div>
                                      <span>Rated(4.5)</span>
                                      <span class="stars">
                                          <i class="ri-star-fill"></i>
                                          <i class="ri-star-fill"></i>
                                          <i class="ri-star-fill"></i>
                                          <i class="ri-star-fill"></i>
                                          <i class="ri-star-half-fill"></i>
                                      </span>  
                                  </div>
                                  <h5 class="my-2"><a href="#"> Sri Lankan Rice & Curry</a></h5>
                                  <p class="small">Rice, 3 Vegetables, Meat(Chicken/Pork/Beef)/Egg/Vegan</p>
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-3 col-sm-6">
                          <div class="menu-item bg-white shadow-on-hover">
                              <a href="#menu" class="image-button">
                              <img class="menu-all-image" src="images/menu/sri_lankan/indiappa.jpeg" alt="">
                              </a>
                              <div class="menu-item-content p-4">
                                  <div>
                                      <span>Rated(4.5)</span>
                                      <span class="stars">
                                          <i class="ri-star-fill"></i>
                                          <i class="ri-star-fill"></i>
                                          <i class="ri-star-fill"></i>
                                          <i class="ri-star-fill"></i>
                                          <i class="ri-star-half-fill"></i>
                                      </span>  
                                  </div>
                                  <h5 class="my-2"><a href="#"> Indi Appa(String hoppers) & curry</a></h5>
                                  <p class="small">String hoppers and curries(Dhall/Chicken/Pol Sambal/Egg)</p>
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-3 col-sm-6">
                          <div class="menu-item bg-white shadow-on-hover">
                              <a href="#menu" class="image-button">
                              <img class="menu-all-image" src="images/menu/sri_lankan/kiribath.jpeg" alt="">
                              </a>
                              <div class="menu-item-content p-4">
                                  <div>
                                      <span>Rated(4.5)</span>
                                      <span class="stars">
                                          <i class="ri-star-fill"></i>
                                          <i class="ri-star-fill"></i>
                                          <i class="ri-star-fill"></i>
                                          <i class="ri-star-fill"></i>
                                          <i class="ri-star-half-fill"></i>
                                      </span>  
                                  </div>
                                  <h5 class="my-2"><a href="#">Kiri bath & Lunu Miris</a></h5>
                                  <p class="small">Kiri bath(Milk Rice) and Onion sambal</p>
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-3 col-sm-6">
                          <div class="menu-item bg-white shadow-on-hover">
                              <a href="#menu" class="image-button">
                              <img class="menu-all-image" src="images/menu/sri_lankan/fried_rice.jpeg" alt="">
                              </a>
                              <div class="menu-item-content p-4">
                                  <div>
                                      <span>Rated(4.0)</span>
                                      <span class="stars">
                                          <i class="ri-star-fill"></i>
                                          <i class="ri-star-fill"></i>
                                          <i class="ri-star-fill"></i>
                                          <i class="ri-star-half-fill"></i>
                                          <i class="ri-star-half-fill"></i>
                                      </span>  
                                  </div>
                                  <h5 class="my-2"><a href="#"> Sri Lankan Fride rice</a></h5>
                                  <p class="small">Vegetable/Chicken/Egg Fried rice & Chilli paste</p>
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-3 col-sm-6">
                          <div class="menu-item bg-white shadow-on-hover">
                              <a href="#menu" class="image-button">
                              <img class="menu-all-image" src="images/menu/sri_lankan/yellow_rice.jpeg" alt="">
                              </a>
                              <div class="menu-item-content p-4">
                                  <div>
                                      <span>Rated(4.5)</span>
                                      <span class="stars">
                                          <i class="ri-star-fill"></i>
                                          <i class="ri-star-fill"></i>
                                          <i class="ri-star-fill"></i>
                                          <i class="ri-star-fill"></i>
                                          <i class="ri-star-half-fill"></i>
                                      </span>  
                                  </div>
                                  <h5 class="my-2"><a href="#">Sri Lankan Yellow Rice</a></h5>
                                  <p class="small">Yellow Rice, Batu moju(Brinjol pickle), Meat(Chicken/Pork/Beef)/Egg, Salad, Potato curry</p>
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-3 col-sm-6">
                          <div class="menu-item bg-white shadow-on-hover">
                              <a href="#menu" class="image-button">
                              <img class="menu-all-image" src="images/menu/sri_lankan/pol_roti.jpeg" alt="">
                              </a>
                              <div class="menu-item-content p-4">
                                  <div>
                                      <span>Rated(4.5)</span>
                                      <span class="stars">
                                          <i class="ri-star-fill"></i>
                                          <i class="ri-star-fill"></i>
                                          <i class="ri-star-fill"></i>
                                          <i class="ri-star-fill"></i>
                                          <i class="ri-star-half-fill"></i>
                                      </span>  
                                  </div>
                                  <h5 class="my-2"><a href="#"> Sri Lankan Pol roti & Lunu miris</a></h5>
                                  <p class="small">Pol roti and lunu miris(onion sambal)</p>
                              </div>
                          </div>
                      </div> 

                      <div class="col-lg-3 col-sm-6">
                          <div class="menu-item bg-white shadow-on-hover">
                              <a href="#menu" class="image-button">
                              <img class="menu-all-image" src="images/menu/sri_lankan/kottu.jpeg" alt="">
                              </a>
                              <div class="menu-item-content p-4">
                                  <div>
                                      <span>Rated(4.5)</span>
                                      <span class="stars">
                                          <i class="ri-star-fill"></i>
                                          <i class="ri-star-fill"></i>
                                          <i class="ri-star-fill"></i>
                                          <i class="ri-star-fill"></i>
                                          <i class="ri-star-half-fill"></i>
                                      </span>  
                                  </div>
                                  <h5 class="my-2"><a href="#"> Sri Lankan Kottu</a></h5>
                                  <p class="small">Kottu (Chicken/Egg/Vegetable/Beef) with Gravy and Chilli Paste</p>
                              </div>
                          </div>
                      </div>

                  </div>
              </div>  

          </div>
      <!--Sri Lankan menu tab ends-->

      <!--Indian menu tab starts-->
      <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show " id="pills-Indian" role="tabpanel" aria-labelledby="pills-Indian-tab" tabindex="0">
              <div class="row gy-4">
                  <div class="col-lg-3 col-sm-6">
                      <div class="menu-item bg-white shadow-on-hover">
                          <a href="#menu" class="image-button">
                          <img class="menu-all-image" src="images/menu/indian/chapathi.jpeg" alt="">
                          </a>
                          <div class="menu-item-content p-4">
                              <div>
                                  <span>Rated(4.5)</span>
                                  <span class="stars">
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-half-fill"></i>
                                  </span>  
                              </div>
                              <h5 class="my-2"><a href="#">Inidan Chapathi</a></h5>
                              <p class="small">Chapathi potion(02) with curry(Chicken/Pork/Beef)/Egg/Vegan</p>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                      <div class="menu-item bg-white shadow-on-hover">
                          <a href="#menu" class="image-button">
                          <img class="menu-all-image" src="images/menu/indian/chapathi_rice_meal.jpeg" alt="">
                          </a>
                          <div class="menu-item-content p-4">
                              <div>
                                  <span>Rated(4.5)</span>
                                  <span class="stars">
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-half-fill"></i>
                                  </span>  
                              </div>
                              <h5 class="my-2"><a href="#">Chapathi potion(02) with rice and curry</a></h5>
                              <p class="small">Chapathi potion(02) with rice and curry(Chicken/Pork/Beef)/Egg/Vegan</p>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                      <div class="menu-item bg-white shadow-on-hover">
                          <a href="#menu" class="image-button">
                          <img class="menu-all-image" src="images/menu/indian/mutton_bririyani.jpg" alt="">
                          </a>
                          <div class="menu-item-content p-4">
                              <div>
                                  <span>Rated(4.5)</span>
                                  <span class="stars">
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-half-fill"></i>
                                  </span>  
                              </div>
                              <h5 class="my-2"><a href="#">Indian Mutton Biriyani</a></h5>
                              <p class="small">Indian Mutton Biriyani with gravy and raitha salad</p>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                      <div class="menu-item bg-white shadow-on-hover">
                          <a href="#menu" class="image-button">
                          <img class="menu-all-image" src="images/menu/indian/pakistan_biriyani.jpeg" alt="">
                          </a>
                          <div class="menu-item-content p-4">
                              <div>
                                  <span>Rated(4.0)</span>
                                  <span class="stars">
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-half-fill"></i>
                                      <i class="ri-star-half-fill"></i>
                                  </span>  
                              </div>
                              <h5 class="my-2"><a href="#">Pakisthan style Biriyani</a></h5>
                              <p class="small">Pakisthan style Biriyani with gravy(Vegetable/Chicken/Beef/Egg) & Raitha</p>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                      <div class="menu-item bg-white shadow-on-hover">
                          <a href="#menu" class="image-button">
                          <img class="menu-all-image" src="images/menu/indian/indian-potato-dosa.jpeg" alt="">
                          </a>
                          <div class="menu-item-content p-4">
                              <div>
                                  <span>Rated(4.5)</span>
                                  <span class="stars">
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-half-fill"></i>
                                  </span>  
                              </div>
                              <h5 class="my-2"><a href="#">Indian Potato Dosa</a></h5>
                              <p class="small">Indian Potato Dosa</p>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                      <div class="menu-item bg-white shadow-on-hover">
                          <a href="#menu" class="image-button">
                          <img class="menu-all-image" src="images/menu/indian/mutton_bririyani.jpg" alt="">
                          </a>
                          <div class="menu-item-content p-4">
                              <div>
                                  <span>Rated(4.5)</span>
                                  <span class="stars">
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-half-fill"></i>
                                  </span>  
                              </div>
                              <h5 class="my-2"><a href="#">Indian Mutton Biriyani</a></h5>
                              <p class="small">Indian Mutton Biriyani with gravy and raitha salad</p>
                          </div>
                      </div>
                  </div> 

              </div>
          </div>  

      </div>
       <!--Indian menu tab ends-->

      <!--Malaysian menu tab starts-->
      <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show " id="pills-Malaysian" role="tabpanel" aria-labelledby="pills-Malaysian-tab" tabindex="0">
              <div class="row gy-4">
                  <div class="col-lg-3 col-sm-6">
                      <div class="menu-item bg-white shadow-on-hover">
                          <a href="#menu" class="image-button">
                          <img class="menu-all-image" src="images/menu/malaysian/nasi_lemak.jpeg" alt="">
                          </a>
                          <div class="menu-item-content p-4">
                              <div>
                                  <span>Rated(4.5)</span>
                                  <span class="stars">
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-half-fill"></i>
                                  </span>  
                              </div>
                              <h5 class="my-2"><a href="#"> Malaysian Nasi Lemak</a></h5>
                              <p class="small">Nasi Lemak with (chicken/Egg/Vegan) chuttney</p>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                      <div class="menu-item bg-white shadow-on-hover">
                          <a href="#menu" class="image-button">
                          <img class="menu-all-image" src="images/menu/malaysian/malaysian_chapathi.jpeg" alt="">
                          </a>
                          <div class="menu-item-content p-4">
                              <div>
                                  <span>Rated(4.5)</span>
                                  <span class="stars">
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-half-fill"></i>
                                  </span>  
                              </div>
                              <h5 class="my-2"><a href="#">Chapathi</a></h5>
                              <p class="small">Chapathi and curries(Dhall/Chicken/Sambal/Egg)</p>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                      <div class="menu-item bg-white shadow-on-hover">
                          <a href="#menu" class="image-button">
                          <img class="menu-all-image" src="images/menu/malaysian/malay_rice_and_curry.jpeg" alt="">
                          </a>
                          <div class="menu-item-content p-4">
                              <div>
                                  <span>Rated(4.5)</span>
                                  <span class="stars">
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-half-fill"></i>
                                  </span>  
                              </div>
                              <h5 class="my-2"><a href="#">Malaysian Rice and curry</a></h5>
                              <p class="small">Malaysian Rice and curry with curries and Onion sambal</p>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                      <div class="menu-item bg-white shadow-on-hover">
                          <a href="#menu" class="image-button">
                          <img class="menu-all-image" src="images/menu/malaysian/malay_naan_chapathi_meal.jpeg" alt="">
                          </a>
                          <div class="menu-item-content p-4">
                              <div>
                                  <span>Rated(4.0)</span>
                                  <span class="stars">
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-half-fill"></i>
                                      <i class="ri-star-half-fill"></i>
                                  </span>  
                              </div>
                              <h5 class="my-2"><a href="#">Malaysian naan and rice meal</a></h5>
                              <p class="small">Vegetable/Chicken/Egg & Chilli paste</p>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                      <div class="menu-item bg-white shadow-on-hover">
                          <a href="#menu" class="image-button">
                          <img class="menu-all-image" src="images/menu/malaysian/malaysian_chapathi.jpeg" alt="">
                          </a>
                          <div class="menu-item-content p-4">
                              <div>
                                  <span>Rated(4.5)</span>
                                  <span class="stars">
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-half-fill"></i>
                                  </span>  
                              </div>
                              <h5 class="my-2"><a href="#">Chapathi</a></h5>
                              <p class="small">Yellow Rice, Batu moju(Brinjol pickle), Meat(Chicken/Pork/Beef)/Egg, Salad, Potato curry</p>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                      <div class="menu-item bg-white shadow-on-hover">
                          <a href="#menu" class="image-button">
                          <img class="menu-all-image" src="images/menu/malaysian/nasi_lemak.jpeg" alt="">
                          </a>
                          <div class="menu-item-content p-4">
                              <div>
                                  <span>Rated(4.5)</span>
                                  <span class="stars">
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-half-fill"></i>
                                  </span>  
                              </div>
                              <h5 class="my-2"><a href="#"> Sri Lankan Pol roti & Lunu miris</a></h5>
                              <p class="small">Pol roti and lunu miris(onion sambal)</p>
                          </div>
                      </div>
                  </div> 

              </div>
          </div>  

      </div>
      <!--Malaysian menu tab ends-->

      <!--Snacks tab starts-->
      <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show " id="pills-Snacks" role="tabpanel" aria-labelledby="pills-Snacks-tab" tabindex="0">
              <div class="row gy-4">
                  <div class="col-lg-3 col-sm-6">
                      <div class="menu-item bg-white shadow-on-hover">
                          <a href="#menu" class="image-button">
                          <img class="menu-all-image" src="images/menu/snacks/paniappa.jpg" alt="">
                          </a>
                          <div class="menu-item-content p-4">
                              <div>
                                  <span>Rated(4.5)</span>
                                  <span class="stars">
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-half-fill"></i>
                                  </span>  
                              </div>
                              <h5 class="my-2"><a href="#"> Sri Lankan Pani Appa</a></h5>
                              <p class="small">Rice, 3 Vegetables, Meat(Chicken/Pork/Beef)/Egg/Vegan</p>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                      <div class="menu-item bg-white shadow-on-hover">
                          <a href="#menu" class="image-button">
                          <img class="menu-all-image" src="images/menu/snacks/hoppers.jpg" alt="">
                          </a>
                          <div class="menu-item-content p-4">
                              <div>
                                  <span>Rated(4.5)</span>
                                  <span class="stars">
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-half-fill"></i>
                                  </span>  
                              </div>
                              <h5 class="my-2"><a href="#">Hoppers & Sambol</a></h5>
                              <p class="small">Hoppers and curries(Dhall/Chicken/Pol Sambal/Egg)</p>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                      <div class="menu-item bg-white shadow-on-hover">
                          <a href="#menu" class="image-button">
                          <img class="menu-all-image" src="images/menu/snacks/vegetable_roti.jpg" alt="">
                          </a>
                          <div class="menu-item-content p-4">
                              <div>
                                  <span>Rated(4.5)</span>
                                  <span class="stars">
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-half-fill"></i>
                                  </span>  
                              </div>
                              <h5 class="my-2"><a href="#">Vegetable Rotti </a></h5>
                              <p class="small">Kiri bath(Milk Rice) and Onion sambal</p>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                      <div class="menu-item bg-white shadow-on-hover">
                          <a href="#menu" class="image-button">
                          <img class="menu-all-image" src="images/menu/snacks/laveriya.jpg" alt="">
                          </a>
                          <div class="menu-item-content p-4">
                              <div>
                                  <span>Rated(4.5)</span>
                                  <span class="stars">
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-half-fill"></i>
                                  </span>  
                              </div>
                              <h5 class="my-2"><a href="#">Laveriya</a></h5>
                              <p class="small">Kiri bath(Milk Rice) and Onion sambal</p>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                      <div class="menu-item bg-white shadow-on-hover">
                          <a href="#menu" class="image-button">
                          <img class="menu-all-image" src="images/menu/snacks/mSnack1.avif" alt="">
                          </a>
                          <div class="menu-item-content p-4">
                              <div>
                                  <span>Rated(4.0)</span>
                                  <span class="stars">
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-half-fill"></i>
                                      <i class="ri-star-half-fill"></i>
                                  </span>  
                              </div>
                              <h5 class="my-2"><a href="#">Boiled Satte</a></h5>
                              <p class="small">Vegetable/Chicken/Egg Fried rice & Chilli paste</p>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                      <div class="menu-item bg-white shadow-on-hover">
                          <a href="#menu" class="image-button">
                          <img class="menu-all-image" src="images/menu/snacks/sushi.avif" alt="">
                          </a>
                          <div class="menu-item-content p-4">
                              <div>
                                  <span>Rated(4.5)</span>
                                  <span class="stars">
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-half-fill"></i>
                                  </span>  
                              </div>
                              <h5 class="my-2"><a href="#">Malaysian Sushi</a></h5>
                              <p class="small">Suchi with Fish/chicken/egg/vegan</p>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                      <div class="menu-item bg-white shadow-on-hover">
                          <a href="#menu" class="image-button">
                          <img class="menu-all-image" src="images/menu/snacks/pandanpancake.jpg" alt="">
                              </a>
                          <div class="menu-item-content p-4">
                              <div>
                                  <span>Rated(4.5)</span>
                                  <span class="stars">
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-fill"></i>
                                      <i class="ri-star-half-fill"></i>
                                  </span>  
                              </div>
                              <h5 class="my-2"><a href="#">Malaysia Pandan pancake</a></h5>
                              <p class="small">Pancake made by flour and pandan leaves juice with sweat coconut</p>
                          </div>
                      </div>
                  </div> 

              </div>
          </div>  

      </div>
      <!--Snacks tab ends-->
  </div>
</section>
<!--Menu section ends-->

<!--Services section starts-->
<section id="service" class="service">
  <div class="container-services">
      <h1 class="logo">Services and Offers</h1>
      <div class="cards">
          
      <div class="card">
          <a href="#services" class="image-button">
          <img class="img-fluid" img src="images/services/takeaway.jpg">
      </a>
  
          <h2>Take Away</h2>
          <p>"Take the taste of Asia wherever you go! Enjoy our fast and reliable takeaway service. Order now for a flavorful experience on the go!"</p>
          
        </div>
  
      <div class="card">
          <a href="#services" class="image-button">
          <img class="img-fluid" img src="images/services/delivery.jpg">
          </a>
          <h2>Delivery Service</h2>
          <p> Fast, reliable delivery brings your favorites to your doorstep. Order online for a delightful dining experience. Elevate your home dining today!"</p>
          <a class='btn btn-primary btn-sm' href='delivery.php'>Deliver Order</a>
      </div>
  
      <div class="card">
          <a href="#services" class="image-button">
          <img class="img-fluid" img src="images/services/privateevents.jpg">
          </a>
          <h2>Private Events</h2>
          <p>"Host memorable private events with us! Stylish spaces, personalized service, and customizable menus. Book today for an unforgettable experience!"</p>
          <a class='btn btn-primary btn-sm' href='event_booking.php'>Book Event</a>
      </div>
  
      <div class="card">
          <a href="#services" class="image-button">
          <img class="img-fluid" img src="images/services/offers.jpg">
          </a>
          <h2>Offers</h2>
          <p>"Dive into savings with tempting combos and mouthwatering discounts! Elevate your dining experience without breaking the bank. Savor the flavors today!"</p>
      </div>

      <div class="card">
          <a href="#services" class="image-button">
          <img class="img-fluid" img src="images/services/reserve_table.jpg">
          </a>
          <h2>Table Reservation</h2>
          <p>Step into taste of asia ! Reserve your spot, before its too late to grab a delightful experience with personalized service. Book today for an unforgettable experience!</p>
          <a class='btn btn-primary btn-sm' href='tablereservation.php'>Book Table</a>
      </div>
  </div>
</div>
<!--Services section ends-->

<!--Contact Us section starts-->
<section id="contactUs" class="contactSection">
<div class="container-xxl py-5">
<div class="container">
  <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h1 class="text-center">Contact Us</h1>
      <h3 class="mb-5">Have a question for us?</h3>
  </div>
  <div class="row g-4">
      <div class="col-12">
          <div class="row gy-4">
              <div class="col-md-4">
                  <img scr="Images/Contact us/email.jpg" alt="">
                  <h3>Address</h3>
                  <p>#123, Tampare, Finland<br>33333</p>
              </div>
              <div class="col-md-4">
                  <h3>Email</h3>
                  <p>asian.delight@gmail.com</p>
              </div>
              <div class="col-md-4">
                  <h3>Phone</h3>
                  <p>+358-121212121</p>
              </div>
          </div>
      </div>
      <div class="col-md-3 wow fadeIn" data-wow-delay="0.1s">
          <iframe class="position-relative rounded w-100 h-100"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d951.9596117730448!2d23.758642539183022!3d61.4976720738698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468ed8ac1964e66f%3A0x5eb6a84d00894df6!2sKeskustori%2C%20Tampere!5e0!3m2!1sen!2sfi!4v1706053213293!5m2!1sen!2sfi"
              frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
              tabindex="0"></iframe>
      </div>
      <div class="col-md-6">
          <div class="wow fadeInUp" data-wow-delay="0.2s">
            <h3>Customer Feedback</h3>
              <form name="feedback_form" method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
                <div class="row">
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="member_id" placeholder="Enter your member id" name="member_id" required>
                </div>  
                    <div class="col-sm-6">                    
                <select class="form-control" id="message_type" name="message_type">
                    <option value="messageType">Message Type</option>
                    <option value="message">Message to Restaurant</option>
                    <option value="complaint">Complaint about Restaurant</option>
                    <option value="feedback">Feedback Message</option>
                </select><br>
                    </div>
                </div>
                  <div class="row g-3">
                      <div class="col-md-6">
                          <div class="form-floating">
                              <input type="text" class="form-control" id="name" name="cus_name" placeholder="Your Name" required>
                              <label for="name">Your Name</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-floating">
                              <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                              <label for="email">Your Email</label>
                          </div>
                      </div>
                      <div class="col-12">
                          <div class="form-floating">
                              <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                              <label for="subject">Subject</label>
                          </div>
                      </div>
                      <div class="col-12">
                          <div class="form-floating">
                              <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 150px" required></textarea>
                              <label for="message">Message</label>
                          </div>
                      </div>
                      <div class="col-12">
                          <button class="btn btn-primary w-100 py-3" type="submit" href="#contactUs" name="submit_feedback">Send Message</button>
                      </div>
                  </div>
              </form><br><br>
              <div class="row g-3">
              <?php
                if(isset($_POST["submit_feedback"]))
                {                
                    $member_id = $_POST['member_id'];
                    $message_type = $_POST['message_type'];
                    $name = $_POST['cus_name'];
                    $email = $_POST['email'];
                    $subject = $_POST['subject'];   
                    $message= $_POST['message'];
                    $admin_message= 'Not approved';
                
                // Connect to the db server
                include "config/db.php";


                // write sql statement to insert data                
                $sql = "INSERT INTO customer_feedback(member_id, name, email, subject, message_type, message,admin_message)
                        VALUES ('$member_id', '$name', '$email', '$subject',  '$message_type', '$message','$admin_message')";

                if ($conn->query($sql)===TRUE)
                    {

                        echo "<h4>Thank you for contacting us. We will get back you as soon as possible.<h4>";

                    }
                else {
                    echo "Error :" .$sql . "<br>". $conn->error;
                }

                //close the db connection
                $conn->close();
                }

                ?>
                </div>
          </div>
      </div>
      <!-- cutomer rating-->
      <div class="col-md-3">
      <h3>Customer Rating</h3>
      <form name="rating_form" method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
                <div class="row">
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="member_id" placeholder="Enter your member id" name="member_id" required> <br>
                </div> 
                   
                </div>
                  <div class="row g-3">
                      <div class="col-md-12">
                          <div class="form-floating">
                              <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                              <label for="name">Your Name</label>
                          </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-sm-6">                    
                            <select type="text" class="form-control" id="rating_type" name="rating_type"required>
                                <option value="positive">Enter Your Rating</option>
                                <option value="positive">Positive</option>
                                <option value="negative">Negative</option>
                            </select>
                        </div>
                    </div>
                    <div class="row g-3">
                      <div class="col-12">

                          <input type="number" class="form-control" id="subject" placeholder="Enter the rating" name="rating" required>
                             
                        </div>
                    </div>
                      
                      
                      <div class="col-12">
                          <button class="btn btn-primary w-100 py-3" type="submit" href="#contactUs" name="submit_rating">Send Message</button>
                      </div>
                  </div>
              </form><br><br>

              <?php
//insert values to cutomer rating table
    if(isset($_POST["submit_rating"]))
    {
        $member_id = $_POST["member_id"];
        $name = $_POST["name"];
        $rating = $_POST["rating"];
        $rating_type = $_POST["rating_type"]; 

        // Connect to the db server
        include "config/db.php";

        // write sql statement to insert data

        $sql = "INSERT INTO restaurant_rating(member_id, name, rating_type, rating)
                VALUES ('$member_id', '$name','$rating_type', '$rating')";

        if ($conn->query($sql)===TRUE) 
        {
            echo "Thank you very much for your valuable rating..!!";
        }

        else 
        {
            echo "Error :" .$sql . "<br>". $conn->error;
        }

        //close the db connection
            $conn->close();
    }

?>        
      </div>
  </div>
</div>
</div>
</section>

<?php include 'footer.php'?>
