<?php
/*SendGrid Library*/
require_once ('vendor/autoload.php');

/*Post Data*/
function send_email()
{
	$name = "Nayan";
	$email = "bptpgt@gmail.com";
	$message = "Hey";

	/*Content*/
	$from = new SendGrid\Email("Nayan Dagliya", "bptpgt@gmail.com");
	$subject = "SUBJECT";
	$to = new SendGrid\Email("pgt g", "nayandagliya1998@gmail.com");
	$content = new SendGrid\Content("text/html", "

	Email: {$email}<br>
	Name: {$name}<br>
	Message: {$message}
	");

	/*Send the mail*/
	$mail = new SendGrid\Mail($from, $subject, $to, $content);
	$apiKey = ('');
	$sg = new \SendGrid($apiKey);

	/*Response*/
	$response = $sg->client->mail()->send()->post($mail);

	var_dump($response);
	return $otp;

}
?>

