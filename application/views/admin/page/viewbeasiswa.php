

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
      <div class="row">
      <!-- <div class="col-md-12"><br></div> -->
        <table id="table_id" class="table table-hover table-responsive table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>ID Beasiswa</th>
          <th>Nama Beasiswa</th>
          <th>Deadline Pendaftaran</th>
          <th>Periode Beasiswa</th> 
          <th>Kuota Penerima Beasiswa</th>
          <th>Action
          </p></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($databeasiswa as $beasiswa){?>
             <tr>
                 <td><?php echo $beasiswa->idBeasiswa;?></td>
                 <td><?php echo $beasiswa->namaBeasiswa;?></td>
                 <td><?php echo tgl_indo($beasiswa->deadline);?></td>
                 <td><?php echo $beasiswa->periode;?></td> 
                 <td><?php echo $beasiswa->kuota;?></td>
                <td>
                  <a href="<?php echo base_url('/beasiswa/edit/') . $beasiswa->idBeasiswa ?>" class="btn btn-sm btn-outline-primary">Edit Data</a> 
                </td>
              </tr>
             <?php }?>
      </tbody>
      <tfoot>
        <tr>
          <th>ID Beasiswa</th>
          <th>Nama Beasiswa</th>
          <th>Deadline Pendaftaran</th>
          <th>Periode Beasiswa</th>
          <th>Kuota Penerima Beasiswa</th>
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