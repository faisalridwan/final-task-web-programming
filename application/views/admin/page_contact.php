<div class="container">
    <div class="box">
      <h2>Data Contact</h2>
      <p>Tabel Data Contact Website SiCepat</p>
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

            <th>Hapus</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; foreach ($datacontact as $d ) {?>
          <tr>
       
            <form action="">
              <td><?php echo $no++ ?></td>
              <td><?php echo $d->namacontact ?></td>
            <td><?php echo $d->emailcontact  ?></td>
            <td><?php echo $d->notlpcontact ?></td>
            <td><?php echo $d->noresicontact ?></td> 
            <td><?php echo $d->pesancontact ?></td>
            <td><a type="button" class="btn btn-danger"  href="<?= base_url('index.php/admin/hapuscontact/' .$d->idcontact)?>" onClick="return confirm('Apakah Anda Yakin Hapus?')" ><i class="fas fa-user-times"></i></a></td>
            </form>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

</body>
  <script type="text/javascript">
    $(document).ready( function () {
        $('#table').DataTable();
    } );
  </script>
</html>
