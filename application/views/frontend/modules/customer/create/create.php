<div class="my-container">
  <div class="row" style='margin-top:20px'>
	  <div class="col-sm-4">
		<div class='border-create1'>
			<p><?php echo $lang_ket_daftar_personal; ?></p>
			<div class='my-btn-create'><?php echo anchor('customer/personal/', "<i class='fa fa-users fa-5x' aria-hidden='true'></i> ", array('class'=>''));?></div>
		</div>
	  </div>
	  <div class="col-sm-4">
		<div class='border-create'>
			<p><?php echo $lang_ket_daftar_akunBisnis;?></p>
			<div class='my-btn-create'><?php echo anchor('customer/business/', "<i class='fa fa-briefcase fa-5x' aria-hidden='true'></i> ", array('class'=>''));?> </div>
		</div>
	  </div>
	  <div class="col-sm-4">
		<div class='border-create'>
			<p>Untuk pemerintah yang ingin belanja di myacico.com.</p>
			<div class='my-btn-create'><?php echo anchor('customer/government/', "<i class='fa fa-building fa-5x' aria-hidden='true'></i> ", array('class'=>''));?></div>
		</div>
	  </div>
	</div>
</div>
