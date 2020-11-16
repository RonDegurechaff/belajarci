<table class="table table-striped">
	<thead>
		<tr>
			<td scope="col">
				<a href="<?php echo site_url('Welcome/VFormAddSiswa'); ?>" class="btn btn-primary">Add</a>
			</td>
		</tr>
		<tr>
			<th scope="col">NIS</th>
			<th scope="col">Nama</th>
			<th scope="col">Alamat</th>
			<th scope="col">Kelas</th>
			<th scope="col">Nominal SPP</th>
			<th scope="col">Nama Petugas</th>
			<th scope="col">Tanggal Pembayaran</th>
			<th scope="col"></th>
		</tr>
	</thead>
	<?php

	
	if(!empty($DataSiswa))
	{
		foreach($DataSiswa as $ReadDS)
		{
	?>

	<tr>
		<td><?php echo $ReadDS->nis; ?></td>
		<td><?php echo $ReadDS->nama; ?></td>
		<td><?php echo $ReadDS->alamat; ?></td>
		<td><?php echo $ReadDS->kelas; ?></td>
		<td><?php echo $ReadDS->nominal; ?></td>
		<td><?php echo $ReadDS->nama_petugas; ?></td>
		<td><?php echo $ReadDS->tanggal; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/VFormUpdateSiswa/'.$ReadDS->nis.'/view') ?>" class="btn btn-primary">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataSiswa/'.$ReadDS->nis) ?>" class="btn btn-danger"> Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>
