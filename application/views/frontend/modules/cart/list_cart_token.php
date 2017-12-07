<!-- <style>
.my-cart a{
	color: black;
	font-size: 10px;

/*padding-top: -40px;*/


}

.my-cart a:hover{
	color: black;
	font-size: 10px;
}

<<<<<<< HEAD

</style>
=======
</style> -->
>>>>>>> 72a5b36003b68398f5513b99b6e5afcd56098a79
<div class='my-cart-scroll'>
	<?php
	$total = 0;
	foreach($hasil as $items):
	echo"<div class='row my-cart'>
	  <div class='col-sm-3' style='padding:0px'><a href='".base_url('product/detail/'.$items['productId'].'/'. $items['alias'])."'>";
		if($items['imageurl']){
			echo"<img src='".$items['imageurl']."' border='0' width='50'>";
		}else{
			echo"<img src='".base_url('images/general/noimage.png')."' style='height:50px; width: auto' border='0'>";
		}
	echo"</a></div>


	  <div class='col-sm-7' style='padding:0px'><a href='".base_url('product/detail/'.$items['productId'].'/'. $items['alias'])."'><b>".$items['name']."</b><br>Rp.".money($items['price'])." <i>(".$items['qty'].")Items</a></i></div>
	  <div class='col-sm-2' style='padding:0px'><a href='#' onClick=\"dellItemCartToken('".$items['productId']."','".$items['imageurl']."','".$items['name']."','".$items['itemCartId']."')\"><i class='fa fa-trash fa-2x' aria-hidden='true'></i></a></div>
	</div>";
	$total +=$items['subtotal'];
	endforeach;
	?>
</div>
<div style='color:#111111; text-align:center'>
	<div class='my-total-cart'>TOTAL : <b>Rp.<?php echo money($total); ?></b></div><?php echo anchor('checkout/cart', 'My Cart & Checkout', array('class'=>'btn btn-success','style'=>'color:#ffffff'));?>
</div>
