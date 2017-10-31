<?php
echo"<table id='cart' border='0' class='table table-hover table-condensed'>
				<thead>
					<tr>
						<th style='width:30%'>Product</th>
						<th style='width:10%'>Price</th>
						<th style='width:10%'>Quantity</th>
						<th style='width:22%' class='text-center'>Subtotal</th>
						<th style='width:20%'>Delete</th>
					</tr>
				</thead>
				<tbody>";

		foreach ($this->cart->contents() as $items):
				echo"<tr>
						<td data-th='Product'>
							<div class='row'>
								<div class='col-sm-2 hidden-xs'><img src='".$items['image']."' border='0' height='50' width='50'></div>
								<div class='col-sm-10'>
									<h4 class='nomargin'>".$items['name']."</h4>
								</div>
							</div>
						</td>
						<td data-th='Price'>Rp.".money($items['price'])."</td>
						<td data-th='Quantity'>
							<select id='qty' name='qty' onchange='getval(this);' class='form-control'>";
								$val =1;
								while($val<=100){
									if($items['qty']==$val){
										echo"<option value='".$val.'-'.$items['rowid']."' selected>".$val."</option>";
									}else{
										echo"<option value='".$val.'-'.$items['rowid']."'>".$val."</option>";
									}
									$val++;
								}
								echo"
							</select>
						</td>
						<td data-th='Subtotal' class='text-center'>Rp.".money($items['subtotal'])."</td>
						<td class='actions' data-th=''>
							<a href='#' onClick=\"dellItemCart('".$items['id']."','".$items['rowid']."','".$items['image']."','".$items['name']."')\"><i class='fa fa-trash' aria-hidden='true'></i></a>
						</td>

					</tr>";
		endforeach;
		echo"
			</tbody>
				<tfoot>

					<tr>
						<td colspan='3'>

							<b>Catatan:</b> Barang pre-order akan dikirimkan secara terpisah sesuai dengan persediaan dan perkiraan waktu pengiriman. Ada biaya tambahan untuk beberapa pengiriman
							<!--<a href='#' class='btn btn-warning'><i class='fa fa-info-circle' aria-hidden='true'></i>
 ANDA PUNYA KODE PROMO CLICK DISINI</a>-->
						</td>
						<td class='text-center'>
						<!--Subtotal Rp.".money($this->cart->total())."<br>
						Potongan Rp.0<br><br>-->
						<strong>Grand Total Rp.".money($this->cart->total())."</strong></td>
						<td>
							".anchor('checkout', 'Checkout <i class="fa fa-angle-right"></i>', array('class'=>'btn btn-success btn-block'))."
						</td>
					</tr>
				</tfoot>
			</table>
		";?>
		<script>

			function getval(qty){

				var jml = qty.value;
				var jm = jml.split('-');
				var qty = jm[0];
				var rowid = jm[1];

				var dataString = 'rowid='+rowid+'&qty='+qty;

				$.ajax
				({
				type: "POST",
				url: "<?php echo site_url('cart/updateCart'); ?>",
				data: dataString,
				success:function(html){

						var qtyTotal = html;
						$.ajax
						({
						url: "<?php echo site_url('cart/listCart'); ?>",
						success:function(html){
								$(".listCart").html(html);
								$('.totalCart').html(qtyTotal);
							}
						});

					}
				});
			}

		</script>
