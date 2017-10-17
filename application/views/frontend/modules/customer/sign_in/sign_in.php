<div class='my-bg-title'>
	<div class="container">
		<div class="row">
		  <div class="col-sm-12">

			<i class="fa fa-angle-right" aria-hidden="true"></i> LOGIN AKUN

		  </div>
		</div>
	</div>
</div>

<div class="container">
	<!--<div class="row">
	  <div class="col-sm-12">
		<div class="my-border-title">
			<h3 class='my-title-page'><i class="fa fa-dot-circle-o" aria-hidden="true"></i> LOGIN AKUN</h3>
		</div>
	  </div>
	</div>-->

	<div class="row">
		<div class="col-sm-6">
		<h5>LOGIN</h5>
		<div class='border-create' style='background:#ffffff'>
				<p>Masukan email dan password login Anda pada form dibawah ini.</p>
			<form name="signin" method="post">
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
			</form>
		</div>

		</div>
		<div class="col-sm-6">

				<h5>PENDAFTARAN</h5>
				<div class='border-create'>
				<div class="row">
				  <div class="col-sm-12">
						<?php echo $lang_ket_daftar_personal; ?>
						<div class='my-btn-create'><?php echo anchor('customer/personal/', $lang_btn_personal, array('class'=>'my-link-create'));?></div>
				  </div>
				</div>
				<div class="row">
				  <div class="col-sm-12">
						<hr>
						<?php echo $lang_ket_daftar_akunBisnis;?>
						<div class='my-btn-create'><?php echo anchor('customer/business/', $lang_btn_bisnis, array('class'=>'my-link-create'));?> </div>
				  </div>
				</div>
				<div class="row">
				  <div class="col-sm-12">
						<hr>
						Untuk pemerintah yang ingin belanja di myacico.com.
						<div class='my-btn-create'><?php echo anchor('customer/government/', $lang_btn_pemerintah, array('class'=>'my-link-create'));?></div>
				  </div>
				</div>

			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
var baseApiUrl = '<?php echo $baseApiUrl; ?>';
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
//	$this->cart->destroy();
	?>

  document.cookie='x-auth='+r.token+'; path='+base_path;
  var cb = location.search.split('callback=');
  if(cb.length > 1) location.href = cb[1].split(';').shift();
  else location.href = '<?php echo base_url('account'); ?>';
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

		if(email==''){
			$.alert({
				title: 'Alert!',
				content: 'Email tidak boleh kosong!',
			});
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
