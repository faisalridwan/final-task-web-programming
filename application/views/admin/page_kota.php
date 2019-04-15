  <div class="container">
    <div class="box">
      <h2>Data Kota</h2>
      <p>Tabel Data Kota Sicepat</p>            
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahkota">TAMBAH Kota</button>
      <br><br>
      <table class="table table-bordered" id="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode Kota</th>
            <th>Nama Kota</th>
            <th>Edit Kota</th>
            <th>Hapus Kota</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; foreach ($datakota as $d ) {?>
          <tr>
            <td><?php echo $no++?></td>
            <td><?php echo $d->kodekota ?></td>
            <td><?php echo $d->namakota  ?></td>
            <!--BUTTON EDIT-->
            <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $d->kodekota ?>"><i class="fas fa-user-edit"></i></button></td>
            <!--BUTTON HAPUS --- ISI LENGKAPI BUTTON INI -->
            <td><a type="button" class="btn btn-danger"  href="<?php echo base_url('index.php/admin/hapuskota/'.$d->kodekota)?>" onClick="return confirm('Apakah Anda Yakin Hapus?')" ><i class="fas fa-user-times"></i></a></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>


<!-- Modal Tambah Jurusan -->

<div class="modal fade" id="tambahkota" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <center><h2>TAMBAH DATA KOTA</h2></center>
      </div>
      <div class="modal-body">
      <!-- isi form ini -->
      <form method="POST" action="<?php echo base_url('index.php/admin/tambahkota/')?>">
        <div class="form-group">
          <label for="formGroupExampleInput">Kode Kota</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Kode Kota" name="kodekota" required >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Nama Kota</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Fakultas" name="namakota"required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
      </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal Edit KOTA -->

<?php $no=1; foreach ($datakota as $d ) {?>
  <div class="modal fade" id="edit<?php echo $d->kodekota ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <center><h2>Edit Data <?php echo $d->namakota ?> </h2></center>
        </div>
        <div class="modal-body">
        <!-- isi form ini -->
        <form method="post" action="editkota">
        <label for="formGroupExampleInput">Kode Kota</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Kode Kota" name="kodekota" value="<?php echo $d->kodekota ?>"  required>
        <div class="form-group">
          <label for="formGroupExampleInput">Nama Kota</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Kota" name="namakota" value="<?php echo $d->namakota ?>" required >
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
        </div>
        </form>
      </div>
    </div>
  </div>
<?php } ?>

</body>
<script type="text/javascript">
  $(document).ready( function () {
    $('#table').DataTable();
} );
</script>
</html>
