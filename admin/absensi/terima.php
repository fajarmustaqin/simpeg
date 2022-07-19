<?php
    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_absensi WHERE no='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);

        $setuju = "disetujui";
        $sql_ubah_setuju = "UPDATE tb_absensi SET status='".$setuju."' WHERE no='".$data_cek['no']."'";
        $query_ubah_setuju = mysqli_query($koneksi, $sql_ubah_setuju);
        
        if ($query_ubah_setuju) {
            echo "<script>
            Swal.fire({title: 'Absensi diterima',text: '',icon: 'success',confirmButtonText: 'OK'
            }).then((result) => {if (result.value) {window.location = 'index.php?page=absen-admin'
            ;}})</script>";
        }
    }
?>

