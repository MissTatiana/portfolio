<?php

	// error_reporting(E_ALL);
	// ini_set('display_errors', 1);

	//variable from input
	$firstName = $_POST['firstName'];
	$lastName  = $_POST['lastName'];
	$email     = $_POST['email'];
	$subject   = $_POST['subject'];
	$message   = $_POST['message'];

	// echo $firstName . $lastName . $email . $subject . $message;

	//email variables
	$to = "KerickTatiana@gmail.com";
	$sub = $subject;

	//html message
	$msg = "<html><head>" . $subject . "</head>";
	$msg .= "<body><p>Message from: " . $lastName . ", " . $firstName. "</p>";
	$msg .= "<p>Reply to: " . $email . "</p> <br />";
	$msg .= "<p>---- Beginning of message ----</p><br />";
	$msg .= "<p>" . $message . "</p><br />";
	$msg .= "<p>---- End of message ----</p></body></html>";

	//setting content-type
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type text/html; charset=iso-8859-1" . "\r\n";
	$headers .= "From: " . $email . "\r\n";

	if (! mail($to, $sub, $msg, $headers))
	{
		throw new Exception("Contact form delivery failed");
	}

?>



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