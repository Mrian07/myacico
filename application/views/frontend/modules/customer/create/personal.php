<div class="container">
	<div class="row">
	  <div class="col-sm-12 my-border-title">
		<h3 class='my-title-page'><i class="fa fa-dot-circle-o" aria-hidden="true"></i> DAFTAR AKUN PRIBADI</h3>
	  </div>
	</div> 
	
	<div class="row">
		<div class="col-sm-3">
		
		</div>
	  <div class="col-sm-6">
		 <form name="signup" method="post">
		  <div class="form-group">
			<label>Nama:</label>
			<input type="text" name="name" class="form-control" placeholder="Nama" required="" />
		  </div>
		  <div class="form-group">
			<label>Email:</label>
			<input type="email" name="email" class="form-control" placeholder="Email" required="" />
		  </div>
		  <div class="form-group">
			<label>Password:</label>
			<input type="password" name="password" class="form-control" placeholder="Kata Sandi" required="" />
		  </div>
		  <div class="form-group">
			<label>Ulangi Password:</label>
			<input type="password" id="password2" class="form-control" placeholder="Ulangi Kata Sandi" required="" />
		  </div>
		  <input type="submit" class="btn btn-primary" value="Kirim">
		  
		  <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                  <input type="text" id="apiurl" class="form-control" placeholder="api url here" />
                </p>

                <div class="clearfix"></div>
                <br />

              </div>
		</form> 
	  </div>
	  <div class="col-sm-3">
		
		</div>
	</div>  
	
	<!--
    <div>

      <div class="login_wrapper">

        <div id="register" class="form">
          <section class="login_content">
            <form name="signup" method="post">
              <h1>Create Account</h1>
              <div>
                <input type="text" name="name" class="form-control" placeholder="Nama" required="" />
              </div>
              <div>
                <input type="email" name="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Kata Sandi" required="" />
              </div>
              <div>
                <input type="password" id="password2" class="form-control" placeholder="Konfirmasi Kata Sandi" required="" />
              </div>
              <div>
                <input type="submit" class="btn btn-primary" value="Kirim">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                  <input type="text" id="apiurl" class="form-control" placeholder="api url here" />
                </p>

                <div class="clearfix"></div>
                <br />

              </div>
            </form>
          </section>
        </div>
      </div>
    </div>-->
</div>
<script type="text/javascript">
var baseApiUrl = '<?php echo $baseApiUrl; ?>';
//var apiurl = 'http://192.168.1.103:8080/myacico-service/api/aduser/add';

$(document).ready(function() {
  $("form").submit(function(e){

    e.preventDefault();
    var apiurl = baseApiUrl + '/aduser/add';
    var fl=document.signup;
    var data = $(this).serialize();

    // success handling
    var success = function(r){
      alert(r.message);
      console.log('OK:', r.status);
    };

    var cus_url = $('#apiurl').val();

    if(cus_url != '')apiurl = cus_url;

    // do validation
    if(fl.password.value!=$('#password2').val())alert('password not match!!!');

    else{
      $.post( apiurl, data, success, "json" );
      //$.ajax({ type:"GET", dataType: "json", url: apiurl, success: success, error: error });
    }

  });
});
</script>
