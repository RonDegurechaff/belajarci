<div class="box box-info">
	<div class="box-header with-border"></div>

<form action="<?php echo site_url('Welcome/AddDataSiswa'); ?>" method="post">
	<form class="form-horizontal">
		<div class="box-body">
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">NIS</label>
			<div class="col-sm-10">
			<input type="text" class="form-control" name="nis">
			</div>
		</div><br>

		<div class="form-group">
			<label class="col-sm-2 control-label">Nama</label>
			<div class="col-sm-10">
			<input type="text" class="form-control" name="nama">
			</div>
		</div><br>

		<div class="form-group">
			<label class="col-sm-2 control-label">Alamat</label>
			<div class="col-sm-10">
			<input type="text" class="form-control" name="alamat">
			</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">ID Kelas</label>
			<div class="col-sm-10">
			<!--<input type="text" class="form-control" name="id_kelas">-->
				<select name="id_kelas" class="form-control"> 
					<?php
					  if(!empty($id_kelas))
					    {
					      foreach($id_kelas as $ReadDS)
					      {
					?>
					       <option value="<?php echo $ReadDS->id_kelas; ?>"><?php echo $ReadDS->kelas; ?></option>
					<?php }} ?>
				]</select>
			</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">ID SPP</label>
			<div class="col-sm-10">
			<!--<input type="text" class="form-control" name="id_spp">-->
				<select name="id_spp" class="form-control"> 
				<?php
						  if(!empty($id_spp))
						    {
						      foreach($id_spp as $ReadDS)
						      {
						?>
						       <option value="<?php echo $ReadDS->id_spp; ?>"><?php echo $ReadDS->nominal; ?></option>
						<?php }} ?>
				]</select>
			</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">ID Petugas</label>
			<div class="col-sm-10">
			<!--<input type="text" class="form-control" name="id_petugas">-->
			<select name="id_petugas" class="form-control"> 
				<?php
						  if(!empty($id_petugas))
						    {
						      foreach($id_petugas as $ReadDS)
						      {
						?>
						       <option value="<?php echo $ReadDS->id_petugas; ?>"><?php echo $ReadDS->nama_petugas; ?></option>
						<?php }} ?>
				]</select>
			</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Tanggal Pembayaran</label>
			<div class="col-sm-10">
		<!--	<input type="text" class="form-control" name="id_pembayaran"> -->
			<select name="id_pembayaran" class="form-control"> 
				<?php
						  if(!empty($id_pembayaran))
						    {
						      foreach($id_pembayaran as $ReadDS)
						      {
						?>
						       <option value="<?php echo $ReadDS->id_pembayaran; ?>"><?php echo $ReadDS->id_pembayaran; ?></option>
						<?php }} ?>
				]</select> 
			</div>
		</div><br> 
			<input type="submit" class="btn btn-info" name="simpan" value="Simpan">
		</div>
	</form>
</form>
</div>