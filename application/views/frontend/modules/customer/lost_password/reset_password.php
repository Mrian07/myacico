<div class="container">
	<div class='my-bg-title'>
			<div class="row">
			  <div class="col-sm-12">

				<i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo "Reset password";?>

			  </div>
			</div>
		</div>

	<div class="row">
		<div class="col-sm-3">
 <input type="hidden" id="surel" name="surel" value="<?php echo $_SERVER['QUERY_STRING'];?>" />
		</div>
	  <div class="col-sm-6">
              <p><?php echo $lang_reset_password_txt;?></p>
		<div class='border-create' style='text-align:left'>
		 <form name="signup" method="post">
		  <div class="form-group">
			<label><?php echo $lang_reset_password_form1;?></label>
			<input type="password" id="password" name="new_password" class="form-control" />
		  </div>
		  <div class="form-group">
			<label><?php echo $lang_reset_password_form2;?></label>
			<input type="password" id="password2" class="form-control" />
		  </div>
		  <div class="row">
			<div class="col-sm-12">
				<input type="submit" id="submit_btn" class="btn btn-primary" value="<?php echo $lang_password_button;?>">
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
    var res = "<?php echo $_GET['key'];?>";

                   // var kunci =
console.log(res);
	$('form').submit(function(e){

	    e.preventDefault();

		var password = $("#password").val();
		var password2 = $("#password2").val();
                var key = $('#surel').val();
		if(password.length < 7){
			$.alert({
				title: 'Alert!',
				content: '<?php echo $lang_reset_password_msg1;?>',
			});
		}
		else if(password != password2){
			$.alert({
				title: 'Alert!',
				content: '<?php echo $lang_reset_password_msg2;?>',
			});
		}
		else{

		    var apiurl = baseApiUrl + '/forgotpassword/reset';

		    //var data = $(this).serialize();
				data.key = res;
				data.password = password;
				console.log(data.key);
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
