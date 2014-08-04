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
		<a target="_blank" href="https://github.com/MissTatiana" alt="github"><img src="assets/img/icons/github.png"></a>
		&nbsp;
		&nbsp;
		<a target="_blank" href="https://www.linkedin.com/pub/tatiana-kerick/82/522/4?trk=shareTw" alt="linked in"><img src="assets/img/icons/linked.png"></a>
		&nbsp;
		&nbsp;
		<a target="_blank" href="assets/img/Resume.pdf" alt="resume"><img src="assets/img/icons/resume.png"></a>
	</div><!-- icons -->

	<form id="contact" method="post">
		
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
			<label for="message">Message:</label>

			<textarea name="message" id="message" rows="10" cols="76"></textarea>
		</div>

		<input type="submit" id="sendBtn" class="btn" value="SEND" />

	</form>
</div>

<?php 
	if(isset($_POST["email"])) {

		$email_to = "KerickTatiana@gmail.com";

		$fistName = $_POST["firstName"];
		$lastName = $_POST["lastName"];
		$email = $_POST["email"];
		$subject = $_POST["subject"];
		$message = $_POST["message"];

		$errorMessage = "";

		$emailMessage = "form details below.\n\n";

		function died($error) {
			//errors here
		}

		//validation expected data exists
		if(!isset($_POST["firstName"]) ||
				!isset($_POST["lastName"]) ||
				!isset($_POST["email"]) ||
				!isset($_POST["subject"]) ||
				!isset($_POST["message"])) {
			died("Please complete the form properly");
		}

		$emailExp = "/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/";
		$stringExp = "/^[A-Za-z .'-]+$/";

		if(!preg_match($emailExp, $email)) {
			$errorMessage .= "Invalid email address";
		}

		if(!preg_match($stringExp, $firstName)) {
			$errorMessage = "Invalid first name";
		}

		if(!preg_match($stringExp, $lastName)) {
			$errorMessage = "Invalid last name";
		}

		if(!preg_match($stringExp, $subject)) {
			$errorMessage = "Invalid subject";
		}

		if(strlen($message) < 2) {
			$errorMessage = "The message you entered isn't valid";
		}

		function cleanString($string) {
			$bad = array("content-type","bcc:","to:","cc:","href");

			return str_replace($bad, "", $string);
		}

		$emailMessage .= "First Name: " . cleanString($firstName)."\n";
		$emailMessage .= "Last Name: " . cleanString($lastName);
		$emailMessage .= "Email: " . cleanString($email);
		$emailMessage .= "Message: " . cleanString($message);

		echo $emailMessage;

		//create email headers
		$headers = "Form: " . $firstName . " " . $lastName . "\r\n" . 

		"Reply-To: " . $email . "\r\n" . 

		"X-Mailer: PHP/" . phpversion();

		@mail($email_to, $subject, $emailMessage);



	}//isset post email

?>

<!-- My script -->
<script src="js/script.js"></script>
</body>
</html>