<?php 			
	$this->data['token'] = $_COOKIE['x-auth'];
	$token = $_COOKIE['x-auth'];
	$api = "order/cart/detail";
	$url = api_base_url($api);
	
	$options = ["http" => [
	"method" => "GET",
	"header" => ["token: " . $token,
	"Content-Type: application/json"],
	]];
	
	$context = stream_context_create($options);
	$konten = file_get_contents($url, false, $context);
	
	
	$hasil = json_decode($konten, true);
	//echo"<pre>"; print_r($hasil); 
	
	if(json_decode($konten, true)){
		
?>

<div class="panel panel-default">
				<div class="panel-body">
					<table class="table table-hover table-condensed">
						<thead>
							<tr>
								<th style="width:50%">Product</th>
								<th style="width:10%">Price</th>
								<th style="width:8%">Qty</th>
								<th style="width:22%" class="text-center">Subtotal</th>
								<th style="width:10%">Edit</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$total = 0;
							$totalWeight=0;
							foreach($hasil as $items):?>
							<tr>
								<td data-th="Product">
									<img src="<?php echo $items['imageurl']; ?>" alt="<?php echo $items['name']; ?>" class="img-responsive" width='100'/>
								</td>
								<td data-th="Price">Rp.<?php echo money($items['price']); ?></td>
								<td data-th="Qty" align='center'>
									<span class="badge"><?php echo $items['qty']; ?></span>
								</td>
								<td data-th="Subtotal" class="text-center">Rp.<?php echo money($items['subtotal']); ?></td>
								<td class="actions" data-th="">
									<?php echo anchor('cart', '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>'); ?>
								</td>
							</tr>
							<?php 
							$totalWeight +=$items['totalWeight'];
							$total +=$items['subtotal'];
							endforeach; ?>
						</tbody>
						<tfoot>
							<tr class="visible-xs">
								<td class="text-center" colspan="5"><strong>Total Rp.<?php echo money($total); ?></strong></td>
							</tr>
							<!--<tr class="visible-xs">
								<td colspan="5"><b>Catatan:</b> Barang pre-order akan dikirimkan secara terpisah sesuai dengan persediaan dan perkiraan waktu pengiriman. Ada biaya tambahan untuk beberapa pengiriman</td>
							</tr>
							<tr>
								<td colspan="3" class="hidden-xs">
								<b>Catatan:</b> Barang pre-order akan dikirimkan secara terpisah sesuai dengan persediaan dan perkiraan waktu pengiriman.
								Ada biaya tambahan untuk beberapa pengiriman </td>
								<td colspan="2" class="hidden-xs text-center"><strong>Total Rp.<?php echo money($total); ?></strong></td>
							</tr>-->
							<tr>
								<td colspan="3" class="hidden-xs"></td>
								<td class="hidden-xs" colspan="5">
								<input type='hidden' id='SubtotalOrder' value='<?php echo $total; ?>'>
								<input type='hidden' id='weightTotalOrder' value='<?php echo $totalWeight; ?>'>
								<strong>Total Rp.<?php echo money($total); ?></strong></td>
							</tr>
							<tr>
								<td colspan="5"><b>Catatan:</b> Barang pre-order akan dikirimkan secara terpisah sesuai dengan persediaan dan perkiraan waktu pengiriman. Ada biaya tambahan untuk beberapa pengiriman</td>
							</tr>
						</tfoot>
					</table>
					
				</div>	
			</div>
			
	<?php }else{ echo"<center>Keranjang masih kosong</center>"; } ?>			
	
