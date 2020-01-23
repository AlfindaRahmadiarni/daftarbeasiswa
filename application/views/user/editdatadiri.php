<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

 
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">
<title>Form Pendaftaran</title>

<!-- Begin page content -->
<main role="main" class="container">
<br><h1 align="center">Form Daftar</h1><hr><br><br>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          
          <?php
            $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
          ?>
          <?php echo validation_errors(); ?>
          <?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>
          <?php echo form_open_multipart( 'Daftar/edit', array('class' => 'needs-validation', 'novalidate' => '') ); ?>


          <!-- <hr><h5>A. DATA PRIBADI</h5><hr><br> -->
          <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" class="form-control" name="nim" value="<?php echo set_value('nim', $datadiri->nim ) ?>" required>
            <div class="invalid-feedback">Mohon isikan nim Anda</div>
          </div>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" value="<?php echo set_value('nama', $datadiri->nama) ?>" required>
            <div class="invalid-feedback">Mohon isikan nama Anda</div>
          </div>
          <div class="form-group form-group-sm">
            <label for="jurusan">Jurusan</label>
            <select name="jurusan" class="form-control" value="<?php echo set_value('jurusan', $datadiri->jurusan) ?>" required>
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
            <select name="jk" class="form-control" value="<?php echo set_value('jk', $datadiri->jk) ?>" required>
              <option></option>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
            <div class="invalid-feedback">Mohon pilih jenis kelamin Anda</div>
          </div>
          <div class="form-group">
            <label for="">Tempat Lahir</label>
            <input type="text" class="form-control" name="tempatLahir" value="<?php echo set_value('tempatLahir', $datadiri->tempatLahir) ?>" required>
            <div class="invalid-feedback">Mohon isikan tempat lahir Anda</div>
          </div>
          <div class="form-group">
            <label for="tanggal">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tglLahir" value="<?php echo set_value('tglLahir', $datadiri->tglLahir) ?>" required>
            <div class="invalid-feedback">Mohon pilih tanggal lahir Anda</div>
          </div>
          <div class="form-group">
            <label for="alamat">Alamat Lengkap</label>
            <textarea class="form-control" name="alamat" rows="3" placeholder="jl Jalan gg2 no 2020 RT 03 RW 09 kel Bunul kec Blimbing kota Malang kodepos 1234" required><?php echo set_value('alamat', $datadiri->alamatLengkap) ?></textarea>
            <div class="invalid-feedback">Mohon isikan alamat lengkap Anda</div>
          </div>
          <div class="form-group">
            <label for="telp">No Telepon</label>
            <input type="text" class="form-control" name="telp" value="<?php echo set_value('telp', $datadiri->telp) ?>" required>
            <div class="invalid-feedback">Mohon isikan no telpon Anda</div>
          </div>
          <div class="form-group">
            <label for="thumbnail">Foto Diri</label>
            <input type="file" class="form-control" name="thumbnail" value="<?php echo set_value('thumbnail', $datadiri->foto) ?>">
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
          <!-- <br><br><br> -->

          <!-- <hr><h5>B. DATA AKADEMIK</h5><hr><br> -->
          
          <!-- <br><br><br> -->



          <!-- <hr><h5>B. DATA PRESTASI</h5><hr><br> -->
          <div class="form-group">
            <label for="ipk">IPK Terakhir</label>
            <input type="text" class="form-control" name="ipk" value="<?php echo set_value('ipk', $datadiri->ipk) ?>" required>
            <div class="invalid-feedback">Mohon isikan ipk terakhir Anda</div>
          </div><br>
          <span>*Ukuran foto maksimal 100kb</span>
          <!-- <div class="form-group">
            <label for="internasional" class="">Jumlah Sertifikat</label></div>
            <input type="text" class="form-control-sm" name="internasional" value="<?php //echo set_value('internasional', $datadiri->internasional) ?>" > 
            <input type="text" class="form-control-sm" name="nasional" value="<?php //echo set_value('nasional', $datadiri->nasional) ?>">
            <input type="text" class="form-control-sm" name="provinsi" value="<?php //echo set_value('provinsi', $datadiri->provinsi) ?>">
            <input type="text" class="form-control-sm" name="kota" value="<?php //echo set_value('kota', $datadiri->kota) ?>"><br><br> -->
            <!-- required> -->
            <!-- <div class="invalid-feedback">Isi jumlah sertifikat tingkat internasional dulu gan</div> -->
          
        
          <!-- <span>*Prestasi yang dimaksud adalah juara 1-3 saja</span> -->
          <br><br><br>


          <hr><h5>B. DATA TAMBAHAN</h5><hr><br>
          <div class="form-group">
            <label for="namaAyah">Nama Ayah</label>
            <input type="text" class="form-control" name="namaAyah" placeholder="Doni Dhoe" value="<?php echo set_value('namaAyah', $datadiri->namaAyah) ?>" required>
            <div class="invalid-feedback">Isi nama ayah dulu gan</div>
          </div>
          <div class="form-group">
            <label for="namaIbu">Nama Ibu</label>
            <input type="text" class="form-control" name="namaIbu" placeholder="Dona Dhoe" value="<?php echo set_value('namaIbu', $datadiri->namaIbu) ?>" required>
            <div class="invalid-feedback">Isi nama ibu dulu gan</div>
          </div>
          
          <div class="form-group">
            <label for="alasan">Alasan Pengajuan Beasiswa</label>
            <textarea class="form-control" name="alasanBea" rows="3" placeholder="Untuk pembayaran UKT" required><?php echo set_value('alasanBea', $datadiri->alasanBeasiswa) ?></textarea>
            <div class="invalid-feedback">Isi alasan pengajuan beasiswa dulu gan</div>
          </div>

          <br>
          <hr>
          <button id="submitBtn" type="submit" class="btn btn-primary">Edit Data Diri</button>
          <a href="<?php echo site_url('Daftar/datadiri/') ?>" class="btn btn-secondary">Cancel </a>
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
