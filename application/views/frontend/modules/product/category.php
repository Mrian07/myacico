
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

<div class="container">
	<div class='my-bg-title'>
		<i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo strtoupper($hasil['subName']); ?>
	</div>
</div>


<div class="container">
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
