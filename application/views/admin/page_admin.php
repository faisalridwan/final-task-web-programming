<div class="container">
    <div class="box">
      <h2>Data Admin</h2>
      <p>Tabel Admin Kota Sicepat</p>            
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahkota">Tambah Admin</button>
      <br><br>
      <table class="table table-bordered" id="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Admin</th>
            <th>Username Admin</th>
            <th>Edit Admin</th>
            <th>Hapus Admin</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; foreach ($dataadmin as $d ) {?>
          <tr>
            <td><?php echo $no++?></td>
            <td><?php echo $d->namaadmin ?></td>
            <td><?php echo $d->useradmin ?></td>
            
            <!--BUTTON EDIT-->
            <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $d->idadmin ?>"><i class="fas fa-user-edit"></i></button></td>
            <!--BUTTON HAPUS --- ISI LENGKAPI BUTTON INI -->
            <td><a type="button" class="btn btn-danger"  href="<?php echo base_url('index.php/admin/hapusadmin/'.$d->idadmin)?>" onClick="return confirm('Apakah Anda Yakin Hapus?')" ><i class="fas fa-user-times"></i></a></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>


<!-- Modal Tambah Admin -->

<div class="modal fade" id="tambahkota" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <center><h2>TAMBAH DATA Admin</h2></center>
      </div>
      <div class="modal-body">
      <!-- isi form ini -->
      <form method="POST" action="<?php echo base_url('index.php/admin/tambahadmin/')?>">
        <div class="form-group">
          <label for="formGroupExampleInput">Nama Admin</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="namaadmin" required >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Username Admin</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Username" name="useradmin" required >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Password Admin</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Password" name="passadmin"required>
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


<!-- Modal Edit Admin -->

<?php $no=1; foreach ($dataadmin as $d ) {?>
  <div class="modal fade" id="edit<?php echo $d->idadmin ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <center><h2>Edit Data <?php echo $d->idadmin ?> </h2></center>
        </div>
        <div class="modal-body">
        <!-- isi form ini -->
        <form method="post" action="editadmin">
        <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="Id Admin" name="idadmin" value="<?php echo $d->idadmin ?>"  required>
        <label for="formGroupExampleInput">Nama Admin</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Admin" name="namaadmin" value="<?php echo $d->namaadmin ?>"  required>
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
