<div class="panel panel-default">
				<div class="panel-body">
					<table id="cart" class="table table-hover table-condensed">
						<thead>
							<tr>
								<th style="width:50%">Product</th>
								<th style="width:10%">Price</th>
								<th style="width:8%">Quantity</th>
								<th style="width:22%" class="text-center">Subtotal</th>
								<th style="width:10%"></th>
							</tr>
						</thead>
						<tbody>
							<tr ng-repeat="arr in mycart">
								<td data-th="Product">
									<div class="row">
										<div class="col-sm-12 hidden-xs"><img src="{{arr.image_url}}" alt="{{arr.name}}-img" class="img-responsive"/></div>
										
									</div>
								</td>
								<td data-th="Price">{{toMoney(arr.price)}}</td>
								<td data-th="Quantity" align='center'>
									<span class="badge">{{arr.quantity}}</span>
								</td>
								<td data-th="Subtotal" class="text-center">{{toMoney(arr.price * arr.quantity)}}</td>
								<td class="actions" data-th="">
									<button class="btn btn-info btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
								</td>
							</tr>
							<!--tr>
								<td data-th="Product">
									<div class="row">
										<div class="col-sm-12 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
									</div>
								</td>
								<td data-th="Price">Rp.100.999</td>
								<td data-th="Quantity" align='center'>
									<span class="badge">1</span>
								</td>
								<td data-th="Subtotal" class="text-center">Rp.100.999</td>
								<td class="actions" data-th="">
									<button class="btn btn-info btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
								</td>
							</tr-->
						</tbody>
						<tfoot>
							<tr class="visible-xs">
								<td class="text-center"><strong>Total 1.99</strong></td>
							</tr>
							<tr>
								<!--<td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>-->
								<td colspan="3" class="hidden-xs">
								<b>Catatan:</b> Barang pre-order akan dikirimkan secara terpisah sesuai dengan persediaan dan perkiraan waktu pengiriman.
								Ada biaya tambahan untuk beberapa pengiriman </td>
								<td class="hidden-xs text-center"><strong>Total <br>{{get_total()}}</strong></td>
								<td></td>
							</tr>
						</tfoot>
					</table>
				</div>	
			</div>