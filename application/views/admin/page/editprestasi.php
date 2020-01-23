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
    <div class="card-header"><i class="fa fa-sitemap"></i> Data Prestasi Pendaftar</div>
    <div class="card-body">
      <!-- <div class="row"> -->
        <div class="col-lg-6 offset-lg-3">
        



		<?php    
			$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
		?>
		<?php echo validation_errors(); ?>

		<?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>

		<?php echo form_open_multipart( current_url(), array('class' => 'needs-validation', 'novalidate' => '') ); ?>
		<h4 align="center">Edit Data Prestasi Pendaftar</h4><br><br>
		<hr><h5>B. DATA PRESTASI</h5><hr><br>
		<div class="form-group">
			<label for="nim">NIM</label>
			<input type="text" class="form-control" name="nim" value="<?php echo $pendaftar->nim ?>" disabled>
		</div>
		<div class="form-group">
			<label for="nama">Nama</label>
			<input type="text" class="form-control" name="nama" value="<?php echo $pendaftar->nama ?>" disabled>
		</div>
		<div class="form-group">
			<label for="">IPK Terakhir</label>
			<input type="text" class="form-control" name="ipk" value="<?php echo set_value('ipk', $pendaftar->ipk) ?>" required>
			<div class="invalid-feedback">Mohon isikan IPK terakhir Anda</div>
		</div>
		<div class="form-group">
			<label for="">Jumlah Sertifikat Tingkat Internasional</label>
			<input type="text" class="form-control" name="internasional" value="<?php echo set_value('internasional', $pendaftar->internasional) ?>">
		</div>
		<div class="form-group">
			<label for="">Jumlah Sertifikat Tingkat Nasional</label>
			<input type="text" class="form-control" name="nasional" value="<?php echo set_value('nasional', $pendaftar->nasional) ?>">
		</div>
		<div class="form-group">
			<label for="">Jumlah Sertifikat Tingkat Provinsi</label>
			<input type="text" class="form-control" name="provinsi" value="<?php echo set_value('provinsi', $pendaftar->provinsi) ?>">
		</div>
		<div class="form-group">
			<label for="">Jumlah Sertifikat Tingkat Kota</label>
			<input type="text" class="form-control" name="kota" value="<?php echo set_value('kota', $pendaftar->kota) ?>">
		</div>
		<br>
		<button id="submitBtn" type="submit" class="btn btn-warning">Edit</button>
          <!-- <button class="btn btn-default">Cancel</button> -->
        <a href="<?php echo base_url('pendaftar/prestasi') ?>" class="btn btn-primary">Cancel</a>
        <br>	


        </div>
      <!-- </div> -->
    </div>
  </div>
</div>
</div>