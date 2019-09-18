<!DOCTYPE html>
<html>
<head>
	<title><?=$title;?></title>
	<meta charset="UTF-8">
	<meta name="description" content="Unica University Template">
	<meta name="keywords" content="event, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="<?=base_url()?>img/fav1.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="<?=base_url()?>https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?=base_url()?>css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?=base_url()?>css/font-awesome.min.css"/>
	<link rel="stylesheet" href="<?=base_url()?>css/themify-icons.css"/>
	<link rel="stylesheet" href="<?=base_url()?>css/magnific-popup.css"/>
	<link rel="stylesheet" href="<?=base_url()?>css/animate.css"/>
	<link rel="stylesheet" href="<?=base_url()?>css/owl.carousel.css"/>
	<link rel="stylesheet" href="<?=base_url()?>css/style.css"/>
	<link rel="stylesheet" href="<?=base_url()?>assets/css/animate.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/carousel.css">

	<style type="text/css">
		.partner img{
			width: 80px;
			height: 80px;
		}
		@media only screen and (max-width: 767px){
			.nav-switch {
				right: 30px;
				font-size: 30px;
				color: #111;
				padding-top: 8px;
				float: left;
				display: block;
			}
		}
		.fa-bars{
			color: #FFF;
		}
	</style>

	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- header section -->
	<header class="header-section">
		<div class="container">
			<!-- logo -->
			<a href="index.html" class="site-logo"><img src="<?=base_url()?>img/lohgo.png" height="60px"></a>
			<div class="header-info">
				<div class="hf-item">
					<i class="fa fa-envelope"></i>
					<p><span>Email:</span>college.excellent@yahoo.co.id</p>
				</div>
				<div class="hf-item">
					<i class="fa fa-map-marker"></i>
					<p><span>Find us:</span>Desa Kalikudu, Kec. Adipala, Kab Cilacap</p>
				</div>
			</div>
		</div>
	</header>
	<!-- header section end-->


	<!-- Header section  -->
	<nav class="nav-section" id="myHeader">
		<div class="container">
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<div class="nav-right">
				<a href="<?=base_url('home')?>"><img src="<?=base_url()?>img/flag/id.png" width="25px" height="15px"></a>
				<a href="<?=base_url('eng')?>"><img src="<?=base_url()?>img/flag/en.png" width="25px" height="15px"></a>
				<a href=""><i class="fa fa-search"></i></a>
			</div>
			<ul class="main-menu">
				<li <?php if($active=="home"){ ?>class="active"<?php } ?>><a href="<?=base_url('eng');?>">Home</a></li>
				<li <?php if($active=="profil"){ ?>class="active"<?php } ?>><a href="<?=base_url('eng/profil');?>">Profile</a></li>
				<li <?php if($active=="admission"){ ?>class="active"<?php } ?>><a href="<?=base_url('eng/admission');?>">Admission</a></li>
				<li <?php if($active=="galeri"){ ?>class="active"<?php } ?>><a href="<?=base_url('eng/galeri');?>">Galery</a></li>
				<li <?php if($active=="blog"){ ?>class="active"<?php } ?>><a href="<?=base_url('eng/blog');?>">Blog</a></li>
				<li <?php if($active=="kontak"){ ?>class="active"<?php } ?>><a href="<?=base_url('eng/kontak');?>">Contact</a></li>
			</ul>
		</div>
	</nav>
	<!-- Header section end -->