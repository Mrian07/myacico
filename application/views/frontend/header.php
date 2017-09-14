<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<style>
$main-color: #6394F8;
$light-text: #ABB0BE;

@import url(https://fonts.googleapis.com/css?family=Lato:300,400,700);

@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css);

*, *:before, *:after {
  box-sizing: border-box;
}

body {
  font: 14px/22px "Lato", Arial, sans-serif;
  background: #6394F8;
}

.lighter-text {
  color: #ABB0BE;
}

.main-color-text {
  color: $main-color;
}

nav {
  padding: 20px 0 40px 0;
  background: #F8F8F8;
  font-size: 16px;

  .navbar-left {
    float: left;
  }

  .navbar-right {
    float: right;
  }
  ul {

    li {
      display: inline;
      padding-left: 20px;
      a {
        color: #777777;
        text-decoration: none;

        &:hover {
          color: black;
        }
      }
    }
  }
}

.container {
  margin: auto;
  width: 80%;
}

.badge {
    background-color: #6394F8;
    border-radius: 10px;
    color: white;
    display: inline-block;
    font-size: 12px;
    line-height: 1;
    padding: 3px 7px;
    text-align: center;
    vertical-align: middle;
    white-space: nowrap;
}

.shopping-cart {
  margin: 20px 0;
  float: right;
  background: white;
  width: 320px;
  position: relative;
  border-radius: 3px;
  padding: 20px;


  .shopping-cart-header {
    border-bottom: 1px solid #E8E8E8;
    padding-bottom: 15px;

    .shopping-cart-total {
      float: right;
    }
  }

  .shopping-cart-items {

    padding-top: 20px;

      li {
        margin-bottom: 18px;
      }

    img {
      float: left;
      margin-right: 12px;
    }

    .item-name {
      display: block;
      padding-top: 10px;
      font-size: 16px;
    }

    .item-price {
      color: $main-color;
      margin-right: 8px;
    }

    .item-quantity {
      color: $light-text;
    }
  }

}

.shopping-cart:after {
	bottom: 100%;
	left: 89%;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none;
	border-bottom-color: white;
	border-width: 8px;
	margin-left: -8px;
}

.cart-icon {
  color: #515783;
  font-size: 24px;
  margin-right: 7px;
  float: left;
}

.button {
  background: $main-color;
  color:white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  display: block;
  border-radius: 3px;
  font-size: 16px;
  margin: 25px 0 15px 0;

  &:hover {
    background: lighten($main-color, 3%);
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}



</style>


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

		<script type="text/javascript" src="<?php echo base_url('assets/js/jwt-decode.min.js');?>"></script>

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

			<div class="col-sm-5"><?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; $url="'$actual_link'"; ?>
				<div class="btn-group">
					<div class="btncontact">
						<?php echo anchor('customer/contact', '<button class="dropbtncontact"><i class="fa fa-envelope" aria-hidden="true"></i> Hubungi Kami</button>');?>

					</div>
					<div class="dropdowns">
					  <button class="dropbtn"><i class="fa fa-flag" aria-hidden="true"></i> Bahasa</button>
					  <div class="dropdowns-content">
						<?php //echo anchor('home/lang/'.$url, '<img src="'.base_url('images/general/lang_bahasa.png').'" border="0"> Indonesia', array('id'=>'lang'));  echo anchor('home/lang/'.$url, '<img src="'.base_url('images/general/lang_english.png').'" border="0"> Inggris'); ?>
						<a href="#" onclick="langFunction('id')"><img src="<?php echo base_url('images/general/lang_bahasa.png'); ?>" border="0"> Indonesia </a>
						<a href="#" onclick="langFunction('en')"><img src="<?php echo base_url('images/general/lang_english.png'); ?>" border="0"> Inggris </a>
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
			<button class="dropbtn-basket"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
  Messages <span class="badge">4</span>
</button>
		  <!-- <button class="dropbtn-basket"><i class="fa fa-shopping-cart" aria-hidden="true"></i> My Cart (0) </button> -->
		  <div class="dropdown-basket-content">
				<!--REVIEW ORDER-->
				 <div class="shopping-cart-header">
				<div class="shopping-cart-total">
        <span class="lighter-text">Total:</span>
        <span class="main-color-text">$2,229.97</span>
				<ul class="shopping-cart-items">
      <li class="clearfix">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item1.jpg" alt="item1" />
        <span class="item-name">Sony DSC-RX100M III</span>
        <span class="item-price">$849.99</span>
        <span class="item-quantity">Quantity: 01</span>
      </li>
			
		</ul>
      </div>
		<?php echo anchor('customer/cart/',	'checkout' );?>
		  </div>
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

<script>
(function(){

  $("#cart").on("click", function() {
    $(".shopping-cart").fadeToggle( "fast");
  });

})();
</script>
