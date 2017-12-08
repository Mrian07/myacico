
<div class="container">
	<div class='my-bg-title'>
		<i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo $lang_datkun;?>
	</div>
	<div class="row">
		<div class="col-sm-3">
			<?php $this->load->view('frontend/modules/account/sidebar_menu'); ?>
		</div>
		<div class="col-sm-9">
			<p><?php echo anchor('account/informasiAkun', '<i class="fa fa-angle-double-left" aria-hidden="true"></i> ' .$lang_avatar_back, array('class'=>'btn-back'));?></p>
			<?php
			$lang = get_cookie('lang');
			if($lang=='en'){?>
				<div class="alert alert-success alert-dismissible animated bounceInDown" id="alert" style='display:none;'>
				<span class="glyphicon glyphicon-ok"></span> Update account success.</div>
			<?php }else{ ?>
				<div class="alert alert-success alert-dismissible animated bounceInDown" id="alert" style='display:none;'>
				<span class="glyphicon glyphicon-ok"></span> Update akun sukses.</div>
			<?php } ?>


			<p><?php echo $lang_info_akun;?></p>
			<div class="panel panel-default">
				<div class="panel-body">
				  <form name="loginFm" method="post">
					<div class="form-group">
					  <label><?php echo $field_name;?></label>
					  <input type="text" id="name" name="name" value='<?php echo $user->name; ?>' class="form-control mandatory"/>
					</div>
					<div class="form-group">
					  <label>Email</label>
					  <input type="text" name="email" value='<?php echo $user->email; ?>' class="form-control" disabled />
					</div>
					<div class="clearfix"></div>
						<input type="submit" id="submit_btn" class="btn btn-primary" value="Update"> <img src="<?php echo base_url('images/general/Spinner.gif');?>" id="spinner_img" style="display:none">
				  </form>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
var baseApiUrl = '<?php echo $baseApiUrl; ?>';

var error = function(er){
  $('#spinner_img').hide();
  $('#submit_btn').val('Update').removeClass('disabled');
  console.log('OK:', er);
  $.alert({
    title: 'Alert!',
    content: 'koneksi tidak berhasil, silahkan coba lagi!',
  });
};

$(document).ready(function() {
	$('form').submit(function(e){
		var name = $("#name").val();
		var token = document.cookie.split('x-auth=')[1].split(';').shift();

		if(name==''){
			$.alert({
				title: 'Alert!',
				content: 'Nama tidak boleh kosong!',
			});
			$("#name").val("<?php echo $user->name; ?>");
		}else{

			$('#spinner_img').show();
			$('#submit_btn').val('loading...').addClass('disabled');
			e.preventDefault();

			var apiurl = baseApiUrl + '/aduser/updatenameuser?token='+token;
			var data = $(this).serialize();


			var success = function(r){
				$('#spinner_img').hide();
				$('#submit_btn').val('Update').removeClass('disabled');
				console.log('OK:', r);


				 document.cookie='x-auth='+r.newToken+'; path='+base_path;

				$('#alert').show('slow').delay(5000).hide('slow');

			};

			$.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify({ "name":name}) , headers:{"token":token}, url: apiurl, success: success, error: error });

		}
	});

});
</script>
