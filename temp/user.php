<?php 
	session_start();
	if(isset($_POST['submit'])){
		$_SESSION['amount'] = $_POST['amount'];
		header('Location: payments/pay.php');
	}
	
	if(isset($_POST['logout'])){
		session_unset();
		session_destroy();
		header('Location: index.php');
	}

	  if(!isset($_SESSION['logincust']) AND !isset($_SESSION['register']) AND !isset($_SESSION['login']))
    {
        header('Location: index.php');
    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="images/amanecer_logo.jpg">
<title>Amanecer Tech PVT. LTD.</title>
<!-- Bootstrap core CSS -->
<link href="css/plugins/bootstrap.min.css" rel="stylesheet">
<link href="css/plugins/bootstrap-submenu.css" rel="stylesheet">
<link href="css/plugins/animate.min.css" rel="stylesheet">
<link href="css/plugins/slick.css" rel="stylesheet">
<link href="css/plugins/magnific-popup.css" rel="stylesheet">
<link href="css/plugins/bootstrap-datetimepicker.css" rel="stylesheet">
<link href="css/c.css" rel="stylesheet">
<link rel="stylesheet" href="icofont/icofont.min.css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- Icon Font-->
<link href="iconfont/style_font.css" rel="stylesheet">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Chivo:400,400i,900,900i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<!-- Google map -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
</head>
<body class="home">
<!-- Header -->
<header class="page-header sticky">
<!-- Fixed navbar -->
<nav class="navbar" id="slide-nav">
<div class="container">
<div id="slidemenu" data-hover="dropdown" data-animations="fadeIn">
    <ul class="nav navbar-nav">
        <li class="active"><a href="#" class="shadow-effect">Home</a></li>
        <li><a href="#category" class="shadow-effect">Categories</a></li>
        <li><a href="#services" class="shadow-effect">Services</a></li>
        <li><a href="#about_us" class="shadow-effect">About US</a></li>
        <li><a href="#testimonials" class="shadow-effect">Testimonials</a></li>
        <li><a href="#why_us" class="shadow-effect">Why US?</a></li>
        <li><a href="#contact_us" class="shadow-effect">Contact US</a></li>
    </ul>
</div>
<div class="navbar-header">
<div class="mobile-topline">
<button type="button" class="navbar-toggle"><i class="icon icon-interface icon-menu"></i><i class="icon icon-cancel"></i></button>
<div class="phone-number"><span>+1866-217-0652</span></div>
</div>
<div class="header-top">
<div class="row">
<div class="col-sm-6">
<div class="logo">
<a href="index.php"><span class="hidden-xs"><img src="images/l1.png" alt="amanecer"></span>
<span class="visible-xs"><img src="images/l1.png" alt="amanecer"></span>
</a>
</div>
</div>
<div class="col-sm-6">
<div class="phone">
<div class="phone-wrapper">
<div class="under-number">Need tech support?</div>
<div class="number"><span>+1866-217-0652</span></div>
</div>
<div class="right-text">
<div class="item arrow animation" data-animation="rotateInUpRight" data-animation-delay="0.5s" data-animation = "mymove infinite" data-animation-duration = "3s"><img src="images/call-us-arrow-1.png" alt=""></div>
<div class="item arrow animation" data-animation="rotateInUpRight" data-animation-delay="0.5s" data-animation = "mymove infinite" data-animation-duration = "5s"><img src="images/call-us-arrow-2.png" alt=""></div>
<div class="item arrow animation" data-animation="rotateInUpRight" data-animation-delay="0.5s" data-animation = "mymove infinite" data-animation-duration = "7s"><img src="images/call-us-arrow-3.png" alt=""></div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
</nav>
</header>
<!-- // Header -->
<!-- Content -->
<div id="page-content">
<!-- Slider -->
		<div id="mainSliderWrapper">
			<div id="mainSlider">
				<div class="slide">
					<div class="img--holder" style="background-image: url(images/slider/s1.jpg);"></div>
						<div class="slide-content center">
							<div class="vert-wrap">
								<div class="vert">
									<h3 data-animation="fadeInUp" data-delay="0s">We are <span>Satisfied</span></h3>
									<h4 data-animation="fadeInUp" data-delay="0.25s">with Our Work</h4>
									<p data-animation="fadeInUp" data-delay="0.5s">We can handle just about any tech question or computer repair that comes our way.</p>
									<div class="btn-inline">
									<p data-animation="fadeInUp" data-delay="0.75s"><a href="#" class="btn btn-invert" data-toggle="modal" data-target = "#exampleModal" style="background-color: white;color: darkgreen; font-style: normal;opacity: 0.8">pay now</a>
									    <a href="logout.php" class="btn form-popup-link modal-popup-link">Logout</a>
							
										</p>
									</div>
								</div>
							</div>
						</div>
				</div>
				<div class="slide">
					<div class="img--holder" style="background-image: url(images/slider/3.jpg);"></div>
						<div class="slide-content center">
							<div class="vert-wrap">
								<div class="vert">
									<h3 data-animation="fadeInUp" data-delay="0s">Best <span>Antivirus</span> solution</h3>
									<h4 data-animation="fadeInUp" data-delay="0.25s">Power for you</h4>
									<p data-animation="fadeInUp" data-delay="0.5s"><span>Light weight</span> & <span>intuitive protection</span> powered by next generation cyber security for alll
</p>
								<div class="btn-inline">
									<p data-animation="fadeInUp" data-delay="0.75s"><a href="#" class="btn btn-invert" data-toggle="modal" data-target = "#exampleModal" style="background-color: white;color: darkgreen; font-style: normal;opacity: 0.8">pay now</a>
									     <a href="logout.php" class="btn form-popup-link modal-popup-link">Logout</a>
							
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="slide">
					<div class="img--holder" style="background-image: url(images/slider/slide2.jpg);"></div>
						<div class="slide-content center">
							<div class="vert-wrap">
								<div class="vert">
									<h3 data-animation="fadeInUp" data-delay="0s"><span>PC Support</span> that’s there</h3>
									<h4 data-animation="fadeInUp" data-delay="0.25s">Before You Need it.</h4>
									<p data-animation="fadeInUp" data-delay="0.5s">The best way to fix your PC problems</p>
									<div class="btn-inline">
									<p data-animation="fadeInUp" data-delay="0.75s"><a href="#" class="btn btn-invert" data-toggle="modal" data-target = "#exampleModal" style="background-color: white;color: darkgreen; font-style: normal;opacity: 0.8">pay now</a>
									    <a href="logout.php" class="btn form-popup-link modal-popup-link">Logout</a>
									</p>
								</div>
								
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Enter an Amount to Pay</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				      	<form name="enter_amount" method="POST">
						    <input type="number" placeholder="Enter an amount to pay in USD" class="form-control" name="amount" value="">
						    <br />
						    <input value="Pay Now" border="0" name="submit" type="submit">
						</form>
				      </div>
				    </div>
				  </div>
				</div>	
<!-- /#slick -->
<div id="category"></div>
</div>
<!-- Slider -->
<!-- Category Block -->
<div class="block">
<div class="container">
<div class="row category-carousel">
<div class="col-sm-4">
    <div class="category-block animation" data-animation="zoomIn" data-animation-delay="0s">
        <div class="image">
            <img src="images/antivirus3.jpg" alt="">
        </div>
        <div class="image_hover color">
            <div class="vert-wrap">
                <div class="vert">
                    <p>Our Antivirus softwares are designed to prevent computer infections by detecting malicious software, commonly called malware, on your computer and, when appropriate, removing the malware and disinfecting the computer.</p>
                    <p><a href="#services" class="btn btn-sm">More info</a></p>
                </div>
            </div>
        </div>
        <div class="caption top">
            <div class="vert-wrap">
                <div class="vert">
                    <h3 class="name">Antivirus</h3>
                    <p>Solution</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-4" style = "">
    <div class="category-block animation" data-animation="zoomIn" data-animation-delay="0s">
        <div class="image">
            <img src="images/category-img-01.jpg" alt="">
        </div>
        <div class="image_hover color">
            <div class="vert-wrap">
                <div class="vert">
                    <p>Amanecer Tech specializes in repairs of all kinds of Apple products including, MacBooks, iMacs, Mac Pros, Macbook retina and Mac Mini’s. We only Use Original Apple Parts we will never install a knock off part into your Mac product.</p>
                    <p><a href="#services" class="btn btn-sm">More info</a></p>
                </div>
            </div>
        </div>
        <div class="caption top">
            <div class="vert-wrap">
                <div class="vert">
                    <h3 class="name">Apple & <br>Mac</h3>
                    <p>Repair</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-4">
<div class="category-block animation" data-animation="zoomIn" data-animation-delay="0s">
<div class="image">
<img src="images/category-img-02.jpg" alt="">
</div>
<div class="image_hover color">
<div class="vert-wrap">
<div class="vert">
<p>While You Wait or Same Day Service If you decide not to proceed the repair of your laptop, we will pay you cash to buy it and return your hard drive or transfer data for you.</p>
<p><a href="#services" class="btn btn-sm">More info</a></p>
</div>
</div>
</div>
<div class="caption middle">
<div class="vert-wrap">
<div class="vert">
<h3 class="name white">Laptop</h3>
<p>Repair</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="category-block animation" data-animation="zoomIn" data-animation-delay="0s">
<div class="image">
<img src="images/category-img-03.jpg" alt="">
</div>
<div class="image_hover color">
<div class="vert-wrap">
<div class="vert">
<p>We service all makes and models of Computers. Most Computers are repaired same day with parts available in stock. We service all models including: HP, Apple, Acer, Lenovo/IBM, Dell, Samsung, Gateway, Asus, Alienware & more… </p>
<p><a href="#services" class="btn btn-sm">More info</a></p>
</div>
</div>
</div>
<div class="caption bottom">
<div class="vert-wrap">
<div class="vert">
<h3 class="name white">PC & Computer</h3>
<p>Repair</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- //Category Block -->
<!-- Get Now Block -->
<div class="block">
<div class="container">
<div class="text-center">
<h2 class="h-lg">Get <span class="color">Your Computer</span> Fixed NOW!</h2>
<h3 class="subtitle">+1866-217-0652</h3>
<p class="info">for one of our professional computer repair techs to help you with your Desktop, Laptop, Mac or other inquiry</p>
<div class="btn-inline">
<!--<a class="btn form-popup-link modal-popup-link" href="#modalForm1">Get your repair</a>-->
<button class="btn btn-invert">Contact Us</button></div>
</div>
</div>
<div id="services"></div>
</div>
<!-- //Get Now Block -->
<!-- Services Block -->
<div class="block bg-1 network-effect">
<canvas id="network"></canvas>
<div class="container">
<h2 class="h-lg text-center">All Computer <span class="color">& Tablet Services</span></h2>
<p class="info text-center">We can Solve your Hardware and Software Problems</p>
<div class="row text-icon-carousel">
<div class="col-sm-6 col-md-3">
<div class="text-icon animation" data-animation="scaleOut" data-animation-delay="0.5s">
<div class="icon-wrapper"><span><i class="icon icon-diag"></i><span class="icon-hover"></span></span>
</div>
<h4 class="title">Diagnosing Your Device</h4>
<p class="text">We will diagnose your issues, provide you with options and give you a price for FREE!</p>
</div>
</div>
<div class="col-sm-6 col-md-3">
<div class="text-icon animation" data-animation="scaleOut" data-animation-delay="0s">
<div class="icon-wrapper"><span><i class="icon icon-hard-disk"></i><span class="icon-hover"></span></span>
</div>
<h4 class="title">Software Installation</h4>
<p class="text">We can help you determine what hardware install or software installing solutions will best fit your needs. </p>
</div>
</div>
<div class="col-sm-6 col-md-3">
<div class="text-icon animation" data-animation="scaleOut" data-animation-delay="0s">
<div class="icon-wrapper"><span><i class="icon icon-repair"></i><span class="icon-hover"></span></span>
</div>
<h4 class="title">Professional Computer Repair</h4>
<p class="text">We fix all sorts of computer issues! From software to hardware we have the solution!</p>
</div>
</div>
<div class="col-sm-6 col-md-3">
<div class="text-icon animation" data-animation="scaleOut" data-animation-delay="0.5s">
<div class="icon-wrapper"><span><i class="icon icon-viruses"></i><span class="icon-hover"></span></span>
</div>
<h4 class="title">Virus & Spyware Removal</h4>
<p class="text">We work through a remote super-secure connection, and give you a full report when our work is done.</p>
</div>
</div>
</div>
</div>
<div id="about_us"></div>
</div>
<!-- //Services Block -->
<!-- Block -->
<div class="block">
<div class="container">
<div class="row">
<div class="col-md-6 animation" data-animation="fadeInLeft" data-animation-delay="0s">
<h2>About <span class="color">Us</span></h2>
<p class="info">Your Local Computer Specialist Servicing</p>
<p>Amanecer Tech is dedicated to providing the best customer service and computer repair available to you. When your Laptop, PC or Mac needs repairing, you won’t have to worry for long! Our technicians are skilled in dealing with all computers and gadgets whether you need home or business computer repairs.</p>
<ul class="marker-list">
<li>Microsoft Windows PC Computer Repair</li>
<li>Apple iMac and Macbook Computer Repair</li>
<li>Data Recovery</li>
<li>Viruses, Spyware, Adware and Ransom-ware Removal</li>
<li>Cracked and Broken Laptop Screen Replacements</li>
<li>Charging Issues, Charging Ports Repairs and Replacements</li>
<li>Computer Tune Ups, Hardware Repair, Installations</li>
<li>Printer Set Ups / Troubleshooting</li>
</ul>
</div>
<div class="divider visible-sm visible-xs"></div>
<div class="col-md-6 animation" data-animation="fadeInRight" data-animation-delay="0s">
<h2>Rajesh <span class="color">Mishra</span></h2>
<p class="info">Owner & CEO</p>
<div class="quote-form">
<p>Mr. Rajesh is a dynamic goal-oriented professional with eleven years of entrepreneurial experience in a full range of IT Services, Marketing and Business Consultations. Prior to founding Amanecer tech, He enjoyed a successful career in Consulting/Online  service Developments serving various small to mid-range clients across the globe since the age of 24.</p>
<p>It started when he utilized the potential of a computer with internet connection and created his own social networking website, through which he earned the knowledge which later inspired a lot of other individuals who wanted to build their dreams at that point in time, He realized his true potential of offering Repair services. He leads the Local and International Business team responsible for all client acquisitions and manages their successful introduction to Amanecer. He is committed to ensuring clients have a positive experience with Amanecer and he maintains an active role in the operational process and overall success beyond implementations.</p>
</div>
</div>
</div>
</div>
<div id="testimonials"></div>
</div>
<!-- //Block -->
<!-- Testimonials Block -->
<div class="block bg-2">
<canvas id="network"></canvas>
<div class="container">
<div class="testimonials">
<h2 class="h-lg text-center">Our <span class="color">Testimonials</span></h2>
<p class="info text-center">There are many valid reasons why you should choose us to take care of your valuable device</p>
<div class="row testimonials-carousel light-arrow">
<div class="testimonials-item col-sm-6 col-md-4 animation" data-animation="scaleOut" data-animation-delay="0.5s">
<div class="inside">
<h5>Laptop Repair</h5>
<div class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></div>
<div class="text">Problems I had with my laptop was sorted in very short time, reasonable price. Engineer provides good service. Recommended.</div>
<div class="username">– Michael P. Solomon</div>
</div>
</div>
<div class="testimonials-item col-sm-6 col-md-4 animation" data-animation="scaleOut" data-animation-delay="0s">
<div class="inside">
<h5>MacBook Repairs</h5>
<div class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></div>
<div class="text">My Macbook was repaired same day! These guys know what they are doing. Quick and professional. Recommended to everyone.</div>
<div class="username">– Ella H. Wells</div>
</div>
</div>
<div class="testimonials-item col-sm-6 col-md-4 animation" data-animation="scaleOut" data-animation-delay="0.5s">
<div class="inside">
<h5>Computer Repairs</h5>
<div class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></div>
<div class="text">I have used Amanecer Tech for a very long time and have always been pleased with the services and staff.</div>
<div class="username">– Frances J. Nicastro</div>
</div>
</div>
</div>
</div>
</div>
<div id="why_us"></div>
</div>
<!-- //Testimonials Block -->
<!-- Block -->
<div class="block bottom-md">
<div class="container">
<h2 class="text-center">Why Choose <span class="color">Us</span></h2>
<p class="info text-center">There are many valid reasons why you should choose us to take care of your valuable device</p>
<div class="text-icon-grid">
<div class="text-icon-squared animation" data-animation="fadeInUp" data-animation-delay="0s">
<div class="hover"></div>
<div class="caption">
<div class="icon-big"><span class="icon icon-manager"></span></div>
<h5 class="title">Experienced Professionals</h5>
<div class="text">We pride ourselves on being a professional computer repair facility</div>
</div>
</div>
<div class="text-icon-squared animation" data-animation="fadeInUp" data-animation-delay="0s">
<div class="hover"></div>
<div class="caption">
<div class="icon-big"><span class="icon icon-technology"></span></div>
<h5 class="title">Expert Technical Skills</h5>
<div class="text">Our technical experts will get you honest, reliable and professional help </div>
</div>
</div>
<div class="text-icon-squared animation" data-animation="fadeInUp" data-animation-delay="0s">
<div class="hover"></div>
<div class="caption">
<div class="icon-big"><span class="icon icon-talk"></span></div>
<h5 class="title">Trustworthy See Reviews</h5>
<div class="text">Our business has been built on trust and customer satisfaction</div>
</div>
</div>
<div class="text-icon-squared animation" data-animation="fadeInUp" data-animation-delay="0s">
<div class="hover"></div>
<div class="caption">
<div class="icon-big"><span class="icon icon-hand-shake"></span></div>
<h5 class="title">Friendly Service</h5>
<div class="text">Most of the services below are repaired within hours, and in most cases same day!</div>
</div>
</div>
<div class="text-icon-squared animation" data-animation="fadeInUp" data-animation-delay="0s">
<div class="hover"></div>
<div class="caption">
<div class="icon-big"><span class="icon icon-signs"></span></div>
<h5 class="title">Excellent Reputation</h5>
<div class="text">We have built our reputation on the attention to details and our loyal service to our customers</div>
</div>
</div>
<div class="text-icon-squared animation" data-animation="fadeInUp" data-animation-delay="0s">
<div class="hover"></div>
<div class="caption">
<div class="icon-big"><span class="icon icon-stethoscope"></span></div>
<h5 class="title">Affordable Diagnosis</h5>
<div class="text">We will diagnose your issues, provide you with options and give you a Better price!</div>
</div>
</div>
</div>
</div>
<div id="contact_us"></div>
</div>
<!-- //Block -->
<!-- Question Block -->
<div class="block bg-dark pad-sm">
<div class="container">
<div class="text-center">
<h2>Getting Help is Easy</h2>
<p class="info">Have a question? Give us a call or stop by for a quote. It's that easy.</p>
<!--<a class="btn btn-white wide" href="contact.html">Ask a Question</a></div>-->
</div>
</div>
</div>
<!-- //Question Block -->
<!-- Sertificates Block -->
<div class="block">
<div class="container">
<div class="row">
<div class="col-md-4">
<div class="text-img animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
<div class="image"><img src="images/Time.png" alt=""></div>
<h5 class="title">We Value Your Time</h5>
<p>Our tech support saves your time and energy and lets you enjoy your computer to the max.</p>
</div>
</div>
<div class="col-md-4">
<div class="text-img animation" data-animation="fadeInUp" data-animation-delay="0s">
<div class="image"><img src="images/sertficate-02.png" alt=""></div>
<h5 class="title">Remote, Hyper-secure Connection</h5>
<p>You select the service you need, and our tech support does all the work through a remote, hyper-secure connection.</p>
</div>
</div>
<div class="col-md-4">
<div class="text-img animation" data-animation="fadeInRight" data-animation-delay="0.5s">
<div class="image"><img src="images/sertficate-03.png" alt=""></div>
<h5 class="title">Customer Happiness</h5>
<p>Your satisfaction is our #1 priority. We pledge to be by your side until you are 100% satisfied with our services.</p>
</div>
</div>
</div>
</div>
</div>
<!-- //Sertificates Block -->
</div>
<!-- // Content -->
<!-- Footer -->
<div class="page-footer">
<div class="footer-content">
<div class="back-to-top"><a href="#top"><span class="icon icon-chevron-arrow-up"></span></a></div>
<div class="container">
<div class="social-links">
<ul>
<li>
<a class="icon icon-facebook" href="#"></a>
</li>
<li>
<a class="icon icon-twitter" href="#"></a>
</li>
<li>
<a class="icon icon-google-plus" href="#"></a>
</li>
</ul>
</div>
<div class="footer-phone">
<i class="icon icon-phone-receiver"></i>Call Us to Our Office <span class="number">+1866-217-0652</span>
</div>
<div class="row footer-columns">
<div class="col-lg-2 visible-lg"></div>
<div class="col-md-4 col-lg-5">
<div class="contact-info"><i class="icon icon-placeholder-for-map"></i>5604 Willow Crossing Ct,
<br> Clifton, VA, 20124</div>
</div>
<div class="col-md-4 col-lg-5">
<div class="contact-info"><i class="icon icon-clock"></i>Mon-Fri: 10:00am-9:00pm
</div>
</div>
<br><br><br><br>
<div class="copyright" style="text-align: center">© 2018 All Rights Reserved.</div>
</div>
</div>
<!-- External JavaScripts -->
<script src="js/jquery.js"></script>
<script src="js/plugins/bootstrap.min.js"></script>
<script src="js/plugins/slick.min.js"></script>
<script src="js/plugins/slider-effect.js"></script>
<script src="js/plugins/jquery.magnific-popup.min.js"></script>
<script src="js/plugins/moment.js"></script>
<script src="js/plugins/bootstrap-datetimepicker.min.js"></script>
<script src="js/plugins/jquery.waypoints.min.js"></script>
<script src="js/plugins/jquery.form.js"></script>
<script src="js/plugins/jquery.validate.min.js"></script>
<!-- Custom JavaScripts -->
<script src="js/custom.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
      <script type="text/javascript">
      $('a').click(function(){
      $('html, body').animate({
          scrollTop: $( $(this).attr('href') ).offset().top
      }, 500);
        return false;
    });
    </script>
</body>
</html>