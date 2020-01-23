<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

 
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">
<title>Form Pendaftaran</title>

<!-- Begin page content -->
<main role="main" class="container">
<br><h1 align="center">Data Prestasi</h1><hr><br><br>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          
          <?php
            $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
          ?>
          <?php echo validation_errors(); ?>
          <?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>
          <?php echo form_open( 'Daftar/editPrestasi', array('class' => 'needs-validation', 'novalidate' => '') ); ?>



        <!-- <div class="form-group">
            <label for="nim">ID Daftar</label>
            <input type="text" class="form-control" name="na" value="<?php //echo set_value('na') ?>" required>
          </div> -->

          <!-- <div class="form-group">
            <label for="nim">ID Daftar</label>
            <input type="text" class="form-control" name="nim" value="<?php echo $datadiri->idDaftar ?>" disabled>
          </div>
          <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" class="form-control" name="nim" value="<?php echo $datadiri->nim ?>" disabled>
          </div>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" value="<?php echo $datadiri->nama ?>" disabled>
          </div> -->
        
          <hr><h5>Jumlah Sertifikat</h5><hr><br>
          <div class="form-group">
            <label for="namaAyah">Sertifikat Internasional</label>
            <input type="text" class="form-control" name="internasional" value="<?php echo set_value('internasional', $datadiri->internasional) ?>">
          </div>
          <div class="form-group">
            <label for="namaAyah">Sertifikat Nasional</label>
            <input type="text" class="form-control" name="nasional" value="<?php echo set_value('nasional', $datadiri->nasional) ?>">
          </div>
          <div class="form-group">
            <label for="namaAyah">Sertifikat Provinsi</label>
            <input type="text" class="form-control" name="provinsi" value="<?php echo set_value('provinsi', $datadiri->provinsi) ?>">
          </div>
          <div class="form-group">
            <label for="namaAyah">Sertifikat Kota</label>
            <input type="text" class="form-control" name="kota" value="<?php echo set_value('kota', $datadiri->kota) ?>">
          </div>
           <span>*Prestasi yang dimaksud adalah juara 1-3 saja</span>
          <!-- <br><br><br> -->

          <br>
          <hr>
          <button id="submitBtn" type="submit" class="btn btn-primary">Edit Data Prestasi</button>
          <a href="<?php echo site_url('Daftar/dataprestasi/') ?>" class="btn btn-secondary">Cancel </a>
          <hr>
          <br><br>
        <!-- </form> -->
      </div>
    </div>
  </div>
</section>

<script src="<?php echo base_url() ?>assets/js/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/custom.js"></script>
</main>
