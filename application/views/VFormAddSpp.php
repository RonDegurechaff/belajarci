<div class="box box-info">
	<div class="box-header with-border"></div>

<form action="<?php echo site_url('Welcome/AddDataSpp'); ?>" method="post">
	<form class="form-horizontal">
		<div class="box-body">
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">Nominal</label>
			<div class="col-sm-10">
			<input type="text" class="form-control" name="nominal">
			</div>
		</div><br>

		<div class="form-group">
			<label class="col-sm-2 control-label">Tanggal</label>
			<div class="col-sm-10">
			<input type="date" class="form-control" name="tanggal">
			</div>
			<input type="submit" class="btn btn-info" name="simpan" value="Simpan">
		</div>
	</form>
</form>
</div>