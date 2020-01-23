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
    <div class="card-header"><i class="fa fa-sitemap"></i> Data Pribadi Pendaftar</div>
    <div class="card-body">
      <!-- <div class="row"> -->
        <div class="col-lg-6 offset-lg-3">
        

		<?php    
			$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
		?>
		<?php echo validation_errors(); ?>

		<?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>

		<?php echo form_open_multipart( current_url(), array('class' => 'needs-validation', 'novalidate' => '') ); ?>
		<h4 align="center">Edit Data Pribadi Pendaftar</h4><br><br>
		<hr><h5>A. DATA DIRI</h5><hr><br>
		<div class="form-group">
			<label for="nim">NIM</label>
			<input type="text" class="form-control" name="nim" value="<?php echo set_value('nim', $pendaftar->nim) ?>" required>
			<div class="invalid-feedback">Mohon isikan nim Anda</div>
		</div>
		<div class="form-group">
			<label for="nama">Nama</label>
			<input type="text" class="form-control" name="nama" value="<?php echo set_value('nama', $pendaftar->nama) ?>" required>
			<div class="invalid-feedback">Mohon isikan nama Anda</div>
		</div>
		<div class="form-group form-group-sm">
			<label for="jurusan">Jurusan</label>
			<select name="jurusan" class="form-control" value="<?php echo set_select('jurusan', $pendaftar->jurusan) ?>" required>
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
			<select name="jk" class="form-control" value="<?php echo set_value('jk', $pendaftar->jk) ?>" required>
				<option></option>
				<option value="Laki-laki">Laki-laki</option>
				<option value="Perempuan">Perempuan</option>
			</select>
			<div class="invalid-feedback">Mohon pilih jenis kelamin Anda</div>
		</div>
		<div class="form-group">
			<label for="">Tempat Lahir</label>
			<input type="text" class="form-control" name="tempatLahir" value="<?php echo set_value('tempatLahir', $pendaftar->tempatLahir) ?>" required>
			<div class="invalid-feedback">Mohon isikan tempat lahir Anda</div>
		</div>
		<div class="form-group">
			<label for="tanggal">Tanggal Lahir</label>
			<input type="date" class="form-control" name="tglLahir" value="<?php echo set_value('tglLahir', $pendaftar->tglLahir) ?>" required>
			<div class="invalid-feedback">Mohon pilih tanggal lahir Anda</div>
		</div>
		<div class="form-group">
			<label for="alamat">Alamat Lengkap</label>
			<textarea class="form-control" name="alamat" rows="3" placeholder="jl Jalan gg2 no 2020 RT 03 RW 09 kel Bunul kec Blimbing kota Malang kodepos 1234" required><?php echo set_value('alamat', $pendaftar->alamatLengkap) ?></textarea>
			<div class="invalid-feedback">Mohon isikan alamat lengkap Anda</div>
		</div>
		<div class="form-group">
			<label for="telp">No Telepon</label>
			<input type="text" class="form-control" name="telp" placeholder="081234567" value="<?php echo set_value('telp', $pendaftar->telp) ?>" required>
			<div class="invalid-feedback">Mohon isikan no telpon Anda</div>
		</div>
		<div class="form-group">
			<label for="thumbnail">Foto Diri</label>
			<input type="file" class="form-control" name="thumbnail">  
			<span><?php echo set_value('thumbnail', $pendaftar->foto) ?></span>
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
		
		<span>*Ukuran foto maksimal 100kb <br>*Kosongkan jika Anda tidak ingin mengubah foto</span>
		<br><br>
		<button id="submitBtn" type="submit" class="btn btn-warning">Edit</button>
          <!-- <button class="btn btn-default">Cancel</button> -->
        <a href="<?php echo base_url('pendaftar/') ?>" class="btn btn-primary">Cancel</a>
        <br><br>	


        </div>
      <!-- </div> -->
    </div>
  </div>
</div>
</div>