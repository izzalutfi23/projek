<!-- Footer section -->
<footer class="footer-section">
	<div class="container footer-top">
		<div class="row">
			<!-- widget -->
			<div class="col-sm-6 col-lg-4 footer-widget">
				<div class="about-widget">
					<img width="80%" height="60px" src="<?=base_url()?>img/lohgo.png" alt="">
					<p>As the best professional education and training course</p>
					<div class="social pt-1">
						<a href=""><i class="fa fa-twitter-square"></i></a>
						<a href=""><i class="fa fa-facebook-square"></i></a>
						<a href=""><i class="fa fa-google-plus-square"></i></a>
						<a href=""><i class="fa fa-linkedin-square"></i></a>
						<a href=""><i class="fa fa-rss-square"></i></a>
					</div>
				</div>
			</div>
			<!-- widget -->
			<div class="col-sm-6 col-lg-4 footer-widget">
				<h6 class="fw-title">USEFUL LINK</h6>
				<div class="dobule-link">
					<ul>
						<li><a href="">Home</a></li>
						<li><a href="">Profil</a></li>
						<li><a href="">Pendaftaran</a></li>
						<li><a href="">Galeri</a></li>
						<li><a href="">Kontak</a></li>
					</ul>
					<ul>
						<li><a href="">Policy</a></li>
						<li><a href="">Term</a></li>
						<li><a href="">Help</a></li>
						<li><a href="">FAQs</a></li>
						<li><a href="">Site map</a></li>
					</ul>
				</div>
			</div>
			<!-- widget -->
			<div class="col-sm-6 col-lg-4 footer-widget">
				<h6 class="fw-title">CONTACT</h6>
				<ul class="contact">
					<li><p><i class="fa fa-map-marker"></i> Jalan Raya Adipala – Maos Rt.02 Rw.01 No.100 Desa Kalikudi
						Kecamatan Adipala Kabupaten Cilacap, Jawa Tengah - Indonesia (53271)
					</p></li>
					<li><p><i class="fa fa-phone"></i> +62 282 – 695 164</p></li>
					<li><p><i class="fa fa-phone"></i> +62 812 891 230 76</p></li>
					<li><p><i class="fa fa-envelope"></i> college.excellent@yahoo.co.id</p></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Excellent Hospitality College</a>
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>		
		</div>
	</footer>
	<!-- Footer section end-->



	<!--====== Javascripts & Jquery ======-->
	<script src="<?=base_url()?>js/jquery-3.2.1.min.js"></script>
	<script src="<?=base_url()?>js/owl.carousel.min.js"></script>
	<script src="<?=base_url()?>js/jquery.countdown.js"></script>
	<script src="<?=base_url()?>js/masonry.pkgd.min.js"></script>
	<script src="<?=base_url()?>js/magnific-popup.min.js"></script>
	<script src="<?=base_url()?>js/main.js"></script>
	<script src="<?=base_url()?>js/map.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<script src="assets/js/jquery.backstretch.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js"></script>
	
	<script>
		window.onscroll = function() {myFunction()};

		var header = document.getElementById("myHeader");
		var sticky = header.offsetTop;

		function myFunction() {
			if (window.pageYOffset > sticky) {
				header.classList.add("fixed-top");
			} else {
				header.classList.remove("fixed-top");
			}
		}
	</script>
</body>
</html>