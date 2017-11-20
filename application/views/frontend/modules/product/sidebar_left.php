<div class='sidebar-left-mobile'>
	<button class="btn btn-danger btn-block" data-toggle="collapse" data-target="#demo123">Filter</button>
	<div id="demo123" class="collapse">
		<?php
		$this->data['pane'] = "pane";
		$this->data['sliderprice'] = "slider-price";
		$this->data['sliderpricelow'] = "slider-price-low";
		$this->data['sliderpricehigh'] = "slider-price-high";
		$this->load->view('frontend/modules/product/sidebar_left_filter',$this->data); ?>
	</div>
</div>
<div class='sidebar-left-desktop'>
	<?php
	$this->data['pane'] = "pane2";
	$this->data['sliderprice'] = "slider-price2";
	$this->data['sliderpricelow'] = "slider-price-low2";
	$this->data['sliderpricehigh'] = "slider-price-high2";

	$this->load->view('frontend/modules/product/sidebar_left_filter',$this->data); ?>
</div>
