<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tatiana Kerick | Porfolio</title>

	<!-- css -->
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">


</head>
<body>
<div class="centerwrapper">

	<div class="navigation">
	<ul class="nav">
		<li data-slide="1">Slide 1</li>
		<li data-slide="2">Slide 2</li>
		<li data-slide="3">Slide 3</li>
		<li data-slide="4">Slide 4</li>
	</ul>
	</div>

	<div class="slide" id="slide1" data-slide="1" data-stellar-background-ratio="0.5">
		<div class="wrapper">
		
			<!-- techically first child  -->
			<img id="logo" class="opacity" src="assets/img/logo.png">

			
			<!-- 2 html -->
			<img class="lang" src="assets/img/langs/html.png" data-stellar-ratio="1.4" data-stellar-vertical-offset="-700" alt="" />
			<!-- 3 css -->
			<img class="lang" src="assets/img/langs/css.png" data-stellar-ratio="2" data-stellar-vertical-offset="-400" alt="" />
			<!-- 4 bootstrap -->
			<img class="lang" src="assets/img/langs/bootstrap.png" data-stellar-ratio="1.3" data-stellar-vertical-offset="-400" alt="" />
			<!-- 5 javascript -->
			<img class="lang" src="assets/img/langs/javascript.png" data-stellar-ratio="2.7" data-stellar-vertical-offset="-200" alt="" />
			<!-- 6 jquery -->
			<img class="lang" src="assets/img/langs/jquery.png" data-stellar-ratio="3" data-stellar-vertical-offset="-200" alt="" />
			<!-- 7 angular -->
			<img class="lang" src="assets/img/langs/angular.png" data-stellar-ratio="3" data-stellar-vertical-offset="-200" alt="" />
			<!-- 8 mysql  -->
			<img class="lang" src="assets/img/langs/mysql.png" data-stellar-ratio="2" data-stellar-vertical-offset="-200" alt="" />
			<!-- 9 mongo -->
			<img class="lang" src="assets/img/langs/mongo.png" data-stellar-ratio="3" data-stellar-vertical-offset="150" alt="" />
			<!-- 10 php -->
			<img class="lang" src="assets/img/langs/php.png" data-stellar-ratio="2.5" data-stellar-vertical-offset="150" alt="" />
			<!-- 11 codeigniter -->
			<img class="lang" src="assets/img/langs/codeIgniter.png" data-stellar-ratio="1.7" data-stellar-vertical-offset="-200" alt="" />
			<!-- 12 cake -->
			<img class="lang" src="assets/img/langs/cake.png" data-stellar-ratio="2" data-stellar-vertical-offset="-100" alt="" />
			<!-- 13 git -->
			<img class="lang" src="assets/img/langs/git.png" data-stellar-ratio="1.5" data-stellar-vertical-offset="-200" alt="" />

		</div><!-- wrapper -->

		<a class="button" data-slide="2" title=""></a>
	</div><!-- slide1 -->

	<div class="slide" id="slide2" data-slide="2" data-stellar-background-ratio="0.5">
		
		<h3>Previous Work</h3>

		<div class="wrapper">

			<div class="content">
				
				<div class="bg">
					<div class="imgContainer">
						<!-- <img src="assets/sites/flipbook.png"> -->
					</div><!-- imgContainer -->
				</div>

				<div class="info">

				</div><!-- info -->
			</div><!-- content -->

		</div><!-- wrapper -->

		<a class="button" data-slide="3" title=""></a>
	</div><!-- slide2 -->

	<div class="slide" id="slide3">
		
		<h3>Contact me</h3>

		<ul class="contact">
			<li><a href="https://github.com/MissTatiana">GitHub</a></li>
			<li><a href="https://www.linkedin.com/profile/view?id=293915524&trk=nav_responsive_tab_profile_pic">LinkedIn</a></li>
			<li><a href="">Resume</a></li>
		</ul>

		<form id="contact" name="contact">
			<!-- first name -->
			<div>
				<label for="firstname">First name:</label>
				<input type="text" name="firstname" id="firstname" required="required">
			</div>

			<!-- last name -->
			<div>
				<label for="lastname">Last name:</label>
				<input type="text" name="lastname" id="lastname" required="required">
			</div>

			<!-- subject -->
			<div>
				<label for="subject">Subject:</label>
				<input type="text" id="subject" name="subject" required="required">
			</div>

			<!-- message -->
			<div>
				<label for="message">Message:</label>
				<textarea id="message" name="message"></textarea>
			</div>

			<input type="submit" class="btn" id="submit" value="Send Message">
		</form>


		<div class="wrapper">

		</div><!-- wrapper -->

	</div><!-- slide3 -->


</div><!-- centerwrapper -->

<!-- js -->	
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/query.easing.1.3.js"></script>
<script src="js/script.js"></script>

</body>
</html>