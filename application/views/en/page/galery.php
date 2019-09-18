<!-- Breadcrumb section -->
<div class="site-breadcrumb">
	<div class="container">
		<a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
		<span>Galery</span>
	</div>
</div>
<!-- Breadcrumb section end -->

<?php 
	foreach ($kategori as $k => $kat) {
 ?>
<!-- Services section -->
<section class="about-section spad pt-0">
	<div class="container">
		<div class="section-title text-center">
			<h3><?=$kat->kategori;?></h3>
		</div>
		<div class="gallery-section">
			<div class="gallery">
				<div class="grid-sizer"></div>
				<?php 
					foreach ($galeri as $g => $gal) {
						if($kat->id_kategori==$gal->id_kategori){
				 ?>
				<div class="gallery-item gi-long set-bg" data-setbg="<?=base_url()?>img/galeri/<?=$gal->foto;?>">
					<a class="img-popup" href="<?=base_url()?>img/galeri/<?=$gal->foto;?>"><i class="ti-plus"></i></a>
				</div>
				<?php }} ?>
			</div>
		</div>
	</div>
</section>
<!-- Services section end -->
<?php } ?>