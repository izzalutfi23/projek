<?php if($this->session->flashdata('berhasil')){ ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Berhasil!</strong> <?=$this->session->flashdata('berhasil');?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php } ?>
<!-- Breadcrumb section -->
<div class="site-breadcrumb">
	<div class="container">
		<a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
		<span>Kontak</span>
	</div>
</div>
<!-- Breadcrumb section end -->


<!-- Courses section -->
<section class="contact-page spad pt-0">
	<div class="container">
		<div class="map-section">
			<div class="contact-info-warp">
				<div class="contact-info">
					<h4>Alamat</h4>
					<p>Jl. Adipala - Maos No 100 Rt 02, Rw 01, Desa Kalikudi, Kec. Adipala, Kab. Cilacap 53271</p>
				</div>
				<div class="contact-info">
					<h4>Telepon</h4>
					<p>0282-695 164</p>
					<p>0812 891 230 76</p>
				</div>
				<div class="contact-info">
					<h4>Email</h4>
					<p>college.excellent@yahoo.co.id</p>
				</div>
				<div class="contact-info">
					<h4>Whatsapp</h4>
					<p><button class="site-btn">Chat Whatsapp</button></p>
				</div>
			</div>
			<!-- Google map -->
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.5031375055937!2d109.14645831432459!3d-7.628912977555974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e656a49b75101bf%3A0x3fbe09a82481afdc!2sExcellent+Hospitality+College+(EHC)+Cilacap!5e0!3m2!1sid!2sid!4v1564040142098!5m2!1sid!2sid" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="contact-form spad pb-0">
			<div class="section-title text-center">
				<h3>GET IN TOUCH</h3>
				<p>Contact us if any queries</p>
			</div>
			<form class="comment-form --contact" method="post" action="<?=base_url('home/add_pesan')?>">
				<div class="row">
					<div class="col-lg-4">
						<input type="text" name="nama" placeholder="Your Name">
					</div>
					<div class="col-lg-4">
						<input type="text" name="email" placeholder="Your Email">
					</div>
					<div class="col-lg-4">
						<input type="text" name="subjek" placeholder="Subject">
					</div>
					<div class="col-lg-12">
						<textarea placeholder="Message" name="isi"></textarea>
						<div class="text-center">
							<button class="site-btn" type="submit">SUBMIT</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
	<!-- Courses section end-->