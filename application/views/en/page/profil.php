<!-- Breadcrumb section -->
<div class="site-breadcrumb">
	<div class="container">
		<a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
		<span>Profile</span>
	</div>
</div>
<!-- Breadcrumb section end -->


<!-- About section -->
<section class="about-section spad pt-0">
	<div class="container">
		<div class="section-title text-center">
			<h3>WELCOME TO EXCELLENT HOSPITALITY COLLEGE</h3>
			<p>Let's join us</p>
		</div>
		<div class="row">
			<div class="col-lg-6 about-text">
				<h5>About the Institute</h5>
				<p>Cilacap is one of the industrial cities in Central Java. Since the inauguration of the Pertamina Oil Refinery in 1976. The city of Cilacap continues to grow rapidly with the establishment of new companies and the establishment of shops along urban roads.</p>
				<p>Since 2012 the service sector in the city of Cilacap has continued to grow rapidly with the presence of new banks in the City Center. In addition there are also many new car dealers standing because of high market demand.</p>
				<p>As an industrial city, many expatriates work in Cilacap. To support them, since 2011 many new star-rated hotels have begun to accommodate temporary workers in Cilacap. So that it requires workers who are competent in the field of hospitality.</p>
				<p>In addition to having expertise in the field of hotels such as Food Products, Food & Beverage Service and HouseKeeping, the workers are expected to communicate in English. For this reason, Excellent Hospitality College is present as a job training institution in the field of Hotels and Cruise Ships.</p>


				<h5 class="pt-4">Vision</h5>
				<p>As the best professional education and training course</p>
				<h5 class="pt-4">Mission</h5>
				<ul class="about-list">
					<li>1. Performing the professional education and training in the field of tourism</li>
					<li>2. Preparing skillful human resource who are able to compete in the field of
						tourism
					</li>
					<li>3. Preparing the useful human resource for himself, society, nation and state
					</li>
					<li>4. Helping the unemployment issue in Indonesia</li>
				</ul>
			</div>
			<div class="col-lg-6 pt-5 pt-lg-0">
				<img src="<?=base_url()?>img/about.jpg" alt="">
			</div>
		</div>
	</div>
</section>
<!-- About section end-->

<section class="testimonial-section spad">
	<div class="container">
		<div class="section-title text-center">
			<h3>Director</h3>
		</div>
		<div class="row">
			<div class="col-lg-6 pt-5 pt-lg-0">
				<img src="<?=base_url()?>img/about.jpg" alt="">
			</div>
			<div class="col-lg-6 about-text">
				<h5>SUDARNO</h5>
				<p>Alhamdulillahirobbil'alamin, thanks to Alloh SWT who has given His mercy
					and bless to us that the Company Profile of Excellent Hospitality College is
					present. The Company Profile is about Excellent Hospitality College and used as
					a means of information to the prospective students, the alumni, the educators
				of SMA/SMK, the related Government services and the society.</p>
				<p>We have been supporting the Government Program through the training
					program in the field of Hospitality and Cruise Ship that is intended to give a
					contribution in decreasing the unemployment, the crime rate, and increasing
				the wealth of the society especially for our student's family.</p>
				<p>Excellent Hospitality College was established in 2009 and has been in
					operation since the year until today. This proves that as one of the training and
					education courses, Excellent Hospitality College is able to compete through the
					Enhancement of the quality of the facilities to provide the students to in
					improving the skills for the purpose of the business competition in the field of
				hospitality and cruise ship.</p>
			</div>
		</div>
	</div>
</section>
<!-- Testimonial section end -->


<!-- Team section  -->
<section class="team-section spad">
	<div class="container">
		<div class="section-title text-center">
			<h3>Coach</h3>
			<p>The professional standards and expectations</p>
		</div>
		<div class="row">
			<?php 
			foreach ($tutor as $t => $tut) {
				?>
				<div class="col-md-6 col-lg-3">
					<div class="member">
						<div class="member-pic set-bg" data-setbg="<?=base_url()?>img/tutor/<?=$tut->foto;?>">
							<div class="member-social">
								<a href="<?=$tut->fb;?>"><i class="fa fa-facebook"></i></a>
								<a href="<?=$tut->ig;?>"><i class="fa fa-instagram"></i></a>
								<a href="<?=$tut->linkedin;?>"><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
						<h5><?=$tut->nama;?></h5>
						<p><?=$tut->jabatan;?></p>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>

<!-- Team section  -->
<section class="team-section spad">
	<div class="container">
		<div class="section-title text-center">
			<h3>Job Placement Officer</h3>
			<p>The professional standards and expectations</p>
		</div>
		<div class="row">
			<?php 
				foreach ($placement as $t => $tut) {
			 ?>
			<div class="col-md-6 col-lg-3">
				<div class="member">
					<div class="member-pic set-bg" data-setbg="<?=base_url()?>img/job_place/<?=$tut->foto;?>">
						<div class="member-social">
							<a href="<?=$tut->fb;?>"><i class="fa fa-facebook"></i></a>
							<a href="<?=$tut->ig;?>"><i class="fa fa-instagram"></i></a>
							<a href="<?=$tut->linkedin;?>"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
					<h5><?=$tut->nama;?></h5>
					<p><?=$tut->jabatan;?></p>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</section>
	<!-- Team section end -->