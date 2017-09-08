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
		<div class="col-sm-8">
    <div class="login_wrapper">
      <div class="form login_form">
        <section class="login_content">
          <form name="loginFm" method="post">
            <div class="form-group">
              <label>Nama Depan*</label>
              <input type="text" name="fname" class="form-control" placeholder="" required="" />
            </div>
            <div class="form-group">
              <label>Nama Belakang*</label>
              <input type="text" name="lname" class="form-control" placeholder="" required="" />
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" class="form-control" placeholder="" required="" />
            </div>
            <div class="form-group">
              <a href="#" id="pwd_btm"><i>Ubah Kata Sandi</i></a>
            </div>
              <div id="pwd_box">
            <h5>Ubah Kata Sandi</h5>
			<hr>
            <div class="form-group">
              <label>Kata Sandi Saat Ini*</label>
              <input type="password" name="password" class="form-control" placeholder="" required="" />
            </div>
            <div class="form-group">
              <label>Kata Sandi Baru*</label>
              <input type="password" name="password" class="form-control" placeholder="" required="" />
            </div>
            <div class="form-group">
              <label>Konfirmasi Kata Sandi Baru*</label>
              <input type="password" id="password2" class="form-control" placeholder="" required="" />
            </div>
              </div>
            <div class="clearfix"></div>
            <input type="submit" class="btn btn-primary" value="Simpan">

          </form>
        </section>
      </div>
    </div>
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

    $.post( apiurl, data, success, "json" );
    //$.ajax({ type:"GET", dataType: "json", url: apiurl, success: success, error: error });

  });

});
</script>