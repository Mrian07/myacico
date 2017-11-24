
<div class="container">
    <div class="row">
	  <div class="col-sm-12"><br>
		<div class='border-create'>
			<?php if($hasil['status']=='1'){?>
				Aktifasi account anda berhasil. <br><b><?php echo anchor('customer/signIn','click disini untuk login.'); ?></b>
			<?php }else{ ?>
				Maaf aktifasi account Anda gagal, silakan lakukan pendaftaran kembali.
			<?php } ?>
		</div>
	  </div>
	</div>
</div>
