
<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $title_web; ?></title>

<style>
a{
	color:red;
}
</style>

		<!-- Strat Bootstrap -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" />
		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
		<!-- End Bootstrap -->

		<!-- s: jquery-ui -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/jquery-ui.min.css');?>">
		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui.min.js');?>"></script>
		<!-- e: jquery-ui -->

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.5/angular.min.js"></script>

		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
		<link href="<?php echo base_url('assets/nav/css/animate.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/nav/css/bootsnav2.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/nav/css/style.css');?>" rel="stylesheet">
		<script src="<?php echo base_url('assets/nav/js/bootsnav.js');?>"></script>

		<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/animate.css');?>" />-->
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('images/general/favicon.ico');?>">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="<?php echo base_url('assets_adminlte/font-awesome-4.7.0/css/font-awesome.min.css') ?>"/>

		<!-- CSS -->

		<!-- s: Alert -->
		<!--<link rel="stylesheet" type="text/css" href="<?php //echo base_url('assets/alert/libs/bundled.css');?>" />-->
		<!--script type="text/javascript" src="<?php //echo base_url('assets/alert/libs/bundled.js');?>"></script-->
		<script type="text/javascript" src="<?php echo base_url('assets/alert/js/jquery-confirm.js');?>"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/alert/css/jquery-confirm.css');?>" />
        <!-- e: Alert -->

		<script type="text/javascript" src="<?php echo base_url('assets/js/jwt-decode.min.js');?>"></script>
		<!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">-->

		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>" />

		<style type="text/css">
			#search_keyword_id
			{
				width:500px;
				/*border:solid 1px #CDCDCD;*/
				padding:10px;
				font-size:12px;
			}
			.productSrc
			{
				position:absolute;
				width:628px;
				display:none;
				margin-top:-1px;
				border-top:0px;
				overflow:hidden;
				border-left:1px  #CDCDCD solid;
				border-right:1px  #CDCDCD solid;
				background-color: white;
				z-index: 289;
			}
			.show_result
			{
				font-family:tahoma;
				padding:5px;
				border-bottom:1px #CDCDCD dashed;
				font-size:12px;
				z-index: 289;
			}
			.show_result:hover
			{
				background:#e9e9e8;
				color:#000000;
				cursor:pointer;
			}
		</style>
    </head>

<body style='font-weight: normal' >

  <div class='container'>
		<div style='margin-bottom:20px; margin-top:10px'>
	    <img src='<?php echo base_url('images/general/img-head1.jpg');?>' border='0'>
		</div>

    <button class='btn-nav-head'>Blog</button> <button class='btn-nav-head'>Produk Terbaru</button> <button class='btn-nav-head'>Cara Belanja</button> <button class='btn-nav-head'>Customer Service</button>
    <div class='row'>
      <div class="col-xs-8">
  			<div class='myserach' ng-app="myApps">
  				<div ng-controller = "searchCtrl">
  				<div class="input-group">
  					<div class="input-group-btn search-panel">
  						<button type="button" class="dropdown-toggle my-search" data-toggle="dropdown">
  							<span id="search_concept">All Categories</span> <span class="caret"></span>
  						</button>
              <?php //echo"<pre>"; print_r($catsearch); die(); ?>
  						<!-- <ul class="dropdown-menu cat_menu" role="menu"> -->
  						<ul class="dropdown-menu mycategory-search" role="menu">
  							<li><a href='#all'>All Categories</a></li>
  							<!-- <?php foreach($catsearch as $datacat){
  								echo"<li><a href='#".$datacat['m_product_category_id']."'>".$datacat['name']."</a></li>";
  							}?> -->
  						</ul>
  					</div>
  					<input type="hidden" name="search_param" value="all" id="search_param">
  					<input type="hidden" name="searchID" id="searchID">
  					<input type="text" name="search" id="searchDesk" autocomplete="off" class="my-search-field">
  					<!--<div id="result"></div>-->
  					<div class="productSrc" style='diplay:none'></div>

  					<!--<input type="text" class="my-search-field" name="x" placeholder="Search term..."> -->

  					<span class="input-group-btn">
  						<button class="btn btn-default my-search-button" type="button" onclick='btnSearchDesk()'><i class="fa fa-search" aria-hidden="true"></i></button>
  					</span>
  				</div>
  			</div>
  			</div>
  		</div>
      <div class="col-xs-4">
        <div class='row' style='padding-top:10px'>
          <div class="col-xs-2" style='font-size:50px; color:#b2b2b2; '><i class="fa fa-user" aria-hidden="true"></i></div>
          <div class="col-xs-6" style='font-size:24px; color:#b2b2b2; padding-left:3px; '>Selamat Datang<br><b><font color='red'>Login</font></b> / <b><font color='red'>Daftar</font></b></div>
          <div class="col-xs-3"><img src="<?php echo base_url('images/general/cart.png'); ?>" border="0"></div>
        </div>
        <!-- <table border='0' width='100%'><tr><td style='font-size:65px; text-align: center; color:#b2b2b2'></td><td style='font-size:20px; font-weight:bold; text-align: center; color:#b2b2b2'>Selamat Datang<br><font color='red'>Login</font> / <font color='red'>Daftar</font></td><td><img src="
          <?php// echo base_url('images/general/cart.png'); ?>" border="0"></td></tr></table> -->

      </div>
    </div>


    <!-- <div class="row">
      <div class="col-xs-4">One third</div>
      <div class="col-xs-4">One third</div>
      <div class="col-xs-4">One third</div>
    </div>

		<div class="row">
      <div class="col-xs-6">One third</div>
      <div class="col-xs-6">One third</div>
    </div> -->
  </div>






















  <!-- s header -->

  <script type="text/javascript">
  	$('body').click(function() {
  		 $('.show_result').hide();
  	});

  	function btnSearchDesk(){
  		var searchDesk = $('#searchDesk').val();
  		location.href = base_url+'product/alllistItem/'+searchDesk;
  	}

  	function money(x){
  		return 'Rp. '+(x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."));
  	}

  	$('.show_result').on('mouseout',function(){
  		$('.show_result').hide();
  	});



  	$(document).ready(function() {

  		$("#searchDesk").keyup(function() {
  			var cat = $('#search_param').val();
  			$(".productSrc").show();

  			var search_value = $(this).val();
  			var datas		 = 'search='+search_value;
  			var productSrc = $('.productSrc');

  			if ( search_value == '' ) {$(".productSrc").hide();}

  			if(cat=='all'){
  				productSrc.html('');

  					$.ajax({
  						url: api_base_url+'/product/productlist/'+search_value,
  						data: datas,
  						success: function(data) {
  							data.forEach(function(p){
  								productSrc.append(

  								"<div class=\"show_result\" onclick=\"showData('"+p.name+"','"+p.m_product_id+"','"+p.alias+"');\"><table border='0' cellpadding='5'><tr><td><img src='"+p.imageurl+"' width='100'></td><td><font size='3'>"+p.name+"<br><b>"+money(p.pricelist)+"</b><br><span style='padding:5px; background:#fbbd44;'>"+p.category+"</span></td></tr></table></div>"


  								);

  							});

  						}
  					});


  			}else{

  				productSrc.html('');

  					$.ajax({
  						url: api_base_url+'/product/productlist/'+cat+'/'+search_value,
  						data: datas,
  						success: function(data) {


  								data.forEach(function(p){
  									productSrc.append(

  									"<div class=\"show_result\" onclick=\"showData('"+p.name+"','"+p.m_product_id+"','"+p.alias+"');\"><table border='0'><tr><td><img src='"+p.imageurl+"' width='100'></td><td><font size='3'>"+p.name+"<br><b>"+money(p.pricelist)+"</b><br><span style='padding:5px; background:#fbbd44;'>"+p.category+"</span></td></tr></table></div>"


  									);
  									//alert(p.name);
  								});
  							//$("#result").html(data).show();
  						}
  					});

  			}

  			return false;
  		});

  	});
  	function showData(name,id,alias)
  	{
  		var url = base_url+'/product/detail/'+id+'/'+alias;
  		window.location.href = url;
  		// $("#search").val(name);
  		// $("#searchID").val(id);
  		// $("#result").hide();
  		// $(".productSrc").hide();
  	}
  </script>

  <script>
  //Buat ngecek jumlah keranjang
  /*
  $(document).ready(function() {

  	totalCart();

  });*/

  function totalCart(){
  	var token = document.cookie.split('x-auth=')[1].split(';').shift();
  	var qty = 0;

  	if(token){

  		$.ajax
  		({
  		url: "<?php echo site_url('cart/totalQtyToken'); ?>",
  		success:function(html){
  				$(".totalCart").html(html);
  			}
  		});

  	}
  }


  var app = angular.module("myApp", []);

  app.factory('$mycart', function() {
  	var data = [];
  	var saved_cart = document.cookie.split('cart=');
  	if(saved_cart.length > 1){
  		data = JSON.parse(saved_cart[1].split(';').shift());
  		//console.log('cart on cookies found');
  	}
  	return {data:data};
  });

  app.factory('toMoney', function() {
  	return function(x){
  		return 'Rp. '+(x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."));
  	}
  });

  app.controller('cartCnt', function($scope, $mycart, toMoney){
  	$scope.mycart = $mycart.data;
  	$scope.del = function(i){
  		if(confirm('Sure? '))$scope.mycart.splice(i, 1);
  	}
  	$scope.toMoney = toMoney;
  	$scope.get_total = function(){
  		var total = 0;
  		$scope.mycart.forEach(function(c){
  			total+=(c.price*c.quantity);
  		});
  		document.cookie = 'cart='+JSON.stringify($scope.mycart)+'; path='+base_path;
  		return toMoney(total);
  	}
  });

  <?php if(isset($user->name)){ ?>

  $(".logout").click(function(e){
      e.preventDefault();

  	$.confirm({
  		title: 'Confirm!',
  		content: 'Anda yakin akan logout?',
  		buttons: {
  			confirm: function () {
  				document.cookie='x-auth=; path='+base_path+';expires=Thu, 01 Jan 1970 00:00:01 GMT;';
  				location.href='<?php echo base_url("customer/signIn");?>';
  			},
  			cancel: function () {
  				//$.alert('Canceled!');
  			}
  		}
  	});

  });
  <?php } ?>

  </script>

  <!---modif lalang-->
  <script type="text/javascript">

  //Desktop
  $(".dropbtn-basket").mouseover(function(){

  	var cookie = document.cookie.split('x-auth=');
  	if(cookie.length > 1){

  	/*		$('.empty-item').hide();
  			listCartToken();

  */
  		$.ajax
  		({
  			url: "<?php echo site_url('cart/loadCartToken'); ?>",
  			success:function(html){
  				$('.dropdown-basket-content').html(html);
  			}
  		});

  	}else{

  		$.ajax
  		({
  			url: "<?php echo site_url('cart/loadCart'); ?>",
  			success:function(html){
  				$('.dropdown-basket-content').html(html);
  			}
  		});

  	}
  });

  //Mobile
  $(".dropbtn-basket-mobile").mouseover(function(){

  	var cookie = document.cookie.split('x-auth=');
  	if(cookie.length > 1){

  		$.ajax
  		({
  			url: "<?php echo site_url('cart/loadCartTokenMobile'); ?>",
  			success:function(html){
  				$('.dropdown-basket-mobile-content').html(html);
  			}
  		});

  	}else{

  		$.ajax
  		({
  			url: "<?php echo site_url('cart/loadCartMobile'); ?>",
  			success:function(html){
  				$('.dropdown-basket-mobile-content').html(html);
  			}
  		});

  	}
  });
  /*
  function listCartToken(){
  	var token = document.cookie.split('x-auth=')[1].split(';').shift();
  	var list = $('.list-item');
  	var btn = $('.btn-chekout');
  	var qty = 0;
  	var totalBelanja = 0;
  	list.html(
  				''
  			);
  	$.get( api_base_url+"/order/cart/detail?token="+token,
  	function(r){

  		r.forEach(function(p){
  			qty += p.qty;
  			totalBelanja+=p.price;
  			//alert(qty);
  			list.append(
  				'<div class="row my-cart" style="position:relative;"><div class="col-sm-3"><img src="'+p.imageurl+'" border="0" height="50" width="50"></div><div class="col-sm-7">'+p.name+'<br>Rp.'+p.price+' ('+p.qty+')Items<br></div><div class="col-sm-2"><a href="#" onClick="dellItemCartToken('+p.productId+',\''+p.imageurl+'\',\''+p.name+'\',\''+p.itemCartId+'\')"><i class="fa fa-trash" aria-hidden="true"></i></a></div></div>'
  			);
  		});
  		//alert(qty);


  		btn.html('');
  		btn.append(
  				'<div style="position:relative;"><div class="my-total-cart">TOTAL : <b>'+totalBelanja+'</b></div><a href="'+base_url+'cart" class="btn btn-success my-btn-chekout">My Cart & Checkout</a></div>'
  			);


  			if(totalBelanja==0){
  				list.html(
  					''
  				);
  				btn.html('<center>Keranjang masih kosong</center>');
  			}

  	  }, "json" );

  }*/

  function dellItemCart(id,rowid,img,name){

  	$.confirm({
  		title: name,
  		content: '<img src="'+img+'">'+'<br><br>Apakah item ini akan dihapus?',
  		//content: '<p>Apakah item ini akan dihapus?</p>',
  		autoClose: 'cancel|10000',
  		closeIcon: true,
  		closeIconClass: 'fa fa-close',
  		buttons: {
  			confirm: function () {
  				var dataString = 'rowid='+ rowid;
  				//untuk cart yang di header
  				$.ajax
  				({	type: "POST",
  					url: "<?php echo site_url('cart/removeItem'); ?>",
  					data: dataString,
  					success:function(data){
  						$(".totalCart").html(data);
  					}
  				});

  				//untuk cart yang di basket
  				$.ajax
  				({
  					url: "<?php echo site_url('cart/listCart'); ?>",
  					success:function(data){
  						$(".listCart").html(data);
  					}
  				});

  			},
  			cancel: function () {
  				//$.alert('Canceled!');
  			}
  		}

  	});
  }

  function dellItemCartToken(id,img,name,idcart){

  	var token = document.cookie.split('x-auth=')[1].split(';').shift();
  	var apiurl = api_base_url + '/order/cart/deleteitem?idcartitem='+idcart;

  	$.confirm({
  		title: name,
  		content: '<img src="'+img+'">'+'<br><br>Apakah item ini akan dihapus?',
  		//content: '<p>Apakah item ini akan dihapus?</p>',
  		autoClose: 'cancel|10000',
  		closeIcon: true,
  		closeIconClass: 'fa fa-close',
  		buttons: {
  			confirm: function () {
  				//untuk cart yang di header
  				$.ajax
  				({	type: "POST",
  					url: apiurl,
  					headers:{ "token":token},
  					success:function(data){
  						totalCart();
  					}
  				});


  				//untuk cart yang di basket token
  				$.ajax
  				({
  				url: "<?php echo site_url('cart/listCartToken'); ?>",
  				success:function(html){
  						$(".listCart").html(html);
  					}
  				});

  			},
  			cancel: function () {
  				//$.alert('Canceled!');
  			}
  		}

  	});


  	/*var success = function(r){
  	$('#spinner_img').hide();
  	$('#submit_btn').val('Kirim').removeClass('disabled');
  		 $.alert({
  		 title: 'Alert!',
  		 content: 'Item berhasil dihapus',
  		});
  		console.log('OK:', r.status);
  		window.location.replace(base_url+"/account/bukuAlamat");

  	};*/
  }


  var base_url = '<?php echo base_url();?>';
  var base_path = base_url.split(location.host).pop();

  var login = 'http://acc.myacico.co.id/myacico-account/account/masuk';
  // var login_base_url_api = 'acc.myacico.co.id/myacico-service';
  var adduser = 'http://acc.myacico.co.id/myacico-account/account/';

  //
  //var api_base_url2 = <?php echo $baseApiUrl; ?>;
  //var api_base_url = 'http://myacico.net:8080/myacico-service/api';
  var api_base_url = "<?php echo $baseApiUrl; ?>";
  </script>

  <!-- e header -->
