<div class='my-bg-title'>
	<div class="container">
		<div class="row">
		  <div class="col-sm-9">

			<i class="fa fa-angle-right" aria-hidden="true"></i> WISHLIST

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


		<br/>
		<br/>

		<table class="table">
			<thead>

			  <tr>
				<th>Wishlist</th>

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
			 rumah.append(
		'<div class="col-sm-6"><div class="row my-b-product"><div class="col-sm-2"><img src="'+p.imageUrl+'" alt="..." style:border="0" height="100"></div><div class="col-sm-7"><h5 class="title-product" align="center"><a href="'+base_url+'product/detail/'+p.m_product_id+'">'+p.name+'</a></h5></div></div>'
	)
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
