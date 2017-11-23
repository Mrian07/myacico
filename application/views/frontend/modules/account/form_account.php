
<div class="container">
	<div class='my-bg-title'>
		<i class="fa fa-angle-right" aria-hidden="true"></i> DATA AKUN
	</div>
	<div class="row">
		<div class="col-sm-3">
			<?php $this->load->view('frontend/modules/account/sidebar_menu'); ?>
		</div>
		<div class="col-sm-9">
			<p><?php echo anchor('account/informasiAkun', '<i class="fa fa-angle-double-left" aria-hidden="true"></i> Kembali', array('class'=>'btn-back'));?></p>
			<?php
			$lang = get_cookie('lang');
			if($lang=='en'){?>
				<div class="alert alert-success alert-dismissible animated bounceInDown" id="alert" style='display:none;'>
				<span class="glyphicon glyphicon-ok"></span> Update account success.</div>
			<?php }else{ ?>
				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible animated bounceInDown" id="alert" style='display:none'>
				<span class="glyphicon glyphicon-ok"></span> Update akun sukses.</div>');
			<?php } ?>


			<p>Silakan isi nama akun yang baru jika ingin melakukan perubahan dan click button update.</p>
			<div class="panel panel-default">
				<div class="panel-body">
				  <form name="loginFm" method="post">
					<div class="form-group">
					  <label>Nama</label>
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

			// success handling
			var success = function(r){
				$('#spinner_img').hide();
				$('#submit_btn').val('Update').removeClass('disabled');
				console.log('OK:', r);
				//alert(r.message);

				// $.alert({
				// 	title: 'Alert!',
				// 	content: 'Nama berhasil diubah',
				// });

				 document.cookie='x-auth='+r.newToken+'; path='+base_path;
				 //window.location.replace(base_url+"/account/formAccount/1");
				// $("#alertSubmit").show();
				$('#alert').show('slow').delay(5000).hide('slow');

			};

			//$.post( apiurl, data, success, "json" );
			$.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify({ "name":name}) , headers:{"token":token}, url: apiurl, success: success, error: error });

		}
	});

});
</script>
