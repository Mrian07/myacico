<script>
    function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else {
      // The person is not logged into your app or we are unable to tell.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    }
  }
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '542138116138058',
      xfbml      : true,
      version    : 'v2.10'
    });
    window.FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
   window.FB.getLoginStatus(function(response) {
       console.log('Logged in.',response.status);
  if (response.status === 'connected') {
    console.log('Logged in.');
  }
  else {
    window.FB.login();
  }
});
</script>
<div id="fb-root"></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.10&appId=542138116138058';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!--            G Plus              -->
<script src="https://apis.google.com/js/platform.js" async defer>

function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}

</script>
<meta name="google-signin-client_id" content="879752343646-cunagke2s8vokdao51es112nlhrnults.apps.googleusercontent.com">

<div id="status">
</div>

<div class="container">


	<div class="row" style='margin-top:20px; text-align:left'>
		<div class="col-sm-6">
		<h5>LOGIN</h5>
		<div style='border: 1px #dddddd solid;padding:10px;margin-bottom:40px;height:350px'>
				<p>Masukan email dan password login Anda pada form dibawah ini.</p>
			<form name="myForm" method="post">
				<div class="form-group">
				<label>Email:</label>
				<input type="email" id="email" name="email" class="form-control"  />
				</div>
				<div class="form-group">
				<label>Password:</label>
				<input type="password" id="password" name="password" class="form-control" />
				</div>
				<div class="row">
					<div class="col-sm-6">
						<input type="submit" id="submit_btn" class="btn btn-primary" value="<?php echo $lang_btn_SignIn ?>">
						<img src="<?php echo base_url('images/general/Spinner.gif');?>" id="spinner_img" style="display:none">
					</div>
					<div class="col-sm-6" style='text-align: right'>
						<p class="change_link"><?php echo $lang_Field_lpPassword; ?>
							<?php echo anchor('customer/lostPassword/', $lang_Field_ClickMe);?>
						</p>
					</div>
				</div>
        <hr>
        <div class="row">
      		<div class="col-sm-4">
              <div class="fb-login-button" data-max-rows="1" data-size="medium" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>
          </div>
          <div class="col-sm-4">
              <div class="g-signin2" data-onsuccess="onSignIn"></div>
          </div>
        </div>
			</form>
		</div>

		</div>
		<div class="col-sm-6">

				<h5>PENDAFTARAN BARU</h5>
				<div style='border: 1px #dddddd solid;padding:10px;margin-bottom:40px;height:350px'>
				<div class="row">
				  <div class="col-sm-12">
						<?php echo $lang_ket_daftar_personal; ?>
						<div class='my-btn-create'><?php echo anchor('customer/personal/', $lang_btn_personal, array('class'=>'btn btn-primary'));?></div>
				  </div>
				</div>
				<div class="row">
				  <div class="col-sm-12">
						<hr>
						<?php echo $lang_ket_daftar_akunBisnis;?>
						<div class='my-btn-create'><?php echo anchor('customer/business/', $lang_btn_bisnis, array('class'=>'btn btn-primary'));?> </div>
				  </div>
				</div>
				<div class="row">
				  <div class="col-sm-12">
						<hr>
						Untuk pemerintah yang ingin belanja di myacico.com.
						<div class='my-btn-create'><?php echo anchor('customer/government/', $lang_btn_pemerintah, array('class'=>'btn btn-primary'));?></div>
				  </div>
				</div>

			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
var baseApiUrl = '<?php echo $baseApiUrl; ?>';
var wishlist ='<?php echo$this->uri->segment(3); ?>';

var success = function(r){
  $('#spinner_img').hide();
  $('#submit_btn').val('Kirim').removeClass('disabled');
  //console.log('OK:', r);

  if(!r.token) return $.alert({
    title: 'Alert!',
    content: r.message
  });
  var apiurl = api_base_url +'/order/cart/additem?token='+r.token;
  <?php
	//Memasukan produk yang dibeli sebelum login ke api

	foreach ($this->cart->contents() as $items):?>


		var m_product_id = <?php echo $items['id']; ?>;
		var qty = <?php echo $items['qty']; ?>;
		var pricelist = <?php echo $items['price']; ?>;
		var weight = <?php echo $items['weight']; ?>;

		var success = function(r){

		};

		$.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify(
			{
				"productId":m_product_id,
				"qty":qty,
				"price":pricelist,
				"weightPerItem":weight
			}
		) , url: apiurl, success: success });
	<?php
	endforeach;
	$this->cart->destroy();
	?>

	document.cookie='x-auth='+r.token+'; path='+base_path;
	token = r.token;
	var cb = location.search.split('callback=');
	//SAM
	//alert(wishlist);
    if(wishlist)
	{
		window.location.replace(base_url+"product/detail/"+wishlist);
		die();
	}
	if(cb.length > 1) location.href = cb[1].split(';').shift();
	else location.href = '<?php echo base_url('account'); ?>';

	if(localStorage.chat_status == 'redirect') chat.connect();
};
var error = function(er){
  $('#spinner_img').hide();
  $('#submit_btn').val('Kirim').removeClass('disabled');
  console.log('OK:', er);
  $.alert({
    title: 'Alert!',
    content: 'Koneksi tidak berhasil, silahkan coba lagi!',
  });
};
    var data = {};
$(document).ready(function() {

  $('form').submit(function(e){
    e.preventDefault();
		var email = $("#email").val();
		var password = $("#password").val();
		var apiurl = baseApiUrl + '/aduser/masuk';

		var x = document.forms["myForm"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Masukan Email Yang Benar");
        return false;
    }

    data.email=email;
		if(password==''){
			$.alert({
				title: 'Alert!',
				content: 'Password tidak boleh kosong!',
			});
      return false;
		};
    data.password=password;

    $('#spinner_img').show();
    $('#submit_btn').val('loading...').addClass('disabled');
    $.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify(data), dataType: "json", url: apiurl, success: success, error: error, timeout: 30000 });

  });

});
</script>
