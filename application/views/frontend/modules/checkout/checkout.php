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
	<div class="row" ng-controller="cartCnt">
		<div class="col-md-7">
			<div class="panel panel-default">
			  <div class="panel-heading"><b>Alamat Pengiriman</b></div>
			  <div class="panel-body">
			  
				<div class="row">
					<div class="col-md-12">
						
						<form>
							<p><strong>DATA BILLING</strong></p>
							<p>Tidak ada data billing yang tersedia, silakan isi terlebih dulu.<p>
							<p><?php echo anchor('checkout/formAddBillingNew/', 'Update data billing', array('class'=>'btn btn-default'));?></p>
							
							<p><strong>DATA PENERIMA</strong></p>
							<p>Tidak ada data penerima yang tersedia, silakan isi terlebih dulu.<p>
							<p><?php echo anchor('checkout/formAddShippingNew/', 'Update data penerima', array('class'=>'btn btn-default'));?></p>
							
							<!--
							<p><strong>DATA PENERIMA</strong></p>
							<div class='row'>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="email">Nama:</label>
										<input class="form-control" type='text' name='name' value=''>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="email">Email:</label>
										<input class="form-control" type='text' name='email' value=''>
									</div>
								</div>
							</div>	
							<div class='row'>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="email">Telepon 1:</label>
										<input class="form-control" type='text' name='name' value=''>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="email">Telepon 2:</label>
										<input class="form-control" type='text' name='name' value=''>
									</div>
								</div>
							</div>	
							
							<div class='row'>
								<div class="col-sm-12">
									<div class="form-group">
										<label for="email">Alamat 1:</label>
										<input class="form-control" type='text' name='address1' value=''>
									</div>
								</div>
							</div>
							<div class='row'>
								<div class="col-sm-12">
									<div class="form-group">
										<label for="email">Alamat 2:</label>
										<input class="form-control" type='text' name='address2' value=''>
									</div>
								</div>
							</div>		
						  
						  <div class="form-group">
							<label for="email">Kota:</label>
							<input class="form-control" type='text' name='name' value=''>
						  </div>
						  <div class="form-group">
							<label for="email">Propinsi:</label>
							<input class="form-control" type='text' name='name' value=''>
						  </div>
						  <div class="form-group">
							<label for="email">Kodepos:</label>
							<input class="form-control" type='text' name='name' value=''>
						  </div>
						  <div class="form-group">
							<label for="email">Telepon:</label>
							<input class="form-control" type='text' name='name' value=''>
						  </div>
						  <div class="checkbox">
							<label><input type="checkbox"> Simpan</label>
						  </div>
						  -->
						 
						</form>	  
						  
					</div>
				</div>		

			  </div>
			</div>
			<div class="panel panel-default">
			  <div class="panel-heading"><b>Metode Pembayaran</b></div>
			  <div class="panel-body">
				 <form>
				  <div class="form-group">
					<label for="email">Pilih Type Pembayaran:</label>
					<select class="form-control" id='payment_method' name='payment_method'>
						<option value=''>-Pilih-</option>
						<option value='01'>Transfer Bank</option>
						<!--option value='02'>Ninja 250cc</option>
						<option value='03'>Credit Cart</option-->
					</select>
					
				  </div>
				  
				  <!-- TRANSFER BANK -->
				  <div id='transfer_bank' style='display:none'>
					Mohon dilakukan pembayaran ke : 
					<table class="table">
						<tr>
							<td>
								<input type='radio' name="bank" value='1000000'>
							</td>
							<td>
								BCA atas nama : PT. MYACICO GLOBAL INDONESIA<br>
								Cabang : Tanah Abang 2<br>
								Nomor rekening : 6540308797
							</td>
						</tr>	
						<tr>
							<td>
								<input type='radio' name="bank" value='1000002'>
							</td>
							<td>
								Mandiri atas nama : MYACICO<br>
								Cabang : mangga Dua Square<br>
								Nomor rekening : 120-0099271996
							</td>
						</tr>	
						<tr>
							<td>
								<input type='radio' name="bank" value='1000001'>
							</td>
							<td>
								BNI atas nama : MYACICO<br>
								Cabang : Caringin<br>
								Nomor rekening : 099-2719967

							</td>
						</tr>	
					</table>
				  </div>
				  <!--button type="submit" class="btn btn-info">Update</button-->
				</form> 

			  </div>
			</div>
			<!--div class="panel panel-default">
			  <div class="panel-heading"><b>Ulasan dan Kirim</b></div>
			  <div class="panel-body"><button type="button" class="btn btn-info">Ubah</button></div>
			</div-->
		</div>
		<div class="col-md-5">
			<?php $this->load->view('frontend/modules/checkout/checkout_cart',$this->data); ?>	
		</div>	
	</div>


	<?php echo anchor('finish', 'Pesan Sekarang <i class="fa fa-angle-right"></i>', array('class'=>'btn btn-success my-btn-chekout'));?>

</div>


<script type="text/javascript">
$(document).ready(function()
{	
	$("#payment_method").change(function()
	{ 
		var pay=$('#payment_method').val();			
		if(pay=="01"){
			$("#transfer_bank").show();
		}else{
			$("#transfer_bank").hide();
		}
	});
});
</script>