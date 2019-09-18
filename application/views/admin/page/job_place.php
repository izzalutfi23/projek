			<!-- BEGIN CONTENT -->
			<div class="right floated thirteen wide computer sixteen wide phone column" id="content">
				<div class="ui container grid">
					<?php if($this->session->flashdata('berhasil')){ ?>
						<div class="ui message">
							<i class="close icon"></i>
							<div class="header">
								Success!
							</div>
							<p><?=$this->session->userdata('berhasil');?></p>
						</div>
					<?php } ?>
					<div class="row">
						<div class="fiveteen wide computer sixteen wide phone column justifed">
							<h2>Job Placement Officer</h2>
							<div class="ui divider"></div>
							<button class="ui red button add"><i class="plus icon"></i></button>

							<!--Modal-->
							<div class="ui small modal">
								<i class="close icon"></i>
								<div class="header">
									Tambah Job Placement
								</div>
								<div class="content">
									<form class="ui form" enctype="multipart/form-data" method="post" action="<?=base_url('admin/proses_job');?>">
										<div class="field">
											<label>Nama</label>
											<input type="text" required="required" name="nama" placeholder="Nama">
										</div>
										<div class="field">
											<label>foto Max(1.5 MB)</label>
											<input type="file" required="required" name="foto">
										</div>
										<div class="field">
											<label>Jabatan Sekarang</label>
											<input type="text" required="required" name="jabatan" placeholder="Jabatan Sekarang">
										</div>
										<div class="field">
											<label>Link Facebook</label>
											<input type="text" required="required" name="fb" placeholder="Link Facebook">
										</div>
										<div class="field">
											<label>Link Instagram</label>
											<input type="text" required="required" name="ig" placeholder="Link Instagram">
										</div>
										<div class="field">
											<label>Link Linkedin</label>
											<input type="text" required="required" name="linkedin" placeholder="Link Linkedin">
										</div>
									</div>
									<div class="actions">
										<button class="ui button" type="submit" name="tambah">Tambah</button>
									</div>
								</form>
							</div>
							<!--End Modal-->
							<div class="ui stacked segment">
								<table id="tablenya" class="ui celled table" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th width="7%">No</th>
											<th>Nama</th>
											<th width="10%">Foto</th>
											<th>Jabatan Sekarang</th>
											<th>Link Facebook</th>
											<th>Link Instagram</th>
											<th>Link Linkedin</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no=1;
										foreach ($placement as $s => $row) {
											?>
											<tr>
												<td><?=$no++;?></td>
												<td><?=$row->nama;?></td>
												<td><img width="70px" height="60px" src="<?=base_url()?>img/job_place/<?=$row->foto;?>"></td>
												<td width="15%"><?=$row->jabatan;?></td>
												<td><?=substr($row->fb, 0, 15);?>...</td>
												<td><?=substr($row->ig, 0, 15);?>...</td>
												<td><?=substr($row->linkedin, 0, 15);?>...</td>
												<td>
													<a href="<?=base_url('admin/edit_jobplace/'.$row->id)?>"><button class="ui mini blue button"><i class="edit icon"></i></button></a>
													<a onclick="return confirm('Data akan dihapus!')" href="<?=base_url('admin/del_jobplace/'.$row->id)?>"><button class="ui mini red button"><i class="trash icon"></i></button></a>
												</td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END CONTENT -->

		</div>
	</div>
	<!--/Tabel-->