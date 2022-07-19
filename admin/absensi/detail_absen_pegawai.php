<div class="card card-info card-outline">
	<div class="card-header">
		<h3 class="card-title">
			Absensi Pegawai
		</h3>
	</div>
    <div class="card-body">
    <div class="table-responsive">
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
			  $sql = $koneksi->query("SELECT tb_absensi.no, tb_identitas.nama_lengkap, tb_absensi.tgl_masuk, tb_absensi.jam_masuk, tb_absensi.jam_pulang, tb_absensi.ket, tb_absensi.ket_lainnya, tb_absensi.status, tb_absensi.nrp_id FROM tb_identitas JOIN tb_absensi ON tb_identitas.nrp=tb_absensi.nrp_id");
              while ($data= $sql->fetch_assoc()) {
				
            ?>

					<tr>
						<td>
							<?= $data['no']?>
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
                                <span class="badge badge-warning">	
                                        <?= $data['status']; ?>
                                    </span>
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
    </div>
</div>