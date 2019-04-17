"<div class="+"container"+">"+
	"<table class="+"table table-bordered"+">"+
		"<thead>"+
			"<tr>"+
				"<th class="+"text-center"+">Service</th>"+
				"<th class="+"text-center"+">Tarif</th>"+
				"<th class="+"text-center hidden-xs"+">Estimasi</th>"+
			"</tr>"+
		"</thead>"+
		"<tbody>"+
		"<?php foreach ($datapengiriman as $c ) {?>"+
			"<tr>"+                
				"<td class="+"hidden-xs"+">"+
				"<?php echo $c->layanan;  ?>"+
				"</td>"+
				"<td class="+"hidden-xs"+">"+
				"<?php echo $c->tarif;  ?>"+
				"</td>"+
				"<td class="+"hidden-xs"+">"+
				"<?php echo $c->estimasi;  ?>"+
				"</td>"+
			"</tr>"+
            "<?php } ?>"+
		"</tbody>"+
	"</table>"+
"</div>"