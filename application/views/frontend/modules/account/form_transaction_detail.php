<div class="container">
	<div class='my-bg-title'>
		<i class="fa fa-angle-right" aria-hidden="true"></i> Detail Pesanan
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-3">
                    <input type="hidden" id = "idtrans" name="idtrans"  value="<?php echo $hasil['idTransaksi'];?>" />
			<?php $this->load->view('frontend/modules/account/sidebar_menu'); ?>
		</div>
		<div class="col-sm-9">
			<p><?php echo anchor('account/riwayatStatusPesanan', '<i class="fa fa-angle-double-left" aria-hidden="true"></i> Kembali', array('class'=>'btn-back'));?></p>
			<div class="panel panel-default">
				<div class="panel-body">
						<table class="table table-striped"><thead><tr><th>Detail Barang</th><th>Invoice Number</th><th>Order Number</th><th>Payment Method</th><th>Jumlah & Harga</th></tr></thead>
							<tbody>
								<?php foreach($hasil['items'] as $data){
									?>
								<tr><td><img class="group list-group-image" src="<?php echo $data['imageurl']; ?>" alt="..." style:border="0" height="100"><br>
									<b>SKU: <?php echo $data['sku']; ?></b><br>
									<?php echo $data['name']; ?></td><td><?php echo $hasil['invoiceNumber']; ?></td><td><?php echo $hasil['orderNumber']; ?></td><td>
								<?php echo $hasil['paymentMethod']; ?></td><td>Qty(<?php echo $data['qty']; ?>)<br>Rp.<?php echo money($hasil['grandTotal']); ?>
								</td></tr>
							<?php } ?>
							</tbody></table>

				<div class="buktiTrans"></div>
                                </div>
			</div>

		</div>

	</div>
</div>
<script type="text/javascript">
     var idTrans=$("#idtrans").val();
     var token = document.cookie.split('x-auth=')[1].split(';').shift();
    var apiGet = api_base_url +"/transaction/file/"+idTrans+"?key="+token;

    console.log('data1',apiGet);
$.ajax({
    type:"GET",
    headers:{"token":token},
    success: function(data){

			if(data){
	      $(".buktiTrans").append("<div><h6>Berikut adalah Bukti transfer: </br></div><a href='"+apiGet+"' target='_blank'><img class='group list-group-image' src='"+apiGet+"' alt='...' style:border='0' height='100'></a>");
			}
        },
       error: function(error, data) {
      console.log('asd',data);
    },
    url: apiGet});

</script>
