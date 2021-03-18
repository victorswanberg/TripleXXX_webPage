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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
  
</body>
</html>