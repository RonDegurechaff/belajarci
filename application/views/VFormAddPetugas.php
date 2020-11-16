<div class="box box-info">
	<div class="box-header with-border"></div>

<form action="<?php echo site_url('Welcome/AddDataPetugas'); ?>" method="post">
	<form class="form-horizontal">
		<div class="box-body">
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">Nama Petugas</label>
			<div class="col-sm-10">
			<input type="text" class="form-control" name="nama_petugas">
			</div>
		</div><br>

		<div class="form-group">
			<label class="col-sm-2 control-label">No. Telp</label>
			<div class="col-sm-10">
			<input type="text" class="form-control" name="no_telp">
			</div>
			<input type="submit" class="btn btn-info" name="simpan1" value="Simpan">
		</div>
	</form>
</form>
</div>