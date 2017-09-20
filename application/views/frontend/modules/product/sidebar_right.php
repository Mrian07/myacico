<div class='cart-sidebar-right'>
	<?php
	$cart = 1;
	if($cart){
	?>
	<div class='title'><b>ITEMS(1)</b> <?php echo anchor('checkout/cart', 'Lihat Detal <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
');?></div>
	<table border='0' width='100%'>
	<tr>
		<td><img src="<?php echo base_url('images/demo/oppo-f3plus-gold.jpg'); ?>" border="0" height="50"></td>
		<td>ASUS Zenfone Go [ZB500KL] [2/16GB] - Silver Blue</td>
	</tr>
	<tr>
		<td colspan='2'>QUANTITY: 1</td>
	</tr>
	<tr>
		<td colspan='2'><hr size='1'></td>
	</tr>
	<tr>
		<td>SUBTOTAL</td>
		<td>Rp.1000.000</td>
	</tr>
	</table>
	 
	<div class="btnpaycart">
	<?php echo anchor('customer/contact', '<button class="dropbtnpaycar">BAYAR</button>');?>
	</div>
	<?php }else{ ?>
	<div class='title'><b>ITEMS(0)</b> <?php echo anchor('checkout/cart', 'Lihat Detal <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
');?></div>
	Anda tidak memiliki Barang di keranjang belanja
	<?php } ?>
</div>
