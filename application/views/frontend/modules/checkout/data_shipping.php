<div class='my-bg-title'>
	<div class="container">
		<div class="row">
		  <div class="col-sm-12">

			<i class="fa fa-angle-right" aria-hidden="true"></i> CHECKOUT / PENERIMA

		  </div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row" ng-controller="cartCnt">
		<div class="col-md-7">
			<div class="panel panel-default">
			  <div class="panel-heading">
			  <div class="row">
					<div class="col-md-8">
						<b>Data Billing/ Penerima</b>
					</div>
					<div class="col-md-4" style='text-align: right'>
						<?php echo anchor('checkout', '<i class="fa fa-angle-double-left" aria-hidden="true"></i> Kembali');?>
						
					</div>
				</div>	
			  </div>
			  <div class="panel-body">
				<?php echo anchor('checkout/formAddShippingNew', '<i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Buku Alamat', array('class'=>'btn btn-link'));?>
				<br/>
				<br/>
				<table class="table">
					<thead>

					  <tr>
						<th>Alamat lengkap</th>
						<th>Pilih</th>
					  </tr>

					</thead>
					<tbody class="rumah">



					</tbody>
				</table>
				

			  </div>
			</div>

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
</div>

<script type="text/javascript">

var base_url = '<?php echo base_url('checkout/pilihShipping') ?>';

$(document).ready(function() {
	var token = document.cookie.split('x-auth=')[1].split(';').shift();
	var filter =0;
        var apiGet= api_base_url+'/aduser/getaddress?token='+token;
$.ajax({
    type:"GET", 
    headers:{"token":token}, 
    //beforeSend: getAdd(),
    success: function(data){
        var rumah = $('.rumah');
		var id = $("#id").val();

		$("#hapus").val(null);

console.log('sam',data);
		if(data.length == 0) return rumah.append('<p>Data tidak ditemukan</p>');
		
		 data.forEach(function(p){
			 rumah.append('<tr><td>'+p.address_name+',  '+p.address1+' '+p.address2+','+p.city_name+', '+p.postal+'</td><td><a href="'+base_url+'/'+p.id+'" class="btn btn-warning" aria-label="Pilih">Pilih</a></td></tr>')
			/* $("#hapus"+p.id).click(function(e){

				var id = $("#id"+p.id).val();
				var apiurl1 = api_base_url +'/aduser/deleteaddress?token='+token;
		  		e.preventDefault();
		 		$.ajax({ type:"POST", contentType: "application/json", headers:{"token":token}, data:JSON.stringify({"id":p.id}) , url: apiurl1 });

		  	});*/


		});
        
        },
    dataType: "json", 
    url: apiGet});
/*
	$.get(api_base_url+'/aduser/getaddress?token='+token+'&addresstype=isshipto',

	function(data){
	console.log('data nya adalah:', data);
	// console.log('test',token);


		var rumah = $('.rumah');
		var id = $("#id").val();

		$("#hapus").val(null);


		if(data.length == 0) return rumah.append('<p>Data tidak ditemukan</p>');
		
		 data.forEach(function(p){
			 rumah.append('<tr><td>'+p.address_name+',  '+p.address1+' '+p.address2+' '+p.address3+' '+p.address3+' '+p.address4+' '+p.cityname+' '+p.postal+'</td><td><a href="'+base_url+'/'+p.id+'" class="btn btn-warning" aria-label="Pilih">Pilih</a></td></tr>')
			 $("#hapus"+p.id).click(function(e){

				var id = $("#id"+p.id).val();
				var apiurl1 = api_base_url +'/aduser/deleteaddress?token='+token;
		  		e.preventDefault();
		 		$.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify({"id":p.id}) , url: apiurl1 });

		  	});


		});
	});*/

});

</script>

