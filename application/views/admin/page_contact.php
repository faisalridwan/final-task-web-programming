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
            <th>No RESI</th>
            <th>No Telepon</th>
            <th>Pesan</th>
            <!-- <th>Edit</th> -->
            <th>Hapus</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; foreach ($datacontact as $d ) {?>
          <tr>
        <!--HINT UNTUK MENGHAPUS USER KALIAN DAPAT MENGGUNAKAN FORM, MENGGUNAKAN ANCHOR ATAU HREF PADA BUTTON-->
            <form action="">
              <td><?php echo $no++ ?></td>
              <td><?php echo $d->namacontact ?></td>
            <td><?php echo $d->emailcontact  ?></td>
            <td><?php echo $d->notlpcontact ?></td>
            <td><?php echo $d->noresicontact ?></td> 
            <td><?php echo $d->pesancontact ?></td>
            

              <!--BUTTON EDIT Pengguna-->
              <!-- <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $d->id ?>"><i class="fas fa-user-edit"></i></button></td> -->
              <!--BUTTON HAPUS --- ISI LENGKAPI BUTTON INI -->
              <td><a type="button" class="btn btn-danger"  href="<?= base_url('index.php/admin/hapuscontact/' .$d->idcontact)?>" onClick="return confirm('Apakah Anda Yakin?')" ><i class="fas fa-user-times"></i></a></td>
            </form>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

<!-- Modal Edit Pengguna -->
</body>
  <script type="text/javascript">
    $(document).ready( function () {
        $('#table').DataTable();
    } );
  </script>
</html>
