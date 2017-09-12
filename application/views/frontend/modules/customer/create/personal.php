<div class="container">
	<div class="row">
	  <div class="col-sm-12">
		<div class="my-border-title">
			<h3 class='my-title-page'><i class="fa fa-dot-circle-o" aria-hidden="true"></i> DAFTAR AKUN PRIBADI</h3>
		</div>
	  </div>
	</div>

	<div class="row">
		<div class="col-sm-3">

		</div>
	  <div class="col-sm-6">
		<div class='border-create'>
		 <form name="signup" method="post">
		  <div class="form-group">
			<label>Nama:</label>
			<input type="text" id="nama" name="name" class="form-control" placeholder="" />
		  </div>
		  <div class="form-group">
			<label>Email:</label>
			<input type="email" id="email" name="email" class="form-control" placeholder="" />
		  </div>
		  <div class="form-group">
			<label>Password:</label>
			<input type="password" id="password" name="password" class="form-control" placeholder=""  />
		  </div>
		  <div class="form-group">
			<label>Ulangi Password:</label>
			<input type="password" id="password2" class="form-control" placeholder="" />
		  </div>
		  <input type="submit" id="submit_btn" class="btn btn-primary" value="Kirim">
          <img src="<?php echo base_url('images/general/Spinner.gif');?>" id="spinner_img" style="display:none">
		  Sudah mendaftar ? <?php echo anchor('customer/signIn', 'Log In'); ?>
		</form>
		</div>
	  </div>
	  <div class="col-sm-3">

		</div>
	</div>

</div>
<script type="text/javascript">
var baseApiUrl = '<?php echo $baseApiUrl; ?>';
var apiurl = baseApiUrl + '/aduser/add';
var success = function(r){
	console.log('OK:', r);
	$('#spinner_img').hide();
	$('#submit_btn').val('Kirim').removeClass('disabled');
	$.alert({
		title: 'Alert!',
		content: r.message
	});
	if(r.status == 1) location.href = '<?php echo base_url('customer/successCreate/'); ?>'+$("#email").val();
};

$(document).ready(function() {
	$("form").submit(function(e){
	    e.preventDefault();
		var apiurl = baseApiUrl + '/aduser/add';
		var data = $(this).serialize();
		var email = $("#email").val();
		var nama = $("#nama").val();
		var password = $("#password").val();
		var password2 = $("#password2").val();

		if(nama==''){
			$.alert({
				title: 'Alert!',
				content: 'nama tidak boleh kosong!',
			});
		}else
		if(email==''){
			$.alert({
				title: 'Alert!',
				content: 'email tidak boleh kosong!',
			});
		}else
		if(password.length < 7){
			$.alert({
				title: 'Alert!',
				content: 'password minimal 7 karakter!',
			});
		}else
		if(password != password2){
			$.alert({
				title: 'Alert!',
				content: 'Password tidak sama!',
			});
		}else{
			$('#spinner_img').show();
			$('#submit_btn').val('loading...').addClass('disabled');
			$.post( apiurl, data, success, "json" );
		}

	});
});
</script>
