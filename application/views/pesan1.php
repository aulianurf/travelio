
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Travel &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo URL_ASSETS;?>front/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo URL_ASSETS;?>front/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo URL_ASSETS;?>front/css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="<?php echo URL_ASSETS;?>front/css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo URL_ASSETS;?>front/css/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="<?php echo URL_ASSETS;?>front/css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="<?php echo URL_ASSETS;?>front/css/cs-select.css">
	<link rel="stylesheet" href="<?php echo URL_ASSETS;?>front/css/cs-skin-border.css">
	
	<link rel="stylesheet" href="<?php echo URL_ASSETS;?>front/css/style.css">


	<!-- Modernizr JS -->
	<script src="<?php echo URL_ASSETS;?>front/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="<?php base_url(); ?>welcome"><i class="icon-airplane"></i>Travelio</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active"><a href="<?php base_url(); ?>welcome">Home</a></li>
							<li><a href="<?php echo base_url(); ?>Welcome/register">Daftar</a></li>
							<li><a href="<?php echo base_url(); ?>Welcome/login">Masuk</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<!-- end:header-top -->
		

		<div id="fh5co-contact" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Informasi Penerbangan</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<form action="#">
					<div class="row animate-box">
						<div class="col-md-6">
							<h3 class="section-title">Data Travelmu</h3>
							<ul class="contact-info">
								<li><i class="icon-location-pin"></i>Keberangkatan : <?php echo $rute_from;?></li>
								<li><i class="icon-location-pin"></i>Tujuan : <?php echo $rute_to;?></li>
								<li><i class="icon-calendar"></i>Tanggal : <?php echo $date;?></li>
								<li><i class="icon-clock"></i>Waktu Keberangkatan : <?php echo $depart_at;?> WIB</li>
								<li><i class="icon-price-tag"></i>Harga : <?php echo $price;?></li>
								<li><i class="icon-mail"></i><a href="#">info@travelio.com</a></li>
								<li><i class="icon-globe2"></i><a href="#">www.travelio.com</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Name" name="Name">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Alamat" name="address">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="No.Telephone" name="phone">
									</div>
								</div>
								<div class="col-md-12">
								<div class="form-group">
												<section>
													<select class="form-control">
														<option value="" hidden disabled selected>Jenis Kelamin</option>
														<option value="Laki-laki">Laki-laki</option>
														<option value="Perempuan">Perempuan</option>
													</select>
												</section>
											</div>
									</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Email" name="phone" name="email">
									</div>
								</div>
								<div class="col-md-12">
								<div class="row form-group">
										<label class="sr-only" for="reservation_code">Kode Reservasi</label>
										<input readonly="true" name="reservation_code" id="code_reservation" class="form-control" placeholder="Kode Reservasi Anda" value="<?php Function getRandomCode(){$an ="abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"; $su = strlen($an) - 1; return substr($an, rand(0, $su), 1);}
										for ($i = 0; $i < 6; $i++) echo getRandomCode();?>" required="true">
										<small>*Jangan lupakan kodenya ya :)</small>
										</div>
										</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Send" class="btn btn-primary">
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- END map -->
	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="<?php echo URL_ASSETS;?>front/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo URL_ASSETS;?>front/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo URL_ASSETS;?>front/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo URL_ASSETS;?>front/js/jquery.waypoints.min.js"></script>
	<script src="<?php echo URL_ASSETS;?>front/js/sticky.js"></script>

	<!-- Stellar -->
	<script src="<?php echo URL_ASSETS;?>front/js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="<?php echo URL_ASSETS;?>front/js/hoverIntent.js"></script>
	<script src="<?php echo URL_ASSETS;?>front/js/superfish.js"></script>
	<!-- Magnific Popup -->
	<script src="<?php echo URL_ASSETS;?>front/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo URL_ASSETS;?>front/js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="<?php echo URL_ASSETS;?>front/js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="<?php echo URL_ASSETS;?>front/js/classie.js"></script>
	<script src="<?php echo URL_ASSETS;?>front/js/selectFx.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="<?php echo URL_ASSETS;?>front/js/google_map.js"></script>
	
	<!-- Main JS -->
	<script src="<?php echo URL_ASSETS;?>front/js/main.js"></script>

	</body>
</html>

