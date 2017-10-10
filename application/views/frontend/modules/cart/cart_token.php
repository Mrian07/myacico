<div class='listCartItem'></div>
<script>
$(document).ready(function() { 
	var token = document.cookie.split('x-auth=')[1].split(';').shift();
	var listCartItem = $('.listCartItem');
	var qty = 0;
	var totalBelanja = 0;
	var subtotal = 0;
	
	listCartItem.html('');
	
	listCartItem.html(
				'<table id="cart" class="table table-hover table-condensed"><thead><tr><th style="width:40%">Product</th><th style="width:10%">Price</th><th style="width:8%">Quantity</th><th style="width:22%" class="text-center">Subtotal</th><th style="width:20%"></th></tr></thead><tbody>'
			);
		
	$.get( api_base_url+"/order/cart/detail?token="+token, 
	function(r){
		//alert(token); die();
		
		r.forEach(function(p){
			qty += p.qty;
			totalBelanja+=p.price;
			subtotal=p.qty*p.price;
			listCartItem.append('<tr><td data-th="Product"><div class="row"><div class="col-sm-2 hidden-xs"><img src="'+p.imageurl+'" border="0" height="50" width="50"></div><div class="col-sm-10"><h4 class="nomargin">'+p.name+'</h4></div></div></td><td data-th="Price">Rp.'+p.price+'</td><td data-th="Quantity"><input type="number" class="form-control" value="'+p.qty+'"></td><td data-th="Subtotal" class="text-center">'+subtotal+'</td><td class="actions" data-th=""><a href="#" onClick=\"dellItemCartToken('+p.productId+',\''+p.imageurl+'\',\''+p.name+'\',\''+p.itemCartId+'\')"><i class="fa fa-trash" aria-hidden="true"></i></a></td></tr>');
		});
	
		listCartItem.append(
				'</tbody><tfoot><tr><td colspan="3" class="hidden-xs"><b>Catatan:</b> Barang pre-order akan dikirimkan secara terpisah sesuai dengan persediaan dan perkiraan waktu pengiriman. Ada biaya tambahan untuk beberapa pengiriman</td><td class="hidden-xs text-center"><strong>Total Rp.'+subtotal+'</strong></td><td></td></tr></tfoot></table>'
			);  
			

	  }, "json" );

});
</script>