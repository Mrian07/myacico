<div class="container">
	<div class="row">
	  <div class="col-sm-12">
		<div class="my-border-title">
			<h3 class='my-title-page'><i class="fa fa-dot-circle-o" aria-hidden="true"></i> INFORMASI AKUN</h3>
		</div>
	  </div>
	</div> 
	
	<div class="row">
		<div class="col-sm-3">
			<?php $this->load->view('frontend/modules/account/sidebar_menu'); ?>
		</div>
		<div class="col-sm-9">
		
			<div class="row">
				<div class="col-sm-6">
					<div class="panel panel-default">
					  <div class="panel-heading"><strong>Data Diri</strong></div>
					  <div class="panel-body"><?php echo $user->name; ?>, <?php echo $user->email; ?>
					  <div class='my-btn-general'><?php echo anchor('customer/government/', 'Ubah', array('class'=>'my-link-general'));?></div>
					  </div>
					</div>			
				</div>
				<div class="col-sm-6">
					<div class="panel panel-default">
					  <div class="panel-heading"><strong>Ganti Password</strong></div>
					  <div class="panel-body">Jika ingin mengganti password login click button dibawah ini.
					  <div class='my-btn-general'><?php echo anchor('account/formPassword/', 'Ubah', array('class'=>'my-link-general'));?></div>
					  
					  </div>
					</div>		
				</div>
			</div>	
		</div>
	</div>
</div>
<script type="text/javascript">
var baseApiUrl = '<?php echo $baseApiUrl; ?>';

$(document).ready(function() {
//  var hasil = document.cookie.split('x-auth=')[1].split(';').shift();
 // alert(hasil);
});
</script>
