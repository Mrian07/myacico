<link href="<?php echo base_url('assets/css/style_finish.css');?>" rel="stylesheet">
<div class="container font2">

  <div style='margin:0px auto; width:1000px; margin-top:30px;  '>
    <div class="number-container">
      <div class="title-step"><p><?=$lang_shoping_cart;?></p></div>
      <div class="title-step2"><p><?=$lang_shoping_method_cart;?></p></div>
      <div class="title-step3"><p><?=$lang_payment_confirm;?></p></div>
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
    <div style='border-top:2px solid #e4322b; padding-top:10px; font-size:20px; width:1200px;margin-bottom:40px;'><?php echo $lang_thx; ?></div>


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
      <label class="control-label col-sm-5" for="email"><?php echo $lang_onkas; ?></label>
      <div class="col-sm-7">
        <p class="form-control-static">Rp.<?php echo money($field->courier_amount); ?></p>
      </div>
      </div>
     <div class="form-group">
      <label class="control-label col-sm-5" for="email"><?php echo $lang_total_payment; ?></label>
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
