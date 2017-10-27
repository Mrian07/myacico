<style type="text/css">

.productSrcMobile
{
position:absolute;
width:310px;
display:none;
margin-top:-1px;
border-top:0px;
overflow:hidden;
border-left:1px  #CDCDCD solid;
border-right:1px  #CDCDCD solid;
background-color: white;
z-index: 289;
color:#000000;
}

.show_result_mobile
{
font-family:tahoma;
padding:5px;
border-bottom:1px #CDCDCD dashed;
font-size:10px;
z-index: 289;
}

.show_result_mobile:hover
{
background:#e9e9e8;
color:#000000;
cursor:pointer;
}
</style>


<!-- <ul class="nav nav-tabs my-tab-menu"> -->
   <!-- <li class="active"><a data-toggle="tab" href="#home"><span class="glyphicon glyphicon-home"></span> Home</a></li>-->
    <!-- <li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-user-circle" aria-hidden="true"></i>


 Account
		<span class="caret"></span></a>
		<ul class="dropdown-menu dropdown-menu-mobile">
		  <li><a href="#">Login</a></li>
		  <li><a href="#">Daftar</a></li>
		</ul>
	</li>
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-flag" aria-hidden="true"></i>
 Bahasa
		<span class="caret"></span></a>
		<ul class="dropdown-menu dropdown-menu-mobile">
		  <li><a href="#" onclick="langFunction('id')"><img src="<?php echo base_url('images/general/lang_bahasa.png'); ?>" border="0"> Indonesia </a></li>
		  <li><a href="#" onclick="langFunction('en')"><img src="<?php echo base_url('images/general/lang_english.png'); ?>" border="0"> Inggris </a></li>
		</ul>
	</li>
	<li><a href="#home" data-toggle="modal" data-target="#myCart"><i class="fa fa-shopping-bag" aria-hidden="true"></i>
 My Cart <span style="background:#e6e831; border-radius:10px; padding:3px 7px 3px 7px; color:#000000;"><small>3</small></span> </a></li>
  </ul> -->

<div class='menu-utama'  style='border-bottom:1px solid #dadbdd;'>
	<div class='container'>
<!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-custom bootsnav">

			<!-- Start Top Search -->
			<div class="top-search">
				<div class="container">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-bookmark-o" aria-hidden="true"></i></span>
						<select class="form-control" style='background:#333333; border:0px; color:#ffffff' id="key_param">
							<option value=''>All Categories</option>
							<?php foreach($catsearch as $datacat){
								echo"<option value='".$datacat['m_product_category_id']."'>".$datacat['name']."</option>";
							}?>
						</select>
						<!--<span class="input-group-addon close-search"><i class="fa fa-times"></i></span>-->
					</div>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-search"></i></span>
						<!-- <input type="text" class="form-control" placeholder="Search"> -->
						<input type="hidden" name="searchID-mobile" id="searchID-mobile">
						<input type="text" name="search" id="search-mobile" autocomplete="off" class="my-search-field form-control">
						<!--<div id="result"></div>-->
						<div class="productSrcMobile" style='diplay:none'></div>


						<!--<span class="input-group-addon close-search"><i class="fa fa-times"></i></span>-->
					</div>
					<div class="input-group">
						<button type="button" class="btn btn-success btn-sm" onclick='btnSearch()'>Go</button>
						<span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
					</div>
				</div>
			</div>
			<!-- End Top Search -->

			<!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul><!--
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >My Cart
                            <i class="fa fa-shopping-bag"></i>
                            <span class="badge">3</span>
                        </a>
                        <ul class="dropdown-menu cart-list">
                            <li>
                                <a href="#" class="photo"><img src="images/thumb/thumb01.jpg" class="cart-thumb" alt="" /></a>
                                <h6><a href="#">Delica omtantur </a></h6>
                                <p>2x - <span class="price">$99.99</span></p>
                            </li>
                            <li>
                                <a href="#" class="photo"><img src="images/thumb/thumb02.jpg" class="cart-thumb" alt="" /></a>
                                <h6><a href="#">Omnes ocurreret</a></h6>
                                <p>1x - <span class="price">$33.33</span></p>
                            </li>
                            <li>
                                <a href="#" class="photo"><img src="images/thumb/thumb03.jpg" class="cart-thumb" alt="" /></a>
                                <h6><a href="#">Agam facilisis</a></h6>
                                <p>2x - <span class="price">$99.99</span></p>
                            </li>
                            <li class="total">
                                <span class="pull-right"><strong>Total</strong>: $0.00</span>
                                <a href="#" class="btn btn-default btn-cart">Cart</a>
                            </li>
                        </ul>
                    </li>-->
					<li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
					<!--<li>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</li>-->
                </ul>
            </div>
            <!-- End Atribute Navigation -->


			<!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>

				<?php echo anchor('home/', '<img src="'.base_url('images/general/logo-transparan.gif').'" border="0" height="80">', array('class'=>'navbar-brand'));?>
                <!--<a class="navbar-brand" href="#brand"><img src="images/brand/logo-black.png" class="logo" alt=""></a>-->
            </div>
            <!-- End Header Navigation -->


            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
					<li><?php echo anchor('#', '<i>Loading Menu...</i>');?></li>
					<!--
					<li class="active"><?php echo anchor('home/', '<span class="glyphicon glyphicon-home"></span>');?></li>
                    <li><?php echo anchor('product/', 'Product');?></li>
					<li><?php echo anchor('product/category', 'Category');?></li>
					<li class="dropdown megamenu-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Megamenu One</a>
                        <ul class="dropdown-menu megamenu-content" role="menu">
                            <li>
                                <div class="row">
                                    <div class="row" style='color:#000000'>
										<div class="col-menu col-md-2">
											<img src="<?php echo base_url('images/demo/oppo-f3plus-gold.jpg'); ?>" border="0" height="100"><br>
											Samsung
										</div>
										<div class="col-menu col-md-2">
											Samsung
										</div>
										<div class="col-menu col-md-2">
											Samsung
										</div>
										<div class="col-menu col-md-2">
											Samsung
										</div>
										<div class="col-menu col-md-2">
											Samsung
										</div>
										<div class="col-menu col-md-2">
											Samsung
										</div>
										<div class="col-menu col-md-2">
											Samsung
										</div>
									</div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown megamenu-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Megamenu</a>
                        <ul class="dropdown-menu megamenu-content" role="menu">
                            <li>
                                <div class="row">
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Title Menu One</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Title Menu Two</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Title Menu Three</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Title Menu Four</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Dropdowns</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Sub Menu</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Sub Menu</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Custom Menu</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Contact Us</a></li>-->
                </ul>



            </div><!-- /.navbar-collapse -->


    </nav>
    <!-- End Navigation -->

	</div>
</div>


	<script type="text/javascript">

	function btnSearch(){
		var searchID = $('#searchID-mobile').val();
		location.href = base_url+'product/detail/'+searchID;
	}

	function money(x){
		return 'Rp. '+(x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."));
	}

	$('.show_result_mobile').on('mouseout',function(){
		$('.show_result_mobile').hide();
	});

	$(document).ready(function() {

		$("#search-mobile").keyup(function() {

			var cat = $('#key_param').val();
			$(".productSrcMobile").show();

			var search_value = $(this).val();
			var datas		 = 'search='+search_value;
			var productSrcMobile = $('.productSrcMobile');

			if ( search_value == '' ) {$(".productSrcMobile").hide();}

			if(cat==''){
				productSrcMobile.html('');

					$.ajax({
						url: api_base_url+'/product/productlist/'+search_value,
						data: datas,
						success: function(data) {
							data.forEach(function(p){
								productSrcMobile.append(

								"<div class=\"show_result_mobile\" onclick=\"showDataMobile('"+p.name+"','"+p.m_product_id+"');\"><table border='0' cellpadding='5'><tr><td><img src='"+p.imageurl+"' width='80'></td><td><font size='2'>"+p.name+"<br><b>"+money(p.pricelist)+"</b></td></tr></table></div>"


								);

							});

						}
					});


			}else{

				productSrcMobile.html('');

					$.ajax({
						url: api_base_url+'/product/productlist/'+cat+'/'+search_value,
						data: datas,
						success: function(data) {


								data.forEach(function(p){
									productSrcMobile.append(

									"<div class=\"show_result_mobile\" onclick=\"showDataMobile('"+p.name+"','"+p.m_product_id+"');\"><table border='0'><tr><td><img src='"+p.imageurl+"' width='80'></td><td><font size='2'>"+p.name+"<br><b>"+money(p.pricelist)+"</b></td></tr></table></div>"


									);
									//alert(p.name);
								});
							//$("#result-mobile").html(data).show();
						}
					});

			}

			return false;
		});

	});
	function showDataMobile(name,id)
	{
		var url = base_url+'/product/detail/'+id;
		window.location.href = url;
		// $("#search-mobile").val(name);
		// $("#searchID-mobile").val(id);
		// $("#result-mobile").hide();
		// $(".productSrcMobile").hide();
	}
</script>
