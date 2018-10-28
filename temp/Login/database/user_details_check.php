<?php
  //session_start();
  include_once 'database_config.php';

  function checkUser($email,$password)
  {
    global $con;
    $sql = "select first_name,email,password from `user_details` where email='".$email."' AND password='".$password."'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);

    if(is_null($row)){
        return false;
    }
    $_SESSION['first_name'] = $row['first_name'];
    return true;
  }

  function isUserAlredyRegistered($email)
  {
    global $con;
    $sql = "select email from `user_details` where email='".$email."'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
     if(is_null($row)){
        return false;
    }
    return true;

  }
  ?>