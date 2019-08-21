<?php 

$email = $_POST['email'];

if( isset($_POST['receiveCoupons']) ) 
{
	$receiveCoupons = $_POST['receiveCoupons'];
}
else {
	$receiveCoupons = false; 
}

$message = $_POST['message'];


require 'Emailer.php';

$businessEmail = new Emailer();

$businessEmail->setMessageLine($email . " <br /> " . $receiveCoupons . " <br /> " . $message); //loaded a value into the object
	
$businessEmail->setSenderAddress("webtlrichards@tlrichards.com");

$businessEmail->setSendToAddress("tlrichards4@dmacc.edu" . $email);

$businessEmail->setSubjectLine("Coffee Design");

$validEmail = $businessEmail->sendPHPEmail();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Contact Coffee Designs</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">

	<style>
		body {
    		font-family: 'Doris',sans-serif ;
    		background-color: #dfbe9f;
		}

		.emailInfo {
    		margin: 0 auto;
    		width: 45%;
		}

		h3 {
    		color: #fa6690;
    		text-align: center;
		}

		p {
   			color: #603f20;
    		text-align: center;
		}

		.errorMsg {
    		margin: 0 auto;
    		width: 35%;
		}

		a {
			color: white;
		}

		a:hover {
			color: #603f20;
			text-decoration: none;
		}

		.btn-color {
    		background-color: #cc9766;
    		color: white;
		}

		#emailButton {
    		display: flex;
    		justify-content: center;
		}
	</style>
</head>

<body>
	<?php
		if($validEmail) {
	?>
	<div class="emailInfo">
		<p>Thank you for your email. We will respond as soon as possible.</p>
		
		<h3>Here is what your email contains</h3>
		<p>Send to: <?php echo $businessEmail->getSendToAddress(); ?></p>
		<p>Subject Line: <?php echo $businessEmail->getSubjectLine(); ?></p>
		<p>Your email message is: <?php echo $businessEmail->getMessageLine(); ?></p>

		<a href="coffeeDesignHome.html" class="btn btn-color" role="button" id="emailButton">Return to Coffee Designs</a>
	</div>
	<?php
		}
		else {
	?>
	<div class="errorMsg">
		<p>We are sorry. There has been a problem with our system. Please try again.</p>
		<a href="contactCoffeeDesign.html" class="btn btn-color" role="button" id="emailButton">Return to Contact Page</a>
	<div>
	<?php
		}
	?>

</body>
</html>