<div class="container">
	<div class="row">
	  <div class="col-sm-12">
		<div class="my-border-title">
		<h3 class='my-title-page'><i class="fa fa-dot-circle-o" aria-hidden="true"></i> PENDAFTARAN</h3>
		</div>
	  </div>
	</div>  
    <div class="row">
	  <div class="col-sm-4">
		<div class='border-create'>
			<?php echo $lang_ket_daftar_personal; ?>
			<div class='my-btn-create'><?php echo anchor('customer/personal/', 'DAFTAR AKUN PERSONAL', array('class'=>'my-link-create'));?></div>
		</div>
	  </div>
	  <div class="col-sm-4">
		<div class='border-create'>
			Ingin menyediakan barang untuk perusahaan anda? akun myacico bisnis akan sesuai dengan kebutuhan anda. informasi perusahaan anda diperlukan untuk verifikasi.
			<div class='my-btn-create'><?php echo anchor('customer/business/', 'DAFTAR AKUN BISNIS', array('class'=>'my-link-create'));?></div>
		</div>
	  </div>
	  <div class="col-sm-4">
		<div class='border-create'>
			Untuk perusahaan yang ingin belanja di myacico.com.
			<div class='my-btn-create'><?php echo anchor('customer/government/', 'DAFTAR PERSONAL GOVERNMENT', array('class'=>'my-link-create'));?></div>
		</div>
	  </div>
	</div> 
</div>
