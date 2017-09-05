<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Strat Bootstrap -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" />
		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
		<!-- End Bootstrap -->
		
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style_frontend.css');?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/animate.css');?>" />
		<!--<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('images/favicon/'.$data_g["favicon"]);?>">-->
		<!-- Font Awesome -->
		<link rel="stylesheet" href="<?php echo base_url('assets_adminlte/font-awesome-4.5.0/css/font-awesome.min.css') ?>"/>
		
		
        <title>Myacico - Myadmin</title>
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
			<div class="col-sm-9">
				Total Shopping Experience
			</div>
			<div class="col-sm-3">
				<div class="dropdown">
				  <button class="dropbtn">Bahasa</button>
				  <div class="dropdown-content">
					<a href="#"><img src='<?php echo base_url('images/general/lang_bahasa.png');?>' border='0'> Indonesia</a>
					<a href="#"><img src='<?php echo base_url('images/general/lang_english.png');?>' border='0'> Inggris</a>
				  </div>
				</div>
			</div>
		</div>	
	</div>
</div>
<div style="clear:both;"></div>

<div class="my-header-panel2">
	<div class="row">
		<div class="col-sm-1">
			<?php echo anchor('home/', '<img src="'.base_url('images/general/logo-transparan.gif').'" border="0" height="80">');?>
			
		</div>
		<div class="col-sm-8">
			
			
			<div class="row">    
				<div class="col-xs-9 col-xs-offset-2">
					<div class="input-group">
						<div class="input-group-btn search-panel">
							<button type="button" class="btn btn-default dropdown-toggle my-search" data-toggle="dropdown">
								<span id="search_concept">Filter by</span> <span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
							  <li><a href="#contains">Contains</a></li>
							  <li><a href="#its_equal">It's equal</a></li>
							  <li><a href="#greather_than">Greather than ></a></li>
							  <li><a href="#less_than">Less than < </a></li>
							  <li class="divider"></li>
							  <li><a href="#all">Anything</a></li>
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
			
			
		</div>
		<div class="col-sm-3">
			<?php echo anchor('customer/create/', 'Register');?>
			<?php echo anchor('customer/signIn/', 'Sign In');?>
		</div>
	
	</div>		
  
</div>
<div style="clear:both;"></div>
<div class="jumbotron text-center" style='background-color:#ffffff'>

  <h1>Form Login My Admin</h1>
  <p>Masukan username dan password Anda.</p> 
</div>