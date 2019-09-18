			<!-- BEGIN CONTENT -->
			<div class="right floated thirteen wide computer sixteen wide phone column" id="content">
				<div class="ui container grid">
					<div class="row">
						<div class="fiveteen wide computer sixteen wide phone column justifed">
							<h2>Pesan</h2>
							<div class="ui divider"></div>
							<div class="ui stacked segment">
								<table id="tablenya" class="ui celled table" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th width="6%">Id</th>
											<th>Nama</th>
											<th>Email</th>
											<th>Subjek</th>
											<th>Isi</th>
											<th width="17%">Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no=1;
										foreach ($pesan as $s => $row) {
											?>
											<tr>
												<td><?=$row->id;?></td>
												<td><?=$row->nama;?></td>
												<td><?=$row->email;?></td>
												<td><?=$row->subjek;?></td>
												<td><?=$row->isi;?></td>
												<td>
													<a onclick="return confirm('Data akan dihapus!')" href="<?=base_url('admin/del_pesan/'.$row->id)?>"><button class="ui mini red button"><i class="trash icon"></i></button></a>
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