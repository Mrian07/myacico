<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style_category.css');?>" />
<div class="container">
	<div class='my-bg-title'>
		<i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo strtoupper($hasil['subName']); ?>
	</div>

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
