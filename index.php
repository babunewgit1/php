<?php 

 if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	function valid_ipt($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	if (empty($_POST["fname"])) {
		 $error_fname = "First name is required";
	} else {
		 $fname = valid_ipt($_POST["fname"]);		
		 if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
		   $error_fname = "Only letters and white space allowed";
		 }
	}

	if (empty($_POST["lname"])) {
		$error_lname = "Last name is required";
   } else {
		$lname = valid_ipt($_POST["lname"]);		
		if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
		  $error_lname = "Only letters and white space allowed";
		}
   }

	if (empty($_POST["email"])) {
		 $error_email = "Email is required";
	} else {
		 $email = valid_ipt($_POST["email"]);	
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$error_email = "Invalid email format";
		}
	}


	if (empty($_POST["sms"])) {
		$error_sms = "Message is required";
   } else {
		$sms = valid_ipt($_POST["sms"]);		
		if (!preg_match("/^[a-zA-Z-' ]*$/",$sms)) {
		  $error_sms = "Only letters and white space allowed";
		}
   }

	if (!empty($email)){	 

		 $mess = "		 
		 		<p style='margin: 4px'><strong>First name:</strong> $fname</p>
		 		<p style='margin: 4px'><strong>Last name:</strong> $lname</p>
		 		<p style='margin: 4px'><strong>Email:</strong> $email</p>		 				
		 		<p style='margin: 4px'><strong>Message:</strong> $sms</p>		 				
				";	 

		 $headers = "MIME-Version: 1.0" . "\r\n";
		 $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";		 

		 $smail = mail("luis@amfcontractor.com", "Say Hello!", $mess, $headers);


		 if ($smail) {
			 $successful_mail = "Your mail has been successfully submitted ...";
		 }


	 } 
	 
 }


?>


<!DOCTYPE html>
<html lang="en-US">

<head>
	<!-- Meta setup -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description"
		content="American Master Flooring specializes on installing top quality Luxury Vinyl since 2005. Get your Luxury Vinyl Floor installed by professionals" />
	<meta name="keywords"
		content="Luxury Vinyl flooring, Economy Vinyl Flooring, Luxury Vinyl, American Master Flooring, AMF, AMF Contractor" />
	<meta name="author" content="American Master Flooring" />
	<meta name="classification" content="Luxury Vinyl flooring, Vinyl floor installer, Vinyl flooring">
	<meta name="robots" content="All">
	<meta name="coverage" content="Worldwide">
	<meta name="distribution" content="Global">
	<meta name="geo.placename" content="Lee County, Florida">
	<meta name="geo.country" content="US">
	<meta name="state" content="FL">
	<meta http-equiv="content-language" content="en-us">
	<meta property="og:title" content="America Master Flooring | Luxury Vinyl Flooring">
	<meta property="og:description"
		content="American Master Flooring specializes on installing top quality Luxury Vinyl since 2005. Get your Luxury Vinyl Floor installed by professionals">
	<meta property="og:image" content="KEVINPENDING">
	<meta property="og:url" content="https://www.americanmasterflooring.com/">
	<meta property="og:type" content="website">
	<meta property="og:locale" content="en_US">

	<!-- Title -->
	<title>America Master Flooring | Luxury Vinyl Flooring</title>

	<!-- Fav Icon -->
	<link rel="icon" href="img/fav.png" />


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

	<!-- Include Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Main StyleSheet -->
	<link rel="stylesheet" href="css/style.css" />

	<!-- Responsive CSS -->
	<link rel="stylesheet" href="css/responsive.css" />

</head>

<body>
	<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->


	<!-- header-area-start -->
	<header>
		<div class="container">
			<nav>
				<div class="logo">
					<img src="img/logo.svg" class="img-fluid" alt="">
				</div>
				<div class="menu-item">
					<ul>
						<li><a href="index.html">Home</a> |</li>
						<li><a href="#about">About US </a>|</li>
						<li><a href="#contact">Contact Us</a></li>
					</ul>
				</div>
				<div class="hamburger-icon">
					<a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
						<i class="fa fa-bars" aria-hidden="true"></i>
					</a>
				</div>
			</nav>
		</div>
	</header>
	<!-- header-area-end -->

	<!-- offcanvas-area-start -->
	<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
		<div class="offcanvas-header">
			<h5 class="offcanvas-title" id="offcanvasExampleLabel"><a href="index.html"><img src="img/logo.svg"
						class="img-fluid" alt=""></a></h5>
			<a class="clloss-x" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-x"></i></a>
		</div>
		<div class="offcanvas-body">
			<div class="mobile-menu-item">
				<ul>
					<li><a href="index.html">Home</a> </li>
					<li><a href="#about">About US </a></li>
					<li><a href="#contact">Contact Us</a></li>

				</ul>
			</div>
		</div>
	</div>
	<!-- offcanvas-area-end -->


	<!-- hero-area-start -->
	<section class="hero-area">
		<div class="call-img">
			<a href="tel:+7862905156"><img src="img/call.png" class="img-fluid" alt=""></a>
		</div>
		<div class="container">
			<div class="hero-content">
				<h3>Get your Luxury Vinyl <br>
					Floor installed by <br>
					professionals
				</h3>
			</div>
		</div>
	</section>
	<!-- hero-area-end -->

	<!-- about-us-area-start -->
	<section class="about-area" id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-6">
					<div class="about-title">
						<h3>About Us</h3>
						<p>American Master Flooring specializes on <br> installing top quality Luxury Vinyl since 2005
						</p>
					</div>
					<div class="cnt-item">
						<h5>Why Luxury Vinyl?</h5>
						<div class="row">
							<div class="col-md-7">
								<ul>
									<li>Top quality + lower cost </li>
									<li>Water Resistant</li>
								</ul>
							</div>
							<div class="col-md-5">
								<ul>
									<li>Scratch proof</li>
									<li>Anti-Slip</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-6">

					<div class="cnt-item">
						<img src="img/team.png" class="img-fluid" alt="">

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- about-us-area-end -->

	<!-- Furniture-area-start -->
	<section class="furniture-area overflow-hidden">
		<div class="row g-0">
			<div class="col-md-6 col-lg-4">
				<div class="furniture-img">
					<img src="img/Luxuyvinyl1.png" class="img-fluid" alt="">
				</div>
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="furniture-img">
					<img src="img/Luxuryvinyl2.png" class="img-fluid" alt="">
				</div>
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="furniture-img">
					<img src="img/Luxuryvinyl3.png" class="img-fluid" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- Furniture-area-end -->

	<!-- contact-area-start -->
	<section class="contact-area" id="contact">
		<div class="container">
			<div class="contact-title">
				<h3>Contact Us</h3>
			</div>
		</div>
		<div class="contact-wrapper">
			<div class="contact-form">

				<form action="" method="POST">
					<div class="row">
						<div class="col-lg-6">
							<input type="text" name="fname" placeholder="ENTER NAME">
							<p class="text-danger h6">
								<?php
											if(isset($error_fname)) {
												echo $error_fname;
											} 													
										?>
							</p>
						</div>
						<div class="col-lg-6">
							<input type="email" name="email" placeholder="ENTER EMAIL">
							<p class="text-danger h6">
								<?php
																		if(isset($error_email)) {
																			echo  $error_email;
																		} 													
																	?>
							</p>
						</div>
						<div class="col-lg-12">
							<input type="text" name="lname" placeholder="SUBJECT">
							<p class="text-danger h6">
								<?php
																		if(isset($error_lname)) {
																			echo $error_lname;
																		} 													
																	?>
							</p>
						</div>
						<div class="col-lg-12">
							<textarea id="" cols="30" rows="3" name="sms" placeholder="ENTER MESSAGE"></textarea>
							<p class="text-danger h6">
								<?php
											if(isset( $error_sms)) {
												echo  $error_sms;
											} 													
										?>
							</p>
						</div>
					</div>
					<div class="submit-btn text-center">
						<button type="submit">SEND YOUR MESSAGE</button>
						<button type="reset">RESET</button>
					</div>
				</form>
				<p class="text-success h5">
					<?php
								if(isset( $successful_mail)) {
									echo  $successful_mail;
								} 													
							?>
				</p>


			</div>
		</div>
		<div class="contact-bottom">
			<div class="row">
				<div class="col-md-4 col-lg-4 col-5">
					<div class="contact-itme">
						<ul>
							<li>info@amfcontractor.com</li>
							<li>7862904513</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 col-lg-4 col-5">
					<div class="contact-itme">
						<p>American Master Flooring <br>
							All rights reserved <br>
							Copyright ©2005-2022</p>
					</div>
				</div>
				<div class="col-md-4 col-lg-4 col-2">
					<div class="contact-itme">
						<a href="#"><img src="img/fb.png" class="img-fluid" alt=""></a>
						<a href="#"><img src="img/ins.png" class="img-fluid" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- contact-area-end -->

	<!-- Main jQuery -->
	<script src="js/jquery-3.6.0.min.js"></script>

	<!-- Bootstrap Js -->
	<script src="js/bootstrap.bundle.min.js"></script>

	<script>
		$(document).ready(function () {
			$(window).scroll(function () {
				var height = $(window).scrollTop();
				if (height >= 100) {
					$('header').addClass('fixed-menu');
				} else {
					$('header').removeClass('fixed-menu');
				}
			});
		});
	</script>

	<!-- Fontawesome Script -->
	<script src="https://kit.fontawesome.com/e7f2043049.js"></script>

	<!-- Custom jQuery -->
	<script src="js/scripts.js"></script>

	<!-- Scroll-Top button -->
	<a href="#" class="scrolltotop"><i class="fas fa-angle-up"></i></a>

</body>

</html>