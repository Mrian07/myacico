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
    width: 100px;
    display: inline-block;
    margin-top:0px;
    margin-bottom:0px;
    margin-left: 220px;
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
    margin-left: 200px;
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
    background-color: red;
    position: absolute;
    height: 10px;
    z-index: -1;
    /*width: 40%;*/
    width: 800px;
    margin-top: -25px;
    margin-left:5px;
  }

</style>
<div class="container font2">

  <div style='margin:0px auto; width:1000px; margin-top:30px;  '>
    <div class="number-container">
      <div class="title-step"><p><?=$lang_shoping_cart;?></p></div>
      <div class="title-step2"><p>Ringkasan</p></div>
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

  <!-- <br><p align='center'><img src="<?php //echo base_url('images/general/step3.jpg'); ?>" border="0"></p> -->
    <div style='border-top:2px solid #e4322b; padding-top:10px; font-size:20px; width:1200px;margin-bottom:40px;'>TERIMA KASIH</div>


  <!-- <br>
	<h3>TERIMA KASIH</h3> -->

	<p><?php echo $lang_status_order.' '.anchor('account/riwayatStatusPesanan', '<b>'.$lang_Field_ClickMe.'</b>');?>.</p>



	<div class="row">
	  <div class="col-sm-6">
		<div class="panel panel-default">
		  <div class="panel-heading"><b><?php echo $lang_no_order;?></b></div>
		  <div class="panel-body">
		  <form class="form-horizontal">
		  <div class="form-group">
			<label class="control-label col-sm-4" for="email"><?php echo $lang_no_order;?></label>
			<div class="col-sm-8">
			  <p class="form-control-static"><?php echo $field->orderNumber; ?></p>
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-4" for="email"><?php echo $lang_no_invoice;?></label>
			<div class="col-sm-8">
			  <p class="form-control-static"><?php echo $field->invoiceNumber; ?></p>
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-4" for="email"><?php echo $lang_payment_method;?></label>
			<div class="col-sm-8">
			  <p class="form-control-static"><?php echo $field->paymentMethod; ?></p>
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-4" for="email"><?php echo $lang_transaction_status;?></label>
			<div class="col-sm-8">
			  <p class="form-control-static"><?php echo $field->paymentMethod; if($field->paymentMethod=='Bank Transfer'){
				 echo"<br><i>".$field->accountNameTo;
				 echo"<br>".$field->accountNumberTo;
				 echo"<br>".$field->bankNameTo."</i>";
				  }?></p>
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-4" for="email"><?php echo $lang_transaction_status;?></label>
			<div class="col-sm-8">
			  <p class="form-control-static"><?php echo $field->transactionStatus; ?></p>
			</div>
		  </div>
		   <div class="form-group">
			<label class="control-label col-sm-4" for="email"><?php echo $lang_transaction_date;?></label>
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
		  <div class="panel-heading"><b><?php echo $lang_sender_checkout;?></b></div>
		  <div class="panel-body"><b><?php echo $field->billing_name; ?></b>,<br><?php echo $field->billing_address; ?></div>
		</div>

		<div class="panel panel-default">
		  <div class="panel-heading"><b><?php echo $lang_reciever_checkout;?></b></div>
		  <div class="panel-body"><b><?php echo $field->shipping_name; ?></b>,<br><?php echo $field->shipping_address; ?></div>
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
<br><br>
