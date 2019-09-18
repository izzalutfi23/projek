<!-- Breadcrumb section -->
<div class="site-breadcrumb">
	<div class="container">
		<a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
		<span>Profil</span>
	</div>
</div>
<!-- Breadcrumb section end -->


<!-- About section -->
<section class="about-section spad pt-0">
	<div class="container">
		<div class="section-title text-center">
			<h3>Selamat Datang di Excellent Hospitality College</h3>
			<p>Mari bergabung dengan kami</p>
		</div>
		<div class="row">
			<div class="col-lg-6 about-text">
				<h5>Tentang Lembaga</h5>
				<p>Cilacap merupakan salah satu kota industri di Jawa Tengah. Sejak diresmikan Kilang Minyak Pertamina pada tahun 1976. Kota Cilacap Terus berkembang pesat dengan berdirinya Perusahaan baru dan berdirinya pertokoan di sepanjang jalan perkotaan.</p>
				<p>Sejak tahun 2012 sektor jasa di Kota Cilacap terus berkembang pesat dengan adanya Bank-bank baru di Pusat Kota. Selain itu juga banyak berdiri dealer mobil baru karena permintaan pasar yang tinggi.</p>
				<p>Sebagai kota industri maka banyak ekspatriat bekerja di Cilacap. Untuk menunjang mereka maka sejak tahun 2011 sudah dimulai banyak berdiri hotel berbintang baru untuk mengakomodasi para pekerja yang menetap sementara di Cilacap. Sehingga membutuhkan tenaga kerja yang kompeten dibidang perhotelan.</p>
				<p>Selain memiliki keahlian dibidang perhotelan seperti Food Product(tata boga), Food&Beverage Service(tata hidangan) serta HouseKeeping(tata graha), para tenaga kerja tersebut diharapkan dapat berkomunikasi dalam bahasa inggris. Untuk itulah Excellent Hospitality College hadir sebagai lembaga pelatihan kerja dibidang Hotel dan Kapal Pesiar.</p>


				<h5 class="pt-4">Visi</h5>
				<p>Lembaga pendidikan dan keterampilan Excelent Hospitality College sebagai lembaga pendidikan terbaik</p>
				<h5 class="pt-4">Misi</h5>
				<ul class="about-list">
					<li>1. Menyelenggarakan pendidikan dan pelatihan secara profesional dibidang pariwisata</li>
					<li>2. Menyiapkan sumber daya manusia berkualitas yang mampu bersaing dibidang pariwisata</li>
					<li>3. Menyiapkan sumber daya manusia yang berguna bagi diri sendiri, masyarakat, bangsa, dan negara</li>
					<li>4. Membantu mengatasi masalah pengangguran di tanah air</li>
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
			<h3>Direktur</h3>
		</div>
		<div class="row">
			<div class="col-lg-6 pt-5 pt-lg-0">
				<img src="<?=base_url()?>img/about.jpg" alt="">
			</div>
			<div class="col-lg-6 about-text">
				<h5>SUDARNO</h5>
				<p>Alhamdulillahirobbil'alamin, terima kasih kepada Alloh SWT yang telah memberikan rahmat-Nya dan memberkati kita bahwa Profil Perusahaan dari Excellent Hospitality College hadir. Profil Perusahaan adalah tentang Excellent Hospitality College dan digunakan sebagai sarana informasi bagi calon siswa, alumni, pendidik SMA / SMK, layanan Pemerintah terkait dan masyarakat.</p>
				<p>Kami telah mendukung Program Pemerintah melalui program pelatihan di bidang Perhotelan dan Kapal Pesiar yang dimaksudkan untuk memberikan kontribusi dalam mengurangi pengangguran, tingkat kejahatan, dan meningkatkan kekayaan masyarakat terutama bagi keluarga siswa kami.</p>
				<p>Excellent Hospitality College didirikan pada tahun 2009 dan telah beroperasi sejak tahun hingga saat ini. Ini membuktikan bahwa sebagai salah satu kursus pelatihan dan pendidikan, Excellent Hospitality College mampu bersaing melalui Peningkatan kualitas fasilitas untuk memberikan para siswa dalam meningkatkan keterampilan untuk keperluan kompetisi bisnis di bidang perhotelan dan kapal pesiar.</p>
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