<div class='my-bg-title'>
	<div class="container">
		<div class="row">
		  <div class="col-sm-12">

			<i class="fa fa-angle-right" aria-hidden="true"></i> DASHBOARD

		  </div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<?php $this->load->view('frontend/modules/account/sidebar_menu'); ?>
		</div>
		<div class="col-sm-8">
      <div class="dashboard">
        <p>Hello <b><?php echo $user->name; ?></b>, <br><br>Dari Beranda Akun anda, anda bisa melihat tinjauan dari aktivitas akun yang ada sekarang dan memperbaharui informasi akun anda. Pilih tautan di bawah ini untuk melihat atau mengedit informasi.</p>
		<hr>
		
		<table class="table table-condensed">
		<thead>
		  <tr>
			<th>Informasi Akun & Billing</th>
			<th>Konfirmasi Pembayaran</th>
			<th>Newsletters</th>
		  </tr>
		</thead>
		<tbody>
		  <tr>
			<td><p>Informasi yang berkenaan dengan akun dan data pembayaran order Anda.</p>
				<?php echo anchor('account/informasiAkun/', 'Ubah Data & Password');?></td>
			<td><p>Anda bisa melakukan konfirmasi pembayaran pada halaman Riwayat dan Status Pesanan.</p>
				<?php echo anchor('account/riwayatStatusPesanan/', 'Konfirmasi');?></td>
			<td><p>Anda saat ini belum terdaftar.</p>
				<?php echo anchor('customer/government/', 'Daftar');?></td>
		  </tr>
	
		</tbody>
	  </table>


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
