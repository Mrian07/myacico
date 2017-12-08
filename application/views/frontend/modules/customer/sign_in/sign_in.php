
<?php //            G Plus              ?>
<script type="text/javascript">
		function logout(){
				gapi.auth.signOut();
				location.reload();
		}
		var ori = null
		function login(w) {
			 // console.log(w)
				ori = w
			var myParams = {
				'clientid' : '879752343646-cunagke2s8vokdao51es112nlhrnults.apps.googleusercontent.com',
				'cookiepolicy' : 'single_host_origin',
				'callback' : 'loginCallback',
				'approvalprompt':'force',
				'scope' : 'https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/plus.profile.emails.read'
			};
			gapi.auth.signIn(myParams);
		}

		function loginCallback(result){
				if(result['status']['signed_in'])
				{
						var request = gapi.client.plus.people.get(
						{
								'userId': 'me'
						});
						request.execute(function (resp)
						{
								var email = '';
								if(resp['emails'])
								{
										for(i = 0; i < resp['emails'].length; i++)
										{
												if(resp['emails'][i]['type'] == 'account')
												{
														email = resp['emails'][i]['value'];
												}
										}
								}

								var str = "Name:" + resp['displayName'] + "<br>";
								str += "Image:" + resp['image']['url'] + "<br>";
								str += "<img src='" + resp['image']['url'] + "' /><br>";

								str += "URL:" + resp['url'] + "<br>";
								str += "Email:" + email + "<br>";
								var umail=email;
								$("#email").val(umail);
								
								if(ori == 1){
										window.location.assign('#/app/login/'+email)
								}else{
										window.location.assign('#/app/password/'+email)
								}

						});

				}

		}

		function onLoadCallback(){
				gapi.client.setApiKey('AIzaSyCqXQ5Te1coI72mtysKI0_GbbMpJo6EaUs');
				gapi.client.load('plus', 'v1',function(){});
		}

		</script>

				<script type="text/javascript">
							(function() {
							 var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
							 po.src = 'https://apis.google.com/js/client.js?onload=onLoadCallback';
							 var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
						 })();
				</script>
<?php //            Facebook              ?>
						<script>
				window.fbAsyncInit = function() {
						// FB JavaScript SDK configuration and setup
						FB.init({
							appId      : '1860917310831534', // FB App ID
							cookie     : true,  // enable cookies to allow the server to access the session
							xfbml      : true,  // parse social plugins on this page
							version    : 'v2.8' // use graph api version 2.8
						});

						// Check whether the user already logged in
						FB.getLoginStatus(function(response) {
								if (response.status === 'connected') {
									
										getFbUserData();
								}
						});
				};

				// Load the JavaScript SDK asynchronously
				(function(d, s, id) {
						var js, fjs = d.getElementsByTagName(s)[0];
						if (d.getElementById(id)) return;
						js = d.createElement(s); js.id = id;
						js.src = "//connect.facebook.net/en_US/sdk.js";
						fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));

				// Facebook login with JavaScript SDK
				function fbLogin() {
						FB.login(function (response) {
								if (response.authResponse) {
										// Get and display the user profile data
										getFbUserData();
								} else {
									 // document.getElementById('status').innerHTML = 'User cancelled login or did not fully authorize.';
								}
						}, {scope: 'email'});
				}

				// Fetch the user profile data from facebook
				function getFbUserData(){
						FB.api('/me', {locale: 'en_US', fields: 'id,first_name,last_name,email,link,gender,locale,picture'},
						function (response) {
								//console.log(response)
								var umail=response.email;
								
								$("#email").val(umail);
								
						});
				}

				// Logout from facebook
				function fbLogout() {
						FB.logout(function() {
								
						});
				}
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

<style>
/*ini spesial buat button search jangan dihapus*/
.my-search-button{
		padding: 6px 20px 6px 20px;
		border: none;
		border-radius: 4px;
		background: #cd0000 url("../../images/general/red-emboss.jpg");
		color:#f8f5f0;
		font-size: 22px;
}

.my-search-button:hover{
	background: #111111;
}
</style>

<div class="container detail-page">


	<div class="row" style='margin-top:20px; text-align:left'>

		<div class="col-sm-6">
		<h5>LOG IN</h5>
		<div style='border: 1px #dddddd solid;padding:10px;margin-bottom:40px;height:350px'>
				<p><?php echo$lang_info_login; ?></p>
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
						<input type="submit" id="submit_btn"  class="btn btn-primary" value="<?php echo $lang_btn_SignIn ?>">
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
<a href="javascript:fbLogin();"><img src="<?php echo base_url('images/general/facebook.png');?>"></a>
	</div>
					<div class="col-sm-4">
						<a href="javascript:login(1);"><img src="<?php echo base_url('images/general/google.png');?>"></a>
					</div>
				</div>
			</form>

		</div>

		</div>
		<div class="col-sm-6">

				<h5><?php echo$lang_reg_text;?></h5>
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
						<?php echo$lang_ket_daftar_gov;?>
						<div class='my-btn-create'><?php echo anchor('customer/government/', $lang_btn_pemerintah, array('class'=>'btn btn-primary'));?></div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<script type="text/javascript">

function addAllCartToBackend(r){

	<?php foreach ($this->cart->contents() as $items){?>


	var m_product_id = <?php echo $items['id']; ?>;
	var qty = <?php echo $items['qty']; ?>;
	var pricelist = <?php echo $items['price']; ?>;
	var weight = <?php echo $items['weight']; ?>;

	var apiurl = api_base_url +'/order/cart/additem';

	$.ajax({
	type: 'POST',
	contentType: 'application/json',
  url: apiurl,
	dataType: 'json',
  data: JSON.stringify({
		"productId":m_product_id,
		"qty":qty,
		"price":pricelist,
		"weightPerItem":weight,
	}),
	headers:{"token":r.token},
  success:function(html){
		

    }
  });


	<?php } ?>
  //die();
}


var baseApiUrl = '<?php echo $baseApiUrl; ?>';
var wishlist ='<?php echo$this->uri->segment(3); ?>';

var success = function(r){


	$('#spinner_img').hide();

	$('#submit_btn').val('<?php echo $lang_btn_SignIn ?>').removeClass('disabled');

	
	if(r.status==0) return $.alert({
		title: 'Login fail!',
		content: r.message
	});
	if(!r.token) return false;
	// var apiurl = api_base_url +'/order/cart/additem?token='+r.token;








	document.cookie='x-auth='+r.token+'; path='+base_path;
	token = r.token;


	var cb = location.search.split('callback=');

	//SAM
	//alert(wishlist);
	if(wishlist){
		window.location.replace(base_url+"product/detail/"+wishlist);
		die();
	}
	// alert('login OK');
	if(cb.length > 1) location.href = cb[1].split(';').shift();
	else location.href = '<?php echo base_url('account'); ?>';

	// if(localStorage.chat_status == 'redirect') chat.connect();
};
var error = function(er){
	$('#spinner_img').hide();
	$('#submit_btn').val('Kirim').removeClass('disabled');
	
	$.alert({
		title: 'Alert!',
		content: '<?php echo $lang_msg_login3;?>',
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
			$.alert({
				title: 'Alert!',
				content: '<?php echo $lang_msg_login1;?>',
			});
			return false;
		}

		data.email=email;
		if(password==''){
			$.alert({
				title: 'Alert!',
				content: '<?php echo $lang_msg_login1;?>',
			});
			return false;
		};
		data.password=password;

		$('#spinner_img').show();
		$('#submit_btn').val('loading...').addClass('disabled');
		$.ajax({
			type:"POST",
			contentType: "application/json",
			data:JSON.stringify(data),
			dataType: "json",
			url: apiurl,
			success: success,
			error: error,
			timeout: 20000
		});
	});

});
</script>
