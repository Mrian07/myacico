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
  
  <br><br>
	<h3>TERIMA KASIH</h3>

	<p>Order Anda telah berhasil diproses. Silakan lakukan pembayaran sesuai dengan nilai transaksi Anda.</p>



	<div class="row">
	  <div class="col-sm-6">
		<div class="panel panel-default">
		  <div class="panel-heading"><b>DETAIL ORDER</b></div>
		  <div class="panel-body">
		  <form class="form-horizontal">
		  <div class="form-group">
			<label class="control-label col-sm-4" for="email">Nomor Order</label>
			<div class="col-sm-8">
			  <p class="form-control-static">ORD/27112017/5</p>
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-4" for="email">Nomor Invoice</label>
			<div class="col-sm-8">
			  <p class="form-control-static">-</p>
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-4" for="email">Metode Pembayaran</label>
			<div class="col-sm-8">
			  <p class="form-control-static">Bank Transfer<br>BCA Cab. Tanah Abang II an. PT. MYACICO GLOBAL<br>INDONESIA<br>6540308797</p>
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-4" for="email">Status</label>
			<div class="col-sm-8">
			  <p class="form-control-static">Pending</p>
			</div>
		  </div>
		   <div class="form-group">
			<label class="control-label col-sm-4" for="email">Tanggal Transaksi</label>
			<div class="col-sm-8">
			  <p class="form-control-static"><?php $tgl = date("Y-m-d");
			  echo tanggal($tgl);
			 // $tgl = explode(" ",$field->waktuTransaksi);
			 // echo tanggal($tgl[0]); echo",".;?></p>
			</div>
		  </div>
		  </form>
		  </div>
		</div>
	  </div>
	  <div class="col-sm-6">

		<div class="panel panel-default">
		  <div class="panel-heading"><b>PENGIRIM</b></div>
		  <div class="panel-body"><b>Yasser Arafat Ahmad</b>,<br>Jl. Tanah Abang 4 No.60 O-P 10160 Gambir Kota Administrasi Jakarta Pusat DKI Jakarta</div>
		</div>

		<div class="panel panel-default">
		  <div class="panel-heading"><b>PENERIMA</b></div>
		  <div class="panel-body"><b>Yasser Arafat Ahmad</b>,<br>Jl. Tanah Abang 4 No.60 O-P 10160 Gambir Kota Administrasi Jakarta Pusat DKI Jakarta</div>
		</div>


		<div class="panel panel-default">
		  <div class="panel-heading"><b><?php echo $lang_cart_detail;?></b></div>
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

					<tr>
						<td data-th="Product">
              <img class="img-cont" src="https://storage.googleapis.com/myacicoproductimg/samssmart0001000256.jpg" class="img-responsive" width='100'>
							<!-- <img class="gambar" src="https://storage.googleapis.com/myacicoproductimg/APPLSMAR00002007354.jpg" class="img-responsive" width='100'> -->
						</td>
						<td data-th="Qty" align='center'>
							<span class="badge">1</span>
						</td>
						<td data-th="Subtotal" class="text-center">Rp 8.499.150</td>
					</tr>
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
        <p class="form-control-static">Rp.9.000</p>
      </div>
      </div>
     <div class="form-group">
      <label class="control-label col-sm-5" for="email">Total Pembayaran:</label>
      <div class="col-sm-7">
        <p class="form-control-static">Rp.8.508.150</p>
      </div>
      </div>
    </form>
      </h5>
	  </div>
  </div>
	</div>

</div>
<br><br>
