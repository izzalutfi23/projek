<div class="right floated thirteen wide computer sixteen wide phone column" id="content">
	<div class="ui container grid">
		<div class="row">
			<div class="sixteen wide computer sixteen wide phone column">
				<h2>Edit Tutor</h2>
				<div class="ui divider"></div>
			</div>
			<div class="nine wide computer sixteen wide phone column justifed">
				<div class="ui stacked segment">
					<a class="ui red ribbon label">Tutor</a><br><br>
					<form class="ui form" enctype="multipart/form-data" method="post" action="<?=base_url('admin/proses_tutor');?>">
						<div class="field">
							<label>Nama</label>
							<input type="hidden" name="id" value="<?=$tutor->id;?>">
							<input type="text" name="nama" value="<?=$tutor->nama;?>">
						</div>
						<div class="field">
							<label>foto Max(1.5 MB)</label>
							<input type="file" name="foto">
						</div>
						<div class="field">
							<label>Jabatan Sekarang</label>
							<input type="text" name="jabatan" value="<?=$tutor->jabatan;?>">
						</div>
						<div class="field">
							<label>Link Facebook</label>
							<input type="text" name="fb" value="<?=$tutor->fb;?>">
						</div>
						<div class="field">
							<label>Link Instagram</label>
							<input type="text" name="ig" value="<?=$tutor->ig;?>">
						</div>
						<div class="field">
							<label>Link Linkedin</label>
							<input type="text" name="linkedin" value="<?=$tutor->linkedin;?>">
						</div>
						<button class="ui button" type="submit" name="edit">Edit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END CONTENT -->