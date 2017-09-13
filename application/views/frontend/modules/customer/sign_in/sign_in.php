<div class="container">
	<div class="row">
	  <div class="col-sm-12">
		<div class="my-border-title">
			<h3 class='my-title-page'><i class="fa fa-dot-circle-o" aria-hidden="true"></i> LOGIN AKUN</h3>
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
            <label>Email:</label>
            <input type="email" id="email" name="email" class="form-control"  />
		      </div>
		      <div class="form-group">
      			<label>Password:</label>
      			<input type="password" id="password" name="password" class="form-control" />
    		  </div>
    		  <input type="submit" id="submit_btn" class="btn btn-primary" value="Kirim">
          <img src="<?php echo base_url('images/general/Spinner.gif');?>" id="spinner_img" style="display:none">
    			<div class="clearfix"></div>
          <div class="separator">
            <p class="change_link">Lupa password ?
      				<?php echo anchor('customer/lostPassword/', 'Click disini');?>
            </p>
            <div class="clearfix"></div>
            <br />
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
var success = function(r){
  $('#spinner_img').hide();
  $('#submit_btn').val('Kirim').removeClass('disabled');
  console.log('OK:', r);
  if(!r.token) return $.alert({
    title: 'Alert!',
    content: r.message
  });
  document.cookie='x-auth='+r.token+'; path=/';
  //$.alert(r.message);
  //$.post( '<?php echo base_url('account/SuccsessSignin/'); ?>', data, success, "json" );
  location.href = '<?php echo base_url('account'); ?>';
};
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

  $('form').submit(function(e){
    e.preventDefault();
		var email = $("#email").val();
		var password = $("#password").val();
    var apiurl = baseApiUrl + '/aduser/login';
    var data = $(this).serialize();

		if(email==''){
			$.alert({
				title: 'Alert!',
				content: 'email tidak boleh kosong!',
			});
      return false;
		}
		if(password==''){
			$.alert({
				title: 'Alert!',
				content: 'password tidak boleh kosong!',
			});
      return false;
		};

    $('#spinner_img').show();
    $('#submit_btn').val('loading...').addClass('disabled');
    //$.post( apiurl, data, success, "json" );
    $.ajax({ type:"POST", data:data, dataType: "json", url: apiurl, success: success, error: error, timeout: 30000 });

  });

});
</script>
