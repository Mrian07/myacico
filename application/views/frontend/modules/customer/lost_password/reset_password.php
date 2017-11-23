<div class="container">
	<div class='my-bg-title'>
			<div class="row">
			  <div class="col-sm-12">

				<i class="fa fa-angle-right" aria-hidden="true"></i> RESET PASSWORD

			  </div>
			</div>
		</div>

	<div class="row">
		<div class="col-sm-3">
 <input type="hidden" id="surel" name="surel" value="<?php echo $_SERVER['QUERY_STRING'];?>" />
		</div>
	  <div class="col-sm-6">
              <p>Silahkan masukkan password baru Anda.</p>
		<div class='border-create' style='text-align:left'>
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
			<div class="col-sm-12">
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

$(document).ready(function() {
		var baseApiUrl = '<?php echo $baseApiUrl2; ?>';
    var data = {};
    var url =$('#surel').val();
    var res = url.split("key=");

                   // var kunci =
console.log('sam',res[1]);
	$('form').submit(function(e){

	    e.preventDefault();

		var password = $("#password").val();
		var password2 = $("#password2").val();
                var key = $('#surel').val();
		if(password.length < 7){
			$.alert({
				title: 'Alert!',
				content: 'Password minimal 7 karakter!',
			});
		}
		else if(password != password2){
			$.alert({
				title: 'Alert!',
				content: 'Password konfirmasi tidak sama!',
			});
		}
		else{

		    var apiurl = baseApiUrl + '/forgotpassword/reset';

		    //var data = $(this).serialize();
                    data.key = res[1];
                    data.password = password;
		    // success handling
		    var success = function(r){
		      console.log('OK:', r);
		      alert(r.message);
                      if(r.status === '1'){
                            window.location.replace(base_url+"customer/signIn");

                }
		    };

//		    $.post( apiurl, data, success, "json" );
		    //$.ajax({ type:"GET", dataType: "json", url: apiurl, success: success, error: error });
$.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify(data), dataType: "json", url: apiurl, success: success, timeout: 30000 });
		}

	});

});
</script>
