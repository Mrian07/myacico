<style>
.disabled {
   pointer-events: none;
   cursor: default;
}
</style>
<p>Dibawah ini adalah daftar buku alamat penerima pesanan. Anda bisa menambahkan alamat baru atau mengubah alamat sebelumnya dengan alamat yang lain.</p>
<div class="row"  style='width: 100%; margin:0 auto;'>
    <div id="no-more-tables">
        <table class="col-md-12 table-bordered table-striped table-condensed cf">
        	<thead class="cf">

        	  <tr>
        		<th>Tanggal Order</th>
        		<th>Total Pembayaran</th>
        		<th>Metode Pembayaran</th>
        		<th>Nomor Pesanan</th>
        		<th>Status</th>
        		<th>Detail</th>
        		<th>Konfirmasi/ Credit Card</th>
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
        							echo anchor('#', 'Konfirmasi', array('class'=>'btn btn-warning disabled'));
        						}else{
        							echo anchor('account/confirm/'.$items['idTransaksi'], 'Konfirmasi', array('class'=>'btn btn-warning'));
        						}
        					}elseif($items['paymentMethod']=='Online Payment-Klikpay BCA'){
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
</div><br><br>
<script type="text/javascript">
console.log("data",);
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
				({	type: "POST",
					url: apiurl,
					headers:{ "token":token},
					data: '{"id": "' + id+ '"}',
					success:function(data){
						$(".listBukuAlamat").html(html);
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
