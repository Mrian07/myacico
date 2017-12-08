
<div class="container">
	<div class='my-bg-title'>

		<i class="fa fa-angle-right" aria-hidden="true"></i> DASHBOARD

	</div>
</div>

<div class="container my-container-white">
	<div class="row">
		<div class="col-sm-3">
			<?php  $this->load->view('frontend/modules/account/sidebar_menu'); ?>
		</div>
		<div class="col-sm-9 dashboard">

        <p>Hello <b><?php echo $user->name; ?></b>, <br><br><?php echo $lang_dar; ?></p>

		<hr>

		<h4><?php echo $lang_acc; ?></h4>
		<p><?php echo $lang_info; ?></p>
		<p><?php echo anchor('account/informasiAkun/', $lang_change, array('class'=>'btn btn-default'));?></p>
		<h4><?php echo $lang_pay; ?></h4>
		<p><?php echo $lang_you; ?></p>
		<p><?php echo anchor('account/riwayatStatusPesanan/', $lang_confirm, array('class'=>'btn btn-default'));?><p/>
		<h4>Newsletter</h4>
				<div class="rumah"></div>
		<!-- <p><?php echo anchor('customer/government/', 'Daftar', array('class'=>'btn btn-default'));?></p> -->

	</div>
</div>
</div>

<script type="text/javascript">

var link_url = '<?php echo base_url('account/editBukuAlamat') ?>';

$(document).ready(function() {
	var token = document.cookie.split('x-auth=')[1].split(';').shift();
	console.log('aaa',token);
	var api2 = api_base_url +'/newsletter/checkemail';

	$.ajax({
	    type:"GET",
	    headers:{"token":token},

	    success: function(data){

	        var addressname = $('.addressname');
	 var rumah = $('.rumah');
$("#hapus").val(null);
if(data.status == 1 ) {
	rumah.append('<tr><td><?php echo $lang_news; ?></td></tr>');
}else{
	rumah.append('<tr><td><?php echo $lang_news; ?></td></tr>');
}
	        },
	    dataType: "json",
	    url: api2});



});

</script>
