<div class="box box-info">
	<div class="box-header with-border"></div>

<form action="<?php echo site_url('Welcome/UpdateDataPetugas'); ?>" method="post">
	<form class="form-horizontal">
		<div class="box-body">
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">ID Petugas</label>
			<div class="col-sm-10">
				<input type="hidden" name="id_petugas" class="form-control" value="<?php echo $detail['id_petugas']; ?>">
			</div>
		</div><br>
		<div class="form-group">
			<label class="col-sm-2 control-label">Nama Petugas</label>
			<div class="col-sm-10">
				<input type="text" name="nama_petugas" class="form-control" value="<?php echo $detail['nama_petugas']; ?>">
			</div>
		</div><br>

		<div class="form-group">
			<label class="col-sm-2 control-label">No. Telp</label>
			<div class="col-sm-10">
				<input type="text" name="no_telp" class="form-control" value="<?php echo $detail['no_telp']; ?>">
			</div>
			<input type="submit" class="btn btn-info" name="simpan" value="Simpan">
		</div>
	</form>
</form>
</div>