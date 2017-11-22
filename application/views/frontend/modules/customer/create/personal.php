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
                var uname=resp['displayName'];
                $("#email").val(umail);
                $("#name").val(uname);
                //console.log("sss",uname);
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
                    //display user data
                    //console.log(response.status.email)
                   
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
                var ufname=response.first_name;
                var ulname=response.last_name;
                var uname=ufname,ulname;
                console.log(uname)
                $("#email").val(umail);
                window.location.assign('#/app/login/'+response.email)
                // document.getElementById('fbLink').setAttribute("onclick","fbLogout()");
                // document.getElementById('fbLink').innerHTML = 'Logout from Facebook';
                // document.getElementById('status').innerHTML = 'Thanks for logging in, ' + response.first_name + '!';
                // document.getElementById('userData').innerHTML = '<p><b>FB ID:</b> '+response.id+'</p><p><b>Name:</b> '+response.first_name+' '+response.last_name+'</p><p><b>Email:</b> '+response.email+'</p><p><b>Gender:</b> '+response.gender+'</p><p><b>Locale:</b> '+response.locale+'</p><p><b>Picture:</b> <img src="'+response.picture.data.url+'"/></p><p><b>FB Profile:</b> <a target="_blank" href="'+response.link+'">click to view profile</a></p>';
            });
        }

        // Logout from facebook
        function fbLogout() {
            FB.logout(function() {
                // document.getElementById('fbLink').setAttribute("onclick","fbLogin()");
                // document.getElementById('fbLink').innerHTML = '<img src="fblogin.png"/>';
                // document.getElementById('userData').innerHTML = '';
                // document.getElementById('status').innerHTML = 'You have successfully logout from Facebook.';
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
}(document, 'script', 'facebook-jssdk'));
</script>

<style>
p{
margin-bottom: 5px;
}
.p1 {
color: red;
margin-left: 12px;
margin-top: -11px;
}

</style>
<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>


<div class="container">
	<div class="row" style='margin-top:20px'>

		<div class="col-sm-6">
<h4> <?php echo $lang_field_selamatDatang; ?> </h4>
<p> <?php
	echo $lang_pesan;
 ?>
 </p>
 	<p>
		1.DELIVERY
	</p>
	<p class="p1">
2x24 hours delivery on weekdays for all areas of JABODETABEK and free delivery to all area in Indonesia.
	</p>
	<p>
		2. RETURN
	</p>
	<p class="p1">
		Damage to goods caused by errors from the manufacturer of goods, can be exchanged within 7 working days or money back within 2x24 hours.
	</p>
		</div>
	  <div class="col-sm-6">

		<div class='border-create7'>
		 <form name="myForm" method="post">
		<div class="form-group">
		<label>Name:</label>
		<input type="text" id="name" name="name" class="form-control mandatory"/>
		</div>
		  <div class="form-group">
			<label>Email:</label>
					<input type="text" id="email" name="email" class="form-control mandatory"/>

		  </div>
		  <div class="form-group">
			<label>Password:</label>
			<input type="password" id="password" name="password" class="form-control" placeholder=""  />
		  </div>
		  <div class="form-group">
			<label>Ulangi Password:</label>
			<input type="password" id="password2" class="form-control" placeholder="" />
		  </div>
		  <div class="row">
			<div class="col-sm-6">
				<input type="submit" id="submit_btn3" class="btn btn-primary" value="<?php echo "Daftar"?>">
				<img src="<?php echo base_url('images/general/Spinner.gif');?>" id="spinner_img" style="display:none">
			</div>
			<div class="col-sm-6" style='text-align: right'>
				<?php echo $field_sudahDaftar; ?> <?php echo anchor('customer/signIn', 'Log In'); ?>
			</div>
		  </div><hr>Daftar dengan:
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
	  <div class="col-sm-3">

		</div>
	</div>

</div>
<script type="text/javascript">
var baseApiUrl = '<?php echo $baseApiUrl2; ?>'+'/create';
console.log('333',baseApiUrl)
var apiurl = '<?php echo $baseApiUrl2; ?>'+'/create';
console.log('tes1111',apiurl)
var data = {};
$(document).ready(function() {

  $('form').submit(function(e){
    e.preventDefault();
    var name = $("#name").val();
		var email = $("#email").val();
		var password = $("#password").val();
                var password2 = $("#password2").val();
		data.name = name;
    data.email = email;
    data.password = password;

var apiurl = '<?php echo $baseApiUrl2; ?>'+'/create';
		console.log('ini apa ya', apiurl)
		function validateForm() {


}

if(name==''){
			$.alert({
				title: 'Alert!',
				content: 'Nama tidak boleh kosong!',
			});
      return false;
		}
		    var x = document.forms["myForm"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Email Tidak Benar");
        return false;
    }


		if(password.length < 7){
			$.alert({
				title: 'Alert!',
				content: 'Password Kurang dari 7!',
			});
      return false;
		}else
		if(password != password2){
			$.alert({
				title: 'Alert!',
				content: 'Password tidak sama!',
			});

	      return false;
		};
		// comment baru
		    var success = function(r){
      $('#spinner_img').hide();
      $('#submit_btn').val('Daftar').removeClass('disabled');
      // console.log('OK:', r);
      alert(r.message);
			if(r.status == 0){
					         return false;
			}else{

				window.location.replace("<?php echo site_url('customer/successCreate/'); ?>"+email);
			}


    };



    $('#spinner_img').show();
    $('#submit_btn').val('loading...').addClass('disabled');
    $.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify(data), dataType: "json", url: apiurl, success:success });

  });
  });
// var baseApiUrl = '<?php echo $baseApiUrl2; ?>';

// var apiurl = baseApiUrl + '/create';
// var success = function(r){
// 	console.log('OK:', r);
// 	if(r.status == 1) return location.href = '<?php // echo base_url('customer/successCreate/'); ?>'+$("#email").val();
// 	$('#spinner_img').hide();
// 	$('#submit_btn').val('Kirim').removeClass('disabled');
// 	$.alert({
// 		title: 'Alert!',
// 		content: r.message
// 	});
// };

// var error = function(er){
//   $('#spinner_img').hide();
//   $('#submit_btn').val('Kirim').removeClass('disabled');
//   console.log('OK:', er);
//   $.alert({
//     title: 'Alert!',
//     content: 'koneksi tidak berhasil, silahkan coba lagi!',
//   });
// };


// 	$("form").submit(function(e){
// 	    e.preventDefault();
// 		var apiurl = baseApiUrl + '/create';
// 		var data = $(this).serialize();

// 		var nama = $("#nama").val();
// 		var email = $("#email").val();
// 		var password = $("#password").val();
// 		var password2 = $("#password2").val();


// 		if(nama==''){
// 			$.alert({
// 				title: 'Alert!',
// 				content: 'nama tidak boleh kosong!',
// 			});
// 		}else
// 		if(email==''){
// 			$.alert({
// 				title: 'Alert!',
// 				content: 'email tidak boleh kosong!',
// 			});
// 		}else
// 		if(password.length < 7){
// 			$.alert({
// 				title: 'Alert!',
// 				content: 'password minimal 7 karakter!',
// 			});
// 		}else
// 		if(password != password2){
// 			$.alert({
// 				title: 'Alert!',
// 				content: 'Password tidak sama!',
// 			});
// 		}else{
// 			$('#spinner_img').show();
// 			$('#submit_btn').val('loading...').addClass('disabled');
// 			//$.post( apiurl, data, success, "json" );
// 			//$.ajax({ type:"POST", dataType: "json", data:data, url: apiurl, success: success, error: error, timeout: 30000 });
// 			 //$.ajax({ type:"POST", contentType: "application/json", dataType: "json", data:data, url: apiurl, success: success, error: error, timeout: 30000 });
// 			  $.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify(data), dataType: "json", url: apiurl, success: success, timeout: 30000 });
// 		}

// 		console.log('data',data);

// 	});


</script>
