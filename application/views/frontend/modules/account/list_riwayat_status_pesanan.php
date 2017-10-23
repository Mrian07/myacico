<style>
.disabled {
   pointer-events: none;
   cursor: default;
}
</style>
<p>Dibawah ini adalah daftar buku alamat penerima pesanan. Anda bisa menambahkan alamat baru atau mengubah alamat sebelumnya dengan alamat yang lain.</p>
<div class="panel panel-default">
<table class="table">
	<thead>

	  <tr>
		<th>Tanggal Order</th>
		<th>Total Pembayaran</th>
		<th>Metode Pembayaran</th>
		<th>Nomor Pesanan</th>
		<th>Status</th>
		<th>Detail</th>
		<th>Konfirmasi/ Credit Cart</th>
	  </tr>

	</thead>
	<tbody>
		<?php foreach($hasil as $items):	?>
			<tr>
				<td><?php echo tanggal_time($items['waktuTransaksi']);?></td>
				<td>Rp.<?php echo money($items['grandTotal']);?></td>
				<td><?php echo $items['paymentMethod'];?></td>
				<td><?php echo $items['orderNumber'];?></td>
				<td><?php echo $items['transactionStatus'];?></td>
				<td><?php echo anchor('account/formTransactionDetail/'.$items['idTransaksi'], 'Detail', array('class'=>'btn btn-info'));?></td>
				<td><?php
					if($items['paymentMethod']=='Bank Transfer'){
						if($items['transactionStatus']=='PAID'){
							echo anchor('#', 'Konfirmasi', array('class'=>'btn btn-warning disabled'));
						}else{
							echo anchor('account/confirm/'.$items['idTransaksi'], 'Konfirmasi', array('class'=>'btn btn-warning'));
						}
					}else{

						if($items['transactionStatus']=='PAID'){
							echo anchor('#', 'Paid', array('class'=>'btn btn-warning disabled'));
						}else{
							echo anchor('checkout/paymentByCreditCard/'.$items['idTransaksi'].'/'.$items['token'], 'Pay By Credit Cart', array('class'=>'btn btn-warning'));
						}



					}
				?></td>
			</tr>
		<?php endforeach; ?>


	</tbody>
</table>
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
