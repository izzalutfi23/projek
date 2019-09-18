			<!-- BEGIN CONTENT -->
			<div class="right floated thirteen wide computer sixteen wide phone column" id="content">
				<div class="ui container grid">
					<!--Flashdata-->
					<?php if($this->session->flashdata('berhasil')){ ?>
						<div class="ui message">
							<i class="close icon"></i>
							<div class="header">
								Success!
							</div>
							<p><?=$this->session->userdata('berhasil');?></p>
						</div>
					<?php } ?>
					<!--End flashdata-->
					<div class="row">
						<div class="fiveteen wide computer sixteen wide phone column justifed">
							<h2>Galeri</h2>
							<div class="ui divider"></div>
							<button class="ui red button add"><i class="plus icon"></i></button>

							<!--Modal-->
							<div class="ui small modal">
								<i class="close icon"></i>
								<div class="header">
									Tambah Galeri 
								</div>
								<div class="content">
									<form class="ui form" enctype="multipart/form-data" method="post" action="<?=base_url('admin/proses_galeri');?>">
										<div class="field">
											<label>Kategori</label>
											<select name="id_kategori">
												<?php 
													foreach ($kategori as $k => $kat) {
												 ?>
												<option value="<?=$kat->id_kategori;?>"><?=$kat->kategori;?></option>
												<?php } ?>
											</select>
										</div>
										<div class="field">
											<label>foto (Max 1.5 MB)</label>
											<input type="file" name="foto">
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
											<th>No</th>
											<th>Kategori</th>
											<th width="10%">Foto</th>
											<th width="15%">Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no=1;
										foreach ($galeri as $s => $row) {
											?>
											<tr>
												<td><?=$no++;?></td>
												<td><?=$row->kategori;?></td>
												<td><img width="70px" height="60px" src="<?=base_url()?>img/galeri/<?=$row->foto;?>"></td>
												<td>
													<a href="<?=base_url('admin/edit_galeri/'.$row->id)?>"><button class="ui mini blue button"><i class="edit icon"></i></button></a>
													<a onclick="return confirm('Data akan dihapus!')" href="<?=base_url('admin/del_galeri/'.$row->id)?>"><button class="ui mini red button"><i class="trash icon"></i></button></a>
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