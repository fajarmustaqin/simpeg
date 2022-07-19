<div class="card card-info card-outline">
	<div class="card-header">
		<h3 class="card-title">
			Absensi Pegawai
		</h3>
	</div>
    <div class="card-body">
    <div class="table-responsive">
		<a href="?page=data-absen" class="btn btn-info">Detail Absensi Pegawai</a>
			<br><br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Pegawai</th>
						<th>Tanggal</th>
						<th>Jam Masuk</th>
						<th>Jam Pulang</th>
						<th>Keterangan</th>
						<th>Keterangan Lainnya</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>

			<?php
              $no = 1;
			  $sql = $koneksi->query("SELECT tb_absensi.no, tb_identitas.nama_lengkap, tb_absensi.tgl_masuk, tb_absensi.jam_masuk, tb_absensi.jam_pulang, tb_absensi.ket, tb_absensi.ket_lainnya, tb_absensi.status, tb_absensi.nrp_id FROM tb_identitas JOIN tb_absensi ON tb_identitas.nrp=tb_absensi.nrp_id WHERE status= 'menunggu persetujuan'");
              while ($data= $sql->fetch_assoc()) {
				
            ?>

					<tr>
						<td>
							<?= $no++;?>
						</td>
						<td>
							<?= $data['nama_lengkap']; ?>
						</td>
						<td>
							<?php echo $data['tgl_masuk']; ?>
						</td>
						<td>
							<?php echo $data['jam_masuk']; ?>
						</td>
						<td>
							<?php echo $data['jam_pulang']; ?>
						</td>

						<td>
							<?= $data['ket']; ?>
						</td>

						<td>
							<?= $data['ket_lainnya']; ?>
						</td>
						<td>
							<?php 
							if($data['status'] == "menunggu persetujuan"){ ?>

							<a href="?page=approve&kode=<?php echo $data['no']; ?>" class="btn btn-success btn-sm" onclick="return confirm('terima pengajuan absensi?')" type="button">
								<i class="ion-checkmark"></i>
							</a>
							<a href="?page=tolak&kode=<?php echo $data['no']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('tolak pengajuan absensi?')" type="button">
								<i class="ion-close"></i>
							</a>

							<?php
							}else if($data['status'] == "disetujui"){ ?>
								<span class="badge badge-success">	
									<?= $data['status']; ?>
								</span>
							<?php
							} else{ ?>
								<span class="badge badge-danger">	
									<?= $data['status']; ?>
								</span>
							<?php
							}
							?>
							
							
						</td>
					</tr>

					<?php
              }
            ?>
				</tbody>
				</tfoot>
			</table>
    </div>
</div>

<div class="modal fade" id="modal-sm">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Small Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
			<form action="" method="post">
				<div class="modal-body">
			  		Yakin Approve Absensi Pegawai
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary" name="simpan">Save changes</button>

					
				</div>
			</form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

<div class="modal fade" id="modal-default">
    <form action="" method="post">
		<div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Approve Absensi</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
			  	<form action="" method="post">
				  	<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Pegawai</th>
								<th>Tanggal</th>
								<th>Jam Masuk</th>
								<th>Jam Pulang</th>
								<th>Keterangan</th>
								<th>Keterangan Lainnya</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>

							<?php
							$no = 1;
							$sql = $koneksi->query("SELECT tb_absensi.no, tb_identitas.nama_lengkap, tb_absensi.tgl_masuk, tb_absensi.jam_masuk, tb_absensi.jam_pulang, tb_absensi.ket, tb_absensi.ket_lainnya, tb_absensi.status, tb_absensi.nrp_id FROM tb_identitas JOIN tb_absensi ON tb_identitas.nrp=tb_absensi.nrp_id WHERE tb_absensi.status = 'menunggu persetujuan'");
							while ($data= $sql->fetch_assoc()) {
								
							?>

							<tr>
								<td>
									<?php echo $data['no']; ?>
								</td>
								<td>
									<?= $data['nama_lengkap']; ?>
								</td>
								<td>
									<?php echo $data['tgl_masuk']; ?>
								</td>
								<td>
									<?php echo $data['jam_masuk']; ?>
								</td>
								<td>
									<?php echo $data['jam_pulang']; ?>
								</td>

								<td>
									<?= $data['ket']; ?>
								</td>

								<td>
									<?= $data['ket_lainnya']; ?>
								</td>
								<td>
									<?php 
									if($data['status'] == "menunggu persetujuan"){ ?>

									

									
									<?php
									}else if($data['status'] == "disetujui"){ ?>
										<span class="badge badge-success">	
											<?= $data['status']; ?>
										</span>
									<?php
									} else{ ?>
										<span class="badge badge-danger">	
											<?= $data['status']; ?>
										</span>
									<?php
									}
									?>
									
									
								</td>
							</tr>

							<?php
								}
							?>
						</tbody>
					</table>
				</form>
            </div>

            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
	</form>
</div>
<!-- /.modal -->
