<div class="container">
	<div class='my-bg-title'>
		<i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo $lang_addDres;?>
	</div>

	<div class="row">
		<div class="col-sm-3">
			<?php $this->load->view('frontend/modules/account/sidebar_menu'); ?>
		</div>
		<div class="col-sm-9">
			<?php echo anchor('account/TambahBukuAlamat', '<i class="fa fa-plus-square" aria-hidden="true"></i>'.$lang_addDres, array('class'=>'btn-back'));?>
			<br/><br/>
			<!-- pesan start -->
			<?php $flash_pesan = $this->session->flashdata('pesan')?>
			<?php if (! empty($flash_pesan)) : ?>
			<?php echo $flash_pesan; ?>
			<?php endif ?>
			<!-- pesan end -->
		<!-- <div class='listBukuAlamat'><center><img src='<?php echo base_url('images/general/loading.gif');?>' border='0'></center></div> -->

		<?php if($jmlData){
			?>
		<p><?php echo $lang_dibwh; ?></p>
		<div class="panel panel-default">
		<table class="table">
			<thead>

				<tr>
				<th><?php echo $lang_Pen; ?></th>
				<th><?php echo $lang_alam; ?></th>
				<th><?php echo $lang_pho ; ?></th>
				<th><?php echo $lang_add_edit ; ?></th>
				<th><?php echo $lang_wishlist_del ; ?></th>
				</tr>

			</thead>
			<tbody>
				<?php
				$i=0;
				foreach($hasil as $items):
				if($items['address1']==null || $items['address1']=='')
				{
					$add2='';
				}
				else{
					$add2=$items['address1'];
				}
				?>

					<tr>
						<td><?php echo $items['name']; ?></td>
						<td><?php echo $items['address_name'].", ".$items['address1']." ".$add2." ".$items['city_name']." ".$items['postal']; ?></td>
						<td><?php echo $items['phone']?></td>
						<td><?php if($items['isbillto']=='Y'){?>
								<?php echo anchor('account/formBilling/'.$items['id'], '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', array('class'=>'btn btn-info'));?>
						<?php }else{?>
							<?php echo anchor('account/editBukuAlamat/'.$items['id'], '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', array('class'=>'btn btn-info'));?>
						<?php } ?>
						</td>
						<td><?php if($items['isbillto']=='Y'){echo"-";}else{ ?><a href='#' onClick="dellBukuAlamat('<?php echo $items['id']; ?>','<?php echo $items['address1']; ?>')" class='btn btn-danger'>
							<i class='fa fa-trash' aria-hidden='true'></i></a><?php } ?>
						</td>
					</tr>
				<?php if ($i++ == 9) break;
										endforeach; ?>


			</tbody>
		</table>
		</div>
	<?php
}else{ echo"<div class='alert alert-warning produk-kosong' style='border-radius:0px; border:0px; border-left:5px solid #dbd19e;'>List buku alamat masih kosong</div>"; } ?>

		</div>
	</div>

</div>

<script type="text/javascript">

function dellBukuAlamat(id,address1){
	var token = document.cookie.split('x-auth=')[1].split(';').shift();
	var apiurl = api_base_url + '/aduser/deleteaddress';

	$.confirm({
		title: 'Alert!',
		content: 'Alamat ('+address1+') akan dihapus?',
		autoClose: 'cancel|10000',
		closeIcon: true,
		closeIconClass: 'fa fa-close',
		buttons: {
			confirm: function () {
				//untuk cart yang di header
				$.ajax
				({

					type: "POST",
					contentType: "application/json",
				//	method: "POST",
					url: apiurl,
					headers:{ "token":token},
					data: '{"id": "' + id+ '"}',
					success:function(data){
						// $(".listBukuAlamat").html(html);
					  window.location.replace(base_url+"/account/bukuAlamat");
					}
				});

			},
			cancel: function () {
				//$.alert('Canceled!');
			}
		}

	});

}
</script>
