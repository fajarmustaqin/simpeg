<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><i class="fa fa-user-plus"></i>  Buat Akun Pegawai</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <form id="quickForm" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="contohid">ID Pegawai</label>
                            <input type="text" name="nrp_id" class="form-control" id="contohid" placeholder="Masukan ID Pegawai" required>
                        </div>
                        <div class="form-group">
                            <label for="contohnama">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" id="contohnama" placeholder="Masukan Nama Lengkap" required>
                        </div>
                        <div class="form-group">
                            <label for="contohnama">Username</label>
                            <input type="text" name="usernam" class="form-control" id="contohusername" placeholder="Masukan Username" required>
                        </div>
                        <div class="form-group">
                            <label for="contohpassword">Password</label>
                            <input type="password" name="password" class="form-control" id="contohpassword" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <label>Level akun</label>
                            <select class="form-control select2bs4" name="level" style="width: 100%;">
                                <option>--Pilih--</option>
                                <option>Administrator</option>
                                <option>Pegawai</option>
                            </select>
                        </div>
            
                    </div>
                    <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="simpan" class="btn btn-primary">Buat Akun</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>


<?php
  if(isset($_POST['simpan'])){
    $sql_simpan = "INSERT INTO tb_pengguna(nrp_id, nama_pengguna, username, password, level) VALUES (
      '".$_POST['nrp_id']."',
      '".$_POST['nama_lengkap']."',
      '".$_POST['usernam']."',
      '".md5($_POST['password'])."',
      '".$_POST['level']."')";
    $query_simpan = mysqli_query($koneksi, $sql_simpan);
    mysqli_close($koneksi);

    if($query_simpan){
      echo "<script>
      Swal.fire({title: 'Tambah Akun Berhasil',text: '',icon: 'success', confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
        window.location = 'index.php';
        }
      })</script>";
    }else{
      echo "<script>
      Swal.fire({title: 'Tambah Akun Gagal',text : '', icon: 'error', confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
        window.location = 'index.php?page=add-akun';
        }
      })</script>";
    }
  }
?>
    <script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#quickForm').validate({
    rules: {
      nrp_id: {
        required: true
      },
	  nama_lengkap:{
		  required: true
	  },
	  usernam:{
		  required: true
	  },
      password: {
        required: true,
        minlength: 5
      },
      level: {
        required: true
      },
    },
    messages: {
      nrp_id: {
        required: "masukan id pegawai"
      },
	  nama_lengkap:{
		  required: "masukan nama lengkap"
	  },
	  usernam:{
		  required: "masukan username"
	  },
      password: {
        required: "masukan password",
        minlength: "panjang password minimal 5 karakter"
      },
      terms: required: "masukan level pengguna"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>