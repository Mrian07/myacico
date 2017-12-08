<style>
.disabled {
   pointer-events: none;
   cursor: default;
}
</style>

<p align="center"><?php echo $lang_riw; ?></p>


<div class="row"  style='width: 100%; margin:0 auto;'>
    <div id="no-more-tables">
        <table class="col-md-12 table-bordered table-striped table-condensed cf">
        	<thead class="cf">
        	  <tr>
        		<th><?php echo $lang_tgl; ?></th>
        		<th><?php echo $lang_tota; ?></th>
        		<th><?php echo $lang_metod; ?></th>
        		<th><?php  echo $lang_btn_confirm;?></th>
        		<th>Status</th>
        		<th>Detail</th>
        		<th><?php  echo $lang_field_confirmation;?></th>
        	  </tr>
        	</thead>
        	<tbody>
        		<?php foreach($hasil as $items): 	?>
        			<tr>
        				<td data-title="Tanggal Order"><?php echo tanggal_time($items['waktuTransaksi']);?></td>
        				<td data-title="Total Pembayaran">Rp.<?php echo money($items['grandTotal']);?></td>
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

