<?php
	include_once 'src/Google_Client.php';
	include_once 'src/contrib/Google_Oauth2Service.php';
	
	// Edit Following 3 Lines
	$clientId = '258192814548-965o22t0r14hhq283g7paa44omtku7jt.apps.googleusercontent.com'; //Application client ID
	$clientSecret = 'YZR0oEIdni4aJcioBcxaGk90'; //Application client secret
	$redirectURL = 'http://amanecer.tech/Login/login.php'; //Application Callback URL
	
	$gClient = new Google_Client();
	$gClient->setApplicationName('Your Application Name');
	$gClient->setClientId($clientId);
	$gClient->setClientSecret($clientSecret);
	$gClient->setRedirectUri($redirectURL);
	$google_oauthV2 = new Google_Oauth2Service($gClient);
?>