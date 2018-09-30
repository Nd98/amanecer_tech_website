<?php

 if(!isset($_SESSION)){
		session_start();
	}

 $client_id = "812nyo897ao68o";
 $client_secret = "0LFIWKoJWaXtJZjQ";
 $redirect_uri = "http://amanecer.tech/Login/callback.php";
 $csrf_token = random_int(111111111,999999999);
 $scopes = "r_basicprofile%20r_emailaddress";

 function curl($url,$parameters)
 {
 	$ch = curl_init();
 	curl_setopt($ch, CURLOPT_URL, $url);
 	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 	curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);
 	curl_setopt($ch, CURLOPT_POST, 1);
 	$headers = [];
 	$headers[] = "Content-Type: application/x-www-form-urlencoded";
 	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 	$result = curl_exec($ch);
 	return $result;
 }

 function getCallBack()
 {
 	 $client_id = "812nyo897ao68o";
	 $client_secret = "0LFIWKoJWaXtJZjQ";
	 $redirect_uri = "http://amanecer.tech/Login/callback.php";
	 $csrf_token = random_int(111111111,999999999);
	 $scopes = "r_basicprofile%20r_emailaddress";

 	 if(isset($_REQUEST['code'])){
 	 	$code = $_REQUEST['code'];
 	 	$url = "https://www.linkedin.com/oauth/v2/accessToken";
 	 	$params = [
 	 		'client_id' => $client_id,
 	 		'client_secret' => $client_secret,
 	 		'redirect_uri' => $redirect_uri,
 	 		'code' => $code,
 	 		'grant_type' => 'authorization_code'
 	 	];

 	 	$accessToken = curl($url,http_build_query($params));
 	 	$accessToken = json_decode($accessToken)->access_token;

 	 	$url = "https://api.linkedin.com/v1/people/~:(id,first-name,last-name,formatted-name,date-of-birth,industry,email-address,location,headline,picture-urls::(original))?format=json&oauth2_access_token=".$accessToken;
 	 	$user = file_get_contents($url, false);
 	 	return json_decode($user);

 	 }
 }