<div class='my-bg-title'>
	<div class="container">
		<div class="row">
		  <div class="col-sm-12">

			<i class="fa fa-angle-right" aria-hidden="true"></i> Detail Pesanan

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
			<p><?php echo anchor('account/riwayatStatusPesanan', '<i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Kembali');?></p>
			<p>Silakan lengkapi data billing Anda dibasdasdsawah ini.</p>

			<div class="panel panel-default">
				<div class="panel-body">
                                    <div class="transactionlist">
        
                                    </div>
                                     <div class="listOrder">
        
                                    </div>
                                    
                                      <input type="hidden" id="idTrans" name="idTrans" value="<?php echo $this->uri->segment(3);?>" />
                                      
                                    <div id="totaldetail" >

                                    </div>
                   
                                        
				</div>
			</div>

		</div>

	</div>
</div>
<script type="text/javascript">


var link_url = '<?php echo base_url('account/editBukuAlamat') ?>';

$(document).ready(function() {
	var token = document.cookie.split('x-auth=')[1].split(';').shift();

	var api2 = api_base_url+'/transaction/'+idTrans+'?token='+token;

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



// $(document).ready(function() {
	


//  var token = document.cookie.split('x-auth=')[1].split(';').shift();
//  var filter =0;
// var idTrans = $('#idTrans').val();
//  $.get(api_base_url+'/transaction/'+idTrans+'?token='+token,
//  function(data){
 
// var idTrans = $('#idTrans').val();
// //console.log('data nya adalah:', data.items[0]['shipmentAddress']);
// console.log('data nya adalah:', token);

// //console.log('data nya adalah2:', data['items']);

// 	var addressname = $('.addressname');
// 	//var noOrder = $('.listOrder');
//         var listOrder = $('.listOrder');
//         var transactionlist = $('.transactionlist');
// 	if(data.length == 0) return box.append('<p>Data tidak ditemukan</p>');
// 	if(data.length == 0) { $('#biling-empty').show();  }else{ $('#biling-ready').show(); }
// //console.log('ini data',data[1]);
// //	data.forEach(function(p){
//             //alert(p.waktuTransaksi));die();
//             //var tanggal = new DateTime(p.waktuTransaksi).toDateString("dd-mm-yyyy");
//           $("#noOrder").val(data.orderNumber);
//           $("#detailtotal").val(data.grandTotal);
//           var tanggal = data.waktuTransaksi;
//           var tanggal = tanggal.split('-');
//           var time = tanggal[2].split(' ');
//           var jam = time[1].split(':');
//           var jam = jam[0]+':'+jam[1];
//           var hari = time[0];
//           var bulan =tanggal[1];
//           var tahun = tanggal[0];
//           var time = tanggal[2].split(' ');
//           var tanggal = hari+'-'+bulan+'-'+tahun+', '+jam;
//           $("#tanggalOrder").val(tanggal);
//           $("#imageurl").val(data.items[0]['imageurl']);
//           var gambar = data.items[0]['imageurl'];
//         var reverse = data.grandTotal.toString().split('').reverse().join('');
// 	var ribuan = reverse.match(/\d{1,3}/g);
// 	var hasil = ribuan.join('.').split('').reverse().join('');
// //          alert(data.items[0]['imageurl']);
//           //var a=data.items[];
//           var stat = 1;
//           var i = 0;
// //          console.log('test',a);
// //          while(stat){
// //              if(data.items[var i])
// //              {
// //                  console.log('test',data.items[var i]);
// //              }
// //              else{
// //                  stat = 2;
// //              }
// //             var items[i] = data.items[i];
// //             
// //          }
    
//         transactionlist.append
//       ('<div class="well"> Tanggal Order: '+tanggal+'</br> Order ID:'+data.orderNumber+'</br> Status Pesanan: <b>'+data.transactionStatus+'</b></br> Alamat Pengiriman: '+data.items[0]['shipmentAddress']+'</div>')
// //	$( "p" ).append( document.createTextNode(hasil));
//         $("#totaldetail").append('<hr>Total Harga : <b>Rp. '+hasil+'</b>')
// //    totalDetail.append('<div class="row"><div class="col-sm-6">Produk : <b>'+data.grandTotal+'</b></div></div>');

// 	data['items'].forEach(function(p){
// 	var reverse = p.subtotal.toString().split('').reverse().join('');
// 	var ribuan = reverse.match(/\d{1,3}/g);
// 	var ribuan = ribuan.join('.').split('').reverse().join('');
// 	listOrder.append
//         ('<div class="row"><div class="col-sm-6">Produk : <b>'+p.name+'</b></br><img src="'+p.imageurl+'" alt="check Out" style="width:100px;height:70px;"></div><div class="col-sm-6"> </br>Jumlah: '+p.qty+' </br>Harga :Rp. '+ribuan+'</div></div>')
	
// 	});
      
// 	});
// });

</script>
