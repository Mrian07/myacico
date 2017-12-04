<style>
.table>tbody>tr>td, .table>tfoot>tr>td{
    vertical-align: middle;
}
@media screen and (max-width: 600px) {
    table#cart tbody td .form-control{
		width:20%;
		display: inline !important;
	}
	.actions .btn{
		width:36%;
		margin:1.5em 0;
	}
a
	.actions .btn-info{
		float:left;
	}
	.actions .btn-danger{
		float:right;
	}

	table#cart thead { display: none; }
	table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
	table#cart tbody tr td:first-child { background: #333; color: #fff; }
	table#cart tbody td:before {
		content: attr(data-th); font-weight: bold;
		display: inline-block; width: 8rem;
	}

	table#cart tfoot td{display:block; }
	table#cart tfoot td .btn{display:block;}

}
</style>


<div class="container">
	<div class='my-bg-title'>
		<i class="fa fa-angle-right" aria-hidden="true"></i> CHECKOUT
	</div>
	<div class="row" ng-controller="cartCnt" method="post">
		<div class="col-md-7">
			<div class="panel panel-default">
			  <div class="panel-heading"><b><?php echo$lang_sender_receiver_data;?></b></div>
			  <div class="panel-body">

				<div class="row">
					<div class="col-md-12">

						<form>
							<p><strong><?php echo $lang_data_bill;?></strong></p>
							<?php
							if(isset($alamat_billing)){
								echo"<p>". $alamat_billing."</p>
								<input type='hidden' value='". $billing_address_id."' id='billing_address_id'>
								";
							}else{
								echo"<p>". anchor('checkout/formAddBillingNew/', 'Update data billing', array('class'=>'btn btn-default')); echo"</p>";

                                                                echo"<input type='hidden' value='' id='billing_address_id'/>";
                                                        }?>

							<p><strong><?php echo $lang_data_receiver;?></strong></p>
						   <?php
               $get_shipping = get_cookie('shipping_address_id');
               if($get_shipping)
						   {
							   echo"<p>".anchor('checkout/dataShipping/', $alamat_shipping)."</p>
							   <input type='hidden' value='". $shipping_address_id."' id='shipping_address_id'>
							   ";
						   }
						   else{
							 echo "<p>".$lang_address_note."<p>";
							 echo "<p>".anchor('checkout/dataShipping/', $lang_btn_update_receiver, array('class'=>'btn btn-info btn-sm'))."</p>";
                                                          echo"<input type='hidden' value='' id='shipping_address_id'/>";
						   }
						   ?>


						</form>

					</div>
				</div>

			  </div>
			</div>
			<div class="panel panel-default">
			  <div class="panel-heading"><b><?php echo $lang_payment_method;?></b></div>
			  <div class="panel-body">
				<?php
        if($get_shipping)
					{?>
				  <div class="form-group">
					<label for="email"><?php echo $lang_payment_type;?></label>
					<input type="hidden" id="typeVal">
					<select id='payment_method' name='payment_method' onchange='paymentType(this.value)' class='form-control'>
						<?php
							echo "<option value=''>-Pilih-</option>";
							foreach($hasilMethod as $data){?>
								<option value='<?php echo$data['value'];?>'><?php echo$data['name'];?></option>
							<?php }
						?>
					</select>
                    <div class='listPayment'></div>

				  </div>
					<?php }else{echo $lang_txt_btn_address;} ?>
			  </div>
			</div>

			<div class="panel panel-default">
			  <div class="panel-heading"><b><?php echo $lang_shiping_method;?></b></div>
			  <div class="panel-body">
				<div class='listShipping'><?php echo $lang_txt_btn_address;?></div>

			  </div>
			</div>

      <h5><?php echo $lang_shiping_fare;?> Rp.<span id='totalOngkir'>0</span></h5>
			<h5><?php echo $lang_total_payment;?> Rp.<span id='grandtotalall'><?php echo money($total); ?></span></h5>
			<button class='btn btn-success my-btn-chekout' id ="finish" onclick='finish()'><?php echo $lang_finish_button;?> <i class="fa fa-angle-right"></i></button>
                        <img src="<?php echo base_url('images/general/Spinner.gif');?>" id="spinner_img" style="display:none">
		</div>
		<div class="col-md-5">
			<?php
				$this->load->view('frontend/modules/checkout/checkout_cart');


      	$this->data['token'] = $_COOKIE['x-auth'];
      	$token = $_COOKIE['x-auth'];
      	$api = "order/cart/detail";
      	$url = api_base_url($api);

      	$options = ["http" => [
      	"method" => "GET",
      	"header" => ["token: " . $token,
      	"Content-Type: application/json"],
      	]];

      	$context = stream_context_create($options);
      	$konten = file_get_contents($url, false, $context);


      	$hasil = json_decode($konten, true);



        $total = 0;
        $totalWeight=0;
        foreach($hasil as $items){
          $total +=$items['subtotal'];
        }?>


		</div>


	</div>

	<?php // echo anchor('', 'FINISH <i class="fa fa-angle-right"></i>', array('class'=>'btn btn-success my-btn-chekout', 'onclick'=>'return finish();'));?>

</div>

<script type="text/javascript">
console.log("checkout...");
$(document).ready(function()

{
  // console.log('testnih123')
  // window.onload = function() {
  //   console.log('testnih1234')
  //     if(!window.location.hash) {
  //           console.log('testnih12345')
  //         window.location = window.location + '#loaded';
  //         window.location.reload();
  //     }
  // }
	var totaltrans = $('#SubtotalOrder').val();
	$('#grandtotalall').html(addPeriod(totaltrans));
    	var idkel = <?php
          if(isset($id_kelurahan)){
          echo $id_kelurahan;
          }else{
            echo "123";
                                                     }?>;


	var dataString = 'idkel='+idkel;

	$.ajax
		({
		type: "POST",
		url: "<?php echo site_url('checkout/listShipping'); ?>",
		data: dataString,
		success:function(html){
				$(".listShipping").html(html);
			}
		});

});

function paymentType(payment_method)
{
	$('#typeVal').val(payment_method);
	if(payment_method=='R'){
	//	$('#typeVal').val(payment_method);
		$.ajax
		({
		url: "<?php echo site_url('checkout/paymentTransfer'); ?>",
		success:function(html){
				$(".listPayment").html(html);
			}
		});
	}else if(payment_method=='O'){
	//	$('#typeVal').val(payment_method);
       //alert(payment_method);
		$.ajax
		({
		url: "<?php echo site_url('checkout/paymentOnline'); ?>",
		success:function(html){
				$(".listPayment").html(html);
			}
		});
	}
        else{
		$(".listPayment").html('');
	}
}

function finish(){
 $('#spinner_img').hide();
	var token= '<?php echo $token; ?>';
	var grandtotal= $('#grandtotal').val();
	var paymentMethod=$('#typeVal').val();
	var isoncepickup = 'Y';
	var billing_address_id= $('#billing_address_id').val();
	var shipping_address_id=$('#shipping_address_id').val();
	var code =$('#metVal').val();
	var courier =$('#courier').val();
	var courier_amount =$('#courier_amount').val();
	var data = {};
	var baseApiUrl = '<?php echo $baseApiUrl; ?>';

//alert(code);die();
	if(billing_address_id==''){
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
	}else if(paymentMethod=='R' && code==''|| paymentMethod=='0' && code==''){
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
$('#spinner_img').show();

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

				if(hasil.status=='1' && paymentMethod=='R'){
					window.location.replace("<?php echo site_url('checkout/finish/'); ?>"+hasil.idTransaksi);
				}else if(hasil.token!='' && paymentMethod=='C'){
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
					$.alert({
						title: 'Alert!',
						content: '<?php echo $lang_msg6_checkout;?>',
					});
				}

			}
		});
	}

}

//Number buat konversi ke rupiah
function addPeriod(nStr)
{
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + '.' + '$2');
    }
    return x1 + x2;
}
</script>
