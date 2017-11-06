<div class="container my-container-transparan">
  <div class="row">
	  <div class="col-sm-4">
		<div class='border-create'>
			<p><?php echo $lang_ket_daftar_personal; ?></p>
			<div class='my-btn-create'><?php echo anchor('customer/personal/', $lang_btn_personal, array('class'=>'btn btn-primary'));?></div>
		</div>
	  </div>
	  <div class="col-sm-4">
		<div class='border-create'>
			<p><?php echo $lang_ket_daftar_akunBisnis;?></p>
			<div class='my-btn-create'><?php echo anchor('customer/business/', $lang_btn_bisnis, array('class'=>'btn btn-primary'));?> </div>
		</div>
	  </div>
	  <div class="col-sm-4">
		<div class='border-create'>
			<p>Untuk pemerintah yang ingin belanja di myacico.com.</p>
			<div class='my-btn-create'><?php echo anchor('customer/government/', $lang_btn_pemerintah, array('class'=>'btn btn-primary'));?></div>
		</div>
	  </div>
	</div>
</div>
