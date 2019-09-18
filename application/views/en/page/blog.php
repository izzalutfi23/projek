<!-- Breadcrumb section -->
<div class="site-breadcrumb">
	<div class="container">
		<a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
		<span>Blog</span>
	</div>
</div>
<!-- Breadcrumb section end -->


<!-- Blog page section  -->
<section class="blog-page-section spad pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 post-list">

				<?php 
					foreach ($blog as $b => $row) {
				 ?>
				<div class="post-item">
					<div class="post-thumb set-bg" data-setbg="<?=base_url()?>img/blog/<?=$row->foto;?>"></div>
					<div class="post-content">
						<h3><a href="<?=base_url('eng/blog_read/'.$row->id);?>"><?=$row->judul;?></a></h3>
						<div class="post-meta">
							<span><i class="fa fa-calendar-o"></i> <?=date('d M Y', strtotime($row->tanggal));?></span>
							<span><i class="fa fa-user"></i> <?=$row->penulis;?></span>
						</div>
						<p><?=substr($row->isi, 0, 700);?> ...</p>
					</div>
				</div>
				<?php } ?>

				<?=$this->pagination->create_links();?>
			</div>
			<!-- sidebar -->
			<div class="col-sm-8 col-md-5 col-lg-4 col-xl-3 offset-xl-1 offset-0 pl-xl-0 sidebar">
				<!-- widget -->
				<div class="widget">
					<form class="search-widget">
						<input type="text" placeholder="Search...">
						<button><i class="ti-search"></i></button>
					</form>
				</div>
				<!-- widget -->
				<div class="widget">
					<h5 class="widget-title">Recent News</h5>
					<div class="recent-post-widget">
						<!-- recent post -->
						<?php 
							foreach ($recent as $r => $rec) {
						 ?>
						<div class="rp-item">
							<div class="rp-thumb set-bg" data-setbg="<?=base_url()?>img/blog/<?=$rec->foto;?>"></div>
							<div class="rp-content">
								<h6><a style="color: #000;" href="<?=base_url('eng/blog_read/'.$rec->id);?>"><?=$rec->judul;?></a></h6>
								<p><i class="fa fa-clock-o"></i> <?=date('d M Y', strtotime($rec->tanggal));?></p>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>
	<!-- Blog page section end -->