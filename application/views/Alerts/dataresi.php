<div class="container">
	<table class="+"table table-bordered"+">
		<thead>
			<tr>
				<th class="text-center">No Resi</th>
				<th class="text-center">Layanan</th>
                <th class="text-center">Asal</th>
                <th class="text-center">Tujuan</th>
                <th class="text-center">Nama Pengirim</th>
                <th class="text-center">Tanggal Pengiriman</th>
                <th class="text-center">Nama Penerima</th>
                <th class="text-center">Tanggal Penerima</th>
                <th class="text-center">Status</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($dataresi as $c ) {?>
			<tr>          
				<td class="hidden-xs">
				    <?php echo $c->noresi;?>
				</td>
				<td class="hidden-xs">
				    <?php echo $c->idlayanan;?>
				</td>
				<td class="hidden-xs">
				    <?php echo $c->asal;?>
                </td>
                <td class="hidden-xs">
				    <?php echo $c->tujuan;?>
                </td>
                <td class="hidden-xs">
				    <?php echo $c->tglpengiriman;?>
                </td>
                <td class="hidden-xs">
				    <?php echo $c->namapenerima;?>
                </td>
                <td class="hidden-xs">
				    <?php echo $c->tglpenrima;?>
                </td>
                <td class="hidden-xs">
				    <?php echo $c->status;?>
                </td>
			</tr>
            <?php } ?>
		</tbody>
	</table>
</div>
