<div class='my-bg-title'>
	<div class="container">
		<div class="row">
		  <div class="col-sm-12">

			<i class="fa fa-angle-right" aria-hidden="true"></i> Upload Berhasil

		  </div>
		</div>
	</div>
</div>
<div class="container">
	

	<div class="row">
		<div class="col-sm-3">
 <input type="hidden" id="surel" name="surel" value="<?php echo $_SERVER['QUERY_STRING'];?>" />
		</div>
	  <div class="col-sm-6">
              <p>Silahkan masukkan password baru Anda.</p>
		<div class='border-create'>
		 <form name="signup" method="post">
		  <div class="form-group">
			<label>Password Baru:</label>
			<input type="password" id="password" name="new_password" class="form-control" />
		  </div>
		  <div class="form-group">
			<label>Ulangi Password Baru:</label>
			<input type="password" id="password2" class="form-control" />
		  </div>
		  <div class="row">
			<div class="col-sm-6">
				<input type="submit" id="submit_btn" class="btn btn-primary" value="Kirim">
				<img src="<?php echo base_url('images/general/Spinner.gif');?>" id="spinner_img" style="display:none">
			</div>
		  </div>	
		</form>
		</div>
	  </div>
	  <div class="col-sm-3">

		</div>
	</div>
</div>