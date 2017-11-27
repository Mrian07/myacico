
<div class="container">
    <div class="row">
	  <div class="col-sm-12"><br>

			<?php if($hasil['status']=='1'){?>
				<div class='border-create'>
				<h4><?php echo $lang_reset_pswd_info;?> </h4><h5><?php echo anchor('customer/signIn',$lang_reset_pswd_info3); ?></h5>
				</div>
			<?php }else{ ?>
				<h6><?php echo $lang_reset_pswd_info2;?></h6>
				<div class="panel-group">
				  <div class="panel panel-default">
				    <div class="panel-body">

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
				</div>
			<?php } ?>

	  </div>
	</div>
</div>

<script type="text/javascript">

var link_url = '<?php echo base_url('account/editBukuAlamat') ?>';

$(document).ready(function() {

  $('form').submit(function(e){
      e.preventDefault();
      var apiurl3 = '<?php echo $baseApiUrl2; ?>';
      // acc.myacico.co.id/myacico-account/account/resendemail
    var api2 = login1 +'account/resendemail';
    console.log('api2',api2)
    //$.get(api_base_url+'/aduser/getaddress?addresstype=isshipto',
            var email = $("#email").val();
                  data.email = email;
    var success = function(r){

        $('#spinner_img').hide();
 $('#submit_btn').val('Kirim').removeClass('disabled');
//         $.alert({
//     title: 'Alert!',
//     content: 'Alamat Baru Berhasil di tambahkan',
//    });
     alert(r.message);
     console.log('OK:', r.status);



   };
  $.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify(data), url: api2, success: success});


    console.log('da1',token);
    console.log('asd',api2);
  });
});

</script>
