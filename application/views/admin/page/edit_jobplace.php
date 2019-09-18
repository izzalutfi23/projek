<div class="right floated thirteen wide computer sixteen wide phone column" id="content">
	<div class="ui container grid">
		<div class="row">
			<div class="sixteen wide computer sixteen wide phone column">
				<h2>Edit Job Placement Officer</h2>
				<div class="ui divider"></div>
			</div>
			<div class="nine wide computer sixteen wide phone column justifed">
				<div class="ui stacked segment">
					<a class="ui red ribbon label">Job Placement</a><br><br>
					<form class="ui form" enctype="multipart/form-data" method="post" action="<?=base_url('admin/proses_job');?>">
						<div class="field">
							<label>Nama</label>
							<input type="hidden" name="id" value="<?=$placement->id;?>">
							<input type="text" name="nama" value="<?=$placement->nama;?>">
						</div>
						<div class="field">
							<label>foto Max(1.5 MB)</label>
							<input type="file" name="foto">
						</div>
						<div class="field">
							<label>Jabatan Sekarang</label>
							<input type="text" name="jabatan" value="<?=$placement->jabatan;?>">
						</div>
						<div class="field">
							<label>Link Facebook</label>
							<input type="text" name="fb" value="<?=$placement->fb;?>">
						</div>
						<div class="field">
							<label>Link Instagram</label>
							<input type="text" name="ig" value="<?=$placement->ig;?>">
						</div>
						<div class="field">
							<label>Link Linkedin</label>
							<input type="text" name="linkedin" value="<?=$placement->linkedin;?>">
						</div>
						<button class="ui button" type="submit" name="edit">Edit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END CONTENT -->