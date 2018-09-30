<?php
	$host="localhost";
  	$user="amanecer_root";
  	$password="=1{~cn\$Jh?-B";
  	$db="amanecer_db";

  	$con = mysqli_connect($host,$user,$password);

  	if (mysqli_connect_errno())
    	{

    		echo "Failed to connect to MySQL: " . mysqli_connect_error();
    	}

  	mysqli_select_db($con,$db);
?>