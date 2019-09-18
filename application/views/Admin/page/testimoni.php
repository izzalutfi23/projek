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
							<h2>Testimoni</h2>
							<div class="ui divider"></div>
							<button class="ui red button add"><i class="plus icon"></i></button>
							<a href="<?=base_url('admin/testimoni')?>"><button class="ui blue button add">Indo</button></a>
							<a href="<?=base_url('admin/testimoni/en')?>"><button class="ui blue button add">English</button></a>

							<!--Modal-->
							<div class="ui small modal">
								<i class="close icon"></i>
								<div class="header">
									Tambah Testimoni
								</div>
								<div class="content">
									<form class="ui form" enctype="multipart/form-data" method="post" action="<?=base_url('admin/proses_testi');?>">
										<div class="field">
											<label>foto Max(1.5 MB)</label>
											<input type="file" name="foto">
										</div>
										<div class="field">
											<label>Bahasa</label>
											<input type="radio" name="lang" required="required" value="id"> Indonesia
											<input type="radio" name="lang" required="required" value="en"> Inggris
										</div>
										<div class="field">
											<label>Nama</label>
											<input type="text" name="nama" placeholder="Nama">
										</div>
										<div class="field">
											<label>Jabatan Sekarang</label>
											<input type="text" name="jabatan" placeholder="Jabatan Sekarang">
										</div>
										<div class="field">
											<label>Isi</label>
											<textarea cols="5" rows="5" name="isi" placeholder="Isi Testimoni"></textarea>
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
											<th width="10%">Foto</th>
											<th>Nama</th>
											<th>Jabatan Sekarang</th>
											<th>Isi</th>
											<th width="15%">Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no=1;
										foreach ($testimoni as $s => $row) {
											?>
											<tr>
												<td><?=$no++;?></td>
												<td><img width="70px" height="60px" src="<?=base_url()?>img/testimoni/<?=$row->foto;?>"></td>
												<td><?=$row->nama;?></td>
												<td width="15%"><?=$row->jabatan;?></td>
												<td><?=substr($row->isi, 0, 200);?> ...</td>
												<td>
													<a href="<?=base_url('admin/edit_testi/'.$row->id)?>"><button class="ui mini blue button"><i class="edit icon"></i></button></a>
													<a onclick="return confirm('Data akan dihapus!')" href="<?=base_url('admin/del_testi/'.$row->id)?>"><button class="ui mini red button"><i class="trash icon"></i></button></a>
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