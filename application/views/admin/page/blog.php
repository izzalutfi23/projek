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
							<h2>Blog</h2>
							<div class="ui divider"></div>
							<button class="ui red button add"><i class="plus icon"></i></button>
							<a href="<?=base_url('admin/blog')?>"><button class="ui blue button add">Indo</button></a>
							<a href="<?=base_url('admin/blog/en')?>"><button class="ui blue button add">English</button></a>

							<!--Modal-->
							<div class="ui large modal">
								<i class="close icon"></i>
								<div class="header">
									Posting Berita 
								</div>
								<div class="content">
									<form class="ui form" enctype="multipart/form-data" method="post" action="<?=base_url('admin/proses_blog');?>">
										<div class="field">
											<label>foto (Max 1.5 MB)</label>
											<input type="file" name="foto">
										</div>
										<div class="field">
											<label>Judul</label>
											<input type="text" name="judul" placeholder="Judul">
										</div>
										<div class="field">
											<label>Bahasa</label>
											<input type="radio" name="lang" required="required" value="id"> Indonesia
											<input type="radio" name="lang" required="required" value="en"> Inggris
										</div>
										<div class="field">
											<label>Tanggal</label>
											<input type="text" name="tanggal" readonly="readonly" value="<?=date('Y-m-d');?>">
										</div>
										<div class="field">
											<label>Penulis</label>
											<input type="text" name="penulis" placeholder="Penulis">
										</div>
										<div class="field">
											<label>Isi Berita</label>
											<textarea name="isi" id="text-ckeditor"></textarea>
											<script type="text/javascript">
												CKEDITOR.replace('text-ckeditor');
											</script>
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
											<th width="10%">Foto</th>
											<th>Judul</th>
											<th>Tanggal</th>
											<th>Penulis</th>
											<th>Isi</th>
											<th width="15%">Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no=1;
										foreach ($blog as $s => $row) {
											?>
											<tr>
												<td><?=$no++;?></td>
												<td><img width="70px" height="60px" src="<?=base_url()?>img/blog/<?=$row->foto;?>"></td>
												<td><?=$row->judul;?></td>
												<td><?=date("d-M-Y", strtotime($row->tanggal));?></td>
												<td><?=$row->penulis;?></td>
												<td><?=substr($row->isi, 0, 100);?> ...</td>
												<td>
													<a href="<?=base_url('admin/edit_blog/'.$row->id)?>"><button class="ui mini blue button"><i class="edit icon"></i></button></a>
													<a onclick="return confirm('Data akan dihapus!')" href="<?=base_url('admin/del_blog/'.$row->id)?>"><button class="ui mini red button"><i class="trash icon"></i></button></a>
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