<!-- Hero section -->
<section class="hero-section">
	<div class="hero-slider owl-carousel">
		<?php 
		foreach ($slideshow as $s => $slide) {
			?>
			<div class="hs-item set-bg" data-setbg="img/slideshow/<?=$slide->foto;?>">
				<div class="hs-text">
					<div class="container">
						<div class="row">
							<div class="col-lg-8">
								<div class="hs-subtitle">Excellent Hospitality College</div>
								<h2 class="hs-title"><?=$slide->judul;?></h2>
								<p class="hs-des"><?=$slide->isi;?></p>
								<a href="https://api.whatsapp.com/send?phone=085210539260&text=Selamat%Datang"><div class="site-btn">Chat Whatsapp</div></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>

	</div>
</section>
<!-- Hero section end -->


<!-- Counter section  -->
<section class="counter-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="big-icon">
					<i class="fa fa-comment"></i>
				</div>
				<div class="counter-content">
					<h2>"A good teacher can inspire hope, ignite the imagination , and instill a love of learning"</h2>
					<p><i class="fa fa-user"></i>Brad Henry</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Counter section end -->


<!-- Courses section -->
<section class="courses-section spad">
	<div class="container">
		<div class="section-title text-center">
			<h3>Training Program</h3>
			<p>Provides Several Training Programs You Can Choose</p>
		</div>
		<div class="row">
			<?php 
			foreach ($pelatihan as $p => $pel) {
				?>
				<!-- course item -->
				<div class="col-lg-6 col-md-6 course-item">
					<div class="course-thumb">
						<img height="320px" src="<?=base_url()?>img/pelatihan/<?=$pel->foto;?>" alt="">
						<div class="course-cat">
							<span><?=$pel->judul;?></span>
						</div>
					</div>
					<div class="course-info">
						<h5><?=$pel->keterangan;?></h5>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<!-- Courses section end-->



<!-- Enroll section -->
<section class="enroll-section spad set-bg" data-setbg="img/enroll-bg.jpg">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<div class="section-title text-white">
					<h3>Purpose</h3>
					<p>What is gained by participating in this training?</p>
				</div>
				<div class="enroll-list text-white">
					<div class="enroll-list-item">
						<span>1</span>
						<p>Students get quality knowledge and skills.</p>
					</div>
					<div class="enroll-list-item">
						<span>2</span>
						<p>The students become the independent workers who are able to create the
						job opportunity based on the knowledge and skills they master in.</p>
					</div>
					<div class="enroll-list-item">
						<span>3</span>
						<p>Provide the proffesionals to work in the hospitality industries for
							domestics, overseas, and cruise ships
						.</p>
					</div>
					<div class="enroll-list-item">
						<span>4</span>
						<p>The students become the professionals who are able to compete both in
						domestics and overseas.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 offset-lg-1 p-lg-0 p-4">
				<img src="<?=base_url()?>img/encroll-img.jpg" alt="">
			</div>
		</div>
	</div>
</section>
<!-- Enroll section end -->


<!-- Services section -->
<section class="service-section spad">
	<div class="container services">
		<div class="section-title text-center">
			<h3>FACILITIES</h3>
			<p>We provide facilities and infrastructure to support training activities</p>
		</div>
		<div class="row">
			<div class="col-lg-3 col-sm-6 service-item">
				<div class="service-icon">
					<img src="<?=base_url()?>img/sarana/lobby.png" alt="1">
				</div>
				<div class="service-content">
					<h5>Lobby</h5>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 service-item">
				<div class="service-icon">
					<img src="<?=base_url()?>img/sarana/bar.png" alt="1">
				</div>
				<div class="service-content">
					<h5>Bar</h5>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 service-item">
				<div class="service-icon">
					<img src="<?=base_url()?>img/sarana/restaurant.png" alt="1">
				</div>
				<div class="service-content">
					<h5>6 To 9 Restaurant</h5>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 service-item">
				<div class="service-icon">
					<img src="<?=base_url()?>img/sarana/kitchen.png" alt="1">
				</div>
				<div class="service-content">
					<h5>Kitchen</h5>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 service-item">
				<div class="service-icon">
					<img src="<?=base_url()?>img/sarana/suite.png" alt="1">
				</div>
				<div class="service-content">
					<h5>Suite Room</h5>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 service-item">
				<div class="service-icon">
					<img src="<?=base_url()?>img/sarana/entertainment.png" alt="1">
				</div>
				<div class="service-content">
					<h5>Entertaiment Stage</h5>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 service-item">
				<div class="service-icon">
					<img src="<?=base_url()?>img/sarana/ballroom.png" alt="1">
				</div>
				<div class="service-content">
					<h5>Ballroom</h5>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 service-item">
				<div class="service-icon">
					<img src="<?=base_url()?>img/sarana/fine.png" alt="1">
				</div>
				<div class="service-content">
					<h5>Fine Dining Restaurant</h5>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 service-item">
				<div class="service-icon">
					<img src="<?=base_url()?>img/sarana/classroom.png" alt="1">
				</div>
				<div class="service-content">
					<h5>Class Room</h5>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 service-item">
				<div class="service-icon">
					<img src="<?=base_url()?>img/sarana/meeting.png" alt="1">
				</div>
				<div class="service-content">
					<h5>Meeting Room</h5>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Services section end -->

<!-- About section end-->
<section class="testimonial-section spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-3" style="margin: auto;">
				<a href="#" class="thumbnail">
					<img src="<?=base_url()?>img/logo1.png" class="img-responsive">
				</a>
			</div>
		</div><br><br>
		<div class="section-title text-center">
			<h3 style="color: blue;"><b>EXCELLENT HOSPITALITY COLLEGE GROUP</b></h3>
		</div>
		<div class="row">
			<div class="col-lg-2 col-sm-4 col-xs-1" style="margin: auto;">
				<a href="#" class="thumbnail">
					<img src="<?=base_url()?>img/group/1.png" class="img-responsive">
				</a>
			</div>
			<div class="col-lg-2 col-sm-4 col-xs-1" style="margin: auto;">
				<a href="#" class="thumbnail">
					<img src="<?=base_url()?>img/group/2.png" class="img-responsive">
				</a>
			</div>
			<div class="col-lg-2 col-sm-4 col-xs-1" style="margin: auto;">
				<a href="#" class="thumbnail">
					<img src="<?=base_url()?>img/group/3.png" class="img-responsive">
				</a>
			</div>
		</div><br><br>
		<div class="row">
			<div class="col-lg-2 col-sm-4 col-xs-1" style="margin: auto;">
				<a href="#" class="thumbnail">
					<img src="<?=base_url()?>img/group/4.jpg" class="img-responsive">
				</a>
			</div>
			<div class="col-lg-2 col-sm-4 col-xs-1" style="margin: auto;">
				<a href="#" class="thumbnail">
					<img src="<?=base_url()?>img/group/5.jpg" width="100%" class="img-responsive">
				</a>
			</div>
			<div class="col-lg-2 col-sm-4 col-xs-1" style="margin: auto;">
				<a href="#" class="thumbnail">
					<img src="<?=base_url()?>img/group/6.png" class="img-responsive">
				</a>
			</div>
		</div>
	</div>
</section>
<!-- Testimonial section end -->

<!-- Services section -->
<section class="service-section spad">
	<div class="container services">
		<div class="section-title text-center">
			<h3>CORPORATION</h3><br><br>
			<button class="btn btn-primary">Domestic and Foreign</button>
		</div>
		<div class="top-content">
			<div class="container-fluid">
				<div id="carousel-example" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner row w-100 mx-auto" role="listbox">
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3  active">
							<img src="img/partner/5.png" class="img-fluid mx-auto d-block" alt="img5">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/6.png" class="img-fluid mx-auto d-block" alt="img6">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/2.png" class="img-fluid mx-auto d-block" alt="img2">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/7.png" class="img-fluid mx-auto d-block" alt="img6">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/8.jpg" class="img-fluid mx-auto d-block" alt="img6">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/10.png" class="img-fluid mx-auto d-block" alt="img6">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/11.jpg" class="img-fluid mx-auto d-block" alt="img6">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/12.png" class="img-fluid mx-auto d-block" alt="img6">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/13.jpg" class="img-fluid mx-auto d-block" alt="img6">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/3.png" class="img-fluid mx-auto d-block" alt="img3">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/14.jpg" class="img-fluid mx-auto d-block" alt="img6">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/15.png" class="img-fluid mx-auto d-block" alt="img6">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/16.png" class="img-fluid mx-auto d-block" alt="img6">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/17.png" class="img-fluid mx-auto d-block" alt="img6">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/18.png" class="img-fluid mx-auto d-block" alt="img6">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/4.png" class="img-fluid mx-auto d-block" alt="img4">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/19.png" class="img-fluid mx-auto d-block" alt="img6">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/1.jpg" class="img-fluid mx-auto d-block" alt="img1">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/20.png" class="img-fluid mx-auto d-block" alt="img6">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/21.png" class="img-fluid mx-auto d-block" alt="img6">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/22.png" class="img-fluid mx-auto d-block" alt="img6">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/23.jpg" class="img-fluid mx-auto d-block" alt="img6">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/24.png" class="img-fluid mx-auto d-block" alt="img6">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/9.png" class="img-fluid mx-auto d-block" alt="img6">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/25.png" class="img-fluid mx-auto d-block" alt="img6">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/26.jpg" class="img-fluid mx-auto d-block" alt="img6">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/27.png" class="img-fluid mx-auto d-block" alt="img6">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/28.jpg" class="img-fluid mx-auto d-block" alt="img6">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/29.png" class="img-fluid mx-auto d-block" alt="img6">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/30.jpg" class="img-fluid mx-auto d-block" alt="img6">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/31.jpg" class="img-fluid mx-auto d-block" alt="img6">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/32.png" class="img-fluid mx-auto d-block" alt="img6">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/33.png" class="img-fluid mx-auto d-block" alt="img6">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/34.png" class="img-fluid mx-auto d-block" alt="img6">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/35.png" class="img-fluid mx-auto d-block" alt="img6">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/36.png" class="img-fluid mx-auto d-block" alt="img6">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/37.png" class="img-fluid mx-auto d-block" alt="img6">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/38.png" class="img-fluid mx-auto d-block" alt="img6">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/partner/39.png" class="img-fluid mx-auto d-block" alt="img6">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Services section end -->

<!-- Testimonial section  -->
<section class="testimonial-section spad">
	<div class="container">
		<div class="testimonial-slider owl-carousel">
			<?php 
			foreach ($testimoni as $t => $testi) {
				?>
				<div class="ts-item">
					<div class="row">
						<div class="col-md-3">
							<div class="ts-author-pic set-bg" data-setbg="<?=base_url()?>img/testimoni/<?=$testi->foto;?>"></div>
						</div>
						<div class="col-md-9 ts-text">
							<p>“<?=$testi->isi;?>”</p>
							<h5><?=$testi->nama;?></h5>
							<span><?=$testi->jabatan;?></span>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<!-- Testimonial section end -->


<!-- Blog section -->
<section class="blog-section spad">
	<div class="container">
		<div class="section-title text-center">
			<h3>LATES NEWS</h3>
			<p>Get latest breaking news & top stories today</p>
		</div>
		<div class="row">
			<?php 
			foreach ($blog as $b => $blog) {
				?>
				<div class="col-xl-6">
					<div class="blog-item">
						<div class="blog-thumb set-bg" data-setbg="<?=base_url()?>img/blog/<?=$blog->foto;?>"></div>
						<div class="blog-content">
							<a href="<?=base_url('eng/blog_read/'.$blog->id);?>"><h4><?=$blog->judul;?></h4></a>
							<div class="blog-meta">
								<span><i class="fa fa-calendar-o"></i> <?=date('d M Y', strtotime($blog->tanggal));?></span>
								<span><i class="fa fa-user"></i> <?=$blog->penulis;?></span>
							</div>
							<p><?=substr($blog->isi, 0, 150);?> ...</p>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
	<!-- Blog section -->