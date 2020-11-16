<div class="box box-info">
	<div class="box-header with-border"></div>

<form action="<?php echo site_url('Welcome/AddDataKelas'); ?>" method="post">
	<form class="form-horizontal">
		<div class="box-body">
		</div>
		<!--<div class="form-group">
			<label class="col-sm-2 control-label">ID Kelas</label>
			<div class="col-sm-10">
			<input type="text" class="form-control" name="id_kelas">
			</div>
		</div><br>-->

		<div class="form-group">
			<label class="col-sm-2 control-label">Kelas</label>
			<div class="col-sm-10">
			<input type="text" class="form-control" name="kelas">
			</div>
		</div><br>

		<div class="form-group">
			<label class="col-sm-2 control-label">Jurusan</label>
			<div class="col-sm-10">
			<input type="text" class="form-control" name="jurusan">
			</div>
			<input type="submit" class="btn btn-info" name="simpan" value="Simpan">
		</div>
	</form>
</form>
</div>