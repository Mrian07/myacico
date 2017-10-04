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
			<?php $this->load->view('frontend/modules/checkout/checkout_cart',$this->data); ?>		
		</div>	
	</div>
</div>

<script type="text/javascript">

var base_url = '<?php echo base_url('account/editBukuAlamat') ?>';

$(document).ready(function() {
	var token = document.cookie.split('x-auth=')[1].split(';').shift();
	var filter =0;

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
	});

});

</script>

