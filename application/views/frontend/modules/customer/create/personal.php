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

<div class='my-bg-title'>
	<div class="container">
		<div class="row">
		  <div class="col-sm-12">

			<i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo $lang_field_persoanAatas; ?>

		  </div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">

		<div class="col-sm-3">
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

		<div class='border-create'>
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
				<input type="submit" id="submit_btn" class="btn btn-primary" value="<?php echo "Daftar"?>">
				<img src="<?php echo base_url('images/general/Spinner.gif');?>" id="spinner_img" style="display:none">
			</div>
			<div class="col-sm-6" style='text-align: right'>
				<?php echo $field_sudahDaftar; ?> <?php echo anchor('customer/signIn', 'Log In'); ?>
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
var baseApiUrl = '<?php echo $baseApiUrl2; ?>';

var apiurl = baseApiUrl + '/create';
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

		var apiurl = baseApiUrl + '/create';
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
        alert("Not a valid e-mail address");
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


    $('#spinner_img').show();
    $('#submit_btn').val('loading...').addClass('disabled');
    $.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify(data), dataType: "json", url: apiurl });

  });
  });
// var baseApiUrl = '<?php echo $baseApiUrl2; ?>';

// var apiurl = baseApiUrl + '/create';
// var success = function(r){
// 	console.log('OK:', r);
// 	if(r.status == 1) return location.href = '<?php echo base_url('customer/successCreate/'); ?>'+$("#email").val();
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
