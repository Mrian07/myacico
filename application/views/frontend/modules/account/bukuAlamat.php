<div class='my-bg-title'>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">

			<i class="fa fa-angle-right" aria-hidden="true"></i> BUKU ALAMAT

			</div>
		</div>
	</div>
</div>


<div class="container">


	<div class="row">
		<div class="col-sm-3">
			<?php $this->load->view('frontend/modules/account/sidebar_menu'); ?>
		</div>
		<div class="col-sm-9">

		<?php echo anchor('account/TambahBukuAlamat', '<i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Buku Alamat', array('class'=>'btn btn-link'));?>
		<br/>
		<br/>

		<table class="table">
			<thead>

			  <tr>
				<th>Alamat lengkap</th>
				<th>Ubah</th>
				<th>Hapus</th>
			  </tr>

			</thead>
			<tbody class="rumah">



			</tbody>
		</table>



</div>

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
			 rumah.append('<tr><td>'+p.address_name+',  '+p.address1+' '+p.address2+' '+p.address3+' '+p.address3+' '+p.address4+' '+p.cityname+' '+p.postal+'</td><td><a href="'+base_url+'/'+p.id+'" class="btn btn-link" aria-label="Ubah"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td><td><a class="btn btn-link" id="hapus'+p.id+'" aria-label="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td></tr>')
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
