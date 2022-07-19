<?php

        $sql_cek = "SELECT * FROM profil";
        $query_cek = mysqli_query($koneksi, $sql_cek);
		$data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
		{

		
?>

<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-flag"></i> Profil Perusahaan</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Perusahaan</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="nama_profil" name="nama_profil" value="<?php echo $data_cek['nama_profil']; ?>"
					 readonly/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data_cek['alamat']; ?>"
					 readonly/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Bidang</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="bidang" name="bidang" value="<?php echo $data_cek['bidang']; ?>"
					 readonly/>
				</div>
			</div>

		</div>
	</form>
</div>

<?php
		}
	$sql = $koneksi->query("SELECT count(nrp) as lokal from tb_identitas");
	while ($data= $sql->fetch_assoc()) {
	
		$lokal=$data['lokal'];
	}
?>

<?php
	$sql = $koneksi->query("SELECT count(nrp) as pendidik from tb_identitas where jenis_pegawai='Tenaga Pendidik'");
	while ($data= $sql->fetch_assoc()) {
	
		$pendidik=$data['pendidik'];
	}
?>

<?php
	$sql = $koneksi->query("SELECT count(nrp) as kependidikan from tb_identitas where jenis_pegawai='Tenaga Kependidikan'");
	while ($data= $sql->fetch_assoc()) {
	
		$kependidikan=$data['kependidikan'];
	}
?>

<?php
	$sql = $koneksi->query("SELECT count(nrp) as thl from tb_identitas where status_karyawan='THL'");
	while ($data= $sql->fetch_assoc()){

		$karyawan_THL= $data['thl'];
	}
?>

<?php
	$sql = $koneksi->query("SELECT count(nrp) as spk from tb_identitas where status_karyawan='SPK'");
	while ($data= $sql->fetch_assoc()){

		$karyawan_SPK = $data['spk'];
	}
?>

<?php
	$sql = $koneksi->query("SELECT count(nrp) as kontrak from tb_identitas where status_karyawan='Kontrak'");
	while ($data= $sql->fetch_assoc()){

		$karyawan_kontrak = $data['kontrak'];
	}
?>

<?php
	$sql = $koneksi->query("SELECT count(nrp) as tetap from tb_identitas where status_karyawan='Tetap'");
	while ($data= $sql->fetch_assoc()){

		$karyawan_tetap = $data['tetap'];
	}
?>

<?php
	$sql = $koneksi->query("SELECT count(username) as boyong from tb_pengguna");
	while ($data= $sql->fetch_assoc()) {
	
		$boyong=$data['boyong'];
	}
?>

<div class="row">
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-primary">
			<div class="inner">
				<h3>
					<?php echo $lokal;  ?>
				</h3>

				<p>Jumlah Pegawai</p>
			</div>
			<div class="icon">
				<i class="ion ion-ios-people"></i>
			</div>
			<a href="index.php?page=data-santri" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>

		<!-- ./col -->
		<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-success">
			<div class="inner">
				<h3>
					<?php echo $kependidikan;  ?>
				</h3>

				<p>Tenaga Pendidikan</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-stalker"></i>
			</div>
			<a href="#" class="small-box-footer">Informasi
			</a>
		</div>
	</div>

	<!-- ./col -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-info">
			<div class="inner">
				<h3>
					<?php echo $pendidik; ?>
				</h3>

				<p>Tenaga Pendidik</p>
			</div>
			<div class="icon">
				<i class="ion ion-university"></i>
			</div>
			<a href="#" class="small-box-footer">Informasi
			</a>
		</div>
	</div>

	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-primary">
			<div class="inner">
				<h3>
					<?php echo $karyawan_tetap; ?>
				</h3>

				<p>Pegawai Tetap</p>
			</div>
			<div class="icon">
				<i class="fa fa-users"></i>
			</div>
			<a href="#" class="small-box-footer">Informasi
			</a>
		</div>
	</div>

	<!-- ./col -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-secondary">
			<div class="inner">
				<h3>
					<?php echo $karyawan_THL; ?>
				</h3>

				<p>Pegawai THL</p>
			</div>
			<div class="icon">
				<i class="fa fa-user"></i>
			</div>
			<a href="#" class="small-box-footer">Informasi
			</a>
		</div>
	</div>

	<!-- ./col -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-danger">
			<div class="inner">
				<h3>
					<?php echo $karyawan_SPK; ?>
				</h3>

				<p>Pegawai SPK</p>
			</div>
			<div class="icon">
				<i class="fa fa-users"></i>
			</div>
			<a href="#" class="small-box-footer">Informasi
			</a>
		</div>
	</div>

	<!-- ./col -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-warning">
			<div class="inner">
				<h3>
					<?php echo $karyawan_kontrak; ?>
				</h3>

				<p>Pegawai Kontrak</p>
			</div>
			<div class="icon">
				<i class="fa fa-user-times"></i>
			</div>
			<a href="#" class="small-box-footer">Informasi
			</a>
		</div>
	</div>
	
	<!-- ./col -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-warning">
			<div class="inner">
				<h3>
					<?php echo $boyong;  ?>
				</h3>

				<p>Pengguna Sistem</p>
			</div>
			<div class="icon">
				<i class="fa fa-users"></i>
			</div>
			<a href="#" class="small-box-footer">Informasi
			</a>
		</div>
	</div>