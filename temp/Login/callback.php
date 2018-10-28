<?php

require_once "loginLinkedIn.php";
$user = getCallBack();
$_SESSION['logincust'] = 'yes';
$_SESSION['first_name'] = $user->firstName;
$_SESSION['last_name'] = $user->lastName;
$_SESSION['email'] = $user->emailAddress;
$_SESSION['headline'] = $user->headline;
$_SESSION['industry'] = $user->industry;
$_SESSION['oauth_provider'] = 'Linkedin';
$_SESSION['oauth_uid'] = $user->id;  
header("Location: redirectToHome.php");
?>