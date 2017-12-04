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

<style type="text/css">
.title-step{
    width: 200px;
    display: inline-block;
    margin-right: 0%;
    margin-top:0px;
    margin-bottom:0px;
  }
  .title-step p{
    color: red;
    font-size: 18px;
    font-weight: bold;
    text-align: center;
  }

  .title-step2{
    width: 230px;
    display: inline-block;
    margin-top:0px;
    margin-bottom:0px;
    margin-left: 160px;
  }
  .title-step2 p{
    color: red;
    font-size: 18px;
    font-weight: bold;
    text-align: center;
  }

  .title-step3{
    width: 250px;
    display: inline-block;
    margin-right: 0px;
    margin-left: 110px;
    margin-top:0px;
    margin-bottom:0px;
  }
  .title-step3 p{
    color: red;
    font-size: 18px;
    font-weight: bold;
    text-align: center;
  }

  .number{
    width: 60px;
    height: 60px;
    background-color: red;
    display: inline-block;
    border-radius: 50px;
    margin-right: 24%;
    margin-top:0px;
    margin-bottom:-500px;
  }
  .number p{
    color: white;
    font-size: 20px;
    font-weight: bold;
    text-align: center;
    padding-top: 20px;
  }

  .number2{
    width: 60px;
    height: 60px;
    background-color: red;
    display: inline-block;
    border-radius: 50px;
    margin-left: 110px;
    margin-top:0px;
    margin-bottom:-500px;
  }
  .number2 p{
    color: white;
    font-size: 20px;
    font-weight: bold;
    text-align: center;
    padding-top: 20px;
  }

  .number3{
    width: 60px;
    height: 60px;
    background-color: red;
    display: inline-block;
    border-radius: 50px;
    margin-right: 0px;
    margin-left: 300px;
    margin-top:0px;
    margin-bottom:-500px;
  }
  .number3 p{
    color: white;
    font-size: 20px;
    font-weight: bold;
    text-align: center;
    padding-top: 20px;
  }

  .barred{
    width: 90%;
    height: 10px;
    background-color: red;
    /*position: absolute;*/
    margin-top: -25px;
    z-index: -1;
  }

</style>


<div class="container">
  <div style='margin:0px auto; width:1000px; margin-top:30px;  '>
    <div class="number-container">
      <div class="title-step"><p>Keranjang Belanja</p></div>
      <div class="title-step2"><p>Metode Pembayaran</p></div>
      <div class="title-step3"><p>Konfirmasi Pembayaran</p></div>
    </div>
  </div>
  <div style='margin:0px auto; width:900px; margin-bottom:50px;'>
    <div class="number-container">
      <div class="number"><p>1</p></div>
      <div class="number2"><p>2</p></div>
      <div class="number3"><p>3</p></div>
      <div class="barred"></div>
    </div>
  </div>

  <div style='border-top:2px solid #e4322b; padding-top:10px; font-size:20px; width:1200px;margin-bottom:40px;'>PEMBAYARAN GAGAL</div>

	<p>Pembayaran menggunakan credit card telah digagalkan, Anda bisa mencoba malakukan pembayaran kembali untuk order anda menggunakan credit card melalui halaman <b>Riwayat Status Pesanan</b> pada Account Anda.</p>
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
    <?php if($field->billing_name){  ?>
		<div class="panel panel-default">
		  <div class="panel-heading"><b><?php echo $lang_sender_checkout;?></b></div>
		  <div class="panel-body"><b><?php echo $field->billing_name; ?></b>,<br><?php echo $field->billing_address; ?></div>
		</div>
    <?php } ?>
    <?php if($field->shipping_name){  ?>
		<div class="panel panel-default">
		  <div class="panel-heading"><b><?php echo $lang_reciever_checkout;?></b></div>
		  <div class="panel-body"><b><?php echo $field->shipping_name; ?></b>,<br><?php echo $field->shipping_address; ?></div>
		</div>
    <?php } ?>

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
