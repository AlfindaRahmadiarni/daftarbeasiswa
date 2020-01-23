<div class="content-wrapper"> <!-- "keseluruhan konten" -->
  <div class="container-fluid"> <!-- isi content -->
<!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Data Beasiswa</li>
  </ol>

  <!-- Menampilkan data kategori-->
  <div class="card mb-3">
    <div class="card-header"><i class="fa fa-sitemap"></i> Data Beasiswa</div>
    <div class="card-body">
      <!-- <div class="row"> -->
        <div class="col-lg-6 offset-lg-3">
        



        <?php    
            $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
          ?>
          <?php echo validation_errors(); ?>

          <?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>

          <?php echo form_open( current_url(), array('class' => 'needs-validation', 'novalidate' => '') ); ?>
          <h4 align="center">Edit Data Beasiswa</h4><br><br>
          <div class="form-group">
            <label for="name">Nama Beasiswa</label>
            <input type="text" class="form-control" name="namaBeasiswa" value="<?php echo set_value('namaBeasiswa', $beasiswa->namaBeasiswa) ?>" required>
            <div class="invalid-feedback">Mohon lengkapi nama beasiswa</div>
          </div>
          <div class="form-group">
            <label for="text">Periode Beasiswa</label>
            <input type="text" class="form-control" name="periode" value="<?php echo set_value('periode', $beasiswa->periode) ?>" required>
            <div class="invalid-feedback">Mohon lengkapi periode beasiswa</div>
          </div>
          <div class="form-group">
            <label for="text">Kuota Penerima Beasiswa</label>
            <input type="text" class="form-control" name="kuota" value="<?php echo set_value('kuota', $beasiswa->kuota) ?>" required>
            <div class="invalid-feedback">Mohon lengkapi kuota penerima beasiswa</div>
          </div>
          <div class="form-group">
            <label for="text">Deadline Pengajuan</label>
            <input type="date" class="form-control" name="deadline" value="<?php echo set_value('deadline', $beasiswa->deadline) ?>" required>
            <div class="invalid-feedback">Mohon lengkapi deadline pengajuan beasiswa</div>
          </div>
          <br>
          <button id="submitBtn" type="submit" class="btn btn-warning">Edit</button>
          <!-- <button class="btn btn-default">Cancel</button> -->
          <a href="<?php echo base_url('beasiswa/') ?>" class="btn btn-primary">Cancel</a>
          <br>



        </div>
      <!-- </div> -->
    </div>
  </div>
</div>
</div>