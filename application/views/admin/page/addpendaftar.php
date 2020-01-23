<div class="content-wrapper"> <!-- "keseluruhan konten" -->
  <div class="container-fluid"> <!-- isi content -->
<!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Data Pendaftar</li>
  </ol>

  <!-- Menampilkan data kategori-->
  <div class="card mb-3">
    <div class="card-header"><i class="fa fa-sitemap"></i> Data Pendaftar</div>
    <div class="card-body">
      <!-- <div class="row"> -->
        <div class="col-lg-6 offset-lg-3">

		<!-- <?php    
		//	$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
		?> -->
		<?php echo validation_errors(); ?><br> 

		<?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>

		<?php echo form_open_multipart( current_url(), array('class' => 'needs-validation', 'novalidate' => '') ); ?>
		<h4 align="center">Tambah Data Pendaftar</h4><br>
		<?php echo validation_errors(); ?><br>
		<hr><h5>A. DATA DIRI</h5><hr><br>
		<div class="form-group">
			<label for="nim">NIM</label>
			<input type="text" class="form-control" name="nim" placeholder="16317100" value="<?php echo set_value('nim') ?>" required>
			<div class="invalid-feedback">Mohon isikan nim Anda</div>
		</div>
		<div class="form-group">
			<label for="nama">Nama</label>
			<input type="text" class="form-control" name="nama" placeholder="John Doe" value="<?php echo set_value('nama') ?>" required>
			<div class="invalid-feedback">Mohon isikan nama Anda</div>
		</div>
		<div class="form-group form-group-sm">
			<label for="jurusan">Jurusan</label>
			<select name="jurusan" class="form-control" value="<?php echo set_value('jurusan') ?>" required>
				<option></option>
				<option value="Teknologi Informasi">Teknologi Informasi</option>
				<option value="Teknik Kimia">Teknik Kimia</option>
				<option value="Teknik Sipil">Teknik Sipil</option>
				<option value="Teknik Mesin">Teknik Mesin</option>
				<option value="Administrasi Bisnis">Administrasi Bisnis</option>
				<option value="Akuntansi">Akuntansi</option>
				<option value="Bahasa Inggris">Bahasa Inggris</option>
			</select>
			<div class="invalid-feedback">Mohon pilih jurusan Anda</div>
		</div>
		<div class="form-group">
			<label for="jk">Jenis Kelamin</label>
			<select name="jk" class="form-control" value="<?php echo set_value('jk') ?>" required>
				<option></option>
				<option value="Laki-laki">Laki-laki</option>
				<option value="Perempuan">Perempuan</option>
			</select>
			<div class="invalid-feedback">Mohon pilih jenis kelamin Anda</div>
		</div>
		<div class="form-group">
			<label for="">Tempat Lahir</label>
			<input type="text" class="form-control" name="tempatLahir" placeholder="Malang" value="<?php echo set_value('tempatLahir') ?>" required>
			<div class="invalid-feedback">Mohon isikan tempat lahir Anda</div>
		</div>
		<div class="form-group">
			<label for="tanggal">Tanggal Lahir</label>
			<input type="date" class="form-control" name="tglLahir" value="<?php echo set_value('tglLahir') ?>" required>
			<div class="invalid-feedback">Mohon pilih tanggal lahir Anda</div>
		</div>
		<div class="form-group">
			<label for="alamat">Alamat Lengkap</label>
			<textarea class="form-control" name="alamat" rows="3" placeholder="jl Jalan gg2 no 2020 RT 03 RW 09 kel Bunul kec Blimbing kota Malang kodepos 1234" required><?php echo set_value('alamat') ?></textarea>
			<div class="invalid-feedback">Mohon isikan alamat lengkap Anda</div>
		</div>
		<div class="form-group">
			<label for="telp">No Telepon</label>
			<input type="text" class="form-control" name="telp" placeholder="081234567" value="<?php echo set_value('telp') ?>" required>
			<div class="invalid-feedback">Mohon isikan no telpon Anda</div>
		</div>
		<div class="form-group">
			<label for="thumbnail">Foto Diri</label>
			<input type="file" class="form-control" name="thumbnail" value="<?php echo set_value('thumbnail') ?>" required>
			<div class="invalid-feedback">Mohon pilih foto Anda Anda</div>
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" class="form-control" name="password" value="<?php echo set_value('password') ?>" required>
			<div class="invalid-feedback">Isi passwordnya dulu yah</div>
		</div>
		<div class="form-group">
			<label>Ulangi Password</label>
			<input type="password" class="form-control" name="password2" value="<?php echo set_value('password2') ?>" required>
			<div class="invalid-feedback">Isi ulangi passwordnya dulu yah</div>
		</div>
		<div class="form-group">
			<label>Pilih Jalur Seleksi</label>
			<div class="form-check">
				<input type="radio" class="form-check-input" name="level" id="akademik" value="3" checked="">
				<label class="form-check-label" for="">Akademik</label>
			</div>
			<div class="form-check">
				<input type="radio" class="form-check-input" name="level" id="non" value="4" checked="">
				<label class="form-check-label" for="">Prestasi</label>
			</div>
		</div><br>
		<span>*Ukuran foto maksimal 100kb</span>
		<br><br><br>
		

		<hr><h5>B. DATA PRESTASI</h5><hr><br>
		<div class="form-group">
			<label for="ipk">IPK Terakhir</label>
			<input type="text" class="form-control" name="ipk" placeholder="4.00" value="<?php echo set_value('ipk') ?>" required>
			<div class="invalid-feedback">Mohon isikan ipk terakhir Anda</div>
		</div>
		<div class="form-group">
			<label for="internasional" class="">Jumlah Sertifikat</label></div>
			<input type="text" class="form-control-sm" name="internasional" placeholder="tingkat internasional" value="<?php echo set_value('internasional') ?>" > 
			<input type="text" class="form-control-sm" name="nasional" placeholder="tingkat nasional" value="<?php echo set_value('nasional') ?>">
			<input type="text" class="form-control-sm" name="provinsi" placeholder="tingkat provinsi" value="<?php echo set_value('provinsi') ?>">
			<input type="text" class="form-control-sm" name="kota" placeholder="tingkat kota" value="<?php echo set_value('kota') ?>"><br><br>

		<span>*Prestasi yang dimaksud adalah juara 1-3 saja</span>
		<br><br>


		<hr><h5>C. DATA TAMBAHAN</h5><hr><br>
		<div class="form-group">
			<label for="namaAyah">Nama Ayah</label>
			<input type="text" class="form-control" name="namaAyah" placeholder="Doni Dhoe" value="<?php echo set_value('namaAyah') ?>" required>
			<div class="invalid-feedback">Isi nama ayah dulu gan</div>
		</div>
		<div class="form-group">
			<label for="namaIbu">Nama Ibu</label>
			<input type="text" class="form-control" name="namaIbu" placeholder="Dona Dhoe" value="<?php echo set_value('namaIbu') ?>" required>
			<div class="invalid-feedback">Isi nama ibu dulu gan</div>
		</div>

		<div class="form-group">
			<label for="alasan">Alasan Pengajuan Beasiswa</label>
			<textarea class="form-control" name="alasanBea" rows="3" placeholder="Untuk pembayaran UKT" required><?php echo set_value('alasanBea') ?></textarea>
			<div class="invalid-feedback">Isi alasan pengajuan beasiswa dulu gan</div>
		</div>

		
		<hr>
		<button id="submitBtn" type="submit" class="btn btn-primary">Daftar</button>
		<a href="<?php echo base_url('pendaftar/') ?>" class="btn btn-secondary">Cancel</a><hr>
		<br>



        </div>
      <!-- </div> -->
    </div>
  </div>
</div>
</div>