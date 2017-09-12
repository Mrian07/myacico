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
		<link rel="stylesheet" href="<?php echo base_url('assets_adminlte/font-awesome-4.5.0/css/font-awesome.min.css') ?>"/>
		
		<!-- CSS -->
		
		<!-- s: Alert -->
		<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/alert/libs/bundled.css');?>" />-->
		<script type="text/javascript" src="<?php echo base_url('assets/alert/libs/bundled.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/alert/js/jquery-confirm.js');?>"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/alert/css/jquery-confirm.css');?>" />
        <!-- e: Alert -->
		
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style_frontend.css');?>" />
		
    </head>

<body>

<div class="my-header-panel">
	<div class="my-header-panel-sub1">
		<div class="row">
			<div class="col-sm-3">
				<i class="fa fa-phone" aria-hidden="true"></i> (021) 589 99999 
			</div>
			<div class="col-sm-9">
		<i class="fa fa-clock-o" aria-hidden="true"></i>
	 Mon - Sat [09:00 - 20:00] , Sun [10:00 - 18:00] ,  Open on Holiday 

			</div>
		</div>
	</div>
	<div class="my-header-panel-sub2">
		<div class="row">
			<div class="col-sm-7">
				Total Shopping Experience
			</div>
			
			<div class="col-sm-5">
				<div class="btn-group">
				<div class="dropdowns">
					<?php echo anchor('customer/contact', '<button class="dropbtn"><i class="fa fa-envelope" aria-hidden="true"></i> Hubungi Kami</button>');?>
				  
				</div>	
				<div class="dropdowns">
				  <button class="dropbtn">Bahasa</button>
				  <div class="dropdowns-content">
					<a href="#"><img src='<?php echo base_url('images/general/lang_bahasa.png');?>' border='0'> Indonesia</a>
					<a href="#"><img src='<?php echo base_url('images/general/lang_english.png');?>' border='0'> Inggris</a>
				  </div>
				</div>
				</div>
			</div>
		</div>	
	</div>
</div>
<div style="clear:both;"></div>


<!--
<div class="my-header-panel2">
		
	<div class="row">
		<div class="col-sm-2">
			<?php echo anchor('home/', '<img src="'.base_url('images/general/logo-transparan.gif').'" border="0" height="80" style="margin-top:-10px">');?>
			
		</div>
		<div class="col-sm-6">
			
			
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
		<div class="col-sm-4">
			<div class="row">
				<div class="col-sm-6">
		
			<i class="fa fa-user" aria-hidden="true"></i>
			<?php echo anchor('customer/create/', $lang_daftar);?> /
			<?php echo anchor('customer/signIn/', $lang_masuk);?>
			
				</div>
				<div class="col-sm-6">
				
				</div>
			</div>	
		</div>
	
	</div>	
</div>
-->

<div class="my-header-panel2">
	<div class='logo'>
		<?php echo anchor('home/', '<img src="'.base_url('images/general/logo-transparan.gif').'" border="0" height="80">');?>
	</div>		
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
	

	<div class='mybasket'>
		<div class="dropdown-basket">
		  <button class="dropbtn-basket"><i class="fa fa-shopping-cart" aria-hidden="true"></i> My Cart (0)</button>
		  <div class="dropdown-basket-content">
			<a href="#">Item Kosong</a>
		  </div>
		</div>
	</div>	
	
	<div class='myreg'>
		<i class="fa fa-user" aria-hidden="true"></i>
		<?php if($this->session->userdata('cust_login')){ ?>
		<?php echo anchor('account/', 'Profile Anda');?>
		<?php }else{ ?>
		<?php echo anchor('customer/create/', $lang_daftar);?> / <?php echo anchor('customer/signIn/', $lang_masuk);?>
		<?php } ?>
	</div>
</div>

