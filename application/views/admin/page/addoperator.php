<div class="content-wrapper"> <!-- "keseluruhan konten" -->
  <div class="container-fluid"> <!-- isi content -->
<!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Data Operator</li>
  </ol>

  <!-- Menampilkan data kategori-->
  <div class="card mb-3">
    <div class="card-header"><i class="fa fa-list"></i> Data Operator</div>
    <div class="card-body">
      <!-- <div class="row"> -->
        <div class="col-lg-6 offset-lg-3">

		<?php    
			$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
		?>

		<!-- <?php //echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?> -->

		<?php echo form_open( current_url(), array('class' => 'needs-validation', 'novalidate' => '') ); ?>
		<h4 align="center">Tambah Data Operator</h4><br>
		<?php echo validation_errors(); ?><br>
		<!-- <hr><h5>A. DATA DIRI</h5><hr><br> -->
		<div class="form-group">
			<label for="">Nama Lengkap</label>
			<input type="text" class="form-control" name="nama" placeholder="John Doe" value="<?php echo set_value('nama') ?>" required>
			<div class="invalid-feedback">Mohon isikan Nama Lengkap Anda</div>
		</div>
		<div class="form-group">
			<label for="">Email</label>
			<input type="email" class="form-control" name="email" placeholder="johndoe@gmail.com" value="<?php echo set_value('email') ?>" required>
			<div class="invalid-feedback">Mohon periksa Email Anda</div>
		</div>
		<div class="form-group">
			<label for="">No Telpon</label>
			<input type="text" class="form-control" name="telp" placeholder="08123456789" value="<?php echo set_value('telp') ?>" required>
			<div class="invalid-feedback">Mohon isikan No Telpon Anda</div>
		</div>
		<div class="form-group">
			<label for="">Username</label>
			<input type="text" class="form-control" name="username" placeholder="username" value="<?php echo set_value('username') ?>" required>
			<div class="invalid-feedback">Mohon isikan username Anda</div>
		</div>
		
		<div class="form-group">
			<label>Password</label>
			<input type="password" class="form-control" name="password" placeholder="*****" value="<?php echo set_value('password') ?>" required>
			<div class="invalid-feedback">Isi password Anda</div>
		</div>
		<div class="form-group">
			<label>Ulangi Password</label>
			<input type="password" class="form-control" name="password2" placeholder="*****" value="<?php echo set_value('password2') ?>" required>
			<div class="invalid-feedback">Isi ulangi password</div>
		</div><br>
		
		<hr>
		<button id="submitBtn" type="submit" class="btn btn-primary">Tambah Operator</button>
		<a href="<?php echo base_url('Operator/') ?>" class="btn btn-secondary">Cancel</a><hr>
		<br>



        </div>
      <!-- </div> -->
    </div>
  </div>
</div>
</div>