<div class="right floated thirteen wide computer sixteen wide phone column" id="content">
	<div class="ui container grid">
		<div class="row">
			<div class="sixteen wide computer sixteen wide phone column">
				<h2>Edit Slideshow</h2>
				<div class="ui divider"></div>
			</div>
			<div class="nine wide computer sixteen wide phone column justifed">
				<div class="ui stacked segment">
					<a class="ui red ribbon label">Slideshow</a><br><br>
					<form class="ui form" enctype="multipart/form-data" method="post" action="<?=base_url('admin/proses_slide');?>">
						<div class="field">
							<label>Judul</label>
							<input type="hidden" name="id" value="<?=$slideshow->id;?>">
							<input type="text" name="judul" value="<?=$slideshow->judul;?>">
						</div>
						<div class="field">
							<label>Bahasa</label>
							<input type="radio" name="lang" <?php if($slideshow->lang=='id'){ ?>checked="checked"<?php } ?> required="required" value="id"> Indonesia
							<input type="radio" name="lang" <?php if($slideshow->lang=='en'){ ?>checked="checked"<?php } ?> required="required" value="en"> Inggris
						</div>
						<div class="field">
							<label>Isi</label>
							<textarea cols="5" rows="5" name="isi"><?=$slideshow->isi;?></textarea>
						</div>
						<div class="field">
							<label>foto</label>
							<input type="file" name="foto">
						</div>
						<button class="ui button" type="submit" name="edit">Edit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END CONTENT -->