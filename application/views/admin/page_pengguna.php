  <div class="container">
    <div class="box">
      <h2>Data Pengguna</h2>
      <p>Tabel Data Pengguna Website SiCepat</p>
      <br><br>
      <table class="table table-bordered" id="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No Telepon</th>
            <th>Alamat</th>
            <th>Nama Kota</th>
            <th>Edit</th>
            <th>Hapus</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; foreach ($datapengguna as $d ) {?>
          <tr>
        <!--HINT UNTUK MENGHAPUS USER KALIAN DAPAT MENGGUNAKAN FORM, MENGGUNAKAN ANCHOR ATAU HREF PADA BUTTON-->
            <form action="">
              <td><?php echo $no++ ?></td>
              <td><?php echo $d->nama ?></td>
            <td><?php echo $d->email  ?></td>
            <td><?php echo $d->notlp ?></td>
            <td><?php echo $d->alamat ?></td>
            <td><?php echo $d->kodekota.' - '.$d->namakota ?></td>
            

              <!--BUTTON EDIT Pengguna-->
              <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $d->id ?>"><i class="fas fa-user-edit"></i></button></td>
              <!--BUTTON HAPUS --- ISI LENGKAPI BUTTON INI -->
              <td><a type="button" class="btn btn-danger"  href="<?= base_url('index.php/admin/hapuspengguna/' .$d->id)?>" onClick="return confirm('Apakah Anda Yakin?')" ><i class="fas fa-user-times"></i></a></td>
            </form>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

<!-- Modal Edit Pengguna -->

<?php $no=1; foreach ($datapengguna as $d ) {?>
  <div class="modal fade" id="edit<?php echo $d->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <center><h2>EDIT DATA PENGGUNA </h2></center>
        </div>
        <div class="modal-body">
        <!-- isi form ini -->
        <form method="post" action="<?= base_url('index.php/Admin/editpengguna/' .$d->id)?>">
        <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="Nim" name="id" value="<?php echo $d->id ?>"  required>
          <div class="form-group">
            <label for="formGroupExampleInput">Nama</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="nama"  value="<?php echo $d->nama ?>" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Email</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Kelas" name="email" value="<?php echo $d->email ?>" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">No Telepon</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Kelas" name="notlp" value="<?php echo $d->notlp ?>" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Alamat</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Kelas" name="alamat" value="<?php echo $d->alamat ?>" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Kota</label>
            <select class="form-control" id="formGroupExampleInput2" name="kodekota" required>
            <?php foreach ($datakota as $c ) {?>
                <option value="<?php echo $c->kodekota ?>" <?php if ( $c->kodekota == $d->kodekota)echo 'selected';?> attr="<?php echo $d->kodekota ?>"> <?php echo $c->kodekota.' - '.$c->namakota;  ?></option>
            <?php } ?>
            </select>            
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
