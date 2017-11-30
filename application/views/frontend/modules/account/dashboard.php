
<div class="container">
	<div class='my-bg-title'>

		<i class="fa fa-angle-right" aria-hidden="true"></i> DASHBOARD

	</div>
</div>

<div class="container my-container-white">
	<div class="row">
		<div class="col-sm-3">
			<?php  $this->load->view('frontend/modules/account/sidebar_menu'); ?>
		</div>
		<div class="col-sm-9 dashboard">

        <p>Hello <b><?php echo $user->name; ?></b>, <br><br><?php echo $lang_dar; ?></p>
			
		<hr>

		<h4><?php echo $lang_acc; ?></h4>
		<p><?php echo $lang_info; ?></p>
		<p><?php echo anchor('account/informasiAkun/', $lang_change, array('class'=>'btn btn-default'));?></p>
		<h4><?php echo $lang_pay; ?></h4>
		<p><?php echo $lang_you; ?></p>
		<p><?php echo anchor('account/riwayatStatusPesanan/', $lang_confirm, array('class'=>'btn btn-default'));?><p/>
		<h4>Newsletter</h4>
				<div class="rumah"></div>
		<!-- <p><?php echo anchor('customer/government/', 'Daftar', array('class'=>'btn btn-default'));?></p> -->

	</div>
</div>
</div>

<script type="text/javascript">

var link_url = '<?php echo base_url('account/editBukuAlamat') ?>';

$(document).ready(function() {
	var token = document.cookie.split('x-auth=')[1].split(';').shift();
	console.log('aaa',token);
	var api2 = api_base_url +'/newsletter/checkemail';

	//$.get(api_base_url+'/aduser/getaddress?addresstype=isshipto',

	$.ajax({
	    type:"GET",
	    headers:{"token":token},
	    //beforeSend: getAdd(),
	    success: function(data){

	        var addressname = $('.addressname');
	 var rumah = $('.rumah');
$("#hapus").val(null);
if(data.status == 1 ) {
	rumah.append('<tr><td><?php echo $lang_news; ?></td></tr>');
}else{
	rumah.append('<tr><td><?php echo $lang_news2; ?></td></tr>');
}

	 // rumah.append('<tr><td>'+p.address_name+',  '+p.address1+' '+p.address2+' '+p.city_name+' '+p.postal+'</td><td><a href="'+link_url+'/'+p.id+'" class="btn btn-link" aria-label="Ubah"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td><td><a class="btn btn-link" id="hapus'+p.id+'" aria-label="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td></tr>')



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


});

</script>
<script type="text/javascript">
// var baseApiUrl = '<?php echo $baseApiUrl; ?>';
//
// $(document).ready(function() {
//
//   $('form').submit(function(e){
//     e.preventDefault();
//
//     var apiurl = baseApiUrl + '/login';
//     var data = $(this).serialize();
//
//     // success handling
//     var success = function(r){
//       console.log('OK:', r);
//       alert(r.message);
//     };
//
//     $.post( apiurl, data, success, "json" );
//     //$.ajax({ type:"GET", dataType: "json", url: apiurl, success: success, error: error });
//
//   });
//
// });
</script>
