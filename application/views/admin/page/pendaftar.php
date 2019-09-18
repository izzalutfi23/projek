			<!-- BEGIN CONTENT -->
			<div class="right floated thirteen wide computer sixteen wide phone column" id="content">
				<div class="ui container grid">
					<div class="row">
						<div class="fiveteen wide computer sixteen wide phone column justifed">
							<h2>Peminat</h2>
							<div class="ui divider"></div>
							<form class="ui form" action="<?=base_url('admin/cetak');?>" method="post">
								<div class="tree fields">
									<div class="field">
										<label>Dari ID</label>
										<input type="number" required="required" name="id1">
									</div>
									<div class="field">
										<label>Sampai ID</label>
										<input type="number" required="required" name="id2">
									</div>
									<div class="field">
										<button type="submit" style="margin-top: 25px;" class="ui red button add">Cetak</button>
									</div>
								</div>
							</form>
							<div class="ui stacked segment">
								<table id="tablenya" class="ui celled table" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th width="6%">Id</th>
											<th>Nama</th>
											<th>Email</th>
											<th>Alamat</th>
											<th>No HP</th>
											<th>Jenis Kel.</th>
											<th>Keg. Saat Ini</th>
											<th width="17%">Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no=1;
										foreach ($peminat as $s => $row) {
											?>
											<tr>
												<td><?=$row->id;?></td>
												<td><?=$row->nama;?></td>
												<td><?=$row->email;?></td>
												<td><?=$row->alamat;?></td>
												<td><?=$row->no_hp;?></td>
												<td><?=$row->j_kel;?></td>
												<td><?=$row->kegiatan;?></td>
												<td>
													<a href="https://api.whatsapp.com/send?phone=<?=$row->no_hp;?>&text=Hallo%20Agan%20Baik"><button class="ui mini green button">Chat WA</button></a>
													<a onclick="return confirm('Data akan dihapus!')" href="<?=base_url('admin/del_dftr/'.$row->id)?>"><button class="ui mini red button"><i class="trash icon"></i></button></a>
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