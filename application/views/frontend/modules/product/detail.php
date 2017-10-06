	<style>
	th, td {
    padding: 15px;
		font-size: 20px;
    text-align: left;
}
	</style>

<script type="text/javascript" src="<?php echo base_url('assets/productpopup/dist/xzoom.min.js');?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/productpopup/css/xzoom.css');?>" media="all" />
<link type="text/css" rel="stylesheet" media="all" href="<?php echo base_url('assets/productpopup/magnific-popup/css/magnific-popup.css');?>" />
<script type="text/javascript" src="<?php echo base_url('assets/productpopup/magnific-popup/js/magnific-popup.js');?>"></script>

<div class='my-detail-product' ng-controller="detailCnt">
	<div class="row line-detail-product">
		<div class="col-sm-12">
			<a href="<?php echo base_url('/');?>">home</a>
			<a href="#{{cat.categoryId}}" ng-repeat="cat in dat.categoryBrdc">{{cat.categoryName}}</a>
			<b>{{dat.name}}</b>
		</div>
	</div>
	<!-- aaa -->

	<div class="row">
	  <div class="col-sm-4">

		<div class="row">
		  <div class="col-sm-5">
			<div class="xzoom-container">
			  <img class="xzoom" id="xzoom-magnific" width=400 src="{{dat.imageurl[0]}}" xoriginal="{{dat.imageurl[0]}}" />
			  <div class="xzoom-thumbs">
				<a ng-repeat="url in dat.imageurl" ng-href="{{url}}" on-finish-render="ngRepeatFinished">
					<img class="xzoom-gallery" width="80" src="{{url}}" xpreview="{{url}}" title="">
				</a>
				<!--a href="<?php //echo base_url('images/gallery/original/02_o_car.jpg');?>">
					<img class="xzoom-gallery" width="80" src="<?php //echo base_url('images/gallery/preview/02_o_car.jpg');?>" title="The description goes here">
				</a-->
				<!--a href="<?php //echo base_url('images/gallery/original/03_r_car.jpg');?>"><img class="xzoom-gallery5" width="80" src="<?php //echo base_url('images/gallery/preview/03_r_car.jpg');?>" title="The description goes here"></a>
				<a href="<?php //echo base_url('images/gallery/original/04_g_car.jpg');?>"><img class="xzoom-gallery5" width="80" src="<?php //echo base_url('images/gallery/preview/04_g_car.jpg');?>" title="The description goes here"></a-->
			  </div>
			</div>
		  </div>
		  <div class="col-sm-7"></div>
		</div>
	  </div>
	  <div class="col-sm-5 detail-product">
		<h5 class='title-product'>{{dat.name}}</h5>
		<div class="row">
			<div class="col-sm-6">
			weight <span class='red-tx'>{{dat.weight}}</span><br>
			{{dat.m_product_id}}<br>
			<span class='price'>{{toMoney(dat.pricelist)}}</span><br>
			<br><br>
			Save Rp 100,000 ({{dat.discount}}%)
			</div>
			<div class="col-sm-6">Stock: {{dat.stock}}</div>
		</div>


	  </div>
	  <div class="col-sm-3" style='font-size:20px; text-align: center;'>
		Bagikan <i class="fa fa-facebook" aria-hidden="true"></i> <i class="fa fa-twitter" aria-hidden="true"></i> <i class="fa fa-envelope-o" aria-hidden="true"></i> <i class="fa fa-pinterest" aria-hidden="true"></i>
		<div class='detail-add-wishlist'>
			<div class="btn-group">Quantity: <input type='text' class='form-control' style='width:50px' ng-model="quantity" ng-change="check_quantity()"></div><br>
			<div class="btnaddcart">
				<button class="dropbtnaddcar" ng-click="add_to_cart()">ADD TO CART</button>
			</div>

			<br><br>
			<?php echo anchor('product/wishlist/'.$pro_id,'<i class="fa fa-plus-square" aria-hidden="true"></i> Add To Wishlist', array('class'=>'btn btn-link'));?>
		</div>

	  </div>
	</div>


	<ul class="nav nav-tabs" style='font-size:17px; margin-bottom:20px;'>
	  <li class="active"><a data-toggle="tab" href="#home">Rincian Barang</a></li>
	  <li><a data-toggle="tab" href="#menu1">Deskripsi</a></li>
	</ul>

	<div class="tab-content">
	  <div id="home" class="tab-pane fade in active">
		<h3>HOME</h3>
		<table class="table">
			<tr>
				<th> Brand </th>
				<td> {{dat.name}} </td>

			</tr>
			<tr>
				<th> Berat </th>
				<td> {{dat.weight}} </td>
			</tr>
			<tr>
				<th> Category </th>
				<td> {{dat.category}}</td>
			</tr>
			<tr>
				<th>  Harga </th>
				<td> {{toMoney(dat.pricelist)}}</td>
			</tr>
		</table>
{{data}}
	  </div>
	  <div id="menu1" class="tab-pane fade">
		<h3>Menu 1</h3>
		<p>Some content in menu 1.</p>
	  </div>
	</div>

</div>

<script>
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
});
</script>
