<div class='my-bg-title'>
	<div class="container">
		<div class="row">
		  <div class="col-sm-12">

			<i class="fa fa-angle-right" aria-hidden="true"></i> INFORMASI AKUN

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

						<div class="panel-body" id='biling-ready' style='display:none'>
				<div class="rumah"></div>
							</div>
							<div class='mybutton'></div>
						</div>

						<div class="panel-body" id='biling-empty' style='display:none'>Belum ada data billing, data billing diperlukan saat checkout pembelian.
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

<script type="text/javascript">

var link_url = '<?php echo base_url('account/editBukuAlamat') ?>';

$(document).ready(function() {
	var token = document.cookie.split('x-auth=')[1].split(';').shift();

	var api2 = api_base_url +'/aduser/getaddress?addresstype=issbilto';

	//$.get(api_base_url+'/aduser/getaddress?addresstype=isshipto',

	$.ajax({
	    type:"GET",
	    headers:{"token":token},
	    //beforeSend: getAdd(),
	    success: function(data){
				var addressname = $('.addressname');
				var rumah = $('.rumah');
				var mybutton = $('.mybutton');
				if(data.length == 0) return box.append('<p>Data tidak ditemukan</p>');
				if(data.length == 0) { $('#biling-empty').show();  }else{ $('#biling-ready').show(); }

				data.forEach(function(p){
			 	rumah.append(

			 	'<tr><td>'+p.address_name+',  '+p.address1+' '+p.address2+' '+p.address3+' '+p.address3+' '+p.address4+' '+p.city_name+' '+p.postal+'</td></tr>'
			 	)
			 	mybutton.append(
			 	'<div class="my-btn-general"><a href="'+base_url+'account/formBilling/'+p.id+'" class="my-link-general">Ubah</a></div>'
			 	)
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


<!-- <script type="text/javascript">


$(document).ready(function() {



 var token = document.cookie.split('x-auth=')[1].split(';').shift();
 var filter =0;

 $.get(api_base_url+'/aduser/getaddress?token='+token+'&addresstype=isbillto',
 function(data){
// console.log('data nya adalah:', data);

	var addressname = $('.addressname');
	var rumah = $('.rumah');
	var mybutton = $('.mybutton');
	if(data.length == 0) return box.append('<p>Data tidak ditemukan</p>');
	if(data.length == 0) { $('#biling-empty').show();  }else{ $('#biling-ready').show(); }

	data.forEach(function(p){
	rumah.append(

	'<tr><td>'+p.address_name+',  '+p.address1+' '+p.address2+' '+p.address3+' '+p.address3+' '+p.address4+' '+p.city_name+' '+p.postal+'</td></tr>'
	)
	mybutton.append(
	'<div class="my-btn-general"><a href="'+base_url+'account/formBilling/'+p.id+'" class="my-link-general">Ubah</a></div>'
	)
	});


	});
});

</script>  -->
