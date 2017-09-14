<div class="container">
	<div class="row">
	  <div class="col-sm-12">
		<div class="my-border-title">
			<h3 class='my-title-page'><i class="fa fa-dot-circle-o" aria-hidden="true"></i> RESET PASSWORD</h3>
		</div>
		<p>Silahkan masukkan password baru Anda.</p>
	  </div>
	</div>

	<div class="row">
		<div class="col-sm-3">

		</div>
	  <div class="col-sm-6">
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


<script type="text/javascript">
var baseApiUrl = '<?php echo $baseApiUrl; ?>';


$(document).ready(function() {

	$('form').submit(function(e){

	    e.preventDefault();

		var email = $("#password").val();
		var email2 = $("#password2").val();

		if(email.length < 7){ 
			$.alert({
				title: 'Alert!',
				content: 'Email minimal 7 karakter!',
			});
		}
		else if(email != email2){ 
			$.alert({
				title: 'Alert!',
				content: 'Email konfirmasi tidak sama!',
			});
		}
		else{

		    var apiurl = baseApiUrl + '/aduser/reset';
		    var data = $(this).serialize();

		    // success handling
		    var success = function(r){
		      console.log('OK:', r);
		      alert(r.message);
		    };

		    $.post( apiurl, data, success, "json" );
		    //$.ajax({ type:"GET", dataType: "json", url: apiurl, success: success, error: error });

		}

	});

});
</script>
