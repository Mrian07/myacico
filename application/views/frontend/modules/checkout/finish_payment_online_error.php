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


<div class="my-container">
	<div class='my-bg-title'>
		<i class="fa fa-angle-right" aria-hidden="true"></i> FINISH
	</div>
</div>

<div class="my-container">
	<h3>PEMBAYARAN GAGAL</h3>
	<p>Pembayaran menggunakan online payment telah digagalkan, Anda bisa mencoba malakukan pembayaran kembali untuk order anda menggunakan online payment melalui halaman <b>Riwayat Status Pesanan</b> pada Account Anda.</p>
	<p>
	<?php echo anchor('account/riwayatStatusPesanan', 'Click disini untuk melihat riwayat status pesanan', array('class'=>'btn btn-primary btn-sm'));?>
	</p>
	<div class="row">
	  <div class="col-sm-6">
		<div class="panel panel-default">
		  <div class="panel-heading"><b>DETAIL ORDER</b></div>
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
			<label class="control-label col-sm-4" for="email">Status:</label>
			<div class="col-sm-8">
			  <p class="form-control-static"><?php echo $field->transactionStatus; ?></p>
			</div>
		  </div>
		   <div class="form-group">
			<label class="control-label col-sm-4" for="email">Tanggal Transaksi:</label>
			<div class="col-sm-8">
			  <p class="form-control-static"><?php
			  echo tanggal_time($field->waktuTransaksi);
			 // $tgl = explode(" ",$field->waktuTransaksi);
			 // echo tanggal($tgl[0]); echo",".;?> </p>
			</div>
		  </div>
		  </form>
		  </div>
		</div>
	  </div>
	  <div class="col-sm-6">

		<div class="panel panel-default">
		  <div class="panel-heading"><b>PENGIRIM</b></div>
		  <div class="panel-body"><b><?php echo $field->billing_name; ?></b>,<br><?php echo $field->billing_address; ?></div>
		</div>

		<div class="panel panel-default">
		  <div class="panel-heading"><b>PENERIMA</b></div>
		  <div class="panel-body"><b><?php echo $field->shipping_name; ?></b>,<br><?php echo $field->shipping_address; ?></div>
		</div>


		<div class="panel panel-default">
		  <div class="panel-heading"><b>DETAIL CART</b></div>
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

		  </div>
		</div>

    <div class="panel panel-default">
    <h5>

      <form class="form-horizontal">
      <div class="form-group">
      <label class="control-label col-sm-5" for="email">Ongkos Kirim:</label>
      <div class="col-sm-7">
        <p class="form-control-static">Rp.<?php echo money($field->courier_amount); ?></p>
      </div>
      </div>
     <div class="form-group">
      <label class="control-label col-sm-5" for="email">Total Pembayaran:</label>
      <div class="col-sm-7">
        <p class="form-control-static">Rp.<?php echo money($field->grandTotal); ?></p>
      </div>
      </div>
    </form>
      </h5>
    </div>

	  </div>
	</div>


</div>
