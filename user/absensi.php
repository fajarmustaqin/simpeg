<div class="card card-info card-outline">
	<div class="card-header">
		<h3 class="card-title">
			Absensi Pegawai
		</h3>
	</div>
    <div class="card-body">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-sm">
			Absen Manual
		</button>
    <div class="table-responsive">
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
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
			  $sql = $koneksi->query("SELECT * FROM tb_absensi where nrp_id='".$data_id."'");
              while ($data= $sql->fetch_assoc()) {
				
            ?>

					<tr>
						<td>
							<?= $no++; ?>
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
				</tfoot>
			</table>
    </div>
</div>

<div class="modal fade" id="modal-sm">
    <form action="" method="post">
		<div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Absensi Manual</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
				<div class="form-group row">
					<div class="col-sm-6">
						<label>Tanggal Masuk</label><br>
						<input type="date"  class="form-control" name="tgl_masuk"><br>

						<label>Jam Keluar</label><br>
						<input type="time"  class="form-control" name="jam_keluar"><br>
					</div>

					<div class="col-sm-6">
						<label>Jam Masuk</label><br>
						<input type="time"  class="form-control" name="jam_masuk"><br>

						<label>Keterangan</label><br>
						<select name="ket" id="ket" class="form-control">
							<option>-Pilih-</option>
							<option>Hadir</option>
							<option>Sakit</option>
							<option>Izin</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="">Keterangan Lainnya</label>
					<input type="text" class="form-control" name="ket_lainnya">
				</div>

            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="simpan">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
	</form>
</div>

<?php

if (isset($_POST['simpan'])){
	$stts = "menunggu persetujuan";
	$sql_input = "INSERT INTO tb_absensi (tgl_masuk, jam_masuk, jam_pulang, ket, ket_lainnya, status, nrp_id) VALUES (
		'".$_POST['tgl_masuk']."',
		'".$_POST['jam_masuk']."',
		'".$_POST['jam_keluar']."',
		'".$_POST['ket']."',
		'".$_POST['ket_lainnya']."',
		'".$stts."',
		'".$data_id."')";
	
	if($_POST['tgl_masuk']==""){
		echo "<script>
		Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
		}).then((result) => {if (result.value){
			window.location = 'index.php?page=absen-pegawai';
			}
		})</script>";
	}else{
		$query_simpan = mysqli_query($koneksi, $sql_input);
		echo "<script>
		Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
		}).then((result) => {if (result.value){
			window.location = 'index.php?page=absen-pegawai';
			}
		})</script>";
	}

}
?>