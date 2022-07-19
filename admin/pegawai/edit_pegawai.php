
<?php

if(isset($_GET['kode'])){
	//cek data identitas
	$sql_identitas = "SELECT * FROM tb_identitas WHERE nrp='".$_GET['kode']."'";
	$query_identitas = mysqli_query($koneksi, $sql_identitas);
	$data_identitas = mysqli_fetch_array($query_identitas,MYSQLI_BOTH);
	
	//cek data document
	$sql_doc = "SELECT * FROM tb_doc WHERE nrp_id='".$_GET['kode']."'";
	$query_doc = mysqli_query($koneksi, $sql_doc);
	$data_doc = mysqli_fetch_array($query_doc,MYSQLI_BOTH);

	//cek data riwayat pekerjaan
	$sql_pekerjaan = "SELECT * FROM tb_riwayat_pekerjaan WHERE nrp_id='".$_GET['kode']."'";
	$query_pekerjaan = mysqli_query($koneksi, $sql_pekerjaan);

	//cek data keluarga
	$sql_keluarga = "SELECT * FROM tb_stts_keluarga WHERE nrp_id='".$_GET['kode']."'";
	$query_keluarga = mysqli_query($koneksi, $sql_keluarga);

	//cek data kontak_darurat
	$sql_kontak_darurat = "SELECT * FROM tb_kontak_darurat WHERE nrp_id='".$_GET['kode']."'";
	$query_kontak_darurat = mysqli_query($koneksi, $sql_kontak_darurat);
	$data_kontak_darurat = mysqli_fetch_array($query_kontak_darurat,MYSQLI_BOTH);

	//cek data organisasi
	$sql_organisasi = "SELECT * FROM tb_organisasi_pegawai WHERE nrp_id='".$_GET['kode']."'";
	$query_organisasi = mysqli_query($koneksi, $sql_organisasi);

	//cek data info_fisik
	$sql_info_fisik = "SELECT * FROM tb_info_fisik WHERE nrp_id='".$_GET['kode']."'";
	$query_info_fisik = mysqli_query($koneksi, $sql_info_fisik);
	$data_info_fisik = mysqli_fetch_array($query_info_fisik,MYSQLI_BOTH);

	//cek data pendidikan
	$sql_pendidikan = "SELECT * FROM tb_pendidikan WHERE nrp_id='".$_GET['kode']."'";
	$query_pendidikan = mysqli_query($koneksi, $sql_pendidikan);
	$data_pendidikan = mysqli_fetch_array($query_pendidikan,MYSQLI_BOTH);
}
?>
<div class="card card-info">
<div class="card-header">
	<h3 class="card-title">
		<i class="fa fa-edit"></i>Input Data Pegawai</h3>
</div>
<!-- form input data pegawai -->

<form action="" method="post" enctype="multipart/form-data">
	<div class="card-body">
		<div class="container">
			<ul class="bar">
				<li class="progres-bar-item">
					<i class="icon uil uil-user"></i>
					<div class="progres-step one">
						<p class="poin">1</p>
						<i class="uil uil-check"></i>
					</div>
					<p class="txt">Identitas</p>
				</li>
				<li class="progres-bar-item">
					<i class="icon uil uil-file-info-alt"></i>
					<div class="progres-step two">
						<p class="poin">2</p>
						<i class="uil uil-check"></i>
					</div>
					<p class="txt">Dokumen</p>
				</li>
				<li class="progres-bar-item">
					<i class="icon uil uil-users-alt"></i>
					<div class="progres-step three">
						<p class="poin">3</p>
						<i class="uil uil-check"></i>
					</div>
					<p class="txt">Keluarga</p>
				</li>
				<li class="progres-bar-item">
					<i class="icon uil uil-graduation-cap"></i>
					<div class="progres-step four">
						<p class="poin">4</p>
						<i class="uil uil-check"></i>
					</div>
					<p class="txt">Pendidikan</p>
				</li>
				<li class="progres-bar-item">
					<i class="icon uil uil-constructor"></i>
					<div class="progres-step five">
						<p class="poin">5</p>
						<i class="uil uil-check"></i>
					</div>
					<p class="txt">Pekerjaan</p>
				</li>
				<li class="progres-bar-item">
					<i class="icon uil uil-file-plus-alt"></i>
					<div class="progres-step six">
						<p class="poin">6</p>
						<i class="uil uil-check"></i>
					</div>
					<p class="txt">Tambahan</p>
				</li>
				<li class="progres-bar-item">
					<i class="icon uil uil-save"></i>
					<div class="progres-step seven">
						<p class="poin">7</p>
						<i class="uil uil-check"></i>
					</div>
					<p class="txt">Simpan</p>
				</li>
			</ul>
		</div>
		<!-- data pribadi pegawai -->
		<div class="stage pertama stage-active">
			<div class="judul">IDENTITAS PRIBADI</div>
			
			<!-- foto pegawai -->
			<div class="form-group">
				<label for="">Foto Pegawai</label> <br>
				<img src="berkas/foto/<?= $data_identitas['foto_pgw']; ?>" width="100px"> <br><br>
				<input type="file" id="foto_pgw" name="foto_pgw">
			</div>
			<!-- form data identitas pegawai -->
			<div class="row">
				<!-- kolom kiri -->
				<div class="col-sm-6">
					<div class="form-group">
						<label for="">Nomor Registrasi Pegawai</label>
						<input type="text" class="form-control" name="nrp_id" value="<?= $data_identitas['nrp']; ?>">
					</div>
					<div class="form-group">
						<label for="">Nomor Induk Kependudukan</label>
						<input type="text" class="form-control" name="nik" value="<?=$data_identitas['nik']; ?>">
					</div>
					<div class="form-group">
						<label for="">Jenis Pegawai</label>
						<select name="pegawai_jenis" class="form-control">
						<option value="- pilih -">- pilih -</option>
							<?php
								//cek data yg dipilih sebelumnya
								if ($data_identitas['jenis_pegawai'] == "Tenaga Pendidik") echo "<option value='Tenaga Pendidik' selected>Tenaga Pendidik</option>";
								else echo "<option value='Tenaga Pendidik'>Tenaga Pendidik</option>";

								if ($data_identitas['jenis_pegawai'] == "Tenaga Kependidikan") echo "<option value='Tenaga Kependidikan' selected>Tenaga Kependidikan</option>";
								else echo "<option value='Tenaga Kependidikan'>Tenaga Kependidikan</option>";
							?>
						</select>
					</div>
					<div class="form-group">
						<label for="">Tanggal Bergabung</label>
						<input type="date" class="form-control" name="tgl_gabung" value="<?= $data_identitas['tgl_bergabung']; ?>">
					</div>
					<div class="form-group">
						<label for="">Status Pegawai</label>
						<select name="status_pgw" id="" class="form-control">
						<option value="- pilih -">- pilih -</option>
							<?php
								if ($data_identitas['status_karyawan'] == "THL") echo "<option value='THL' selected>THL</option>";
								else echo "<option value='THL'>THL</option>";

								if ($data_identitas['status_karyawan'] == "SPK") echo "<option value='SPK' selected>SPK</option>";
								else echo "<option value='SPK'>SPK</option>";

								if ($data_identitas['status_karyawan'] == "Kontrak") echo "<option value='Kontrak' selected>Kontrak</option>";
								else echo "<option value='Kontrak'>Kontrak</option>";

								if ($data_identitas['status_karyawan'] == "Tetap") echo "<option value='Tetap' selected>Tetap</option>";
								else echo "<option value='Tetap'>Tetap</option>";
							?>
						</select>
					</div>
					<div class="form-group">
						<label for="">Tempat Lahir</label>
						<input type="text" class="form-control" name="temp_lahir" value="<?= $data_identitas['temp_lahir']; ?>">
					</div>
					<div class="form-group">
						<label for="">Alamat Saat ini</label>
						<textarea name="alamat_dom" id="alamat_dom" class="form-control" rows="3"><?= $data_identitas['alamat_domisili']; ?>
						</textarea>
					</div>
					<div class="form-group">
						<label for="">Nomor HandPhone</label>
						<input type="text" class="form-control" name="no_hp" value="<?=$data_identitas['no_hp']; ?>">
					</div>
					<div class="form-group">
						<label for="">Agama</label>
						<select name="agama" id="agama" class="form-control">
							<option value="- pilih -">- pilih -</option>
						<?php
							if ($data_identitas['agama'] == "Islam") echo "<option value='Islam' selected>Islam</option>";
							else echo "<option value='Islam'>Islam</option>";

							if ($data_identitas['agama'] == "Katolik") echo "<option value='Katolik' selected>Katolik</option>";
							else echo "<option value='Katolik'>Katolik</option>";

							if ($data_identitas['agama'] == "Protestan") echo "<option value='Protestan' selected>Protestan</option>";
							else echo "<option value='Protestan'>Protestan</option>";

							if ($data_identitas['agama'] == "Buddha") echo "<option value='Buddha' selected>Buddha</option>";
							else echo "<option value='Buddha'>Buddha</option>";

							if ($data_identitas['agama'] == "Hindu") echo "<option value='Hindu' selected>Hindu</option>";
							else echo "<option value='Hindu'>Hindu</option>";

							if ($data_identitas['agama'] == "Konghuchu") echo "<option value='Konghuchu' selected>Konghuchu</option>";
							else echo "<option value='Konghuchu'>Konghuchu</option>";

							if ($data_identitas['agama'] == "Lainnya") echo "<option value='Lainnya' selected>Lainnya</option>";
							else echo "<option value='Lainnya'>Lainnya</option>";
						?>
						</select>
					</div>
				</div>

				<!-- kolom kanan -->
				<div class="col-sm-6">
					<div class="form-group">
						<label for="">Nama Lengkap</label>
						<input type="text" class="form-control" name="nama_lengkap" value="<?= $data_identitas['nama_lengkap']; ?>">
					</div>
					<div class="form-group">
						<label for="">NIDN</label>
						<input type="text" class="form-control" name="nidn" value="<?= $data_identitas['nidn']; ?>">
					</div>
					<div class="form-group">
						<label for="">Jabatan</label>	
						<input type="text" class="form-control" name="jabatan" value="<?= $data_identitas['jabatan']; ?>">
					</div>
					<div class="form-group">
						<label for="">Jenis Kelamin</label>	
						<select name="jenkel" id="jenkel" class="form-control">
						<option value="- pilih -">- pilih -</option>
						<?php
							//cek data yg dipilih sebelumnya
							if ($data_identitas['jenis_kel'] == "Laki-Laki") echo "<option value='Laki-Laki' selected>Laki-laki</option>";
							else echo "<option value='Laki-Laki'>Laki-Laki</option>";

							if ($data_identitas['jenis_kel'] == "Perempuan") echo "<option value='Perempuan' selected>Perempuan</option>";
							else echo "<option value='Perempuan'>Perempuan</option>";
            			?>
						</select>
					</div>
					<div class="form-group">
						<label for="">Tanggal Lahir</label>
						<input type="date" class="form-control" name="tgl_lahir_pgw" value="<? $data_identitas['tgl_lahir']; ?>">
					</div>
					<div class="form-group">
						<label for="">Alamat KTP</label>
						<textarea class="form-control" id="alamat_ktp" name="alamat_ktp" rows="3"><?= $data_identitas['alamat_ktp']; ?></textarea>
					</div>
					<div class="form-group">
						<label for="">Telp</label>
						<input type="text" class="form-control" name="telp" value="<?=$data_identitas['telp']; ?>">
					</div>
					<div class="form-group">
						<label for="">Kebangsaan</label>
						<select name="kebangsaan" id="kebangsaan" class="form-control">
						<option value="- pilih -">- pilih -</option>
							<?php
								if ($data_identitas['kebangsaan'] == "WNI") echo "<option value='WNI' selected>WNI</option>";
								else echo "<option value='WNI'>WNI</option>";

								if ($data_identitas['kebangsaan'] == "WNA") echo "<option value='WNA' selected>WNA</option>";
								else echo "<option value='WNA'>WNA</option>";
							?>
						</select>
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input type="email" class="form-control" name="email" value="<?=$data_identitas['email']; ?>">
					</div>
				</div>
			</div>

			<div class="field btns">
				<button class="buttn next-1" type="submit" >Selanjutnya</button>

			</div>
		</div>
		<!-- data dokumen pegawai -->
		<div class="stage kedua">
			<div class="judul">DOKUMEN</div>
			<div class="row">
				<div class="form-group col-sm-6">
					<label>KTP</label>
					<div class="mailbox-attachment-info">
						<a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> <?=$data_doc['ktp'];?></a>
						<span class="mailbox-attachment-size clearfix mt-1">
							<input type="file" class="btn btn-default btn-sm float-right" id="ktp_data" name="ktp_data">
						</span>
						
					</div> <br>

					<label>Kartu Keluarga</label>
					<div class="mailbox-attachment-info">
						<a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> <?=$data_doc['kk'];?></a>
						<span class="mailbox-attachment-size clearfix mt-1">
							<input type="file" class="btn btn-default btn-sm float-right" id="kk_data" name="kk_data">
						</span>
					</div> <br>

					<label>SIM A</label>
					<div class="mailbox-attachment-info">
						<a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> <?=$data_doc['sim_A'];?></a>
						<span class="mailbox-attachment-size clearfix mt-1">
							<input type="file" class="btn btn-default btn-sm float-right" id="sim_A_data" name="sim_A_data">
						</span>
					</div> <br>

					<label>Pasport</label>
					<div class="mailbox-attachment-info">
						<a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> <?=$data_doc['pasport'];?></a>
						<span class="mailbox-attachment-size clearfix mt-1">
							<input type="file" class="btn btn-default btn-sm float-right" id="pasport" name="pasport_data">
						</span>
					</div> <br>

					<label>NPWP</label>
					<div class="mailbox-attachment-info">
						<a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> <?=$data_doc['npwp'];?></a>
						<span class="mailbox-attachment-size clearfix mt-1">
							<input type="file" class="btn btn-default btn-sm float-right" id="npwp" name="npwp_data">
						</span>
					</div> <br>
				</div>
				
				<div class="form-group col-sm-6">

					<label>Akte Kelahiran</label>
					<div class="mailbox-attachment-info">
						<a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> <?=$data_doc['akte'];?></a>
						<span class="mailbox-attachment-size clearfix mt-1">
							<input type="file" class="btn btn-default btn-sm float-right" id="akte_data" name="akte_data">
						</span>
					</div> <br>

					<label>Buku Nikah</label>
					<div class="mailbox-attachment-info">
						<a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> <?=$data_doc['buku_nikah'];?></a>
						<span class="mailbox-attachment-size clearfix mt-1">
							<input type="file" class="btn btn-default btn-sm float-right" id="buku_nikah" name="buku_nikah_data">
						</span>
					</div> <br>

					<label>SIM C</label>
					<div class="mailbox-attachment-info">
						<a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> <?=$data_doc['sim_C'];?></a>
						<span class="mailbox-attachment-size clearfix mt-1">
							<input type="file" class="btn btn-default btn-sm float-right" id="sim_C_data" name="sim_C_data">
						</span>
					</div> <br>

					<label>BPJS Kesehatan</label>
					<div class="mailbox-attachment-info">
						<a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> <?=$data_doc['bpjs_kes'];?></a>
						<span class="mailbox-attachment-size clearfix mt-1">
							<input type="file" class="btn btn-default btn-sm float-right" id="bpjs_kes_data" name="bpjs_kes_data">
						</span>
					</div> <br>

					<label>BPJS Ketenagakerjaan</label>
					<div class="mailbox-attachment-info">
						<a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> <?=$data_doc['bpjs_kerja'];?></a>
						<span class="mailbox-attachment-size clearfix mt-1">
							<input type="file" class="btn btn-default btn-sm float-right" id="bpjs_kerja_data" name="bpjs_kerja_data">
						</span>
					</div>
				</div>
			</div>

			<div class="field btns">
				<button class="buttn prev-1">Kembali</button>
				<button class="buttn next-1">Lanjut</button>
			</div>
		</div>
		<!-- data keluarga pegawai -->
		<div class="stage ketiga">
			<div class="judul">STATUS KELUARGA</div>

			<div class="table-responsive">
				<table id="example" class="table table-bordered table-striped table-sm">
					<thead>
						<tr>
							<th>Keluarga</th>
							<th>Nama</th>
							<th>L/P</th>
							<th>TTL</th>
							<th>Pendidikan</th>
							<th>Pekerjaan</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$sql = $koneksi->query("SELECT * from tb_stts_keluarga");
							while ($data_keluarga= $query_keluarga->fetch_assoc()) {
						?>
						<tr>
							<td>
								<input type="text" class="form-control" name="hubungan_keluarga[]" value="<?=$data_keluarga['stts_dikeluarga']; ?>">
							</td>
							<td>
								<input type="text" class="form-control" name="nama_keluarga[]" value="<?=$data_keluarga['nama']; ?>">
							</td>
							<td>
								<input type="text" class="form-control" name="jenkel_keluarga[]" value="<?=$data_keluarga['jenkel']; ?>">
							</td>
							<td>
								<input type="text" class="form-control" name="tmp_lhir_keluarga[]" value="<?=$data_keluarga['tmp_lhir']; ?>">
								<input type="date" class="form-control" name="tgl_lhir_keluarga[]" value="<?=$data_keluarga['tgl_lhir']; ?>">
							</td>
							<td>
								<input type="text" class="form-control" name="pendidikan_keluarga[]" value="<?=$data_keluarga['pendidikan']; ?>">
							</td>
							<td>
								<input type="text" class="form-control" name="pekerjaan_keluarga[]" value="<?=$data_keluarga['pekerjaan']; ?>">
							</td>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>

			<div class="field btns">
				<button class="buttn prev-1">Kembali</button>
				<button class="buttn next-1">Lanjut</button>
			</div>
		</div>
		<!-- data pendidikan pegawai -->
		<div class="stage keempat">
			<div class="judul">PENDIDIKAN TERAKHIR</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Nomor Ijazah</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="no_ijazah" name="no_ijazah" value="<?= $data_pendidikan['no_ijazah_akhr'];?>" placeholder="Nomor ijazah">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Jenjang Pendidikan Terakhir</label>
				<div class="col-sm-5">
					<select name="jen_pend" id="jen_pend" class="form-control">
						<option value="- pilih -">- pilih -</option>
						<?php
							if ($data_pendidikan['jenjang_akhr'] == "SD") echo "<option value='SD' selected>SD</option>";
							else echo "<option value='SD'>SD</option>";

							if ($data_pendidikan['jenjang_akhr'] == "SLTP") echo "<option value='SLTP' selected>SLTP</option>";
                			else echo "<option value='SLTP'>SLTP</option>";

							if ($data_pendidikan['jenjang_akhr'] == "SLTA") echo "<option value='SLTA' selected>SLTA</option>";
                			else echo "<option value='SLTA'>SLTA</option>";

							if ($data_pendidikan['jenjang_akhr'] == "D3") echo "<option value='D3' selected>D3</option>";
							else echo "<option value='D3'>D3</option>";
							
							if ($data_pendidikan['jenjang_akhr'] == "D4") echo "<option value='D4' selected>D4</option>";
							else echo "<option value='D4'>D4</option>";

							if ($data_pendidikan['jenjang_akhr'] == "S1") echo "<option value='S1' selected>S1</option>";
							else echo "<option value='S1'>S1</option>";

							if ($data_pendidikan['jenjang_akhr'] == "S2") echo "<option value='S2' selected>S2</option>";
							else echo "<option value='S2'>S2</option>";

							if ($data_pendidikan['jenjang_akhr'] == "S3") echo "<option value='S3' selected>S3</option>";
							else echo "<option value='S3'>S3</option>";

						?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Nama Universitas/Sekolah</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama_univ" value="<?= $data_pendidikan['nama_sekolah_univ'];?>" name="nama_univ" placeholder="Nama Universitas">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Kota Universitas/Sekolah</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="kota_univ" name="kota_univ" value="<?= $data_pendidikan['kota_perguruan'];?>" placeholder="Kota Universitas">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Fakultas</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="fakultas" name="fakultas" value="<?= $data_pendidikan['fakultas'];?>" placeholder="Fakultas">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Jurusan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="jurusan" name="jurusan" value="<?= $data_pendidikan['jurusan'];?>" placeholder="Jurusan">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Tahun lulus</label>
				<div class="col-sm-3">
					<input type="year" class="form-control" id="tahun_lulus" value="<?= $data_pendidikan['tahun_lulus'];?>" name="tahun_lulus">
				</div>
			</div>

			<div class="field btns">
				<button class="buttn prev-1">Kembali</button>
				<button class="buttn next-1">Lanjut</button>
			</div>
		</div>
		<!-- riwayat pekerjaan pegawai -->
		<div class="stage kelima">
			<div class="judul">RIWAYAT PEKERJAAN</div>

			<div class="table-responsive">
				<table id="example" class="table table-bordered table-striped table-sm">
					<thead>
						<tr>
							<th>Nama Perusahaan</th>
							<th>Tahun Periode</th>
							<th>Bidang Usaha</th>
							<th>Jabatan Terakhir</th>
							<th>Gaji terakhir</th>
							<th>Alasan Berhenti</th>
						</tr>
					</thead>
					<tbody>
						<?php
							while ($data_rwt_pekerjaan= $query_pekerjaan->fetch_assoc()) {
						?>
						<tr>
							<td>
								<input type="text" class="form-control" name="nama_perusahaan[]" value="<?=$data_rwt_pekerjaan['nama_perusahaan']; ?>">
							</td>
							<td>
								<input type="text" class="form-control" name="tahun_periode[]" value="<?=$data_rwt_pekerjaan['tahun_periode']; ?>">
							</td>
							<td>
								<input type="text" class="form-control" name="bidang_usaha[]" value="<?=$data_rwt_pekerjaan['bidang_usaha']; ?>">
							</td>
							<td>
								<input type="text" class="form-control" name="jabatan_terakhir[]" value="<?=$data_rwt_pekerjaan['jabatan_terakhir']; ?>">
							</td>
							<td>
								<input type="text" class="form-control" name="gaji_terakhir[]" value="<?=$data_rwt_pekerjaan['gaji_terakhir']; ?>">
							</td>
							<td>
								<input type="text" class="form-control" name="alasan_berhenti[]" value="<?=$data_rwt_pekerjaan['alasan_berhenti']; ?>">
							</td>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>

			<div class="field btns">
				<button class="buttn prev-1">Kembali</button>
				<button class="buttn next-1">Lanjut</button>
			</div>
		</div>
		<!-- data tambahan pegawai -->
		<div class="stage keenam">
			<!-- data organisasi pegawai -->
			<div class="judul">KEGIATAN ORGANISASI</div>
			<div class="table-responsive">
				<table id="example" class="table table-bordered table-striped table-sm">
					<thead>
						<tr>
							<th>Nama Organisasi</th>
							<th>Jenis Organisasi</th>
							<th>Jabatan</th>
							<th>Tahun</th>
						</tr>
					</thead>
					<tbody>
						<?php
							while ($data_rwt_pekerjaan= $query_organisasi->fetch_assoc()) {
						?>
						<tr>
							<td>
								<input type="text" class="form-control" name="nama_organisasi[]" value="<?=$data_rwt_pekerjaan['nama_organisasi']; ?>">
							</td>
							<td>
								<input type="text" class="form-control" name="jenis_organisasi[]" value="<?=$data_rwt_pekerjaan['jenis']; ?>">
							</td>
							<td>
								<input type="text" class="form-control" name="jabatan_organisasi[]" value="<?=$data_rwt_pekerjaan['jabatan']; ?>">
							</td>
							<td>
								<input type="text" class="form-control" name="tahun_organisasi[]" value="<?=$data_rwt_pekerjaan['thn']; ?>">
							</td>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>

			<!-- data informasi fisik pegawai -->
			<div class="judul">INFORMASI FISIK</div>
			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Tinggi Badan</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" value="<?= $data_info_fisik['TB'];?>" id="tb" name="tb">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Berat Badan</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="bb" value="<?= $data_info_fisik['BB'];?>" name="bb">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Golongan Darah</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="gol_darah" value="<?= $data_info_fisik['gol_darah'];?>" name="gol_darah">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Ukuran Pakaian</label>
				<div class="col-sm-3">
					<select name="ukuran_pakaian" id="ukuran_pakaian" class="form-control">
					<option value="- pilih -">- pilih -</option>
			  			<?php
							if ($data_info_fisik['ukuran_pakaian'] == "S") echo "<option value='S' selected>S</option>";
							else echo "<option value='S'>S</option>";

							if ($data_info_fisik['ukuran_pakaian'] == "M") echo "<option value='M' selected>M</option>";
							else echo "<option value='M'>M</option>";

							if ($data_info_fisik['ukuran_pakaian'] == "L") echo "<option value='L' selected>L</option>";
							else echo "<option value='L'>L</option>";

							if ($data_info_fisik['ukuran_pakaian'] == "XL") echo "<option value='XL' selected>XL</option>";
							else echo "<option value='XL'>XL</option>";

							if ($data_info_fisik['ukuran_pakaian'] == "XXL") echo "<option value='XXL' selected>XXL</option>";
							else echo "<option value='XXL'>XXL</option>";
						?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Ukuran Sepatu</label>
				<div class="col-sm-1">
					<input type="text" class="form-control" id="ukuran_sepatu" value="<?= $data_info_fisik['ukuran_sepatu'];?>" name="ukuran_sepatu">
				</div>
			</div>

			<!-- data kontak darurat pegawai -->
			<div class="judul">KONTAK DARURAT</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Nama</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama_kontak_darurat" value="<?= $data_kontak_darurat['nama'];?>" name="nama_kontak_darurat">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Hubungan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="hubungan_kontak_darurat" value="<?= $data_kontak_darurat['hubungan'];?>" name="hubungan_kontak_darurat">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Alamat</label>
				<div class="col-sm-6">
					<Input class="form-control" id="almt_kontak_ddarurat" value="<?= $data_kontak_darurat['alamat'];?>" name="almt_kontak_darurat">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">No HP</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="hp_kontak_darurat" value="<?= $data_kontak_darurat['hp'];?>" name="hp_kontak_darurat">
				</div>
			</div>

			<div class="field btns">
				<button class="buttn prev-1">Kembali</button>
				<button class="buttn next-1">Lanjut</button>
			</div>
		</div>
		<div class="stage ketujuh">
			<div class="card-footer">
			<center>
				<button class="btn btn-outline-primary btn-lg" title="Simpan" name="Ubah" type="submit">
					<i class="fas fa-save"></i>
				</button>
				<a href="?page=data-pegawai" title="Kembali" class="btn btn-outline-warning btn-lg">
					<i class="fa fa-history"></i>
				</a>
			</center>
			</div>
		</div>
	</div>
		
</form>
</div>

<?php
$sumber = @$_FILES['foto_pgw']['tmp_name'];
$target_foto = 'berkas/foto/';
$file_foto = @$_FILES['foto_pgw']['name'];
$pindah = move_uploaded_file($sumber, $target_foto.$file_foto);


if (isset ($_POST['Ubah'])){

	//ubah data identitas pegawai
	$sql_ubah_identitas = "UPDATE tb_identitas SET
        nrp='".$_POST['nrp_id']."',
		nama_lengkap='".$_POST['nama_lengkap']."',
        nik='".$_POST['nik']."',
		jenis_pegawai='".$_POST['pegawai_jenis']."',
        nidn='".$_POST['nidn']."',
		tgl_bergabung='".$_POST['tgl_gabung']."',
		status_karyawan='".$_POST['status_pgw']."',
		jabatan='".$_POST['jabatan']."',
		jenis_kel='".$_POST['jenkel']."',
        temp_lahir='".$_POST['temp_lahir']."',
        tgl_lahir='".$_POST['tgl_lahir_pgw']."',
        alamat_domisili='".$_POST['alamat_dom']."',
		alamat_ktp='".$_POST['alamat_ktp']."',
        no_hp='".$_POST['no_hp']."',
        telp='".$_POST['telp']."',
        agama='".$_POST['agama']."',
        kebangsaan='".$_POST['kebangsaan']."',
        email='".$_POST['email']."'		
        WHERE nrp='".$_GET['kode']."'";
    $query_simpan = mysqli_query($koneksi, $sql_ubah_identitas);

	//update file foto pegawai
	if(!empty($sumber)){
		$foto_del= $data_identitas['foto_pgw'];
		if(file_exists("berkas/foto/$foto_del")){
			unlink("berkas/foto/$foto_del");
		}
		$sql_foto = "UPDATE tb_identitas SET foto_pgw='".$file_foto."'WHERE nrp='".$_GET['kode']."'";
		$query_ubah_foto = mysqli_query($koneksi, $sql_foto);
	}

	//upload file ktp
	$ktp_sumber = @$_FILES['ktp_data']['tmp_name'];
	$target = 'berkas/document/';
	$ktp_file = @$_FILES['ktp_data']['name'];
	$up_ktp = move_uploaded_file($ktp_sumber, $target.$ktp_file);

	if(!empty($ktp_sumber)){
		$ktp_file_del= $data_doc['ktp'];
		
		if (file_exists("berkas/document/$ktp_file_del")){
			unlink("berkas/document/$ktp_file_del");
		}
		$sql_ktp= "UPDATE tb_doc SET ktp='".$ktp_file."'WHERE nrp_id='".$_GET['kode']."'";
		$query_ktp = mysqli_query($koneksi, $sql_ktp);
	}

	//upload file kk
	$kk_sumber = @$_FILES['kk_data']['tmp_name'];
	$kk_file = @$_FILES['kk_data']['name'];
	$up_kk = move_uploaded_file($kk_sumber, $target.$kk_file);

	if(!empty($kk_sumber)){
		$kk_file_del= $data_doc['kk'];
		if(file_exists("berkas/document/$kk_file_del")){
			unlink("berkas/document/$kk_file_del");
		}
		$sql_kk= "UPDATE tb_doc SET kk='".$kk_file."'WHERE nrp_id='".$_GET['kode']."'";
		$query_kk = mysqli_query($koneksi, $sql_kk);
	}

	//upload file akte
	$akte_sumber = @$_FILES['akte_data']['tmp_name'];
	$akte_file = @$_FILES['akte_data']['name'];
	$up_ktp = move_uploaded_file($akte_sumber, $target.$akte_file);

	if(!empty($akte_sumber)){
		$akte_file_del= $data_doc['akte'];
		
		if (file_exists("berkas/document/$akte_file_del")){
			unlink("berkas/document/$akte_file_del");
		}
		$sql_akte= "UPDATE tb_doc SET akte='".$akte_file."'WHERE nrp_id='".$_GET['kode']."'";
		$query_akte = mysqli_query($koneksi, $sql_akte);
	}

	//upload file buku nikah
	$buku_nikah_sumber = @$_FILES['buku_nikah_data']['tmp_name'];
	$buku_nikah_file = @$_FILES['buku_nikah_data']['name'];
	$up_buku_nikah = move_uploaded_file($buku_nikah_sumber, $target.$buku_nikah_file);

	if(!empty($buku_nikah_sumber)){
		$buku_nikah_file_del= $data_doc['buku_nikah'];
		
		if (file_exists("berkas/document/$buku_nikah_file_del")){
			unlink("berkas/document/$buku_nikah_file_del");
		}
		$sql_buku_nikah= "UPDATE tb_doc SET buku_nikah='".$buku_nikah_file."'WHERE nrp_id='".$_GET['kode']."'";
		$query_buku_nikah = mysqli_query($koneksi, $sql_buku_nikah);
	}

	//upload file NPWP
	$npwp_sumber = @$_FILES['npwp_data']['tmp_name'];
	$npwp_file = @$_FILES['npwp_data']['name'];
	$up_npwp = move_uploaded_file($npwp_sumber, $target.$npwp_file);

	if(!empty($npwp_sumber)){
		$npwp_file_del= $data_doc['npwp'];
		if(file_exists("berkas/document/$npwp_file_del")){
			unlink("berkas/document/$npwp_file_del");
		}
		$sql_npwp= "UPDATE tb_doc SET npwp='".$npwp_file."'WHERE nrp_id='".$_GET['kode']."'";
		$query_npwp = mysqli_query($koneksi, $sql_npwp);
	}

	//upload file pasport
	$pasport_sumber = @$_FILES['pasport_data']['tmp_name'];
	$pasport_file = @$_FILES['pasport_data']['name'];
	$up_pasport = move_uploaded_file($pasport_sumber, $target.$pasport_file);

	if(!empty($pasport_sumber)){
		$pasport_file_del= $data_doc['pasport'];
		if(file_exists("berkas/document/$pasport_file_del")){
			unlink("berkas/document/$pasport_file_del");
		}
		$sql_pasport= "UPDATE tb_doc SET pasport='".$pasport_file."'WHERE nrp_id='".$_GET['kode']."'";
		$query_pasport = mysqli_query($koneksi, $sql_pasport);
	}

	//upload file sim A
	$simA_sumber = @$_FILES['sim_A_data']['tmp_name'];
	$sim_A_file = @$_FILES['sim_A_data']['name'];
	$up_sim_A = move_uploaded_file($simA_sumber, $target.$sim_A_file);

	if(!empty($simA_sumber)){
		$sim_A_file_del= $data_doc['sim_A'];
		if(file_exists("berkas/document/$sim_A_file_del")){
			unlink("berkas/document/$sim_A_file_del");
		}
		$sql_sim_A= "UPDATE tb_doc SET sim_A='".$sim_A_file."'WHERE nrp_id='".$_GET['kode']."'";
		$query_sim_A = mysqli_query($koneksi, $sql_sim_A);
	}

	//upload file sim_C
	$sim_C_sumber = @$_FILES['sim_C_data']['tmp_name'];
	$sim_C_file = @$_FILES['sim_C_data']['name'];
	$up_sim_C = move_uploaded_file($sim_C_sumber, $target.$sim_C_file);

	if(!empty($sim_C_sumber)){
		$sim_C_file_del= $data_doc['sim_C'];
		if(file_exists("berkas/document/$sim_C_file_del")){
			unlink("berkas/document/$sim_C_file_del");
		}
		$sql_sim_C= "UPDATE tb_doc SET sim_C='".$sim_C_file."'WHERE nrp_id='".$_GET['kode']."'";
		$query_sim_C = mysqli_query($koneksi, $sql_sim_C);
	}

	//upload file bpjs kesehatan
	$bpjs_kes_sumber = @$_FILES['bpjs_kes_data']['tmp_name'];
	$bpjs_kes_file = @$_FILES['bpjs_kes_data']['name'];
	$up_bpjs_kes = move_uploaded_file($bpjs_kes_sumber, $target.$bpjs_kes_file);

	if(!empty($bpjs_kes_sumber)){
		$bpjs_kes_file_del= $data_doc['bpjs_kes'];
		if(file_exists("berkas/document/$bpjs_kes_file_del")){
			unlink("berkas/document/$bpjs_kes_file_del");
		}
		$sql_bpjs_kes= "UPDATE tb_doc SET bpjs_kes='".$bpjs_kes_file."'WHERE nrp_id='".$_GET['kode']."'";
		$query_bpjs_kes = mysqli_query($koneksi, $sql_bpjs_kes);
	}

	//upload file bpjs ketenagakerjaan
	$bpjs_kerja_sumber = @$_FILES['bpjs_kerja_data']['tmp_name'];
	$bpjs_kerja_file = @$_FILES['bpjs_kerja_data']['name'];
	$up_bpjs_kerja = move_uploaded_file($bpjs_kerja_sumber, $target.$bpjs_kerja_file);

	if(!empty($bpjs_kerja_sumber)){
		$bpjs_kerja_file_del= $data_doc['bpjs_kerja'];
		if(file_exists("berkas/document/$bpjs_kerja_file_del")){
			unlink("berkas/document/$bpjs_kerja_file_del");
		}
		$sql_bpjs_kerja= "UPDATE tb_doc SET bpjs_kerja='".$bpjs_kerja_file."'WHERE nrp_id='".$_GET['kode']."'";
		$query_bpjs_kerja = mysqli_query($koneksi, $sql_bpjs_kerja);
	}

	if ($query_simpan) {
		echo "<script>
		Swal.fire({title: 'Ubah Data Pegawai Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
		}).then((result) => {
			if (result.value) {
				window.location = 'index.php?page=data-pegawai';
			}
		})</script>";
		}else{
		echo "<script>
		Swal.fire({title: 'Ubah Data Pegawai Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
		}).then((result) => {
			if (result.value) {
				window.location = 'index.php?page=data-pegawai';
			}
		})</script>";
	}
}	