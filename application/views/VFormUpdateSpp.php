<div class="box box-info">
	<div class="box-header with-border"></div>

<form action="<?php echo site_url('Welcome/UpdateDataSpp'); ?>" method="post">
	<form class="form-horizontal">
		<div class="box-body">
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">ID SPP</label>
			<div class="col-sm-10">
				<input type="hidden" name="id_spp" class="form-control" value="<?php echo $detail['id_spp']; ?>">
			</div>
		</div><br>
		<div class="form-group">
			<label class="col-sm-2 control-label">Nominal</label>
			<div class="col-sm-10">
				<input type="text" name="nominal" class="form-control" value="<?php echo $detail['nominal']; ?>">
			</div>
		</div><br>

		<div class="form-group">
			<label class="col-sm-2 control-label">Tanggal</label>
			<div class="col-sm-10">
				<input type="date" name="tanggal" class="form-control" value="<?php echo $detail['tanggal']; ?>">
			</div>
			<input type="submit" class="btn btn-info" name="simpan" value="Simpan">
		</div>
	</form>
</form>
</div>