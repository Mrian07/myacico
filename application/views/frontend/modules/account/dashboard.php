<div class="container">
	<div class="row">
	  <div class="col-sm-12">
  		<div class="my-border-title">
  			<h3 class='my-title-page'><i class="fa fa-dot-circle-o" aria-hidden="true"></i> DASHBOARD</h3>
  		</div>
	  </div>
	</div>

	<div class="row">
		<div class="col-sm-3">
			<?php $this->load->view('frontend/modules/account/sidebar_menu'); ?>
		</div>
		<div class="col-sm-8">
      <div class="dashboard">
        <div class="welcome-msg">
        <p>Hello <?php echo $user->name; ?>, Dari Beranda Akun anda, anda bisa melihat tinjauan dari aktivitas akun yang ada sekarang dan memperbaharui informasi akun anda. Pilih tautan di bawah ini untuk melihat atau mengedit informasi</p>
      </div>

		<div class="row">
			<div class="col-sm-6"><h5>Informasi Kontak</h5></div>
			<div class="col-sm-6"><h5>Newsletters</h5></div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="row">
				  <div class="col-sm-6"><?php echo anchor('customer/government/', 'Ubah data');?></div>
				  <div class="col-sm-6"><?php echo anchor('customer/government/', 'Ubah kata sandi');?></div>
				</div>


			</div>
			<div class="col-sm-6">
				Anda saat ini belum terdaftar<br>
				<?php echo anchor('customer/government/', 'Daftar');?>
			</div>
		</div>


		</div>
	</div>
</div>
</div>
<script type="text/javascript">
var baseApiUrl = '<?php echo $baseApiUrl; ?>';

$(document).ready(function() {

  $('form').submit(function(e){
    e.preventDefault();

    var apiurl = baseApiUrl + '/login';
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
