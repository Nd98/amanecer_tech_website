<?php
session_start();
require 'sendgrid/SendGrid-API/send-email.php';
$otp = send_email();
if(isset($_POST['submit'])){
	if($_SESSION['otp'] = $_POST['otp']){
		$_SESSION['verified'] = true;
		header("Location: redirectToHome.php");
	}
	else{
 	echo "<script>alert('Wrong OTP')</script>";
 }

 }

 else if(isset($_POST['send_again'])){
 	$otp = send_email();
 }

 else if(isset($_POST['cancel'])){
 	$_SESSION['verified'] = false;
 	header("Location: redirectToHome.php");
 }

 

	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Email Verification</title>
</head>
<body>
	<form method="POST">
		<h2>Verify Your Email</h2>
		<input type="number" name="otp" placeholder="Enter OTP">
		<input type="submit" name="submit" value="submit">
		<input type="submit" name="send_again" value="Send OTP Again">
		<input type="submit" name="cancel" value="I will do it later">
	</form>
</body>
</html>