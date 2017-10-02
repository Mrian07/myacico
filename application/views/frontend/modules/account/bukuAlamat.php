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
			<?php echo anchor('account/TambahBukuAlamat', '<i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Buku Alamat', array('class'=>'btn btn-success'));?>
		</div>
	</div>
</div>

