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
						Nama: Lalang Lalang<br>
						Alamat: Tanah Abang, Kota Administrasi Jakarta Pusat, DKI Jakarta, 111<br>
						Kota: Jakarta<br>
						Propinsi: DKI Jakarta<br>
						Kecematan: Tanah Abang<br>
						Kodepos: 12222<br>	
						Telepon: 0817778777<br>				
						Negara: Indonesia<br>
						<hr style='margin:5px 0px 5px 0px'>
						<form>
						  <div class="form-group">
							<label for="email">Nama:</label>
							<input class="form-control" type='text' name='name' value=''>
						  </div>
						  <div class="form-group">
							<label for="email">Alamat:</label>
							<input class="form-control" type='text' name='name' value=''>
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
						</form>	  
						  
					</div>
				</div>		
				
				<button type="button" class="btn btn-info">Ubah</button>
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
			<div class="panel panel-default">
				<div class="panel-body">
					<table id="cart" class="table table-hover table-condensed">
						<thead>
							<tr>
								<th style="width:50%">Product</th>
								<th style="width:10%">Price</th>
								<th style="width:8%">Quantity</th>
								<th style="width:22%" class="text-center">Subtotal</th>
								<th style="width:10%"></th>
							</tr>
						</thead>
						<tbody>
							<tr ng-repeat="arr in mycart">
								<td data-th="Product">
									<div class="row">
										<div class="col-sm-12 hidden-xs"><img src="{{arr.image_url}}" alt="{{arr.name}}-img" class="img-responsive"/></div>
										
									</div>
								</td>
								<td data-th="Price">{{toMoney(arr.price)}}</td>
								<td data-th="Quantity" align='center'>
									<span class="badge">{{arr.quantity}}</span>
								</td>
								<td data-th="Subtotal" class="text-center">{{toMoney(arr.price * arr.quantity)}}</td>
								<td class="actions" data-th="">
									<button class="btn btn-info btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
								</td>
							</tr>
							<!--tr>
								<td data-th="Product">
									<div class="row">
										<div class="col-sm-12 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
									</div>
								</td>
								<td data-th="Price">Rp.100.999</td>
								<td data-th="Quantity" align='center'>
									<span class="badge">1</span>
								</td>
								<td data-th="Subtotal" class="text-center">Rp.100.999</td>
								<td class="actions" data-th="">
									<button class="btn btn-info btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
								</td>
							</tr-->
						</tbody>
						<tfoot>
							<tr class="visible-xs">
								<td class="text-center"><strong>Total 1.99</strong></td>
							</tr>
							<tr>
								<!--<td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>-->
								<td colspan="3" class="hidden-xs">
								<b>Catatan:</b> Barang pre-order akan dikirimkan secara terpisah sesuai dengan persediaan dan perkiraan waktu pengiriman.
								Ada biaya tambahan untuk beberapa pengiriman </td>
								<td class="hidden-xs text-center"><strong>Total <br>{{get_total()}}</strong></td>
								<td></td>
							</tr>
						</tfoot>
					</table>
				</div>	
			</div>	
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