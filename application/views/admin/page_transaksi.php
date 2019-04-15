  <div class="container">
    <div class="box">
      <h2>Data Transaksi</h2>
      <p>Tabel Data Transaksi Website SiCepat</p>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahkota">Tambah Transaksi</button>
      <br><br>
      <table class="table table-bordered" id="table">
        <thead>
          <tr>
            <th>No</th>
            <th>No RESI</th>
            <th>Layanan</th>
            <th>Asal</th>
            <th>Tujuan</th>
            <th>Pengirim</th>
            <th>Tgl Pengiriman</th>
            <th>Nama Penerima</th>
            <th>STATUS</th>
            <th>Edit</th>
            <th>Hapus</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; foreach ($datatransaksi as $d ) {?>
          <tr>
            <form>
              <td><?php echo $no++ ?></td>
              <td><?php echo $d->noresi ?></td>
            <td><?php echo $d->layanan  ?></td>
            <td><?php echo $d->asal ?></td>
            <td><?php echo $d->tujuan ?></td>
            <td><?php echo $d->pengirim ?></td>
            <td><?php echo $d->tglpengiriman ?></td>
            <td><?php echo $d->namapenerima ?></td>
            <td><?php echo $d->status ?></td>
            

              <!--BUTTON EDIT TRANSAKSI-->
              <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $d->noresi ?>"><i class="fas fa-user-edit"></i></button></td>
              <!--BUTTON HAPUS --- ISI LENGKAPI BUTTON INI -->
              <td><a type="button" class="btn btn-danger"  href="<?= base_url('index.php/admin/hapustransaksi/' .$d->noresi)?>" onClick="return confirm('Apakah Anda Yakin?')" ><i class="fas fa-user-times"></i></a></td>
            </form>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Modal Tambah Kota -->

<div class="modal fade" id="tambahkota" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <center><h2>TAMBAH DATA TRANSAKSI</h2></center>
      </div>
      <div class="modal-body">
      <!-- isi form ini -->
      <form method="POST" action="<?php echo base_url('index.php/admin/tambahtransaksi/')?>">
      <div class="form-group">
            <label for="formGroupExampleInput">No Resi</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="No Resi" name="noresi"  required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Layanan</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Layanan" name="layanan" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Asal</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Asal" name="asal"  required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Tujuan</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Tujuan" name="tujuan"  required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Pengirim</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Pengirim" name="pengirim" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Tgl Pengirim</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Tanggal Pengirim" name="tglpengiriman" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Nama Penerima</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nama Penerima" name="namapenerima" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Status</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Status" name="status" required>
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

<!-- Modal Edit Pengguna -->

<?php $no=1; foreach ($datatransaksi as $d ) {?>
  <div class="modal fade" id="edit<?php echo $d->noresi ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <center><h2>EDIT DATA TRANSAKSI </h2></center>
        </div>
        <div class="modal-body">
        <!-- isi form ini -->
        <form method="post" action="<?= base_url('index.php/Admin/edittransaksi/' .$d->noresi)?>">
          <div class="form-group">
            <label for="formGroupExampleInput">No Resi</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="No Resi" name="noresi"  value="<?php echo $d->noresi ?>" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Layanan</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Layanan" name="layanan" value="<?php echo $d->layanan ?>" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Asal</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Asal" name="asal" value="<?php echo $d->asal ?>" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Tujuan</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Tujuan" name="tujuan" value="<?php echo $d->tujuan ?>" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Pengirim</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Pengirim" name="pengirim" value="<?php echo $d->pengirim ?>" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Tgl Pengirim</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Tanggal Pengirim" name="tglpengiriman" value="<?php echo $d->tglpengiriman ?>" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Nama Penerima</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nama Penerima" name="namapenerima" value="<?php echo $d->namapenerima ?>" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Status</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Status" name="status" value="<?php echo $d->status ?>" required>
            

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
