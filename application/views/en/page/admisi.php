<?php if($this->session->flashdata('berhasil')){ ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Success!</strong> <?=$this->session->flashdata('berhasil');?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php } ?>
<!-- Breadcrumb section -->
<div class="site-breadcrumb">
	<div class="container">
		<a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
		<span>Pendaftaran</span>
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
				<h5 class="pt-4">REQUIREMENT of REGISTRATION</h5>
				<ul class="about-list">
					<li>1. Male	/ Female</li>
					<li>2. Age 17-28 year old</li>
					<li>3. Photo</li>
					<ul style="margin-left: 6%;">
						<li>Size 3X4 = 4 (pcs)</li>
						<li>Size 4x6 = 4 (pcs)</li>
						<li>With a Blue Background</li>
						<li>Need to give the soft file to the Administration Departemen</li>
						<li>Wearing	suit/blazer in black (male/female)</li>
					</ul>
					<li>4. FC last certiicate,	family card, birth certiicate, identitiy card</li>
					<li>5. FC passport and BST (preferable)</li>
					<li>6. Attractive</li>
					<li>7. Ideal in weight and height</li>
					<li>8. Willing	to	follow	the	rules,	having	high	integrity</li>
					<li>9. Willing	to	pay	the	training	fees	in	accordance	with	the	provisions</li>
				</ul>
			</div>
			<div class="col-lg-6 pt-5 pt-lg-0" style="padding: 10px;">
				<h5 class="pt-4">Please fill in the specialization form below</h5><br>
				<!-- Extended default form grid -->
				<form method="post" action="<?=base_url('eng/add_peminat');?>">
					<!-- Grid row -->
					<div class="form-row">
						<!-- Default input -->
						<div class="form-group col-md-6">
							<label for="inputEmail4">Full Name</label>
							<input type="text" name="nama" required="required" class="form-control" required="required" placeholder="Full Name">
						</div>
						<!-- Default input -->
						<div class="form-group col-md-6">
							<label for="inputPassword4">Email Address</label>
							<input type="text" name="email" required="required" required="required" class="form-control" placeholder="Email Address">
						</div>
					</div>
					<!-- Grid row -->

					<!-- Default input -->
					<div class="form-group">
						<label for="inputAddress">Address</label>
						<input type="text" name="alamat" required="required" required="required" class="form-control" placeholder="Address">
					</div>
					<!-- Default input -->
					<div class="form-group">
						<label for="inputAddress2">Mobile Number (Active WA & Must be like the example below)</label>
						<input type="number" required="required" class="form-control" required="required" name="no_hp" placeholder="Example 6281245365435">
					</div>
					<!-- Grid row -->
					<div class="form-row">
						<!-- Default input -->
						<div class="form-group col-md-6">
							<label for="inputCity">Gender</label>
							<div class="radio">
								<label><input type="radio" required="required" name="j_kel" value="L">Male</label>
							</div>
							<div class="radio">
								<label><input type="radio" required="required" name="j_kel" value="P">Female</label>
							</div>
						</div>
						<!-- Default input -->
						<div class="form-group col-md-6">
							<label for="inputZip">Current activity</label>
							<select name="kegiatan" class="form-control">
								<option value="0">--Pilih--</option>
								<option value="Sekolah">School</option>
								<option value="Kuliah">College</option>
								<option value="Lulus">Graduate</option>
								<option value="Sedang Bekerja">Work</option>
								<option value="Lainnya">Other</option>
							</select>
						</div>
					</div>
					<!-- Grid row -->
					<button type="submit" class="btn btn-primary btn-md" aria-describedby="sub" name="tambah">Input the Specialization Form</button>
					<small id="sub" class="form-text text-muted">
						Attention!!!<br>
						After clicking Input Specialization Form we will contact you according to the cellphone number or email you entered above, so make sure the data you entered is valid
					</small>
				</form>
				<!-- Extended default form grid -->

			</div>
		</div>
	</div>
</section>
<!-- About section end-->