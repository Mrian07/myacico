<style>
.disabled {
   pointer-events: none;
   cursor: default;
}
</style>

<p align="center"><?php echo $lang_riw; ?></p>


<div class="row"  style='width: 100%; margin:0 auto;'>
    <div id="no-more-tables">
        <table class="col-md-12 table-bordered table-striped table-condensed cf">
        	<thead class="cf">
        	  <tr>
        		<th><?php echo $lang_tgl; ?></th>
        		<th><?php echo $lang_tota; ?></th>
        		<th><?php echo $lang_metod; ?></th>
        		<th><?php  echo $lang_orde;?></th>
        		<th>Status</th>
        		<th>Detail</th>
        		<th>Konfirmasi/ Credit Card</th>
        	  </tr>
        	</thead>
        	<tbody>
        		<?php foreach($hasil as $items): 	?>
        			<tr>
        				<td data-title="Tanggal Order"><?php echo tanggal_time($items['waktuTransaksi']);?></td>
        				<td data-title="Total Pembayaran">Rp.<?php echo money($items['grandTotal']);?></td>
        				<td data-title="Metode Pembayaran"><?php echo $items['paymentMethod'];?></td>
        				<td data-title="Nomor Pesanan"><?php echo $items['orderNumber'];?></td>
        				<td data-title="Status"><?php echo $items['transactionStatus'];?></td>
        				<td data-title="Detail"><?php echo anchor('account/formTransactionDetail/'.$items['idTransaksi'], 'Detail', array('class'=>'btn btn-info'));?></td>
        				<td data-title="Konfirmasi/ Credit Card"><?php
                                       //if($items['productId'])
        					if($items['paymentMethod']=='Bank Transfer'){
        						if($items['transactionStatus']=='PAID'){
        							echo anchor('#', 'Konfirmasi', array('class'=>'btn btn-warning disabled'));
        						}else{
        							echo anchor('account/confirm/'.$items['idTransaksi'], 'Konfirmasi', array('class'=>'btn btn-warning'));
        						}
        					}elseif($items['paymentMethod']=='Online Payment-BCA KlikPay'){
                                                    if($items['transactionStatus']=='PAID'){
        							echo anchor('#', 'Paid', array('class'=>'btn btn-warning disabled'));
        						}else{
        							echo anchor('checkout/paymentByOnline/'.$items['idTransaksi'].'/'.$items['token'], 'Pay By Online Payment', array('class'=>'btn btn-warning'));
        						}
                                                }else{

        						if($items['transactionStatus']=='PAID'){
        							echo anchor('#', 'Paid', array('class'=>'btn btn-warning disabled'));
        						}else{
        							echo anchor('checkout/paymentByCreditCard/'.$items['idTransaksi'].'/'.$items['token'], 'Pay By Credit Card', array('class'=>'btn btn-warning'));
        						}
        					}
        				?></td>
        			</tr>
        		<?php endforeach; ?>


        	</tbody>
        </table>
  </div>
    <?php
    //die(print_r($page));
    if($page>1){
      $previous=$page-1;
      $first =  site_url('account/listRiwayatStatusPesanan/page=1');
      $prev =  site_url('account/listRiwayatStatusPesanan/page='.$previous);
      echo "<a href=$first class='my-paging-btn'><< First</a> ";
      echo "<a href=$prev class='my-paging-btn'>< Previous</a> ";
    }else{
      echo"<< First < Previous ";
    }

    //angka awal
    $angka = ($page > 3 ? "...":"");
    for($i=$page-1;$i<$page;$i++){
      if($i<1)
        continue;
        $hal =  site_url('account/listRiwayatStatusPesanan/page='.$i);
        $angka .="<a href=$hal class='my-paging-list'>$i</a>";

    }

    //angka tengah
    $angka.="<span class='my-paging-list-on'>$page</span>";
    for($i=$page+1;$i<($page+3);$i++){
      if($i>$jpage)
        break;
        $hal =  site_url('account/listRiwayatStatusPesanan/page='.$i);
        $angka .="<a href=$hal class='my-paging-list'>$i</a>";
    }

    //angka akhir
    $hal =  site_url('account/listRiwayatStatusPesanan/page='.$jpage);
    $angka .=($page+2<$jpage ? "...<a href=$hal class='my-paging-list'>$jpage</a>":"");

    //cetak semua angka
    echo "$angka";

    //next
    if($page<$jpage){
      $next = $page+1;
      $next =  site_url('account/listRiwayatStatusPesanan/page='.$next);
      $last =  site_url('account/listRiwayatStatusPesanan/page='.$jpage);
      echo " <a href=$next class='my-paging-btn'>Next >></a>";
      echo " <a href=$last class='my-paging-btn'>Last ></a>";
    }else{
      echo"Next >  Last >>";
    }



  ?>
</div><br><br>
<script type="text/javascript">
console.log("data",);
function dellBukuAlamat(id,address1){
	var token = document.cookie.split('x-auth=')[1].split(';').shift();
	var apiurl = api_base_url + '/aduser/deleteaddress';

	$.confirm({
		title: 'Alert!',
		content: 'Alamat ('+address1+') akan dihapus?',
		autoClose: 'cancel|10000',
		closeIcon: true,
		closeIconClass: 'fa fa-close',
		buttons: {
			confirm: function () {
				//untuk cart yang di header
				$.ajax
				({	type: "POST",
					url: apiurl,
					headers:{ "token":token},
					data: '{"id": "' + id+ '"}',
					success:function(data){
						$(".listBukuAlamat").html(html);
					}
				});

			},
			cancel: function () {
				//$.alert('Canceled!');
			}
		}

	});

}
</script>
