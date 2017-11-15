
<style>
	.thumbnail:hover{
		box-shadow: 0px 0px 10px #ffffff;
		color:#111111;
	}

	.thumbnail{
		opacity:0.70;
		-webkit-transition: all 0.5s;
		transition: all 0.5s;
		text-align:center;
		color:#4d4d4d;
		font-size: 20px;
	}
	.thumbnail a{
		color:#111111;
		text-decoration: none;
	}

	.thumbnail a:hover{
		opacity:1.00;
		/*box-shadow: 0px 0px 10px #4bc6ff;*/
		color:#4d4d4d;
		text-decoration:none;
	}
	/*.line{
		margin-bottom: 5px;
	}
	@media screen and (max-width: 770px) {
		.right{
			float:left;
			width: 100%;
		}
	}*/

	span.thumbnail {
        border: 1px solid #b2b2b2 !important;
    border-radius: 0px !important;
    -webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.16);
    -moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.16);
    box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.16);
	padding: 10px;
}


/*.container h4{margin-top:20px; margin-bottom:30px;}*/

.right {
    float: right;
    border-bottom: 2px solid #0a5971;
}
.btn-info {
    color: #fff;
    background-color: #19b4e2;
    border-color: #19b4e2;
	font-size:13px;
	font-weight:600;
}

</style>
<!-- Owl Carousel Assets slide image collection -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/owl-carousel/owl.carousel.css');?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/owl-carousel/owl.theme.css');?>" />

<div class="my-container">
	<div class='my-bg-title'>
		<i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo strtoupper($hasil['subName']); ?>
	</div>
</div>


<div class="my-container">
	<div class="row">
		<?php
		foreach($hasil['subValue'] as $key => $data){
			?>

			<div class="col-md-3 col-sm-6 box-thum">
				<span class='thumbnail'>
				<a href="<?php echo base_url('product/listItem/'.$data['categoryId'].'/'.$data['alias']);?>"><img src="<?php echo $data['imageurl']; ?>" alt="..."><?php echo $data['name']; ?></a>
				</span>
			</div>
		<?php } ?>
	</div>
	<!-- END PRODUCTS -->





<div ng-if="<?php echo $cat_id == 1000483; ?>">


	  <div style='padding:15px; font-family:tahoma; font-size:20px; border-top: 3px solid #c40202; color:#535151; margin-top:50px; margin-bottom:20px;'>
	    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> REKOMENDASI KAMI
	  </div>
	  <div style='float:left;width:604px; margin-right:5px'>
	    <img src='<?php echo base_url('images/demo/banner-b1.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='float:left;width:262px; margin-right:5px'>
	    <img src='<?php echo base_url('images/demo/banner-b2.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='float:left;width:262px'>
	    <img src='<?php echo base_url('images/demo/banner-b3.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='clear:both'></div>

	  <div class="span12" style='background:#fdf5e7; padding:10px; margin-top:10px'>

	    <div class="promo-front owl-carousel">

	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[0].product_id}}/{{test.topProduct[0].alias}}'>
	                              <img src="{{test.topProduct[0].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[0].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[0].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[1].product_id}}/{{test.topProduct[1].alias}}'>
	                              <img src="{{test.topProduct[1].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[1].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[1].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[2].product_id}}/{{test.topProduct[2].alias}}'>
	                              <img src="{{test.topProduct[2].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[2].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[2].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[3].product_id}}/{{test.topProduct[3].alias}}'>
	                              <img src="{{test.topProduct[3].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[3].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[3].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[4].product_id}}/{{test.topProduct[4].alias}}'>
	                              <img src="{{test.topProduct[4].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[4].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[4].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[5].product_id}}/{{test.topProduct[5].alias}}'>
	                              <img src="{{test.topProduct[5].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[5].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[5].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <!-- <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'">Loading...</div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <img src="{{test.topProduct[6].imageurl}}" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[6].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'>Rp.</span>{{test.topProduct[6].pricelist}}</h5>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div> -->



	    </div>

	  </div>
</div>
<div ng-if="<?php echo $cat_id == 1000493; ?>">


	  <div style='padding:15px; font-family:tahoma; font-size:20px; border-top: 3px solid #c40202; color:#535151; margin-top:50px; margin-bottom:20px;'>
	    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> REKOMENDASI KAMI
	  </div>
	  <div style='float:left;width:604px; margin-right:5px'>
	    <img src='<?php echo base_url('images/demo/banner-b1.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='float:left;width:262px; margin-right:5px'>
	    <img src='<?php echo base_url('images/demo/banner-b2.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='float:left;width:262px'>
	    <img src='<?php echo base_url('images/demo/banner-b3.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='clear:both'></div>

	  <div class="span12" style='background:#fdf5e7; padding:10px; margin-top:10px'>

	    <div class="promo-front owl-carousel">

	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[0].product_id}}/{{test.topProduct[0].alias}}'>
	                              <img src="{{test.topProduct[0].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[0].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[0].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[1].product_id}}/{{test.topProduct[1].alias}}'>
	                              <img src="{{test.topProduct[1].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[1].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[1].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[2].product_id}}/{{test.topProduct[2].alias}}'>
	                              <img src="{{test.topProduct[2].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[2].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[2].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[3].product_id}}/{{test.topProduct[3].alias}}'>
	                              <img src="{{test.topProduct[3].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[3].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[3].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[4].product_id}}/{{test.topProduct[4].alias}}'>
	                              <img src="{{test.topProduct[4].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[4].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[4].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[5].product_id}}/{{test.topProduct[5].alias}}'>
	                              <img src="{{test.topProduct[5].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[5].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[5].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <!-- <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'">Loading...</div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <img src="{{test.topProduct[6].imageurl}}" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[6].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'>Rp.</span>{{test.topProduct[6].pricelist}}</h5>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div> -->



	    </div>

	  </div>
</div>
<div ng-if="<?php echo $cat_id == 1000494; ?>">


	  <div style='padding:15px; font-family:tahoma; font-size:20px; border-top: 3px solid #c40202; color:#535151; margin-top:50px; margin-bottom:20px;'>
	    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> REKOMENDASI KAMI
	  </div>
	  <div style='float:left;width:604px; margin-right:5px'>
	    <img src='<?php echo base_url('images/demo/banner-b1.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='float:left;width:262px; margin-right:5px'>
	    <img src='<?php echo base_url('images/demo/banner-b2.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='float:left;width:262px'>
	    <img src='<?php echo base_url('images/demo/banner-b3.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='clear:both'></div>

	  <div class="span12" style='background:#fdf5e7; padding:10px; margin-top:10px'>

	    <div class="promo-front owl-carousel">

	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[0].product_id}}/{{test.topProduct[0].alias}}'>
	                              <img src="{{test.topProduct[0].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[0].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[0].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[1].product_id}}/{{test.topProduct[1].alias}}'>
	                              <img src="{{test.topProduct[1].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[1].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[1].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[2].product_id}}/{{test.topProduct[2].alias}}'>
	                              <img src="{{test.topProduct[2].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[2].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[2].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[3].product_id}}/{{test.topProduct[3].alias}}'>
	                              <img src="{{test.topProduct[3].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[3].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[3].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[4].product_id}}/{{test.topProduct[4].alias}}'>
	                              <img src="{{test.topProduct[4].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[4].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[4].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[5].product_id}}/{{test.topProduct[5].alias}}'>
	                              <img src="{{test.topProduct[5].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[5].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[5].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <!-- <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'">Loading...</div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <img src="{{test.topProduct[6].imageurl}}" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[6].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'>Rp.</span>{{test.topProduct[6].pricelist}}</h5>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div> -->



	    </div>

	  </div>
</div>
<div ng-if="<?php echo $cat_id == 1000495; ?>">


	  <div style='padding:15px; font-family:tahoma; font-size:20px; border-top: 3px solid #c40202; color:#535151; margin-top:50px; margin-bottom:20px;'>
	    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> REKOMENDASI KAMI
	  </div>
	  <div style='float:left;width:604px; margin-right:5px'>
	    <img src='<?php echo base_url('images/demo/banner-b1.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='float:left;width:262px; margin-right:5px'>
	    <img src='<?php echo base_url('images/demo/banner-b2.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='float:left;width:262px'>
	    <img src='<?php echo base_url('images/demo/banner-b3.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='clear:both'></div>

	  <div class="span12" style='background:#fdf5e7; padding:10px; margin-top:10px'>

	    <div class="promo-front owl-carousel">

	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[0].product_id}}/{{test.topProduct[0].alias}}'>
	                              <img src="{{test.topProduct[0].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[0].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[0].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[1].product_id}}/{{test.topProduct[1].alias}}'>
	                              <img src="{{test.topProduct[1].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[1].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[1].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[2].product_id}}/{{test.topProduct[2].alias}}'>
	                              <img src="{{test.topProduct[2].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[2].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[2].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[3].product_id}}/{{test.topProduct[3].alias}}'>
	                              <img src="{{test.topProduct[3].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[3].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[3].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[4].product_id}}/{{test.topProduct[4].alias}}'>
	                              <img src="{{test.topProduct[4].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[4].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[4].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[5].product_id}}/{{test.topProduct[5].alias}}'>
	                              <img src="{{test.topProduct[5].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[5].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[5].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <!-- <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'">Loading...</div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <img src="{{test.topProduct[6].imageurl}}" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[6].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'>Rp.</span>{{test.topProduct[6].pricelist}}</h5>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div> -->



	    </div>

	  </div>
</div>
<div ng-if="<?php echo $cat_id == 1000496; ?>">


	  <div style='padding:15px; font-family:tahoma; font-size:20px; border-top: 3px solid #c40202; color:#535151; margin-top:50px; margin-bottom:20px;'>
	    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> REKOMENDASI KAMI
	  </div>
	  <div style='float:left;width:604px; margin-right:5px'>
	    <img src='<?php echo base_url('images/demo/banner-b1.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='float:left;width:262px; margin-right:5px'>
	    <img src='<?php echo base_url('images/demo/banner-b2.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='float:left;width:262px'>
	    <img src='<?php echo base_url('images/demo/banner-b3.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='clear:both'></div>

	  <div class="span12" style='background:#fdf5e7; padding:10px; margin-top:10px'>

	    <div class="promo-front owl-carousel">

	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[0].product_id}}/{{test.topProduct[0].alias}}'>
	                              <img src="{{test.topProduct[0].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[0].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[0].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[1].product_id}}/{{test.topProduct[1].alias}}'>
	                              <img src="{{test.topProduct[1].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[1].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[1].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[2].product_id}}/{{test.topProduct[2].alias}}'>
	                              <img src="{{test.topProduct[2].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[2].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[2].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[3].product_id}}/{{test.topProduct[3].alias}}'>
	                              <img src="{{test.topProduct[3].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[3].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[3].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[4].product_id}}/{{test.topProduct[4].alias}}'>
	                              <img src="{{test.topProduct[4].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[4].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[4].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[5].product_id}}/{{test.topProduct[5].alias}}'>
	                              <img src="{{test.topProduct[5].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[5].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[5].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <!-- <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'">Loading...</div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <img src="{{test.topProduct[6].imageurl}}" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[6].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'>Rp.</span>{{test.topProduct[6].pricelist}}</h5>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div> -->



	    </div>

	  </div>
</div>
<div ng-if="<?php echo $cat_id == 1000485; ?>">


	  <div style='padding:15px; font-family:tahoma; font-size:20px; border-top: 3px solid #c40202; color:#535151; margin-top:50px; margin-bottom:20px;'>
	    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> REKOMENDASI KAMI
	  </div>
	  <div style='float:left;width:604px; margin-right:5px'>
	    <img src='<?php echo base_url('images/demo/banner-b1.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='float:left;width:262px; margin-right:5px'>
	    <img src='<?php echo base_url('images/demo/banner-b2.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='float:left;width:262px'>
	    <img src='<?php echo base_url('images/demo/banner-b3.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='clear:both'></div>

	  <div class="span12" style='background:#fdf5e7; padding:10px; margin-top:10px'>

	    <div class="promo-front owl-carousel">

	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[0].product_id}}/{{test.topProduct[0].alias}}'>
	                              <img src="{{test.topProduct[0].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[0].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[0].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[1].product_id}}/{{test.topProduct[1].alias}}'>
	                              <img src="{{test.topProduct[1].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[1].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[1].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[2].product_id}}/{{test.topProduct[2].alias}}'>
	                              <img src="{{test.topProduct[2].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[2].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[2].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[3].product_id}}/{{test.topProduct[3].alias}}'>
	                              <img src="{{test.topProduct[3].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[3].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[3].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[4].product_id}}/{{test.topProduct[4].alias}}'>
	                              <img src="{{test.topProduct[4].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[4].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[4].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[5].product_id}}/{{test.topProduct[5].alias}}'>
	                              <img src="{{test.topProduct[5].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[5].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[5].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <!-- <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'">Loading...</div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <img src="{{test.topProduct[6].imageurl}}" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[6].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'>Rp.</span>{{test.topProduct[6].pricelist}}</h5>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div> -->



	    </div>

	  </div>
</div>
<div ng-if="<?php echo $cat_id == 1000497; ?>">


	  <div style='padding:15px; font-family:tahoma; font-size:20px; border-top: 3px solid #c40202; color:#535151; margin-top:50px; margin-bottom:20px;'>
	    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> REKOMENDASI KAMI
	  </div>
	  <div style='float:left;width:604px; margin-right:5px'>
	    <img src='<?php echo base_url('images/demo/banner-b1.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='float:left;width:262px; margin-right:5px'>
	    <img src='<?php echo base_url('images/demo/banner-b2.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='float:left;width:262px'>
	    <img src='<?php echo base_url('images/demo/banner-b3.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='clear:both'></div>

	  <div class="span12" style='background:#fdf5e7; padding:10px; margin-top:10px'>

	    <div class="promo-front owl-carousel">

	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[0].product_id}}/{{test.topProduct[0].alias}}'>
	                              <img src="{{test.topProduct[0].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[0].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[0].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[1].product_id}}/{{test.topProduct[1].alias}}'>
	                              <img src="{{test.topProduct[1].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[1].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[1].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[2].product_id}}/{{test.topProduct[2].alias}}'>
	                              <img src="{{test.topProduct[2].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[2].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[2].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[3].product_id}}/{{test.topProduct[3].alias}}'>
	                              <img src="{{test.topProduct[3].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[3].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[3].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[4].product_id}}/{{test.topProduct[4].alias}}'>
	                              <img src="{{test.topProduct[4].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[4].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[4].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[5].product_id}}/{{test.topProduct[5].alias}}'>
	                              <img src="{{test.topProduct[5].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[5].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[5].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <!-- <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'">Loading...</div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <img src="{{test.topProduct[6].imageurl}}" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[6].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'>Rp.</span>{{test.topProduct[6].pricelist}}</h5>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div> -->



	    </div>

	  </div>
</div>
<div ng-if="<?php echo $cat_id == 1000486; ?>">


	  <div style='padding:15px; font-family:tahoma; font-size:20px; border-top: 3px solid #c40202; color:#535151; margin-top:50px; margin-bottom:20px;'>
	    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> REKOMENDASI KAMI
	  </div>
	  <div style='float:left;width:604px; margin-right:5px'>
	    <img src='<?php echo base_url('images/demo/banner-b1.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='float:left;width:262px; margin-right:5px'>
	    <img src='<?php echo base_url('images/demo/banner-b2.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='float:left;width:262px'>
	    <img src='<?php echo base_url('images/demo/banner-b3.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='clear:both'></div>

	  <div class="span12" style='background:#fdf5e7; padding:10px; margin-top:10px'>

	    <div class="promo-front owl-carousel">

	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[0].product_id}}/{{test.topProduct[0].alias}}'>
	                              <img src="{{test.topProduct[0].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[0].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[0].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[1].product_id}}/{{test.topProduct[1].alias}}'>
	                              <img src="{{test.topProduct[1].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[1].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[1].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[2].product_id}}/{{test.topProduct[2].alias}}'>
	                              <img src="{{test.topProduct[2].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[2].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[2].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[3].product_id}}/{{test.topProduct[3].alias}}'>
	                              <img src="{{test.topProduct[3].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[3].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[3].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[4].product_id}}/{{test.topProduct[4].alias}}'>
	                              <img src="{{test.topProduct[4].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[4].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[4].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[5].product_id}}/{{test.topProduct[5].alias}}'>
	                              <img src="{{test.topProduct[5].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[5].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[5].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <!-- <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'">Loading...</div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <img src="{{test.topProduct[6].imageurl}}" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[6].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'>Rp.</span>{{test.topProduct[6].pricelist}}</h5>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div> -->



	    </div>

	  </div>
</div>
<div ng-if="<?php echo $cat_id == 1000498; ?>">


	  <div style='padding:15px; font-family:tahoma; font-size:20px; border-top: 3px solid #c40202; color:#535151; margin-top:50px; margin-bottom:20px;'>
	    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> REKOMENDASI KAMI
	  </div>
	  <div style='float:left;width:604px; margin-right:5px'>
	    <img src='<?php echo base_url('images/demo/banner-b1.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='float:left;width:262px; margin-right:5px'>
	    <img src='<?php echo base_url('images/demo/banner-b2.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='float:left;width:262px'>
	    <img src='<?php echo base_url('images/demo/banner-b3.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='clear:both'></div>

	  <div class="span12" style='background:#fdf5e7; padding:10px; margin-top:10px'>

	    <div class="promo-front owl-carousel">

	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[0].product_id}}/{{test.topProduct[0].alias}}'>
	                              <img src="{{test.topProduct[0].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[0].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[0].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[1].product_id}}/{{test.topProduct[1].alias}}'>
	                              <img src="{{test.topProduct[1].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[1].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[1].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[2].product_id}}/{{test.topProduct[2].alias}}'>
	                              <img src="{{test.topProduct[2].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[2].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[2].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[3].product_id}}/{{test.topProduct[3].alias}}'>
	                              <img src="{{test.topProduct[3].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[3].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[3].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[4].product_id}}/{{test.topProduct[4].alias}}'>
	                              <img src="{{test.topProduct[4].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[4].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[4].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[5].product_id}}/{{test.topProduct[5].alias}}'>
	                              <img src="{{test.topProduct[5].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[5].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[5].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <!-- <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'">Loading...</div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <img src="{{test.topProduct[6].imageurl}}" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[6].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'>Rp.</span>{{test.topProduct[6].pricelist}}</h5>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div> -->



	    </div>

	  </div>
</div>
<div ng-if="<?php echo $cat_id == 1000487; ?>">


	  <div style='padding:15px; font-family:tahoma; font-size:20px; border-top: 3px solid #c40202; color:#535151; margin-top:50px; margin-bottom:20px;'>
	    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> REKOMENDASI KAMI
	  </div>
	  <div style='float:left;width:604px; margin-right:5px'>
	    <img src='<?php echo base_url('images/demo/banner-b1.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='float:left;width:262px; margin-right:5px'>
	    <img src='<?php echo base_url('images/demo/banner-b2.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='float:left;width:262px'>
	    <img src='<?php echo base_url('images/demo/banner-b3.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='clear:both'></div>

	  <div class="span12" style='background:#fdf5e7; padding:10px; margin-top:10px'>

	    <div class="promo-front owl-carousel">

	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[0].product_id}}/{{test.topProduct[0].alias}}'>
	                              <img src="{{test.topProduct[0].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[0].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[0].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[1].product_id}}/{{test.topProduct[1].alias}}'>
	                              <img src="{{test.topProduct[1].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[1].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[1].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[2].product_id}}/{{test.topProduct[2].alias}}'>
	                              <img src="{{test.topProduct[2].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[2].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[2].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[3].product_id}}/{{test.topProduct[3].alias}}'>
	                              <img src="{{test.topProduct[3].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[3].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[3].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[4].product_id}}/{{test.topProduct[4].alias}}'>
	                              <img src="{{test.topProduct[4].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[4].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[4].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[5].product_id}}/{{test.topProduct[5].alias}}'>
	                              <img src="{{test.topProduct[5].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[5].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[5].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <!-- <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'">Loading...</div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <img src="{{test.topProduct[6].imageurl}}" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[6].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'>Rp.</span>{{test.topProduct[6].pricelist}}</h5>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div> -->



	    </div>

	  </div>
</div>
<div ng-if="<?php echo $cat_id == 1000499; ?>">


	  <div style='padding:15px; font-family:tahoma; font-size:20px; border-top: 3px solid #c40202; color:#535151; margin-top:50px; margin-bottom:20px;'>
	    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> REKOMENDASI KAMI
	  </div>
	  <div style='float:left;width:604px; margin-right:5px'>
	    <img src='<?php echo base_url('images/demo/banner-b1.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='float:left;width:262px; margin-right:5px'>
	    <img src='<?php echo base_url('images/demo/banner-b2.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='float:left;width:262px'>
	    <img src='<?php echo base_url('images/demo/banner-b3.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='clear:both'></div>

	  <div class="span12" style='background:#fdf5e7; padding:10px; margin-top:10px'>

	    <div class="promo-front owl-carousel">

	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[0].product_id}}/{{test.topProduct[0].alias}}'>
	                              <img src="{{test.topProduct[0].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[0].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[0].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[1].product_id}}/{{test.topProduct[1].alias}}'>
	                              <img src="{{test.topProduct[1].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[1].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[1].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[2].product_id}}/{{test.topProduct[2].alias}}'>
	                              <img src="{{test.topProduct[2].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[2].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[2].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[3].product_id}}/{{test.topProduct[3].alias}}'>
	                              <img src="{{test.topProduct[3].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[3].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[3].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[4].product_id}}/{{test.topProduct[4].alias}}'>
	                              <img src="{{test.topProduct[4].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[4].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[4].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[5].product_id}}/{{test.topProduct[5].alias}}'>
	                              <img src="{{test.topProduct[5].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[5].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[5].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <!-- <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'">Loading...</div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <img src="{{test.topProduct[6].imageurl}}" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[6].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'>Rp.</span>{{test.topProduct[6].pricelist}}</h5>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div> -->



	    </div>

	  </div>
</div>
<div ng-if="<?php echo $cat_id == 1000488; ?>">


	  <div style='padding:15px; font-family:tahoma; font-size:20px; border-top: 3px solid #c40202; color:#535151; margin-top:50px; margin-bottom:20px;'>
	    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> REKOMENDASI KAMI
	  </div>
	  <div style='float:left;width:604px; margin-right:5px'>
	    <img src='<?php echo base_url('images/demo/banner-b1.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='float:left;width:262px; margin-right:5px'>
	    <img src='<?php echo base_url('images/demo/banner-b2.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='float:left;width:262px'>
	    <img src='<?php echo base_url('images/demo/banner-b3.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='clear:both'></div>

	  <div class="span12" style='background:#fdf5e7; padding:10px; margin-top:10px'>

	    <div class="promo-front owl-carousel">

	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[0].product_id}}/{{test.topProduct[0].alias}}'>
	                              <img src="{{test.topProduct[0].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[0].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[0].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[1].product_id}}/{{test.topProduct[1].alias}}'>
	                              <img src="{{test.topProduct[1].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[1].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[1].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[2].product_id}}/{{test.topProduct[2].alias}}'>
	                              <img src="{{test.topProduct[2].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[2].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[2].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[3].product_id}}/{{test.topProduct[3].alias}}'>
	                              <img src="{{test.topProduct[3].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[3].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[3].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[4].product_id}}/{{test.topProduct[4].alias}}'>
	                              <img src="{{test.topProduct[4].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[4].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[4].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[5].product_id}}/{{test.topProduct[5].alias}}'>
	                              <img src="{{test.topProduct[5].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[5].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[5].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <!-- <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'">Loading...</div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <img src="{{test.topProduct[6].imageurl}}" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[6].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'>Rp.</span>{{test.topProduct[6].pricelist}}</h5>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div> -->



	    </div>

	  </div>
</div>
<div ng-if="<?php echo $cat_id == 1000490; ?>">


	  <div style='padding:15px; font-family:tahoma; font-size:20px; border-top: 3px solid #c40202; color:#535151; margin-top:50px; margin-bottom:20px;'>
	    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> REKOMENDASI KAMI
	  </div>
	  <div style='float:left;width:604px; margin-right:5px'>
	    <img src='<?php echo base_url('images/demo/banner-b1.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='float:left;width:262px; margin-right:5px'>
	    <img src='<?php echo base_url('images/demo/banner-b2.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='float:left;width:262px'>
	    <img src='<?php echo base_url('images/demo/banner-b3.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='clear:both'></div>

	  <div class="span12" style='background:#fdf5e7; padding:10px; margin-top:10px'>

	    <div class="promo-front owl-carousel">

	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[0].product_id}}/{{test.topProduct[0].alias}}'>
	                              <img src="{{test.topProduct[0].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[0].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[0].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[1].product_id}}/{{test.topProduct[1].alias}}'>
	                              <img src="{{test.topProduct[1].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[1].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[1].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[2].product_id}}/{{test.topProduct[2].alias}}'>
	                              <img src="{{test.topProduct[2].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[2].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[2].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[3].product_id}}/{{test.topProduct[3].alias}}'>
	                              <img src="{{test.topProduct[3].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[3].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[3].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[4].product_id}}/{{test.topProduct[4].alias}}'>
	                              <img src="{{test.topProduct[4].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[4].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[4].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[5].product_id}}/{{test.topProduct[5].alias}}'>
	                              <img src="{{test.topProduct[5].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[5].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[5].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <!-- <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'">Loading...</div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <img src="{{test.topProduct[6].imageurl}}" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[6].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'>Rp.</span>{{test.topProduct[6].pricelist}}</h5>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div> -->



	    </div>

	  </div>
</div>
<div ng-if="<?php echo $cat_id == 1000484; ?>">


	  <div style='padding:15px; font-family:tahoma; font-size:20px; border-top: 3px solid #c40202; color:#535151; margin-top:50px; margin-bottom:20px;'>
	    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> REKOMENDASI KAMI
	  </div>
	  <div style='float:left;width:604px; margin-right:5px'>
	    <img src='<?php echo base_url('images/demo/banner-b1.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='float:left;width:262px; margin-right:5px'>
	    <img src='<?php echo base_url('images/demo/banner-b2.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='float:left;width:262px'>
	    <img src='<?php echo base_url('images/demo/banner-b3.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='clear:both'></div>

	  <div class="span12" style='background:#fdf5e7; padding:10px; margin-top:10px'>

	    <div class="promo-front owl-carousel">

	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[0].product_id}}/{{test.topProduct[0].alias}}'>
	                              <img src="{{test.topProduct[0].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[0].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[0].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[1].product_id}}/{{test.topProduct[1].alias}}'>
	                              <img src="{{test.topProduct[1].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[1].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[1].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[2].product_id}}/{{test.topProduct[2].alias}}'>
	                              <img src="{{test.topProduct[2].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[2].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[2].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[3].product_id}}/{{test.topProduct[3].alias}}'>
	                              <img src="{{test.topProduct[3].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[3].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[3].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[4].product_id}}/{{test.topProduct[4].alias}}'>
	                              <img src="{{test.topProduct[4].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[4].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[4].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[5].product_id}}/{{test.topProduct[5].alias}}'>
	                              <img src="{{test.topProduct[5].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[5].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[5].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <!-- <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'">Loading...</div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <img src="{{test.topProduct[6].imageurl}}" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[6].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'>Rp.</span>{{test.topProduct[6].pricelist}}</h5>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div> -->



	    </div>

	  </div>
</div>
<div ng-if="<?php echo $cat_id == 1000489; ?>">


	  <div style='padding:15px; font-family:tahoma; font-size:20px; border-top: 3px solid #c40202; color:#535151; margin-top:50px; margin-bottom:20px;'>
	    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> REKOMENDASI KAMI
	  </div>
	  <div style='float:left;width:604px; margin-right:5px'>
	    <img src='<?php echo base_url('images/demo/banner-b1.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='float:left;width:262px; margin-right:5px'>
	    <img src='<?php echo base_url('images/demo/banner-b2.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='float:left;width:262px'>
	    <img src='<?php echo base_url('images/demo/banner-b3.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='clear:both'></div>

	  <div class="span12" style='background:#fdf5e7; padding:10px; margin-top:10px'>

	    <div class="promo-front owl-carousel">

	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[0].product_id}}/{{test.topProduct[0].alias}}'>
	                              <img src="{{test.topProduct[0].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[0].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[0].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[1].product_id}}/{{test.topProduct[1].alias}}'>
	                              <img src="{{test.topProduct[1].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[1].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[1].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[2].product_id}}/{{test.topProduct[2].alias}}'>
	                              <img src="{{test.topProduct[2].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[2].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[2].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[3].product_id}}/{{test.topProduct[3].alias}}'>
	                              <img src="{{test.topProduct[3].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[3].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[3].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[4].product_id}}/{{test.topProduct[4].alias}}'>
	                              <img src="{{test.topProduct[4].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[4].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[4].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[5].product_id}}/{{test.topProduct[5].alias}}'>
	                              <img src="{{test.topProduct[5].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[5].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[5].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <!-- <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'">Loading...</div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <img src="{{test.topProduct[6].imageurl}}" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[6].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'>Rp.</span>{{test.topProduct[6].pricelist}}</h5>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div> -->



	    </div>

	  </div>
</div>
<div ng-if="<?php echo $cat_id == 1000491; ?>">


	  <div style='padding:15px; font-family:tahoma; font-size:20px; border-top: 3px solid #c40202; color:#535151; margin-top:50px; margin-bottom:20px;'>
	    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> REKOMENDASI KAMI
	  </div>
	  <div style='float:left;width:604px; margin-right:5px'>
	    <img src='<?php echo base_url('images/demo/banner-b1.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='float:left;width:262px; margin-right:5px'>
	    <img src='<?php echo base_url('images/demo/banner-b2.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='float:left;width:262px'>
	    <img src='<?php echo base_url('images/demo/banner-b3.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='clear:both'></div>

	  <div class="span12" style='background:#fdf5e7; padding:10px; margin-top:10px'>

	    <div class="promo-front owl-carousel">

	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[0].product_id}}/{{test.topProduct[0].alias}}'>
	                              <img src="{{test.topProduct[0].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[0].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[0].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[1].product_id}}/{{test.topProduct[1].alias}}'>
	                              <img src="{{test.topProduct[1].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[1].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[1].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[2].product_id}}/{{test.topProduct[2].alias}}'>
	                              <img src="{{test.topProduct[2].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[2].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[2].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[3].product_id}}/{{test.topProduct[3].alias}}'>
	                              <img src="{{test.topProduct[3].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[3].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[3].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[4].product_id}}/{{test.topProduct[4].alias}}'>
	                              <img src="{{test.topProduct[4].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[4].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[4].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[5].product_id}}/{{test.topProduct[5].alias}}'>
	                              <img src="{{test.topProduct[5].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[5].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[5].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <!-- <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'">Loading...</div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <img src="{{test.topProduct[6].imageurl}}" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[6].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'>Rp.</span>{{test.topProduct[6].pricelist}}</h5>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div> -->



	    </div>

	  </div>
</div>
<div ng-if="<?php echo $cat_id == 1000492; ?>">


	  <div style='padding:15px; font-family:tahoma; font-size:20px; border-top: 3px solid #c40202; color:#535151; margin-top:50px; margin-bottom:20px;'>
	    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> REKOMENDASI KAMI
	  </div>
	  <div style='float:left;width:604px; margin-right:5px'>
	    <img src='<?php echo base_url('images/demo/banner-b1.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='float:left;width:262px; margin-right:5px'>
	    <img src='<?php echo base_url('images/demo/banner-b2.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='float:left;width:262px'>
	    <img src='<?php echo base_url('images/demo/banner-b3.jpg');?>' border='0' width='100%' height='200'>
	  </div>
	  <div style='clear:both'></div>

	  <div class="span12" style='background:#fdf5e7; padding:10px; margin-top:10px'>

	    <div class="promo-front owl-carousel">

	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[0].product_id}}/{{test.topProduct[0].alias}}'>
	                              <img src="{{test.topProduct[0].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[0].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[0].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[1].product_id}}/{{test.topProduct[1].alias}}'>
	                              <img src="{{test.topProduct[1].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[1].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[1].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[2].product_id}}/{{test.topProduct[2].alias}}'>
	                              <img src="{{test.topProduct[2].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[2].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[2].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[3].product_id}}/{{test.topProduct[3].alias}}'>
	                              <img src="{{test.topProduct[3].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[3].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[3].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[4].product_id}}/{{test.topProduct[4].alias}}'>
	                              <img src="{{test.topProduct[4].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[4].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[4].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[5].product_id}}/{{test.topProduct[5].alias}}'>
	                              <img src="{{test.topProduct[5].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[5].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[5].pricelist  | currency:"Rp.":0}}</h5></a>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div>
	      <!-- <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
	                  <div ng-controller="home1">

	                      <div ng-if="load == 'true'">Loading...</div>
	                      <div ng-if="load != 'true'">
	                          <div class="list" ng-if="test.category == 'Komputer'"  ng-repeat = "test in list.topProduct">
	                              <img src="{{test.topProduct[6].imageurl}}" style="height:120px; width: auto">
	                                <h6 class='nm_product'>{{test.topProduct[6].name}}</h6>
	                                <h5 class='h-product'><span class='rp-min'>Rp.</span>{{test.topProduct[6].pricelist}}</h5>
	                          </div>
	                      </div>
	                  </div>
	            <div class="ratings">
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star-empty"></span>
	            </div>
	      </div> -->



	    </div>

	  </div>
</div>

<div ng-if="<?php echo $cat_id == 1000500; ?>">
	<div style='padding:15px; font-family:tahoma; font-size:20px; border-top: 3px solid #c40202; color:#535151; margin-top:50px; margin-bottom:20px;'>
    <i class="fa fa-dot-circle-o" aria-hidden="true"></i>REKOMENDASI KAMI
  </div>

  <div style='float:left;width:604px; margin-right:5px'>
    <img src='<?php echo base_url('images/demo/banner-a1.jpg');?>' border='0' width='100%' height='200'>
  </div>
  <div style='float:left;width:262px; margin-right:5px'>
    <img src='<?php echo base_url('images/demo/banner-a2.jpg');?>' border='0' width='100%' height='200'>
  </div>
  <div style='float:left;width:262px'>
    <img src='<?php echo base_url('images/demo/banner-a3.jpg');?>' border='0' width='100%' height='200'>
  </div>
  <div style='clear:both'></div>

  <div class="span12" style='background:#e9f6fe; padding:10px; margin-top:10px'>

    <div class="promo-front owl-carousel">

      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
        <?php

        //foreach($dathome2['topProduct'] as $key => $itemslide7){ ?>
                  <div ng-controller="home1">

                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
                      <div ng-if="load != 'true'">
                        <!-- <a href="<?php //  echo base_url('product/detail/'. $itemslide7['categoryId'].'/'. $itemslide7['topProduct']);?>" class='link-p'> -->
                        <?php //} ?>
                          <div class="list" ng-if="test.category == 'Gadget'"  ng-repeat = "test in list.topProduct">
                            <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[0].product_id}}/{{test.topProduct[0].alias}}'>
                              <img src="{{test.topProduct[0].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; max-width:80%;">
                                <h6 class='nm_product'>{{test.topProduct[0].name}}</h6>
                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[0].pricelist  | currency:"Rp.":0}}</h5></a>
                          </div>




                      </div>

                  </div>


                  <div class="ratings">
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star-empty"></span>
                  </div>

      </div>
      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
                  <div ng-controller="home1">

                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
                      <div ng-if="load != 'true'">


                          <div class="list" ng-if="test.category == 'Gadget'"  ng-repeat = "test in list.topProduct">
                            <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[1].product_id}}/{{test.topProduct[1].alias}}'>
                              <img src="{{test.topProduct[1].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
                                <h6 class='nm_product'>{{test.topProduct[1].name}}</h6>
                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[1].pricelist  | currency:"Rp.":0}}</h5></a>
                          </div>




                      </div>

                  </div>



            <div class="ratings">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div>
      </div>
      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
                  <div ng-controller="home1">

                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
                      <div ng-if="load != 'true'">
                          <div class="list" ng-if="test.category == 'Gadget'"  ng-repeat = "test in list.topProduct">
                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[2].product_id}}/{{test.topProduct[2].alias}}'>
                              <img src="{{test.topProduct[2].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
                                <h6 class='nm_product'>{{test.topProduct[2].name}}</h6>
                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[2].pricelist  | currency:"Rp.":0}}</h5></a>
                          </div>
                      </div>
                  </div>
            <div class="ratings">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div>
      </div>
      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
                  <div ng-controller="home1">

                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
                      <div ng-if="load != 'true'">
                          <div class="list" ng-if="test.category == 'Gadget'"  ng-repeat = "test in list.topProduct">
                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[3].product_id}}/{{test.topProduct[3].alias}}'>
                              <img src="{{test.topProduct[3].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
                                <h6 class='nm_product'>{{test.topProduct[3].name}}</h6>
                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[3].pricelist  | currency:"Rp.":0}}</h5></a>
                          </div>
                      </div>
                  </div>
            <div class="ratings">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div>
      </div>
      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
                  <div ng-controller="home1">

                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
                      <div ng-if="load != 'true'">
                          <div class="list" ng-if="test.category == 'Gadget'"  ng-repeat = "test in list.topProduct">
                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[4].product_id}}/{{test.topProduct[4].alias}}'>
                              <img src="{{test.topProduct[4].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
                                <h6 class='nm_product'>{{test.topProduct[4].name}}</h6>
                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[4].pricelist  | currency:"Rp.":0}}</h5></a>
                          </div>
                      </div>
                  </div>
            <div class="ratings">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div>
      </div>
      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
                  <div ng-controller="home1">

                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
                      <div ng-if="load != 'true'">
                          <div class="list" ng-if="test.category == 'Gadget'"  ng-repeat = "test in list.topProduct">
                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[5].product_id}}/{{test.topProduct[5].alias}}'>
                              <img src="{{test.topProduct[5].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
                                <h6 class='nm_product'>{{test.topProduct[5].name}}</h6>
                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[5].pricelist  | currency:"Rp.":0}}</h5></a>
                          </div>
                      </div>
                  </div>
            <div class="ratings">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div>
      </div>
      <!-- <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
                  <div ng-controller="home1">

                      <div ng-if="load == 'true'">Loading...</div>
                      <div ng-if="load != 'true'">
                          <div class="list" ng-if="test.category == 'Gadget'"  ng-repeat = "test in list.topProduct">
                              <img src="{{test.topProduct[6].imageurl}}" style="height:120px; width: auto">
                                <h6 class='nm_product'>{{test.topProduct[6].name}}</h6>
                                <h5 class='h-product'><span class='rp-min'>Rp.</span>{{test.topProduct[6].pricelist}}</h5>
                          </div>
                      </div>
                  </div>
            <div class="ratings">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div>
      </div> -->

    </div>

  </div>
</div>
<div ng-if="<?php echo $cat_id == 1000501; ?>">
	<div style='padding:15px; font-family:tahoma; font-size:20px; border-top: 3px solid #c40202; color:#535151; margin-top:50px; margin-bottom:20px;'>
    <i class="fa fa-dot-circle-o" aria-hidden="true"></i>REKOMENDASI KAMI
  </div>

  <div style='float:left;width:604px; margin-right:5px'>
    <img src='<?php echo base_url('images/demo/banner-a1.jpg');?>' border='0' width='100%' height='200'>
  </div>
  <div style='float:left;width:262px; margin-right:5px'>
    <img src='<?php echo base_url('images/demo/banner-a2.jpg');?>' border='0' width='100%' height='200'>
  </div>
  <div style='float:left;width:262px'>
    <img src='<?php echo base_url('images/demo/banner-a3.jpg');?>' border='0' width='100%' height='200'>
  </div>
  <div style='clear:both'></div>

  <div class="span12" style='background:#e9f6fe; padding:10px; margin-top:10px'>

    <div class="promo-front owl-carousel">

      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
        <?php

        //foreach($dathome2['topProduct'] as $key => $itemslide7){ ?>
                  <div ng-controller="home1">

                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
                      <div ng-if="load != 'true'">
                        <!-- <a href="<?php //  echo base_url('product/detail/'. $itemslide7['categoryId'].'/'. $itemslide7['topProduct']);?>" class='link-p'> -->
                        <?php //} ?>
                          <div class="list" ng-if="test.category == 'Gadget'"  ng-repeat = "test in list.topProduct">
                            <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[0].product_id}}/{{test.topProduct[0].alias}}'>
                              <img src="{{test.topProduct[0].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; max-width:80%;">
                                <h6 class='nm_product'>{{test.topProduct[0].name}}</h6>
                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[0].pricelist  | currency:"Rp.":0}}</h5></a>
                          </div>




                      </div>

                  </div>


                  <div class="ratings">
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star-empty"></span>
                  </div>

      </div>
      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
                  <div ng-controller="home1">

                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
                      <div ng-if="load != 'true'">


                          <div class="list" ng-if="test.category == 'Gadget'"  ng-repeat = "test in list.topProduct">
                            <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[1].product_id}}/{{test.topProduct[1].alias}}'>
                              <img src="{{test.topProduct[1].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
                                <h6 class='nm_product'>{{test.topProduct[1].name}}</h6>
                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[1].pricelist  | currency:"Rp.":0}}</h5></a>
                          </div>




                      </div>

                  </div>



            <div class="ratings">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div>
      </div>
      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
                  <div ng-controller="home1">

                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
                      <div ng-if="load != 'true'">
                          <div class="list" ng-if="test.category == 'Gadget'"  ng-repeat = "test in list.topProduct">
                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[2].product_id}}/{{test.topProduct[2].alias}}'>
                              <img src="{{test.topProduct[2].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
                                <h6 class='nm_product'>{{test.topProduct[2].name}}</h6>
                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[2].pricelist  | currency:"Rp.":0}}</h5></a>
                          </div>
                      </div>
                  </div>
            <div class="ratings">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div>
      </div>
      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
                  <div ng-controller="home1">

                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
                      <div ng-if="load != 'true'">
                          <div class="list" ng-if="test.category == 'Gadget'"  ng-repeat = "test in list.topProduct">
                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[3].product_id}}/{{test.topProduct[3].alias}}'>
                              <img src="{{test.topProduct[3].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
                                <h6 class='nm_product'>{{test.topProduct[3].name}}</h6>
                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[3].pricelist  | currency:"Rp.":0}}</h5></a>
                          </div>
                      </div>
                  </div>
            <div class="ratings">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div>
      </div>
      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
                  <div ng-controller="home1">

                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
                      <div ng-if="load != 'true'">
                          <div class="list" ng-if="test.category == 'Gadget'"  ng-repeat = "test in list.topProduct">
                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[4].product_id}}/{{test.topProduct[4].alias}}'>
                              <img src="{{test.topProduct[4].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
                                <h6 class='nm_product'>{{test.topProduct[4].name}}</h6>
                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[4].pricelist  | currency:"Rp.":0}}</h5></a>
                          </div>
                      </div>
                  </div>
            <div class="ratings">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div>
      </div>
      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
                  <div ng-controller="home1">

                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
                      <div ng-if="load != 'true'">
                          <div class="list" ng-if="test.category == 'Gadget'"  ng-repeat = "test in list.topProduct">
                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[5].product_id}}/{{test.topProduct[5].alias}}'>
                              <img src="{{test.topProduct[5].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
                                <h6 class='nm_product'>{{test.topProduct[5].name}}</h6>
                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[5].pricelist  | currency:"Rp.":0}}</h5></a>
                          </div>
                      </div>
                  </div>
            <div class="ratings">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div>
      </div>
      <!-- <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
                  <div ng-controller="home1">

                      <div ng-if="load == 'true'">Loading...</div>
                      <div ng-if="load != 'true'">
                          <div class="list" ng-if="test.category == 'Gadget'"  ng-repeat = "test in list.topProduct">
                              <img src="{{test.topProduct[6].imageurl}}" style="height:120px; width: auto">
                                <h6 class='nm_product'>{{test.topProduct[6].name}}</h6>
                                <h5 class='h-product'><span class='rp-min'>Rp.</span>{{test.topProduct[6].pricelist}}</h5>
                          </div>
                      </div>
                  </div>
            <div class="ratings">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div>
      </div> -->

    </div>

  </div>
</div>
<div ng-if="<?php echo $cat_id == 1000502; ?>">
	<div style='padding:15px; font-family:tahoma; font-size:20px; border-top: 3px solid #c40202; color:#535151; margin-top:50px; margin-bottom:20px;'>
    <i class="fa fa-dot-circle-o" aria-hidden="true"></i>REKOMENDASI KAMI
  </div>

  <div style='float:left;width:604px; margin-right:5px'>
    <img src='<?php echo base_url('images/demo/banner-a1.jpg');?>' border='0' width='100%' height='200'>
  </div>
  <div style='float:left;width:262px; margin-right:5px'>
    <img src='<?php echo base_url('images/demo/banner-a2.jpg');?>' border='0' width='100%' height='200'>
  </div>
  <div style='float:left;width:262px'>
    <img src='<?php echo base_url('images/demo/banner-a3.jpg');?>' border='0' width='100%' height='200'>
  </div>
  <div style='clear:both'></div>

  <div class="span12" style='background:#e9f6fe; padding:10px; margin-top:10px'>

    <div class="promo-front owl-carousel">

      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
        <?php

        //foreach($dathome2['topProduct'] as $key => $itemslide7){ ?>
                  <div ng-controller="home1">

                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
                      <div ng-if="load != 'true'">
                        <!-- <a href="<?php //  echo base_url('product/detail/'. $itemslide7['categoryId'].'/'. $itemslide7['topProduct']);?>" class='link-p'> -->
                        <?php //} ?>
                          <div class="list" ng-if="test.category == 'Gadget'"  ng-repeat = "test in list.topProduct">
                            <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[0].product_id}}/{{test.topProduct[0].alias}}'>
                              <img src="{{test.topProduct[0].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; max-width:80%;">
                                <h6 class='nm_product'>{{test.topProduct[0].name}}</h6>
                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[0].pricelist  | currency:"Rp.":0}}</h5></a>
                          </div>




                      </div>

                  </div>


                  <div class="ratings">
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star-empty"></span>
                  </div>

      </div>
      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
                  <div ng-controller="home1">

                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
                      <div ng-if="load != 'true'">


                          <div class="list" ng-if="test.category == 'Gadget'"  ng-repeat = "test in list.topProduct">
                            <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[1].product_id}}/{{test.topProduct[1].alias}}'>
                              <img src="{{test.topProduct[1].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
                                <h6 class='nm_product'>{{test.topProduct[1].name}}</h6>
                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[1].pricelist  | currency:"Rp.":0}}</h5></a>
                          </div>




                      </div>

                  </div>



            <div class="ratings">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div>
      </div>
      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
                  <div ng-controller="home1">

                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
                      <div ng-if="load != 'true'">
                          <div class="list" ng-if="test.category == 'Gadget'"  ng-repeat = "test in list.topProduct">
                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[2].product_id}}/{{test.topProduct[2].alias}}'>
                              <img src="{{test.topProduct[2].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
                                <h6 class='nm_product'>{{test.topProduct[2].name}}</h6>
                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[2].pricelist  | currency:"Rp.":0}}</h5></a>
                          </div>
                      </div>
                  </div>
            <div class="ratings">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div>
      </div>
      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
                  <div ng-controller="home1">

                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
                      <div ng-if="load != 'true'">
                          <div class="list" ng-if="test.category == 'Gadget'"  ng-repeat = "test in list.topProduct">
                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[3].product_id}}/{{test.topProduct[3].alias}}'>
                              <img src="{{test.topProduct[3].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
                                <h6 class='nm_product'>{{test.topProduct[3].name}}</h6>
                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[3].pricelist  | currency:"Rp.":0}}</h5></a>
                          </div>
                      </div>
                  </div>
            <div class="ratings">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div>
      </div>
      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
                  <div ng-controller="home1">

                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
                      <div ng-if="load != 'true'">
                          <div class="list" ng-if="test.category == 'Gadget'"  ng-repeat = "test in list.topProduct">
                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[4].product_id}}/{{test.topProduct[4].alias}}'>
                              <img src="{{test.topProduct[4].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
                                <h6 class='nm_product'>{{test.topProduct[4].name}}</h6>
                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[4].pricelist  | currency:"Rp.":0}}</h5></a>
                          </div>
                      </div>
                  </div>
            <div class="ratings">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div>
      </div>
      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
                  <div ng-controller="home1">

                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
                      <div ng-if="load != 'true'">
                          <div class="list" ng-if="test.category == 'Gadget'"  ng-repeat = "test in list.topProduct">
                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[5].product_id}}/{{test.topProduct[5].alias}}'>
                              <img src="{{test.topProduct[5].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
                                <h6 class='nm_product'>{{test.topProduct[5].name}}</h6>
                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[5].pricelist  | currency:"Rp.":0}}</h5></a>
                          </div>
                      </div>
                  </div>
            <div class="ratings">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div>
      </div>
      <!-- <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
                  <div ng-controller="home1">

                      <div ng-if="load == 'true'">Loading...</div>
                      <div ng-if="load != 'true'">
                          <div class="list" ng-if="test.category == 'Gadget'"  ng-repeat = "test in list.topProduct">
                              <img src="{{test.topProduct[6].imageurl}}" style="height:120px; width: auto">
                                <h6 class='nm_product'>{{test.topProduct[6].name}}</h6>
                                <h5 class='h-product'><span class='rp-min'>Rp.</span>{{test.topProduct[6].pricelist}}</h5>
                          </div>
                      </div>
                  </div>
            <div class="ratings">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div>
      </div> -->

    </div>

  </div>
</div>
<div ng-if="<?php echo $cat_id == 1000503; ?>">
	<div style='padding:15px; font-family:tahoma; font-size:20px; border-top: 3px solid #c40202; color:#535151; margin-top:50px; margin-bottom:20px;'>
    <i class="fa fa-dot-circle-o" aria-hidden="true"></i>REKOMENDASI KAMI
  </div>

  <div style='float:left;width:604px; margin-right:5px'>
    <img src='<?php echo base_url('images/demo/banner-a1.jpg');?>' border='0' width='100%' height='200'>
  </div>
  <div style='float:left;width:262px; margin-right:5px'>
    <img src='<?php echo base_url('images/demo/banner-a2.jpg');?>' border='0' width='100%' height='200'>
  </div>
  <div style='float:left;width:262px'>
    <img src='<?php echo base_url('images/demo/banner-a3.jpg');?>' border='0' width='100%' height='200'>
  </div>
  <div style='clear:both'></div>

  <div class="span12" style='background:#e9f6fe; padding:10px; margin-top:10px'>

    <div class="promo-front owl-carousel">

      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
        <?php

        //foreach($dathome2['topProduct'] as $key => $itemslide7){ ?>
                  <div ng-controller="home1">

                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
                      <div ng-if="load != 'true'">
                        <!-- <a href="<?php //  echo base_url('product/detail/'. $itemslide7['categoryId'].'/'. $itemslide7['topProduct']);?>" class='link-p'> -->
                        <?php //} ?>
                          <div class="list" ng-if="test.category == 'Gadget'"  ng-repeat = "test in list.topProduct">
                            <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[0].product_id}}/{{test.topProduct[0].alias}}'>
                              <img src="{{test.topProduct[0].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; max-width:80%;">
                                <h6 class='nm_product'>{{test.topProduct[0].name}}</h6>
                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[0].pricelist  | currency:"Rp.":0}}</h5></a>
                          </div>




                      </div>

                  </div>


                  <div class="ratings">
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star-empty"></span>
                  </div>

      </div>
      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
                  <div ng-controller="home1">

                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
                      <div ng-if="load != 'true'">


                          <div class="list" ng-if="test.category == 'Gadget'"  ng-repeat = "test in list.topProduct">
                            <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[1].product_id}}/{{test.topProduct[1].alias}}'>
                              <img src="{{test.topProduct[1].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
                                <h6 class='nm_product'>{{test.topProduct[1].name}}</h6>
                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[1].pricelist  | currency:"Rp.":0}}</h5></a>
                          </div>




                      </div>

                  </div>



            <div class="ratings">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div>
      </div>
      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
                  <div ng-controller="home1">

                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
                      <div ng-if="load != 'true'">
                          <div class="list" ng-if="test.category == 'Gadget'"  ng-repeat = "test in list.topProduct">
                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[2].product_id}}/{{test.topProduct[2].alias}}'>
                              <img src="{{test.topProduct[2].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
                                <h6 class='nm_product'>{{test.topProduct[2].name}}</h6>
                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[2].pricelist  | currency:"Rp.":0}}</h5></a>
                          </div>
                      </div>
                  </div>
            <div class="ratings">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div>
      </div>
      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
                  <div ng-controller="home1">

                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
                      <div ng-if="load != 'true'">
                          <div class="list" ng-if="test.category == 'Gadget'"  ng-repeat = "test in list.topProduct">
                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[3].product_id}}/{{test.topProduct[3].alias}}'>
                              <img src="{{test.topProduct[3].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
                                <h6 class='nm_product'>{{test.topProduct[3].name}}</h6>
                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[3].pricelist  | currency:"Rp.":0}}</h5></a>
                          </div>
                      </div>
                  </div>
            <div class="ratings">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div>
      </div>
      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
                  <div ng-controller="home1">

                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
                      <div ng-if="load != 'true'">
                          <div class="list" ng-if="test.category == 'Gadget'"  ng-repeat = "test in list.topProduct">
                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[4].product_id}}/{{test.topProduct[4].alias}}'>
                              <img src="{{test.topProduct[4].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
                                <h6 class='nm_product'>{{test.topProduct[4].name}}</h6>
                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[4].pricelist  | currency:"Rp.":0}}</h5></a>
                          </div>
                      </div>
                  </div>
            <div class="ratings">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div>
      </div>
      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
                  <div ng-controller="home1">

                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
                      <div ng-if="load != 'true'">
                          <div class="list" ng-if="test.category == 'Gadget'"  ng-repeat = "test in list.topProduct">
                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[5].product_id}}/{{test.topProduct[5].alias}}'>
                              <img src="{{test.topProduct[5].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
                                <h6 class='nm_product'>{{test.topProduct[5].name}}</h6>
                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[5].pricelist  | currency:"Rp.":0}}</h5></a>
                          </div>
                      </div>
                  </div>
            <div class="ratings">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div>
      </div>
      <!-- <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
                  <div ng-controller="home1">

                      <div ng-if="load == 'true'">Loading...</div>
                      <div ng-if="load != 'true'">
                          <div class="list" ng-if="test.category == 'Gadget'"  ng-repeat = "test in list.topProduct">
                              <img src="{{test.topProduct[6].imageurl}}" style="height:120px; width: auto">
                                <h6 class='nm_product'>{{test.topProduct[6].name}}</h6>
                                <h5 class='h-product'><span class='rp-min'>Rp.</span>{{test.topProduct[6].pricelist}}</h5>
                          </div>
                      </div>
                  </div>
            <div class="ratings">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div>
      </div> -->

    </div>

  </div>
</div>
<div ng-if="<?php echo $cat_id == 1000504; ?>">
	<div style='padding:15px; font-family:tahoma; font-size:20px; border-top: 3px solid #c40202; color:#535151; margin-top:50px; margin-bottom:20px;'>
    <i class="fa fa-dot-circle-o" aria-hidden="true"></i>REKOMENDASI KAMI
  </div>

  <div style='float:left;width:604px; margin-right:5px'>
    <img src='<?php echo base_url('images/demo/banner-a1.jpg');?>' border='0' width='100%' height='200'>
  </div>
  <div style='float:left;width:262px; margin-right:5px'>
    <img src='<?php echo base_url('images/demo/banner-a2.jpg');?>' border='0' width='100%' height='200'>
  </div>
  <div style='float:left;width:262px'>
    <img src='<?php echo base_url('images/demo/banner-a3.jpg');?>' border='0' width='100%' height='200'>
  </div>
  <div style='clear:both'></div>

  <div class="span12" style='background:#e9f6fe; padding:10px; margin-top:10px'>

    <div class="promo-front owl-carousel">

      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
        <?php

        //foreach($dathome2['topProduct'] as $key => $itemslide7){ ?>
                  <div ng-controller="home1">

                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
                      <div ng-if="load != 'true'">
                        <!-- <a href="<?php //  echo base_url('product/detail/'. $itemslide7['categoryId'].'/'. $itemslide7['topProduct']);?>" class='link-p'> -->
                        <?php //} ?>
                          <div class="list" ng-if="test.category == 'Gadget'"  ng-repeat = "test in list.topProduct">
                            <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[0].product_id}}/{{test.topProduct[0].alias}}'>
                              <img src="{{test.topProduct[0].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; max-width:80%;">
                                <h6 class='nm_product'>{{test.topProduct[0].name}}</h6>
                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[0].pricelist  | currency:"Rp.":0}}</h5></a>
                          </div>




                      </div>

                  </div>


                  <div class="ratings">
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star-empty"></span>
                  </div>

      </div>
      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
                  <div ng-controller="home1">

                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
                      <div ng-if="load != 'true'">


                          <div class="list" ng-if="test.category == 'Gadget'"  ng-repeat = "test in list.topProduct">
                            <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[1].product_id}}/{{test.topProduct[1].alias}}'>
                              <img src="{{test.topProduct[1].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
                                <h6 class='nm_product'>{{test.topProduct[1].name}}</h6>
                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[1].pricelist  | currency:"Rp.":0}}</h5></a>
                          </div>




                      </div>

                  </div>



            <div class="ratings">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div>
      </div>
      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
                  <div ng-controller="home1">

                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
                      <div ng-if="load != 'true'">
                          <div class="list" ng-if="test.category == 'Gadget'"  ng-repeat = "test in list.topProduct">
                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[2].product_id}}/{{test.topProduct[2].alias}}'>
                              <img src="{{test.topProduct[2].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
                                <h6 class='nm_product'>{{test.topProduct[2].name}}</h6>
                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[2].pricelist  | currency:"Rp.":0}}</h5></a>
                          </div>
                      </div>
                  </div>
            <div class="ratings">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div>
      </div>
      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
                  <div ng-controller="home1">

                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
                      <div ng-if="load != 'true'">
                          <div class="list" ng-if="test.category == 'Gadget'"  ng-repeat = "test in list.topProduct">
                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[3].product_id}}/{{test.topProduct[3].alias}}'>
                              <img src="{{test.topProduct[3].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
                                <h6 class='nm_product'>{{test.topProduct[3].name}}</h6>
                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[3].pricelist  | currency:"Rp.":0}}</h5></a>
                          </div>
                      </div>
                  </div>
            <div class="ratings">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div>
      </div>
      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
                  <div ng-controller="home1">

                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
                      <div ng-if="load != 'true'">
                          <div class="list" ng-if="test.category == 'Gadget'"  ng-repeat = "test in list.topProduct">
                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[4].product_id}}/{{test.topProduct[4].alias}}'>
                              <img src="{{test.topProduct[4].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
                                <h6 class='nm_product'>{{test.topProduct[4].name}}</h6>
                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[4].pricelist  | currency:"Rp.":0}}</h5></a>
                          </div>
                      </div>
                  </div>
            <div class="ratings">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div>
      </div>
      <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
                  <div ng-controller="home1">

                      <div ng-if="load == 'true'"><img src="https://s8.postimg.org/sje4ys251/jump.gif"></div>
                      <div ng-if="load != 'true'">
                          <div class="list" ng-if="test.category == 'Gadget'"  ng-repeat = "test in list.topProduct">
                              <a href='<?php echo base_url() ?>/product/detail/{{test.topProduct[5].product_id}}/{{test.topProduct[5].alias}}'>
                              <img src="{{test.topProduct[5].imageurl}}" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';" style="height:120px; width: auto">
                                <h6 class='nm_product'>{{test.topProduct[5].name}}</h6>
                                <h5 class='h-product'><span class='rp-min'></span>{{test.topProduct[5].pricelist  | currency:"Rp.":0}}</h5></a>
                          </div>
                      </div>
                  </div>
            <div class="ratings">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div>
      </div>
      <!-- <div class="item" style='background:#ffffff; padding:10px; height:300px; text-align:center'>
                  <div ng-controller="home1">

                      <div ng-if="load == 'true'">Loading...</div>
                      <div ng-if="load != 'true'">
                          <div class="list" ng-if="test.category == 'Gadget'"  ng-repeat = "test in list.topProduct">
                              <img src="{{test.topProduct[6].imageurl}}" style="height:120px; width: auto">
                                <h6 class='nm_product'>{{test.topProduct[6].name}}</h6>
                                <h5 class='h-product'><span class='rp-min'>Rp.</span>{{test.topProduct[6].pricelist}}</h5>
                          </div>
                      </div>
                  </div>
            <div class="ratings">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div>
      </div> -->

    </div>

  </div>
</div>
</div>

	<script src="<?php echo base_url('assets/owl-carousel/owl.carousel.js');?>"></script>

	<style>
	#owl-demo .item{
			margin: 3px;
			/*text-align:center;*/
	}
	#owl-demo .item img{
			display: block;
			width: auto;
			height: 150px;

	}
	</style>


	<script>
	$(document).ready(function() {
		$("#owl-demo").owlCarousel({
			autoPlay: 3000,
			items : 6,
			itemsDesktop : [1199,3],
			itemsDesktopSmall : [979,3]
		});

	});
	</script>

	<style>
	.promo-front .item{
			margin: 3px;
	}
	.promo-front .item img{
			display: block;
			width: 100%;
			height: auto;
	}
	</style>


	<script>
	$(document).ready(function() {
		$(".promo-front").owlCarousel({
			autoPlay: 3000,
			items : 6,
			itemsDesktop : [1199,3],
			itemsDesktopSmall : [979,3]
		});

	});
	</script>
