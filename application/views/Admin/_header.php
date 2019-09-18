<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="initial-scale=1, minimum-scale=1, width=device-width" name="viewport">
	<meta name="robots" content="all,follow">
	<title><?=$title;?></title>
	<script type="text/javascript" src="<?=base_url()?>ckeditor/ckeditor.js"></script>
	<link rel="stylesheet" href="<?=base_url()?>vendor/semantic-ui/semantic.min.css">
	<link rel="stylesheet" href="<?=base_url()?>vendor/dataTables/css/dataTables.semanticui.min.css">
	<link rel="stylesheet" href="<?=base_url()?>vendor/custom/themes.min.css">
	<link rel="stylesheet" href="<?=base_url()?>vendor/custom/themes.min.css">
	<style type="text/css">
	.icon{
		padding-left: 5px;
	}
	.active{
		background: #DFDBE5;
	}
</style>
</head>
<body>
	<!-- BEGIN NAVBAR -->
	<div class="ui grid">
		<!-- COMPUTER ONLY NAVBAR -->
		<div class="computer only row">
			<div class="column">
				<div class="ui top fixed menu" id="menucolored">
					<div class="left menu">
						<div class="nav item" id="itemfont">ADMIN</div>
					</div>
					<div class="ui top pointing dropdown admindropdown link item right" id="itemfont">
						<span class="rapihkan"><?=$user->nama;?></span>
						<i class="dropdown icon"></i>
						<div class="menu">
							<a href="<?=base_url('login/logout')?>"><div class="item"><p><i class="sign out alternate icon"></i>Logout</p></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END COMPUTER ONLY NAVBAR -->

			<!-- BEGIN MOBILE TABLET ONLY MENU -->
			<div class="tablet mobile only row">
				<div class="column">
					<div class="ui top fixed menu" id="menucolored">
						<a id="showmenu" class="item" style="color: #FFFFFF;"><i class="content icon"></i></a>
						<div class="item" style="width:100%;">
							<span style="padding-left:10px; color: #FFFFFF">MK ADMIN</span>
						</div>
					</div>
				</div>
			</div>
			<div class="tablet mobile only row">
				<div id="menukiri" class="menukiri lipat hidden">
					<div class="ui left fixed vertical menu">
						<div class="item" style="text-align: center;">
							<table>
								<tr>
									<td>
										<span class="" style="margin-left: 10px;">MK ADMIN</span>
									</td>
								</tr>
							</table>
						</div>
						<a class="item <?php if($active=="home"){ ?> active <?php } ?>" href="<?=base_url('admin')?>"><i class="home icon"></i> Home</a>
						<a class="item <?php if($active=="slideshow"){ ?> active <?php } ?>" href="<?=base_url('admin/slideshow')?>"><i class="image icon"></i> Slideshow</a>
						<a class="item <?php if($active=="galeri"){ ?> active <?php } ?>" href="<?=base_url('admin/galeri')?>"><i class="images icon"></i> Galeri</a>
						<a class="item <?php if($active=="blog"){ ?> active <?php } ?>" href="<?=base_url('admin/blog')?>"><i class="newspaper outline icon"></i> Blog</a>
						<a class="item <?php if($active=="pendaftar"){ ?> active <?php } ?>" href="<?=base_url('admin/pendaftar')?>"><i class="user icon"></i> Pendaftar</a>
						<a class="item <?php if($active=="testimoni"){ ?> active <?php } ?>" href="<?=base_url('admin/testimoni')?>"><i class="users icon"></i> Testimoni</a>
						<a class="item <?php if($active=="pelatihan"){ ?> active <?php } ?>" href="<?=base_url('admin/pelatihan')?>"><i class="building icon"></i> Pelatihan</a>
						<a class="item <?php if($active=="tutor"){ ?> active <?php } ?>" href="<?=base_url('admin/tutor')?>"><i class="user icon"></i> Tutor</a>
						<a class="item <?php if($active=="job_place"){ ?> active <?php } ?>" href="<?=base_url('admin/job_place')?>"><i class="user icon"></i> Job Placement</a>
						<div class="item" id="hidemenu" style="text-align: center;">
							<button class="fluid ui button">
								Close
							</button>
						</div>
					</div>
				</div>
			</div>
			<!-- END MOBILE TABLET ONLY MENU -->
		</div>
		<!-- END NAVBAR -->
		<div class="ui grid">
			<div class="row">
				<div class="ui grid">
					<!-- COMPUTER ONLY SIDEBAR -->
					<div class="computer only row">
						<!-- BEGIN SIDEBAR -->
						<div class="left floated three wide computer column" id="sidebar">
							<div class="ui vertical fluid menu">
								<div class="menu-rapih-top"></div>
								<div class="item">
									<img src="<?=base_url()?>img/logo1.png" id="adminimage-navbar">
								</div>
								<a class="item <?php if($active=="home"){ ?> active <?php } ?>" href="<?=base_url('admin')?>"><i class="home icon"></i> Home</a>
								<a class="item <?php if($active=="slideshow"){ ?> active <?php } ?>" href="<?=base_url('admin/slideshow')?>"><i class="image icon"></i> Slideshow</a>
								<a class="item <?php if($active=="galeri"){ ?> active <?php } ?>" href="<?=base_url('admin/galeri')?>"><i class="images icon"></i> Galeri</a>
								<a class="item <?php if($active=="blog"){ ?> active <?php } ?>" href="<?=base_url('admin/blog')?>"><i class="newspaper outline icon"></i> Blog</a>
								<a class="item <?php if($active=="pendaftar"){ ?> active <?php } ?>" href="<?=base_url('admin/pendaftar')?>"><i class="user icon"></i> Pendaftar</a>
								<a class="item <?php if($active=="testimoni"){ ?> active <?php } ?>" href="<?=base_url('admin/testimoni')?>"><i class="users icon"></i> Testimoni</a>
								<a class="item <?php if($active=="pelatihan"){ ?> active <?php } ?>" href="<?=base_url('admin/pelatihan')?>"><i class="building icon"></i> Pelatihan</a>
								<a class="item <?php if($active=="tutor"){ ?> active <?php } ?>" href="<?=base_url('admin/tutor')?>"><i class="user icon"></i> Tutor</a>
								<a class="item <?php if($active=="job_place"){ ?> active <?php } ?>" href="<?=base_url('admin/job_place')?>"><i class="user icon"></i> Job Placement</a>
								<a class="item <?php if($active=="pesan"){ ?> active <?php } ?>" href="<?=base_url('admin/pesan')?>"><i class="mail icon"></i> Pesan Masuk</a>
								<div class="menu-rapih-bottom"></div>
								<div class="ui hidden divider"></div>
							</div>
						</div>
						<!-- END SIDEBAR -->
					</div>
					<!-- END COMPUTER ONLY SIDEBAR -->
				</div>
			<!-- / Header -->