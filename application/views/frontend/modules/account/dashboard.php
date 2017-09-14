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
        <div class="page-title">
            <h1>Dashboard Akun</h1>
        </div>

        <div class="welcome-msg">
        <p>Hello <?php echo $user->name; ?>, Dari Beranda Akun anda, anda bisa melihat tinjauan dari aktivitas akun yang ada sekarang dan memperbaharui informasi akun anda. Pilih tautan di bawah ini untuk melihat atau mengedit informasi</p>
      </div>
      <div class="box-account box-info">
        <div class="col2-set">
          <div class="page-title">
            <h1>Informasi Akun</h1>
          </div>
          <div class="col-1">
            <div class="box">
                
              <div class="box-title">
                <h3>Informasi Kontak</h3>
              </div>
              <div class="box-content">
                <p>
                  <span class="capt"><?php echo $user->name; ?></span><br>
                  <?php echo $user->email; ?><br>
                    <br>
                    <span class="space"></span>
                  <br>
                  <a href="https://myacico.com/customer/account/edit/">Ubah                    <span class="space"></span>
                  </a><a href="https://myacico.com/customer/account/edit/changepass/1/">Ubah Kata Sandi</a>

                </p>
              </div>
            </div>
          </div>
          <div class="col-2">
            <div class="box">
              <div class="box-title">
                <h3>Newsletters</h3>
              </div>
              <div class="box-content">
                <p>
                  Anda saat ini belum terdaftar<br>
                  <a href="https://myacico.com/newsletter/manage/">Ubah</a>
                </p>
              </div>
            </div>
          </div>
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
