<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <div class="box-title">
				<?php echo anchor($btn_data, '<i class="fa fa-angle-double-left" aria-hidden="true"></i> '.$nm_btn_data, array('class'=>'btn btn-sm btn-info btn-flat pull-left'));?></div>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
		
			<!-- pesan flash message start -->
			<?php $flash_pesan = $this->session->flashdata('pesan')?>
			<?php if (! empty($flash_pesan)) : ?>			   
			<?php echo $flash_pesan; ?>
			<?php endif ?>
			<!-- pesan flash message end -->
		
			<div class='title_field animated fadeInUp'>Pengirim</div>
				<div class='value_field animated fadeInUp'>
					<div class="field-body">
						<div class="form-group">
							<label class='col-sm-3 control-label'>Username</label>	
							<div class='col-sm-9'>	
								<input type="text" class="form-control" disabled value="<?php echo $username; ?>">	
							</div>	
							<div style="clear: both"></div>
						</div>
					
						<div class='form-group'>
							<label class='col-sm-3 control-label'>Tanggal Submit</label>
							<div class='col-sm-9'>	
								<input type="text" class="form-control" disabled value="<?php echo tanggal($quotation_submit_date); ?>">	
							</div>	
							<div style="clear: both"></div>
						</div>
						<div class="form-group">
							<label class='col-sm-3 control-label'>Type</label>	
							<div class='col-sm-9'>	
								<input type="text" class="form-control" disabled value="<?php echo $quotation_type; ?>">	
							</div>	
							<div style="clear: both"></div>
						</div>
						<div class="form-group">
							<label class='col-sm-3 control-label'>Kode</label>	
							<div class='col-sm-9'>	
								<input type="text" class="form-control" disabled value="<?php echo $quotation_number; ?>">	
							</div>	
							<div style="clear: both"></div>
						</div>
						<div class="form-group">
							<label class='col-sm-3 control-label'>File</label>	
							<div class='col-sm-9'>	
								<a href='<?php echo $url_customer.'/file/'.$quotation_file; ?>' target='_blank' class='btn btn-sm btn-success'><i class="fa fa-cloud-download" aria-hidden="true"></i>
 Download File</a>	
							</div>	
							<div style="clear: both"></div>
						</div>
					
						
					</div>
				</div>	
		
		</div><!-- /.box-body -->
		<div class="box-body">
		
			<form class='form-horizontal' action='<?=base_url($form_action)?>' method='POST' enctype='multipart/form-data' id='post-form' role='form' name='submit'>
			<div class='title_field animated fadeInUp'><?php echo$title_form; ?></div>
			<div class='value_field animated fadeInUp'>			
				<input type='hidden' name='quotation_id' <?php if(isset($quotation_id)){ echo"value='$quotation_id'"; } ?>>
				<input type='hidden' name='quotation_number' <?php if(isset($quotation_number)){ echo"value='$quotation_number'"; } ?>>

					<div class='form-group'>
						<label class='col-sm-2 control-label' for='image'>Upload File</label>
						<div class='col-sm-10'>
							<div class='input-group'>
								<span class='input-group-btn'>
									<span class='btn btn-primary btn-file'>
										Browse&hellip; <input type='file' name='image' id='file' multiple>
									</span>
								</span>
								<input type='text' class='form-control' readonly>
							</div>
						</div>
					</div>
			
					<div style="clear: both"></div>
			
			</div>
		
		</div><!-- /.box-body -->
		
		<div class="box-body">

		    <div class="row animated rollIn"  style='width: 100%; margin:0 auto;'>
		        <div id="no-more-tables">
		            <table class="col-md-12 table-bordered table-striped table-condensed cf">
		        		<thead class="cf">
		        			<tr>
		        				<th>No</th>
								<th>Update</th>	
								<th>Download</th>
								<th>Hapus</th>
		        			</tr>
		        		</thead>
		        		<tbody>
						
							<?php
							$no = 1;
							foreach ($hasil as $data):
							$id = $this->encrypt->encode($data->quotation_id,$keyUrl);
							$id = setUrl($id);
							
							$id_sub = $this->encrypt->encode($data->quotation_feedback_id,$keyUrl);
							$id_sub = setUrl($id_sub);
							?>
							<tr>
								<td data-title="No"> <?php echo $no; ?> </td>
								<td data-title="Update"> <?php echo tanggal_time($data->quotation_feedback_submit_date); ?></td>		
								<td data-title="Download"><?php echo anchor('file/'.$data->quotation_feedback_file.'', '<button type="button" class="btn btn-warning btn-sm"><i class="fa fa-cloud-download" aria-hidden="true"></i> Download</button>');?></td>	
								<td data-title="Hapus"><?php 
									echo anchor('backend/deleteQuotationFeedback/'.$id.'/'.$id_sub, '<button type="button" class="btn btn-danger btn-sm"><span class=\'glyphicon glyphicon-trash\'></span> Hapus</button>', array('onclick' => "return confirm('Anda yakin akan menghapus data ini?')"));
								?></td>
							</tr>
							<?php
							$no++;
							endforeach;
							?>
						
			
		        		</tbody>
		        	</table>
		        </div>
		    </div>

		</div><!-- /.box-footer-->

		<div class="box-footer">
            <input type='submit' onclick="return submitForm('post-form')" class='btn btn-sm btn-primary' value='<?php echo$nm_button_form; ?>' name='submit'> <?php echo anchor($btn_data, $nm_button_form2,array('class' => 'btn btn-sm btn-primary')); ?>
			</form>
        </div><!-- /.box-footer-->
    </div><!-- /.box -->
</section><!-- /.content -->     
   

