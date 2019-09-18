<div class="right floated thirteen wide computer sixteen wide phone column" id="content">
	<div class="ui container grid">
		<div class="row">
			<div class="sixteen wide computer sixteen wide phone column">
				<h2>Edit Galeri</h2>
				<div class="ui divider"></div>
			</div>
			<div class="nine wide computer sixteen wide phone column justifed">
				<div class="ui stacked segment">
					<a class="ui red ribbon label">Galeri</a><br><br>
					<form class="ui form" enctype="multipart/form-data" method="post" action="<?=base_url('admin/proses_galeri');?>">
						<div class="field">
							<label>Kategori</label>
							<input type="hidden" name="id" value="<?=$galeri->id;?>">
							<select name="id_kategori">
								<?php 
								foreach ($kategori as $k => $kat) {
									?>
									<option <?php if($kat->id_kategori==$galeri->id_kategori){ ?>selected="selected"<?php } ?> value="<?=$kat->id_kategori;?>"><?=$kat->kategori;?></option>
								<?php } ?>
							</select>
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