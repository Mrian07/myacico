<div class='my-bg-title'>
	<div class="container">
		<div class="row">
		  <div class="col-sm-12">

			<i class="fa fa-angle-right" aria-hidden="true"></i> WISHLIST

		  </div>
		</div>
	</div>
</div>



<div class="container">

 <!-- asdasd -->
	<div class="row">
		<div class="col-sm-3">
			<?php $this->load->view('frontend/modules/account/sidebar_menu'); ?>
		</div>
		<div class="container">
  <h2> WISHLIST </h2>

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
<!-- asdasd -->

<script type="text/javascript">
// $(document).ready(function() {
// 			var token = document.cookie.split('x-auth=')[1].split(';').shift();
// 			console.log('a',token);
// 			  $.get(api_base_url+'/product/getwishlist?token='+token,
// 			});
// });


//
//   $(document).ready(function() {
// 	var token = document.cookie.split('x-auth=')[1].split(';').shift();
//
//     $.get(api_base_url+'/product/addwishlist?token='+token+'&item_id=<?php $wishid ?>',
//
//   function(data){
// })
//   });
$(document).ready(function() {
	var token = document.cookie.split('x-auth=')[1].split(';').shift();
	var filter =0;
console.log('a',token);

    $.get(api_base_url+'/product/getwishlist?token='+token,


	function(data){


	// console.log('test',token);


		var rumah = $('.rumah');
		var id = $("#id").val();

		$("#hapus").val(null);


		if(data.length == 0) return rumah.append('<p>Data tidak ditemukan</p>');

		 data.forEach(function(p){
			 rumah.append('<tr><td>'+p.wishListDate+',  '+p.wishListDate+' '+p.wishListDate+' '+p.productID+' '+p.productID+' '+p.productID+' '+p.productID+' '+p.productID+'</td></tr>')
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
