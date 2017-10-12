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
			<th style='width:30%'>Product</th>
			<th style='width:10%'>Price</th>
			<th style='width:10%'>Quantity</th>
			<th style='width:22%' class='text-center'>Subtotal</th>
			<th style='width:20%'>Delete</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$total = 0;
		foreach($hasil as $items):
				echo"<tr>
						<td data-th='Product'>
							<div class='row'>
								<div class='col-sm-2 hidden-xs'><img src='".$items['imageurl']."' border='0' height='50' width='50'></div>
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
							<a href='#' onClick=\"dellItemCartToken('".$items['productId']."','".$items['imageurl']."','".$items['name']."','".$items['itemCartId']."')\"><i class='fa fa-trash' aria-hidden='true'></i></a>
						</td>
						
					</tr>";
					$total +=$items['subtotal'];
		endforeach; 
	?>
	</tbody>
		<tfoot>
			
			<tr>
				<td colspan='3'>
				
					<b>Catatan:</b> Barang pre-order akan dikirimkan secara terpisah sesuai dengan persediaan dan perkiraan waktu pengiriman. Ada biaya tambahan untuk beberapa pengiriman
				</td>
				<td class='text-center'>
				<strong>Grand Total Rp.<?php echo money($total); ?></strong></td>
				<td>
					<?php echo anchor('checkout', 'Checkout <i class="fa fa-angle-right"></i>', array('class'=>'btn btn-success btn-block')); ?>
				</td>
			</tr>
		</tfoot>
	</table>
	
</table>
