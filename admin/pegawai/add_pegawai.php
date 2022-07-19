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

            <div class="stage pertama stage-active">
				<div class="judul">IDENTITAS PRIBADI</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Nomor Registrasi Pegawai <i class="text-danger">*</i></label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="nrp_id" name="nrp_id" placeholder="Nomor Induk Kepegawaian" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">NAMA <i class="text-danger">*</i></label>
					<div class="col-sm-4">
					<input type="text" class="form-control" id="nama_lkp" name="nama_lkp" placeholder="Nama Lengkap">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">NIK <i class="text-danger">*</i></label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="nik" name="nik" placeholder="Nomor Induk Kependudukan">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Jenis Pegawai <i class="text-danger">*</i></label>
					<div class="col-sm-3">
						<select name="jenis_pgw" id="jenis_pgw" class="form-control">
							<option>- pilih -</option>
							<option>Tenaga Pendidik</option>
							<option>Tenaga Kependidikan</option>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Foto Pegawai</label>
					<div class="col-sm-6">
						<input type="file" id="foto_pgw" name="foto_pgw">
						<p class="help-block text-sm">
							<font color="red">*Format file Jpg/Png</font>
						</p>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">NIDN</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="nidn" name="nidn" placeholder="NIDN"> 
					</div>                        
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Tanggal Bergabung <i class="text-danger">*</i></label>
					<div class="col-sm-2">
						<input type="date" class="form-control" id="tgl_join" name="tgl_join">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Status Karyawan <i class="text-danger">*</i></label>
						<div class="col-sm-2">
						<select name="status" id="status" class="form-control">
							<option>- pilih -</option>
							<option>THL</option>
							<option>SPK</option>
							<option>Kontrak</option>
							<option>Tetap</option>
						</select>
						</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Jabatan <i class="text-danger">*</i></label>
					<div class="col-sm-6">
						<textarea class="form-control" id="jabatan" name="jabatan" rows="3"></textarea>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Jenis kelamin <i class="text-danger">*</i></label>
					<div class="col-sm-3">
						<select name="jenkel" id="jenkel" class="form-control">
							<option>- pilih -</option>
							<option>Laki-Laki</option>
							<option>Perempuan</option>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Tempat, Tanggal lahir <i class="text-danger">*</i></label>
					<div class="col-sm-2">
						<input type="text" class="form-control" id="temp_lahir" name="temp_lahir" placeholder="Tempat Lahir">
					</div>
					<div class="col-sm-2">
						<input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Alamat Saat ini <i class="text-danger">*</i></label>
					<div class="col-sm-6">
						<textarea class="form-control" id="alamat_dom" name="alamat_dom"  rows="3"></textarea>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Alamat KTP <i class="text-danger">*</i></label>
					<div class="col-sm-6">
						<textarea class="form-control" id="alamat_ktp" name="alamat_ktp" rows="3"></textarea>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Nomor HandPhone 	<i class="text-danger">*</i></label>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="no_hp" name="no_hp">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Telepon</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="telp" name="telp">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Agama <i class="text-danger">*</i></label>
					<div class="col-sm-3">
						<select name="agama" id="agama" class="form-control">
							<option>- pilih -</option>
							<option value="Islam">Islam</option>
							<option value="Katolik">Katolik</option>
							<option value="Protestan">Protestan</option>
							<option value="Buddha">Buddha</option>
							<option value="Hindu">Hindu</option>
							<option value="Konghuchu">Konghuchu</option>
							<option value="Lainnya">Lainnya</option>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Kebangsaan <i class="text-danger">*</i></label>
					<div class="col-sm-3">
						<select name="kebangsaan" id="kebangsaan" class="form-control">
							<option>- pilih -</option>
							<option>WNI</option>
							<option>WNA</option>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Email <i class="text-danger">*</i></label>
					<div class="col-sm-4">
						<input type="email" class="form-control" id="email_pegawai" name="email_pegawai">
					</div>
				</div>

				<div class="field btns">
					<button class="buttn next-1" type="submit" >Selanjutnya</button>

				</div>
			</div>

			<div class="stage kedua">
				<div class="judul">DOKUMEN</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">KTP</label>
					<div class="col-sm-6">
						<input type="file" id="ktp" name="ktp">
						<p class="help-block text-sm">
							<font color="red">*Format file pdf</font>
						</p>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Kartu Keluarga</label>
					<div class="col-sm-6">
						<input type="file" id="kk" name="kk">
						<p class="help-block text-sm">
							<font color="red">*Format file pdf</font>
						</p>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Akte Kelahiran</label>
					<div class="col-sm-6">
						<input type="file" id="akte" name="akte">
						<p class="help-block text-sm">
							<font color="red">*Format file pdf</font>
						</p>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Buku Nikah</label>
					<div class="col-sm-6">
						<input type="file" id="buku_nikah" name="buku_nikah">
						<p class="help-block text-sm">
							<font color="red">*Format file pdf</font>
						</p>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">SIM A</label>
					<div class="col-sm-6">
						<input type="file" id="simA" name="simA">
						<p class="help-block text-sm">
							<font color="red">*Format file pdf</font>
						</p>
					</div>
				</div>
				
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">SIM C</label>
					<div class="col-sm-6">
						<input type="file" id="simC" name="simC">
						<p class="help-block text-sm">
							<font color="red">*Format file pdf</font>
						</p>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">NPWP</label>
					<div class="col-sm-6">
						<input type="file" id="npwp" name="npwp">
						<p class="help-block text-sm">
							<font color="red">*Format file pdf</font>
						</p>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Pasport</label>
					<div class="col-sm-6">
						<input type="file" id="pasport" name="pasport">
						<p class="help-block text-sm">
							<font color="red">*Format file pdf</font>
						</p>
					</div>
				</div>


				<div class="form-group row">
					<label class="col-sm-3 col-form-label">BPJS Kesehatan</label>
					<div class="col-sm-6">
						<input type="file" id="bpjs_kes" name="bpjs_kes">
						<p class="help-block text-sm">
							<font color="red">*Format file pdf</font>
						</p>
					</div>
				</div>
				
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">BPJS Ketenagakerjaan</label>
					<div class="col-sm-6">
						<input type="file" id="bpjs_ker" name="bpjs_ker">
						<p class="help-block text-sm">
							<font color="red">*Format file pdf</font>
						</p>
					</div>
				</div>

				<div class="field btns">
					<button class="buttn prev-1">Kembali</button>
					<button class="buttn next-1">Lanjut</button>
				</div>
			</div>
			<div class="stage ketiga">
				<div class="judul">STATUS KELUARGA</div>

				<div id="form-keluarga">

					<div class="form-group row" id="form-asli">
						<label class="col-sm-3 col-form-label">Hubungan</label>
						<div class="col-sm-3">
							<select name="hubungan" id="hubungan" class="form-control">
								<option>- Pilih -</option>
								<option>Suami</option>
								<option>Istri</option>
								<option>Anak</option>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Nama</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="nama_pasangan" name="nama_pasangan" placeholder="Nama Pasangan">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Jenis Kelamin</label>
						<div class="col-sm-3">
							<select name="jenkel_pasangan" id="jenkel_pasangan" class="form-control">
								<option>- Pilih -</option>
								<option>Laki-Laki</option>
								<option>Perempuan</option>
							</select>
						</div>
					</div>
					
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Tempat, Tanggal lahir</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="temp_lahir_pasangan" name="temp_lahir_pasangan" placeholder="Tempat Lahir">
						</div>
						<div class="col-sm-2">
							<input type="date" class="form-control" id="tgl_lahir_pasangan" name="tgl_lahir_pasangan" placeholder="Tanggal Lahir">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Pendidikan</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="pend_pasangan" name="pend_pasangan">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Pekerjaan</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="pekerjaan_pasangan" name="pekerjaan_pasangan">
						</div>
					</div>
					<br>
				</div>


				<div id="form-keluarga-clone">

				</div>

				<button class="btn btn-info" onclick="copyFormKeluarga()" type="button">+ Tambah</button><br><br>
				<div class="field btns">
						<button class="buttn prev-1">Kembali</button>
						<button class="buttn next-1">Lanjut</button>
				</div>
			</div>
			<div class="stage keempat">
				<div class="judul">PENDIDIKAN TERAKHIR</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Nomor Ijazah</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="no_ijazah" name="no_ijazah" placeholder="Nomor ijazah">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Jenjang Pendidikan Terakhir</label>
					<div class="col-sm-5">
						<select name="jen_pend" id="jen_pend" class="form-control">
							<option>- Pilih jenjang pendidikan terakhir -</option>
							<option>SD</option>
							<option>SLTP</option>
							<option>SLTA</option>
							<option>D3</option>
							<option>D4</option>
							<option>S1</option>
							<option>S2</option>
							<option>S3</option>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Nama Universitas/Sekolah</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="nama_univ" name="nama_univ" placeholder="Nama Universitas">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Kota Universitas/Sekolah</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="kota_univ" name="kota_univ" placeholder="Kota Universitas">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Fakultas</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="fakultas" name="fakultas" placeholder="Fakultas">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Jurusan</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Jurusan">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Tahun lulus</label>
					<div class="col-sm-3">
						<input type="year" class="form-control" id="tahun_lulus" name="tahun_lulus">
					</div>
				</div>

				<div class="field btns">
					<button class="buttn prev-1">Kembali</button>
					<button class="buttn next-1">Lanjut</button>
				</div>
			</div>
			<div class="stage kelima">
				<div class="judul">RIWAYAT PEKERJAAN</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Nama Perusahaan</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" placeholder="Pendidikan Terakhir">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Tahun Periode</label>
					<div class="col-sm-2">
						<input type="text" class="form-control" id="tahun_periode" name="tehun_periode">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Bidang Usaha</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="bidang_usaha" name="bidang_usaha" placeholder="Bidang Usaha">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Jabatan Terakhir</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="jab_akhir" name="jab_akhir" placeholder="Jabatan Terakhir">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Gaji Terakhir</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="gaji_terakhir" name="gaji_terakhir" placeholder="Gaji Terakhir">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Alasan Berhenti</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="alasan_berhenti" name="alasan_berhenti" placeholder="Alasan Berhenti">
					</div>
				</div>

				<div class="field btns">
					<button class="buttn prev-1">Kembali</button>
					<button class="buttn next-1">Lanjut</button>
				</div>
			</div>
			<div class="stage keenam">

				<div class="judul">Rekening Pegawai</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Nomor Rekening</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="no_rek" name="no_rek">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Nama Bank</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="nama_bank" name="nama_bank">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Cabang Bank</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="cabang_bank" name="cabang_bank">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Nama Pemilik Bank</label>
					<div class="col-sm-2">
						<input type="text" class="form-control" id="atas_nama" name="atas_nama">
					</div>
				</div>


				<div class="judul">KEGIATAN ORGANISASI</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Nama Organisasi</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="nama_organisasi" name="nama_organisasi" placeholder="Nama Organisasi">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Jenis Organisasi</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="jenis_organisasi" name="jenis_organisasi" placeholder="Jenis Organisasi">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Jabatan</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="jabatan_organisasi" name="jabatan_organisasi" placeholder="Jabatan Organisasi">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Tahun</label>
					<div class="col-sm-2">
						<input type="text" class="form-control" id="tahun_organisasi" name="tahun_organisasi">
					</div>
				</div>

				<div class="judul">INFORMASI FISIK</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Tinggi Badan</label>
					<div class="col-sm-2">
						<input type="text" class="form-control" id="tb" name="tb">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Berat Badan</label>
					<div class="col-sm-2">
						<input type="text" class="form-control" id="bb" name="bb">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Golongan Darah</label>
					<div class="col-sm-2">
						<input type="text" class="form-control" id="gol_darah" name="gol_darah">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Ukuran Pakaian</label>
					<div class="col-sm-3">
						<select name="ukuran_pakaian" id="ukuran_pakaian" class="form-control" >
							<option>- Pilih -</option>
							<option>S</option>
							<option>M</option>
							<option>L</option>
							<option>XL</option>
							<option>XXL</option>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Ukuran Sepatu</label>
					<div class="col-sm-1">
						<input type="text" class="form-control" id="ukuran_sepatu" name="ukuran_sepatu">
					</div>
				</div>

				<div class="judul">KONTAK DARURAT</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Nama</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="nama_kontak_darurat" name="nama_kontak_darurat">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Hubungan</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="hubungan_kontak_darurat" name="hubungan_kontak_darurat">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Alamat</label>
					<div class="col-sm-6">
						<textarea class="form-control" id="almt_kontak_ddarurat" name="almt_kontak_darurat"  rows="3"></textarea>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">No HP</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="hp_kontak_darurat" name="hp_kontak_darurat">
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
					<button class="btn btn-outline-primary btn-lg" title="Simpan" name="simpan" type="submit">
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
//upload foto pegawai
	$sumber_foto_pegawai = @$_FILES['foto_pgw']['tmp_name'];
	$target ='berkas/foto/';
	$foto_pegawai = @$_FILES['foto_pgw']['name'];
	$pindah = move_uploaded_file($sumber_foto_pegawai, $target.$foto_pegawai);

//upload file ktp
	$sumber_file_ktp = @$_FILES['ktp']['tmp_name'];
	$target_berkas = 'berkas/document/';
	$foto_ktp = @$_FILES['ktp']['name'];
	$pindah = move_uploaded_file($sumber_file_ktp, $target_berkas.$foto_ktp);

	//upload file akte
	$sumber_file_akte = @$_FILES['akte']['tmp_name'];
	$file_akte = @$_FILES['akte']['name'];
	$pindah = move_uploaded_file($sumber_file_akte, $target_berkas.$file_akte);

	//upload file buku nikah
	$sumber_file_buku_nikah = @$_FILES['buku_nikah']['tmp_name'];
	$file_buku_nikah = @$_FILES['buku_nikah']['name'];
	$pindah = move_uploaded_file($sumber_file_buku_nikah, $target_berkas.$file_buku_nikah);

	//upload file npwp
	$sumber_file_npwp = @$_FILES['npwp']['tmp_name'];
	$file_npwp = @$_FILES['npwp']['name'];
	$pindah = move_uploaded_file($sumber_file_npwp, $target_berkas.$file_npwp);

//upload file kk
	$sumber_file_kk = @$_FILES['kk']['tmp_name'];
	$foto_kk = @$_FILES['kk']['name'];
	$pindah = move_uploaded_file($sumber_file_kk, $target_berkas.$foto_kk);

	//upload file pasport
	$sumber_file_pasport = @$_FILES['pasport']['tmp_name'];
	$file_pasport = @$_FILES['pasport']['name'];
	$pindah = move_uploaded_file($sumber_file_pasport, $target_berkas.$file_pasport);

//upload file sim A
	$sumber_file_sim_a = @$_FILES['simA']['tmp_name'];
	$foto_sim_a = @$_FILES['simA']['name'];
	$pindah = move_uploaded_file($sumber_file_sim_a, $target_berkas.$foto_sim_a);
	
//upload file sim C
	$sumber_file_sim_c = @$_FILES['simC']['tmp_name'];
	$foto_sim_c = @$_FILES['simC']['name'];
	$pindah = move_uploaded_file($sumber_file_sim_c, $target_berkas.$foto_sim_c);
//upload file bpjs kesehatan
	$sumber_file_bpjs_kes = @$_FILES['bpjs_kes']['tmp_name'];
	$foto_bpjs_kes = @$_FILES['bpjs_kes']['name'];
	$pindah = move_uploaded_file($sumber_file_bpjs_kes, $target_berkas.$foto_bpjs_kes);

//upload file bpjs kesehatan
	$sumber_file_bpjs_ker = @$_FILES['bpjs_ker']['tmp_name'];
	$foto_bpjs_ker = @$_FILES['bpjs_ker']['name'];
	$pindah = move_uploaded_file($sumber_file_bpjs_ker, $target_berkas.$foto_bpjs_ker);
	
	//kueri simpan data pribadi 
    if (isset ($_POST['simpan'])){
        $sql_identitas = "INSERT INTO tb_identitas (nrp, nama_lengkap, nik, jenis_pegawai, foto_pgw, nidn, tgl_bergabung, status_karyawan, jabatan, jenis_kel, temp_lahir, tgl_lahir, alamat_domisili, alamat_ktp, no_hp, telp, agama, kebangsaan, email) VALUES (
            '".$_POST['nrp_id']."',
			'".$_POST['nama_lkp']."',
			'".$_POST['nik']."',
			'".$_POST['jenis_pgw']."',
			'".$foto_pegawai."',
			'".$_POST['nidn']."',
			'".$_POST['tgl_join']."',
			'".$_POST['status']."',
			'".$_POST['jabatan']."',
			'".$_POST['jenkel']."',
			'".$_POST['temp_lahir']."',
			'".$_POST['tgl_lahir']."',
			'".$_POST['alamat_dom']."',
			'".$_POST['alamat_ktp']."',
			'".$_POST['no_hp']."',
			'".$_POST['telp']."',
			'".$_POST['agama']."',
			'".$_POST['kebangsaan']."',
			'".$_POST['email_pegawai']."')";
        $query_simpan = mysqli_query($koneksi, $sql_identitas);

		//kueri simpan data document
		$sql_doc = "INSERT INTO tb_doc (ktp, kk, akte, buku_nikah, sim_A, sim_C, npwp, pasport, bpjs_kes, bpjs_kerja, nrp_id) VALUES(
			'".$foto_ktp."',
			'".$foto_kk."',
			'".$file_akte."',
			'".$file_buku_nikah."',
			'".$foto_sim_a."',
			'".$foto_sim_c."',
			'".$file_npwp."',
			'".$file_pasport."',
			'".$foto_bpjs_kes."',
			'".$foto_bpjs_ker."',
			'".$_POST['nrp_id']."')";
		$query_simpan_doc = mysqli_query($koneksi, $sql_doc);

		//kueri simpan data hubungan keluarga
		$sql_keluarga = "INSERT INTO tb_stts_keluarga (stts_dikeluarga, nama, jenkel, tmp_lhir, tgl_lhir, pendidikan, pekerjaan, nrp_id) VALUES (
			'".$_POST['hubungan']."',
			'".$_POST['nama_pasangan']."',
			'".$_POST['jenkel_pasangan']."',
			'".$_POST['temp_lahir_pasangan']."',
			'".$_POST['tgl_lahir_pasangan']."',
			'".$_POST['pend_pasangan']."',
			'".$_POST['pekerjaan_pasangan']."',
			'".$_POST['nrp_id']."')";
		$query_simpan_keluarga = mysqli_query($koneksi, $sql_keluarga);

		//kueri simpan data pendidikan pegawai
		$sql_pendidikan = "INSERT INTO tb_pendidikan (no_ijazah_akhr, jenjang_akhr, nama_sekolah_univ, fakultas, jurusan, kota_perguruan, tahun_lulus, nrp_id) VALUES (
			'".$_POST['no_ijazah']."',
			'".$_POST['jen_pend']."',
			'".$_POST['nama_univ']."',
			'".$_POST['kota_univ']."',
			'".$_POST['fakultas']."',
			'".$_POST['jurusan']."',
			'".$_POST['tahun_lulus']."',
			'".$_POST['nrp_id']."')";
		$query_pendidikan = mysqli_query($koneksi, $sql_pendidikan);

		//kueri simpan data riwayat pekerjaan 
		$sql_riwayat = "INSERT INTO tb_riwayat_pekerjaan (nama_perusahaan, tahun_periode, bidang_usaha, jabatan_terakhir, gaji_terakhir, alasan_berhenti, nrp_id) VALUES (
			'".$_POST['nama_perusahaan']."',
			'".$_POST['tahun_periode']."',
			'".$_POST['bidang_usaha']."',
			'".$_POST['jab_akhir']."',
			'".$_POST['gaji_terakhir']."',
			'".$_POST['alasan_berhenti']."',
			'".$_POST['nrp_id']."')";
		$query_rw_pekerjaan = mysqli_query($koneksi, $sql_riwayat);

		//kueri simpan data organisasi yang pernah diikuti pegawai
		$sql_organisasi = "INSERT INTO tb_organisasi_pegawai (nama_organisasi, jenis, jabatan, thn, nrp_id) VALUES(
			'".$_POST['nama_organisasi']."',
			'".$_POST['jenis_organisasi']."',
			'".$_POST['jabatan_organisasi']."',
			'".$_POST['tahun_organisasi']."',
			'".$_POST['nrp_id']."')";
		$query_organisasi = mysqli_query($koneksi, $sql_organisasi);

		//kueri simpan data informasi fisik pegawai
		$sql_info_fisik = "INSERT INTO tb_info_fisik (TB, BB, gol_darah, ukuran_pakaian, ukuran_sepatu, nrp_id) VALUES (
			'".$_POST['tb']."',
			'".$_POST['bb']."',
			'".$_POST['gol_darah']."',
			'".$_POST['ukuran_pakaian']."',
			'".$_POST['ukuran_sepatu']."',
			'".$_POST['nrp_id']."')";
		$query_info_fisik = mysqli_query($koneksi, $sql_info_fisik);

		//kueri simpan data kontak darurat pegawai yang bisa dihubungi
		$sql_kontak_darurat = "INSERT INTO tb_kontak_darurat (nama, hubungan, alamat, hp, nrp_id) VALUES (
			'".$_POST['nama_kontak_darurat']."',
			'".$_POST['hubungan_kontak_darurat']."',
			'".$_POST['almt_kontak_darurat']."',
			'".$_POST['hp_kontak_darurat']."',
			'".$_POST['nrp_id']."')";
		$query_simpan_kontak = mysqli_query($koneksi, $sql_kontak_darurat);

		//kueri simpan data informasi rekening pegawai
		$sql_rekening = "INSERT INTO tb_rekening_pegawai (no_rek, nama_bank, cabang_bank, atas_nama, nrp_id) VALUES (
			'".$_POST['no_rek']."',
			'".$_POST['nama_bank']."',
			'".$_POST['cabang_bank']."',
			'".$_POST['atas_nama']."',
			'".$_POST['nrp_id']."')";
		$query_rekening = mysqli_query($koneksi, $sql_rekening);
        mysqli_close($koneksi);

		if ($query_simpan) {
			echo "<script>
			Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
			}).then((result) => {if (result.value){
				window.location = 'index.php?page=data-pegawai';
				}
			})</script>";
			}else{
			echo "<script>
			Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
			}).then((result) => {if (result.value){
				window.location = 'index.php?page=add-pegawai';
				}
			})</script>";
		  }
	}
?>