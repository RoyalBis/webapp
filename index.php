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

<!-- START OF THE HEADER-->
	<?php
		include('header.php');
	 ?>
<!-- END OF THE HEADER-->
	<?php
		include('menu.php');
	 ?>

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

			<section id="greeting">
				<?php
					date_default_timezone_set('Canada/Mountain');
					if ( date('H') > 4 && date('H') < 12 )  {
						$greeting = "Good Morning!";
						$background = "background: linear-gradient(5deg, #ff7300, lightblue, black, black);";
					} elseif ( date('H') < 17 ) {
						$greeting = "Good Afternoon!";
						$background = "background: linear-gradient(0deg, #ff7300, lightblue);";
					} else {
						$greeting = "Good Evening!";
						$background = "background: linear-gradient(355deg, #ff7300, lightblue, black, black);";
					}
					print ("<div class='greeting' style='$background'><h3>$greeting</h3></div>");
			 ?>
	 		</section>

			<!--START OF THE PACKAGES SECTION (content is added dynamically onload()) -->
			<section id="packages">
					<p>Featured Vacation Packages</p>
					<div id="vacpackages">
						<!--dynamically generated package content goes here-->
					</div>
				</section>
			</main> <!-- END OF THE DOCUMENT MAIN -->

		<!-- START OF THE FOOTER -->
		<?php
			include('footer.php');
		 ?>
		<!-- END OF THE FOOTER -->

		<script type="text/javascript" src="js/home.js"></script>

	</body>
</html>
