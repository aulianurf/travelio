
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


	<!-- Modernizr JS -->
	<script src="<?php echo URL_ASSETS;?>front/<?php echo URL_ASSETS;?>front/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body class="hold-transition cari-page"  style="background-image: url(<?php echo URL_ASSETS;?>images/a3.jpg); background-size:cover;">
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
			<div class="container">
				<table id="table_id" class="table table-bordered table-striped table-hover">
				<thead>
				<tr>
					<th>Airline</th>
					<th>Berangkat</th>
					<th>Kedatangan</th>
					<th>Dari</th>
					<th>ke</th>
					<th>Harga</th>
					<th>Aksi</th>
				</tr>
				</thead>
				<!-- Script menampilkan hasil pencarian -->
				<tbody>
					<?php
					foreach ($rute->result() as $rute) 
						{?>
						<tr>
							<td><?php echo $rute->transportation_id ?></td>
							<td><?php echo $rute->depart_at ?></td>
							<td><?php echo $rute->arrival_at ?></td>
							<td><?php echo $rute->rute_from ?></td>
							<td><?php echo $rute->rute_to ?></td>
							<td><?php echo $rute->price ?></td>
							<td>
								<a href="<?php echo base_url();?>welcome/pesan/<?php echo  $rute->id; ?>" class="btn btn-info" onclick="pesan(<?php echo $rute->id;?>)">pesan</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
				</table>
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

