<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title></title>

	<link rel="stylesheet" href="css/foundation.min.css" />

	<link rel="stylesheet" type="text/css" href="css/app.css">

	<!-- fonts -->
  	<link rel="stylesheet" type="text/css" href="lib/fonts/foundation-icons.css">

    <script src="js/vendor/modernizr.js"></script>
</head>
<body>

<div class="top-link">
	<div class="compress">
		<div class="large-6 columns text-left">
			<a href="https://www.linkedin.com/in/tatianakerick" title="I'm professional here" target="_blank"><i class="fi-social-linkedin social"></i></a>

			<a href="https://github.com/MissTatiana" title="I push my code here" target="_blank"><i class="fi-social-github social"></i></a>

			<a href="https://twitter.com/Miss_Tatianax" title="I'm funny here" target="_blank"><i class="fi-social-twitter social"></i></a>
		</div>

		<div class="large-6 columns text-right">
			<a href="assets/pdf/KerickTatiana_Resume.pdf" title="See my resume" target="_blank"><i class="fi-page-pdf social"></i></a>

			<a href="mailto:KerickTatiana@gmail.com">KerickTatiana@gmail.com</a>
		</div>
	</div>
</div><!-- top-links -->

<div class="nav">
	<div class="compress">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="portfolio.html">My Work</a></li>
			<li><a class="active" href="contact.php">Contact Me</a></li>
		</ul>
	</div>
</div><!-- nav -->

<div id="contact">
	<div class="compress">
		<div class="row">
			<h2>Send me an email</h2>
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
				echo "<div class='message sent'><p>Got your message, I'll get to you as soon as possible</p></div>";
			} else {
			  echo "<div class='message bad'><p>Mail Not Sent</p></div>";
			}
			
		}

		?>

		<form name="contact" method="post">
				
				<div class="row">
					<div class="large-6 columns">
						<label>Name
							<input type="text" name="name" id="name" required />
						</label>
					</div>

					<div class="large-6 columns">
						<label>Email
							<input type="text" name="email" id="email" required />
						</label>
					</div>
				</div><!-- row -->

				<div class="row">
					<div class="large-12 columns">
						<label>Message:
							<textarea name="message" id="message" class="styled" required rows="5"></textarea>
		      	</label>
		    	</div>
				</div><!-- row -->

			<div class="row">
				<div class="large-12 columns">
		    	<input type="submit" class="button expand" value="Send">
		    </div>
			</div><!-- row -->
		
		</form>
	</div>
</div>


<script src="js/vendor/jquery.js"></script>

<script src="js/foundation.min.js"></script>
<script>
  $(document).foundation();
</script>

<script src="js/script.js"></script>
</body>
</html>