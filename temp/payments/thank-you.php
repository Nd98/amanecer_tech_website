<?php
	session_start();
	include_once '../Login/Database/database_config.php';
	$email = $_SESSION['email'];
	$amount = $_SESSION['amount'];
	global $con;
	$sql="INSERT INTO `transaction_details` ( `email`, `amount`) VALUES ('".$email."', '".$amount."')";
	mysqli_query($con,$sql);
	echo "<div style='text-align:center'>";
			echo "<img src=../images/redirect.gif alt='redirecting'/>";
			echo "<h2>Thank You<br>Redirecting you to our home page</h2>";
			echo "</div>";
			//session_unset();
			if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
			$uri = 'https://';
			} else {
				$uri = 'http://';
			}
			$uri .= $_SERVER['HTTP_HOST'];
			//header('Location: '.$uri.'/Design/consulting/payments/Pay.html');
			echo "<script>window.setTimeout(function(){
        		window.location.href = '../index.php';
    			}, 5000);</script>";
			exit;
?>
