<div class='my-bg-title'>
	<div class="container">
		<div class="row">
		  <div class="col-sm-12">

			<i class="fa fa-angle-right" aria-hidden="true"></i> PENDAFTARAN

		  </div>
		</div>
	</div>
</div>
<div class="container">
    <div class="row">
	  <div class="col-sm-4">
		<div class='border-create'>
			<?php echo $lang_ket_daftar_personal; ?>
			<div class='my-btn-create'><?php echo anchor('customer/personal/', $lang_btn_personal, array('class'=>'my-link-create'));?></div>
		</div>
	  </div>
	  <div class="col-sm-4">
		<div class='border-create'>
			<?php echo $lang_ket_daftar_akunBisnis;?>
			<div class='my-btn-create'><?php echo anchor('customer/business/', $lang_btn_bisnis, array('class'=>'my-link-create'));?> </div>
		</div>
	  </div>
	  <div class="col-sm-4">
		<div class='border-create'>
			Untuk pemerintah yang ingin belanja di myacico.com.
			<div class='my-btn-create'><?php echo anchor('customer/government/', $lang_btn_pemerintah, array('class'=>'my-link-create'));?></div>
		</div>
	  </div>
	</div>
</div>
