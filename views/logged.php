<!-- Getting Information From Login Page And Keeping updated -->
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seashella</title>
    <link rel="stylesheet" type="text/css" href="/projectjewellery/css/logged.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<!-- Notification Bar */ -->
    <div class="notification-bar-top" id="home">
        <p id="paragraph-1">20% discount in your first order and many other benefits!</p>
    </div>
	
<!-- Main Content -->
<header class="header">
        <a href="#" class="logo">Seashella</a>
        <!-- User Icons -->
        <div class="user-icons">
            <!-- User Icon -->
            <a id="icon-user" href="/projectjewellery/views/login.php"><i class="fa-solid fa-user fa-lg"
                    style="color: #bba35a;"></i></a>
            <!-- Cart Icon -->
            <i class="fa-solid fa-bag-shopping fa-lg" style="color: #bba35a;" id="cart-icon"></i>
            <div class="welcome-user">
  	
            <!-- Notification Message - Check If Matches -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- Logged in user information - Success If Matches -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="logged.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
    </div>
      </div>

    <!-- Check box, Close icon -->
        <input type="checkbox" id="check">
        <label for="check" class="icons">
            <i class='bx bx-menu' id="menu-icon"></i>
            <i class='bx bx-x' id="close-icon"></i>
        </label>

        <!-- Navbar Menu -->
        <nav class="navbar">
            <a href="#home" style="--i:0;">HOME</a>
            <a href="#jewellery" style="--i:1;">JEWELLERY</a>
            <a href="#about-me" style="--i:2;">ABOUT</a>
            <a href="#contact" style="--i:3;">CONTACT</a>
        </nav>

        <!-- SHOPPING CART -->
        <div class="cart">
            <h2 class="cart-title">Your Cart</h2>
            <!-- Cart Content -->
            <div class="cart-content"></div>
            
            <!-- Total -->
            <div class="total">
                <div class="total-title">Total</div>
                <div class="total-price">$0</div>
            </div>
            <!-- Buy Button -->
            <button type="button" class="btn-buy">Buy Now</button>
            <!-- Cart Close -->
            <i class="fa-solid fa-xmark" id="close-cart"></i>
        </div>
    </header>

<!-- IMAGE -->
    <div class="container">
        <img class="main-image" src="../Images/sunset.jpg" alt="">
        <a href="#jewellery"><button class="btn">START SHOPPING NOW!</button></a>
    </div>

     <!-- Product Title -->
    <div class="product-title" id="jewellery">
        <p>Handmade jewellery</p>
    </div>

    <hr class="hr-1">
    
    <!-- JEWELLERY PRODUCTS -->
    <section class="background-cover">
        <div class="products-1">
            <div class="background-product">
                <img class="img-product-responsive" src="../Images/1.png" alt="">
                <h1 class="product-description">Pearl pendant</h1>
                <button class="add-to-cart">Add to cart</button>
                <span><strike class="strike-prices">$12</strike></span>
                <span class="price">$8</span>
            </div>

            <div class="background-product">
                <img class="img-product-responsive" src="../Images/2.png" alt="">
                <h1 class="product-description">Armlet pendant</h1>
                <button class="add-to-cart">Add to cart</button>
                <span><strike class="strike-prices">$13</strike></span>
                <span class="price">$9</span>
            </div>

            <div class="background-product">
                <img class="img-product-responsive" src="../Images/3.png" alt="">
                <h1 class="product-description">Pearl necklace</h1>
                <button class="add-to-cart">Add to cart</button>
                <span><strike class="strike-prices">$14</strike></span>
                <span class="price">$9</span>
            </div>

            <div class="background-product">
                <img class="img-product-responsive" src="../Images/4.png" alt="">
                <h1 class="product-description">Shell seastar</h1>
                <button class="add-to-cart">Add to cart</button>
                <span><strike class="strike-prices">$10</strike></span>
                <span class="price">$6</span>
            </div>
        </div>

        <div class="products-2">
            <div class="background-product">
                <img class="img-product-responsive" src="../Images/5.png" alt="">
                <h1 class="product-description">Silver pearl</h1>
                <button class="add-to-cart">Add to cart</button>
                <span><strike class="strike-prices">$11</strike></span>
                <span class="price">$7</span>
            </div>

            <div class="background-product">
                <img class="img-product-responsive" src="../Images/6.png" alt="">
                <h1 class="product-description">Shell seahorse</h1>
                <button class="add-to-cart">Add to cart</button>
                <span><strike class="strike-prices">$12</strike></span>
                <span class="price">$9</span>
            </div>

            <div class="background-product">
                <img class="img-product-responsive" src="../Images/7.png" alt="">
                <h1 class="product-description">Golden star</h1>
                <button class="add-to-cart">Add to cart</button>
                <span><strike class="strike-prices">$13</strike></span>
                <span class="price">$9</span>
            </div>

            <div class="background-product">
                <img class="img-product-responsive" src="../Images/8.png" alt="">
                <h1 class="product-description">Necklace seastar</h1>
                <button class="add-to-cart">Add to cart</button>
                <span><strike class="strike-prices">$10</strike></span>
                <span class="price">$7</span>
            </div>
        </div>

        <div class="products-3">
            <div class="background-product">
                <img class="img-product-responsive" src="../Images/9.png" alt="">
                <h1 class="product-description">Shell star</h1>
                <button class="add-to-cart">Add to cart</button>
                <span><strike class="strike-prices">$12</strike></span>
                <span class="price">$8</span>
            </div>

            <div class="background-product">
                <img class="img-product-responsive" src="../Images/10.png" alt="">
                <h1 class="product-description">Armlet pendant</h1>
                <button class="add-to-cart">Add to cart</button>
                <span><strike class="strike-prices">$10</strike></span>
                <span class="price">$6</span>
            </div>

            <div class="background-product">
                <img class="img-product-responsive" src="../Images/11.png" alt="">
                <h1 class="product-description">Pearl necklace</h1>
                <button class="add-to-cart">Add to cart</button>
                <span><strike class="strike-prices">$13</strike></span>
                <span class="price">$9</span>
            </div>

            <div class="background-product">
                <img class="img-product-responsive" src="../Images/12.png" alt="">
                <h1 class="product-description">Shell seastar</h1>
                <button class="add-to-cart">Add to cart</button>
                <span><strike class="strike-prices">$11</strike></span>
                <span class="price">$8</span>
            </div>

        </div>
        <div class="products-4">
            <div class="background-product">
                <img class="img-product-responsive" src="../Images/13.png" alt="">
                <h1 class="product-description">White pearl</h1>
                <button class="add-to-cart">Add to cart</button>
                <span><strike class="strike-prices">$12</strike></span>
                <span class="price">$8</span>
            </div>

            <div class="background-product">
                <img class="img-product-responsive" src="../Images/14.png" alt="">
                <h1 class="product-description">Sea star</h1>
                <button class="add-to-cart">Add to cart</button>
                <span><strike class="strike-prices">$10</strike></span>
                <span class="price">$7</span>
            </div>

            <div class="background-product">
                <img class="img-product-responsive" src="../Images/15.png" alt="">
                <h1 class="product-description">Necklace shell</h1>
                <button class="add-to-cart">Add to cart</button>
                <span><strike class="strike-prices">$13</strike></span>
                <span class="price">$9</span>
            </div>

            <div class="background-product">
                <img class="img-product-responsive" src="../Images/16.png" alt="">
                <h1 class="product-description">White golden</h1>
                <button class="add-to-cart">Add to cart</button>
                <span><strike class="strike-prices">$14</strike></span>
                <span class="price">$9</span>
            </div>
        </div>
    </section>

    <!-- ABOUT MY PRODUCTS -->
    <h1 class="title-aboutme">About my products</h1><br>
    <hr class="hr-2">
    <section class="about-me" id="about-me">
        <article>
            <p class="paragraph-aboutme">I would like to share with you the story behind my handmade jewelry. As many of
                you know, I am passionate
                about jewelry and I love creating unique and special pieces for my clients. But how does the process of
                creating my jewelry really begin?
                It all starts with inspiration. I am often inspired by nature, the textures and colors that I see around
                me. For example, the Gaia earring inspired by the ocean, the Miranda earring inspired by the cow print,
                or the Perla earring set in the white and translucent quartz print but to receive a distinctive and
                unique name I decided to call it Perla in honor of the purity that emanates I am also inspired by the
                history and culture of the places I have visited. Each piece I create is unique and special, and I love
                telling the story behind it.</p>
        </article>
    </section>

    <!-- FOOTER -->
    <footer class="footer" id="contact">
        <article class="footer-articles">
            <h1 class="footer-title-name">Seashella</h1>
            <p class="footer-paragraph"><span style="color: #b3995c;"><b>100%</b></span> Handmade products.</p>
            <p class="footer-paragraph" id="footer-para-2">Sign In and get <span
                    style="color: #b3995c;"><b>20%</b></span> discount <br> in your first order!</p>

            <div class="social-icons">
                <a href="https://www.instagram.com/bradpittofflcial/?hl=en" target="_blank" rel="noopener"><i class='bx bxl-instagram'></i></a>
                <a href="https://www.facebook.com/michal.vesely.96" target="_blank" rel="noopener"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-messenger'></i></a>
                <a href="#"><i class='bx bxl-google'></i></a>
            </div>
        </article>

        <article class="footer-articles">
            <h1 class="footer-title-name">Menu</h1>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#jewellery">Jewellery</a></li>
                <li><a href="#about-me">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </article>

        <article class="footer-articles">
            <h1 class="footer-title-name">Contact</h1>
            <ul>
                <li><i class="fa-solid fa-phone" style="color: #6d6654;"></i><a href=""> 402 106 207 316</a></li>
                <li><i class="fa-solid fa-envelope" style="color: #6d6654;"></i><a href=""> Sheashella@gmail.com</a>
                </li>
                <li><i class="fa-solid fa-location-dot" style="color: #6d6654;"></i><a href=""> 8 MarlowStreet</a></li>
                <li><i class="fa-solid fa-city" style="color: #6d6654;"></i><a href=""> Western Australia 6002</a></li>
            </ul>
        </article>
    </footer>

    <!-- Notification Bar Bottom -->
    <div class="notification-bar-bottom">
        <p id="paragraph-1">20% discount in your first order and many other benefits!</p>
    </div>


 <!-- Shopping Cart JS -->
 <script src="../JavaScript/ShoppingCart.js"></script>


</body>
</html>