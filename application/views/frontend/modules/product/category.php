
<style>
	.thumbnail:hover{
		box-shadow: 0px 0px 10px #ffffff;
	}

	.thumbnail{
		opacity:0.70;
		-webkit-transition: all 0.5s;
		transition: all 0.5s;
		text-align:center;
	}
	.thumbnail a:hover{
		opacity:1.00;
		box-shadow: 0px 0px 10px #4bc6ff;
		text-decoration:none;
	}
	.line{
		margin-bottom: 5px;
	}
	@media screen and (max-width: 770px) {
		.right{
			float:left;
			width: 100%;
		}
	}

	span.thumbnail {
        border: 1px solid #b2b2b2 !important;
    border-radius: 0px !important;
    -webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.16);
    -moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.16);
    box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.16);
	padding: 10px;
}


.container h4{margin-top:20px; margin-bottom:30px;}

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

<div class="container">
	<div class='my-bg-title'>
		<i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo strtoupper($hasil['subName']); ?>
	</div>
</div>


<div class="container my-container-transparan">
	<div class="row">
		<?php
		foreach($hasil['subValue'] as $key => $data){
			?>

			<div class="col-md-3 col-sm-6 box-thum">
				<span class='thumbnail'>
				<a href="<?php echo base_url('product/listItem/'.$data['categoryId'].'/'.$data['alias']);?>"><img src="<?php echo $data['imageurl']; ?>" alt="..."><h5><?php echo $data['name']; ?></h5></a>
				</span>
			</div>
		<?php } ?>
	</div>
	<!-- END PRODUCTS -->




	<div style='padding:15px 15px 15px 0px; font-family:tahoma; font-size:20px; border-bottom: 3px solid #c40202; color:#535151; margin-top:50px; margin-bottom:20px;'>
		Rekomendasi Kami
	</div>
	<div class="row">
		<div class="col-xs-6"><img src='<?php echo base_url('images/demo/banner-b1.jpg');?>' border='0' width='100%' height='200'></div>
		<div class="col-xs-3"><img src='<?php echo base_url('images/demo/banner-b2.jpg');?>' border='0' width='100%' height='200'></div>
		<div class="col-xs-3"><img src='<?php echo base_url('images/demo/banner-b3.jpg');?>' border='0' width='100%' height='200'></div>
	</div>

	<div class="span12" style='background:#f2f2f2; padding:10px; margin-top:10px'>

		<div class="promo-front owl-carousel">
			<?php

			$jmlslide2=count($dathome['level_2']);
			$n=1;
			foreach($dathome['level_2'] as $key => $itemslide2){
				if($n=="$jmlslide2"){
					$active='active';
				}else{
					$active='';
				}
				?>
			<div class="item" style='background:#ffffff; padding:10px; height:300px'>

				<center><a href="<?php echo base_url('product/detail/'. $itemslide2['product_id'].'/'. $itemslide2['alias']);?>"><img src="<?php echo $itemslide2['imageurl']; ?>"  style="height:110px; width: auto"></a>
				</center>
				<h6 class='nm_product'><?php echo $itemslide2['name']; ?></h6>
				<h5 class='h-product'><span class='rp-min'>Rp.</span><?php echo money($itemslide2['pricelist']); ?></h5>
				<div class="ratings">
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
						</div>
			</div>
			<?php $n++;  } ?>
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
