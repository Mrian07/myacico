<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-12">
			
		
			
			<!-- Default box -->
			<div class="box">
				<div class="box-header with-border">
					<div class="box-title">
						<?php echo anchor($btn_back, '<i class="fa fa-angle-double-left" aria-hidden="true"></i> '.$nm_btn_back, array('class'=>'btn btn-sm btn-info btn-flat pull-left'));?></div>
					<div class="box-tools pull-right">
						<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
						<button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
					</div>
				</div>
				<div class="box-body">

					<!-- pesan start -->
					<?php $flash_pesan = $this->session->flashdata('pesan')?>
					<?php if (! empty($flash_pesan)) : ?>
					<?php echo $flash_pesan; ?>
					<?php endif ?>
					<!-- pesan end -->

					<form role="form" method="post" action="<?php echo"$form_action"; ?>" name='submit'>
					<input type="hidden" name="code" value="<?php echo$form_value['code']; ?>">	
					<input type="hidden" name="expiration_date" value="<?php echo$form_value['expiration_date']; ?>">	
					<input type="hidden" name="discount_amount" value="<?php echo money($form_value['discount_amount']); ?>">	
					<div class='title_field animated fadeInUp'>Formulir Kirim Kupon</div>
					<div class='value_field animated fadeInUp'>
						<div class="field-body">
							<div class='form-group'>
								<label class='col-sm-3 control-label'>Tanggal Crate:</label>
								<div class='col-sm-9'>	
									<input type="text" class="form-control" disabled value="<?php echo tanggal_time($form_value['created_at']); ?>">	
								</div>	
								<div style="clear: both"></div>
							</div>
							<div class="form-group">
								<label class='col-sm-3 control-label'>Tanggal Expire:</label>	
								<div class='col-sm-9'>	
									<input type="text" class="form-control" disabled value="<?php echo tanggal_time($form_value['expiration_date']); ?>">	
								</div>	
								<div style="clear: both"></div>
							</div>
							<div class="form-group">
								<label class='col-sm-3 control-label'>Kode Kupon:</label>	
								<div class='col-sm-9'>	
									<input type="text" class="form-control" disabled value="<?php echo $form_value['code']; ?>">	
								</div>	
								<div style="clear: both"></div>
							</div>
							<div class="form-group">
								<label class='col-sm-3 control-label'>Nilai Kupon:</label>	
								<div class='col-sm-9'>	
									<input type="text" class="form-control" disabled value="<?php echo money($form_value['discount_amount']); ?>">	
								</div>	
								<div style="clear: both"></div>
							</div>
							<div class="form-group">
								<label class='col-sm-3 control-label'>Email:</label>
								<div class='col-sm-9'>
								<input type="email" class="form-control" name="email" required placeholder="Masukan email penerima kupon">
								</div>
							</div>
						
							<div style="clear: both"></div>
						</div>
					</div>	
				</div><!-- /.box-body -->
				<div class="box-footer">
					<?php echo"<input type='submit' class='btn btn-sm btn-primary' value='Kirim' name='submit'>
					</form>"; ?>
				</div><!-- /.box-footer-->
			</div><!-- /.box -->

		</div>
	</div>		
</section><!-- /.content -->
