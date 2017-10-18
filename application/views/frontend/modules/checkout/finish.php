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

			<i class="fa fa-angle-right" aria-hidden="true"></i> FINISH

		  </div>
		</div>
	</div>
</div>

<div class="container">
	<h3>TERIMA KASIH</h3>
	<p>Order Anda telah berhasil diproses.</p>
	
	
	<div class="row">
	  <div class="col-sm-6">
		<div class="panel panel-default">
		  <div class="panel-heading"><b>Detail Order</b></div>
		  <div class="panel-body">
		  <form class="form-horizontal">
		  <div class="form-group">
			<label class="control-label col-sm-4" for="email">Nomor Order:</label>
			<div class="col-sm-8">
			  <p class="form-control-static"><?php echo $field->orderNumber; ?></p>
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-4" for="email">Nomor Invoice:</label>
			<div class="col-sm-8">
			  <p class="form-control-static"><?php echo $field->invoiceNumber; ?></p>
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-4" for="email">Metode Pembayaran:</label>
			<div class="col-sm-8">
			  <p class="form-control-static"><?php echo $field->paymentMethod; ?></p>
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-4" for="email">Metode Pembayaran:</label>
			<div class="col-sm-8">
			  <p class="form-control-static"><?php echo $field->paymentMethod; if($field->paymentMethod=='Bank Transfer'){
				 echo"<br><i>".$field->accountNameTo;
				 echo"<br>".$field->accountNumberTo;
				 echo"<br>".$field->bankNameTo."</i>";
				  }?></p>
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-4" for="email">Status:</label>
			<div class="col-sm-8">
			  <p class="form-control-static"><?php echo $field->transactionStatus; ?></p>
			</div>
		  </div>
		   <div class="form-group">
			<label class="control-label col-sm-4" for="email">Tanggal Transaksi:</label>
			<div class="col-sm-8">
			  <p class="form-control-static"><?php echo $field->waktuTransaksi; ?></p>
			</div>
		  </div>
		  </form>
		  </div>
		</div>  
	  </div>
	  <div class="col-sm-6">
	  
		<div class="panel panel-default">
		  <div class="panel-heading"><b>Detail Cart</b></div>
		  <div class="panel-body">
			
			<table class="table table-hover table-condensed">
				<thead>
					<tr>
						<th style="width:50%">Product</th>
						<th style="width:8%">Qty</th>
						<th style="width:22%" class="text-center">Subtotal</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach($field->items as $key => $data):?>
					<tr>
						<td data-th="Product">
							<img src="<?php echo $data->imageurl; ?>" alt="<?php echo $data->name; ?>" class="img-responsive" width='100'/>
						</td>
						<td data-th="Qty" align='center'>
							<span class="badge"><?php echo $data->qty; ?></span>
						</td>
						<td data-th="Subtotal" class="text-center">Rp.<?php echo money($data->subtotal); ?></td>
					</tr>
					<?php 
					endforeach; ?>
				</tbody>
			</table>
			 <div class="form-group"><h5>
				<label class="control-label col-sm-6" for="email">Total Pembayaran:</label>
				<div class="col-sm-6">
				  <p class="form-control-static">Rp.<?php echo money($field->grandTotal); ?></p>
				</div>
			  </div>
				</h5>
		  </div>
		</div>  
	  </div>
	</div> 


</div>


