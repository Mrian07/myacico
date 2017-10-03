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

				<?php echo anchor('account/TambahBukuAlamat', '<i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Buku Alamat', array('class'=>'btn btn-info'));?>
				<br/>
				<br/>
			<table class="table">
	    <thead>
	      <tr>
	        <th>Alamat lengkap</th>

	      </tr>

	    </thead>
			<tbody class="rumah">



		</tbody>
</table>
<div class="addressname">

</div>


</div>

		</div>
	</div>
</div>


 <script type="text/javascript">


var baseApiUrl = '<?php// echo $baseApiUrl; ?>';



$(document).ready(function() {
	var token = document.cookie.split('x-auth=')[1].split(';').shift();
	var filter =0;

	//var apiurl = baseApiUrl + '/aduser/useraddress?addesstype=isshipto&token='+token;
	//console.log('halo',apiurl);

	$.get(api_base_url+'/aduser/getaddress?token='+token+'&addesstype=isshipto',

	function(data){
	console.log('data nya adalah:', data);
	console.log('test',token);

		var addressname = $('.addressname');
		var rumah = $('.rumah');
		var box = $('#title-product');

		if(data.length == 0) return rumah.append('<p>Data tidak ditemukan</p>');


		 data.forEach(function(p){
			 rumah.append(


				 '<tr><td>'+p.addressname+'  '+p.address1+' '+p.address2+' '+p.address3+' '+p.address3+' '+p.address4+' '+p.cityname+' '+p.postal+'</td><td><a href="'+api_base_url+'/aduser/deleteaddress?token='+token+'&addessid='+p.cbpartner_location_id+'"><h4>'+p.cbpartner_location_id+'</h4></a></td></tr>'


			 )
		 $.ajax({ type:"POST", contentType: "application/json", url: api_base_url, success: success });



			 addressname.append(

				'<tr><td>July</td><td>Dooley</td><td>july@example.com</td></tr>'



		//"<body><div class='container'><h2><img src=''+p.addressname+''>+</h2><p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p><table class='table'><thead><tr><th>Firstname</th><th>Lastname</th><th>Email</th></tr></thead><tbody><tr><td>John</td><td>Doe</td><td>john@example.com</td></tr><tr><td>Mary</td><td>Moe</td><td>mary@example.com</td></tr></tbody></table></div></body>"
//"<div class='container'><h2>'+p.addressname'</h2><p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p><table class='table'><thead><tr><th>Firstname</th><th>Lastname</th><th>Email</th></tr></thead><tbody><tr><td>John</td><td>Doe</td><td>john@example.com</td></tr><tr><td>Mary</td><td>Moe</td><td>mary@example.com</td></tr><tr><td>July</td><td>Dooley</td><td>july@example.com</td></tr></tbody></table></div>"
		 //'<div class="row my-b-product"><div class="col-sm-2"><img src="'+p.imageurl+'" alt="..." style:border="0" height="100"></div><div class="col-sm-7"><h5 class="title-product" align="center"><a href="'+base_url+'product/detail/'+p.addressname+'">'+p.addressname+'</a></h5></div><div class="col-sm-3"><span class="product-price"> Rp.'+p.pricelist+'</span><br><p class="product-stock">Stock&nbspSisa&nbsp'+p.stock+'</p><p class="product-stock">Product&nbspAkan&nbspdikirim&nbsphari&nbspini&nbsp<br/>atau&nbspbesok</p><button class="dropbtnaddcar">ADD TO CART</button></div>'
)

});
});

	//$.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify({ "name":name}) , url: apiurl, success: success, error: error });







			//$.post( apiurl, data, success, "json" );



	});



</script>
