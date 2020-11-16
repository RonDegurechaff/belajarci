<div class="box box-info">
	<div class="box-header with-border"></div>

<form action="<?php echo site_url('Welcome/AddDataPembayaran'); ?>" method="post">
	<form class="form-horizontal">
		<div class="box-body">
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">ID Pembayaran</label>
			<div class="col-sm-10">
			<input type="hidden" class="form-control" name="id_pembayaran">
			</div>
		</div><br>

		<div class="form-group">
			<label class="col-sm-2 control-label">Nominal</label>
			<div class="col-sm-10">
	<!--		<input type="text" class="form-control" name="id_spp"> -->
			<select name="id_spp" class="form-control"> 
					<?php
					  if(!empty($id_spp))
					    {
					      foreach($id_spp as $ReadDPembayaran)
					      {
					?>
					       <option value="<?php echo $ReadDPembayaran->id_spp; ?>"><?php echo $ReadDPembayaran->nominal; ?></option>
					<?php }} ?>
				]</select>
			</div>
		</div><br>

		<div class="form-group">
			<label class="col-sm-2 control-label">Nama Petugas</label>
			<div class="col-sm-10">
	<!--		<input type="text" class="form-control" name="id_petugas"> -->
			<select name="id_petugas" class="form-control"> 
					<?php
					  if(!empty($id_petugas))
					    {
					      foreach($id_petugas as $ReadDPembayaran)
					      {
					?>
					       <option value="<?php echo $ReadDPembayaran->id_petugas; ?>"><?php echo $ReadDPembayaran->nama_petugas; ?></option>
					<?php }} ?>
				]</select>
			</div>
			</div>

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