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
		<span>Pendaftaran</span>
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
				<h5 class="pt-4">Persyaratan Pendaftaran</h5>
				<ul class="about-list">
					<li>1. Pria/Wanita</li>
					<li>2. Usia 17-28 tahun </li>
					<li>3. Foto</li>
					<ul style="margin-left: 6%;">
						<li>Ukuran 3X4 = 4 lembar</li>
						<li>Ukuran 4X6 = 4 lembar</li>
						<li>Background Biru</li>
						<li>Ukuran 3X4 = 4 lembar</li>
						<li>Soft File diberikan kepada Bag. Administrasi</li>
						<li>Menggunakan jas/blazer warna hitam (pria/wanita)</li>
					</ul>
					<li>4. FC ijazah terakhir, KK, Akta Lahir, KTP</li>
					<li>5. FC Paspor dan BTS (bila sudah punya)</li>
					<li>6. Berpenampilan menarik</li>
					<li>7. Tinggi dan berat badan proporsional</li>
					<li>8. Bersedia mengikuti peraturan, memiliki integritas yang tinggi</li>
					<li>9. Membayar biaya pelatihan sesuai pelatihan</li>
				</ul>
			</div>
			<div class="col-lg-6 pt-5 pt-lg-0" style="padding: 10px;">
				<h5 class="pt-4">Silahkan isi form peminatan di bawah ini</h5><br>
				<!-- Extended default form grid -->
				<form method="post" action="<?=base_url('home/add_peminat');?>">
					<!-- Grid row -->
					<div class="form-row">
						<!-- Default input -->
						<div class="form-group col-md-6">
							<label for="inputEmail4">Nama Lengkap</label>
							<input type="text" name="nama" class="form-control" required="required" placeholder="Nama Lengkap">
						</div>
						<!-- Default input -->
						<div class="form-group col-md-6">
							<label for="inputPassword4">Alamat Email</label>
							<input type="text" name="email" class="form-control" required="required" placeholder="Alamat Email">
						</div>
					</div>
					<!-- Grid row -->

					<!-- Default input -->
					<div class="form-group">
						<label for="inputAddress">Alamat</label>
						<input type="text" name="alamat" class="form-control" required="required" placeholder="Alamat Lengkap">
					</div>
					<!-- Default input -->
					<div class="form-group">
						<label for="inputAddress2">No HP (Aktif WA & Harus seperti contoh di bawah)</label>
						<input type="number" class="form-control" name="no_hp" required="required" placeholder="Contoh 6281245365435">
					</div>
					<!-- Grid row -->
					<div class="form-row">
						<!-- Default input -->
						<div class="form-group col-md-6">
							<label for="inputCity">Jenis Kelamin</label>
							<div class="radio">
								<label><input type="radio" name="j_kel" required="required" value="L">Laki-laki</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="j_kel" required="required" value="P">Perempuan</label>
							</div>
						</div>
						<!-- Default input -->
						<div class="form-group col-md-6">
							<label for="inputZip">Kegiatan saat ini</label>
							<select name="kegiatan" class="form-control" required="required">
								<option value="0">--Pilih--</option>
								<option value="Sekolah">Sekolah</option>
								<option value="Kuliah">Kuliah</option>
								<option value="Lulus">Lulus</option>
								<option value="Sedang Bekerja">Sedang Bekerja</option>
								<option value="Lainnya">Lainnya</option>
							</select>
						</div>
					</div>
					<!-- Grid row -->
					<button type="submit" class="btn btn-primary btn-md" aria-describedby="sub" name="tambah">Input Form Peminatan</button>
					<small id="sub" class="form-text text-muted">
						Perhatian!!!<br>
						Setelah klik Input Form Peminatan kami akan menghubungi anda sesuai dengan nomor Hp atau email yang anda masukkan di atas, jadi pastikan data yang anda masukkan valid
					</small>
				</form>
				<!-- Extended default form grid -->

			</div>
		</div>
	</div>
</section>
<!-- About section end-->