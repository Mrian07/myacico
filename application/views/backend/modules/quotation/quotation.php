<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">

        <div class="box-body">

		<!-- pesan flash message start -->
		<?php $flash_pesan = $this->session->flashdata('pesan')?>
		<?php if (! empty($flash_pesan)) : ?>			   
		<?php echo $flash_pesan; ?>
		<?php endif ?>
		<!-- pesan flash message end -->

		    <div class="row animated rollIn"  style='width: 100%; margin:0 auto;'>
		        <div id="no-more-tables">
		            <table class="col-md-12 table-bordered table-striped table-condensed cf">
		        		<thead class="cf">
		        			<tr>
		        				<th>No</th>
								<th>Update</th>	
								<th>Type</th>
		        				<th>Nomor</th>
								<th>Feedback</th>
		        			<!--	<th>Hapus</th>-->
		        			</tr>
		        		</thead>
		        		<tbody>
						
							<?php
							$no = 1;
							foreach ($hasil as $data):
							$id = $this->encrypt->encode($data->quotation_id,$keyUrl);
							$id = setUrl($id);
							?>
							<tr>
								<td data-title="No"> <?php echo $no; ?> </td>
								<td data-title="Update"> <?php echo tanggal_time($data->quotation_submit_date); ?></td>	
								<td data-title="Type"> <?php echo $data->quotation_type; ?></td>	
								<td data-title="Nomor"> <a href='<?php echo $url_customer.'/file/'.$data->quotation_file; ?>' target='_blank'><?php echo $data->quotation_number; ?></a></td>	
								<td data-title="Feedback"><?php echo anchor('backend/detailQuotation/'.$id.'', '<button type="button" class="btn btn-default btn-sm"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Proses</button>');?></td>	
							<!--	<td data-title="Hapus"><?php 
									echo anchor('backend/deleteQuotation/'.$id.'', '<button type="button" class="btn btn-default btn-sm"><span class=\'glyphicon glyphicon-trash\'></span> Hapus</button>', array('onclick' => "return confirm('Anda yakin akan menghapus data ini?')"));
								?></td>-->
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
    </div><!-- /.box -->
</section><!-- /.content -->  
