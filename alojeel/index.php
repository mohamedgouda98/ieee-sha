<?php

	include 'back/lang.php';
	$action = isset($_GET['action']) ? $_GET['action'] : 'arabic';

	if($action == "english"){
		$lang = 1;
		$icon ="ع";
		$action2="arabic";
	}else{
		$lang = 0;
		$icon = "E";
		$action2="english";
	}


?>
<!DOCTYPE html>

<html class="no-js" lang="en" <?php if($action == "english"){
                  ?>
                  dir="ltr"
                  <?php
                  }else{
                    ?>?
                    dir="rtl"
                    <?php
                  } ?>>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Aojeel For Lawyers and Consultants</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Place favicon.ico in the root directory -->
		<link rel="icon"  type="image/x-icon" href="img/favicon.png"> 
		<!--All Css Here-->
		
		<!-- Droid Font CSS-->
		<link rel="stylesheet" href="css/droid.css">
		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css?family=Cairo:400,600,700|Poppins:400,600,700&display=swap" rel="stylesheet">
		<!-- Icofont CSS-->
		<link rel="stylesheet" href="css/icofont.css">
		<!-- Font Awesome CSS-->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Animate CSS-->
		<link rel="stylesheet" href="css/animate.css">
		<!-- Owl Carousel CSS-->
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<!-- Datepicker CSS-->
		<link rel="stylesheet" href="css/jquery.datepicker.css">
		<!-- Calendar CSS-->
		<link rel="stylesheet" href="css/zabuto_calendar.css">
		<!-- Meanmenu CSS-->
		<link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- Venobox CSS-->
		<link rel="stylesheet" href="css/venobox.css">
		<!-- Bootstrap CSS-->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Aos CSS-->
		<link rel="stylesheet" href="css/aos.css">
		<!-- Style CSS -->
		<link rel="stylesheet" href="style.css">
		<?php
		
		if($action == "arabic"){
			?>
				<link rel="stylesheet" href="style-rtl.css">
			<?php
		}
		
		?>


		
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="css/responsive.css">
		<!-- Modernizr Js -->
		<script src="js/vendor/modernizr-2.8.3.min.js"></script>
	</head>
	<body id="home">
		<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

		<div class="wrapper">
			<!--Header Area Start-->
			<header>
				<div class="header-container">
					<!--Header Top Area Start-->
					<div class="header-top-area default-bg">
						<div class="container">
							<div class="row row-75">
								<div class="header-top-wrap col-12">
									<div class="row">
										<!--Header Top Left Area Start-->
										<div class="col-md-4 col-xl-4">
											<div class="header-top-left">
												<p><?php echo $action("call-us") ?> : <a href="#"> 0543580111 | 0138409044</a></p>
											</div>
										</div>
										<!--Header Top Left Area End-->
										<!--Header Top Middle Area Start-->
										<div class="col-md-4 col-xl-4">
											<div class="header-top-middle text-center">
												<ul class="social-link">
													<li><a href="https://twitter.com/Law_013"><i class="fa fa-twitter"></i></a></li>
													<li><a href="https://www.instagram.com/Law_013/"><i class="fa fa-instagram"></i></a></li>
													<li><a href="index.php?action=<?php echo $action2?>"><?php echo $icon ?></a></li>
												</ul>
											</div>
										</div>
										<!--Header Top Middle Area End-->
										<!--Header Top Right Area Start-->
										<div class="col-md-4 col-xl-4">
											<div class="header-top-right">
												<p><?php echo $action("mail-us") ?> :<a href="mailto:law-alojeel@hotmail.com">law-alojeel@hotmail.com</a></p>
											</div>
										</div>
										<!--Header Top Right Area End-->
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--Header Top Area End-->
					<!--Header Bottom Area Start-->
					<div class="header-bottom-area header-sticky">
						<div class="container">
							<div class="row align-items-center">
								<!--Header Logo Start-->
								<div class="col-md-3">
									<div class="header-logo">
										<a href="index.php?action=<?php echo $action?>"><img src="img/logo/logo.png" class="img-fluid" alt=""></a>
									</div>
								</div>
								<!--Header Logo End-->
								<!--Header Menu Start-->
								<div class="col-md-9">
									<div class="header-menu-area text-center">
										<nav>
											<ul class="main-menu">
												<li class="active"><a data-value="home"><?php echo $action('home') ?></a>
												</li>
												<li><a data-value="about"><?php echo $action('about') ?></a></li>
												<li><a data-value="services"><?php echo $action('services') ?></a></li>
												<li><a data-value="contact"><?php echo $action('contact') ?></a></li>
											</ul>
										</nav>
									</div>
								</div>
								<!--Header Menu End-->
							</div>
							<div class="row">
								<div class="col-12">  
								<!--Mobile Menu Area Start-->
								<div class="mobile-menu d-lg-none d-xl-none"></div>
								<!--Mobile Menu Area End-->
								</div>
							</div>
						</div>
					</div>
					<!--Header Bottom Area End-->
				</div>
			</header>
			<!--Header Area End-->
			<!--Slider Area Start-->
			<div class="slider-area">
				<div class="single-slider" style="background-image: url(img/slider/slider-bg.jpg)">
					<div class="container">
						<div class="row align-items-center">
							<?php
								include 'back/dbcont.php';
								$img_url ='upload\\';
								$select_slider_data = $cont->prepare("SELECT * FROM slider WHERE lang=?");
								$select_slider_data->execute(array($lang));
								while($row_silder = $select_slider_data->fetch()){
								
							?>

							<div class="col-md-8 col-xl-6">
								<div class="hero-content">
									<div class="title" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">
										<h1 ><?php echo $row_silder['head'] ?></h1>
									</div>
									<div class="description" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">
										<p><?php echo $row_silder['body']?></p> 
									</div> 

								</div>
							</div>

							<div class="col-md-4 col-xl-6">
								<div class="hero-img img-full mt-30" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;">
									<img src="<?php echo $img_url . $row_silder['img']?>" alt="img_header">
								</div>
							</div>
							
							<?php
									}
									?>
								
						</div>
					</div>
				</div>
			</div>
			<!--Slider Area End-->
			<!--About Area Start-->
			<div class="about-area" id="about">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="about-wrapper black-bg pt-110 pb-110">
								<div class="row">
									<!--About Image Area Start-->
									<?php
									
									$select_about_us_data = $cont->prepare("SELECT * FROM about_us WHERE lang=?");
									$select_about_us_data->execute(array($lang));
									while($row_about_us = $select_about_us_data->fetch()){
										
										?>
											<div class="col-md-5">
												<div class="about-img" data-aos="fade-right" data-aos-duration="1500" data-aos-once="true">
													<img src="<?php echo $img_url .$row_about_us['img'] ?>" alt="">
												</div>
											</div>
											<!--About Image Area End-->
											<!--About Content Area Start-->
											<div class="col-md-7">
												<div class="about-content" data-aos="fade-left" data-aos-duration="1500" data-aos-once="true">
													<span><?php echo $action("about") ?></span>
													<h1><?php echo $row_about_us['head']?></h1>
													<p><?php echo $row_about_us['body'] ?></p>
												</div>
											</div>

									<?php
									}
									?>
									
									<!--About Content Area End-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--About Area End-->
			<!--Timeline Area Start-->
			<div class="timeline-area bg-img">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-6">
							<!--Single Timeline Strat-->
							<div class="single-timeline mb-50 d-flex align-items-center"  data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
								<div class="timeline-frame">
									<img src="img/icon/icon1.png" alt="">
								</div>
								<div class="timeline-content">
									<p><?php echo $action('about1') ?></p>
								</div>
							</div>
							<!--Single Timeline End-->
						</div>
						<div class="col-12 col-lg-6">
							<!--Single Timeline Strat-->
							<div class="single-timeline mb-50 d-flex align-items-center"  data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
								<div class="timeline-frame">
									<img src="img/icon/icon1.png" alt="">
								</div>
								<div class="timeline-content">
								<p><?php echo $action('about2') ?></p>
								</div>
							</div>
							<!--Single Timeline End-->
						</div>
					</div>
				</div>
			</div>
			<!--Timeline Area End-->
			<!--Service Area Start-->
			<div class="service-area pt-120 pb-55" id="services">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-12 col-lg-4">
							<div class="service-img" data-aos="fade-right" data-aos-duration="1500" data-aos-once="true">
								<img src="img/service/service.jpg" alt="">
							</div>
						</div>
						<div class="col-12 col-lg-8">
							<div class="row">
								<div class="col-12">
									<!--Section Title Start-->
									<div class="section-title mb-60" data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
										<h4><?php echo $action("services")?></h4>
									</div>
									<!--Section Title End-->
								</div>
								<div class="col-12">
									<div class="row">
										<!--Single Service Start-->

										<?php
										
										$select_servicses = $cont->prepare("SELECT * FROM services WHERE lang=?");
										$select_servicses->execute(array($lang));
										while($row_services = $select_servicses->fetch()){
										
											?>

											<div class="col-md-6">
												<div class="single-service mb-60 d-flex flex-nowrap" data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
													
													<div class="service-content">
														<h4><a><?php echo $row_services['head'] ?></a></h4>
														<p><?php echo $row_services['body'] ?></p>
										
													</div>
												</div>
											</div>


											<?php
										}

										?>
										
								
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Service Area End-->
			<!-- Start Consultation Popup Section-->
			<div class="consultation-popup" id="popup-1">
			<div class="container">
				<div class="form-consultation" data-aos="fade-up" data-aos-duration="2000" data-aos-once="true"><i class="fa fa-close" id="close1"></i>
					<div class="row">
							<div class="col-lg-12">
								<div class="single-service-wrapper">
									<div class="single-service-content">
										<h3>Legal Consultants</h3>
										<p>Our form provides written and verbal answers on our clients inquires on their business daily issues against annual agreed fees and these services could be summarized as follows :-</p>
										<ul class="check-list ml-30">
											<li>
												Commerce : ( Companies , commercial papers , commercial contracts  , commercial agencies , establishing all types and forms of Saudi and mix companies , its amendments , establishing of branches within and outside Saudi Arabia. 
											</li>
											<li>
												Intellectual property and patents
											</li>
											<li>
												Company merge and liquidation " winding up ".
											</li>
											<li>
												Banking Transactions
											</li>
											<li>
												Labor law and Social Insurance 
											</li>
											<li>
												Drafting of contracts , agreements , memorandums of understanding and resolution
											</li>
											<li>
												Provide advice and legal opinion
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>
			</div>
			<!-- End Consultation Popup Section-->
			<!-- Start Consultation Popup Section-->
			<div class="consultation-popup" id="popup-2">
				<div class="container">
					<div class="form-consultation" data-aos="fade-up" data-aos-duration="2000" data-aos-once="true"><i class="fa fa-close" id="close2"></i>
						<div class="row">
								<div class="col-lg-12">
									<div class="single-service-wrapper">
										<div class="single-service-content">
											<h3>Legal Services</h3>
											<ul class="check-list ml-30">
												<li>
													Islamic law ( Sharia ). 
												</li>
												<li>
													Family and personal affairs ( inheritance , Waqkfs , gifts  , legacy , donation , maintenance , divorce , custody …. etc).
												</li>
												<li>
													Real Estate ( Contracts , mortgage , lease , Sales , Construction and Services.
												</li>
												<li>
													Labor law ( Contract drafting , legal opinion , work regulations and penalty code
												</li>
												<li>
													Air and Maritime law 
												</li>
												<li>
													Administrative law  
												</li>
												<li>
													Social Insurance
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
					</div>
				</div>
			</div>
			<!-- End Consultation Popup Section-->
			<!-- Start Consultation Popup Section-->
			<div class="consultation-popup" id="popup-3">
				<div class="container">
					<div class="form-consultation" data-aos="fade-up" data-aos-duration="2000" data-aos-once="true"><i class="fa fa-close" id="close3"></i>
						<div class="row">
								<div class="col-lg-12">
									<div class="single-service-wrapper">
										<div class="single-service-content">
											<h3>Litigation and Disputes</h3>
											<ul class="check-list ml-30">
												<li>
													Amicable settlement
												</li>
												<li>
													Pleadings and defend our clients and argument before all courts and judicial bodies.
													<ol class="pl-0 ml-10">
														<li>
																Sharia Courts
														</li>
														<li>
																Administrative courts  
														</li>
														<li>
																Committees of commercial papers disputes settlements
														</li>
														<li>
																Initial and Higher committees for labor  disputes  settlement  
														</li>
														<li>
																Banking  disputes settlement committee
														</li>
														<li>
																Customs Committee
														</li>
													</ol>  
												</li>
												<li>
														Arbitration 
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
					</div>
				</div>
			</div>
			<!-- End Consultation Popup Section-->
		<!--Contact Us Area Start-->
		<div class="contact-us-area ptb-100" id="contact">
				<div class="container">
					<div class="row">
						<!--Contact Information Start--> 
						<div class="col-md-5 contact-address" data-aos="fade-right" data-aos-duration="1500" data-aos-once="true">
							<div class="contact-information">
							<ul>
							<?php
							$select_info_data = $cont->prepare("SELECT * FROM contact WHERE lang=?");
							$select_info_data->execute(array($lang));
							while($row_info = $select_info_data->fetch()){
								?>

									<li>
										<h5><?php echo $action('address') ?></h5>
										<p><?php echo $row_info['title']?></p>
									</li>
									<li>
										<h5><?php echo $action('phone') ?></h5>
										<p><a href="<?php echo $row_info['phone'] ?>"><?php echo $row_info['phone']?></a><br>
											
										</p>
									</li>
									<li>
										<h5><?php echo $action('email') ?></h5>
										<p>
											<a href="<?php echo $row_info['email']?>"><?php echo $row_info['email'] ?></a>
										</p>
									</li>
								<?php
							}
							?>
								
									
								</ul>
							</div>
						</div>
						<!--Contact Information End--> 
						<!--Contact Form Start--> 
						<div class="col-md-7">
							<div class="contact-form"  data-aos="fade-left" data-aos-duration="1500" data-aos-once="true">
								<div class="contact-form-title">
									<h3><?php echo $action("msg") ?></h3>
								</div>
								<form id="contact-form" action="" method="">
									<div class="row">
										<div class="col-md-6">
											<div class="single-input">
												<input name="name" placeholder="<?php echo $action("msg-name")?>" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="single-input">
												<input name="email" placeholder="<?php echo $action("msg-mail")?>" type="email">
											</div>
										</div>
										<div class="col-md-6">
											<div class="single-input">
												<input name="phone" placeholder="<?php echo $action("msg-phone")?>" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="single-input">
												<input name="subject" placeholder="<?php echo $action("msg-subject")?>" type="text">
											</div>
										</div>
										<div class="col-md-12">
											<div class="single-input">
												<textarea name="message" cols="10" rows="4" placeholder="<?php echo $action("msg-body")?>"></textarea>
											</div>
										</div>
										<div class="col-md-12">
											<div class="single-input">
												<button class="sent-btn" type="submit"><?php echo $action("submit")?></button>
											</div>
										</div>
									</div>
								</form>
								<p class="form-messege"></p>
							</div>
						</div>
						<!--Contact Form End-->
					</div>
				</div>
			</div>
			<!--Contact Us Area End-->
			<!--Footer Area Start-->
			<footer>
				<div class="footer-container">
					<!--Footer Top Area Start-->
					<div class="footer-top-area black-bg pt-100 pb-65">
						<div class="container">
							<div class="row">
								<div class="col-md-6 col-lg-3">
									<!--Single Footer Widget Start-->
									<div class="single-footer-widget mb-30">
										<a class="footer-logo " href="index.html"><img class="img-fluid" src="img/logo/logo-footer.png" alt=""></a>
										<p><?php echo $action("sub-footer")?></p>
										<h4 class="newslatter-title"><?php echo $action("newsletter") ?></h4>
										<form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="footer-subscribe-form validate" target="_blank" novalidate>
										<div id="mc_embed_signup_scroll">
											<div id="mc-form" class="mc-form subscribe-form" >
												<input id="mc-email" type="email" autocomplete="off" placeholder="<?php echo $action("entermail") ?>" />
												<button id="mc-submit"><i class="fa fa-paper-plane-o"></i></button>
											</div>
										</div>
									</form>
									</div>
									<!--Single Footer Widget End-->
								</div>
								<!--Single Footer Widget Start-->
								<div class="col-md-6 col-lg-3 footer-menu">
									<div class="single-footer-widget mb-30">
										<h3 class="footer-title"><?php echo $action("quick") ?></h3>
										<ul>
											<li class="active"><a href="#" data-value="home"><?php echo $action("home") ?></a>
											</li>
											<li><a href="#" data-value="about"><?php echo $action("about") ?></a></li>
											<li><a href="#" data-value="services"><?php echo $action("services") ?></a></li>
											<li><a href="#" data-value="contact"><?php echo $action("contact") ?></a></li>
										</ul>
									</div>
								</div>
								<!--Single Footer Widget End-->
								<!--Single Footer Widget Start-->
								<div class="col-md-6 col-lg-3">
									<div class="single-footer-widget mb-30">
										<h3 class="footer-title"><?php echo $action("contact-info") ?></h3>
										<?php
										$select_info_data2 = $cont->prepare("SELECT * FROM contact WHERE lang=?");
										$select_info_data2->execute(array($lang));
										while($row_info2 = $select_info_data2->fetch()){
										?>
										<p class="info-address"><a href="https://www.google.com/maps/place/%D9%85%D9%83%D8%AA%D8%A8+%D8%A7%D9%84%D9%85%D8%AD%D8%A7%D9%85%D9%8A+%D8%A7%D8%A8%D8%B1%D8%A7%D9%87%D9%8A%D9%85+%D8%A7%D9%84%D8%B9%D8%AC%D9%8A%D9%84+%D9%84%D9%84%D9%85%D8%AD%D8%A7%D9%85%D8%A7%D8%A9+%D9%88%D8%A7%D9%84%D8%A7%D8%B3%D8%AA%D8%B4%D8%A7%D8%B1%D8%A7%D8%AA+%D8%A7%D9%84%D9%82%D8%A7%D9%86%D9%88%D9%86%D9%8A%D8%A9%E2%80%AD/@26.4445953,50.1195357,18.75z/data=!4m5!3m4!1s0x3e49fb3a5c936f9d:0xd114a8a020c56494!8m2!3d26.443185!4d50.1168672?hl=ar-US"><?php echo $row_info2['title']?></a></p>
										<p class="contact-info">
											<a href="#"><?php echo $row_info2['phone'] ?></a>
											
										</p>
										<p class="contact-info">
											<a href="mailto:<?php echo $row_info2['email'] ?>"><?php echo $row_info2['email'] ?></a>
										</p>
										<?php
										}
										?>
									</div>
								</div>
								<!--Single Footer Widget End-->
							</div>
						</div>
					</div>
					<!--Footer Top Area End-->
					<!--Footer Bottom Area Start-->
					<div class="footer-bottom-area pt-20 pb-20">
						<div class="container text-center">
								<p>&copy; <?php echo $action("copyright") ?></p>
								<p><?php echo $action("design")?> <a href="http://www.clicktopass.com/">clicktopass</a></p>
						</div>
					</div>
					<!--Footer Bottom Area End-->
				</div>
			</footer>
			<!--Footer Area End-->
		</div>





		<!--All Js Here-->
		
		<!--Jquery 1.12.4-->
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
		<!--Waypoints-->
		<script src="js/waypoints.min.js"></script>
		<!--Counterup-->
		<script src="js/jquery.counterup.min.js"></script>
		<!--Carousel-->
		<script src="js/owl.carousel.min.js"></script>
		<!--Meanmenu-->
		<script src="js/jquery.meanmenu.min.js"></script>
		<!--Instafeed-->
		<script src="js/instafeed.min.js"></script>
		<!--Datepicker-->
		<script src="js/jquery.datepicker.min.js"></script>
		<!--Calendar-->
		<script src="js/zabuto-calendar.min.js"></script>
		<!--ScrollUp-->
		<script src="js/jquery.scrollUp.min.js"></script>
		<!--Wow-->
		<script src="js/wow.min.js"></script>
		<!--Venobox-->
		<script src="js/venobox.min.js"></script>
		<!--Popper-->
		<script src="js/popper.min.js"></script>
		<!--Bootstrap-->
		<script src="js/bootstrap.min.js"></script>
		<!--aos-->
		<script src="js/aos.js"></script>
		<script>
			// This Function For AOS Plugin
			AOS.init();
		</script>

		<!--Plugins-->
		<script src="js/plugins.js"></script>
		<!--Main Js-->
		<script src="js/main.js"></script>
	</body>
</html>
