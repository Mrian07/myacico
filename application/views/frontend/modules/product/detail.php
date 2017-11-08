	<style>
	th, td {
    padding: 15px;
		font-size: 20px;
    text-align: left;
		font-family: 'Montserrat', sans-serif;
}
#hearts { font-size: 140px; color: #F4044F;}
#hearts-existing { color: #87bad7;}
	</style>
        <!--Star-->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

<script type="text/javascript" src="<?php echo base_url('assets/productpopup/dist/xzoom.min.js');?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/productpopup/css/xzoom.css');?>" media="all" />
<link type="text/css" rel="stylesheet" media="all" href="<?php echo base_url('assets/productpopup/magnific-popup/css/magnific-popup.css');?>" />
<script type="text/javascript" src="<?php echo base_url('assets/productpopup/magnific-popup/js/magnific-popup.js');?>"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<div class="container">
	<div class='my-bg-title'>
			<i class="fa fa-angle-right" aria-hidden="true"></i> DETAIL PRODUCT
	</div>
</div>





<div class="container" style='background:#ffffff'>



<div class='my-detail-product' ng-controller="detailCnt">

	<!-- aaa -->


	<div class="row">

	  <div class="col-sm-5">


					<div class="xzoom-container">
					  <img class="xzoom" id="xzoom-magnific" width=400 src="<?php echo $img; ?>" xoriginal="<?php echo $img; ?>" />
					  <div class="xzoom-thumbs">
						<!--<a ng-repeat="url in dat.imageurl" ng-href="{{url}}" on-finish-render="ngRepeatFinished">
							<img class="xzoom-gallery" width="80" src="{{url}}" xpreview="{{url}}" title="">
						</a>-->
						 <a href="<?php echo $img;?>">
							<img class="xzoom-gallery" width="80" src="<?php echo $img;?>"  xpreview="<?php echo $img;?>" title="">
						</a>
						<?php if($img1){?>
						<a href="<?php echo $img1;?>">
							<img class="xzoom-gallery" width="80" src="<?php echo $img1;?>" title="">
						</a>
						<?php } ?>
						<?php if($img2){?>
						<a href="<?php echo $img2;?>">
							<img class="xzoom-gallery" width="80" src="<?php echo $img2;?>" title="">
						</a>
						<?php } ?>
						<?php if($img3){?>
						<a href="<?php echo $img3;?>">
							<img class="xzoom-gallery" width="80" src="<?php echo $img3;?>" title="">
						</a>
						<?php } ?>
						<!--a href="<?php //echo base_url('images/gallery/original/03_r_car.jpg');?>"><img class="xzoom-gallery5" width="80" src="<?php //echo base_url('images/gallery/preview/03_r_car.jpg');?>" title="The description goes here"></a>
						<a href="<?php //echo base_url('images/gallery/original/04_g_car.jpg');?>"><img class="xzoom-gallery5" width="80" src="<?php //echo base_url('images/gallery/preview/04_g_car.jpg');?>" title="The description goes here"></a-->
					  </div>

					</div>



	  </div>
	  <div class="col-sm-7 detail-product">
			<div class="col-sm-6" style="background-color:white;">
				<h4 class='title-product'><?php echo $name; ?></h4>

				<p style="color:red"><?php echo $sku; ?></p>
					<span class='price'><b>Rp.<?php echo money($pricelist);  ?></b></span><br>
					<span style="color: green; font-weight:bold">Stock: Tersedia</span>

					<br><br>
					<center>
					Bagikan <i class="fa fa-facebook" aria-hidden="true"></i> <i class="fa fa-twitter" aria-hidden="true"></i> <i class="fa fa-envelope-o" aria-hidden="true"></i> <i class="fa fa-pinterest" aria-hidden="true"></i>

					<div class='detail-add-wishlist'>
						<input type='number' class='form-control' id='jmlItem' style='width:70px' value='1' min='1'><br><br>
						<!-- <div class="btnaddcart">
							<button class="dropbtnaddcar" onClick="addToCart('<?php echo$m_product_id;?>','<?php echo$pricelist;?>','<?php echo$img;?>','<?php echo$name;?>','<?php echo$stock;?>','<?php echo$weight;?>')">ADD TO CART</button>
						</div> -->


						<!-- <a href='#' onClick="addWishlist('<?php echo$m_product_id;?>','<?php echo$name;?>','<?php echo$img;?>')" class='btn btn-link'> <i class="color-wishlist fa fa-heart" style="color:#FE4365;" aria-hidden="true"></i> Add To Wishlist</a> -->
							<div class="btn-group">

								<button type="button" class="btn btn-danger"  onClick="addToCart('<?php echo$m_product_id;?>','<?php echo$pricelist;?>','<?php echo$img;?>','<?php echo$name;?>','<?php echo$stock;?>','<?php echo$weight;?>')"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</button>
								<?php
											if($isWishList =='Y')
											{
									?>
									 <button type="button" class="btn btn-success" onClick="addWishlist('<?php echo$m_product_id;?>','<?php echo$name;?>','<?php echo$img;?>')"><i class="fa fa-heart" style="color:#dffd54;" aria-hidden="true"></i> Wishlist</button>
								<?php }else{
							 ?>
									 <button type="button" class="btn btn-success" onClick="addWishlist('<?php echo$m_product_id;?>','<?php echo$name;?>','<?php echo$img;?>')"><i class="fa fa-heart" aria-hidden="true"></i> Wishlist</button>

								<?php }
								?>
							</div>
						</div>
					</center>


			</div>
			<div class="col-sm-6" style="background-color:white;">
				<h4>Rating breakdown</h4>
				<center><div id="rateYo"></div></center>
								<div class="pull-left">
									<div class="pull-left" style="width:35px; line-height:1;">
										<div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"></span></div>
									</div>
									<div class="pull-left" style="width:180px;">
										<div class="progress" style="height:9px; margin:8px 0;">
										  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: 1000%">
											<span class="sr-only">80% Complete (danger)</span>
										  </div>
										</div>
									</div>
									<div class="pull-right" style="margin-left:10px;"><?php echo$rating['star5'];?></div>
								</div>
								<div class="pull-left">
									<div class="pull-left" style="width:35px; line-height:1;">
										<div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"></span></div>
									</div>
									<div class="pull-left" style="width:180px;">
										<div class="progress" style="height:9px; margin:8px 0;">
										  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: 100%">
											<span class="sr-only">80% Complete (danger)</span>
										  </div>
										</div>
									</div>
									<div class="pull-right" style="margin-left:10px;"><?php echo$rating['star4'];?></div>
								</div>
								<div class="pull-left">
									<div class="pull-left" style="width:35px; line-height:1;">
										<div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"></span></div>
									</div>
									<div class="pull-left" style="width:180px;">
										<div class="progress" style="height:9px; margin:8px 0;">
										  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: 100%">
											<span class="sr-only">80% Complete (danger)</span>
										  </div>
										</div>
									</div>
									<div class="pull-right" style="margin-left:10px;"><?php echo$rating['star3'];?></div>
								</div>
								<div class="pull-left">
									<div class="pull-left" style="width:35px; line-height:1;">
										<div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"></span></div>
									</div>
									<div class="pull-left" style="width:180px;">
										<div class="progress" style="height:9px; margin:8px 0;">
										  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: 100%">
											<span class="sr-only">80% Complete (danger)</span>
										  </div>
										</div>
									</div>
									<div class="pull-right" style="margin-left:10px;"><?php echo$rating['star2'];?></div>
								</div>
								<div class="pull-left">
									<div class="pull-left" style="width:35px; line-height:1;">
										<div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"></span></div>
									</div>
									<div class="pull-left" style="width:180px;">
										<div class="progress" style="height:9px; margin:8px 0;">
										  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: 100%">
											<span class="sr-only">80% Complete (danger)</span>
										  </div>
										</div>
									</div>
									<div class="pull-right" style="margin-left:10px;"><?php echo$rating['star1'];?></div>
								</div>
				</div>






			</div>

			</div>

			<!-- <b>Berat: <span class='red-tx'><?php echo $weight; ?></span></b><br> -->




			<div class="row lead">


  <script src="jquery.js"></script>
  <script src="jquery.rateyo.js"></script>
<!--			<div class="ratings" style='text-align: center; color:#d98c13;'>
					<span class="glyphicon glyphicon-star"></span>
					<span class="glyphicon glyphicon-star"></span>
					<span class="glyphicon glyphicon-star"></span>
					<span class="glyphicon glyphicon-star"></span>
					<span class="glyphicon glyphicon-star-empty"></span>
			</div>-->

                            <br>

			<!-- <div class="row lead">
			   <center>

				<div id="hearts-existing" class="starrr" data-rating='4'></div>

				You gave a rating of <span id="count-existing">4</span> heart(s)
				</center>

			</div>

	  </div>
	  <div class="col-sm-3" style='font-size:20px; text-align: center;'>
		Bagikan <i class="fa fa-facebook" aria-hidden="true"></i> <i class="fa fa-twitter" aria-hidden="true"></i> <i class="fa fa-envelope-o" aria-hidden="true"></i> <i class="fa fa-pinterest" aria-hidden="true"></i>
		<div class='detail-add-wishlist'>
			<div class="btn-group">Quantity: <input type='number' class='form-control' id='jmlItem' style='width:70px' value='1' min='1'></div><br>
			<div class="btnaddcart">
				<button class="dropbtnaddcar" onClick="addToCart('<?php echo$m_product_id;?>','<?php echo$pricelist;?>','<?php echo$img;?>','<?php echo$name;?>','<?php echo$stock;?>','<?php echo$weight;?>')">ADD TO CART</button>
			</div>

			</div> -->




	  </div>

	</div>




	<ul class="nav nav-tabs" style='font-size:17px; margin-bottom:20px; border-top:0px'>
	  <li class="active"><a data-toggle="tab" href="#home">Rincian Barang</a></li>
	  <li><a data-toggle="tab" href="#menu1">Deskripsi</a></li>
		<li><a data-toggle="tab" href="#menu2">Highlight</a></li>
                <li><a data-toggle="tab" href="#komen">Komen</a></li>
	</ul>

	<div class="tab-content">
	  <div id="home" class="tab-pane fade in active">
		<h3>HOME</h3>
		<table class="table table-striped">
			<tr>
				<th> Brand </th>
				<td> <?php echo $name; ?> </td>


			</tr>
			<tr>
				<th> Berat </th>
				<td> <?php echo $weight; ?> </td>
			</tr>
			<tr>
				<th> Category </th>
				<td> <?php echo $category; ?></td>
			</tr>
			<tr>
				<th>  Harga </th>
				<td> Rp.<?php echo money($pricelist);  ?></td>
			</tr>


			<tr>

				<th> <?php
				if(!empty($specification)){
							echo $specification;

				}else{
				$specification = '';
				}


				 ?>  </th>
				<td><?php
				if(!empty($value)){
							echo $value;

				}else{
				$value = '';
				}


				 ?></td>
			</tr>
			<tr>
				<th> <?php
				if(!empty($attribute)){
							echo $attribute;

				}else{
				$attribute = '';
				}


				 ?>  </th>
				<td>

					<?php
					if(!empty($attribute3)){
								echo $attribute3;

					}else{
					$attribute3 = '';
					}


					 ?>  </th>
					</td>
			</tr>
			<tr>
				<th> <?php

				if(!empty($attribute4)){
							echo $attribute4;

				}else{
				$attribute4 = '';
				}


?>

				 </th>
				<td> <?php
				if(!empty($value1)){
							echo $value1;

				}else{
				$value1 = '';
				}

				 ?>


				</td>
			</tr>
			<tr>
				<th> <?php
				if(!empty($attribute5)){
							echo $attribute5;

				}else{
				$attribute5 = '';
				}


				 ?>  </th>
				<td>
				<?php

								if(!empty($value2)){
											echo $value2;

								}else{
						$value2 = '';
								}
				 ?>
				</td>
			</tr>
			<tr>
				<th><?php

				if(!empty($attribute6)){
							echo $attribute6;

				}else{
		$attribute6 = '';
				}


				 ?>  </th>
				<td><?php

								if(!empty($value3)){
											echo $value3;

								}else{
						$value3 = '';
								}
				 ?></td>
			</tr>
		</table>

	  </div>
	  <div id="menu1" class="tab-pane fade">
		<h3>Description</h3>
		<p><?php echo $description;  ?></p>
	  </div>
          <div id="menu2" class="tab-pane fade">
		<h3>Highlight</h3>
		<p><?php echo $highlight;  ?></p>
	  </div>
             <div id="komen" class="tab-pane fade">
		<h3>komeng</h3>
		<p><?php $ik=0;
								$no=1;
                foreach($komen as $value)
                    {

                        $coment_date=$value['created'];
                        $coment_title=$value['title'];
                        $coment_isi=$value['review'];
                        $coment_rate =$value['star'];
												?>
                        <script>
                        $(function () {
												var no = '<?php echo $no; ?>'
												var rateV = '<?php echo $coment_rate; ?>';
                        $('#rateKoms'+no).rateYo({
	                              // rating: $coment_rate,
																rating: rateV,
	                              readOnly: true
	                        });
	                      });
                        </script>
												<?php
                        $coment_user=$value['user'];
                        echo $coment_title." "."<div id='rateKoms".$no."'></div><br>".$coment_isi."<br> Oleh ".$coment_user."<br>";
												$no++;
                    }


                ?></p>
	  </div>
	</div>

</div>
</div>
</div>
<br><br>
<script type="text/javascript" src="<?php echo base_url('assets/productpopup/js/foundation.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/productpopup/js/setup.js');?>"></script>

<script>
   var rate = "<?php  echo $rate;?>";
   var star_rate = "<?php  echo $ik;?>";
    $(function () {

  $("#rateYo").rateYo({
		  rating: rate,
		  readOnly: true

  });

});


// Starrr plugin (https://github.com/dobtco/starrr)
var __slice = [].slice;

(function($, window) {
  var Starrr;

  Starrr = (function() {
    Starrr.prototype.defaults = {
      rating: void 0,
      numStars: 5,
      change: function(e, value) {}
    };

    function Starrr($el, options) {
      var i, _, _ref,
        _this = this;

      this.options = $.extend({}, this.defaults, options);
      this.$el = $el;
      _ref = this.defaults;
      for (i in _ref) {
        _ = _ref[i];
        if (this.$el.data(i) != null) {
          this.options[i] = this.$el.data(i);
        }
      }
      this.createStars();
      this.syncRating();
      this.$el.on('mouseover.starrr', 'span', function(e) {
        return _this.syncRating(_this.$el.find('span').index(e.currentTarget) + 1);
      });
      this.$el.on('mouseout.starrr', function() {
        return _this.syncRating();
      });
      this.$el.on('click.starrr', 'span', function(e) {
        return _this.setRating(_this.$el.find('span').index(e.currentTarget) + 1);
      });
      this.$el.on('starrr:change', this.options.change);
    }

    Starrr.prototype.createStars = function() {
      var _i, _ref, _results;

      _results = [];
      for (_i = 1, _ref = this.options.numStars; 1 <= _ref ? _i <= _ref : _i >= _ref; 1 <= _ref ? _i++ : _i--) {
        _results.push(this.$el.append("<span class='glyphicon .glyphicon-star-empty'></span>"));
      }
      return _results;
    };

    Starrr.prototype.setRating = function(rating) {
      if (this.options.rating === rating) {
        rating = void 0;
      }
      this.options.rating = rating;
      this.syncRating();
      return this.$el.trigger('starrr:change', rating);
    };

    Starrr.prototype.syncRating = function(rating) {
      var i, _i, _j, _ref;

      rating || (rating = this.options.rating);
      if (rating) {
        for (i = _i = 0, _ref = rating - 1; 0 <= _ref ? _i <= _ref : _i >= _ref; i = 0 <= _ref ? ++_i : --_i) {
          this.$el.find('span').eq(i).removeClass('glyphicon-star-empty').addClass('glyphicon-star');

        }
      }
      if (rating && rating < 5) {
        for (i = _j = rating; rating <= 4 ? _j <= 4 : _j >= 4; i = rating <= 4 ? ++_j : --_j) {
          this.$el.find('span').eq(i).removeClass('glyphicon-star').addClass('glyphicon-star-empty');
        }
      }
      if (!rating) {
        return this.$el.find('span').removeClass('glyphicon-star').addClass('glyphicon-star-empty');
      }
    };

    return Starrr;

  })();
  return $.fn.extend({
    starrr: function() {
      var args, option;

      option = arguments[0], args = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
      return this.each(function() {
        var data;

        data = $(this).data('star-rating');
        if (!data) {
          $(this).data('star-rating', (data = new Starrr($(this), option)));
        }
        if (typeof option === 'string') {
          return data[option].apply(data, args);
        }
      });
    }
  });
})(window.jQuery, window);

$(function() {
  return $(".starrr").starrr();
});

$( document ).ready(function() {

  $('#hearts').on('starrr:change', function(e, value){
    $('#count').html(value);
  });

  $('#hearts-existing').on('starrr:change', function(e, value){
    $('#count-existing').html(value);
  });
});
var token = document.cookie.split('x-auth=')[1].split(';').shift();
console.log('token',token)
function addWishlist(id,name,imageurl){
	var dataString = 'id='+ id;

	if(token){
	$.ajax
		({
		type: "POST",
                headers:{"token":token},
		url: "<?php echo site_url('product/addWishlist'); ?>",

		data: dataString,
		success:function(data){


				if(data==1){

					$.confirm({
						title: name,
						content: '<img src="'+imageurl+'" style="margin-bottom:10px">'+'<p>Item berhasil ditambahkan kedalam wishlist<p>',
						autoClose: 'close|3000',
						buttons: {
							close: function () {
								//$.alert('action is canceled');
							}
						},
						closeIcon: true,
						closeIconClass: 'fa fa-close'
					});
				}else{
					$.dialog({
						title: name,
						content: 'Item gagal ditambahkan!',
						autoClose: 'close|3000',
						buttons: {
							close: function () {
								//$.alert('action is canceled');
							}
						},
						closeIcon: true,
						closeIconClass: 'fa fa-close'
					});
				}
			}
		});

	}else{
$.ajax({
                type: "POST",
		url: "<?php echo site_url('customer/signin'); ?>",
		data: dataString,
                success:function(data){
                    console.log('oooo',data);

                 window.location.replace(base_url+"customer/signin/"+id);
                }

        });
	}
}

function addToCart(m_product_id,pricelist,imageurl,name,stock,weight){

	var jmlItem = $('#jmlItem').val();
	var dataString = 'm_product_id='+ m_product_id+'&pricelist='+ pricelist+'&imageurl='+ imageurl+'&name='+ name+'&stock='+stock+'&jmlItem='+jmlItem+'&weight='+weight;
// dsasdadas
	if(jmlItem<=0){
		$.dialog({
			title: 'Alert!',
			content: 'Silakan masukan jumlah item dengan benar',
			autoClose: 'close|3000',
			buttons: {
				close: function () {
					//$.alert('action is canceled');
				}
			},
			closeIcon: true,
			closeIconClass: 'fa fa-close'
		});

	}else{


		var cookie = document.cookie.split('x-auth=');
		if(cookie.length > 1){
			var token = cookie[1].split(';').shift();

			var apiurl = api_base_url +'/order/cart/additem';
			var m_product_id = m_product_id;
			var qty = jmlItem;
			var pricelist = pricelist;
			var weight = weight;

			var success = function(r){

				$.confirm({
					title: name,
					content: '<img src="'+imageurl+'" style="margin-bottom:10px">'+'<p>'+jmlItem+' Item berhasil ditambahkan<p>',
					autoClose: 'close|3000',
					buttons: {
						close: function () {
							//$.alert('action is canceled');
						}
					},
					closeIcon: true,
					closeIconClass: 'fa fa-close'
				});

				//Buat update cart, fungsi ini ada di file header.php
				totalCart();
			};

			$.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify(
				{
					"productId":m_product_id,
					"qty":qty,
					"price":pricelist,
					"weightPerItem":weight
				}
			) , url: apiurl, headers: {"token":token}, success: success, error: error });

			var error = function(er){
			  console.log('OK:', er);
			  $.alert({
				title: 'Alert!',
				content: 'koneksi tidak berhasil, silahkan coba lagi!',
			  });
			};


		}else{


			$.ajax
			({
			type: "POST",
			url: "<?php echo site_url('cart/addToCart'); ?>",
			data: dataString,
			success:function(data){

					if(data=='stockkosong'){
						$.dialog({
							title: name,
							content: 'Item gagal ditambahkan, jumlah melebihi stock yang ada!',
							autoClose: 'close|3000',
							buttons: {
								close: function () {
									//$.alert('action is canceled');
								}
							},
							closeIcon: true,
							closeIconClass: 'fa fa-close'
						});
					}else
					if(data!='gagal'){

						$(".totalCart").html(data);
						$.confirm({
							title: name,
							content: '<img src="'+imageurl+'" style="margin-bottom:10px">'+'<p>'+jmlItem+' Item berhasil ditambahkan kedalam keranjang<p>',
							autoClose: 'close|3000',
							buttons: {
								close: function () {
									//$.alert('action is canceled');
								}
							},
							closeIcon: true,
							closeIconClass: 'fa fa-close'
						});
					}else{
						$.dialog({
							title: name,
							content: 'Item gagal ditambahkan!',
							autoClose: 'close|3000',
							buttons: {
								close: function () {
									//$.alert('action is canceled');
								}
							},
							closeIcon: true,
							closeIconClass: 'fa fa-close'
						});
					}
				}
			});
		}
	}
}


/*
app.directive('onFinishRender', function ($timeout) {
    return {
        restrict: 'A',
        link: function (scope, element, attr) {
            if (scope.$last === true) {
                $timeout(function () {
                    scope.$emit(attr.onFinishRender);
                });
            }
        }
    }
});


app.controller('detailCnt', function($scope, $http, $mycart, toMoney){

	$scope.quantity = 1;
	$scope.toMoney = toMoney;
	$scope.add_to_cart = function(){
		console.log('cur cart:', $mycart.data);
		var cart = {
			m_product_id:$scope.dat.m_product_id,
			name:$scope.dat.name,
			image_url:$scope.dat.imageurl[0],
			price:$scope.dat.pricelist,
			quantity:$scope.quantity
		}
		$mycart.data.push(cart);
		document.cookie = 'cart='+JSON.stringify($mycart.data)+'; path='+base_path;
		console.log('total cart:', $mycart.data);
	}
	$scope.check_quantity = function(){
		if(isNaN($scope.quantity))$scope.quantity=1;
	}
	$scope.get = function(){
		$http.get(api_base_url+"/product/productlist/detail?id=<?php echo $pro_id; ?>")
		.then(function(data, status, headers, config) {
			$scope.data = JSON.stringify(data);
			$scope.dat = data.data;
		}, function(e){
			console.log('error:',e);
		});
	}
	$scope.get();
	$scope.$on('ngRepeatFinished', function(ngRepeatFinishedEvent) {
	    $('.xzoom, .xzoom-gallery').xzoom({zoomWidth: 400, title: true, tint: '#333', Xoffset: 15});

	    //Integration with hammer.js
	    var isTouchSupported = 'ontouchstart' in window;

	    if (isTouchSupported) {
	        //If touch device
	        $('.xzoom').each(function(){
	            var xzoom = $(this).data('xzoom');
	            xzoom.eventunbind();
	        });

	        $('.xzoom').each(function() {
	            var xzoom = $(this).data('xzoom');
	            $(this).hammer().on("tap", function(event) {
	                event.pageX = event.gesture.center.pageX;
	                event.pageY = event.gesture.center.pageY;
	                var s = 1, ls;

	                xzoom.eventmove = function(element) {
	                    element.hammer().on('drag', function(event) {
	                        event.pageX = event.gesture.center.pageX;
	                        event.pageY = event.gesture.center.pageY;
	                        xzoom.movezoom(event);
	                        event.gesture.preventDefault();
	                    });
	                }

	                xzoom.eventleave = function(element) {
	                    element.hammer().on('tap', function(event) {
	                        xzoom.closezoom();
	                    });
	                }
	                xzoom.openzoom(event);
	            });
	        });

	    } else {
	        //If not touch device

	        //Integration with magnific popup plugin
	        $('#xzoom-magnific').bind('click', function(event) {
	            var xzoom = $(this).data('xzoom');
	            xzoom.closezoom();
	            var gallery = xzoom.gallery().cgallery;
	            var i, images = new Array();
	            for (i in gallery) {
	                images[i] = {src: gallery[i]};
	            }
	            $.magnificPopup.open({items: images, type:'image', gallery: {enabled: true}});
	            event.preventDefault();
	        });
	    }
	});
});*/
</script>
