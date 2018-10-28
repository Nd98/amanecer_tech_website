<?php

	include_once 'database/user_details_add.php';
	include_once 'database/user_details_get.php';
	$email = addUser();
	$type = getUserType($email);

	if($type=='user'){
		header("Location: ../user.php");
	}
	else if($type=='admin'){
		header("Location: ../admin.php");
	}
	else{
		echo "There is some issue with the Server";
	}
	
?>
