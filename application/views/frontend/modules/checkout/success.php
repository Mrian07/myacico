<div class="container">
	<div class="row">
	  <div class="col-sm-12">
		<div class="my-border-title">
			<h3 class='my-title-page'><i class="fa fa-dot-circle-o" aria-hidden="true"></i> SUCCESS</h3>
		</div>
	  </div>
            <div class="col-sm-8">
                <div class="listOrder">
                    
                </div>
		</div>
	</div>
   
</div>
<script type="text/javascript">


$(document).ready(function() {



 var token = document.cookie.split('x-auth=')[1].split(';').shift();
 var filter =0;

 $.get(api_base_url+'/transaction/list?token='+token,
 function(data){
 console.log('data nya adalah:', token);

	var addressname = $('.addressname');
	var listOrder = $('.listOrder');
	if(data.length == 0) return box.append('<p>Data tidak ditemukan</p>');
	if(data.length == 0) { $('#biling-empty').show();  }else{ $('#biling-ready').show(); }
console.log('ini data',data[0]);

	listOrder.append(
        '<div class="well">Order ID :'+data[0].orderNumber+'</br>NO Invoice:'+data[0].invoiceNumber+'</div><b> Transaksi Berhasil</b>')


	});
});

</script>