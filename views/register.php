<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration</title>
<link rel="stylesheet" type="text/css" href="/projectjewellery/css/register.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<!-- Notification Bar -->
<div class="notification-bar-top" id="home">
        <p id="paragraph-1">Sign In and get 20% discount in your first order and many other benefits!</p>
    </div>

<!-- Header -->	
<header class="header">
<a href="index.php" class="logo">Seashella</a>

<!-- Check box, Close icon -->
<input type="checkbox" id="check">
<label for="check" class="icons">
	<i class='bx bx-menu' id="menu-icon"></i>
	<i class='bx bx-x' id="close-icon"></i>
</label>
</header>
 
<!-- REGISTRATION FORM -->
  <form method="post" action="register.php" name=form>
  <div class="create-account-title">
	<p>Create Account</p>
  </div><br>
  	<?php include('errors.php'); ?> 	
    <div>
	  <label id="label-username" for="username">USERNAME</label><br>
  	  <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
	</div><br>
	  
  	<div>
	  <label id="label-email" for="email">EMAIL</label><br>
  	  <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
  	</div><br>

  	<div>
	  <label id="label-password" for="password">PASSWORD</label><br>
  	  <input type="password" name="password_1" placeholder="Password">
  	</div><br>

  	<div>
	  <label id="label-confirm-password" for="confirm-password">CONFIRM PASSWORD</label><br>
  	  <input type="password" name="password_2" placeholder="Confirm Password">
  	</div><br>

  	<div class="create">
  	  <button type="submit" class="btn" name="reg_user">CREATE</button>
  	</div>
	
	<div><br>
	<span class="member">Already a member? <a class="signin" href="login.php">Sign in</a></span>
    </div>
  </form>

  <!-- FOOTER -->
  <footer class="footer" id="contact">
<article class="footer-articles">
	<h1 class="footer-title-name">Seashella</h1>
	<p class="footer-paragraph"><span style="color: #b3995c;"><b>100%</b></span> Handmade products.</p>
	<p class="footer-paragraph" id="footer-para-2">Sign In and get <span
			style="color: #b3995c;"><b>20%</b></span> discount <br> in your first order!</p>

	<div class="social-icons">
		<a href="#"><i class='bx bxl-instagram'></i></a>
		<a href="#"><i class='bx bxl-facebook'></i></a>
		<a href="#"><i class='bx bxl-messenger'></i></a>
		<a href="#"><i class='bx bxl-google'></i></a>
	</div>
</article>

<article class="footer-articles">
	<h1 class="footer-title-name">Menu</h1>
	<ul>
		<li><a href="">Home</a></li>
		<li><a href="">Jewellery</a></li>
		<li><a href="">About</a></li>
		<li><a href="">Contact</a></li>
	</ul>
</article>

<article class="footer-articles">
	<h1 class="footer-title-name">Contact</h1>
	<ul>
		<li><i class="fa-solid fa-phone" style="color: #6d6654;"></i><a href=""> 61 106 207 316</a></li>
		<li><i class="fa-solid fa-envelope" style="color: #6d6654;"></i><a href=""> Sheashella@gmail.com</a></li>
		<li><i class="fa-solid fa-location-dot" style="color: #6d6654;"></i><a href=""> 8 MarlowStreet</a></li>
		<li><i class="fa-solid fa-city" style="color: #6d6654;"></i><a href=""> Western Australia 6002</a></li>
	</ul>
</article>
</footer>

<!-- Notification Bar Bottom -->
<div class="notification-bar-bottom">
<p id="paragraph-1">Sign In and get 20% discount in your first order and many other benefits!</p>
</div>


</body>
</html>