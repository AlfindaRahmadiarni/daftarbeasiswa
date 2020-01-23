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
    <div class="card-header"><i class="fa fa-user"></i> Data Tambahan Pendaftar</div>
    <div class="card-body">
      <div class="row">
       <!--  <a href="<?php //echo site_url('Pendaftar/create/') ?>" class="btn btn-primary">Tambah Pendaftar </a>  -->
      <div class="col-md-12"><br></div>
        <table id="table_id" class="table table-hover table-responsive table-responsive table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>ID Daftar</th>
          <th>No Induk Mahasiswa (NIM)</th>
          <th>Nama Lengkap</th>
          <th>Nama Ayah</th>
          <th>Nama Ibu</th>
          <th>Alasan Pengajuan Beasiswa</th>
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
                 <td><?php echo $p->namaAyah;?></td>
                 <td><?php echo $p->namaIbu;?></td>
                 <td><?php echo $p->alasanBeasiswa;?></td>
                 <?php 
                  $dl = $deadline['deadline'];
                  $tgl = date('Y-m-d');
                  if($dl >= $tgl) {?>
                    <td>
                    <a href="<?php echo base_url('/pendaftar/editTambahan/').$p->idDaftar ?>" class="btn btn-sm btn-outline-primary">Edit Data </a> 
                    <!-- <a href="<?php //echo base_url('/pendaftar/delete/').$p->idDaftar ?>" class="btn btn-sm btn-outline-danger">Hapus</a>  -->
                  </td>
                  <?php } ?>
              </tr>
             <?php }?>
      </tbody>
      <tfoot>
        <tr>
          <th>ID Daftar</th>
          <th>No Induk Mahasiswa (NIM)</th>
          <th>Nama Lengkap</th>
          <th>Nama Ayah</th>
          <th>Nama Ibu</th>
          <th>Alasan Pengajuan Beasiswa</th>
          <?php 
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