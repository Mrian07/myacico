
<div class="container">
	<div class='my-bg-title'>
			<div class="row">
			  <div class="col-sm-12">

				<i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo$lang_password_tittle;?>

			  </div>
			</div>
		</div>

	<div class="row">
		<div class="col-sm-3">

		</div>
	  <div class="col-sm-6">

			<p><?php echo$lang_password_text;?></p>

			<?php
			$lang = get_cookie('lang');
			if($lang=='en'){
                            $msg_error='Connection Failed, Please try again!';
                            ?>
				<div class="alert alert-success alert-dismissible animated bounceInDown" id="alert" style='display:none;'>
				<span class="glyphicon glyphicon-ok"></span> Please cek your email account for next proses.</div>

				<div class="alert alert-success alert-dismissible animated bounceInDown" id="alertFailed" style='display:none;'>
				<span class="glyphicon glyphicon-ok"></span> Sorry, your email no registering yet.</div>
			<?php }else{
                                $msg_error='koneksi tidak berhasil, silahkan coba lagi!';
                            ?>
				<div class="alert alert-success alert-dismissible animated bounceInDown" id="alert" style='display:none;'>
				<span class="glyphicon glyphicon-ok"></span> Silakan cek email Anda untuk proses selanjutnya.</div>

				<div class="alert alert-success alert-dismissible animated bounceInDown" id="alertFailed" style='display:none;'>
				<span class="glyphicon glyphicon-ok"></span> Maaf, email Anda belum terdaftar.</div>
			<?php } ?>

		<div class='border-create' style='text-align:left'>
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
	  <div class="col-sm-3">

		</div>
	</div>
</div>
<script type="text/javascript">

var error = function(er){
  $('#spinner_img').hide();
  $('#submit_btn').val('Kirim').removeClass('disabled');
  console.log('OK:', er);
  $.alert({
    title: 'Alert!',
    content: '<?php echo$msg_error;?>',
  });
};

$(document).ready(function() {
	var baseApiUrl = '<?php echo $baseApiUrl2; ?>';

	$('form').submit(function(e){
		var email = $("#email").val();

		if(email==''){
			$.alert({
				title: 'Alert!',
				content: '<?php echo$lang_password_msg1;?>',
			});
		}else{

			$('#spinner_img').show();
			$('#submit_btn').val('Loading...').addClass('disabled');
			e.preventDefault();

			var apiurl = baseApiUrl + '/forgotpassword';
			var data = $(this).serialize();

			// success handling
			var success = function(r){
				$('#spinner_img').hide();
				$('#submit_btn').val('Kirim').removeClass('disabled');
				console.log('OK:', r);
				//alert(r.message);

      //                           if(r.status === '0'){
      //                               $.alert({
			// 	title: 'Alert!',
			// 	content: '<?php// echo$lang_password_msg2;?>',
			// });
      //                           }
      //                           else{
      //                            $.alert({
			// 	title: 'Alert!',
			// 	content: '<?php// echo$lang_password_msg3;?>',
			// });
      //                           }

				if(r.status=='1'){
					$('#alert').show('slow').delay(5000).hide('slow');
				}else{
					$('#alertFailed').show('slow').delay(5000).hide('slow');
				}


			};

			//$.post( apiurl, data, success, "json" );
			$.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify({ "email":email }) , url: apiurl, success: success, error: error });

		}
	});

});
</script>
