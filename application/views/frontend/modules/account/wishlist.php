<div class='my-bg-title'>
	<div class="container">
		<div class="row">
		  <div class="col-sm-12">

			<i class="fa fa-angle-right" aria-hidden="true"></i> RIWAYAT PESANAN

		  </div>
		</div>
	</div>
</div>
<div class="container my-container-white">

	<div class="row">
		<div class="col-sm-3">
			<?php $this->load->view('frontend/modules/account/sidebar_menu'); ?>
		</div>
		<div class="col-sm-9">

			<div class='wishListItem'><center><img src='<?php echo base_url('images/general/loading.gif');?>' border='0'></center></div>

		</div>
	</div>
</div>

<script>
$(document).ready(function() {

	$.ajax
	({
	url: "<?php echo site_url('account/wishListItem'); ?>",
	success:function(html){
			$(".wishListItem").html(html);
		}
	});

});
</script>
