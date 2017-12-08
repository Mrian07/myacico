
<div class="container">
	<div class='my-bg-title'>
		<i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo $lang_datkun; ?>
	</div>
</div>


<div class="container my-container-white">
	<div class="row">
		<div class="col-sm-3">
			<?php $this->load->view('frontend/modules/account/sidebar_menu'); ?>
		</div>
		<div class="col-sm-9">
			
			<?php $flash_pesan = $this->session->flashdata('pesan')?>
			<?php if (! empty($flash_pesan)) : ?>
			<?php echo $flash_pesan; ?>
			<?php endif ?>


			<div class="row">
				<div class="col-sm-4">
					<div class="panel panel-default">
					  <div class="panel-heading"><strong><?php echo $lang_inf_name; ?></strong></div>
					  <div class="panel-body"><?php echo $user->name; ?>, <?php echo $user->email; ?><br><br><center>
					  <?php echo anchor('account/formAccount/', $lang_btn_update, array('class'=>'btn btn-default'));?></center>
					  </div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="panel panel-default">
					  <div class="panel-heading"><strong><?php echo $lang_gant; ?></strong></div>
					  <div class="panel-body"><?php echo $lang_fyou; ?><br><br><center>
					  <?php echo anchor('account/formPassword/', $lang_btn_update, array('class'=>'btn btn-default'));?>
					</center>
					  </div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading"><strong><?php echo $lang_bil; ?></strong></div>
						<div class="panel-body">
						<?php
						if(isset($alamat_billing)){
							echo $alamat_billing;
							echo "<br><br><center>";
							echo anchor('account/formBilling/'.$id_billing, $lang_btn_update, array('class'=>'btn btn-default')); echo"</center>";
						}else{
							echo $lang_bils."
						<br><br><center>";
							echo anchor('account/formAddBilling/', $btn_nih, array('class'=>'btn btn-default')); echo"</center>";
						}?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
	$('#alertSubmit2').show('slow').delay(5000).hide('slow');
});
</script>
