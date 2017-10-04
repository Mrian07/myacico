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
				<div class="form-group">
					<label>Nama</label>
				<input type="text" id = "name"name="name"   />
				</div>
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

	$.get(api_base_url+'/aduser/getaddress?token='+token+'&addresstype=isshipto',
	// $.get(api_base_url+'/aduser/useraddress?addesstype=isshipto&token='+token,

	function(data){
	console.log('data nya adalah:', data);
	// console.log('test',token);

		var addressname = $('.addressname');
		var rumah = $('.rumah');
		var id = $("#id").val();

		$("#hapus").val(null);


		if(data.length == 0) return rumah.append('<p>Data tidak ditemukan</p>');


		 data.forEach(function(p){
			 rumah.append(



				 '<tr><td>'+p.address_name+'  '+p.address1+' '+p.address2+' '+p.address3+' '+p.address3+' '+p.address4+' '+p.cityname+' '+p.postal+'</td><td><a class="btn btn-danger" id="hapus'+p.id+'" aria-label="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a><button type="button" id="hapus'+p.id+'" class="btn btn-link">Link</button></a></td></tr>'


			 )
			 $("#hapus"+p.id).click(function(e){

					var id = $("#id"+p.id).val();
				  var apiurl1 = api_base_url +'/aduser/deleteaddress?token='+token;
		  		e.preventDefault();
		 			$.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify({"id":p.id}) , url: apiurl1 });

		  	});
			 console.log("kampret", token);





			 addressname.append(





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
