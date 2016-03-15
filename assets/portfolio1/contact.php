
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
		<li><a href="portfolio.html">Portfolio</a></li>
		<li><a href="contact.php">Contact</a></li>
	</ul>
</div>

<div class="regBody">

	<h1>Contact Me</h1>

	<div id="icons">
		<a target="_blank" href="https://github.com/MissTatiana" alt="github"><img src="assets/img/icons/github.png" width="50" height="50"></a>
		&nbsp;
		&nbsp;
		<a target="_blank" href="https://www.linkedin.com/pub/tatiana-kerick/82/522/4?trk=shareTw" alt="linked in"><img src="assets/img/icons/linked.png" width="50" height="50"></a>
		&nbsp;
		&nbsp;
		<a target="_blank" href="assets/img/Resume.pdf" alt="resume"><img src="assets/img/icons/resume.png" width="50" height="50"></a>
	</div><!-- icons -->

	<form id="contact" method="post" name="contact">
		
		<div class="name">
			<label for="firstName">First Name:</label>

			<input type="text" name="firstName" id="firstName" required />
		</div>

		<div>
			<label for="lastName">Last Name:</label>

			<input type="text" name="lastName" id="lastName" required />
		</div>

		<div>
			<label for="email">Email Address:</label>

			<input type="email" name="email" id="email" required />
		</div>

		<div>
			<label for="subject">Subject:</label>

			<input type="text" name="subject" id="subject" required />
		</div>

		<div>
			<label for="message">Message:</label>

			<textarea name="message" id="message" rows="10" cols="76"></textarea>
		</div>

		<input type="submit" id="sendBtn" class="btn" value="SEND" />

	</form>


</div>



<!-- My script -->
</body>
</html>