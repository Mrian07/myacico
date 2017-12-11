<style>
.table>tbody>tr>td, .table>tfoot>tr>td{
    vertical-align: middle;
	font-size:13px;
	padding:15px;
}
@media screen and (max-width: 600px) {
    table#cart tbody td .form-control{
		width:20%;
		display: inline !important;
	}
	.actions .btn{
		width:36%;
		margin:1.5em 0;
	}

	.actions .btn-info{
		float:left;
	}
	.actions .btn-danger{
		float:right;
	}

	table#cart thead { display: none; }
	table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
	table#cart tbody tr td:first-child { background: #333; color: #fff; }
	table#cart tbody td:before {
		content: attr(data-th); font-weight: bold;
		display: inline-block; width: 8rem;
	}



	table#cart tfoot td{display:block; }
	table#cart tfoot td .btn{display:block;}

}

.font-aneh{

	color:red;
}
</style>

<table id="cart" class="table table-hover table-condensed">
	<thead>
		<tr>
			<th style='width:40%'>Product</th>
			<th style='width:10%'>Price</th>
			<th style='width:10%'>Quantity</th>
			<th style='width:22%' class='text-center'>Subtotal</th>
			<th style='width:10%'>Delete</th>
		</tr>
	</thead>
	<tbody>

	<?php
		$total = 0;    $a=0;
		foreach($hasil as $items):
                    if($items['istodayshipping'] == 'Y')
                    {
                        $asap = "<a class='asapGb' style='height:10px; margin-left:5px;' target='_blank' href='".base_url('customer/asap')."'><img src='".base_url("images/general/asap.png")."'style='height:20px;'> </a>";
                      // $asap_bawah ='*Pegiriman ASAP(Jaminan 2 hari sampai) saat ini hanya berlaku untuk daerah Jakarta';
                        $a=1;
                    }
                    else
                    {
                        $asap ='';

                    }

				echo"<tr>
						<td data-th='Product'>
							<div class='row'>
								<div class='col-sm-2 hidden-xs'><img src='".$items['imageurl']."' border='0' height='50' width='50'></div>

								<div class='col-sm-10'>
									<b>".$items['name']."</b>
                                                                             ".$asap."
								</div>
							</div>
						</td>
						<td data-th='Price'>Rp.".money($items['price'])."</td>
						<td data-th='Quantity'>
							<select id='qty' name='qty' onchange='getvaltoken(this);' class='form-control'>";
								$val =1;
								while($val<=100){
									if($items['qty']==$val){
										echo"<option value='".$val.'-'.$items['itemCartId']."' selected>".$val."</option>";
									}else{
										echo"<option value='".$val.'-'.$items['itemCartId']."'>".$val."</option>";
									}
									$val++;
								}
								echo"
							</select>
						</td>
						<td data-th='Subtotal' class='text-center'>Rp.".money($items['subtotal'])."</td>
						<td class='actions' data-th=''>
							<a href='#' onClick=\"dellItem('".$items['productId']."','".$items['imageurl']."','".$items['name']."','".$items['itemCartId']."')\"><i class='fa fa-trash' aria-hidden='true'></i></a>
						</td>

					</tr>";
					$total +=$items['subtotal'];
		endforeach;
	?>
	</tbody>
		<tfoot>

			<tr>
				<td colspan='3'>

					<b><?php echo $lang_cart_note; ?></b> <?php echo $lang_cart_note_text; ?>

                                            <br><?php
                                            if($a ==1)
                                            {
                                                if($lang=='en'){
                                             echo '*ASAP Delivery (2 days guarantee) is currently valid only for Jakarta area';
                                                }
                                               else
                                                   echo '*Pegiriman ASAP(Jaminan 2 hari sampai) saat ini hanya berlaku untuk daerah Jakarta';
                                            }else{
                                                echo '';
                                            }
                                            echo '';
                                            ?>
                                </td>
				<td class='text-center' colspan='2'>
				<strong>Total Rp.<?php echo money($total); ?></strong></td>

			</tr>
		</tfoot>
	</table>

</table>

<script>

	function getvaltoken(qty){
		var token = document.cookie.split('x-auth=')[1].split(';').shift();
		var jml = qty.value;
		var jm = jml.split('-');
		var qty = jm[0];
		var itemCartId = jm[1];
		var data = {};
		var apiurl = api_base_url +'/order/cart/updateitem';

		$.ajax
		({
		type: "POST",
		url: apiurl,
		data:JSON.stringify({
			"qty":qty,
			"itemCartId":itemCartId
		}) ,
		contentType: "application/json",
		headers: {"token":token},
		success:function(data){

				var qtyTotal = qty;
				$.ajax
				({
				url: "<?php echo site_url('cart/listCartToken'); ?>",

				success:function(html){
						$(".listCart").html(html);
						$('.totalCart').html(qtyTotal);
            var kurir = $('#kurir').val();
            pilihKurir2(kurir);
					}
				});

			}
		});

	}



  function pilihKurir2(row){
    var result=row.split('-');
    var id = result[0];
    var amount = result[1];
    var nameKur = result[2];
    if(id=='kosong'){
      $(".amount").html('-');
    }else{

      var url = '<?php echo site_url('checkout/pilihKurir'); ?>'
      $.ajax
      ({
      url: url+'/?id='+id+'&amount='+amount+'&name='+nameKur,
      success:function(html){
          $(".amount").html(html);
        }
      });

      var url = '<?php echo site_url('checkout/pilihPaket'); ?>'
      $.ajax
      ({
      url: url+'/?id='+id+'&amount='+amount+'&name='+nameKur,
      success:function(html){
          $(".paket").html(html);
        }
      });

    }
  }


  function dellItem(id,img,name,idcart){

		var apiurl = api_base_url + '/order/cart/deleteitem?idcartitem='+idcart;

		$.confirm({
			title: name,
			content: '<img src="'+img+'">'+'<br><br><?php echo$lang_alert_cart_hapus;?>',
			//content: '<p>Apakah item ini akan dihapus?</p>',
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
						success:function(data){
							totalCart();
						}
					});


					//untuk cart yang di basket token
					$.ajax
					({
					url: "<?php echo site_url('cart/listCartToken'); ?>",
					success:function(html){
							$(".listCart").html(html);
              var kurir = $('#kurir').val();
              pilihKurir2(kurir);
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
