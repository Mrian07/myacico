<div class='my-cart-scroll'>
	<?php
	$total = 0;
	foreach($hasil as $items):	
	echo"<div class='row my-cart'>
	  <div class='col-sm-3'><img src='".$items['imageurl']."' border='0' height='50' width='50'></div>
	  <div class='col-sm-7'><b>".$items['name']."</b><br>Rp.".money($items['price'])." <i>(".$items['qty'].")Items</i><br></div>
	  <div class='col-sm-2'><a href='#' onClick=\"dellItemCartToken('".$items['productId']."','".$items['imageurl']."','".$items['name']."','".$items['itemCartId']."')\"><i class='fa fa-trash' aria-hidden='true'></i></a></div>
	</div>";
	$total +=$items['subtotal'];
	endforeach; 
	?>
</div>
<div>
	<div class='my-total-cart'>TOTAL : <b>Rp.<?php echo money($total); ?></b></div><?php echo anchor('cart', 'My Cart & Checkout', array('class'=>'btn btn-success my-btn-chekout'));?>
</div>