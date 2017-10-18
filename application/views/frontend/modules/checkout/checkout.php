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

<div class='my-bg-title'>
	<div class="container">
		<div class="row">
		  <div class="col-sm-12">

			<i class="fa fa-angle-right" aria-hidden="true"></i> CHECKOUT

		  </div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row" ng-controller="cartCnt" method="post">
		<div class="col-md-7">
			<div class="panel panel-default">
			  <div class="panel-heading"><b>Alamat Pengiriman</b></div>
			  <div class="panel-body">

				<div class="row">
					<div class="col-md-12">

						<form>
							<p><strong>DATA BILLING</strong></p>							
							<?php 
							if(isset($alamat_billing)){
								echo"<p>". $alamat_billing."</p>
								<input type='text' value='". $billing_address_id."' id='billing_address_id'>
								";
							}else{
								echo"<p>". anchor('checkout/formAddBillingNew/', 'Update data billing', array('class'=>'btn btn-default')); echo"</p>";
							}?>
							

							<!--<input type="hidden" id="idAddShip" name="idAddShip" value="<?php echo $this->session->userdata('shipping_address_id'); ?>" />
							<input type="hidden" id = "idBill" name="idBill" />
							<input type="hidden" id = "idDistri" name="idDistri" />-->
							<p><strong>DATA PENERIMA</strong></p>
						   <?php if($this->session->userdata('shipping_address_id'))
						   {
							   echo"<p>".anchor('checkout/dataShipping/', $alamat_shipping)."</p>
							   <input type='text' value='". $shipping_address_id."' id='shipping_address_id'>
							   ";
						   }
						   else{
							 echo "<p>Tidak ada data penerima yang tersedia, silakan isi terlebih dulu.<p>";
							 echo "<p>".anchor('checkout/dataShipping/', 'Update data penerima', array('class'=>'btn btn-default'))."</p>";

						   }
						   ?> 
						</form>

					</div>
				</div>

			  </div>
			</div>
			<div class="panel panel-default">
			  <div class="panel-heading"><b>Metode Pembayaran</b></div>
			  <div class="panel-body">
				  <div class="form-group">
					<label for="email">Pilih Type Pembayaran:</label>
					<input type="text" id="typeVal">
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
			  </div>
			</div>
			
			<div class="panel panel-default">
			  <div class="panel-heading"><b>Metode Pengiriman</b></div>
			  <div class="panel-body">
				<div class='listShipping'></div>   

			  </div>
			</div>
			
			
		</div>
		<div class="col-md-5">
			<?php 
				$this->load->view('frontend/modules/checkout/checkout_cart'); 
			?>
		</div>

	</div>

	<?php echo anchor('', 'FINISH <i class="fa fa-angle-right"></i>', array('class'=>'btn btn-success my-btn-chekout', 'onclick'=>'return finish();'));?>

</div>

<script type="text/javascript">

$(document).ready(function()
{	
	var idkel = <?php echo $id_kelurahan;?>;
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

function paymentType(payment_method){

	if(payment_method=='R'){
		$('#typeVal').val(payment_method);
		$.ajax
		({
		url: "<?php echo site_url('checkout/paymentTransfer'); ?>",
		success:function(html){
				$(".listPayment").html(html);
			}
		});
	}else{
		$(".listPayment").html('');
	}
}

function finish(){
	
	var grandtotal= $('#grandtotal').val();
	var paymentMethod=$('#typeVal').val();
	var soncepickup = 'Y';
	var billing_address_id= $('#billing_address_id').val();
	var shipping_address_id=$('#shipping_address_id').val();
	var code =$('#metVal').val();
	var courier =$('#courier').val();
	var courier_amount =$('#courier_amount').val();
	
	alert(grandtotal);
	alert(paymentMethod);
	alert(soncepickup);
	alert(billing_address_id);
	alert(shipping_address_id);
	alert(code);
	alert(courier);
	alert(courier_amount);
	
	return false;
	/*if(typeVal=='R'){
		
		var dataString = 'grandtotal='+grandtotal+'&paymentMethod='+paymentMethod+'&code='+code;
		$.ajax
			({
			type: "POST",	
			url: "<?php echo site_url('checkout/finishByTransfer'); ?>",
			data: dataString,
			success:function(html){
					alert(html);
					//$(".listShipping").html(html);
				}
			});
	
	}*/
}
</script>
