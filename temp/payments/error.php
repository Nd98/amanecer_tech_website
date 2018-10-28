<?php
	session_start();
	echo "<div style='text-align:center'>";
			echo "<img src=../images/redirect.gif alt='redirecting'/>";
			echo "<h2>There was some error in transaction<br>Redirecting you to home page</h2>";
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
