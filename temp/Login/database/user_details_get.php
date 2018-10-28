<?php
	include_once 'database_config.php';

	function getUserType($email){
		global $con;
		$sql = "select type from `user_details` where email='".$email."'";
		$result = mysqli_query($con,$sql);
    	$row = mysqli_fetch_assoc($result);
    	$_SESSION['user_type'] = $row['type'];
    	return $row['type'];
	}
?>