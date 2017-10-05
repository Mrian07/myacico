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
			<p>Silakan lengkapi data billing Anda dibawah ini.</p>

			<div class="panel panel-default">
				<div class="panel-body">
                                    <div class="transactionlist">
        
                                    </div>
                                     <div class="listOrder">
        
                                    </div>
                                    
                                      <input type="hidden" id="idTrans" name="idTrans" value="<?php echo $this->uri->segment(3);?>" />
                                       


                   
                                        
				</div>
			</div>

		</div>

	</div>
</div>
<script type="text/javascript">


$(document).ready(function() {
	


 var token = document.cookie.split('x-auth=')[1].split(';').shift();
 var filter =0;
var idTrans = $('#idTrans').val();
 $.get(api_base_url+'/transaction/'+idTrans+'?token='+token,
 function(data){
 
var idTrans = $('#idTrans').val();
//console.log('data nya adalah:', data.items[0]);
console.log('data nya adalah:', data);

console.log('data nya adalah2:', data['items']);

	var addressname = $('.addressname');
	//var noOrder = $('.listOrder');
        var listOrder = $('.listOrder');
        var transactionlist = $('.transactionlist');
	if(data.length == 0) return box.append('<p>Data tidak ditemukan</p>');
	if(data.length == 0) { $('#biling-empty').show();  }else{ $('#biling-ready').show(); }
//console.log('ini data',data[1]);
//	data.forEach(function(p){
            //alert(p.waktuTransaksi));die();
            //var tanggal = new DateTime(p.waktuTransaksi).toDateString("dd-mm-yyyy");
          $("#noOrder").val(data.orderNumber);
          var tanggal = data.waktuTransaksi;
          var tanggal = tanggal.split('-');
          var time = tanggal[2].split(' ');
          var jam = time[1].split(':');
          var jam = jam[0]+':'+jam[1];
          var hari = time[0];
          var bulan =tanggal[1];
          var tahun = tanggal[0];
          var time = tanggal[2].split(' ');
          var tanggal = hari+'-'+bulan+'-'+tahun+', '+jam;
          $("#tanggalOrder").val(tanggal);
          $("#imageurl").val(data.items[0]['imageurl']);
          var gambar = data.items[0]['imageurl'];
//          alert(data.items[0]['imageurl']);
          //var a=data.items[];
          var stat = 1;
          var i = 0;
//          console.log('test',a);
//          while(stat){
//              if(data.items[var i])
//              {
//                  console.log('test',data.items[var i]);
//              }
//              else{
//                  stat = 2;
//              }
//             var items[i] = data.items[i];
//             
//          }
        transactionlist.append
      ('<div class="well"> Tanggal Order:'+tanggal+'</br> Order ID:'+data.orderNumber+'</br> Status Pesanan: <b>'+data.transactionStatus+'</b></div>')
	
	data['items'].forEach(function(p){
	
	listOrder.append
        ('<div class="row"><div class="col-sm-6"><img src="'+p.imageurl+'" alt="check Out" style="width:150px;height:100px;"></div><div class="col-sm-6"> Harga :Rp'+p.subtotal+'</div></div>')
	
	});


	});
});

</script>
