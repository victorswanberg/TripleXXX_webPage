<!DOCTYPE html>
<html lang="en">

<?php

	$message_sent = false;

	if(isset($_POST['user_email'])&& $_POST['user_email'] != ''){

		if(filter_var($_POST['user_email'],FILTER_VALIDATE_EMAIL)&& $_POST['user_message']!=''){
			$userName = $_POST['user_name'];
			$userEmail = $_POST['user_email'];
			$userMessage = $_POST['user_message'];

			$to = "chaselones@gmail.com";
			$subject = "message from site";
			$body = "";

			$body .= "From: ".$userName. "\r\n";
			$body .= "Email: ".$userEmail. "\r\n";
			$body .= "Message: ".$message. "\r\n";

			mail($to,$subject,$body);
			$message_sent = true;
		}
	}
?>

<head>
    <!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- build: css css/main.css-->
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link rel="stylesheet" href="/css/styles.css" />
	<!-- endbuild -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster|Open+Sans" />
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<title>Contact Triple X Rootbeer</title>
</head>

<body>

<?php
		if($message_sent):
	?>

	<h1>THANK YOU FOR YOUR FEEDBACK!  YOUR MESSAGE HAS BEEN SENT!</h1>

	<?php
	else:
	?>

	<form class="row text-center" id="contactForm" action="contact.php" method="POST">
		<div class="col-12 form-group">
			<label for="user_name">
				<h3>Your name:</h3>
			</label>
			<input id="user_name" type="text" class="mx-auto form-control col-6" placeholder="Your Name" name="user_name">
		</div>
		<div class="form-group col-12">
			<label for="user_email">
				<h3>Your Email:</h3>
			</label>
			<input type="email" class="mx-auto form-control col-6" id="user_email" placeholder="name@example.com" name="user_email">
		</div>
		<div class="form-group col-12">
			<label for="user_message">
				<h3>Comments/Questions:</h3>
			</label>
			<textarea class="mx-auto form-control col-6" id="user_message" rows="3" name="user_message"></textarea>
		</div>
		<div class="form-group col-12">
			<button class="btn btn-danger btn-lg" type="submit">Submit</button>
		</div>
	</form>

	<?php
	endif;
	?>

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script src="js/scripts.js"></script>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="TgGkLoaM"></script>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0"
		nonce="TgGkLoaM"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
	<script src="js/scripts.js"></script>
  
</body>
</html>