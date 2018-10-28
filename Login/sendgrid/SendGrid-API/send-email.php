<?php
/*SendGrid Library*/
require_once ('vendor/autoload.php');

/*Post Data*/
function send_email()
{
	$name = $_SESSION['first_name'];
	$email = $_SESSION['email'];
	$otp = random_int(100000, 999999); 
	$message = "Your OTP is: {$otp}";
	$_SESSION['otp'] = $otp;

	/*Content*/
	$from = new SendGrid\Email("admin", "bptpgt@gmail.com");
	$subject = "Verification";
	$to = new SendGrid\Email("$name", "$email");
	$content = new SendGrid\Content("text/html", "

	<h2> {$message} </h2>
	");

	/*Send the mail*/
	$mail = new SendGrid\Mail($from, $subject, $to, $content);
	$apiKey = ('');
	$sg = new \SendGrid($apiKey);

	/*Response*/
	$response = $sg->client->mail()->send()->post($mail);

	//var_dump($response);
	return $otp;

}
?>

