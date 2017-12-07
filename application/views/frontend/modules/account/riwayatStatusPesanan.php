
<div class="container">
	<div class='my-bg-title'>
		<i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo $lang_riw; ?>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<?php $this->load->view('frontend/modules/account/sidebar_menu'); ?>
		</div>
		<div class="col-sm-9">

			<div class="row">

			    <div class='col-sm-4'>
			        <div class="form-group"><?php  echo $lang_start_date;?>
			            <div class="input-group date form_date" data-date="" data-date-format="dd-mm-yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
			                <input type='text' class="form-control" id='startDate' value='<?php if(isset($startDate)){ echo$startDate; } ?>'/>
                      <input type="hidden" id="dtp_input2" name="star_date"/>
			                <span class="input-group-addon">
			                    <span class="glyphicon glyphicon-calendar"></span>
			                </span>
			            </div>
			        </div>
			    </div>
					<div class='col-sm-4'>
			        <div class="form-group"><?php  echo $lang_to_date;?>
			            <div class="input-group date form_date" data-date="" data-date-format="dd-mm-yyyy" data-link-field="dtp_input3" data-link-format="yyyy-mm-dd">
			                <input type='text' class="form-control" id='endDate' value='<?php if(isset($endDate)){ echo$endDate; } ?>'/>
			                <input type="hidden" id="dtp_input3" name="end_date"/>
			                <span class="input-group-addon">
			                    <span class="glyphicon glyphicon-calendar"></span>
			                </span>
			            </div>
			        </div>
			    </div>
					<div class='col-sm-2'>
							<button type="button" class="btn btn-default" style='margin-top:27px' onclick='srcByDate()'><?php  echo $lang_btn_search;?></button>
					</div>
					<div class='col-sm-2' style='text-align:right;'>
							<div style='margin-top:30px'>Total list: <?php echo $total_list; ?></div>
					</div>
			</div>


			<style>
			.disabled {
			   pointer-events: none;
			   cursor: default;
			}
			</style>

			<div class="row"  style='width: 100%; margin:0 auto;'>
			    <div id="no-more-tables">
			        <table class="col-md-12 table-bordered table-striped table-condensed cf">
			        	<thead class="cf">
			        	  <tr>
			        		<th><?php echo $lang_tgl; ?></th>
			        		<th><?php echo $lang_tota; ?></th>
			        		<th><?php echo $lang_metod; ?></th>
			        		<th><?php  echo $lang_orde;?></th>
			        		<th>Status</th>
			        		<th>Detail</th>
			        		<th><?php  echo $lang_field_confirmation;?></th>
			        	  </tr>
			        	</thead>
			        	<tbody>
			        		<?php foreach($hasil as $items): 	?>
			        			<tr>
			        				<td data-title="Tanggal Order"><?php echo tanggal_time($items['waktuTransaksi']);?></td>
			        				<td data-title="Total Pembayaran">Rp.<?php if(isset($items['grandTotal'])){echo money($items['grandTotal']);}else{echo"0";}?></td>
			        				<td data-title="Metode Pembayaran"><?php echo $items['paymentMethod'];?></td>
			        				<td data-title="Nomor Pesanan"><?php echo $items['orderNumber'];?></td>
			        				<td data-title="Status"><?php echo $items['transactionStatus'];?></td>
			        				<td data-title="Detail"><?php echo anchor('account/formTransactionDetail/'.$items['idTransaksi'], 'Detail', array('class'=>'btn btn-info'));?></td>
			        				<td data-title="Konfirmasi/ Credit Card"><?php
			                                       //if($items['productId'])
			        					if($items['paymentMethod']=='Bank Transfer'){
			        						if($items['transactionStatus']=='PAID'){
			        							echo anchor('#', $lang_btn_confirm, array('class'=>'btn btn-warning disabled'));
			        						}else{
			        							echo anchor('account/confirm/'.$items['idTransaksi'], $lang_btn_confirm, array('class'=>'btn btn-warning'));
			        						}
			        					}elseif($items['paymentMethod']=='Online Payment-BCA KlikPay'){
			                                                    if($items['transactionStatus']=='PAID'){
			        							echo anchor('#', 'Paid', array('class'=>'btn btn-warning disabled'));
			        						}else{
			        							echo anchor('checkout/paymentByOnline/'.$items['idTransaksi'].'/'.$items['token'], 'Pay By Online Payment', array('class'=>'btn btn-warning'));
			        						}
			                                                }else{

			        						if($items['transactionStatus']=='PAID'){
			        							echo anchor('#', 'Paid', array('class'=>'btn btn-warning disabled'));
			        						}else{
			        							echo anchor('checkout/paymentByCreditCard/'.$items['idTransaksi'].'/'.$items['token'], 'Pay By Credit Card', array('class'=>'btn btn-warning'));
			        						}
			        					}
			        				?></td>
			        			</tr>
			        		<?php endforeach; ?>


			        	</tbody>
			        </table>
			  </div>

			</div>





<div class='my-paging'>
    <?php
    //paging menggunakan tanggal
		if($startDate and $endDate){


			if($page>1){
				$previous=$page-1;
				$first =  site_url('account/riwayatStatusPesanan/1/'.$startDate.'/'.$endDate);
				$prev =  site_url('account/riwayatStatusPesanan/'.$previous.'/'.$startDate.'/'.$endDate);
				echo "<a href=$first class='my-paging-btn'><< First</a> ";
				echo "<a href=$prev class='my-paging-btn'>< Previous</a> ";
			}else{
				echo"<< First < Previous ";
			}

			//angka awal
			$angka = ($page > 3 ? "...":"");
			for($i=$page-1;$i<$page;$i++){
				if($i<1)
					continue;
					$hal =  site_url('account/riwayatStatusPesanan/'.$i.'/'.$startDate.'/'.$endDate);
					$angka .="<a href=$hal class='my-paging-list'>$i</a>";

			}

			//angka tengah
			$angka.="<span class='my-paging-list-on'>$page</span>";
			for($i=$page+1;$i<($page+3);$i++){
				if($i>$jpage)
					break;
					$hal =  site_url('account/riwayatStatusPesanan/'.$i.'/'.$startDate.'/'.$endDate);
					$angka .="<a href=$hal class='my-paging-list'>$i</a>";
			}

			//angka akhir
			$hal =  site_url('account/riwayatStatusPesanan/'.$jpage.'/'.$startDate.'/'.$endDate);
			$angka .=($page+2<$jpage ? "...<a href=$hal class='my-paging-list'>$jpage</a>":"");

			//cetak semua angka
			echo "$angka";

			//next
			if($page<$jpage){
				$next = $page+1;
				$next =  site_url('account/riwayatStatusPesanan/'.$next.'/'.$startDate.'/'.$endDate);
				$last =  site_url('account/riwayatStatusPesanan/'.$jpage.'/'.$startDate.'/'.$endDate);
				echo " <a href=$next class='my-paging-btn'>Next >></a>";
				echo " <a href=$last class='my-paging-btn'>Last ></a>";
			}else{
				echo"Next >  Last >>";
			}

		}else{

			//paging tanpa tanggal
			if($page>1){
				$previous=$page-1;
				$first =  site_url('account/riwayatStatusPesanan/1');
				$prev =  site_url('account/riwayatStatusPesanan/'.$previous);
				echo "<a href=$first class='my-paging-btn'><< First</a> ";
				echo "<a href=$prev class='my-paging-btn'>< Previous</a> ";
			}else{
				echo"<< First < Previous ";
			}

			//angka awal
			$angka = ($page > 3 ? "...":"");
			for($i=$page-1;$i<$page;$i++){
				if($i<1)
					continue;
					$hal =  site_url('account/riwayatStatusPesanan/'.$i);
					$angka .="<a href=$hal class='my-paging-list'>$i</a>";

			}

			//angka tengah
			$angka.="<span class='my-paging-list-on'>$page</span>";
			for($i=$page+1;$i<($page+3);$i++){
				if($i>$jpage)
					break;
					$hal =  site_url('account/riwayatStatusPesanan/'.$i);
					$angka .="<a href=$hal class='my-paging-list'>$i</a>";
			}

			//angka akhir
			$hal =  site_url('account/riwayatStatusPesanan/'.$jpage);
			$angka .=($page+2<$jpage ? "...<a href=$hal class='my-paging-list'>$jpage</a>":"");

			//cetak semua angka
			echo "$angka";

			//next
			if($page<$jpage){
				$next = $page+1;
				$next =  site_url('account/riwayatStatusPesanan/'.$next);
				$last =  site_url('account/riwayatStatusPesanan/'.$jpage);
				echo " <a href=$next class='my-paging-btn'>Next >></a>";
				echo " <a href=$last class='my-paging-btn'>Last ></a>";
			}else{
				echo"Next >  Last >>";
			}


		}







  ?>
  </div>
		</div>
	</div>
</div>
<script>
function srcByDate(){
	var startDate = $('#startDate').val();
	var endDate = $('#endDate').val();
	var page = "<?php if($page){echo$page;}else{echo"1";} ?>";
	if(startDate==""){

		$.dialog({
			title: 'Alert!',
			content: 'Masukan tanggal awal dengan benar.',
			autoClose: 'close|50000',
			buttons: {
				close: function () {
					//$.alert('action is canceled');
				}
			},
			closeIcon: true,
			closeIconClass: 'fa fa-close'

		});

	}else if(endDate==""){

		$.dialog({
			title: 'Alert!',
			content: 'Masukan tanggal akhir dengan benar.',
			autoClose: 'close|50000',
			buttons: {
				close: function () {
					//$.alert('action is canceled');
				}
			},
			closeIcon: true,
			closeIconClass: 'fa fa-close'

		});

	}else if(endDate==startDate){

		$.dialog({
			title: 'Alert!',
			content: 'Tanggal awal dan tanggal akhir tidak boleh sama.',
			autoClose: 'close|50000',
			buttons: {
				close: function () {
					//$.alert('action is canceled');
				}
			},
			closeIcon: true,
			closeIconClass: 'fa fa-close'

		});

	}else if(endDate<=startDate){

		$.dialog({
			title: 'Alert!',
			content: 'Tanggal akhir tidak boleh lebih besar dari tanggal awal.',
			autoClose: 'close|50000',
			buttons: {
				close: function () {
					//$.alert('action is canceled');
				}
			},
			closeIcon: true,
			closeIconClass: 'fa fa-close'

		});

	}else{
		location.href = base_url+'account/riwayatStatusPesanan/'+page+'/'+startDate+'/'+endDate;
	}


}
</script>

<!-- <script>
$(document).ready(function() {

	$.ajax
	({
	url: "<?php // echo site_url('account/listRiwayatStatusPesanan'); ?>",
	success:function(html){
			$(".listRiwayatStatusPesanan").html(html);
		}
	});

});
</script> -->
