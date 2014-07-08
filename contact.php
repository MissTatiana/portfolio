<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Tatiana Kerick | Contact</title>

	<!-- meta -->
	<meta name="description" content="Portfolio for web designer/developer Tatiana Kerick">

	<!-- css -->
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<!-- jQuery -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</head>

<body>

	<div class="regNav">
	<ul>
		<li><a href="index.html#about">About</a></li>
		<li><a href="index.html#services">Services</a></li>
		<li><a href="portfolio.html">Portfolio</a></li>
		<li><a href="contact.php">Contact</a></li>
	</ul>
	</div>

	<div class="regBody">
		<span class="regDepth" title="contact">Contact</span>

		<form id="contact">
			
			<div class="name">
				<!-- first name -->
				<label for="firstName">First Name:</label>

				<input type="text" name="firstName" id="firstName" required />
			</div><!-- name -->

			<div>
				<!-- last name -->
				<label for="lastName">Last Name:</label>

				<input type="text" name="lastName" id="lastName" required />
			</div><!-- name -->

			<div>
				<!-- email -->
				<label for="email">Email Address:</label>

				<input type="email" name="email" id="email" required />
			</div>

			<div>
				<!-- subject -->
				<label for="subject">Subject:</label>

				<input type="text" name="subject" id="subject" required />
			</div>

			<div>
				<!-- message -->
				<label for="message">Email:</label>

				<textarea name="message" id="message" rows="10" cols="76"></textarea>
			</div>

		</form>
	</div><!-- regBody -->


<!-- My script -->
<script src="js/script.js"></script>
</body>
</html>