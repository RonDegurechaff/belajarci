<table class="table table-striped">
	<thead>
		<tr>
			<td scope="col">
				<a href="<?php echo site_url('Welcome/VFormAddPetugas'); ?>" class="btn btn-primary">Add</a>
			</td>
		</tr>
		<tr>
			<th scope="col">ID Petugas</th>
			<th scope="col">Nama</th>
			<th scope="col">No. Telp</th>
			<th scope="col"></th>
		</tr>
	</thead>
	<?php
	if(!empty($DataPetugas))
	{
		foreach($DataPetugas as $ReadDP)
		{
	?>

	<tr>
		<td><?php echo $ReadDP->id_petugas; ?></td>
		<td><?php echo $ReadDP->nama_petugas; ?></td>
		<td><?php echo $ReadDP->no_telp; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataPetugas/'.$ReadDP->id_petugas.'/view') ?>" class="btn btn-primary">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataPetugas/'.$ReadDP->id_petugas) ?>" class="btn btn-danger"> Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>
