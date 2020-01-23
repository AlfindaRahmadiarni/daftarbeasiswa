

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
    <div class="card-header"><i class="fa fa-sitemap"></i> Data Operator</div>
    <div class="card-body">
      <div class="row">
        <a href="<?php echo site_url('Operator/create/') ?>" class="btn btn-primary">Tambah Operator</a> 
        <div class="col-md-12"><br></div>
        <table id="table_id" class="table table-hover table-responsive table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr> 
          <th>ID Operator</th>
          <th>Nama</th>
          <th>Email</th>
          <th>No Telp</th>
          <th>Username</th>
          <!-- <th>Password</th> -->
          <th>Tanggal Masuk</th>
          <th>Level</th>
          <th>Action
          </p></th>
        </tr>
      </thead>
      <tbody>

              <?php foreach($dataoperator as $o){?>
             <tr>
                 <td><?php echo $o->id;?></td>
                 <td><?php echo $o->nama;?></td>
                 <td><?php echo $o->email;?></td>
                 <td><?php echo $o->telp;?></td>
                 <td><?php echo $o->username;?></td>
                 <!-- <td><?php //echo $o->password;?></td>  -->
                 <?php $tgl=character_limiter($o->tglMasuk, 10) ?>
                 <td><?php echo tgl_indo($tgl);?></td>
                 <td><?php echo $o->keterangan;?></td>
                 <td>
                  <a href="<?php echo base_url('/Operator/edit/').$o->id ?>" class="btn btn-sm btn-outline-warning">Edit </a> 
                  <a href="<?php echo base_url('/Operator/delete/').$o->id ?>" class="btn btn-sm btn-outline-danger">Hapus</a> 
                 </td>
              </tr>
             <?php }?>
      </tbody>
      <tfoot>
        <tr>
          <th>ID Operator</th>
          <th>Nama</th>
          <th>Email</th>
          <th>No Telp</th>
          <th>Username</th>
          <!-- <th>Password</th> -->
          <th>Tanggal Masuk</th>
          <th>Level</th>
          <th>Action</th>
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