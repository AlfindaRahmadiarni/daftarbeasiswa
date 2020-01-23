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
    <div class="card-header"><i class="fa fa-sitemap"></i> Data Tambahan Pendaftar</div>
    <div class="card-body">
      <!-- <div class="row"> -->
        <div class="col-lg-6 offset-lg-3">

		<?php    
			$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
		?>
		<?php echo validation_errors(); ?>

		<?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>

		<?php echo form_open_multipart( current_url(), array('class' => 'needs-validation', 'novalidate' => '') ); ?>
		<h4 align="center">Edit Data Tambahan Pendaftar</h4><br><br>
		<hr><h5>C. DATA TAMBAHAN</h5><hr><br>
		<div class="form-group">
			<label for="nim">NIM</label>
			<input type="text" class="form-control" name="nim" value="<?php echo $pendaftar->nim ?>" disabled>
		</div>
		<div class="form-group">
			<label for="nama">Nama</label>
			<input type="text" class="form-control" name="nama" value="<?php echo $pendaftar->nama ?>" disabled>
		</div>
		<div class="form-group">
			<label for="">Nama Ayah</label>
			<input type="text" class="form-control" name="namaAyah" value="<?php echo set_value('namaAyah', $pendaftar->namaAyah) ?>" required>
			<div class="invalid-feedback">Mohon isikan nama ayah Anda</div>
		</div>
		<div class="form-group">
			<label for="">Nama Ibu</label>
			<input type="text" class="form-control" name="namaIbu" value="<?php echo set_value('namaIbu', $pendaftar->namaIbu) ?>" required>
			<div class="invalid-feedback">Mohon isikan nama ibu Anda</div>
		</div>
		<div class="form-group">
			<label for="">Alasan Pengajuan Beasiswa</label>
			<textarea class="form-control" name="alasanBea" rows="3" required><?php echo set_value('alasanBea', $pendaftar->alasanBeasiswa) ?></textarea>
			<div class="invalid-feedback">Mohon isikan alasan pengajuan beasiswa Anda</div>
		</div>
		<br>
		<button id="submitBtn" type="submit" class="btn btn-warning">Edit</button>
          <!-- <button class="btn btn-default">Cancel</button> -->
        <a href="<?php echo base_url('pendaftar/tambahan') ?>" class="btn btn-primary">Cancel</a>
        <br>	


        </div>
      <!-- </div> -->
    </div>
  </div>
</div>
</div>