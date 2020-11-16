<table class="table table-striped">
	<thead>
		<tr>
			<td scope="col">
				<a href="<?php echo site_url('Welcome/VFormAddSpp'); ?>" class="btn btn-primary">Add</a>
			</td>
		</tr>
		<tr>
			<th scope="col">ID SPP</th>
			<th scope="col">Nominal</th>
			<th scope="col">Tanggal</th>
			<th scope="col"></th>
		</tr>
	</thead>
	<?php
	if(!empty($DataSpp))
	{
		foreach($DataSpp as $ReadDSpp)
		{
	?>

	<tr>
		<td><?php echo $ReadDSpp->id_spp; ?></td>
		<td><?php echo $ReadDSpp->nominal; ?></td>
		<td><?php echo $ReadDSpp->tanggal; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataSpp/'.$ReadDSpp->id_spp.'/view') ?>" class="btn btn-primary">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataSpp/'.$ReadDSpp->id_spp) ?>" class="btn btn-danger"> Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>
