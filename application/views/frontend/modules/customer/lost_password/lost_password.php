
<div class="container">
	<div class='my-bg-title'>
			<div class="row">
			  <div class="col-sm-12">

				<i class="fa fa-angle-right" aria-hidden="true"></i> LUPA PASSWORD

			  </div>
			</div>
		</div>

	<div class="row">
		<div class="col-sm-3">

		</div>
	  <div class="col-sm-6">
			<p>Masukkan alamat email Anda di bawah ini. Anda akan menerima link untuk mereset password Anda.</p>
		<div class='border-create' style='text-align:left'>
		 <form name="signup" method="post">
		  <div class="form-group">
			<label>Email:</label>
			<input type="email" id="email" name="email" class="form-control"/>
		  </div>
		  <input type="submit" id="submit_btn" class="btn btn-primary" value="Kirim">
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
    content: 'koneksi tidak berhasil, silahkan coba lagi!',
  });
};

$(document).ready(function() {
	var baseApiUrl = '<?php echo $baseApiUrl2; ?>';

	$('form').submit(function(e){
		var email = $("#email").val();

		if(email==''){
			$.alert({
				title: 'Alert!',
				content: 'Email tidak boleh kosong!',
			});
		}else{

			$('#spinner_img').show();
			$('#submit_btn').val('loading...').addClass('disabled');
			e.preventDefault();

			var apiurl = baseApiUrl + '/forgotpassword';
			var data = $(this).serialize();

			// success handling
			var success = function(r){
				$('#spinner_img').hide();
				$('#submit_btn').val('Kirim').removeClass('disabled');
				console.log('OK:', r);
				alert(r.message);
			};

			//$.post( apiurl, data, success, "json" );
			$.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify({ "email":email }) , url: apiurl, success: success, error: error });

		}
	});

});
</script>
