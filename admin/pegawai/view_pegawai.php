<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from tb_identitas WHERE nrp='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }

	if(isset($_GET['kode'])){
		$sql_cek1 = "SELECT * FROM tb_info_fisik WHERE nrp_id='".$_GET['kode']."'";
		$query_cek1 = mysqli_query($koneksi, $sql_cek1);
		$data_cek1 = mysqli_fetch_array($query_cek1,MYSQLI_BOTH);
	}

	if(isset($_GET['kode'])){
		$sql_cek2 = "SELECT * FROM tb_riwayat_pekerjaan WHERE nrp_id='".$_GET['kode']."'";
		$query_cek2 = mysqli_query($koneksi, $sql_cek2);
	}
	if(isset($_GET['kode'])){
		$sql_cek3 = "SELECT * FROM tb_pendidikan WHERE nrp_id='".$_GET['kode']."'";
		$query_cek3 = mysqli_query($koneksi, $sql_cek3);
		$data_cek3 = mysqli_fetch_array($query_cek3,MYSQLI_BOTH);
	}
	if(isset($_GET['kode'])){
		$sql_cek4 = "SELECT * FROM tb_stts_keluarga WHERE nrp_id='".$_GET['kode']."'";
		$query_cek4 = mysqli_query($koneksi, $sql_cek4);
	}
	if(isset($_GET['kode'])){
		$sql_cek5 = "SELECT * FROM tb_kontak_darurat WHERE nrp_id='".$_GET['kode']."'";
		$query_cek5 = mysqli_query($koneksi, $sql_cek5);
		$data_cek5 = mysqli_fetch_array($query_cek5,MYSQLI_BOTH);
	}
	if(isset($_GET['kode'])){
		$sql_cek6 = "SELECT * FROM tb_rekening_pegawai WHERE nrp_id='".$_GET['kode']."'";
		$query_cek6 = mysqli_query($koneksi, $sql_cek6);
		$data_cek6 = mysqli_fetch_array($query_cek6,MYSQLI_BOTH);
	}
	if(isset($_GET['kode'])){
		$sql_cek7 = "SELECT * FROM tb_organisasi_pegawai WHERE nrp_id='".$_GET['kode']."'";
		$query_cek7 = mysqli_query($koneksi, $sql_cek7);
	}

?>

<div class="row">
	<!-- col-sm-6 -->
	<div class="col-md-6">
		<!-- informasi detail identitas pegawai -->
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Detail Pegawai</h3>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body p-0">
				<table class="table">
					<tbody>
						<tr>
							<td style="width: 150px">
								<b>NRP</b>
							</td>
							<td>:
								<?php echo $data_cek['nrp']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nama Lengkap</b>
							</td>
							<td>:
								<?php echo $data_cek['nama_lengkap']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>NIK</b>
							</td>
							<td>:
								<?php echo $data_cek['nik']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Jenis Pegawai</b>
							</td>
							<td>:
								<?php echo $data_cek['jenis_pegawai']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>NIDN</b>
							</td>
							<td>:
								<?php echo $data_cek['nidn']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tanggal Bergabung</b>
							</td>
							<td>:
								<?php echo $data_cek['tgl_bergabung']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Status Karyawan</b>
							</td>
							<td>:
								<?php echo $data_cek['status_karyawan']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Jabatan</b>
							</td>
							<td>:
								<?php echo $data_cek['jabatan']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Jenis Kelamin</b>
							</td>
							<td>:
								<?php echo $data_cek['jenis_kel']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tempat dan Tanggal Lahir</b>
							</td>
							<td>:
								<?php echo $data_cek['temp_lahir'] . ", " . $data_cek['tgl_lahir']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Alamat Saat ini</b>
							</td>
							<td>:
								<?php echo $data_cek['alamat_domisili']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Alamat KTP</b>
							</td>
							<td>:
								<?php echo $data_cek['alamat_ktp']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nomor HandPhone</b>
							</td>
							<td>:
								<?php echo $data_cek['no_hp']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Telepon</b>
							</td>
							<td>:
								<?php echo $data_cek['telp']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Agama</b>
							</td>
							<td>:
								<?php echo $data_cek['agama']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Kebangsaan</b>
							</td>
							<td>:
								<?php echo $data_cek['kebangsaan']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Email</b>
							</td>
							<td>:
								<?php echo $data_cek['email']; ?>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		
		<!-- informasi detail pendidikan -->
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Pendidikan Terakhir</h3>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body p-0">
				<table class="table">
					<tbody>
						<tr>
							<td style="width: 150px">
								<b>Nomor Ijazah</b>
							</td>
							<td>:
								<?php echo $data_cek3['no_ijazah_akhr']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Jenjang Pendidikan</b>
							</td>
							<td>:
								<?php echo $data_cek3['jenjang_akhr']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nama Sekolah</b>
							</td>
							<td>:
								<?php echo $data_cek3['nama_sekolah_univ']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Fakultas</b>
							</td>
							<td>:
								<?php echo $data_cek3['fakultas']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Jurusan</b>
							</td>
							<td>:
								<?php echo $data_cek3['jurusan']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Kota Sekolah</b>
							</td>
							<td>:
								<?php echo $data_cek3['kota_perguruan']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tahun Lulus</b>
							</td>
							<td>:
								<?php echo $data_cek3['tahun_lulus']; ?>
							</td>
						</tr>
					</tbody>
				</table>

			</div>
		</div>

	</div>

	<!-- col-sm-6 -->
	<div class="col-md-6">
		<!-- informasi foto pegawai -->
		<div class="card card-success">
			<div class="card-header">
				<center>
					<h3 class="card-title">
						Foto Pegawai
					</h3>
				</center>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body">
				<div class="text-center">
					<img src="berkas/foto/<?php echo $data_cek['foto_pgw']; ?>" width="280px" />
				</div>

				<h3 class="profile-username text-center">
					<?php echo $data_cek['nrp']; ?>
					-
					<?php echo $data_cek['nama_lengkap']; ?>
				</h3>
			</div>
			<div class="card-footer">
				<a href="?page=data-pegawai" class="btn btn-warning">Kembali</a>

				<a href="./report/cetak-pegawai.php?nik=<?php echo $data_cek['nrp']; ?>" target=" _blank"
					title="Cetak Data Pegawai" class="btn btn-primary">Print</a>
			</div>
		</div>

		<!-- informasi kontak darurat -->
		<div class="card card-warning">
			<div class="card-header">
				<h3 class="card-title">Kontak Darurat</h3>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body p-0">
				<table class="table">
					<tbody>
						<tr>
							<td style="width: 150px">
								<b>Nama</b>
							</td>
							<td>:
								<?php echo $data_cek5['nama']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Hubungan</b>
							</td>
							<td>:
								<?php echo $data_cek5['hubungan']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Alamat</b>
							</td>
							<td>:
								<?php echo $data_cek5['alamat']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>No HP</b>
							</td>
							<td>:
								<?php echo $data_cek5['hp']; ?>
							</td>
						</tr>
					</tbody>
				</table>

			</div>
		</div>

		<!-- informasi rekening -->
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Rekening Pegawai</h3>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body p-0">
				<table class="table">
					<tbody>
						<tr>
							<td style="width: 150px">
								<b>Nomor Rekening</b>
							</td>
							<td>:
								<?php echo $data_cek6['no_rek']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nama Bank</b>
							</td>
							<td>:
								<?php echo $data_cek6['nama_bank']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Cabang Bank</b>
							</td>
							<td>:
								<?php echo $data_cek6['cabang_bank']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nama Nasabah</b>
							</td>
							<td>:
								<?php echo $data_cek6['atas_nama']; ?>
							</td>
						</tr>
					</tbody>
				</table>

			</div>
		</div>

		<!-- informasi organisasi yang pernah diikuti -->
		<div class="card card-secondary">
			<div class="card-header">
				<h3 class="card-title">
				Organisasi Yang Pernah Diikuti
				</h3>
			</div>
			<div class="card-body">
			<table class="table table-striped" id="example">
					<thead>
						<tr>
							<th>Nama Organisasi</th>
							<th>Jenis</th>
							<th>Jabatan</th>
							<th>Tahun</th>
						</tr>
					</thead>
					<?php 
						while ($data_organisasi= $query_cek7->fetch_assoc()) {
					?>
					<tbody>
						<tr>
							<td><?= $data_organisasi['nama_organisasi']; ?></td>
							<td><?= $data_organisasi['jenis']; ?></td>
							<td><?= $data_organisasi['jabatan']; ?></td>
							<td><?= $data_organisasi['thn']; ?></td>
						</tr>
					</tbody>
					<?php
						}
					?>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- informasi status keluarga -->
<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			Status keluarga
		</h3>
	</div>
	<div class="card-body">
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
				while ($data_keluarga= $query_cek4->fetch_assoc()) {
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
	</div>
</div>

<!-- informasi riwayat pekerjaan -->
<div class="card card-danger">
	<div class="card-header">
		<h3 class="card-title">
			Riwayat Pekerjaan
		</h3>
	</div>
	<div class="card-body">
		<table class="table table-striped" id="example">
			<thead>
				<tr>
					<th>Nama Perusahaan</th>
					<th>Tahun Periode</th>
					<th>Bidang Usaha</th>
					<th>jabatan Terakhir</th>
					<th>Gaji Terakhir</th>
					<th>Alasan Berhenti</th>
				</tr>
			</thead>
			<?php 
				while ($data_rwt_pkrjaan= $query_cek2->fetch_assoc()) {
			?>
			<tbody>
				<tr>
					<td><?= $data_rwt_pkrjaan['nama_perusahaan']; ?></td>
					<td><?= $data_rwt_pkrjaan['tahun_periode']; ?></td>
					<td><?= $data_rwt_pkrjaan['bidang_usaha']; ?></td>
					<td><?= $data_rwt_pkrjaan['jabatan_terakhir']; ?></td>
					<td><?= $data_rwt_pkrjaan['gaji_terakhir']; ?></td>
					<td><?= $data_rwt_pkrjaan['alasan_berhenti']; ?></td>
				</tr>
			</tbody>
			<?php
				}
			?>
		</table>
	</div>
</div>


