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
							foreach($hasil as $items):?>
							<tr>
								<td data-th="Product">
									<div class="row">
										<div class="col-sm-12 hidden-xs"><img src="<?php echo $items['imageurl']; ?>" alt="<?php echo $items['name']; ?>" class="img-responsive"/></div>
										
									</div>
								</td>
								<td data-th="Price">Rp.<?php echo money($items['price']); ?></td>
								<td data-th="Qty" align='center'>
									<span class="badge"><?php echo $items['qty']; ?></span>
								</td>
								<td data-th="Subtotal" class="text-center">Rp.<?php echo money($items['subtotal']); ?></td>
								<td class="actions" data-th="">
									<?php echo anchor('cart', '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', array('class'=>'btn btn-info btn-sm')); ?>
								</td>
							</tr>
							<?php $total +=$items['subtotal'];
		endforeach; ?>
						</tbody>
						<tfoot>
							<tr class="visible-xs">
								<td class="text-center"><strong>Total <?php echo money($total); ?></strong></td>
							</tr>
							<tr>
								<!--<td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>-->
								<td colspan="3" class="hidden-xs">
								<b>Catatan:</b> Barang pre-order akan dikirimkan secara terpisah sesuai dengan persediaan dan perkiraan waktu pengiriman.
								Ada biaya tambahan untuk beberapa pengiriman </td>
								<td class="hidden-xs text-center"><strong>Total <br><?php echo money($total); ?></strong></td>
								<td></td>
							</tr>
						</tfoot>
					</table>
				</div>	
			</div>