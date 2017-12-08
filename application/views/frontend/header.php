<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
		<title><?php echo $title_web; ?></title>

		<style>
		a{
			color:red;
		}
		</style>
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

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
		<script type="text/javascript">
			var base_url = '<?php echo base_url();?>';
			var base_path = base_url.split(location.host).pop();
			var site_url = '<?php echo site_url();?>';

			var login = 'http://acc.myacico.co.id/myacico-account/account/masuk';
			var login1 = 'https://acc.myacico.co.id/myacico-account/';
			// var login_base_url_api = 'acc.myacico.co.id/myacico-service';
			var adduser = 'http://acc.myacico.co.id/myacico-account/account/';

			//
			//var api_base_url2 = <?php echo $baseApiUrl; ?>;
			//var api_base_url = 'http://myacico.net:8080/myacico-service/api';
			var api_base_url = "<?php echo $baseApiUrl; ?>";
			var token;

			(function(){
				console.log('cek token');
				var cookie = document.cookie.split('x-auth=');
				if(cookie.length > 1){
					token = cookie[1].split(';').shift()
				}
			})()
//                         deklarasi awal
//var prod_detail = localStorage.setItem('product_detail', '[]');
var prod_detail =  localStorage.getItem('product_detail');
                if(!prod_detail)
                {
                     localStorage.setItem('product_detail', '[]');
                }
		</script>

        <!-- s: Chat -->
		<script type="text/javascript" src="<?php echo base_url('assets/js/chat.js');?>"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/chat.css');?>" />
        <!-- e: Chat -->

		<!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">-->

		<!-- <link href="<?php echo base_url('assets/css/mynav.css');?>" rel="stylesheet">
		<script src="<?php echo base_url('assets/js/mynav.js');?>"></script> -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>" />

		<!-- s: Datepicker-->
		<link rel="stylesheet" href="<?php echo base_url('date_picker/bootstrap-datetimepicker.min.css');?>" type='text/css'>
		<!-- e: Datepicker-->

		<style type="text/css">
			/*#search_keyword_id
			{
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
			}*/

		</style>


    </head>

	<body style='font-weight: normal;' ng-app="myApp">


			<div>
				<a href="https://myacico.co.id/product/category/1000553/Perlengkapan-Kantor">
		    <img src='<?php echo base_url('images/general/bg_atas_2.png'); ?>' style="background-color: #F6F6F6;
				text-align: left;
				background-position: top left;
				height: 70px;
				background-repeat: no-repeat;
				background-size: 1920px;
				min-width: 1000px;">
			</div></a>


			<div class='row'>
				<!-- <div class="col-xs-7" style='display: flex;  align-items: flex-end;height: 60px;border: solid 0px red; text-align:right; background:#dddddd;'> -->

				<div class="col-xs-7">
					<div class='link-head' style='margin-top:40px; position: absolute'>
						<?php echo anchor('#','Blog', array('class'=>'btn-nav-head')); ?>
						<?php echo anchor('#',$lang_produck, array('class'=>'btn-nav-head')); ?>
						<?php echo anchor('#',$lang_carabeli, array('class'=>'btn-nav-head')); ?>

           <?php echo anchor('customer/afterSales',$lang_after_sales, array('class'=>'btn-nav-head')); ?>
					</div>
				</div>

				<div class="col-xs-5">
					 <!-- <b>Belanja murah di myacico.co.id! Gratis pengiriman untuk area JAKARTA</b> -->


					 <div class='row' style='padding-top:10px;'>

						 <div style='margin-top:8px;  float:right; width:90px;'>
							 <div class="dropdown-basket">
								 <?php
									 $totalItems = 0;
									 foreach ($this->cart->contents() as $items):
										 $totalItems += $items['qty'];
									 endforeach;
								 ?>
								 <button class="dropbtn-basket" onclick="javascript:location.href='<?php echo base_url('checkout/cart'); ?>'">
									 <img src="<?php echo base_url('images/general/cart.png'); ?>" width='35' border="0"><br>
									 <span class="badge totalCart" style='margin-left:-7px; margin-top: -30px; position: absolute; font-size:9px; background:#faaf3b;color:#000000'><?php echo $totalItems; ?></span>
								 </button>
									 <div class="dropdown-basket-content" style='padding:0px;'>
										 <?php
										 if($totalItems==0)
										 { ?>
										 <div class='empty-item'><center><img src='<?php echo base_url('images/general/empty.jpg'); ?>' border='0'><br>Keranjang masih kosong</center></div>
										 <?php } ?>
										 <div class='list-item'></div>
										 <div class='btn-chekout'></div>
									 </div>
							 </div>
						 </div>
						 <div style='float:right; width:160px; text-align:center; border:0px;' >
							 <div class='row' style='margin-top:0px; padding:0px;'>
								 <div class="col-xs-4" style='margin-top:5px; text-align: right'>
									   <!-- <div class="buktiTrans"></div> -->
										 <!-- <?php  echo " <img src='$myavatar' width='25' border='0'>"; ?> -->
							<?php
							if(isset($_COOKIE['x-auth'])){
					  		   echo anchor('account/avatar', "<img src='$myavatar' width='25' border='0'>");
				  		} else{ ?>
							 <img src='<?php echo base_url('images/general/icon-man.png'); ?>' width='25' border='0'>
							<?php } ?>

									 <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
								 </div>
								 <div class="col-xs-8" style='font-size:10px; text-align: left; color:#4d4d4d; padding-left:0px;'>
									  <?php if(isset($user)){ ?>

											Hi. <span id="test"></span>
											 <?php }else{ ?>
												  <div><?php echo $lang_aa; ?></div>
												  <?php } ?>

													<script language="javascript">


														function test(){
															<?php if(isset($user)){
																?>
																var testString = "<?php echo $user->name;?>"

																var testArray = testString .split(' ');

																return testArray[0];
															<?php }else{
															?>	var testString = "";
															<?php } ?>



														}
														<?php if(isset($user)){
														 ?>
														document.getElementById("test").innerHTML = test();
														<?php }else{
															?>

														<?php } ?>
													</script>
									 <div style='margin-top:-8px; '>
										 <?php if(isset($user)){ ?>
											 <b><font color='red'><?php echo anchor('account', 'Profile', array('class'=>'btn-nav-red'));?></font></b> /
											 <b><font color='red'><?php echo anchor('#', 'Log out', array('class'=>'logout btn-nav-black'));?></font></b>
										 <?php }else{ ?>
											 <b><font color='red'><?php echo anchor('customer/signIn','Log in', array('class'=>'btn-nav-red')); ?></font></b> / <b><font color='red'><?php echo anchor('customer/create',$lang_sign, array('class'=>'btn-nav-black')); ?></font></b>
										 <?php } ?>
									 </div>
								 </div>
							 </div>
						 </div>
						 <!-- <div style='float:right; width: 80px; text-align: center; border-right:1px solid #4d4d4d; margin-top:8px;'> -->
						<div style='float:right; width: 40px; text-align: center; margin-top:8px;'>

							<div class="dropdown-lang" style='border:0px solid #aeaeab; padding:0px; right: 0; left: auto; text-align:left'>
								<?php if($lang=='en'){?><img src="<?php echo base_url('images/general/flag-en.png'); ?>" border="0" width="30"><?php }else{ ?><img src="<?php echo base_url('images/general/flag-id.png'); ?>" border="0" width="30"><?php } ?>
								<div class="dropdown-lang-content">
									<a href="#" onclick="langFunction('id')"><img src="<?php echo base_url('images/general/lang_bahasa.png'); ?>" border="0"> Indonesia </a>
									<a href="#" onclick="langFunction('en')"><img src="<?php echo base_url('images/general/lang_english.png'); ?>" border="0"> Inggris </a>
								</div>
							</div>

						</div>

				 </div>

			 </div>

		 </div>


		 	<div class='my-hdr1'>
				<div style='margin-top:-3px'>
					<?php echo anchor('/', '<img src="'.base_url('images/general/logocoid.gif').'" border="0" height="70">');?>
				</div>
			</div>

      <div class='my-hdr2'>
  			<div class='myserach' ng-app="myApps" style='margin-top:8px'>
  				<!-- <div ng-controller = "searchCtrl"> -->
					<div class="input-group">
  					<div class="input-group-btn search-panel">
  						<button type="button" class="dropdown-toggle my-search" data-toggle="dropdown">
  							<span id="search_concept"><?php echo $lang_all_src; ?></span> <span class="caret"></span>
  						</button>
  						<ul class="dropdown-menu mycategory-search" role="menu">
  							<li><a href='#all'><?php echo $lang_all_src; ?></a></li>
  							<?php foreach($catsearch as $datacat){
									if($lang=='en'){
										$cat_name = $datacat['name_en'];
									}else{
										$cat_name = $datacat['name'];
									}
  								echo"<li><a href='#".$datacat['m_product_category_id']."'>".$cat_name."</a></li>";
  							}?>
  						</ul>
  					</div>
  					<input type="hidden" name="search_param" value="all" id="search_param">
  					<!-- <input type="text" name="searchID" id="searchID"> -->
  					<input type="text" name="search" id="searchDesk" autocomplete="off" class="my-search-field">

  					<!-- <div class="productSrc" style='diplay:none'></div> -->
						<div class="" id="productSrc">
							<p id='loading'><img src="<?php echo base_url('images/general/Spinner_search.gif'); ?>" border="0"> Loading...</p>
							<div id="title_top">Popular Search</div>
							<div id="top"></div>
							<p id='loading2'><img src="<?php echo base_url('images/general/Spinner_search.gif'); ?>" border="0"> Loading...</p>
							<div id="title_list">Search Result</div>
							<div id="list"></div>
						</div>

  					<span class="input-group-btn">
  						<button class="my-search-button" type="button" onclick='btnSearchDesk()'><i class="fa fa-search" aria-hidden="true"></i></button>
  					</span>

						<!-- <span class="input-group-btn">
  						<button class="btn btn-default my-search-button" type="button" id="other"><i class="fa fa-search" aria-hidden="true"></i></button>
  					</span> -->
  				</div>


      </div>

  </div>
	<div class='my-hdr3'>
			<div class="row" style='margin:0px; padding:0px'>
				<div class="col-xs-9" style='padding:5px; text-align:right'>
						<div style='font-size:11px; margin-bottom:-5px;'><?php echo $lang_promo1; ?></div>
						<div style='font-family: arial; font-size:14px; font-weight: bold; color:#ff0000; '><?php echo $lang_promo2; ?> </div>
				</div>
				<div class="col-xs-3" align="left" style='margin:0px; padding:0px'>
					<div style='margin-top:-7px;'>
						<img src="<?php echo base_url('images/general/basket-01.png'); ?>" border="0" height="55">
					</div>
				</div>
			</div>
	</div>

  <!-- s header -->

	<script>


	function btnSearchDesk(){
		var searchDesk = $('#searchDesk').val();
		if(searchDesk){
			location.href = base_url+'product/alllistItem/'+searchDesk;
		}else{
				$.alert({
				title: 'Peringatan',
				content: 'kolom pencarian tidak boleh kosong',
				});
			}
	}

	$('#loading').hide()
	$('#loading2').hide()
	var typingTimer;
	var doneTypingInterval = 5000;
	var doneTypingIntervalCat = 20000;

	$("#searchDesk").keyup(function( event ) {
		var key = $(this).val();
		var cat = $('#search_param').val();
		$('#title_list').hide();
		$('#title_top').hide();
		$('#list').empty();
		$('#top').empty();
		$('#loading').show();
		$('#loading2').show();
		clearTimeout(typingTimer);

		if(cat=="all"){
				typingTimer = setTimeout(topProduct(key), doneTypingInterval);
				typingTimer = setTimeout(searchProduct(key), doneTypingInterval);
		}else{
				typingTimer = setTimeout(topProduct(key), doneTypingInterval);
				typingTimer = setTimeout(searchProductCat(cat,key), doneTypingIntervalCat);
		}

	}).keydown(function( event ) {
	  	if ( event.which == 13 ) {
	    	event.preventDefault();

				var searchDesk = $('#searchDesk').val();
				if(searchDesk){
					location.href = base_url+'product/alllistItem/'+searchDesk;
				}else{
					$.alert({
					title: 'Peringatan',
					content: 'kolom pencarian tidak boleh kosong',
					});
				}

	  	}

	}).click(function() {


	}).focus(function(){
		topProduct('');
		$('#loading2').hide()
		$('#list').empty();
	})
	//.blur(function(){
		// $('#top').empty();
		// $('#list').empty();
		// $('#title_list').hide();
		// $('#title_top').hide();
	//})

	.blur(function(){

 setTimeout(function(){
  $('#top').empty();
  $('#list').empty();
	$('#title_list').hide();
	$('#title_top').hide();
},500)
})


	function searchProduct(key){
	//	$('#top').empty();
		// $('#list').empty();
		$.ajax({
			url: api_base_url+'/product/productlist/'+key,
			success: function(data) {
				$('#list').empty();
				$('#loading2').hide()
				if(data.length==0 || data.length==''){$('#title_list').hide();}else{$('#title_list').show();}
				for (var i = 0; i < data.length; i++) {
					 var result = '<div class="img-con" onclick="showData(\''+data[i].m_product_id+'\',\''+data[i].alias+'\');"><img class="img-src" src="'+data[i].imageurl+'">'+'<span class="searh-name">'+data[i].name+'</span><span style="float:right"><b>'+money(data[i].pricelist)+'</b></span></div>'
				$('#list').append(result)
				}

			}
		});
	}

	function topProduct(key){
		// $('#top').empty();
		$.ajax({
			url: api_base_url+'/product/topsearch?keyword='+key,
			success: function(data) {
				$('#top').empty();
				$('#loading').hide()
				if(data.length==0 || data.length==''){$('#title_top').hide();}else{$('#title_top').show();}
				for (var i = 0; i < data.length; i++) {
				var result = '<div class="img-con" onclick="showData(\''+data[i].product_id+'\',\''+data[i].alias+'\');"><img class="img-src" src="'+data[i].image_thumbnail+'">'+'<span class="searh-name">'+data[i].product_name+'</span></div>'
				$('#top').append(result)
				}
			}
		});
	}

	function searchProductCat(cat,key){
		// $('#list').empty();
		$.ajax({
			url: api_base_url+'/product/productlist/'+cat+'/'+key,
		//	url: api_base_url+'/product/productlist/'+key,
			// url: 'https://api.myacico.co.id/myacico-service/product/productlist/'+key,
			success: function(data) {
				// console.log(data);
				$('#list').empty();
				$('#loading2').hide()
				if(data.length==0 || data.length==''){$('#title_list').hide();}else{$('#title_list').show();}
				for (var i = 0; i < data.length; i++) {
					var result = '<div class="img-con" onclick="showData(\''+data[i].m_product_id+'\',\''+data[i].alias+'\');"><img class="img-src" src="'+data[i].imageurl+'">'+'<span class="searh-name">'+data[i].name+'</span><span style="float:right"><b>'+money(data[i].pricelist)+'</b></span></div>'
					$('#list').append(result)
				}

			}
		});
	}

	// function showData(name,id,alias)
	function showData(id,alias)
	{
		var url = base_url+'product/detail/'+id+'/'+alias;
		window.location.href = url;
	}

	function money(x){
		return 'Rp. '+(x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."));
	}
	</script>

	  <script type="text/javascript">
	  	// $('body').click(function() {
	  	// 	 $('.show_result').hide();
			// 	 $('.ps').hide();
 			// 	 $('.sr').hide();
	  	// });







  	// $('.show_result').on('mouseout',function(){
  	// 	$('.show_result').hide();
  	// });

		// function topSearching(){
		// 	 var productSrc = $('.productSrc');
		// 	 $(".productSrc").show();
    //
    //
		// 	productSrc.html('');
		// 	$.ajax({
		// 		url: api_base_url+'/product/topsearch?keyword=',
		// 		success: function(data) {
		// 			if(data.length!=0 || data.length!=''){
		// 				productSrc.append("<div style='background:#dddddd; padding:5px; font-weight:bold' class='ps'>Popular Search</div>");}
		// 			data.forEach(function(p){
		// 				if(p.image_thumbnail){
		// 					var img = p.image_thumbnail;
		// 				}else{
		// 					var img = '<?php echo base_url('images/general/noimage.png'); ?>';
		// 				}
    //
		// 				productSrc.append(
		// 					"<div class=\"show_result\" onclick=\"showData('"+p.product_name+"','"+p.product_id+"','"+p.alias+"');\"><div class='row'><div class='col-xs-1'><img src='"+img+"' height='30'></div><div class='col-xs-6'>"+p.product_name+"</div><div class='col-xs-5' style='text-align:right'><span style='padding:4px; background:#fbbd44;'>"+p.product_category+"</span></div></div></div>"
		// 				);
    //
		// 			});
    //
		// 		}
		// 	});
		// }

  	// $(document).ready(function() {
    //
    //
		// 	function debounce(fn, delay) {
		// 	  var timer = null;
		// 	  return function () {
		// 	    var context = this, args = arguments;
		// 	    clearTimeout(timer);
		// 	    timer = setTimeout(function () {
		// 	      fn.apply(context, args);
		// 	    }, delay);
		// 	  };
		// 	}
		// 	$('#searchDesk').on('click',function(e){
		// 		$('.ps').show();
		// 		$('.sr').hide();
		// 		topSearching();
		// 	});
    //
		// 	$('#searchDesk').keypress(debounce(function (event) {
		// 			var cat = $('#search_param').val();
		// 			$(".productSrc").show();
    //
		// 			var search_value = $(this).val();
		// 			var datas		 = 'search='+search_value;
		// 			var productSrc = $('.productSrc');
    //
		// 			if(search_value==''){
		// 				topSearching();
		// 			}else{
    //
		// 			if ( search_value == '' ) {$(".productSrc").hide();}
    //
		// 			if(cat=='all'){
		// 				productSrc.html('');
		// 				$.ajax({
		// 					url: api_base_url+'/product/topsearch?keyword='+search_value,
		// 					//data: datas,
		// 				//
		// 					success: function(data) {
		// 						$('#ps').show();
		// 						if(data.length!=0 || data.length!=''){productSrc.append("<div style='background:#dddddd; padding:5px; font-weight:bold' class='ps'>Popular Search</div>");}
		// 						data.forEach(function(p){
		// 							if(p.image_thumbnail){
		// 								var img = p.image_thumbnail;
		// 							}else{
		// 								var img = '<?php echo base_url('images/general/noimage.png'); ?>';
		// 							}
    //
		// 							productSrc.append(
		// 								"<div class=\"show_result\" onclick=\"showData('"+p.product_name+"','"+p.product_id+"','"+p.alias+"');\"><div class='row'><div class='col-xs-1'><img src='"+img+"' height='30'></div><div class='col-xs-6'>"+p.product_name+"</div><div class='col-xs-5' style='text-align:right'><span style='padding:4px;'>"+p.product_category+"</span></div></div></div>"
		// 							);
    //
		// 						});
		// 						searching();
		// 					}
		// 				});
    //
		// 				function searching(){
		// 					$('#sr').show();
		// 					$.ajax({
		// 						url: api_base_url+'/product/productlist/'+search_value,
		// 						data: datas,
		// 						success: function(data) {
		// 							console.log(data);
		// 							if(data.length!=0 || data.length!=''){productSrc.append("<div style='background:#dddddd; padding:5px; font-weight:bold' class='sr'>Search Result</div>");}
		// 							data.forEach(function(p){
    //
		// 								if(p.imageurl){
		// 									var img = p.imageurl;
		// 								}else{
		// 									var img = '<?php echo base_url('images/general/noimage.png'); ?>';
		// 								}
    //
		// 								productSrc.append(
		// 									"<div class=\"show_result\" onclick=\"showData('"+p.name+"','"+p.m_product_id+"','"+p.alias+"');\"><div class='row'><div class='col-xs-1'><img src='"+img+"' height='50'></div><div class='col-xs-6'>"+p.name+"<br> <span style='padding:5px;'>"+p.category+"</span></div><div class='col-xs-5' style='text-align:right'><font size='3'><b>"+money(p.pricelist)+"</b></font></div></div></div>"
		// 								);
    //
		// 							});
    //
		// 						}
		// 					});
		// 				}
    //
		// 			}else{
    //
		// 				productSrc.html('');
    //
		// 				$.ajax({
		// 					url: api_base_url+'/product/topsearch?keyword='+search_value,
		// 					//data: datas,
		// 				//
		// 					success: function(data) {
		// 						$('#ps').show();
		// 						if(data.length!=0){productSrc.append("<div style='background:#dddddd; padding:5px; font-weight:bold' class='ps'>Popular Search</div>");}
		// 						data.forEach(function(p){
		// 							if(p.image_thumbnail){
		// 								var img = p.image_thumbnail;
		// 							}else{
		// 								var img = '<?php echo base_url('images/general/noimage.png'); ?>';
		// 							}
    //
		// 							productSrc.append(
		// 								"<div class=\"show_result\" onclick=\"showData('"+p.product_name+"','"+p.product_id+"','"+p.alias+"');\"><div class='row'><div class='col-xs-1'><img src='"+img+"' height='30'></div><div class='col-xs-6'>"+p.product_name+"</div><div class='col-xs-5' style='text-align:right'><span style='padding:4px; background:#fbbd44;'>"+p.product_category+"</span></div></div></div>"
		// 							);
    //
		// 						});
		// 						searching2();
		// 					}
		// 				});
    //
		// 				function searching2(){
		// 					$.ajax({
		// 						url: api_base_url+'/product/productlist/'+cat+'/'+search_value,
		// 						data: datas,
		// 						success: function(data) {
		// 							$('#sr').show();
		// 							if(data.length!=0){productSrc.append("<div style='background:#dddddd; padding:5px; font-weight:bold' class='sr'>Search Result</div>");}
    //
		// 								data.forEach(function(p){
		// 									if(p.imageurl){
		// 										var img = p.imageurl;
		// 									}else{
		// 										var img = '<?php echo base_url('images/general/noimage.png'); ?>';
		// 									}
		// 									productSrc.append(
		// 										"<div class=\"show_result\" onclick=\"showData('"+p.name+"','"+p.m_product_id+"','"+p.alias+"');\"><div class='row'><div class='col-xs-1'><img src='"+img+"' height='50'></div><div class='col-xs-6'>"+p.name+"<br> <span style='padding:5px; background:#fbbd44;'>"+p.category+"</span></div><div class='col-xs-5' style='text-align:right'><font size='3'><b>"+money(p.pricelist)+"</b></font></div></div></div>"
		// 									);
    //
		// 								});
		// 							//$("#result").html(data).show();
		// 						}
		// 					});
    //
		// 			}
		// 		}
		// 			return false;
		// 		}
		// 	}, 250));
    //
  	// });




  </script>

  <script>
  //Buat ngecek jumlah keranjang
  /*
  $(document).ready(function() {

  	totalCart();

  });*/

  function totalCart(){
  	// var token = document.cookie.split('x-auth=')[1].split(';').shift();
  	var qty = 0;

  	if(window.token){

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
	app.controller('home1', function($scope, $http, $rootScope) {
			$scope.home = 'test'
			var regData = {
					url : 'https://api.myacico.co.id/myacico-service/home/topproductcategory',
					method : 'GET',
					headers: {'token' : '5402854820542'}
			}
			$scope.load = 'true'
			$http(regData).then(function(res) {
			//$http.get('http://api.myacico.co.id/myacico-service/category/list')
			//.then(function(res){
					console.log('test3',res)
					$scope.list = res.data
					$rootScope.testGlobal = 'textnya'
					// $scope.list[0].name = 'YOsi'
					//scope.harga = '34934100000'
					$scope.input.data = 'lalalalala'
					$scope.load = 'false'
			})
			$scope.tombol = function(i){
					console.log(i)
					$scope.cedua = i
			}
			$scope.tombol2 = function(){
					console.log($scope.input.data)
					$scope.list[0].name = $scope.input.data
					window.alerter()

			}
			$scope.input = {}
			$scope.postData = function(){

					var name = $scope.input.data

					var regData = {
							url : 'https://api.myacico.co.id/myacico-service/category/list',
							method : 'POST',
							data : {
									name : name
							},
							headers: {'token' : '5402854820542'}
					}
					console.log(regData)
					$http(regData).then(function(res) {
					//$http.get('http://api.myacico.co.id/myacico-service/category/list')
					//.then(function(res){
							console.log(res)
					})
			}

	})
	app.controller('home', function($scope, $http, $rootScope) {
			$scope.home = 'test'
			var regData = {
					url : 'http://api.myacico.co.id/myacico-service/category/list',
					method : 'GET',
					headers: {'token' : '5402854820542'}
			}
			$scope.load = 'true'
			$http(regData).then(function(res) {
			//$http.get('http://api.myacico.co.id/myacico-service/category/list')
			//.then(function(res){
					console.log(res)
					$scope.list = res.data
					$rootScope.testGlobal = 'textnya'
					// $scope.list[0].name = 'YOsi'
					//scope.harga = '34934100000'
					$scope.input.data = 'lalalalala'
					$scope.load = 'false'
			})
			$scope.tombol = function(i){
					console.log(i)
					$scope.cedua = i
			}
			$scope.tombol2 = function(){
					console.log($scope.input.data)
					$scope.list[0].name = $scope.input.data
					window.alerter()

			}
			$scope.input = {}
			$scope.postData = function(){

					var name = $scope.input.data

					var regData = {
							url : 'https://api.myacico.co.id/myacico-service/category/list',
							method : 'POST',
							data : {
									name : name
							},
							headers: {'token' : '5402854820542'}
					}
					console.log(regData)
					$http(regData).then(function(res) {
					//$http.get('http://api.myacico.co.id/myacico-service/category/list')
					//.then(function(res){
							console.log(res)
					})
			}

	})
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
				if(chat.soc){
					chat.soc.disconnect();
					localStorage.chat_status = 'offline';
				}
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

		// var cookie = document.cookie.split('x-auth=');
		if(window.token){

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

		// var cookie = document.cookie.split('x-auth=');
		if(window.token){

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

		// var token = document.cookie.split('x-auth=')[1].split(';').shift();
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


  </script>

  <!-- e header -->

<!-- header pak budi -->
<script type="text/javascript"> (function(a,b){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))window.location=b})(navigator.userAgent||navigator.vendor||window.opera,'https://m.myacico.co.id'); </script>

<!-- akhir dari header pak budi -->
