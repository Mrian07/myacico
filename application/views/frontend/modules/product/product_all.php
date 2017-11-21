
	<div class="container">
		<div class='my-bg-title'>

			<i class="fa fa-angle-right" aria-hidden="true"></i> LIST PRODUCT

		</div>
	<div class="row">
	  <div class="col-sm-2"><?php $this->load->view('frontend/modules/product/sidebar_left',$this->data); ?></div>
	  <div class="col-sm-10"><?php
		if($this->session->userdata('itemView')=='list'){
			$this->load->view('frontend/modules/product/product_items_all_list',$this->data);
		}else{
			$this->load->view('frontend/modules/product/product_items_all',$this->data);
		}
		 ?></div>
	  <!-- <div class="col-sm-2"><?php // $this->load->view('frontend/modules/product/sidebar_right',$this->data); ?></div>-->
	</div>
</div>
