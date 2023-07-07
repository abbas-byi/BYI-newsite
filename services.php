<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kodesolution.com/html/2023/crotive-html/page-services.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Jun 2023 14:08:25 GMT -->
<head>
<meta charset="utf-8">
<title> Build Your Innovation | Services</title>
<!-- Stylesheets -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<?php include './templates/favicon.php'; ?>

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>
<body>

<div class="page-wrapper dark-layout">

	<!-- Cursor Animation -->
	<?php include './templates/cursor-animation.php'; ?>

	<!-- Preloader -->
	<div class="preloader"></div>

	<!-- Main Header-->
	<?php
	$currentPage = 'services';
		include './templates/header.php';
	?>
	<!--End Main Header -->

	<!-- Hidden bar back drop -->
	<div class="hidden-bar-back-drop"></div>

	<!-- Hidden Bar -->
	<?php include './templates/hiddenBar.php'; ?>
	<!--End Hidden Bar -->

	<!-- Start main-content -->
	<section class="page-title" style="background-image: url(images/background/page-title.jpg);">
		<div class="auto-container">
			<div class="title-outer">
				<h1 class="title">Services</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li><a href="#">Pages</a></li>
					<li>Services</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->


	<!-- Services Section-->
	<section class="services-section">
		<div class="auto-container">
			<div class="row">
				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
					<div class="inner-box">
						<figure class="image"><img src="images/resource/service-1.jpg" alt=""></figure>
						<div class="content">
							<div class="inner">
								<i class="icon flaticon-ux-design"></i>
								<h4 class="title"><a href="page-service-details.html">Website <br>development</a></h4>
								<div class="text">Lorem ipsum dolor sit amet, do consectetur adipiscing.</div>
								<a href="page-service-details.html" class="read-more"><i class="icon-arrow-down-right"></i></a>
							</div>
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
					<div class="inner-box">
						<figure class="image"><img src="images/resource/service-2.jpg" alt=""></figure>
						<div class="content">
							<div class="inner">
								<i class="icon flaticon-pen-tool"></i>
								<h4 class="title"><a href="page-service-details.html">Graphic <br>designing</a></h4>
								<div class="text">Lorem ipsum dolor sit amet, do consectetur adipiscing.</div>
								<a href="page-service-details.html" class="read-more"><i class="icon-arrow-down-right"></i></a>
							</div>
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
					<div class="inner-box">
						<figure class="image"><img src="images/resource/service-3.jpg" alt=""></figure>
						<div class="content">
							<div class="inner">
								<i class="icon flaticon-in-stock"></i>
								<h4 class="title"><a href="page-service-details.html">Mobile <br>application</a></h4>
								<div class="text">Lorem ipsum dolor sit amet, do consectetur adipiscing.</div>
								<a href="page-service-details.html" class="read-more"><i class="icon-arrow-down-right"></i></a>
							</div>
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms">
					<div class="inner-box">
						<figure class="image"><img src="images/resource/service-2.jpg" alt=""></figure>
						<div class="content">
							<div class="inner">
								<i class="icon flaticon-pen-tool"></i>
								<h4 class="title"><a href="page-service-details.html">Graphic <br>designing</a></h4>
								<div class="text">Lorem ipsum dolor sit amet, do consectetur adipiscing.</div>
								<a href="page-service-details.html" class="read-more"><i class="icon-arrow-down-right"></i></a>
							</div>
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
					<div class="inner-box">
						<figure class="image"><img src="images/resource/service-3.jpg" alt=""></figure>
						<div class="content">
							<div class="inner">
								<i class="icon flaticon-in-stock"></i>
								<h4 class="title"><a href="page-service-details.html">Mobile <br>application</a></h4>
								<div class="text">Lorem ipsum dolor sit amet, do consectetur adipiscing.</div>
								<a href="page-service-details.html" class="read-more"><i class="icon-arrow-down-right"></i></a>
							</div>
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1800ms">
					<div class="inner-box">
						<figure class="image"><img src="images/resource/service-1.jpg" alt=""></figure>
						<div class="content">
							<div class="inner">
								<i class="icon flaticon-ux-design"></i>
								<h4 class="title"><a href="page-service-details.html">Website <br>development</a></h4>
								<div class="text">Lorem ipsum dolor sit amet, do consectetur adipiscing.</div>
								<a href="page-service-details.html" class="read-more"><i class="icon-arrow-down-right"></i></a>
							</div>
						</div>
					</div>
				</div>


			</div>
		</div>
	</section>
	<!-- End Services Section-->

	<!-- Work Section-->
	<?php include './templates/working.php'; ?>'

	<!-- Main Footer -->
	<?php
		include './templates/footer.php';
	?>
	<!--End Main Footer -->

</div><!-- End Page Wrapper -->


<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>


<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/gsap.min.js"></script>
<script src="js/SplitText.min.js"></script>
<script src="js/ScrollTrigger.min.js"></script>
<script src="js/splitType.js"></script>
<script src="js/jquery.countdown.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/script.js"></script>

</body>

<!-- Mirrored from kodesolution.com/html/2023/crotive-html/page-services.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Jun 2023 14:08:25 GMT -->
</html>