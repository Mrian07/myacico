


<div class="container">
	<div class="row">
	  <div class="col-sm-12">
		<div class="my-border-title">
			<h3 class='my-title-page'><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Buka Alamat</h3>
		</div>
	  </div>
	</div>

	<div class="row">
		<div class="col-sm-3">
			<?php $this->load->view('frontend/modules/account/sidebar_menu'); ?>
		</div>
		<div class="col-sm-9">
    <div class="login_wrapper">
      <div class="form login_form">
        <section class="login_content">
        <h1>Buku Alamat</h1>
				<hr>
<a href="<?php echo site_url('account/TambahBukuAlamat') ?>"> <button type="button" class="btn btn-link">Tambah Buku Alamat</button></a>

        </section>
      </div>
    </div>
		</div>
	</div>
</div>
<script type="text/javascript">
var baseApiUrl = '<?php echo $baseApiUrl; ?>';

$(document).ready(function() {
  $('#pwd_box').hide();
  $('#pwd_btm').click(function(e){
    e.preventDefault();
    $('#pwd_box').slideToggle();
  });

  $('form').submit(function(e){
    e.preventDefault();

    var apiurl = baseApiUrl + '/myaccount';
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
