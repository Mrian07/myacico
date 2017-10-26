<ul class="nav nav-tabs my-tab-menu">
   <!-- <li class="active"><a data-toggle="tab" href="#home"><span class="glyphicon glyphicon-home"></span> Home</a></li>-->
    <li class="dropdown">
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
  </ul>

<div class='menu-utama'  style='border-bottom:1px solid #dadbdd;'>
	<div class='container'>
<!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-custom bootsnav">

			<!-- Start Top Search -->
			<div class="top-search">
				<div class="container">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-bookmark-o" aria-hidden="true"></i></span>
						<select class="form-control" style='background:#333333; border:0px; color:#ffffff'>
							<option value=''>All Categories</option>
							<option value='Computer'>Computer</option>
							<option value='Gatget'>Gatget</option>
							<option value='Communication'>Communication</option>
							<option value='Audio & Visual'>Audio & Visual</option>
							<option value='Mechanical & Electrical'>Mechanical & Electrical</option>
							<option value='Hobby'>Hobby</option>
							<option value='Peralatan Rumah'>Peralatan Rumah</option>
							<option value='Perlengkapan Kantor'>Perlengkapan Kantor</option>
						</select>

						<input type="hidden" name="search_param" value="all" id="search_param">
						<!--<span class="input-group-addon close-search"><i class="fa fa-times"></i></span>-->
					</div>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-search"></i></span>
						<input type="text" class="form-control" placeholder="Search">
						<!--<span class="input-group-addon close-search"><i class="fa fa-times"></i></span>-->
					</div>
					<div class="input-group">
						<button type="button" class="btn btn-success btn-sm">Go</button>
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
	<!-- Modal -->
	<div id="myCart" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header" style='border:0px'>
			<button type="button" class="close" data-dismiss="modal">&times;</button>

		  </div>
		  <div class="modal-body">

			<div class="my-cart" style='padding:10px;'>
				<table border='0' width='100%'>
					<tbody>
						<tr>
						<td width='30%'><img src="<?php echo base_url('images/demo/samsung.jpg');?>" border="0" height="50" width="50"></td>
						<td width='60%'>Samsung galaxy<br>Rp.6.000.000</td>
						<td width='10%'><button type="button" class="btn btn-link"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="my-cart" style='padding:10px;'>
				<table border='0' width='100%'>
					<tbody>
						<tr>
						<td width='30%'><img src="<?php echo base_url('images/demo/samsung2.jpg');?>" border="0" height="50" width="50"></td>
						<td width='60%'>Samsung 8<br>Rp.1.000.000</td>
						<td width='10%'><button type="button" class="btn btn-link"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class='my-total-cart'>
			TOTAL : <b>Rp.7.000.000</b>
			</div>
			<?php echo anchor('checkout/cart', 'Checkout', array('class'=>'btn btn-success my-btn-chekout'));?>



		  </div>
		  <!--
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>-->
		</div>

	  </div>
	</div>
