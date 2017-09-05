<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<!-- Default box -->
			<div class="box">
				<div class="box-body">

					<!-- pesan start -->
					<?php $flash_pesan = $this->session->flashdata('pesan')?>
					<?php if (! empty($flash_pesan)) : ?>
							<?php echo $flash_pesan; ?>
					<?php endif ?>
					<!-- pesan end -->
				
					<div class="row"  style='width: 100%; margin:0 auto;'>
						<div id="no-more-tables">
							<table class="col-md-12 table-bordered table-striped table-condensed cf">
								<thead class="cf">
									<tr>       
										<th>Create</th>
										<th>Expire</th>
										<th>Kupon</th>
										<th>Nilai</th>
										<th>Kirim</th>
									</tr>
								</thead>
								<tbody>
								
									<?php
									$jml=0;
									foreach ($hasil as $data):
									$jml = count($this->kupon->cari_kode($data->code));
									if($jml==0){
									?>
									<tr>
										<td data-title="Create"> <?php echo tanggal_time($data->created_at); ?></td>
										<td data-title="Expired"> <?php echo tanggal_time($data->expiration_date); ?></td>
										<td data-title="Kupon"> <?php echo $data->code; ?></td>
										<td data-title="Nilai"> <?php echo money($data->discount_amount); ?></td>
										<td data-title="Kirim"><?php echo anchor('backend/kuponKirim/'.$data->coupon_id.'', '<button type="button" class="btn btn-info btn-sm">Kirim</button>');?></td>	
									</tr>
									<?php
									}
									endforeach;
									?>
								

								</tbody>
							</table>
						</div>
					</div>
				</div>
				
			</div><!-- /.box -->
		</div>
	</div>		
</section><!-- /.content -->
