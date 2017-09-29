<div class="container">
	<div class="row">
	  <div class="col-sm-12">
		<div class="my-border-title">
			<h3 class='my-title-page'><i class="fa fa-dot-circle-o" aria-hidden="true"></i> INFORMASI AKUN</h3>
		</div>
	  </div>
	</div> 
	
	<div class="row">
		<div class="col-sm-3">
			<?php $this->load->view('frontend/modules/account/sidebar_menu'); ?>
		</div>
		<div class="col-sm-9">

			<section class="login_content">
			  <form name="loginFm" method="post">
				<div class="form-group">
				  <label>Kata Sandi Saat Ini*</label>
				  <input type="password" name="old_password" class="form-control mandatory"/>
				</div>
				<div class="form-group">
				  <label>Kata Sandi Baru*</label>
				  <input type="password" name="new_password" class="form-control mandatory"/>
				</div>
				<div class="form-group">
				  <label>Konfirmasi Kata Sandi Baru*</label>
				  <input type="password" id="new_password2" class="form-control mandatory"/>
				</div>

				<div class="clearfix"></div>
				<input type="submit" class="btn btn-primary" value="Simpan">

			  </form>
			</section>
		</div>
	</div>
</div>
<script type="text/javascript">
var baseApiUrl = '<?php echo $baseApiUrl; ?>';

$(document).ready(function() {
  $('#pwd_box').hide();
  $('#pwd_btm').click(function(e){
    e.preventDefault();
    $('#pwd_box').slideToggle();
  });

  $('form').submit(function(e){
    e.preventDefault();

    var apiurl = baseApiUrl + '/myaccount';
    var data = $(this).serialize();

    // success handling
    var success = function(r){
      console.log('OK:', r);
      alert(r.message);
    };

    var form_ok = true;
    $('.mandatory').each(function(){
      if($(this).val()=='' && $(this).is(":visible")){
        $.alert({title:'Alert', content: $(this).prev().text().slice(0,-1)+ ' is required!'});
        // onContentReady: function(){$(this).focus();}
        form_ok = false;
        return false;
      }
    });

    if(form_ok) $.post( apiurl, data, success, "json" );
    //$.ajax({ type:"GET", dataType: "json", url: apiurl, success: success, error: error });

  });

});
</script>
