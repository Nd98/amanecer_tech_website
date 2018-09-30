<?php
    session_start();

    include_once 'database/user_details_check.php';


    if(isset($_SESSION['logincust']) OR isset($_SESSION['register']) OR isset($_SESSION['login']))
    {
        header('Location: redirectToHome.php');
    }
    else{
        session_unset();
    }


    include_once 'loginG.php';
    include_once 'loginLinkedIn.php';
    
    if(isset($_GET['code'])){
        $gClient->authenticate($_GET['code']);
        $_SESSION['token'] = $gClient->getAccessToken();
        header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
    }
    if (isset($_SESSION['token'])) {
        $gClient->setAccessToken($_SESSION['token']);
    }
    if ($gClient->getAccessToken()) 
    {
        $gpUserProfile = $google_oauthV2->userinfo->get();
        $_SESSION['oauth_provider'] = 'Google'; 
        $_SESSION['oauth_uid'] = $gpUserProfile['id']; 
        $_SESSION['first_name'] = $gpUserProfile['given_name']; 
        $_SESSION['last_name'] = $gpUserProfile['family_name']; 
        $_SESSION['email'] = $gpUserProfile['email'];
        $_SESSION['logincust']='yes';
    } else {
        $authUrl = $gClient->createAuthUrl();
        $output= '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'"><img src="images/loging.png" alt="Sign in with Google+" width=180 height=35/></a>';
    }
    
    $redirectURL_linkedin = "https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id={$client_id}&redirect_uri={$redirect_uri}&state={$csrf_token}&scope={$scopes}";


    if(isset($_POST['register-submit'])){
        if($_POST['password']!=$_POST['confirm_password']){
            echo "<script>alert('Password dont match');</script>";
        }
        else if(isUserAlredyRegistered($_POST['email'])){
            echo "<script>alert('User Already Registered');</script>";
        }
        else{
            $_SESSION['register'] = "yes";
            $_SESSION['first_name'] = $_POST['first_name'];
            $_SESSION['last_name'] = $_POST['last_name'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['mobile_no'] = $_POST['mobile_no'];
            $_SESSION['password'] = md5($_POST['password']);
            header('Location: redirectToHome.php');
        }
    }


    if(isset($_POST['login-submit'])){
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        if(checkUser($email,$password)){
            $_SESSION['login'] = "yes";
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header('Location: redirectToHome.php');
        }
        else{
            echo "<script>alert('Login Failed');</script>";
        }

    }
?>
<html>
    <head>
        <link href="Main.css" rel="stylesheet"/>
        <script src="jquery-1.10.2.min.js"></script>
        <script src="JQUERY%20Main.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div id="box">
            <div id="main"></div>
            <div id="loginform">
                <h3 hidden="true" id="login-failed" style="text-align: center;color: red">Login Failed</h3>
                <h1>LOGIN</h1>
                <form method="POST">
                    <input type="email" name="email" required="required" placeholder="Email"/><br>
                    <input type="password" name="password" required="required" placeholder="Password"/><br>
                    <div style="margin-top: 15px;text-align: center;">
                    <a href="" style="text-align: center; margin-top: 10px;text-decoration: none">Forgot Password?</a>
                    </div>
                    <button name="login-submit" name="sign_in">LOGIN</button>
                </form>
            </div>
            
            <div id="signupform">
                <h3 hidden="true" id="already-signup" style="text-align: center;color: red">User Already Registered</h3>
                <h3 hidden="true" id="password-don't-match" style="text-align: center;color: red">Password Don't Match</h3>
                <h1>SIGN UP</h1>
                <form method="POST">
                    <input type="name" required="required" name="first_name" placeholder="First Name"/><br>
                    <input type="text" required="required" name="last_name" placeholder="Last Name"/><br>
                    <input type="email" required="required" name="email" placeholder="Email"/><br>
                    <input type="text" required="required" name="mobile_no" placeholder="Mobile No."/><br>
                    <input type="password" required="required" name="password" placeholder="Password"/><br>
                    <input type="password" required="required" name="confirm_password" placeholder="Confirm Password"/><br>
                    <button name="register-submit" name="sign_up">SIGN UP</button>
                </form>
            </div>
            
            <div id="login_msg">Have an account?</div>
            <div id="signup_msg">Don't have an account?</div>
            
            <button  id="login_btn">LOGIN</button>
            <button  id="signup_btn">SIGN UP</button>
            
        </div>
        <div style="text-align: center;position: relative;">
        &nbsp;&nbsp;

        <?php
            echo '<a href="loginFB.php"><img src="images/loginfb.png" alt="Login with Facebook" width=180 height=35></a>';
            echo '&nbsp&nbsp';
            echo $output;
            echo '&nbsp&nbsp';
            echo '<a href='.$redirectURL_linkedin.'><img src="images/loginli.png" alt="Login with Linkedin" width=180 height=35></a>';
            echo '&nbsp&nbsp';
        ?>
    </div>
    </body>
</html>