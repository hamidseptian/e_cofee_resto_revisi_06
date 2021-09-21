<div class="well">

	<form class="form-horizontal" action="form/register/simpan_pelanggan.php" method="post">
		<h4>Daftar Pelanggan</h4>
		<div class="control-group">
			<label class="control-label" for="inputFname1">Nama <sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="nama" class="form-control" required style="width:500px">
			</div>
		 </div>
		<div class="control-group">
			<label class="control-label" for="inputFname1">Tanggal Lahir <sup>*</sup></label>
			<div class="controls">
			  <input type="date" name="tgll" class="form-control" required style="width:500px">
			</div>
		 </div>
	
	
		<div class="control-group">
			<label class="control-label" for="inputFname1">Alamat <sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="alamat" class="form-control" required style="width:500px">
			</div>
		 </div>


		<div class="control-group">
		<label class="control-label">Domisili <sup>*</sup> </label>
		<div class="controls">
		<select class="form-control" required style="width:500px" name="domisili">
			<?php 
				  $kec=mysqli_query($conn, "SELECT * from kecamatan")or die("salah");
				  while ($d_kec=mysqli_fetch_array($kec)) { ?>
                  		<option value="<?php echo $d_kec['id_kecamatan'] ?>"><?php echo $d_kec['nama_kecamatan'] ?></option>
                  	<?php } ?>
		</select>
		</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputFname1">No HP <sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="nohp" class="form-control" required style="width:500px">
			</div>
		 </div>
	
		<div class="control-group">
			<label class="control-label" for="inputFname1">Username <sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="username" class="form-control" required style="width:500px">
			</div>
		 </div>
	
	
		<div class="control-group">
			<label class="control-label" for="inputFname1">Password <sup>*</sup></label>
			<div class="controls">
			  <input type="password" name="password" class="form-control" required style="width:500px">
			</div>
		 </div>
	
	
		
		
	
	<div class="control-group">
			<div class="controls">
				<input type="hidden" name="email_create" value="1">
				<input type="hidden" name="is_new_customer" value="1">
				<input class="btn btn-sm btn-success" type="submit" value="Register">
			</div>
		</div>		
	</form>
</div>