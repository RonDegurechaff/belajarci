<table class="table table-striped">
	<thead>
		<tr>
			<td scope="col">
				<a href="<?php echo site_url('Welcome/VFormAddKelas'); ?>" class="btn btn-primary">Add</a>
			</td>
		</tr>
		<tr>
			<th scope="col">ID Kelas</th>
			<th scope="col">Kelas</th>
			<th scope="col">Jurusan</th>
			<th scope="col"></th>
		</tr>
	</thead>
	<?php
	if(!empty($DataKelas))
	{
		foreach($DataKelas as $ReadDK)
		{
	?>

	<tr>
		<td><?php echo $ReadDK->id_kelas; ?></td>
		<td><?php echo $ReadDK->kelas; ?></td>
		<td><?php echo $ReadDK->jurusan; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataKelas/'.$ReadDK->id_kelas.'/view') ?>" class="btn btn-primary">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataKelas/'.$ReadDK->id_kelas) ?>" class="btn btn-danger"> Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>
