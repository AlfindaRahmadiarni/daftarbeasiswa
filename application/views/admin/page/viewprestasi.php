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
    <div class="card-header"><i class="fa fa-user"></i> Data Prestasi Pendaftar</div>
    <div class="card-body">
      <div class="row">
       <!--  <a href="<?php //echo site_url('Pendaftar/create/') ?>" class="btn btn-primary">Tambah Pendaftar </a>  -->
      <div class="col-md-12"><br></div>
        <table id="table_id" class="table table-hover table-responsive table-responsive table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr> 
          <th>ID</th>
          <th>NIM</th>
          <th>Nama</th>
          <th>IPK</th>
          <th>Sertifikat Internasional</th>
          <th>Sertifikat Nasional</th>
          <th>Sertifikat Provinsi</th>
          <th>Sertifikat Kota</th>
          <?php 
            $dl = $deadline['deadline'];
            $tgl = date('Y-m-d');
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
                 <td><?php echo $p->ipk;?></td>
                 <td><?php echo $p->internasional;?></td>
                 <td><?php echo $p->nasional;?></td>
                 <td><?php echo $p->provinsi;?></td>
                 <td><?php echo $p->kota;?></td>
                 <?php 
                  $dl = $deadline['deadline'];
                  $tgl = date('Y-m-d');
                  if($dl >= $tgl) {?>
                    <td>
                  <a href="<?php echo base_url('/pendaftar/editPrestasi/').$p->idDaftar ?>" class="btn btn-sm btn-outline-primary">Edit Data </a> 
                  <!-- <a href="<?php //echo base_url('/pendaftar/delete/').$p->idDaftar ?>" class="btn btn-sm btn-outline-danger">Hapus</a>  -->
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
          <th>IPK</th>
          <th>Sertifikat Internasional</th>
          <th>Sertifikat Nasional</th>
          <th>Sertifikat Provinsi</th>
          <th>Sertifikat Kota</th>
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