<div class='my-bg-title'>
	<div class="container">
		<div class="row">
		  <div class="col-sm-12">

			<i class="fa fa-angle-right" aria-hidden="true"></i> INFORMASI AKUN

		  </div>
		</div>
	</div>
</div>

<div class="container my-container-white">
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
						<div class="panel-body">
						<?php
						if(isset($alamat_billing)){
							echo $alamat_billing;
							echo "<br><center><div class='my-btn-general'>";
							echo anchor('account/formBilling/'.$id_billing, 'Ubah', array('class'=>'my-link-general')); echo"</div></center>";
						}else{
							echo"Belum ada data billing, data billing diperlukan saat checkout pembelian.
						<br><br><center><div class='my-btn-general'>";
							echo anchor('account/formAddBilling/', 'Tambah', array('class'=>'my-link-general')); echo"</div></center>";
						}?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
/*
var link_url = '<?php echo base_url('account/editBukuAlamat') ?>';

$(document).ready(function() {
	var token = document.cookie.split('x-auth=')[1].split(';').shift();

	var api2 = api_base_url +'/aduser/getaddress?addresstype=isbillto';


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



	console.log('da1',token);
	console.log('asd',api2);

});*/

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
