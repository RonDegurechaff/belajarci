<table class="table table-striped">
	<thead>
		<tr>
			<td scope="col">
				<a href="<?php echo site_url('Welcome/VFormAddPembayaran'); ?>" class="btn btn-primary">Add</a>
			</td>
		</tr>
		<tr>
			<th scope="col">ID Pembayaran</th>
			<th scope="col">Nominal</th>
			<th scope="col">Nama Petugas</th>
			<th scope="col">Tanggal</th>
			<th scope="col"></th>
		</tr>
	</thead>
	<?php
	if(!empty($DataPembayaran))
	{
		foreach($DataPembayaran as $ReadDPembayaran)
		{
	?>

	<tr>
		<td><?php echo $ReadDPembayaran->id_pembayaran; ?></td>
		<td><?php echo $ReadDPembayaran->nominal; ?></td>
		<td><?php echo $ReadDPembayaran->nama_petugas; ?></td>
		<td><?php echo $ReadDPembayaran->tanggal; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/VFormUpdatePembayaran/'.$ReadDPembayaran->id_pembayaran.'/view') ?>" class="btn btn-primary">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataPembayaran/'.$ReadDPembayaran->id_pembayaran) ?>" class="btn btn-danger"> Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>
