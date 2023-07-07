<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kodesolution.com/html/2023/crotive-html/page-projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Jun 2023 14:08:25 GMT -->
<head>
<meta charset="utf-8">
<title> Build Your Innovation | Portfolio</title>
<!-- Stylesheets -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<?php include './templates/favicon.php'; ?>

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

<style>
	.project-section{
		padding-top: 50px;
	}
</style>

</head>
<body>

<div class="page-wrapper dark-layout">

	<!-- Cursor Animation -->
	<?php include './templates/cursor-animation.php'; ?>

	<!-- Preloader -->
	<div class="preloader"></div>

	<!-- Main Header-->
	<?php
	$currentPage = 'portfolio';
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
				<h1 class="title">Portfolio</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li>Portfolio</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

	<!-- Filter buttons -->
<div class="filter-buttons">
	<button class="filter-button" data-filter="all">All</button>
    <button class="filter-button" data-filter="ecommerce">Ecommerce</button>
     <button class="filter-button" data-filter="digital-experience">Digital Experience</button>
     <button class="filter-button" data-filter="branding-strategy">Branding Strategy</button>
    <button class="filter-button" data-filter="showcase">Show Case</button>
</div>

	 <!-- Project Section -->
	<section class="project-section">
		<!-- <div class="auto-container">
			<div class="sec-title">
				<div class="row">
					<div class="col-xl-7">
						<h1 class="words-slide-from-right text-split">Our Selected <span class="color1"> Projects </span></h1>
					</div>
					<div class="col-xl-5">
						<span class="icon icon-arrow-down-2"></span>
						<div class="text">We've worked with a variety of businesses, from small startups to large corporations. Our projects range from simple website redesigns to complex mobile app development.</div>
					</div>
				</div>
			</div>            
		</div> -->
		<div class="outer-box">            
			<!-- Swiper -->
			<div class="row">
				<!-- Column -->
				<div class="column col-xl-3 col-lg-6 col-md-12 filter showcase">
					<!-- Project Block -->
					<div class="project-block ">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="images/resource/Gym-project.jpg" class="lightbox-image"><img src="images/resource/Gym-project.jpg" alt=""></a></figure>
								<div class="overlay-content">
									<span class="cat">Show Case</span>
									<h3 class="title"><a href="fitnesslife.co.in">Fitness Life</a></h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Column -->
				<div class="column col-xl-3 col-lg-6 col-md-12 filter showcase">
					<!-- Project Block -->
					<div class="project-block">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="images/resource/Amelkis-I.jpg" class="lightbox-image"><img src="images/resource/Amelkis-I.jpg" alt=""></a></figure>
								<div class="overlay-content">
									<span class="cat">Show Case</span>
									<h3 class="title"><a href="https://amelkis1.webridgemoroc.com/">Amelkis-I</a></h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Column -->
				<div class="column col-xl-3 col-lg-6 col-md-12 filter showcase">
					<!-- Project Block -->
					<div class="project-block ">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="images/resource/lilium.jpg" class="lightbox-image"><img src="images/resource/lilium.jpg" alt=""></a></figure>
								<div class="overlay-content">
									<span class="cat">Show Case</span>
									<h3 class="title"><a href="https://lilium.webridgemoroc.com/">Lilium</a></h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Column -->
				<div class="column col-xl-3 col-lg-6 col-md-12 filter showcase">
					<!-- Project Block -->
					<div class="project-block ">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="images/resource/amelkis-2.png" class="lightbox-image"><img src="images/resource/amelkis-2.png" alt=""></a></figure>
								<div class="overlay-content">
									<span class="cat">Show Case</span>
									<h3 class="title"><a href="https://amelkis2.webridgemoroc.com/">Amelkis II</a></h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Column -->
				<div class="column col-xl-3 col-lg-6 col-md-12 filter showcase">
					<!-- Project Block -->
					<div class="project-block">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="images/resource/weBridge.jpg" class="lightbox-image"><img src="images/resource/weBridge.jpg" alt=""></a></figure>
								<div class="overlay-content">
									<span class="cat">Show Case</span>
									<h3 class="title"><a href="https://webridgemoroc.com/">WeBridge Properties</a></h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Column -->
				<div class="column col-xl-3 col-lg-6 col-md-12 filter showcase">
					<!-- Project Block -->
					<div class="project-block ">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="images/resource/california-views.jpg" class="lightbox-image"><img src="images/resource/california-views.jpg" alt=""></a></figure>
								<div class="overlay-content">
									<span class="cat">Show Case</span>
									<h3 class="title"><a href="https://californiaviews.webridgemoroc.com/">California Views</a></h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Column -->
				<div class="column col-xl-3 col-lg-6 col-md-12 filter branding-strategy">
					<!-- Project Block -->
					<div class="project-block ">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="images/resource/theExhibit.jpg" class="lightbox-image"><img src="images/resource/theExhibit.jpg" alt=""></a></figure>
								<div class="overlay-content">
									<span class="cat">Show Case</span>
									<h3 class="title"><a href="https://theexhibit.ae/">The Exhibit</a></h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Column -->
				<div class="column col-xl-3 col-lg-6 col-md-12 filter branding-strategy">
					<!-- Project Block -->
					<div class="project-block ">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="images/resource/ruba.png" class="lightbox-image"><img src="images/resource/ruba.png" alt=""></a></figure>
								<div class="overlay-content">
									<span class="cat">Show Case</span>
									<h3 class="title"><a href="https://rubaabughaida.com/">Ruba Abughaida</a></h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Column -->
				<div class="column col-xl-3 col-lg-6 col-md-12 filter branding-strategy">
					<!-- Project Block -->
					<div class="project-block ">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="images/resource/nancy.png" class="lightbox-image"><img src="images/resource/nancy.png" alt=""></a></figure>
								<div class="overlay-content">
									<span class="cat">Show Case</span>
									<h3 class="title"><a href="https://nancyzabaneh.com/">Nancy Zabaneh</a></h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Column -->
				<div class="column col-xl-3 col-lg-6 col-md-12 filter ecommerce">
					<!-- Project Block -->
					<div class="project-block ">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="images/resource/gyan.png" class="lightbox-image"><img src="images/resource/gyan.png" alt=""></a></figure>
								<div class="overlay-content">
									<span class="cat">Show Case</span>
									<h3 class="title"><a href="https://gyanherbals.com/">Gyan Herbals</a></h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Column -->
				<div class="column col-xl-3 col-lg-6 col-md-12 filter ecommerce">
					<!-- Project Block -->
					<div class="project-block ">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="images/resource/sassy (1).jpg" class="lightbox-image"><img src="images/resource/sassy (1).jpg" alt=""></a></figure>
								<div class="overlay-content">
									<span class="cat">Show Case</span>
									<h3 class="title"><a href="https://thesassyteaspoon.in/">The Sassy Teaspoon</a></h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Project Section -->
	

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

<!-- Mirrored from kodesolution.com/html/2023/crotive-html/page-projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Jun 2023 14:08:25 GMT -->
</html>