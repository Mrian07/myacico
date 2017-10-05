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
                                    
                                      <input type="text" id="idTrans" name="idTrans" value="<?php echo $this->uri->segment(3);?>" />
                                        <div class="form-group">
					  <label>No Order</label>
					  <input type="text" id="noOrder" name="nolOrder" class="form-control mandatory"/>
					</div>
					<div class="form-group">
					  <label><?php echo $lang_addres; ?>*</label>
					  <input type="text" id = "tanggalOrder"name="tanggalOrder" class="form-control mandatory"/>
					  <input type="text" id = "imageurl" name="imageurl" class="form-control mandatory"/>
					</div>
					<div class="form-group" style="display:none" id="ditric_box">
							<label><?php echo $lang_Keca; ?>*</label>
					  <select name="district_id" id="district_id" class="form-control mandatory"></select>
					</div>
					<div class="form-group" style="display:none" id="city_box">
						<label><?php echo $lang_kota; ?>*</label>
					  <select name="city" id="city_sel" class="form-control mandatory"></select>
					</div>
					<div class="form-group">
					<label><?php echo $lang_PostCode; ?>*</label>
						<input type="text" id="postal" name="postal" class="form-control mandatory" />
					</div>
					<div class="form-group">
					<label>Handphone*</label>
						<input type="text" id = "phone"name="phone" class="form-control mandatory" />
					</div>
					<div class="form-group">
					<label>Telepon</label>
						<input type="text" id = "phone2"name="phone2" class="form-control"/>
					</div>
					<div class="form-group" style="display: none;" id="region_box">
					<label><?php echo $lang_Provience; ?>*</label>
					  <select name="province" id="region_sel" class="form-control mandatory"></select>
					</div>
					<div class="form-group">
					<label><?php echo $lang_Country; ?>*</label>
					  <select name="country" id="country_sel" class="form-control mandatory" disabled >
						<option value="">--pilih--</option>
					  </select>
					</div>


                                      <div class="clearfix">
                                          						
                                      </div>
                                        
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
      ('<div> Tanggal Order:'+tanggal+'</br> Order ID:'+data.orderNumber+'</br> Status Pesanan: <b>'+data.transactionStatus+'</b></div>')
 
	listOrder.append
        ('<div class="row"><div class="col-sm-6"><img src="'+gambar+'" alt="check Out" style="width:150px;height:100px;"></div><div class="col-sm-6"> Harga :Rp'+data.grandTotal+'</div></div>')
	
//	});


	});
});

</script>
