
<!-- style baru -->
<style type="text/css">
		.cart-container {
			width: 1200px;
			padding: 10px;
			font-family: 'arial';
      margin:0px auto;
		}
		.box-left{
			float: left;
			width: 75%;
		}
		.box-right{
			float: right;
			width: 22.5%;

		}
		.cart-list-left{
			min-height: 100px;
			border : 1px solid #ccc;
			/*border-radius: 10px;*/
      margin-bottom:10px;
		}
		.cart-list-right{
			min-height: 430px;
			padding: 10px;
			border : 1px solid #ccc;
			border-radius: 10px;
      margin-bottom:10px;
		}
    .cart-list-right2{
			min-height: 230px;
			padding: 10px;
			border : 1px solid #ccc;
			border-radius: 10px;
      margin-bottom:10px;
		}
		.table{

			border-collapse: collapse;
			width: 100%;
			height: 150px;
			border-radius: 5px;
			padding: 10px;
		}
		.table .td{
			border-right : 1px solid #ccc;
			border-bottom : 1px solid #ccc;
			min-height: 60px;
			padding: 5px;
		}
		.table .ts{
			border-bottom : 1px solid #ccc;
			min-height: 60px;
			padding: 5px;
		}
		.table .tc{
			min-height: 60px;
			padding: 5px;
		}
		.table .ta{
			border-right : 1px solid #ccc;
			min-height: 60px;
			padding: 5px;
		}
		.img-cont{
			height: 60px;
			width: 60px;
			border : 1px solid #ccc;
			float: left;
			overflow: hidden;
		}
		.prod-info{
			float: left;
			width: 400px;
			height: 60px;
			margin-left: 5px;
			padding-top: 5px;
		}
		.prod-cont{
			width: 160px;
			min-height: 40px;
			text-align: left;
			font-size: 10px;
			color: #666;
		}
		.other-info{
			width: 160px;
			height: 20px;
			text-align: center;
			font-weight: bold;
			font-size: 11px;
			color: #666;
		}
		.other-cont{
			width: 160px;
			min-height: 40px;
			text-align: center;
			font-size: 10px;
			color: #666;
		}
		.other-cont2{
			width: 80px;
			height: 40px;
			text-align: center;
			font-size: 10px;
			color: #666;
		}
		.other-info2{
			width: 80px;
			height: 20px;
			text-align: center;
			font-size: 10px;
			font-weight: bold;
			color: #666;
		}
		.other-info3{
			width: 50%;
			height: 25px;
			text-align: left;
			font-size: 12px;
			color: #666;
			float: left;
			padding-top: 5px;
		}
		.other-info4{
			width: 50%;
			height: 25px;
			text-align: right;
			font-size: 12px;
			color: #666;
			float: right;
			padding-top: 5px;
			font-weight: bold;
		}
		.prodname{
			font-size: 12px;
			color: red;
		}
		.quantity{
			font-size: 12px;
			color: black;
		}
		.SKU{
			font-size: 12px;
			color: grey;
		}
		.totalfee{
			margin-top: 10px;
			width: 100%;
			border : 1px solid #ccc;
			/*border-radius: 10px;*/
		}
		.totalsub{
			display: inline-block;
			font-size: 12px;
			color: #666;
			width: 18%;
			text-align: center;
			font-weight: bold;
		}
		.totalsub2{
			display: inline-block;
			font-size: 14px;
			color: #666;
			margin-left: 10px;
			border-left: 1px solid #ccc;
			padding-left: 10px;
			width: 18%;
			font-weight: bold;
		}
		.red{
			color: red;
		}
		.right-title{
			font-weight: bold;
			color: #666;
		}
    .right-title-sub{
      margin-top:100px;
      margin-bottom:5px;
			font-weight: bold;
			color: #666;
		}
		.method p{
			font-weight: bold;
			color: #666;
		}
		.segmen{
			float: left;
			width: 10%;
			height: 40px;
			padding-top: 10px;
		}
		.segmen2{
			float: left;
			width: 90%;
			height: 50px;
		}
    .segmen3{
			float: left;
			width: 90%;
			height: 200px;
		}
		.checkout-button{
			margin-top: 10px;
			padding: 5px;
			background-color: red;
			border-radius: 10px;
			color: white;
		}
		.checkout-button img{
			height: 20px;
		}

    .bg-cart-yellow{
      background: #fffff3;
    }
		</style>
    <div class="container">
    <h1>  RINGKASAN</h1>
    <div align="center" class="cart-container">
    			<div class="box-left">
            <?php
            $total = 0;
            $totalWeight=0;
            foreach($hasil as $items):
             ?>
    				<div class="cart-list-left">
    					<table class="table">
    						<td class="td" colspan="3">
    							<div class="img-cont">
    								<img class="img-cont" src="<?php echo $items['imageurl']; ?>">
    							</div>
    							<div class="prod-info">
    								<span class="prodname"><?php echo $items['name']; ?></span><br>
    								<span class="quantity"><?php echo $items['qty']; ?> Barang</span><br>
    								<span class="sku"> SKU : <?php echo $items['sku']; ?></span>
    							</div>

    						</td>
    						<td class="td">
    							<div class="other-info">Harga Barang</div>
    							<div class="other-cont">Rp.<?php echo money($items['price']); ?></div>
    						</td>
    						<td class="ts" colspan="2">
    							<div class="other-info">Catatan</div>
    							<div class="other-cont">-</div>
    						</td>
    						<tr class='bg-cart-yellow'>
    							<td class="td">
    								<div class="other-info">Alamat Tujuan</div>
    								<div class="prod-cont" align="left">
    									JNE - Reguler<br>
    									<b>PT Myacico Global Indonesia</b><br>
    									Jl. Kesehatan No 60 O-P,<br>
    									RT 2, RW 4<br>
    									Petojo Selatan, Gambir, Pusat Jakarta Pusat 10160<br>
    								</div>
    							</td>
    							<td class="td">
    								<div class="other-info">Asuransi</div>
    								<div class="other-cont">Rp.30.0000.000</div>
    							</td>
    							<td class="td">
    								<div class="other-info">Total Barang</div>
    								<div class="other-cont">Rp.30.0000.000</div>
    							</td>
    							<td class="ta">
    								<div class="other-info">Subtotal</div>
    								<div class="other-cont">Rp.<?php echo money($items['subtotal']); ?></div>
    							</td>
    							<td class="ta">
    								<div class="other-info2">Biaya Asuransi</div>
    								<div class="other-cont2">Rp.0</div>
    							</td>
    							<td class="tc">
    								<div class="other-info2">Ongkos Kirim</div>
    								<div class="other-cont2">Rp.0</div>
    							</td>
    						<tr>
    							<td colspan="6" class="tc">
    								<div class="other-info3"><a href='#' onClick="dellItem('<?php echo $items['itemCartId']; ?>')"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</a></div>
    								<div class="other-info4">Total per Tagihan <span class="red">Rp.<?php echo money($items['subtotal']); ?></span></div>
    							</td>
    					</table>
    					</div>

              <?php
      				$totalWeight +=$items['totalWeight'];
      				$total +=$items['subtotal'];
      				endforeach; ?>


    					<div class="totalfee">
    						<div class="totalsub">

    						</div>
    						<div class="totalsub">
    							<p>Total Asuransi</p>
    							<p class="red">Rp.30.000.000</p>
    						</div>
    						<div class="totalsub">
    							<p>Total Barang</p>
    							<p class="red">Rp.<?php echo money($total); ?></p>
    						</div>
    						<div class="totalsub">
    							<p>Total Ongkos Pengiriman</p>
    							<p class="red">Rp.30.000.000</p>
    						</div>
    						<div class="totalsub2">
    							<p>Grand Total</p>
    							<p class="red">Rp.<?php echo money($total); ?></p>
    						</div>
    					</div>

    			</div>
    			<div class="box-right">
    				<div class="cart-list-right">
    					<div class="right-title">Metode Pembayaran</div>
    						<div align="left" class="method">
    							<p>Tranfer Bank</p>
                  <?php
                  $api = "payment/myacicoaccount";
                  $url = api_base_url($api);

                  $konten = file_get_contents($url);
                  $hasilpay = json_decode($konten, true);
                   ?>
                   <input type="hidden" id="metVal">
                   <div style='margin-bottom:10px; background:#eeeeee'>
                   <?php foreach($hasilpay as $data){ ?>

                   		<div class="segmen">
                   			<input type="radio" id='code' name="code" value='<?php echo$data['code']; ?>'>
                       </div>
                       <div class="segmen2">
                   		    <img src='https://cdn.myacico.co.id/myacico/image/bank-new/<?php echo$data['code']; ?>.png' border='0'>
                      </div>

                   <script>
                   $(document).on("change","input[type=radio][name=code]",function(){
                   	var metVal = $(this).val();
                   	$('#metVal').val(metVal);
                   });
                   </script>
                   <?php } ?>
                   </div>
    						</div>

    						<div align="left" class="method">
                  <p>Online Paymeny</p>

                  <?php
                  $api = "payment/onlinepayment?value=O";
              		$url = api_base_url($api);

              		$konten = file_get_contents($url);
              		$hasilOnline = json_decode($konten, true);
                   ?>
                   <input type="hidden" id="metVal">
                   <?php foreach($hasilOnline as $data){ ?>
                   		<div class="segmen">
                   			<input type="radio" id='code' name="code" value='<?php echo$data['value']; ?>'>
                   		</div>
                   		<div class="segmen2">
                        <img src='https://cdn.myacico.co.id/myacico/image/onlinepayment/<?php echo$data['value']; ?>.png' border='0'>
                      </div>
                    <?php } ?>
                </div>
                   <script>
                   $(document).on("change","input[type=radio][name=code]",function(){
                   	var metVal = $(this).val();
                   	$('#metVal').val(metVal);
                   });
                   </script>





    						<div align="left" class="method">
    							<p>Credit Card</p>
    							<div class="segmen">
    								<input type="radio" name="gender" value="male" checked>
    			  				</div>
    			  				<div class="segmen2">
    			  					<img class="imgs" src="https://cdn.myacico.co.id/myacico/image/kartukredit/visa.jpg">
    			  					<img class="imgs" src="https://cdn.myacico.co.id/myacico/image/kartukredit/master-card.png">
    			  				</div>
    						</div>
    					</div>



              <div class="cart-list-right">
      					<div class="right-title">Metode Pengiriman</div>
                  <br>
                  <?php
                    //$idkel = $this->input->post('idkel');
                    $idkel = '200010';
                    $api = "freight/shipment/rates?to_village_id=".$idkel;
                    $url = api_base_url($api);

                    $konten = file_get_contents($url);
                    $this->data['hasil'] = json_decode($konten, true);
                    $hasilShip = json_decode($konten, true);
                    $this->data['id_kelurahan'] = $idkel;
                   ?>

                   <input type="hidden" id="grandtotal">
                   <input type="hidden" id="courier">
                   <input type="hidden" id="courier_amount">
                   <?php foreach($hasilShip as $data){ ?>

                   		<div class="segmen">
                   			<input type="radio" id="shipperId" name="shipperId" value='<?php echo$data['shipperId']; ?>'>
                   		</div>
                   		<div class="segmen3" style='text-align:left'>
                   			<img src='https://cdn.myacico.co.id/myacico/image/kurir/<?php echo$data['shipperId']; ?>.png' border='0'>
                        <br>
                   			Penyedia Jasa : <?php echo$data['shipperName']; ?><br>
                   			Estimasi : +/- <?php echo$data['estimationDay']; ?> Hari kerja<br>
                   			Biaya Kirim: Rp.<?php echo money($data['amount']); ?>
                   		</div>

                   <?php } ?>

                   <script>
                   $(document).on("change","input[type=radio][name=shipperId]",function(){

                   	var idkel = <?php echo $id_kelurahan;?>;
                   	var total_weight = $('#weightTotalOrder').val();
                   	var shipperId = $(this).val();
                   	var dataString = 'idkel='+idkel+'&total_weight'+total_weight+'&shipperId='+shipperId;
                   	var amount = 0;
                   	$.ajax
                   	({
                   	type: "POST",
                   	dataType:'json',
                   	url: "<?php echo site_url('checkout/getDataShipping'); ?>",
                   	data: dataString,
                   	cache : false,
                   	success:function(data){

                   			var totalOngkir = parseInt(data.amount*total_weight);
                   			$('#courier_amount').val(totalOngkir);
                   			$('#totalOngkir').html(totalOngkir);
                   			$('#courier').val(data.shipperName);

                   			var SubtotalOrder = parseInt($('#SubtotalOrder').val());
                   			var grandtotal = SubtotalOrder+totalOngkir;
                   			$('#grandtotal').val(grandtotal);
                   			$('#grandtotalall').val(grandtotal);
                   		}
                   	});

                   });
                   </script>


      					</div>



    					<div class="checkout-button"><img src="https://myacico.co.id/images/general/cart.png"><span>MULAI CHECKOUT</span></div>
    				</div>
    			</div>
        </div>


<script>
function dellItem(idcart){

  // var token = document.cookie.split('x-auth=')[1].split(';').shift();
  var apiurl = api_base_url + '/order/cart/deleteitem?idcartitem='+idcart;

  $.confirm({
    title: name,
    content: 'Apakah item ini akan dihapus?',
    //content: '<p>Apakah item ini akan dihapus?</p>',
    autoClose: 'cancel|10000',
    closeIcon: true,
    closeIconClass: 'fa fa-close',
    buttons: {
      confirm: function () {

        $.ajax
        ({	type: "POST",
          url: apiurl,
          headers:{ "token":token},
          success:function(data){
            location.href = base_url+'checkout/test3';
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
