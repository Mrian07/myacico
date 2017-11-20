<div class="container">
  <div class="row" style='margin-top:20px'>
	  <div class="col-sm-4">
		<div class='border-create1'>
			<p><?php echo $lang_ket_daftar_personal; ?></p>
			<div class='my-btn-create'><?php echo anchor('customer/personal/', "<br/><br/><i class='fa fa-users fa-3x' aria-hidden='true'></i> ", array('class'=>''));?></div>
      <p> Personal </p>
    </div>
	  </div>
	  <div class="col-sm-4">
		<div class='border-create1'>
			<p><?php echo $lang_ket_daftar_akunBisnis;?></p>
			<div class='my-btn-create'><?php echo anchor('customer/business/', "<i class='fa fa-briefcase fa-3x' aria-hidden='true'></i> ", array('class'=>''));?> </div>
        <p> Business </p>
    </div>
	  </div>
	  <div class="col-sm-4">
		<div class='border-create1'>
			<p>Untuk pemerintah yang ingin belanja di myAcico.co.id</p>
			<div class='my-btn-create'><?php echo anchor('customer/government/', "<br/><br/><i class='fa fa-building fa-3x' aria-hidden='true'></i> ", array('class'=>''));?></div>
      <p> Government </p>
    </div>
	  </div>
	</div>
</div>
