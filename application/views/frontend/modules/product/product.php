
<div class="container">
	<div class='my-bg-title'>
	<i class="fa fa-angle-right" aria-hidden="true"></i> LIST PRODUCT
	</div>

<div style='width:230px; float:left; margin-right:10px;'><?php $this->load->view('frontend/modules/product/sidebar_left',$this->data); ?></div>


<div style='width:870px; float:left'>
	<?php
	foreach($listMenu as $menu_list){
	//echo $menu_list['name'].'>';
		--$jumlahMenu;
	?>
		<a href="<?php echo base_url('product/listItem/'.$menu_list['categoryId'].'/'.$menu_list['alias']);?>"><?php echo $menu_list['name']; ?></a>
	<?php
		if($jumlahMenu >0){
		echo '>';
		}
	}
	?>
	<?php
	if($this->session->userdata('itemView')=='grid'){
	$this->load->view('frontend/modules/product/product_items',$this->data);
	}else{
	$this->load->view('frontend/modules/product/product_items_list',$this->data);
	}
	?>
</div>
<!-- <div class="col-sm-2"><?php // $this->load->view('frontend/modules/product/sidebar_right',$this->data); ?></div>-->

</div>
