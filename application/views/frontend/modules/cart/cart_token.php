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
</style>

<div class='listCartItem'></div>
<script>
$(document).ready(function() { 
	var token = document.cookie.split('x-auth=')[1].split(';').shift();
	var listCartItem = $('.listCartItem');
	var qty = 0;
	var totalBelanja = 0;
	var subtotal = 0;
	
	listCartItem.append('');
	
	
		
	$.get( api_base_url+"/order/cart/detail?token="+token, 
	function(r){
		listCartItem.append(
				'<table border="1" id="cart" class="table table-hover table-condensed"><thead><tr><th style="width:30%">Product</th><th style="width:10%">Price</th><th style="width:10%">Quantity</th><th style="width:22%" class="text-center">Subtotal</th><th style="width:20%">Delete</th></tr></thead><tbody>'
			);
		
		r.forEach(function(p){
			qty += p.qty;
			totalBelanja+=p.price;
			subtotal=p.qty*p.price;
			listCartItem.append('<tr><td data-th="Product"><div class="row"><div class="col-sm-2 hidden-xs"><img src="'+p.imageurl+'" border="0" height="50" width="50"></div><div class="col-sm-10"><h4 class="nomargin">'+p.name+'</h4></div></div></td><td data-th="Price">Rp.'+p.price+'</td><td data-th="Quantity">'+p.qty+'</td><td data-th="Subtotal" class="text-center">'+subtotal+'</td><td class="actions" data-th=""><a href="#" onClick=\"dellItemCartToken('+p.productId+',\''+p.imageurl+'\',\''+p.name+'\',\''+p.itemCartId+'\')"><i class="fa fa-trash" aria-hidden="true"></i></a></td></tr>');
			
			/*
			listCartItem.append('<tr><td data-th="Product">aaaa</td><td>Rp.'+p.price+'</td><td>'+p.qty+'</td><td data-th="Subtotal" class="text-center">'+subtotal+'</td><td data-th="Subtotal">'+subtotal+'</td></tr>');*/
			
		});
	/*
		listCartItem.append(
				'</tbody><tfoot><tr><td colspan="3" class="hidden-xs"><b>Catatan:</b> Barang pre-order akan dikirimkan secara terpisah sesuai dengan persediaan dan perkiraan waktu pengiriman. Ada biaya tambahan untuk beberapa pengiriman</td><td class="hidden-xs text-center" width="200"><strong>Grand Total Rp.'+subtotal+'</strong></td><td></td></tr></tfoot></table>'
			);  
			
		*/
		
		listCartItem.append('</tbody><tfoot><tr><td colspan="3" style="width:47%"><b>Catatan:</b> Barang pre-order akan dikirimkan secara terpisah sesuai dengan persediaan dan perkiraan waktu pengiriman. Ada biaya tambahan untuk beberapa pengiriman</td><td class="text-center"><strong>Grand Total Rp.'+subtotal+'</strong></td><td>Hapus</td></tr></tfoot></table>');
		
	  }, "json" );

});
</script>