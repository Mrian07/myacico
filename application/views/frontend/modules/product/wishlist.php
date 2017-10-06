asdasdasd

<?php  echo $wish_id; ?>


<script>
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
  var a = '<?php echo $wish_id?>';

  $.get(api_base_url+'/product/addwishlist?token='+token+'&item_id='+a,


	function(data){
	console.log('data nya adalah:', data);
   console.log('datanya',token);
	// console.log('test',token);


		var rumah = $('.rumah');
		var id = $("#id").val();

		$("#hapus").val(null);


		if(data.length == 0) return rumah.append('<p>Data tidak ditemukan</p>');

		 data.forEach(function(p){
			 rumah.append('<tr><td>'+p.address_name+',  '+p.address1+' '+p.address2+' '+p.address3+' '+p.address3+' '+p.address4+' '+p.cityname+' '+p.postal+'</td><td><a href="'+link_url+'/'+p.id+'" class="btn btn-link" aria-label="Ubah"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td><td><a class="btn btn-link" id="hapus'+p.id+'" aria-label="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td></tr>')
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
