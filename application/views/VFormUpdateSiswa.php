<div class="box box-info">
	<div class="box-header with-border"></div>

<form action="<?php echo site_url('Welcome/UpdateDataSiswa'); ?>" method="post">
	<form class="form-horizontal">
		<div class="box-body">
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">NIS</label>
			<div class="col-sm-10">
				<input type="hidden" name="nis" class="form-control" value="<?php echo $detail['nis']; ?>">
			</div>
		</div><br>

		<div class="form-group">
			<label class="col-sm-2 control-label">Nama</label>
			<div class="col-sm-10">
				<input type="text" name="nama" class="form-control" value="<?php echo $detail['nama']; ?>">
			</div>
		</div><br>

		<div class="form-group">
			<label class="col-sm-2 control-label">Alamat</label>
			<div class="col-sm-10">
				<input type="text" name="alamat" class="form-control" value="<?php echo $detail['alamat']; ?>">
			</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Kelas</label>
			<div class="col-sm-10">
		<!--		<input type="text" name="id_kelas" class="form-control" value="<?php echo $detail['id_kelas']; ?>"> -->
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
			<label class="col-sm-2 control-label">Nominal</label>
			<div class="col-sm-10">
			<!--	<input type="text" name="id_spp" class="form-control" value="<?php echo $detail['id_spp'];
				?>"> -->
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
			<label class="col-sm-2 control-label">Nama Petugas</label>
			<div class="col-sm-10">
			<!--	<input type="text" name="id_petugas" class="form-control" value="<?php echo $detail['id_petugas']; ?>"> -->
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
		<!--		<input type="text" name="id_pembayaran" class="form-control" value="<?php echo $detail['id_pembayaran']; ?>"> -->
				<select name="id_pembayaran" class="form-control"> 
				<?php
						  if(!empty($id_pembayaran))
						    {
						      foreach($id_pembayaran as $ReadDS)
						      {
						?>
						       <option value="<?php echo $ReadDS->id_pembayaran; ?>"><?php echo $ReadDS->tanggal; ?></option>
						<?php }} ?>
				]</select>
			</div> 
			<input type="submit" class="btn btn-info" name="simpan" value="Simpan">
		</div>
	</form>
</form>
</div>