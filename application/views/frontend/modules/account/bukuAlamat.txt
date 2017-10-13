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

var link_url = '<?php echo base_url('account/editBukuAlamat') ?>';

$(document).ready(function() {
	var token = document.cookie.split('x-auth=')[1].split(';').shift();

	var api2 = api_base_url +'/aduser/getaddress?addresstype=isshipto';

	//$.get(api_base_url+'/aduser/getaddress?addresstype=isshipto',

	$.ajax({
	    type:"GET",
	    headers:{"token":token},
	    //beforeSend: getAdd(),
	    success: function(data){
	        var addressname = $('.addressname');
	 var rumah = $('.rumah');
$("#hapus").val(null);
	        data.forEach(function(p){
	 rumah.append('<tr><td>'+p.address_name+',  '+p.address1+' '+p.address2+' '+p.city_name+' '+p.postal+'</td><td><a href="'+link_url+'/'+p.id+'" class="btn btn-link" aria-label="Ubah"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td><td><a class="btn btn-link" id="hapus'+p.id+'" aria-label="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td></tr>')
	 $("#hapus"+p.id).click(function(e){

		var id = $("#id"+p.id).val();


		var apiurl1 = api_base_url +'/aduser/deleteaddress?token='+token;
			e.preventDefault();

		 	$.ajax({ type:"POST", contentType: "application/json",  headers:{"token":token}, data:JSON.stringify({"id":p.id}) , url: apiurl1 });

		});
	 });
	        },
	    dataType: "json",
	    url: api2});



//
// $.ajax({ type:"GET", dataType:"JSON", success: function(data){
// 	console.log('data nya adalah:', token);
// 	// console.log('test',token);
//
//
// 		var rumah = $('.rumah');
// 		var id = $("#id").val();
//
// 		$("#hapus").val(null);
//
//
// 		data.forEach(function(p){
// 			rumah.append('<tr><td>'+p.address_name+',  '+p.address1+' '+p.address2+' '+p.city_name+' '+p.postal+'</td><td><a href="'+link_url+'/'+p.id+'" class="btn btn-link" aria-label="Ubah"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td><td><a class="btn btn-link" id="hapus'+p.id+'" aria-label="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td></tr>')
			// $("#hapus"+p.id).click(function(e){
			//
			//  var id = $("#id"+p.id).val();
			//
			//
			//  //var apiurl1 = api_base_url +'/aduser/deleteaddress?token='+token;
			// 	 e.preventDefault();
			//
			//  // 	$.ajax({ type:"POST", contentType: "application/json",  headers:{"token":"token"}, data:JSON.stringify({"id":p.id}) , url: apiurl1 });
			//
			//  });
//
//
// 	 });
//
//
//  },url: api2, headers:{"token":token}
//
//  });

 // $.ajax({
 //  type : "GET",
 //  contentType: "application/json",
 //   url: api2,
 //   beforeSend: function(xhr) {
 //     xhr.setRequestHeader("token", "token");
 //   },
 //   success: function(data) {
 //   }
 // });
	console.log('da1',token);
	console.log('asd',api2);

});

</script>
