<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $title_web; ?></title>



		<!-- Strat Bootstrap -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" />
		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
		<!--<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
		<!-- End Bootstrap -->

		<!--<link href="<?php echo base_url('assets/nav/css/bootstrap.min.css');?>" rel="stylesheet">-->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
		<link href="<?php echo base_url('assets/nav/css/animate.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/nav/css/bootsnav.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/nav/css/style.css');?>" rel="stylesheet">

		<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/animate.css');?>" />-->
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('images/general/favicon.ico');?>">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="<?php echo base_url('assets_adminlte/font-awesome-4.7.0/css/font-awesome.min.css') ?>"/>

		<!-- CSS -->

		<!-- s: Alert -->
		<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/alert/libs/bundled.css');?>" />-->
		<script type="text/javascript" src="<?php echo base_url('assets/alert/libs/bundled.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/alert/js/jquery-confirm.js');?>"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/alert/css/jquery-confirm.css');?>" />
        <!-- e: Alert -->

		<!-- s: Slider Price -->
		<link rel="stylesheet" href="<?php echo base_url('assets/sliderprice/jquery-ui.css');?>">
		<!-- e: Slider Price -->

		<script type="text/javascript" src="<?php echo base_url('assets/js/jwt-decode.min.js');?>"></script>
		<!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style_frontend.css');?>" />

		<!-- s: Slider Product -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/slider-product.css');?>">
		<!-- e: Slider Product -->





    </head>

<body style='font-weight: normal;'>
<div class="my-header-panel3">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				 About us | Payment | Delivery | FAQ 

			</div>
			<div class="col-sm-8" style='text-align: right'>
				<i class="fa fa-phone" aria-hidden="true"></i> (021) 589 99999, <i class="fa fa-clock-o" aria-hidden="true"></i>
			 Mon - Sat [09:00 - 20:00] , Sun [10:00 - 18:00] ,  Open on Holiday
				|
				<div class="dropdown-lang">
				  Bahasa <?php if($lang=='en'){?><img src="<?php echo base_url('images/general/lang_english.png'); ?>" border="0"><?php }else{ ?><img src="<?php echo base_url('images/general/lang_bahasa.png'); ?>" border="0"><?php } ?> <span class="caret"></span>
				  <div class="dropdown-lang-content">
					<a href="#" onclick="langFunction('id')"><img src="<?php echo base_url('images/general/lang_bahasa.png'); ?>" border="0"> Indonesia </a>
					<a href="#" onclick="langFunction('en')"><img src="<?php echo base_url('images/general/lang_english.png'); ?>" border="0"> Inggris </a>
				  </div>
				</div>
			 
			</div>
		</div>	
	</div>	
</div>
<div class="my-header-panel4">
	<img src="<?php echo base_url('images/general/Bg-atas-acico.png'); ?>" border="0">
</div>
<div class="my-header-panel">
	
	<div class="row">
		<div class="col-sm-2">
			<div class='logo'>
				<?php echo anchor('home/', '<img src="'.base_url('images/general/logo-transparan.gif').'" border="0" height="55">');?>
			</div>
		</div>
		<div class="col-sm-7">
			<div class='myserach'>


						<div class="input-group">
							<div class="input-group-btn search-panel">
								<button type="button" class="btn btn-default dropdown-toggle my-search" data-toggle="dropdown">
									<span id="search_concept">All Categories</span> <span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
								  <li><a href="#contains">Computer</a></li>
								  <li><a href="#its_equal">Gatget</a></li>
								  <li><a href="#greather_than">Communication</a></li>
								  <li><a href="#less_than">Audio & Visual</a></li>
								  <li><a href="#greather_than">Mechanical & Electrical</a></li>
								  <li><a href="#less_than">Hobby</a></li>
								  <li><a href="#greather_than">Peralatan Rumah</a></li>
								  <li><a href="#less_than">Perlengkapan Kantor</a></li>
								</ul>
							</div>
							<input type="hidden" name="search_param" value="all" id="search_param">
							<input type="text" class="my-search-field" name="x" placeholder="Search term...">
							<span class="input-group-btn">
								<button class="btn btn-default my-search-button" type="button"><span class="glyphicon glyphicon-search"></span></button>
							</span>
						</div>
				
			</div>
		</div>

		<div class="col-sm-3" style="padding-top:10px;">
		<!--	<div class="row">
				<div class="col-sm-4" style='color:#111111; font-weight:bold; margin-right:10px;'>
					
				</div>
				<div class="col-sm-6" style='color:#111111; wight:bold; text-align:right; margin-right:10px;'>
					<img src="<?php echo base_url('images/general/info-head.png');?>" border="0">
				</div>
			</div>-->
			<div>
				<div class="row">	
					<div class="col-sm-12" style='text-align:right; '>

						<div class="btn-group" style='text-align:left;'>
						

							<?php if(isset($user)){ ?>


							<div class="dropdown-account">
							  <button class="dropbtn-account"><i class="fa fa-user" aria-hidden="true"></i> Account <span class="caret"></span></button>
							  <div class="dropdown-account-content">
								<?php echo anchor('customer/create/', '<i class="fa fa-registered" aria-hidden="true"></i> Profile Anda');?>
								<?php echo anchor('#', '<i class="fa fa-sign-in" aria-hidden="true"></i> Logout', array('id'=>'logout'));?>
							  </div>
							</div>

							<?php }else{ ?>
							<div class="dropdown-account">
							  <button class="dropbtn-account"><i class="fa fa-user" aria-hidden="true"></i> Account <span class="caret"></span></button>
							  <div class="dropdown-account-content">
								<?php echo anchor('customer/create/', '<i class="fa fa-registered" aria-hidden="true"></i> '.$lang_daftar);?>
								<?php echo anchor('customer/signIn/', '<i class="fa fa-sign-in" aria-hidden="true"></i> '.$lang_masuk);?>
							  </div>
							</div>

							<?php } ?>

							<div class="btncontact">
								<?php echo anchor('customer/contact', '<button class="dropbtncontact"><i class="fa fa-envelope" aria-hidden="true"></i> Hubungi Kami</button>');?>

							</div>
							
							<div class="dropdown-basket">
							  <button class="dropbtn-basket"><i class="fa fa-shopping-cart" aria-hidden="true"></i> My Cart (2) <span class="caret"></span></button>
							  <div class="dropdown-basket-content">

									<div class="row my-cart">
									  <div class="col-sm-3"><img src="<?php echo base_url('images/demo/samsung.jpg');?>" border="0" height="50" width="50"></div>
									  <div class="col-sm-7">Samsung galaxy<br>Rp.6.000.000</div>
									  <div class="col-sm-2"><button type="button" class="btn btn-link"><i class="fa fa-times" aria-hidden="true"></i></button></div>
									</div>

									<div class="row my-cart">
									  <div class="col-sm-3"><img src="<?php echo base_url('images/demo/samsung2.jpg');?>" border="0" height="50" width="50"></div>
									  <div class="col-sm-7">Samsung 8<br>Rp.1.000.000</div>
									  <div class="col-sm-2"><button type="button" class="btn btn-link"><i class="fa fa-times" aria-hidden="true"></i></button></div>
									</div>
									<div class='my-total-cart'>
									TOTAL : <b>Rp.7.000.000</b>
									</div>
									<?php echo anchor('checkout/cart', 'Checkout', array('class'=>'btn btn-success my-btn-chekout'));?>

							  </div>
							</div>
							

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="my-header-panel2">

	<div class="row">
		<div class="col-sm-2">
			<div class='logo'>
				<?php echo anchor('home/', '<img src="'.base_url('images/general/logo-transparan.gif').'" border="0" height="55">');?>
			</div>
		</div>
		<div class="col-sm-6">
			<div class='myserach'>


						<div class="input-group">
							<div class="input-group-btn search-panel">
								<button type="button" class="btn btn-default dropdown-toggle my-search" data-toggle="dropdown">
									<span id="search_concept">All Categories</span> <span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
								  <li><a href="#contains">Computer</a></li>
								  <li><a href="#its_equal">Gatget</a></li>
								  <li><a href="#greather_than">Communication</a></li>
								  <li><a href="#less_than">Audio & Visual</a></li>
								  <li><a href="#greather_than">Mechanical & Electrical</a></li>
								  <li><a href="#less_than">Hobby</a></li>
								  <li><a href="#greather_than">Peralatan Rumah</a></li>
								  <li><a href="#less_than">Perlengkapan Kantor</a></li>
								</ul>
							</div>
							<input type="hidden" name="search_param" value="all" id="search_param">
							<input type="text" class="my-search-field" name="x" placeholder="Search term...">
							<span class="input-group-btn">
								<button class="btn btn-default my-search-button" type="button"><span class="glyphicon glyphicon-search"></span></button>
							</span>
						</div>
				
			</div>
		</div>

		<div class="col-sm-4" style="height:100%; padding-top:10px;">

			<div class="row">
				<div class="col-sm-12">

					<div class="btn-group">

						<?php if(isset($user->name)){ ?>
						<div class="dropdown">
							<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> Acount Anda
							<span class="caret"></span></button>
							<ul class="dropdown-menu">
							<li><?php echo anchor('account/', 'Profile Anda');?></li>
							<li class="divider"></li>
							<li><a href="#" id="logout">Logout</a></li>
							</ul>
						</div>
						<script type="text/javascript">
						$("#logout").click(function(e){
							e.preventDefault();

							$.confirm({
								title: 'Confirm!',
								content: 'Anda yakin akan logout?',
								buttons: {
									confirm: function () {
										document.cookie='x-auth=;path=/;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
										location.href='<?php echo base_url("customer/signIn");?>';
									},
									cancel: function () {
										//$.alert('Canceled!');
									}
								}
							});

						});
						</script>

						<?php }else{ ?>
						<div class="dropdown-account">
						  <button class="dropbtn-account"><i class="fa fa-user" aria-hidden="true"></i> Account</button>
						  <div class="dropdown-account-content">
							<?php echo anchor('customer/create/', '<i class="fa fa-registered" aria-hidden="true"></i> '.$lang_daftar);?>
							<?php echo anchor('customer/signIn/', '<i class="fa fa-sign-in" aria-hidden="true"></i> '.$lang_masuk);?>
						  </div>
						</div>

						<?php } ?>

						<div class="btncontact">
							<?php echo anchor('customer/contact', '<button class="dropbtncontact"><i class="fa fa-envelope" aria-hidden="true"></i> Hubungi Kami</button>');?>

						</div>
						<div class="dropdown-basket">
						  <button class="dropbtn-basket"><i class="fa fa-shopping-cart" aria-hidden="true"></i> My Cart (0)</button>
						  <div class="dropdown-basket-content">

								<div class="row my-cart">
								  <div class="col-sm-3"><img src="<?php echo base_url('images/demo/samsung.jpg');?>" border="0" height="50" width="50"></div>
								  <div class="col-sm-7">Samsung galaxy<br>Rp.6.000.000</div>
								  <div class="col-sm-2"><button type="button" class="btn btn-link"><i class="fa fa-times" aria-hidden="true"></i></button></div>
								</div>

								<div class="row my-cart">
								  <div class="col-sm-3"><img src="<?php echo base_url('images/demo/samsung2.jpg');?>" border="0" height="50" width="50"></div>
								  <div class="col-sm-7">Samsung 8<br>Rp.1.000.000</div>
								  <div class="col-sm-2"><button type="button" class="btn btn-link"><i class="fa fa-times" aria-hidden="true"></i></button></div>
								</div>
								<div class='my-total-cart'>
								TOTAL : <b>Rp.7.000.000</b>
								</div>
								<?php echo anchor('checkout/cart', 'Checkout', array('class'=>'btn btn-success my-btn-chekout'));?>

						  </div>
						</div>	

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12" style='color:#ffffff; wight:bold;'>
					Total Shopping Experience
				</div>
			</div>
		</div>
	</div>
</div>


<script>
(function(){

  $("#cart").on("click", function() {
    $(".shopping-cart").fadeToggle( "fast");
  });

})();
</script>

<script type="text/javascript">
var base_url = '<?php echo base_url();?>';
var api_base_url = 'http://myacico.net:8080/myacico-service/api';
</script>
