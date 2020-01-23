

<div class="content-wrapper"> <!-- "keseluruhan konten" -->
  <div class="container-fluid"> <!-- isi content -->
<!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Data Seleksi</li>
  </ol>

  <!-- Menampilkan data kategori-->
  <div class="card mb-3">
    <div class="card-header"><i class="fa fa-sitemap"></i> Data Seleksi</div>
    <div class="card-body">
      <div class="row">
      <!-- <div class="col-md-12"><br></div> -->
        <table id="table_id" class="table table-hover table-responsive table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>ID Seleksi</th>
          <th>ID Daftar</th>
          <th>Nomor Induk Mahasiswa (NIM)</th>
          <th>Nama Lengkap</th>
          <th>Total Akumulasi Nilai</th>
          <th>Keterangan</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($seleksi as $s){?>
             <tr>
                 <td><?php echo $s->idSeleksi;?></td>
                 <td><?php echo $s->idDaftar;?></td>
                 <td><?php echo $s->nim;?></td>
                 <td><?php echo $s->nama;?></td> 
                 <td><?php echo $s->poin;?></td>
                 <td><?php echo $s->keterangan;?></td>
              </tr>
             <?php }?>
      </tbody>
      <tfoot>
        <tr>
          <th>ID Seleksi</th>
          <th>ID Daftar</th>
          <th>Nomor Induk Mahasiswa (NIM)</th>
          <th>Nama Lengkap</th>
          <th>Total Akumulasi Nilai</th>
          <th>Keterangan</th>
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