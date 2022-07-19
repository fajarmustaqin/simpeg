<?php
	include "../inc/koneksi.php";
	
	$nik = $_GET['nik'];

	$sql_cek = "SELECT * FROM profil";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
	{
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>CETAK DATA PEGAWAI</title>
</head>

<body>
	<center>

		<h2>
			<?php echo $data_cek['nama_profil']; ?>
		</h2>
		<h3>
			<?php echo $data_cek['alamat']; ?>
			<hr / size="2px" color="black">

			<?php
			}

			$sql_tampil = "select * from tb_identitas where nrp='$nik'";
			$query_tampil = mysqli_query($koneksi, $sql_tampil);
			$no=1;
			while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
		?>
	</center>

	<center>
		<h4>
			<u>DATA PEGAWAI</u>
		</h4>
	</center>

	<table border="1" cellspacing="0" style="width: 90%" align="center">
		<tbody>
			<tr>
				<td>NRP</td>
				<td>
					<?php echo $data['nrp']; ?>
				</td>
				<td rowspan="6" align="center">
					<img src="../berkas/foto/<?php echo $data['foto_pgw']; ?>" width="150px" />
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>
					<?php echo $data['nama_lengkap']; ?>
				</td>
			</tr>
			<tr>
				<td>Jenis Pegawai</td>
				<td>
					<?php echo $data['jenis_pegawai']; ?>
				</td>
			</tr>
			<tr>
				<td>NIDN</td>
				<td>
					<?php echo $data['nidn']; ?>
				</td>
			</tr>
			<tr>
				<td>Tanggal Bergabung</td>
				<td>
					<?php echo $data['tgl_bergabung']; ?>
				</td>
			</tr>
			<tr>
				<td>Status Karyawan</td>
				<td>
					<?php echo $data['status_karyawan']; ?>
				</td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td>
					<?php echo $data['jabatan']; ?>
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<?php echo $data['jenis_kel']; ?>
				</td>
			</tr>
			<tr>
				<td>Tempat, Tanggal Lahir</td>
				<td>
					<?php echo $data['temp_lahir'] .', ' . $data['tgl_lahir']; ?>
				</td>
			</tr>
			<tr>
				<td>Alamat Domisili</td>
				<td>
					<?php echo $data['alamat_domisili']; ?>
				</td>
			</tr>
			<tr>
				<td>Alamat KTP</td>
				<td>
					<?php echo $data['alamat_ktp']; ?>
				</td>
			</tr>
			<tr>
				<td>No HP</td>
				<td>
					<?php echo $data['no_hp']; ?>
				</td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td>
					<?php echo $data['telp']; ?>
				</td>
			</tr>
			<tr>
				<td>Kebangsaan</td>
				<td>
					<?php echo $data['kebangsaan']; ?>
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>
					<?php echo $data['email']; ?>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>


	<script>
		window.print();
	</script>

</body>

</html>