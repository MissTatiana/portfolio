<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Tatiana Kerick | Front-end Developer</title>

	<!-- foundation -->
	<link rel="stylesheet" href="css/foundation.min.css" />

	<!-- style -->
	<link rel="stylesheet" type="text/css" href="css/app.css">

	<!-- fonts -->
	<link rel="stylesheet" type="text/css" href="assets/fonts/foundation-icons.css">

</head>
<body>

<nav class="large-12 medium-12 columns compress navbar">
	<div class="large-6 medium-6 hide-for-small-only columns text-left">
		<a href="https://www.linkedin.com/in/tatianakerick" title="View my LinkedIn page" target="_blank"><i class="fi-social-linkedin social"></i></a>

		<a href="https://github.com/MissTatiana" title="See my projects" target="_blank"><i class="fi-social-github social"></i></a>

		<a href="http://codepen.io/Miss_Tatiana/" title="View my Codepen" target="_blank"><i class="fi-annotate social"></i></a>

		<a href="http://seeyourveines.com/" title="Visit my blog" target="_blank"><i class="fi-skull social"></i></a>
	</div>

	<div class="large-6 medium-6 small-12 columns text-right navlinks">
		<a href="index.html">Home</a>

		<a class="active" href="contact.php">Contact</a>

		<a href="portfolio.html">Portfolio</a>
	</div>
</nav>

<div id="contact" class="compress">
	<div class="large-12 medium-12 small-12">
		<div class="row text-center">
			<h2>Contact Me</h2>
		</div>

		<?php 

		//inputs
			$name = $_POST['name'];
			$email = $_POST['email'];
			$message = $_POST['message'];

		if (isset($name) && isset($email) && isset($message)) {
			//init error array.
			$errors = array();

			//name
			if(!empty($name)) {
				$pattern = "/^[a-zA-Z0-9\_]{2,20}/";

				if (preg_match($pattern, $name)) {
					$name = $name;
				} else {
					$errors[] = 'Your name is the wrong format';
				}

			} else {
				$errors[] = 'Please fill out your name';
			};

			//email
			if(!empty($email)) {
				$pattern = "^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$";

				if (preg_match($pattern, $email)) {
					$email = $email;
				} else {
					$errors[] = 'Your email is the wrong format';
				}
			} else {
				$errors[] = 'Please fill out your email';
			};

			//name
			if(!empty($message)) {
				$pattern = "/^[a-zA-Z0-9\_]{2,20}/";

				if (preg_match($pattern, $message)) {
					$message = $message;
				} else {
					$errors[] = 'Your message is the wrong format';
				}

			} else {
				$errors[] = 'Please fill out the message';
			};

			//email vars
			$to = "KerickTatiana@gmail.com";
			$subject = "From Portfolio";

			$message = "Email message from portfolio\n From: " . $name . "\n Message:\n " . $message . "\n reply to: " . $email;

			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type text/html; charset=iso-8859-1" . "\r\n";
			$headers .= "From: " . $email . "\r\n";

			if(@mail($to, $subject, $message, $headers)) {
				echo "<div class='message sent'><p>Got your message!</p></div>";
			} else {
			  echo "<div class='message bad'><p>Mail Not Sent</p></div>";
			}
			
		}

		?>

		<form name="contactform" method="post" id="contactform">
				
			<div class="row">
				<div class="large-6 medium-6 small-12 columns">
					<label>
						<input type="text" name="name" id="name" placeholder="name" required />
					</label>
				</div>

				<div class="large-6 medium-6 small-12 columns">
					<label>
						<input type="text" name="email" id="email" placeholder="email" required />
					</label>
				</div>
			</div><!-- row -->

			<div class="row">
				<div class="large-12 medium-12 small-12 columns">
					<label>
						<textarea name="message" id="message" class="styled" placeholder="testing" required rows="5"></textarea>
	      			</label>
	    		</div>
			</div><!-- row -->

			<div class="row">
				<div class="large-12 medium-12 small-12 columns text-right">
		    		<input type="submit" class="button expand" value="Send">
		    	</div>
			</div><!-- row -->
		
		</form>

	</div>
</div>

<script src="js/vendor/jquery.min.js"></script>
<script src="js/vendor/what-input.min.js"></script>
<script src="js/foundation.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>