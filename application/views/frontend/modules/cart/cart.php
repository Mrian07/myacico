<style>
.table>tbody>tr>td, .table>tfoot>tr>td{
    vertical-align: middle;
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
</style>
<style>
.progress {
    position: relative;
	height: 25px;
}
.progress > .progress-type {
	position: absolute;
	left: 0px;
	font-weight: 800;
	padding: 3px 30px 2px 10px;
	color: rgb(255, 255, 255);
	background-color: rgba(25, 25, 25, 0.2);
}
.progress > .progress-completed {
	position: absolute;
	right: 0px;
	font-weight: 800;
	padding: 3px 10px 2px;
}
</style>

<div class="container" ng-controller="cartCnt">
	<div class="row">
      <div class="col-sm-12">
      <div class="my-border-title">
        <h3 class='my-title-page'><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Cart</h3>
      </div>
      </div>
    </div>

    <!--div class="progress">
      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%">
        <span class="sr-only">35% Complete (success)</span>
      </div>
      <span class="progress-completed"> 35%</span>
    </div-->
	<div class="col-md-9">
	
		<table id="cart" class="table table-hover table-condensed">
			<thead>
				<tr>
					<th style="width:40%">Product</th>
					<th style="width:10%">Price</th>
					<th style="width:8%">Quantity</th>
					<th style="width:22%" class="text-center">Subtotal</th>
					<th style="width:20%"></th>
				</tr>
			</thead>
			<tbody>
				<tr ng-repeat="(i,arr) in mycart">
					<td data-th="Product">
						<div class="row">
							<div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
							<div class="col-sm-10">
								<h4 class="nomargin">{{arr.name}}</h4>
								<p>{{arr.detail}}</p>
							</div>
						</div>
					</td>
					<td data-th="Price">{{toMoney(arr.price)}}</td>
					<td data-th="Quantity">
						<input type="number" class="form-control text-center" ng-model="arr.quantity">
					</td>
					<td data-th="Subtotal" class="text-center">{{toMoney(arr.price * arr.quantity)}}</td>
					<td class="actions" data-th="">
						<button class="btn btn-info btn-sm"><span class="caret"></span> Alamat</button>
						<button class="btn btn-danger btn-sm" ng-click="del(i)"><i class="fa fa-trash-o"></i></button>
					</td>
				</tr>
				<tr ng-show="mycart.length == 0">
					<td colspan="5">Keranjang masih kosong</td>
				</tr>
				<!--tr>
					<td data-th="Product">
						<div class="row">
							<div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
							<div class="col-sm-10">
								<h4 class="nomargin">Product 1</h4>
								<p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
							</div>
						</div>
					</td>
					<td data-th="Price">Rp.100.999</td>
					<td data-th="Quantity">
						<input type="number" class="form-control text-center" value="1">
					</td>
					<td data-th="Subtotal" class="text-center">1.99</td>
					<td class="actions" data-th="">
						<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
						<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
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
						<b>Catatan:</b> Barang pre-order akan dikirimkan secara terpisah sesuai dengan persediaan dan perkiraan waktu pengiriman. Ada biaya tambahan untuk beberapa pengiriman
					</td>
					<td class="hidden-xs text-center"><strong>Total {{get_total()}}</strong></td>
					<td></td>
				</tr>
			</tfoot>
		</table>
	</div>	
	<div class="col-md-3">
		<div class="panel panel-default">
		  <div class="panel-body">
				Subtotal	{{get_total()}}<br>
				<b>Grand Total	{{get_total()}}</b><br><br>
				<b>PUNYA KODE PROMO ?</b><br>
				<div class="input-group">
					<input type="text" class="form-control" name="x">
					<span class="input-group-btn">
						<button class="btn btn-warning">Enter</button>
					</span>
				</div>
		  </div>
		</div>
		<?php echo anchor('checkout', 'Checkout <i class="fa fa-angle-right"></i>', array('class'=>'btn btn-success btn-block'));?>
	</div>
</div>
