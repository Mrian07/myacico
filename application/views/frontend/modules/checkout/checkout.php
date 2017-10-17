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
								echo"<p>". $alamat_billing."</p>";
							}else{
								echo"<p>". anchor('checkout/formAddBillingNew/', 'Update data billing', array('class'=>'btn btn-default')); echo"</p>";
							}?>
							
							<!--
							
							<div class="rumah" id='biling-ready' style='display:none'></div>
							<div class="billing-empty"  style='display:none'>
  							<p>Tidak ada data billing yang tersedia, silakan1 isi terlebih dulu.asdasd<p>
  							<p><?php// echo anchor('checkout/formAddBillingNew/', 'Update data billing', array('class'=>'btn btn-default'));?></p>
							</div>
-->
                                        <input type="hidden" id="idAddShip" name="idAddShip" value="<?php echo $this->session->userdata('shipping_address_id'); ?>" />
                                        <input type="hidden" id = "idBill" name="idBill" />
                                         <input type="hidden" id = "idDistri" name="idDistri" />
							<p><strong>DATA PENERIMA</strong></p>
                                                        <div id="shoping"></div>
                                                       <?php if($this->session->userdata('shipping_address_id'))
                                                       {
                                                           echo"<p>". $alamat_shipping."</p>";
                                                       }
                                                       else{
                                                         echo "<p>Tidak ada data penerima yang tersedia, silakan isi terlebih dulu.<p>";

                                                       }
                                                       ?> 
							
                                                             
							<!--<p><?php //echo anchor('checkout/formAddShippingNew/', 'Update data penerima', array('class'=>'btn btn-default'));?></p>-->
							<p><?php echo anchor('checkout/dataShipping/', 'Update data penerima', array('class'=>'btn btn-default'));?></p>
                                                   
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
				 <form method="post">
				  <div class="form-group">
					<label for="email">Pilih Type Pembayaran:</label>
<!--					<select class="form-control" id='payment_method' name='payment_method'>
						<option value=''>-Pilih-</option>
						<option value='01'>Transfer Bank</option>
						option value='02'>Ninja 250cc</option>
						<option value='03'>Credit Cart</option
					</select>-->
                                        <select name="payment_method" id="payment_method" class="form-control mandatory"></select>
                                      

				  </div>

				  <!-- TRANSFER BANK -->
				  <div id='transfer_bank' onclick='bank()'>
					Mohon dilakukan pembayaran ke :
					<table name="bank" id="bank" class="table">
                                           						
					</table>
				  </div>
                                  <div>
					Jasa Pengiriman :
					<table name="courier" id="courier" class="table">
                                           						
					</table>
				  </div>
                            <input type="submit" id="submit_btn" class="btn btn-primary" value="Finish"> <img src="<?php echo base_url('images/general/Spinner.gif');?>" id="spinner_img" style="display:none">

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
			<?php 			
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
			
			
			$this->data['hasil'] = json_decode($konten, true);
			//echo"<pre>"; print_r($hasil); 
			
			if(json_decode($konten, true)){
				$this->load->view('frontend/modules/checkout/checkout_cart',$this->data); 
			}else{
				echo"<center>Keranjang masih kosong</center>";
			}
			
			?>
		</div>

	</div>

 
	<?php //echo anchor('finish', 'Pesan Sekarang <i class="fa fa-angle-right"></i>', array('class'=>'btn btn-success my-btn-chekout'));?>

</div>


<script type="text/javascript">
        var namaBank = null;
        var pMethod = null;
        var billId = null;
        var idDistriship = null;
        var qty = 0;
        var totalBelanja = 0;
        var subtotal = 0;
        var fee = 0;
        var idkel = <?php echo $id_kelurahan;?>
        //var idDistrict = null;
     //alert(idkel);
        function get_bank(){
            if($("#payment_method").val() != 'C')
            {
               // $("#bank").slideDown();
                $("#bank").prop('disabled', true);
                $.get(api_base_url+"/payment/myacicoaccount", function(r){
                  r.forEach(function(o){
                      console.log('sam',o.code);
                    //$("#bank").append("<tr value='"+o.code+"'>"+o.account_name+"</tr>");
                  
//        $("#bank").append('<tr><td>'+o.code+',  '+o.account_name+' '+o.bank_name+' '+o.account_number+'</td></tr>')
        $("#bank").append('<tr><td><input type="radio" name="bank" value='+o.code+' </td><td></br>Nama Bank : '+o.bank_name+' </br>Atas Nama : '+o.account_name+' </br>Nomor rekening : '+o.account_number+' </td></tr>')

                  });
                  $("#bank").prop('disabled', false);
                }, "json" );
                
            }
         /* 
        */
      }
      
	$(document).ready(function()
	{
		var token = document.cookie.split('x-auth=')[1].split(';').shift();
		var filter =0;
                var api_method= api_base_url+'/payment/method';
                /*
                $.get(api_base_url+"/payment/method", function(r){
                console.log(r);
                r.forEach(function(o){
                  $("#payment_method").append("<option value='"+o.value+"'>"+o.name+"</option>");
                });
                $("#payment_method").prop('disabled', false).change(get_bank);
              }, "json" );
              */
     courier();
          var apiGet= api_base_url+'/aduser/getaddress?token='+token+'&addresstype=isshipto';

	$("form").submit(function(e){
//           
        var data = {};
		e.preventDefault();
    //var data = $(this).serialize(); freightAmt
   // var token = document.cookie.split('x-auth=')[1].split(';').shift();
   
               
		var apiurl = api_base_url + '/order/checkout?token='+token;
		//var a =shipingFee();
		var total = parseInt(subtotal + fee);
		//console.log('shipping:', fee);
		//console.log('sub nya adalah:', subtotal);
		//console.log('total nya adalah:', total);
			data.grandtotal = total;
			data.paymentMethod = pMethod;//c Ato R
			data.code = namaBank;
			data.billing_address_id = billId;
			data.shipping_address_id = idAddShip;
			//data.courier_id = address_name;
			data.isoncepickup = "Y";
		//    console.log('OK:', data);
		//   code
			data.courier ="JNE";
			data.courier_amount= fee;
    

    // success handling
	var error = function(er){
	  $('#spinner_img').hide();
	  $('#submit_btn').val('Kirim').removeClass('disabled');
	  console.log('OK:', er);
	  $.alert({
		title: 'Alert!',
		content: 'koneksi tidak berhasil, silahkan coba lagi!',
	  });
	};
    var success = function(r){ 
         $('#spinner_img').hide();
  $('#submit_btn').val('Kirim').removeClass('disabled');
         $.alert({
     title: 'Alert!',
     content: 'Transaksi Baru Berhasil',
    });
//      alert(r.message);
//      console.log('OK:', r.status);
	window.location.replace(base_url+"/checkout/success");

    };
    $('#spinner_img').show();
    $('#submit_btn').val('loading...').addClass('disabled');
    $.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify(data), dataType: "json", url: apiurl, success: success, error:error, timeout: 30000 });

    // do validation
  
  });

	});


	function bank(){
		 namaBank = $('input[name="bank"]:checked').val();
		alert(namaBank);
	}
   
	function idBilling(idBill){
		billId =idBill.toString();
		//alert('test',billId.val());
		return  billId;
	}
	function courier()
	{
		 
          $.get(api_base_url+'/freight/rates/jne?to_village_id='+idkel,function(r){
                  r.forEach(function(o){
                      console.log('sam',o.shipperId);
                       $("#courier").append('<tr><td><input type="radio" name="courier" value='+o.shipperId+' </td><td></br>Penyedia Jasa : '+o.shipperName+' </br></td></tr>')

                  });
                  $("#courier").prop('disabled', false);
                }, "json" );
                
		
               
	}
       
</script>
