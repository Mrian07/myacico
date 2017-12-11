<link href="<?php echo base_url('assets/css/style_summary.css');?>" rel="stylesheet">
    <div class="container detail-page">

			<div style='margin:0px auto; width:1000px; margin-top:30px;'>
				<div class="number-container">
					<div class="title-step"><p><?=$lang_shoping_cart;?></p></div>
					<div class="title-step2"><p><?=$lang_shoping_method_cart;?></p></div>
					<div class="title-step3"><p><?=$lang_payment_confirm;?></p></div>
				</div>
			</div>
			<div style='margin:0px auto; width:900px; margin-bottom:50px;'>
				<div class="number-container">
					<div class="number" onclick="location.href='<?php echo base_url('/checkout/cart');?>'"><p>1</p></div>
					<div class="number2"><p>2</p></div>
					<div class="number3"><p>3</p></div>
					<div class="barred"></div>
				</div>
			</div>

			<!-- <br><p align='center'><img src="<?php //echo base_url('images/general/step2.jpg'); ?>" border="0"></p> -->


      <div style='border-top:2px solid #e4322b; padding-top:10px; font-size:20px; width:1200px;margin-bottom:40px;'><?php echo $lang_ringkasa; ?></div>

		<div align="center" class="cart-container">
			<div class="box-left">
				<div class='listItem'>
						<center><img src='<?php echo base_url('images/general/loading.gif');?>' border='0'></center>
				</div>
			</div>
			<div class="box-right">
				<div class="cart-list-right">
					<div class="right-title"><?=$lang_payment_method;?></div>
						<div align="left" class="method">
							<p>Credit Card</p>
							<div class="segmen">
								<input type="radio" class='code' name="code" value='C-'>
								</div>
								<div class="segmen2">
									<img class="imgs" src="https://myacico.co.id/images/general/p-visa-small.jpg">
									<img class="imgs" src="https://myacico.co.id/images/general/ico_bank_02.png">
								</div>
						</div>

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
						<br>&nbsp;<br>
						<!-- <div align="left" class="method">
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
						</div> -->



						<div align="left" class="method-kupon">
							<b><?=$lang_voucher_code;?> ?</b><br>
							<div class="input-group">
								<input type="text" id="txt_voucher" name="txt_voucher" class="my-field-kupon"  placeholder="">
								<span class="input-group-btn">
										<input type="button" id="btn_voucher" class="btn btn-default my-btn-kupon" value="GUNAKAN KODE">
								</span>
							</div>
						</div>
					</div>

					<input type='hidden' value='<?php echo$this->session->userdata('name_kurir');?>' id='courier'>
					<input type='hidden' value='<?php echo$this->session->userdata('ongkos_kurir');?>' id='courier_amount'>
					<input type='hidden' value='<?php echo$billing_address_id;?>' id='billing_address_id'>
					<input type='hidden' value='<?php echo$shipping_address_id;?>' id='shipping_address_id'>
          <button id="finish" onclick='finish()' class="checkout-button"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span><b><?php echo $lang_mulai; ?></b> CHECKOUT</span> <img src="<?php echo base_url('images/general/Spinner_cart.gif');?>" id="spinner_img" style="display:none"></button>
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

$('#btn_voucher').click(function(){
if($("#txt_voucher").val() == '')
{
     alert('Kode Voucher Tidak Boleh Kosong');
}

});
//
// function getKurir(id){
//
//   var url = '<?php echo site_url('checkout/selectKurir'); ?>'
//   $.ajax
//   ({
//   url: url+'/?id='+id,
//   success:function(html){
//       $("#kurir").html(html);
//     }
//   });
// }

function delItemCart(id,img,name,idcart){
	var id_kurir = '<?php echo $this->session->userdata('id_kurir');?>';
	var ongkos_kurir_ori = '<?php echo $this->session->userdata('ongkos_kurir_ori');?>';
	var apiurl = api_base_url + '/order/cart/deleteitem?idcartitem='+idcart;
	$.confirm({
		title: name,
		content: '<img src="'+img+'">'+'<br><br><?php echo$lang_alert_cart_hapus;?>',
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

						pilihKurir2(id_kurir,ongkos_kurir_ori);

						$(".listItem").html("<center><img src='<?php echo base_url('images/general/loading.gif');?>' border='0'></center>");


					}
				});




			},
			cancel: function () {
				//$.alert('Canceled!');
			}
		}

	});
}

function pilihKurir2(id,amount){
	var id = id;
	var amount = amount;

	var url = '<?php echo site_url('checkout/pilihKurir2'); ?>'
	$.ajax
	({
	url: url+'/?id='+id+'&amount='+amount,
	success:function(html){
			$.ajax
			({
			url: "<?php echo site_url('checkout/summaryDetail'); ?>",
			success:function(html){
					$(".listItem").html(html);
				}
			});

		}
	});


}

function finish(){

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
			content: '<?php echo$lang_alert_cart_empty; ?>',
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
		$('#spinner_img').show();
		$('.checkout-button').css("background", "#f9a8a8");
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
// console.log("sad",data);die();
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
