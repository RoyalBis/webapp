<!------------------------------------------------------------------------------
Title: 			 Travel Experts Web App - Registration Page & Form
Author: 		 Royal Bissell
Date: 			 2015-11-02
Description: Registration Page for Travel Experts. Contains a registration form
						 and data validation. Shares Header and Footer with index.php and
						 contact.php.
Methods:		 The form fields use title and pattern attributes.
						 Title attributes provide a hover effect for fields, onfocus() tooltips
						 are still neccessary; touch input devices do not hover!
						 Pattern attributes perform a regex on input at submission and if they
						 fail will display the message = title attribute to the user as an error
						 message. (postal code and birthdate rely on javascript as a way of
						 exploring different validation methods)
------------------------------------------------------------------------------->

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Customer Travel Order</title>

		<link rel="stylesheet" href="css/reset.css"/>
		<link rel="stylesheet" href="css/stylesheet.css"/>
		<link rel="stylesheet" href="css/registerstyles.css"/>
		<link rel="stylesheet" href="css/forms.css"/>

	</head>
<body onload="formLoad(this)">
	<header align="center">
		<div id="logo-container">
			<img class="logo" src="images/PirateBadge_100px.png" alt="logo not displayable"/>
			<h1 class="logo">Welcome to Travel Experts</h1>
		</div>
		<nav>
			<a href="index.php">
				<div>Home</div>
			</a>
			<a href="contact.php">
				<div>Contact Us</Div>
			</a>
			<a id="current" href="register.php">
				<div>Registration</div>
			</a>
			<a href="links.php">
				<div>Links</div>
			</a>
		</nav>
	</header>

<!-- START OF THE FORM SECTION -->
	<section id="reg-form">
		<ul id="errors"></ul>
		<h1>Registration Details:</h1>
		<form action="bouncer.php" method="post">
			<div id="form">
				<div id="name" class="input-container">
					<div id="fname" class="inner-input">
						<label>First Name:</label>
						<input type="text" name="fname" pattern="^[a-zA-Z]{2,}(?!\W)"
							title="First Name must be at least 2 characters long and may only contain letters."
							onfocus="showTip(this)" onblur="hideTip(this)"/>
						<p class="inputTip"></p>
					</div>
					<div id="lname" class="inner-input">
						<label>Last Name:</label>
						<input type="text" name="lname" pattern="^[a-zA-Z]{2,}(?!\W)"
							title="Last Name must be at least 2 characters long and may only contain letters."
							onfocus="showTip(this)" onblur="hideTip(this)"/>
						<p class="inputTip"></p>
					</div>
				</div>

				<div id="gender" class="input">
					<label>Gender:</label>
					<div id="genders" class="input">
						<div id="male">
							<label>Male</label>
							<input type="radio" checked="checked" name="gender" value="male"/>
						</div>
						<div id="female">
							<label>Female</label>
							<input type="radio" name="gender" value="female"/>
						</div>
					</div>
				</div>

				<div id="bdate" class="input">
					<label>Birth Date:</label>
					<input type="date" name="bdate"
						title="Enter your Date of Birth. Min: 1900-01-01. Max: Today"
						onchange="valBDate(this)"/>
				</div>

				<div id="address" class="input-container">
					<div id="staddress" class="inner-input">
						<label>Street:</label>
						<input type="text" name="staddress" pattern="[a-zA-Z0-9]{1,}"
							title="Enter a Street address; cannot be empty."
							onfocus="showTip(this)" onblur="hideTip(this)"/>
					<p class="inputTip"></p>
					</div>
					<div id="country" class="inner-input">
						<label>Country:</label>
						<input list="countries" name="country" title="Select a Country; cannot be empty."/>
						<datalist id="countries">
							<option value="CAN">Canada</option>
							<option value="USA">United States</option>
						</datalist>
					</div>
					<div id="prov" class="inner-input">
						<label>Province:</label>
						<select name="prov" title="Select a Province or State; cannot be empty.">
								<option value="">Select Province</option>
								<option value="AB">Alberta</option>
								<option value="BC">British Columbia</option>
								<option value="SK">Saskatchewan</option>
						</select>
					</div>
					<div id="city" class="inner-input">
						<label>City:</label>
						<input type="text" name="city" pattern="^[a-zA-Z0-9]{1,}(?!\W)"
							title="Enter a City; cannot be empty." onfocus="showTip(this)" onblur="hideTip(this)"/>
						<p class="inputTip"></p>
					</div>
					<div id="postcode" class="inner-input">
						<label>Postal Code:</label>
						<input type="text" name="postcode" onchange="valPostCode(this)"
							title="Postal Codes must be formated X0X 0X0 and can be seperated by a space or hyphen."
							onfocus="showTip(this)" onblur="hideTip(this)"/>
						<p class="inputTip"></p>
					</div>
				</div>

				<div id="phone" class="input">
					<label>Phone#:</label>
					<input type="tel" name="phone" pattern="[0-9]{9}"
						title="Phone numbers must include a 3 digit area code and be formated: xxx xxx-xxxx"
						onfocus="showTip(this)" onblur="hideTip(this)"/>
					<p class="inputTip"></p>
				</div>

				<div id="email" class="input">
					<label> Email: </label>
					<input type="email" name="email"
						title="Emails must contain an @ symbol and a domain. i.e gmail.com, yahoo.com"
						onfocus="showTip(this)" onblur="hideTip(this)"/>
					<p class="inputTip"></p>
				</div>

				<div id="destination" class="input">
					<label>Destination:</label>
					<select name="destination" title="Please select one of our vacation destinations">
						<option value="">Select Destination</option>
						<optgroup label="Canada"/>
							<option value="Can1">Tofino</option>
							<option value="Can2">Montreal</option>
						</optgroup>
						<optgroup label="Mexico"/>
							<option value="Mex1">Cancun</option>
							<option value="Mex2">Puerto Vallarta</option>
						</optgroup>
					</select>
				</div>

				<div id="opt" class="input">
					<div class="bumper"></div>
					<input type="checkbox" checked="checked" name="spam" value="yes"
						title="If you agree to this, we will send you periodic deals and updates."/>
					<em>I would you like to receive future email regarding offers from Travel Experts and affiliates?</em>
				</div>
				<div id="buttons" class="input">
					<div class="bumper"></div>
					<input type="reset" value="Reset" onclick="return formConfirm(this)"/>
					<input type="submit" value="Send" onclick="return formConfirm(this)"/>
				</div>
			</div>
		</form>
		</section> <!-- END OF THE FORM SECTION -->

		<footer>
			<div class="logo">
				<img class="logo" src="images/PirateBadge_100px.png" alt="logo not displayable"/>
				<p>Copyright &copy; by Travel Experts</p>
			</div>
		</footer>

		<script type="text/javascript" src="js/form.js"></script>

	</body>
</html>
