<?php
  session_start();

  include_once 'database_config.php';

  function addUser()
  {
     global $con;
    if(isset($_SESSION['logincust'])){
      $authid = $_SESSION['oauth_uid'];
      $first_name = $_SESSION['first_name'];
      $last_name = $_SESSION['last_name'];
      $email = $_SESSION['email'];
      $authprovider = $_SESSION['oauth_provider'];
    	$sql="INSERT INTO `user_details` ( `first_name`, `last_name`, `email`, `auth_id`, `auth_provider`) VALUES ('".$first_name."', '".$last_name."', '".$email."','".$authid."', '".$authprovider."')";
    }
    else if(isset($_SESSION['register'])){
      $first_name = $_SESSION['first_name'];
      $last_name = $_SESSION['last_name'];
      $email = $_SESSION['email'];
      $phone_no = $_SESSION['mobile_no'];
      $password = $_SESSION['password'];
      $sql="INSERT INTO `user_details` ( `email`, `first_name`, `last_name`, `password`, `phone_no`) VALUES ('".$email."','".$first_name."', '".$last_name."', '".$password."', '".$phone_no."')";
    }
    else{
      return $_SESSION['email'];
    }
    mysqli_query($con,$sql);
    return $email;
  }

  ?>