<div class="right floated thirteen wide computer sixteen wide phone column" id="content">
	<div class="ui container grid">
		<div class="row">
			<div class="sixteen wide computer sixteen wide phone column">
				<h2>Edit Berita</h2>
				<div class="ui divider"></div>
			</div>
			<div class="fiveteen wide computer sixteen wide phone column justifed">
				<div class="ui stacked segment">
					<a class="ui red ribbon label">Blog</a><br><br>
					<form class="ui form" enctype="multipart/form-data" method="post" action="<?=base_url('admin/proses_blog');?>">
						<div class="field">
							<label>foto (Max 1.5 MB)</label>
							<input type="hidden" name="id" value="<?=$blog->id;?>">
							<input type="file" name="foto">
						</div>
						<div class="field">
							<label>Judul</label>
							<input type="text" name="judul" value="<?=$blog->judul;?>">
						</div>
						<div class="field">
							<label>Bahasa</label>
							<input type="radio" name="lang" <?php if($blog->lang=='id'){ ?>checked="checked"<?php } ?> required="required" value="id"> Indonesia
							<input type="radio" name="lang" <?php if($blog->lang=='en'){ ?>checked="checked"<?php } ?> required="required" value="en"> Inggris
						</div>
						<div class="field">
							<label>Tanggal</label>
							<input type="text" name="tanggal" readonly="readonly" value="<?=date('Y-m-d');?>">
						</div>
						<div class="field">
							<label>Penulis</label>
							<input type="text" name="penulis" value="<?=$blog->penulis;?>">
						</div>
						<div class="field">
							<label>Isi Berita</label>
							<textarea name="isi" id="text-ckeditor"><?=$blog->isi;?></textarea>
							<script type="text/javascript">
								CKEDITOR.replace('text-ckeditor');
							</script>
						</div>
						<button class="ui button" type="submit" name="edit">Edit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END CONTENT -->