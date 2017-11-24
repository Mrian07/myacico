
<div class="container">
    <div class="row">
	  <div class="col-sm-12"><br>
		<div class='border-create'>
			<?php if($hasil['status']=='1'){?>
				<h4>Aktivasi account anda berhasil. </h4><h5><?php echo anchor('customer/signIn','click disini untuk login.'); ?></h5>
			<?php }else{ ?>
				<h4>Maaf aktivasi account Anda gagal, silakan lakukan pendaftaran kembali.</h4>
				
			<?php } ?>
		</div>
	  </div>
	</div>
</div>
