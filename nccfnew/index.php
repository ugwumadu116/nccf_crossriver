<?php

	include 'process.php';
	include 's1.php';
	include 's2.php';
	include 's3.php';
	include 'pS.php';
	include 'exco.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nigeria Christian Corpers' Fellowship Cross River State Chapter</title>
	<meta name="title" content="Nigeria Christian Corpers' Fellowship Cross River State Chapter">
	<meta name="author" content="The Holy Ghost">
	<meta name="description" content="Nigeria Christian Corpers' Fellowship (NCCF), Cross River state Chapter was established after the National Youth Service Corps, and the State Secretariat is located in Calabar, the state's capital.">
	<link rel="shortcut icon" href="_css/_images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="_css/_images/favicon.ico" type="image/x-icon">
	<!-- Flickity Slider/Carousel Plugin Minified CSS -->
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
	<!-- Fonts declaration -->
	<link href="https://fonts.googleapis.com/css?family=Lato|Poppins:700,800,900|Work+Sans" rel="stylesheet">
	
	<!-- NCCF CRS Default Styles -->
	<link rel="stylesheet" type="text/css" href="_css/main.css">
	<style>
		#section-d {
			margin-bottom: 0;

	</style>
</head>
<body>
	<header class="pageHeader">
		<!-- Navigation Bar -->
		<nav id="pageNav">
			<section class="siteLogo">
				<a href="index.php"><img src="_css/_images/logo.jpg"></a>
			</section>

			<section id="hamBurger">
			    <span></span>
			    <span></span>
			    <span></span>
			</section>
			
			<section id="navMenu">
				<ul>
					<li><a class="current" href="index.php">Home</a></li>
					<li><a href="register.php">Register</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="zones.php">Zones</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="/forum/">Forum</a></li>
				</ul>
			</section>
		</nav>
		
		<!-- Slider Wrapper -->
		<article class="css-slider-wrapper">
			<input type="radio" name="slider" class="slide-radio1" checked id="slider_1">
			<input type="radio" name="slider" class="slide-radio2" id="slider_2">
			<input type="radio" name="slider" class="slide-radio3" id="slider_3">
			<!-- Slider Pagination -->
			<section class="slider-pagination">
				<label for="slider_1" class="page1"></label>
				<label for="slider_2" class="page2"></label>
				<label for="slider_3" class="page3"></label>
			</section>

			<!-- Slider #1 -->
			<section class="slider slide-1">
				<div class="slider-content">
					<h4><?php echo $SHsmall ?></h4>
					<h2><?php echo $SHlarge ?> </h2>
				</div>
			</section>

			<!-- Slider #2 -->
			<section class="slider slide-2">
				<div class="slider-content">
					<h4><?php echo $SHsmall2 ?></h4>
					<h2><?php echo $SHlarge2 ?></h2>
				</div>
			</section>

			<!-- Slider #3 -->
			<section class="slider slide-3">
				<div class="slider-content">
					<h4><?php echo $SHsmall3 ?> </h4>
					<h2><?php echo $SHlarge3 ?></h2>
				</div>
			</section>
		</article>
	</header>
	<main>
		<blockquote id="section-a" class="blockquote-centered">
			<img src="_css/_images/left.png" alt="">
			A time will come when the Federal Government of Nigeria will pay her youths to preach the gospel of our Lord Jesus Christ to the nooks and crannies of the nation
			<small>Pa S.G Elton</small>
		</blockquote>

		<article id="section-b" class="content-wrapper clearfix">
			<h2 class="section-header">You Are Welcome</h2>
			<img src="_css/_images/pIMAGE/<?php echo $pimage ?>" alt="" class="chairman-img">			
			<p><?php echo $ptexts ?></p>
		</article>

		<article id="section-video" class="content-wrapper">
			<h2 class="section-header">Our Family Song</h2>
			<section class="video-wrapper">
				<iframe width="860" height="615" src="https://www.youtube.com/embed/6AGWxUAFXUs?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			</section>
		</article>
		
		<article  id="section-c" class="content-wrapper">
			<h2 class="section-header">Meet Our Executives</h2>
			<section  class="image-wrapper js-flickity"
  data-flickity-options='{ "wrapAround": true, "pageDots": false }'>
				<section class="image-block">
					<img src="_css/_images/exco/<?php echo $chairmanimg ?>" alt="">
					<h4><?php echo $chairmanname ?></h4>
					<h6><?php echo $group1 ?></h6>
					<!-- <h6><?php //echo $chair ?></h6> -->
				</section>
				<section class="image-block">
					<img src="_css/_images/exco/<?php echo $asecimg ?>" alt="">
					<h4><?php echo $asecname ?></h4>
					<h6><?php echo $group3 ?></h6>
				</section>
			<section class="image-block">
				<img src="_css/_images/exco/<?php echo $finsecimg ?>" alt="">
				<h4><?php echo $finsecname ?></h4>
				<h6>Financial Secretary</h6>
			</section>
			<section class="image-block">
				<img src="_css/_images/exco/<?php echo $bsecimg ?>" alt="">
				<h4><?php echo $bsecname ?></h4>
				<h6>Bible Study Secretary</h6>
			</section>
			<section class="image-block">
				<img src="_css/_images/exco/<?php echo $tresimg ?>" alt="">
				<h4><?php echo $tresname ?></h4>
				<h6>Treasurer</h6>
			</section>
			<section class="image-block">
				<img src="_css/_images/exco/<?php echo $mdimg ?>" alt="">
				<h4><?php echo $mdname ?></h4>
				<h6>Music Director</h6>
			</section>
			<section class="image-block">
				<img src="_css/_images/exco/<?php echo $psecimg ?>" alt="">
				<h4><?php echo $psecname ?></h4>
				<h6>Prayer Secretary</h6>
			</section>
			<section class="image-block">
				<img src="_css/_images/exco/<?php echo $sis_img ?>" alt="">
				<h4><?php echo $sis_name ?></h4>
				<h6>Sisters' Coordinator/Welfare Secretary</h6>
			</section>
			<section class="image-block">
				<img src="_css/_images/exco/<?php echo $esecimg ?>" alt="">
				<h4><?php echo $esecname ?></h4>
				<h6>Evangelism Secretary</h6>
			</section>
			<section class="image-block">
				<img src="_css/_images/exco/<?php echo $psimg ?>" alt="">
				<h4><?php echo $psname ?></h4>
				<h6>Publicity Secretary</h6>
			</section>
			<section class="image-block">
				<img src="_css/_images/exco/<?php echo $tosimg ?>" alt="">
				<h4><?php echo $tosname ?></h4>
				<h6>Transport and Organizing Secretary</h6>
			</section>
			<section class="image-block">
				<img src="_css/_images/exco/<?php echo $ddimg ?>" alt="">
				<h4><?php echo $ddname ?></h4>
				<h6>Drama Director</h6> 
			</section>
			<section class="image-block">
				<img src="_css/_images/exco/<?php echo $gsecimg ?>" alt="">
				<h4><?php echo $gsecname ?></h4>
				<h6><?php echo $group2 ?></h6>
			</section>
		</section>
		</article>
		<article id="section-d" class="content-wrapper">
				<h2 class="section-header">Get Involved</h2>
				<p class="donations-text">
					You will be enriched in every way so that you can be generous on every occasion, and through us your generosity will result in thanksgiving to God - 2 Corinthians 9:11 (NIV) <br>
					Be a part of our new bus and building project and watch God open the windows of heaven abundantly over you. <br>
					Donate Today!

				</p>
				<section class="account-details">
					<h4> Account Details </h4>
					<p><b>First Bank: </b> 3102750774 <br>
					<b>Account Name: </b> Nigeria Christian Corpers' Fellowship Cross River State Chapter</p>
				</section>
		</article>

		<article id="section-e">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7949.140933931807!2d8.338006683039598!3d5.010762659243458!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x77daa6012126e349!2sNCCF+Family+House+Calabar!5e0!3m2!1sen!2sng!4v1525113929456&zoom=10" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</article>
	</main>

		<footer id="page-footer">
			<article id="footer-top">
					<section id="footer-social">
						<a href="https://web.facebook.com/nccfcrossriver?_rdc=1&_rdr"><object type="image/svg+xml" data="_css/_images/facebook.svg">Facebook</object></a>
						<a href="https://twitter.com/nccfcrossriver"><object type="image/svg+xml" data="_css/_images/twitter.svg">Twitter</object></a>
						<a href="https://www.instagram.com/nccfcrossriver/"><object type="image/svg+xml" data="_css/_images/instagram.svg">Instagram</object></a>
					</section>
					<h4 >Nigeria Christian Corpers' Fellowship Cross River State Chapter</h4>
					<p>23 Akiba Street, Off Old Odukpani Road Ikot Ansa, Calabar</p>
					<p>+234 705 702 5450, 0806 262 5980</p>
					<p>nccfcrossriver@yahoo.com</p>
			</article>
			<article id="footer-bottom">
				<p>© 2018 NCCF CROSS RIVER STATE. ALL RIGHTS RESERVED.</p>
			</article>
		</footer>
		<!-- jQuery -->
		<script src="_scripts/jquery-3.3.1.min.js"></script>
		<!-- Flickity Slider/Carousel Plugin JS -->
		<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
		<script src="_scripts/nav.js"></script>
		<script src="_scripts/script.js"></script>
</body>
</html>