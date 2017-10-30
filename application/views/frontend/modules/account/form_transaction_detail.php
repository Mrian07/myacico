<div class='my-bg-title'>
	<div class="container">
		<div class="row">
		  <div class="col-sm-12">

			<i class="fa fa-angle-right" aria-hidden="true"></i> Detail Pesanan

		  </div>
		</div>
	</div>
</div>

<div class="container my-container-white">
	<div class="row">
		<div class="col-sm-3">
                    <input type="hidden" id = "idtrans" name="idtrans"  value="<?php echo $hasil['idTransaksi'];?>" />
			<?php $this->load->view('frontend/modules/account/sidebar_menu'); ?>
		</div>
		<div class="col-sm-9">
			<p><?php echo anchor('account/riwayatStatusPesanan', '<i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Kembali');?></p>

			<div class="panel panel-default">
				<div class="panel-body">
						<table class="table table-striped"><thead><tr><th>Nama Barang</th><th>Invoice Number</th><th>Order Number</th><th>Payment Method</th><th>Image</th><th>Jumlah Harga</th></tr></thead>
							<tbody><tr><td><?php echo $hasil['items'][0]['name']; ?></td><td><?php echo $hasil['invoiceNumber']; ?></td><td><?php echo $hasil['orderNumber']; ?></td><td>
								<?php echo $hasil['paymentMethod']; ?></td><td><img class="group list-group-image" src="<?php echo $hasil['items'][0]['imageurl']; ?>" alt="..." style:border="0" height="100"></td><td>Rp.<?php echo money($hasil['grandTotal']); ?>
								</td></tr></tbody></table>
                                   <!--<img class='group list-group-image' src='http://api.myacico.co.id/myacico-service/transaction/file/270?key=eyJhbGciOiJIUzI1NiJ9.eyJVc2VyRGF0YSI6eyJuYW1lIjoiQnVkaSBLdXN1bWEiLCJlbWFpbCI6ImJ1ZGkua3VzdW1hQG1lLmNvbSIsInJvbGUiOiJCMkMiLCJhdmF0YXIiOiJodHRwOi8vd3d3Lm5ld3NzaGFyZS5pbi93cC1jb250ZW50L3VwbG9hZHMvMjAxNy8wNC9NaW5pY2xpcC04LUJhbGwtUG9vbC1BdmF0YXItOC5wbmciLCJ1c2VySWQiOjEwMDAxNDN9LCJpc3MiOiJidWRpLmt1c3VtYUBtZS5jb20iLCJzdWIiOiJCdWRpIEt1c3VtYSIsImF1ZCI6IkIyQyIsImV4cCI6MTUwOTQzMjA2OSwiaWF0IjoxNTA4ODI3MjY5LCJqdGkiOiIxMDAwMTQzIn0.BB90WSNp9U_NRm3MNVcBOJhTsHbQWKNM4z-bJARwPcY'  alt='...' style:border='0' height='100'>-->
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
//    var apiGet = api_base_url +"/transaction/file/"+idTrans;
    console.log('data1',apiGet);
$.ajax({
    type:"GET",
    headers:{"token":token},
//    dataType: "image/png",
   // contentType: "image/png",
    //beforeSend: getAdd(),
    success: function(data){
       console.log('data:',data);

//$('.buktiTrans').html('<img src="data:image/png;base64,' + encodedResponse + '" />');
      $(".buktiTrans").append("<div><h6>Berikut adalah Bukti transfer: </br></div><a href='"+apiGet+"' target='_blank'><img class='group list-group-image' src='"+apiGet+"' alt='...' style:border='0' height='100'></a>");
//
        },
       error: function(error, data) {
      console.log('asd',data);
//      console.log('error');
    },
    url: apiGet});

</script>
