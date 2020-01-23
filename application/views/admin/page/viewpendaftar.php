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
    <div class="card-header"><i class="fa fa-user"></i> Data Pribadi Pendaftar</div>
    <div class="card-body">
      <div class="row">
        <?php 
          $dl = $deadline['deadline'];
          $tgl = date('Y-m-d');
          if($dl >= $tgl) {?>
            <a href="<?php echo site_url('Pendaftar/create/') ?>" class="btn btn-primary">Tambah Pendaftar </a> 
        <?php }?>
        
      <div class="col-md-12"><br></div>
        <table id="table_id" class="table table-hover table-responsive table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr> 
          <th>ID</th>
          <th>NIM</th>
          <th>Nama</th>
          <th>Jalur</th>
          <th>Jurusan</th>
          <th>Jenis Kelamin</th>
          <th>TTL</th>
          <th>Alamat Lengkap</th>
          <th>No Telp</th>
          <th>Foto</th>
          <th>Tanggal Daftar</th>
          <?php 
          // $dl = $deadline;
          // $tgl = date('Y-m-d');
          if($dl >= $tgl) {?>
            <th>Action
          </p></th>
          <?php } ?>
        </tr>
      </thead>
      <tbody>
        <?php foreach($datapendaftar as $p){?>
             <tr>
                 <td><?php echo $p->idDaftar;?></td>
                 <td><?php echo $p->nim;?></td>
                 <td><?php echo $p->nama;?></td>
                 <td><?php echo $p->keterangan;?></td>
                 <td><?php echo $p->jurusan;?></td>
                 <td><?php echo $p->jk;?></td>
                 <td><?php echo $p->tempatLahir.", ".tgl_indo($p->tglLahir);?></td>
                 <td><?php echo $p->alamatLengkap;?></td>
                 <td><?php echo $p->telp;?></td>
                  <td><img src="<?php echo base_url() .'uploads/'. $p->foto ?>" width='100' height='100'></td>
                  
                 <?php $tgl=character_limiter($p->tglDaftar, 10) ?>
                 <td><?php echo tgl_indo($tgl);?></td>
                 <?php 
                  $dl = $deadline['deadline'];
                  $tgl = date('Y-m-d');
                  if($dl >= $tgl) {?>
                    <td>
                    <a href="<?php echo base_url('/pendaftar/editPribadi/').$p->idDaftar ?>" class="btn btn-sm btn-outline-warning">Edit </a> 
                    <a href="<?php echo base_url('/pendaftar/delete/').$p->idDaftar ?>" class="btn btn-sm btn-outline-danger">Hapus</a> 
                  </td>
                  <?php } ?>
                
              </tr>
             <?php }?>
      </tbody>
      <tfoot>
        <tr>
          <th>ID</th>
          <th>NIM</th>
          <th>Nama</th>
          <th>Jalur</th>
          <th>Jurusan</th>
          <th>Jenis Kelamin</th>
          <th>TTL</th>
          <th>Alamat Lengkap</th>
          <th>No Telp</th>
          <!-- <th>Agama</th> -->
          <th>Foto</th>
          <th>Tanggal Daftar</th>
          <?php 
            // $dl = $deadline['deadline'];
            // $tgl = date('Y-m-d');
            if($dl >= $tgl) {?>
              <th>Action
            </p></th>
          <?php } ?>
        </tr>
      </tfoot>
    </table>
    </div>
    </div>
  </div>
</div>
</div>


<script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
</script>