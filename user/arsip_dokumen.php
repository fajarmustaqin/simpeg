<?php
    //cek data document
	$sql_doc = "SELECT * FROM tb_doc WHERE nrp_id='".$data_id."'";
	$query_doc = mysqli_query($koneksi, $sql_doc);
	$data_doc = mysqli_fetch_array($query_doc,MYSQLI_BOTH);

    if(isset($_POST['ktp_view'])){
        header("content-type: application/pdf");
        readfile('./foto/ktp.pdf');
    }
?>

<div class="card card-success card-outline">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="card-header">
            <h3 class="card-title">
                Arsip Dokumen
            </h3>
        </div>
        <div class="card-body row">
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
        <div class="card-footer">
            <button class="btn btn-success float-right" name="Ubah">
                Simpan
            </button>
        </div>
    </form>
</div>

<?php
if (isset ($_POST['Ubah'])){

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
    $sql_ktp= "UPDATE tb_doc SET ktp='".$ktp_file."'WHERE nrp_id='".$data_id."'";
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
    $sql_kk= "UPDATE tb_doc SET kk='".$kk_file."'WHERE nrp_id='".$data_id."'";
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
    $sql_akte= "UPDATE tb_doc SET akte='".$akte_file."'WHERE nrp_id='".$data_id."'";
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
    $sql_buku_nikah= "UPDATE tb_doc SET buku_nikah='".$buku_nikah_file."'WHERE nrp_id='".$data_id."'";
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
    $sql_npwp= "UPDATE tb_doc SET npwp='".$npwp_file."'WHERE nrp_id='".$data_id."'";
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
    $sql_pasport= "UPDATE tb_doc SET pasport='".$pasport_file."'WHERE nrp_id='".$data_id."'";
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
    $sql_sim_A= "UPDATE tb_doc SET sim_A='".$sim_A_file."'WHERE nrp_id='".$data_id."'";
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
    $sql_sim_C= "UPDATE tb_doc SET sim_C='".$sim_C_file."'WHERE nrp_id='".$data_id."'";
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
    $sql_bpjs_kes= "UPDATE tb_doc SET bpjs_kes='".$bpjs_kes_file."'WHERE nrp_id='".$data_id."'";
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
    $sql_bpjs_kerja= "UPDATE tb_doc SET bpjs_kerja='".$bpjs_kerja_file."'WHERE nrp_id='".$data_id."'";
    $query_bpjs_kerja = mysqli_query($koneksi, $sql_bpjs_kerja);
}

if ($query_ktp||$query_kk||$query_sim_A||$query_sim_C||$query_bpjs_kes||$query_bpjs_kerja||$query_akte||$query_npwp||$query_buku_nikah||$query_pasport) {
	echo "<script>
	Swal.fire({title: 'Upload File Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
	}).then((result) => {
		if (result.value) {
			window.location = 'index.php?page=arsip-dokumen';
		}
	})</script>";
	}else{
	echo "<script>
	Swal.fire({title: 'Upload File Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
	}).then((result) => {
		if (result.value) {
			window.location = 'index.php?page=arsip-dokumen';
		}
	})</script>";
}
}			