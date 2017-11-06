
	<div class="container">
		<div class='my-bg-title'>

			<i class="fa fa-angle-right" aria-hidden="true"></i> DASHBOARD

		</div>
	</div>

<div class="container my-container-white">
	<div class="row">
		<div class="col-sm-3">
			<?php $this->load->view('frontend/modules/account/sidebar_menu'); ?>
		</div>
		<div class="col-sm-9 dashboard">

        <p>Hello <b><?php echo $user->name; ?></b>, <br><br>Dari Beranda Akun anda, anda bisa melihat tinjauan dari aktivitas akun yang ada sekarang dan memperbaharui informasi akun anda. Pilih tautan di bawah ini untuk melihat atau mengedit informasi.</p>
		<hr>

		<h4>Informasi Akun & Billing</h4>
		<p>Informasi yang berkenaan dengan akun dan data pembayaran order Anda.</p>
		<p><?php echo anchor('account/informasiAkun/', 'Ubah Data & Password', array('class'=>'btn btn-default'));?></p>
		<h4>Konfirmasi Pembayaran</h4>
		<p>Anda bisa melakukan konfirmasi pembayaran pada halaman Riwayat dan Status Pesanan.</p>
		<p><?php echo anchor('account/riwayatStatusPesanan/', 'Konfirmasi', array('class'=>'btn btn-default'));?><p/>
		<h4>Newsletters</h4>
		<p>Anda saat ini belum terdaftar.</p>
		<p><?php echo anchor('customer/government/', 'Daftar', array('class'=>'btn btn-default'));?></p>

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
