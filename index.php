<!------------------------------------------------------------------------------
Title: 			 Travel Experts Web App - Home
Author: 		 Royal Bissell
Date: 			 2015-11-02
Description: Home Page for Travel Experts. Contains pictures and a Featured
						 Travel Packages section. Shares Header and Footer with contact.php
						 and register.php.
------------------------------------------------------------------------------->

<!DOCTYPE html>
<html lang="en-US">
	<head>

		<title>Travel Experts</title>
		<meta charet="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="css/reset.css"/>
		<link rel="stylesheet" href="css/stylesheet.css"/>
		<link rel="stylesheet" href="css/indexstyles.css"/>

	</head>
	<body onload="loadPackages()">

<!-- START OF THE HEADER, includes the Nav Bar -->
	<header align="center">
		<div id="logo-container">
			<img class="logo" src="images/PirateBadge_100px.png"/>
			<h1 class="logo">Welcome to Travel Experts</h1>
		</div>
		<nav>
			<a id="current" href="index.php">
				<div>Home</div>
			</a>
			<a href="contact.php">
				<div>Contact Us</Div>
			</a>
			<a href="register.php">
				<div>Registration</div>
			</a>
			<a href="links.php">
				<div>Links</div>
			</a>
		</nav>
	</header>

		<!-- START OF THE DOCUMENT MAIN -->
		<main align="center">
			<!--START OF THE TRAVEL PICTURES -->
			<section id="pictures" style="clear:both">
				<div id="pic1" class="pic" >
				</div>
				<div id="pic2"  class="pic" >
				</div>
				<div id="pic3"  class="pic" >
				</div>
				<div id="pic4"  class="pic" >
				</div>
				<div id="pic5"  class="pic" >
				</div>
				<div id="pic6"  class="pic" >
				</div>
			</section> <!-- END OF THE TRAVEL PICUTRES -->

			<!--START OF THE PACKAGES SECTION (content is added dynamically onload()) -->
			<section id="packages" align="center">
				<?php
					date_default_timezone_set('Canada/Mountain');
					print(date('H'));
					if ( date('H') > 4 && date('H') < 12 )  {
						$greeting = "Good Morning!";
						$icon = "images/Morning.svg";
					} elseif ( date('H') < 17 ) {
						$greeting = "Good Afternoon!";
						$icon = "images/Afternoon.svg";
					} else {
						$greeting = "Good Evening!";
						$icon = "images/Evening.svg";
					}
					print ("<div id='greeting'><div class='tg-txt'><img src='$icon'/></div><div class='tg-graphic'><h3>$greeting<br/></h3></div></div>");
				 ?>
				<h3>Featured Vacation Packages</h3>
				<div id="vacpackages">

				</div>
			</section>
		</main> <!-- END OF THE DOCUMENT MAIN -->

	<!-- START OF THE FOOTER -->
		<footer>
			<div class="logo">
				<img class="logo" src="images/PirateBadge_100px.png"/>
				<p>Copyright &copy by Travel Experts</p>
			</div>
		</footer>

		<script type="text/javascript" src="js/home.js"></script>

	</body>
</html>
