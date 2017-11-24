
<div class="container">
    <div class="row">
	  <div class="col-sm-12"><br>

			<?php if($hasil['status']=='0'){?>
				<div class='border-create'>
				<h4>Aktivasi account anda berhasil. </h4><h5><?php echo anchor('customer/signIn','click disini untuk login.'); ?></h5>
				</div>
			<?php }else{ ?>
				<h6>Maaf aktivasi account Anda gagal, silakan lakukan aktifasi ulang dengan memasukan email Anda pada form dibawah ini.</h6>
				<div class="panel-group">
				  <div class="panel panel-default">
				    <div class="panel-body">

							<form name="signup" method="post">
				 		  <div class="form-group">
				 			<label>Email:</label>
				 			<input type="email" id="email" name="email" class="form-control"/>
				 		  </div>
				      <input type="submit" id="submit_btn" class="btn btn-primary" value="<?php echo$lang_password_button;?>">
				 			<img src="<?php echo base_url('images/general/Spinner.gif');?>" id="spinner_img" style="display:none">
				 		</form>
						</div>
				  </div>
				</div>
			<?php } ?>

	  </div>
	</div>
</div>
