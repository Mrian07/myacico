<div class="container">
	<div class='my-bg-title'>
		<i class="fa fa-angle-right" aria-hidden="true"></i> BUKU ALAMAT
	</div>
	<!-- pesan start -->
	<?php $flash_pesan = $this->session->flashdata('pesan')?>
	<?php if (! empty($flash_pesan)) : ?>
	<?php echo $flash_pesan; ?>
	<?php endif ?>
	<!-- pesan end -->

	<div class="row">
		<div class="col-sm-3">
			<?php $this->load->view('frontend/modules/account/sidebar_menu'); ?>
		</div>
		<div class="col-sm-9">
			<?php echo anchor('account/TambahBukuAlamat', '<i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Buku Alamat', array('class'=>'btn-back'));?>
					<br/><br/>

		<div class='listBukuAlamat'><center><img src='<?php echo base_url('images/general/loading.gif');?>' border='0'></center></div>

		</div>
	</div>

</div>

<script>
$(document).ready(function() {

	$.ajax
	({
	url: "<?php echo site_url('account/listBukuAlamat'); ?>",
	success:function(html){
			$(".listBukuAlamat").html(html);
		}
	});

});
</script>
