<?php
    //kueri data identitas pegawai
    $sql_identitas = "SELECT * FROM tb_identitas WHERE nrp='".$data_id."'";
    $query_identitas = mysqli_query($koneksi, $sql_identitas);
    $data_identitas = mysqli_fetch_array($query_identitas,MYSQLI_BOTH);

    //cek data pendidikan
	$sql_pendidikan = "SELECT * FROM tb_pendidikan WHERE nrp_id='".$data_id."'";
	$query_pendidikan = mysqli_query($koneksi, $sql_pendidikan);
	$data_pendidikan = mysqli_fetch_array($query_pendidikan,MYSQLI_BOTH);

    //cek data document
	$sql_rekening = "SELECT * FROM tb_rekening_pegawai WHERE nrp_id='".$data_id."'";
	$query_rekening = mysqli_query($koneksi, $sql_rekening);
	$data_rekening = mysqli_fetch_array($query_rekening,MYSQLI_BOTH);

    //cek data document
	$sql_kontakDarurat = "SELECT * FROM tb_kontak_darurat WHERE nrp_id='".$data_id."'";
	$query_kontakDarurat = mysqli_query($koneksi, $sql_kontakDarurat);
	$data_kontakDarurat = mysqli_fetch_array($query_kontakDarurat,MYSQLI_BOTH);

?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="row"> 
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <label for="">Data Pribadi</label>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        NRP  
                        <input type="text" class="form-control select2bs4" value="<?= $data_identitas['nrp']; ?>" disabled>
                    </div>
                    <div class="form-group">
                        Nama Pegawai    
                        <input type="text" class="form-control" name="nama" value="<?= $data_identitas['nama_lengkap']; ?>">
                    </div>
                    <div class="form-group">
                        NIK    
                        <input type="text" class="form-control" value="<?= $data_identitas['nik']; ?>">
                    </div>
                    <div class="form-group">
                        NIDN    
                        <input type="text" class="form-control" name="nidn" value="<?= $data_identitas['nidn']; ?>">
                    </div>
                    <div class="form-group">
                        Jabatan Sekarang    
                        <input type="text" class="form-control" name="jabatan" value="<?= $data_identitas['jabatan']; ?>">
                    </div>
                    <div class="form-group">
                        Jenis kelamin   
                        <select name="jenkel" id="jenkel" class="form-control">
                            <?php
                                //cek data yg dipilih sebelumnya
                                if ($data_identitas['jenis_kel'] == "Laki-Laki") echo "<option value='Laki-Laki' selected>Laki-laki</option>";
                                else echo "<option value='Laki-Laki'>Laki-Laki</option>";

                                if ($data_identitas['jenis_kel'] == "Perempuan") echo "<option value='Perempuan' selected>Perempuan</option>";
                                else echo "<option value='Perempuan'>Perempuan</option>";
                            ?>
                        </select>
                    </div>
                        Tempat dan Tanggal Lahir 
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <input type="text" name="temp_lahir" class="form-control" value="<?= $data_identitas['temp_lahir']; ?>" >
                        </div>
                        <div class="col-sm-8">
                            <input type="date" name="tgl_lahir" class="form-control" value="<?= $data_identitas['tgl_lahir']; ?>"> 
                        </div>
                    </div>
                    
                    <div class="form-group">
                        Alamat  
                        <input type="text" class="form-control" name="alamat" value="<?= $data_identitas['alamat_domisili']; ?>">
                    </div>

                    <div class="form-group">
                        Nomor HandPhone 
                        <input type="text" class="form-control" name="no_hp" value="<?= $data_identitas['no_hp']; ?>">
                    </div>

                    <div class="form-group">
                        Telepon 
                        <input type="text" class="form-control" name="telp" value="<?= $data_identitas['telp']; ?>">
                    </div>

                    <div class="form-group">
                        Agama   
                        <select name="agama" id="agama" class="form-control">
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

                    <div class="form-group">
                        Kebangsaan  
                        <select name="kebangsaan" id="kebangsaan" class="form-control">
                            <?php
                                if ($data_identitas['kebangsaan'] == "WNI") echo "<option value='WNI' selected>WNI</option>";
                                else echo "<option value='WNI'>WNI</option>";

                                if ($data_identitas['kebangsaan'] == "WNA") echo "<option value='WNA' selected>WNA</option>";
                                else echo "<option value='WNA'>WNA</option>";
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        Email   
                        <input type="text" class="form-control" name="email" value="<?= $data_identitas['email']; ?>">
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <label for="">Kontak Darurat</label>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        Nama    
                        <input type="text" class="form-control" name="nama_kontak_darurat" value="<?= $data_kontakDarurat['nama']; ?>">
                    </div>
                    <div class="form-group">
                        Hubunga    
                        <input type="text" class="form-control" name="hubungan_kontak_darurat" value="<?= $data_kontakDarurat['hubungan']; ?>">
                    </div>
                    <div class="form-group">
                        Alamat  
                        <input type="text" class="form-control" name="alamat_kontak_darurat" value="<?= $data_kontakDarurat['alamat']; ?>">
                    </div>
                    <div class="form-group">
                        Nomor Handphone 
                        <input type="text" class="form-control" name="hp_kontak_darurat" value="<?= $data_kontakDarurat['hp']; ?>">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <label for="">Pendidikan</label>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        Nomor Ijazah Terakhir   
                        <input type="text" class="form-control" name="no_ijazah" value="<?= $data_pendidikan['no_ijazah_akhr']; ?>">
                    </div>

                    <div class="form-group">
                        Jenjang Pendidikan  
                        <select name="jen_pend" id="jen_pend" class="form-control">
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

                    <div class="form-group">
                        Perguruan Tinggi    
                        <input type="text" class="form-control" name="nama_sekolah" value="<?= $data_pendidikan['nama_sekolah_univ']; ?>">
                    </div>

                    <div class="form-group">
                        Kota Perguruan Tinggi   
                        <input type="text" class="form-control" name="kota_sekolah" value="<?= $data_pendidikan['kota_perguruan']; ?>">
                    </div>

                    <div class="form-group">
                        Fakultas    
                        <input type="text" class="form-control" name="fakultas" value="<?= $data_pendidikan['fakultas']; ?>">
                    </div>

                    <div class="form-group">
                        Jurusan 
                        <input type="text" class="form-control" name="jurusan" value="<?= $data_pendidikan['jurusan']; ?>">
                    </div>

                    <div class="form-group">
                        Tahun Lulus 
                        <input type="text" class="form-control" name="tahun_lulus" value="<?= $data_pendidikan['tahun_lulus']; ?>">
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <label for="">Rekening</label>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        Nomor Rekening  
                        <input type="text" class="form-control" value="<?= $data_rekening['no_rek']; ?>" name="no_rek">
                    </div>
                    <div class="form-group">
                        Nama Bank   
                        <input type="text" class="form-control" value="<?= $data_rekening['nama_bank']; ?>"name="nama_bank">
                    </div>
                    <div class="form-group">
                        Cabang Bank 
                        <input type="text" class="form-control" value="<?= $data_rekening['cabang_bank']; ?>"name="cabang_bank">
                    </div>
                    <div class="form-group">
                        Nama Pemilik    
                        <input type="text" class="form-control" value="<?= $data_rekening['atas_nama']; ?>"name="atas_nama">
                    </div>
                </div>
            </div>

            
        </div>

        <div>
            <a href="?page=data-user" title="kembali" class="btn btn-warning">Kembali</a>
            <button class="btn btn-primary" title="Simpan" name="simpan">Simpan</button>
        </div>
    </div>
</form>

<?php
    if (isset ($_POST['simpan'])){
        $sql_ubah_identitas = "UPDATE tb_identitas SET
        nama='".$_POST['nama']."',
        nik='".$_POST['nik']."',
        nidn='".$_POST['nidn']."',
        jenis_kel='".$_POST['jenkel']."',
        temp_lahir='".$_POST['temp_lahir']."',
        tgl_lahir='".$_POST['tgl_lahir']."',
        alamat_domisili='".$_POST['alamat']."',
        no_hp='".$_POST['no_hp']."',
        telp='".$_POST['telp']."',
        agama='".$_POST['agama']."',
        kebangsaan='".$_POST['kebangsaan']."',
        email='".$_POST['email']."'		
        WHERE nrp='".$data_id."'";
        $query_simpan = mysqli_query($koneksi, $sql_ubah_identitas);

        $sql_ubah_pendidikan = "UPDATE tb_pendidikan SET
        no_ijazah_akhr='".$_POST['no_ijazah']."',
        jenjang_akhr='".$_POST['jen_pend']."',
        nama_sekolah_univ='".$_POST['nama_sekolah']."',
        kota_perguruan='".$_POST['kota_sekolah']."',
        fakultas='".$_POST['fakultas']."',
        jurusan='".$_POST['jurusan']."',
        tahun_lulus='".$_POST['tahun_lulus']."'		
        WHERE nrp_id='".$data_id."'";
        $query_simpan_pendidikan = mysqli_query($koneksi, $sql_ubah_pendidikan);

        $sql_ubah_rekening = "UPDATE tb_rekening_pegawai SET
        no_rek='".$_POST['no_rek']."',
        nama_bank='".$_POST['nama_bank']."',
        cabang_bank='".$_POST['cabang_bank']."',
        atas_nama='".$_POST['atas_nama']."'		
        WHERE nrp_id='".$data_id."'";
        $query_simpan_rekening = mysqli_query($koneksi, $sql_ubah_rekening);

        $sql_ubah_kontak_darurat = "UPDATE tb_kontak_darurat SET
        nama='".$_POST['nama_kontak_darurat']."',
        hubungan='".$_POST['hubungan_kontak_darurat']."',
        alamat='".$_POST['alamat_kontak_darurat']."',
        hp='".$_POST['hp_kontak_darurat']."'		
        WHERE nrp_id='".$data_id."'";
        $query_simpan_kontak_darurat = mysqli_query($koneksi, $sql_ubah_kontak_darurat);
        
if ($query_simpan) {
	echo "<script>
	Swal.fire({title: 'Update data berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
	}).then((result) => {
		if (result.value) {
			window.location = 'index.php?page=data-user';
		}
	})</script>";
	}else{
	echo "<script>
	Swal.fire({title: 'Update data gagal',text: '',icon: 'error',confirmButtonText: 'OK'
	}).then((result) => {
		if (result.value) {
			window.location = 'index.php?page=update-profile';
		}
	})</script>";
}
}			
?>