<div class='my-bg-title'>
	<div class="container">
		<div class="row">
		  <div class="col-sm-12">

			<i class="fa fa-angle-right" aria-hidden="true"></i> RIWAYAT PESANAN

		  </div>
		</div>
	</div>
</div>
<div class="container">

	<div class="row">
		<div class="col-sm-3">
			<?php $this->load->view('frontend/modules/account/sidebar_menu'); ?>
		</div>
		<div class="col-sm-8">
			<table class="table table-striped">
			<thead>
			  <tr>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Email</th>
			  </tr>
			</thead>
			 <tbody>
			  <tr>
				<td>John</td>
				<td>Doe</td>
				<td>john@example.com</td>
			  </tr>
			  <tr>
				<td>Mary</td>
				<td>Moe</td>
				<td>mary@example.com</td>
			  </tr>
			  <tr>
				<td>July</td>
				<td>Dooley</td>
				<td>july@example.com</td>
			  </tr>
			</tbody>
		  </table>
	
			<div class='listOrder'>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">


$(document).ready(function() {
	


 var token = document.cookie.split('x-auth=')[1].split(';').shift();
 var filter =0;

 $.get(api_base_url+'/order/cart/detail?token='+token,
 function(data){
 console.log('data nya adalah:', data);

	var addressname = $('.addressname');
	var listOrder = $('.listOrder');
	if(data.length == 0) return box.append('<p>Data tidak ditemukan</p>');
	if(data.length == 0) { $('#biling-empty').show();  }else{ $('#biling-ready').show(); }

	data.forEach(function(p){
	listOrder.append(

	'<tr><td>'+p.address_name+',  '+p.address1+' '+p.address2+' '+p.address3+' '+p.address3+' '+p.address4+' '+p.cityname+' '+p.postal+'</td></tr>'
	)
	mybutton.append(
	'<div class="my-btn-general"><a href="'+base_url+'account/formBilling/'+p.id+'" class="my-link-general">Ubah</a></div>'
	)
	});


	});
});

</script>
