<?php
   $sql_identitas = "SELECT * FROM tb_identitas WHERE nrp='".$data_id."'";
   $query_identitas = mysqli_query($koneksi, $sql_identitas);
   $data_identitas = mysqli_fetch_array($query_identitas,MYSQLI_BOTH); 

   $sql_pendidikan = "SELECT * FROM tb_pendidikan WHERE nrp_id='".$data_id."'";
	$query_pendidikan = mysqli_query($koneksi, $sql_pendidikan);
	$data_pendidikan = mysqli_fetch_array($query_pendidikan,MYSQLI_BOTH);

    $sql_doc = "SELECT * FROM tb_doc WHERE nrp_id='".$data_id."'";
	$query_doc = mysqli_query($koneksi, $sql_doc);
	$data_doc = mysqli_fetch_array($query_doc,MYSQLI_BOTH);

    $sql_rekening = "SELECT * FROM tb_rekening_pegawai WHERE nrp_id='".$data_id."'";
	$query_rekening = mysqli_query($koneksi, $sql_rekening);
	$data_rekening = mysqli_fetch_array($query_rekening,MYSQLI_BOTH);
    
    $sql_keluarga = "SELECT * FROM tb_stts_keluarga WHERE nrp_id='".$data_id."'";
	$query_keluarga = mysqli_query($koneksi, $sql_keluarga);
?>

<div>
    silahkan update profile anda melalui tautan berikut : 
    <a href="?page=update-profile" class="btn btn-success btn-sm" type="button">Update Profile</a>
</div>
<br>
<div class="row">
    <div class="col-12">
        <div class="card card-info card-tabs">
            <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="true">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-dokumen-tab" data-toggle="pill" href="#custom-tabs-one-dokumen" role="tab" aria-controls="custom-tabs-one-dokumen" aria-selected="false">Dokumen Pelatihan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-family-tab" data-toggle="pill" href="#custom-tabs-one-family" role="tab" aria-controls="custom-tabs-one-family" aria-selected="false">Status Keluarga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">Pendidikan</a>
                    </li>
                </ul>
            </div>

            <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                    <div class="tab-pane fade show active" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                        <div class="row">
                            <div class="table-responsive col-sm-8">
                                <table class="table table-bordered table-striped table-sm" width="500px">
                                    <tr>
                                        <th>NRP</th>
                                        <td><?= $data_identitas['nrp'];?></td>
                                    </tr>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <td><?= $data_identitas['nama_lengkap'];?></td>
                                    </tr>
                                    <tr>
                                        <th>NIDN</th>
                                        <td><?= $data_identitas['nidn'];?></td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Bergabung</th>
                                        <td><?= $data_identitas['tgl_bergabung']?></td>
                                    </tr>
                                    <tr>
                                        <th>Jabatan</th>
                                        <td><?= $data_identitas['jabatan']?></td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Pegawai</th>
                                        <td><?= $data_identitas['jenis_pegawai'];?></td>
                                    </tr>
                                    <tr>
                                        <th>Status Karyawan</th>
                                        <td><?= $data_identitas['status_karyawan'];?></td>
                                    </tr>
                                </table>            
                            </div>
                            <div class="col-sm-4">
                                <div class="text-center">
                                    <img src="berkas/foto/<?php echo $data_identitas['foto_pgw']; ?>" width="150px" />
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <table class="table table-bordered table-striped table-sm">
                                    <tr>
                                        <th>Tempat Lahir</th>
                                        <td><?= $data_identitas['temp_lahir'];?></td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Lahir</th>
                                        <td><?= $data_identitas['tgl_lahir'];?></td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td><?= $data_identitas['jenis_kel'];?></td>
                                    </tr>
                                    <tr>
                                        <th>Pendidikan</th>
                                        <td><?= $data_pendidikan['jenjang_akhr'];?></td>
                                    </tr>
                                    <tr>
                                        <th>Agama</th>
                                        <td><?= $data_identitas['agama'];?></td>
                                    </tr>
                                    <tr>
                                        <th>Kebangsaan</th>
                                        <td><?= $data_identitas['kebangsaan'];?></td>
                                    </tr>
                                </table>
                            </div>

                            <div class="col-sm-6">
                                <table class="table table-bordered table-striped table-sm">
                                    <tr>
                                        <th>Alamat Email</th>
                                        <td><a href="#"><?= $data_identitas['email'];?></a></td>
                                    </tr>
                                    <tr>
                                        <th>Nomor KTP</th>
                                        <td><?= $data_identitas['nik'];?></td>
                                    </tr>
                                    <tr>
                                        <th>Nomor HP</th>
                                        <td><?= $data_identitas['no_hp'];?></td>
                                    </tr>
                                    <tr>
                                        <th>Telp</th>
                                        <td><?= $data_identitas['telp'];?></td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td><?= $data_identitas['alamat_domisili'];?></td>
                                    </tr>
                                    <tr>
                                        <th>Nomor Rekening</th>
                                        <td><?= $data_rekening['no_rek'];?></td>
                                    </tr>
                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-one-dokumen" role="tabpanel" aria-labelledby="custom-tabs-one-dokumen-tab">
                        Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-one-family" role="tabpanel" aria-labelledby="custom-tabs-one-family-tab">
                        <table class="table table-striped" id="example">
                            <thead>
                                <tr>
                                    <th>Keluarga</th>
                                    <th>Nama</th>
                                    <th>L/P</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Pendidikan</th>
                                    <th>Pekerjaan</th>
                                </tr>
                            </thead>
                            <?php 
                                while ($data_keluarga= $query_keluarga->fetch_assoc()) {
                            ?>
                            <tbody>
                                <tr>
                                    <td><?= $data_keluarga['stts_dikeluarga']; ?></td>
                                    <td><?= $data_keluarga['nama']; ?></td>
                                    <td><?= $data_keluarga['jenkel']; ?></td>
                                    <td><?= $data_keluarga['tmp_lhir']; ?></td>
                                    <td><?= $data_keluarga['tgl_lhir']; ?></td>
                                    <td><?= $data_keluarga['pendidikan']; ?></td>
                                    <td><?= $data_keluarga['pekerjaan']; ?></td>
                                </tr>
                            </tbody>
                            <?php
                                }
                            ?>
                        </table>
                        
                        <button type="button" class="float-right btn btn-primary" data-toggle="modal" data-target="#modal-tambah-data-keluarga">+ Tambah</button>
                    
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="">Nomor Ijazah</label>
                                <input type="text" class="form-control" value="<?= $data_pendidikan['no_ijazah_akhr'];?>"disabled> <br>
                                
                                <label for="">Jenjang Pendidikan</label>
                                <input type="text" class="form-control" value="<?= $data_pendidikan['jenjang_akhr'];?>"disabled> <br>
                                
                                <label for="">Nama Sekolah/Universitas</label>
                                <input type="text" class="form-control" value="<?= $data_pendidikan['nama_sekolah_univ'];?>"disabled> <br>

                                <label for="">Kota Sekolah/Universitas</label>
                                <input type="text" class="form-control" value="<?= $data_pendidikan['kota_perguruan'];?>"disabled> <br>
                            </div>

                            <div class="col-sm-6">
                                <label for="">Tahun Lulus</label>
                                <input type="text" class="form-control" value="<?= $data_pendidikan['tahun_lulus'];?>"disabled> <br>
                                
                                <label for="">Fakultas</label>
                                <input type="text" class="form-control" value="<?= $data_pendidikan['fakultas'];?>"disabled> <br>

                                <label for="">Jurusan</label>
                                <input type="text" class="form-control" value="<?= $data_pendidikan['jurusan'];?>"disabled> <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>

<!-- modal tambah data keluarga -->
<div class="modal fade" id="modal-tambah-data-keluarga">
    <form action="" method="post">
		<div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Anggota Keluarga</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
				<div class="form-group row">
					<div class="col-sm-6">
						<label>Keluarga</label><br>
						<select name="st_keluarga" class="form-control" id="keluarga">
                            <option value="">-Pilih-</option>
                            <option>Suami</option>
                            <option>Istri</option>
                            <option>Anak</option>
                        </select><br>

						<label>Jenis Kelamin</label><br>
						<select name="jenkel" id="jenkel" class="form-control">
                            <option value="">-Pilih-</option>
                            <option value="">Laki-Laki</option>
                            <option value="">Perempuan</option>
                        </select> <br>

                        <label>Pendidikan</label><br>
						<input type="text"  class="form-control" name="pendidikan"><br>
					</div>

					<div class="col-sm-6">
						<label>Nama Lengkap</label><br>
						<input type="text"  class="form-control" name="nama_keluarga"><br>

                        <label>Tempat & Tanggal Lahir</label><br>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="temp_lahir">
                            </div>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" name="tgl_lahir">
                            </div>
                        </div> <br>

                        <label>Pekerjaan</label><br>
                        <input type="text" class="form-control" name="pkj_keluarga"> <br>
					</div>
				</div>

            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="save">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
	</form>
</div>

<?php
    if(isset ($_POST['save'])){

        $sql_simpn = "INSERT INTO tb_stts_keluarga (stts_dikeluarga, nama, jenkel, tmp_lhir, tgl_lhir, pendidikan, pekerjaan, nrp_id) VALUES (
            '".$_POST['st_keluarga']."',
            '".$_POST['nama_keluarga']."',
            '".$_POST['jenkel']."',
            '".$_POST['temp_lahir']."',
            '".$_POST['tgl_lahir']."',
            '".$_POST['pendidikan']."',
            '".$_POST['pkj_keluarga']."',
            '".$data_id."')";
        if ($_POST['nama_keluarga']=="") {
            echo "<script>
            Swal.fire({title: 'Update data gagal',text: '',icon: 'error',confirmButtonText: 'OK'
            }).then((result) => {
                if (result.value) {
                    window.location = 'index.php?page=data-user';
                }
            })</script>";
            }else{
            $query_simpn = mysqli_query($koneksi, $sql_simpn);
            echo "<script>
            Swal.fire({title: 'Update data berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
            }).then((result) => {
                if (result.value) {
                    window.location = 'index.php?page=data-user';
                }
            })</script>";
            
        }
    }
?>
