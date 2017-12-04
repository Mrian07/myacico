
		<style type="text/css">
		.cart-container {
			width: 1200px;
			padding: 10px;
			font-family: 'arial';
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
			border-radius: 10px;
			margin-bottom:10px;
		}
		.cart-list-right{
			min-height: 400px;
			padding: 10px;
			border : 1px solid #ccc;
			border-radius: 10px;
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
			border-radius: 10px;
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
		.checkout-button{
			margin-top: 10px;
			padding: 5px;
			background-color: red;
			border-radius: 10px;
			color: white;
      font-size:15px;
      padding:10px;
		}
		/*.checkout-button img{
			height: 20px;
		}*/

		.checkout-button:hover{
		  background-color: #ca3833;
		  color:#f1eeee;
		}
		</style>
    <div class="container"><br><p align='center'><img src="<?php echo base_url('images/general/step2.jpg'); ?>" border="0"></p>
      <div style='border-top:2px solid #e4322b; padding-top:10px; font-size:20px; width:1200px;margin-bottom:40px;'>RINGKASAN</div>

		<div align="center" class="cart-container">
			<div class="box-left">
				<div class='listItem'>
						<center><img src='<?php echo base_url('images/general/loading.gif');?>' border='0'></center>
				</div>
			</div>
			<div class="box-right">
				<div class="cart-list-right">
					<div class="right-title">Metode Pembayaran</div>
						<div align="left" class="method">
							<p>Tranfer Bank</p>

							<?php
							foreach($hasilTransfer as $dataTrans){?>
								<div class="segmen">
									<?php if($dataTrans['code']=="1000003"){?>
									<input type="radio" class='code' name="code" value='R-<?php echo$dataTrans['code']; ?>' checked="checked">
								<?php }else{?>
									<input type="radio" class='code' name="code" value='R-<?php echo$dataTrans['code']; ?>'>
								<?php } ?>
								</div>
			  				<div class="segmen2">
			  					<label><img src='https://storage.googleapis.com/myacico/image/bank/<?php echo$dataTrans['code']; ?>.png' border='0'></label>
			  				</div>

							<?php }
							 ?>

						</div>

						<div align="left" class="method">
							<p>Online Payment</p>
							<?php
							foreach($hasilOnline as $dataOl){?>
							<div class="segmen">
								<input type="radio" class='code' name="code" value='O-<?php echo$dataOl['value']; ?>'>
			  				</div>
			  				<div class="segmen2">
			  					<img src='https://storage.googleapis.com/myacico/image/onlinepayment/<?php echo$dataOl['value']; ?>.png' border='0'>
			  				</div>
							<?php } ?>
						</div>

						<div align="left" class="method">
							<p>Credit Card</p>
							<div class="segmen">
								<input type="radio" class='code' name="code" value='C-'>
			  				</div>
			  				<div class="segmen2">
			  					<img class="imgs" src="https://myacico.co.id/images/general/p-visa-small.jpg">
			  					<img class="imgs" src="https://myacico.co.id/images/general/ico_bank_02.png">
			  				</div><br><br>
						</div>
					</div>

					<input type='hidden' value='<?php echo$this->session->userdata('name_kurir');?>' id='courier'>
					<input type='hidden' value='<?php echo$this->session->userdata('ongkos_kurir');?>' id='courier_amount'>
					<input type='hidden' value='<?php echo$billing_address_id;?>' id='billing_address_id'>
					<input type='hidden' value='<?php echo$shipping_address_id;?>' id='shipping_address_id'>
          <button id="finish" onclick='finish()' class="checkout-button"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span><b>MULAI</b> CHECKOUT</span> <img src="<?php echo base_url('images/general/Spinner_cart.gif');?>" id="spinner_img" style="display:none"></button>
					<!-- <div class="checkout-button"><img src="https://myacico.co.id/images/general/cart.png"><span>MULAI CHECKOUT</span></div> -->
				</div>
			</div>

		</div>
    </div>
<script>
$(document).ready(function() {
	$.ajax
	({
	url: "<?php echo site_url('checkout/summaryDetail'); ?>",
	success:function(html){
			$(".listItem").html(html);
		}
	});
});

function delItemCart(id,img,name,idcart){
	var apiurl = api_base_url + '/order/cart/deleteitem?idcartitem='+idcart;
	$.confirm({
		title: name,
		content: '<img src="'+img+'">'+'<br><br>Apakah item ini akan dihapus?',
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
						totalCart();
						$(".listItem").html("<center><img src='<?php echo base_url('images/general/loading.gif');?>' border='0'></center>")
					}
				});

				$.ajax
				({
				url: "<?php echo site_url('checkout/summaryDetail'); ?>",
				success:function(html){
						$(".listItem").html(html);
					}
				});


			},
			cancel: function () {
				//$.alert('Canceled!');
			}
		}

	});
}

function finish(){
  $('#spinner_img').show();
	$('.checkout-button').css("background", "#f9a8a8");
	var itemKosong = $('#itemKosong').val();
	var getPay = $("input[name='code']:checked").val()
	var resultPay=getPay.split('-');
	var paymentMethod= resultPay['0'];
	var code = resultPay['1'];

	var token= '<?php echo $token; ?>';
	var grandtotal= $('#grandtotal').val();
	var isoncepickup = 'Y';
	var billing_address_id= $('#billing_address_id').val();
	var shipping_address_id=$('#shipping_address_id').val();
	var courier =$('#courier').val();
	var courier_amount =$('#courier_amount').val();
	var data = {};
	var baseApiUrl = '<?php echo $baseApiUrl; ?>';

	if(itemKosong=="1"){
		$.alert({
			title: 'Alert!',
			content: 'Keranjang belanja kosong transaksi tidak bisa dilanjutkan.',
		});
	} else if(billing_address_id==''){
		$.alert({
			title: 'Alert!',
			content: '<?php echo $lang_msg1_checkout;?>',
		});
	}else if(shipping_address_id==''){
		$.alert({
			title: 'Alert!',
			content: '<?php echo $lang_msg2_checkout;?>',
		});
	}else if(paymentMethod==''){
		$.alert({
			title: 'Alert!',
			content: '<?php echo $lang_msg3_checkout;?>',
		});
	}else if(paymentMethod=='R' && code==''|| paymentMethod=='O' && code==''){
		$.alert({
			title: 'Alert!',
			content: '<?php echo $lang_msg4_checkout;?>',
		});

	}else if(courier==''){
		 $.alert({
			title: 'Alert!',
			content: '<?php echo $lang_msg5_checkout;?>',
		});
	}else {
// $('#spinner_img').show();

 		$('#finish').addClass('disabled');
		data.grandtotal = grandtotal;
		data.paymentMethod = paymentMethod;
		data.billing_address_id = billing_address_id;
		data.shipping_address_id = shipping_address_id;
		data.isoncepickup = isoncepickup;
		data.code = code;
		data.courier = courier;
		data.courier_amount = courier_amount;
//                alert(code);
//console.log("sad",data);die();
		$.ajax
		({
		type: "POST",
		contentType: "application/json",
		data: JSON.stringify(data),
		headers:{"token":token},
		url: "<?php echo api_base_url('order/checkout'); ?>",
		success:function(hasil){
				// console.log(hasil); die();
				if(hasil.status=='1' && paymentMethod=='R'){
					window.location.replace("<?php echo site_url('checkout/finish/'); ?>"+hasil.idTransaksi);
				}


				else if(hasil.token!='' && paymentMethod=='C'){
					window.location.replace("<?php echo site_url('checkout/paymentByCreditCard/'); ?>"+hasil.idTransaksi+"/"+hasil.token);

					//window.location.replace("<?php // echo site_url('payment/creditcard.php/?c='); ?>"+hasil.token);
				}else if(hasil.token!='' && paymentMethod=='O'){
          if(hasil.status==1){
  					window.location.replace("<?php echo site_url('checkout/paymentByOnline/'); ?>"+hasil.idTransaksi+"/"+hasil.token);
          }else{ $('#spinner_img').hide();
              $('#finish').removeClass('disabled');
            if(code=="1000000"){
              $.alert({
    						title: 'Alert!',
    						content: '<?php echo $lang_msg_bca;?>',
    					});
            }else if(code=="1000001"){
              $.alert({
    						title: 'Alert!',
    						content: '<?php echo $lang_msg_cimb;?>',
    					});
            }else{
              $.alert({
    						title: 'Alert!',
    						content: '<?php echo $lang_msg_online_payment;?>',
    					});
            }
          }
				}else{
					$('#finish').removeClass('disabled');
					$.alert({
						title: 'Alert!',
						content: '<?php echo $lang_msg6_checkout;?>',
					});
				}

			}
		});
	}

}
</script>
