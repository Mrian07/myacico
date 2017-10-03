<div class="container">
	<div class="row">
	  <div class="col-sm-12">
		<div class="my-border-title">
			<h3 class='my-title-page'><i class="fa fa-dot-circle-o" aria-hidden="true"></i> INFORMASI AKUN</h3>
		</div>
	  </div>
	</div>

	<div class="row">
		<div class="col-sm-3">
			<?php $this->load->view('frontend/modules/account/sidebar_menu'); ?>
		</div>
		<div class="col-sm-9">

			<div class="row">
				<div class="col-sm-4">
					<div class="panel panel-default">
					  <div class="panel-heading"><strong>Data Akun</strong></div>
					  <div class="panel-body"><?php echo $user->name; ?>, <?php echo $user->email; ?>
					  <div class='my-btn-general'><?php echo anchor('account/formAccount/', 'Ubah', array('class'=>'my-link-general'));?></div>
					  </div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="panel panel-default">
					  <div class="panel-heading"><strong>Ganti Password</strong></div>
					  <div class="panel-body">Jika ingin mengganti password login click button dibawah ini.
					  <div class='my-btn-general'><?php echo anchor('account/formPassword/', 'Ubah', array('class'=>'my-link-general'));?></div>

					  </div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="panel panel-default">
					  <div class="panel-heading"><strong>Data Billing</strong></div>
						<div class="rumah">
						</div>
                                          <div class='mybutton'></div>
					  <div class="panel-body">Belum ada data billing, data billing saat checkout pembelian.
                                              <br><br>
                                                <center>
                                                <?php echo anchor('account/formAddBilling/', 'tambah', array('class'=>'my-link-general'));?>			
                                                </center>
					  </div>
					</div>
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
 var apiurl = baseApiUrl + '/aduser/useraddress?addesstype=isbillto&token='+token;
 console.log('halo',apiurl);
 $.get(api_base_url+'/aduser/useraddress?addesstype=isbillto&token='+token,
 function(data){
 console.log('data nya adalah:', data);

	 var addressname = $('.addressname');
	 var rumah = $('.rumah');
var mybutton = $('.mybutton');
	 if(data.length == 0) return box.append('<p>Data tidak ditemukan</p>');


		data.forEach(function(p){
			rumah.append(

				'<tr><td>'+p.addressname+'  '+p.address1+' '+p.address2+' '+p.address3+' '+p.address3+' '+p.address4+' '+p.cityname+' '+p.postal+'</td></tr>'
			)
			mybutton.append(
				'<div class="my-btn-general"><a href="'+base_url+'account/formBilling/'+p.cbpartner_location_id+'" class="my-link-general">Ubah</a></div>'
			 //'<tr><td>July</td><td>Dooley</td><td>july@example.com</td></tr>'

	 // '<table class="table"><tr><thead><td>'+p.addressname+'</td><thead></tr> </table>'
		 //''+p.addressname+''
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
