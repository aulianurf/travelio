
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TRAVELIO</title>
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
	<link rel="stylesheet" href="<?php echo URL_ASSETS;?>front/css/styletambahan.css">


	<!-- Modernizr JS -->
	<script src="<?php echo URL_ASSETS;?>front/<?php echo URL_ASSETS;?>front/js/modernizr-2.6.2.min.js"></script>
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
	
		<div class="fh5co-hero">
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(<?php echo URL_ASSETS;?>images/a2.jpg);">
				<div class="desc">
					<div class="container">
						<div class="row">
						
							<div class="col-sm-5 col-md-5">
								<div class="tabulation animate-box">

								  <!-- Nav tabs -->
								   <ul class="nav nav-tabs" role="tablist">
								      <li role="presentation" class="active">
								      	<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Penerbangan</a>
								      </li>
								   </ul>

								   <!-- Tab panes -->
									<div class="tab-content">
									<form action="<?php echo base_url('travelio/cari_rute') ?>" method="get">
									 <div role="tabpanel" class="tab-pane active" id="flights">
										<div class="row">
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">From:</label>
													<select class="cs-select cs-skin-border" name="rute_from">
														<option>Jakarta</option>
														<option>Yogyakarta</option>
														<option>Bandung(Husein Sastranegara</option>
														<option>Surabaya</option>
														<option>Semarang</option>
														<option>Bali</option>
													</select>
													
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">To:</label>
													<select class="cs-select cs-skin-border" name="rute_to">
														<option>Bali</option>
														<option>Jakarta</option>
														<option>Kalimantan</option>
														<option>Lombok</option>
														<option>Semarang(Ahmad Yani)</option>
														<option>Balikpapan</option>
														<option>padang</option>
														<option>Aceh</option>
													</select>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-start">Date:</label>
													<input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Jumlah:</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>1</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
													</select>
												</section>
											</div>
											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary btn-block" value="Cari Penerbangan">
											</div>
										</div>
									 </div>
									 </form>
									</div>

								</div>
							</div>
								<div class="col-md-7"></div>
						</div>
					</div>
				</div>
			</div>

		</div>
	

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
	
	<!-- Main JS -->
	<script src="<?php echo URL_ASSETS;?>front/js/main.js"></script>

	</body>
</html>

