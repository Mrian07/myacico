
<style>
.price{
		font-size: 30px;
    	margin: 0 auto;
    	color: #333;
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
        border: 1px solid #c40202 !important;
    border-radius: 10px !important;
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


/*-------*/

.carousel-inner .active.left { left: -25%; }
.carousel-inner .next        { left:  25%; }
.carousel-inner .prev		 { left: -25%; }
.carousel-control 			 { width:  4%; }
.carousel-control.left,.carousel-control.right {margin-left:15px;background-image:none;}
</style>

<div id="title">
</div>
		<div class="container">
		<div class="row" id="collection_box">
	</div>
		<!-- END PRODUCTS -->


	<hr size='1'>
  <p id="tes"></p>

	<h4>Bestseller Products</h4>
<!--<div class="col-md-12 col-md-offset-3" style='background:#dddddd'>-->

<div class="carousel slide" id="myCarousel">
  <div class="carousel-inner">
    <div class="item active">
      <div class="col-xs-3"><a href="#"><img src="http://placehold.it/500/e499e4/fff&amp;text=1" class="img-responsive"></a></div>
    </div>
    <div class="item">
      <div class="col-xs-3"><a href="#"><img src="http://placehold.it/500/e477e4/fff&amp;text=2" class="img-responsive"></a></div>
    </div>
    <div class="item">
      <div class="col-xs-3"><a href="#"><img src="http://placehold.it/500/eeeeee&amp;text=3" class="img-responsive"></a></div>
    </div>
    <div class="item">
      <div class="col-xs-3"><a href="#"><img src="http://placehold.it/500/f4f4f4&amp;text=4" class="img-responsive"></a></div>
    </div>
    <div class="item">
      <div class="col-xs-3"><a href="#"><img src="http://placehold.it/500/f566f5/333&amp;text=5" class="img-responsive"></a></div>
    </div>
    <div class="item">
      <div class="col-xs-3"><a href="#"><img src="http://placehold.it/500/f477f4/fff&amp;text=6" class="img-responsive"></a></div>
    </div>
    <div class="item">
      <div class="col-xs-3"><a href="#"><img src="http://placehold.it/500/eeeeee&amp;text=7" class="img-responsive"></a></div>
    </div>
    <div class="item">
      <div class="col-xs-3"><a href="#"><img src="http://placehold.it/500/fcfcfc/333&amp;text=8" class="img-responsive"></a></div>
    </div>

  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
</div>

</div>

</div>
<script>
$('#myCarousel').carousel({
  interval: 4000
})

$('.carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));

  for (var i=0;i<2;i++) {
    next=next.next();
    if (!next.length) {
    	next = $(this).siblings(':first');
  	}

    next.children(':first-child').clone().appendTo($(this));
  }
});
  $.get(api_base_url+"/category/listc3?c2id=<?php echo $cat_id; ?>",
  function(data){
    console.log('get_cat:', data);
    var box = $('#collection_box');
	var title = $('#title');
    title.html('<div class="my-bg-title"><div class="container"><div class="row"><div class="col-sm-12"><i class="fa fa-angle-right" aria-hidden="true"></i> '+data.subName+'</div></div></div></div>');
    if(data.subValue.length == 0) return box.append('<p>Data tidak ditemukan</p>');

    data.subValue.forEach(function(p){
      // console.log('pro:',p);
      box.append(
        $(document.createElement('div')).attr("class","col-md-3 col-sm-6").append(
          $(document.createElement('span')).attr("class","thumbnail").append(
            '<a href="'+base_url+'product/listItem/'+p.categoryId+'"><img src="'+p.imageurl+'" alt="..."><h5>'+p.name+'</h5></a>'

          )
        )
      );
    });
  });
</script>
