<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/owl-carousel/owl.carousel.css');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/owl-carousel/owl.theme.css');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/pop_cart.css');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/product-list.css');?>">
<div class="container">
	<div class='my-bg-title'>
		<?php
			if(isset($pro)){
				echo '<i class="fa fa-angle-right" aria-hidden="true"></i> HASIL PENCARIAN UNTUK <b>' . urldecode($pro) . '</b>';
			}

			if(isset($id_cat)){
				echo '<i class="fa fa-angle-right" aria-hidden="true"></i> LIST PRODUCT';
			}
		?>
	</div>
	<div class="row">
		<div id="sidebar-left-filter" class="col-xs-3">
			<?php

				if($function_name == 'newProduct') {
					$this->load->view('frontend/modules/product/sidebar_left',$this->data);
				} else {
					$this->load->view('frontend/modules/product/sidebar_left_filter',$this->data);
				}
			?>
		</div>
		<div id="product-list" class="col-xs-9 view-list">
			<div style='border-bottom:3px solid #c40202; padding:10px 0px 10px 0px;'>
				<div class="col-sm-6">
					<div class="row">
						<div class="col-sm-8">
							Items <span id="startItem"></span> to <span id="endItem"></span> of <span id="totalItem"> total</span>
						</div>
						<div class="col-sm-4">
							Tampilan
							<span class="toggle-view view-list-btn"><i class="fa fa-list" aria-hidden="true"></i></span>
							<span class="toggle-view view-grid-btn"><i class="fa fa-th-large" aria-hidden="true"></i></span>
						</div>
					</div>
				</div>

				<div class="col-sm-6">
					<div class="row">
						<div class="col-sm-12 text-right">
							<form class="form-inline">
								<div class="form-group text-right">
									<label for="atur">Atur berdasarkan:</label>
									<select id="order_by" class="form-control" style="font-size: 8pt;height: 30px;width: 140px;">
										<option value=''>Produk Terbaru</option>


									</select>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div style="clear:both"></div>
			</div>

			<div id="product-list-unready">
				<div class="row">
					<div class="col-xs-3">
						<div class="img-container-unready"></div>
					</div>

					<div class="col-xs-6">
						<span class="title-unready"></span>
						<ul class="highlight-unready">
							<li></li><li></li><li></li>
						</ul>
						<span class="readmore-unready"></span>
					</div>

					<div class="col-xs-3">
						<span class="price-unready"></span>
						<span class="stock-unready"></span>
						<div class="margin-top-button-unready">
							<span class="button-unready"></span>
							<span class="button-unready"></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-3">
						<div class="img-container-unready"></div>
					</div>

					<div class="col-xs-6">
						<span class="title-unready"></span>
						<ul class="highlight-unready">
							<li></li><li></li><li></li>
						</ul>
						<span class="readmore-unready"></span>
					</div>

					<div class="col-xs-3">
						<span class="price-unready"></span>
						<span class="stock-unready"></span>
						<div class="margin-top-button-unready">
							<span class="button-unready"></span>
							<span class="button-unready"></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-3">
						<div class="img-container-unready"></div>
					</div>

					<div class="col-xs-6">
						<span class="title-unready"></span>
						<ul class="highlight-unready">
							<li></li><li></li><li></li>
						</ul>
						<span class="readmore-unready"></span>
					</div>

					<div class="col-xs-3">
						<span class="price-unready"></span>
						<span class="stock-unready"></span>
						<div class="margin-top-button-unready">
							<span class="button-unready"></span>
							<span class="button-unready"></span>
						</div>
					</div>
				</div>
			</div>

			<div id="productlist" class='row'></div>

			<div style="clear:both"></div>

			<div class='my-paging'></div>

			<!-- Modal -->
			<div id="cartModal" class="modal fade cartModal" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content" style="width:680px">
						<div class="modal-body">
							<?php $this->load->view('frontend/modules/cart/modal_cart.php',$this->data); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="col-sm-2"><?php // $this->load->view('frontend/modules/product/sidebar_right',$this->data); ?></div>-->
	</div>

	<div id="recentView" style="display: none;">
		<div style='padding:8px; font-family:tahoma; font-size:12px; color:#535151'>
			<!-- $lang_recent_view -->
			<i class="fa fa-dot-circle-o" aria-hidden="true"></i> Baru di lihat<hr>
		</div>
	</div>
	<div id="product" class="promo-front owl-carousel"></div>
</div>
<script src="<?php echo base_url('assets/owl-carousel/owl.carousel.js');?>"></script>
<script type="text/javascript">
var path = '<?php echo $_SERVER['REQUEST_URI']; ?>';
var list_url, sidebar_url;
var keyword = '<?php if(isset($pro)) echo $pro ?>';
var cat_id = '<?php if(isset($id_cat)) echo $id_cat ?>';
var function_name = '<?php if(isset($function_name)) echo $function_name ?>';

if(keyword != ''){
	list_url = api_base_url + '/product/listproduct/'+keyword+'?itemperpage=10&';
	sidebar_url = api_base_url + '/product/filter/'+keyword;
}
if(cat_id != ''){
	list_url = api_base_url + '/product/listproduct?category='+cat_id+'&itemperpage=10&';
	sidebar_url = api_base_url + '/product/filter?category='+cat_id;
}
if(function_name == 'newProduct') {
	list_url = api_base_url + '/product/listproduct/all/new?&itemperpage=10&';
	sidebar_url = '';
}
</script>
<script src="<?php echo base_url('assets/js/product-list.js');?>"></script>
