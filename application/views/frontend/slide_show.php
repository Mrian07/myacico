
	 <style>
/*
Bootstrap Image Carousel Slider with Animate.css
Code snippet by Hashif (http://hashif.com) for Bootsnipp.com
Image credits: unsplash.com
*/
@import url(https://fonts.googleapis.com/css?family=Quicksand:400,700);







/********************************/
/*          Main CSS     */
/********************************/


#first-slider .main-container {
  padding: 0;
}
h1{
	color: white;
}

#first-slider .slide1 h3, #first-slider .slide2 h3, #first-slider .slide3 h3, #first-slider .slide4 h3{
    color: #fff;
    font-size: 30px;
      text-transform: uppercase;
      font-weight:700;
}

#first-slider .slide1 h4,#first-slider .slide2 h4,#first-slider .slide3 h4,#first-slider .slide4 h4{
    color: #fff;
    font-size: 30px;
      text-transform: uppercase;
      font-weight:700;
}
#first-slider .slide1 .text-left ,#first-slider .slide3 .text-left{
    padding-left: 40px;
}


#first-slider .carousel-indicators {
  bottom: 0;
}
#first-slider .carousel-control.right,
#first-slider .carousel-control.left {
  background-image: none;
}
#first-slider .carousel .item {
  min-height: 425px;
  height: 100%;
  width:100%;
}

.carousel-inner .item .container {
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
}


#first-slider h3{
  animation-delay: 1s;
}
#first-slider h4 {
  animation-delay: 2s;
}
#first-slider h2 {
  animation-delay: 3s;
}


#first-slider .carousel-control {
    width: 6%;
        text-shadow: none;
}


#first-slider h1 {
  text-align: center;
  margin-bottom: 30px;
  font-size: 30px;
  font-weight: bold;
}

#first-slider .p {
  padding-top: 125px;
  text-align: center;
}

#first-slider .p a {
  text-decoration: underline;
}
#first-slider .carousel-indicators li {
    width: 14px;
    height: 14px;
		c
    background-color: rgba(255,255,255,.4);
  border:none;
}
#first-slider .carousel-indicators .active{
    width: 16px;
    height: 16px;
    background-color: #fff;
  border:none;
}


.carousel-fade .carousel-inner .item {
  -webkit-transition-property: opacity;
  transition-property: opacity;
}
.carousel-fade .carousel-inner .item,
.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
  opacity: 0;
}
.carousel-fade .carousel-inner .active,
.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
  opacity: 1;
}
.carousel-fade .carousel-inner .next,
.carousel-fade .carousel-inner .prev,
.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
  left: 0;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}
.carousel-fade .carousel-control {
  z-index: 2;
}

.carousel-control .fa-angle-right, .carousel-control .fa-angle-left {
    position: absolute;
    top: 50%;
    z-index: 5;
    display: inline-block;
}
.carousel-control .fa-angle-left{
    left: 50%;
    width: 38px;
    height: 38px;
    margin-top: -15px;
    font-size: 30px;
    color: #fff;
    border: 3px solid #ffffff;
    -webkit-border-radius: 23px;
    -moz-border-radius: 23px;
    border-radius: 53px;
}
.carousel-control .fa-angle-right{
    right: 50%;
    width: 38px;
    height: 38px;
    margin-top: -15px;
    font-size: 30px;
    color: #fff;
    border: 3px solid #ffffff;
    -webkit-border-radius: 23px;
    -moz-border-radius: 23px;
    border-radius: 53px;
}
.carousel-control {
    opacity: 1;
    filter: alpha(opacity=100);
}


/********************************/
/*       Slides backgrounds     */
/********************************/
#first-slider .slide1 {

      background-size: cover;
    background-repeat: no-repeat;
}
#first-slider .slide2 {

      background-size: cover;
    background-repeat: no-repeat;
}
#first-slider .slide3 {
  background-image: url(https://s1.postimg.org/21qhtvb70v/homebanner.png);
    width:378px;
	
    background-repeat: no-repeat;
}





/********************************/
/*          Media Queries       */
/********************************/
@media screen and (min-width: 980px){

}
@media screen and (max-width: 640px){

}

</style>
<div class="container">
<div class="row">
  <div class="col-sm-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


    <div id="first-slider">
        <div id="carousel-example-generic" class="carousel slide carousel-fade">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <!-- Item 1 -->
								<div class="item slide1">
									<div class="addressname">

                    <div class="row"><div class="container">
                        <div class="col-md-3 text-right">

                        </div>

                    </div></div>
                 </div></div>  <!-- Item 2 -->
								 <div class="item slide2">
									 <div class="addressname1">

                     <div class="row"><div class="container">

                         <div class="col-md-5 text-right">

                         </div>
                     </div></div>
                </div> </div>
                <!-- Item 3 -->
								<div class="item slide2">
									<div class="addressname2">

										<div class="row"><div class="container">


										</div></div>
							 </div> </div>
							 <div class="item slide2">
								 <div class="addressname3">

									 <div class="row"><div class="container">
											 <div class="col-md-7 text-left">
													 <!-- <h3 data-animation="animated bounceInDown" class=""> 50 animation options A beautiful</h3>
													 <h4 data-animation="animated bounceInUp" class="">Create beautiful slideshows </h4> -->
												</div>
											 <div class="col-md-5 text-right">
													 <img style="max-width: 200px;" data-animation="animated zoomInLeft" src="<?php echo base_url('images/general/lang_bahasa.png'); ?>" class="">
											 </div>
									 </div></div>
							</div> </div>
							<div class="item slide3 active">
								<div class="addressname4">
									<div class="row"><div class="container">
											<div class="col-md-7 text-left">
													<!-- <h3 data-animation="animated bounceInDown" class="animated bounceInDown">Simple Bootstrap Carousel</h3>
													<h4 data-animation="animated bounceInUp" class="animated bounceInUp">Bootstrap Image Carousel Slider with Animate.css</h4> -->
											 </div>
											<div class="col-md-5 text-right">
													<img style="max-width: 200px;" data-animation="animated zoomInLeft" src="http://s20.postimg.org/eq8xvxeq5/globe_network.png" class="">
											</div>
									</div></div>
							</div></div>
            </div>
            <!-- End Wrapper for slides-->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
            </a>
        </div>
    </div>




  </div>
  <div class="col-sm-4">

    <div class="row">
      <div class="col-sm-12" style="background:#f1f1f1; margin-left:-2px; padding:0px;">

      <img src="https://s1.postimg.org/4zblqmyx27/Artboard_3.jpg"  alt="Smiley face" width="50%" height="200">
  <img src="https://s1.postimg.org/7u49wfhja7/Artboard_4.jpg"  alt="Smiley face" width="48%" height="200">
      </div>


  </div>
  <hr>
  <div class="row">
  <div class="col-sm-12" style="margin-left:-2px; padding:0px;">
<img src="https://s1.postimg.org/1j99yjva1r/Artboard_5.jpg" alt="Smiley face" width="100%" height="139">
</div>
</div>


  </div>
</div>
</div>
<script type="text/javascript">

$(document).ready(function() {


    var api2 = api_base_url +'/home/view';

    //$.get(api_base_url+'/aduser/getaddress?addresstype=isshipto',

    $.ajax({
        type:"GET",

        //beforeSend: getAdd(),
        success: function(data){
          console.log('data2',data.level_1)
					console.log('data23',data.level_1[1])
						console.log('data untuk level 2',data.level_2)
            var addressname = $('.addressname');
						  var addressname1 = $('.addressname1');
							 var addressname2 = $('.addressname2');
							  var addressname3 = $('.addressname3');
								 var addressname4 = $('.addressname4');
						addressname.append(
								'<img src="'+data.level_1[0].imageurl+'" alt="...">'

						)
						addressname1.append(
								'<img src="'+data.level_1[1].imageurl+'" alt="...">'

						)
						addressname2.append(
								'<img src="'+data.level_1[2].imageurl+'" alt="...">'

						)
						addressname3.append(
								'<img src="'+data.level_1[3].imageurl+'" alt="...">'

						)
						addressname4.append(
								'<img src="'+data.level_1[4].imageurl+'" alt="...">'

						)

     var rumah = $('.rumah');

$("#hapus").val(null);
            data.level_1.forEach(function(p){
     rumah.append(
			 '<p>'+p.imageurl+'</p>'
         //'<div class="item slide1"><div class="row"><div class="container"><div class="col-md-3 text-right"><img src="'+p.imageurl+'"  class="img-responsive" alt="Berry Lace Dress"></div><div class="col-md-9 text-left"></div></div></div></div>'
      //<div class="col-md-4"><div class="product-item"><div class="pi-img-wrapper"><img src="'+p.imageurl+'" alt="..." height="100" class="img-responsive" alt="Berry Lace Dress"><div></div></div><h3><a href="'+base_url+'product/detail/'+p.alias+'">'+p.name+'</a></h3><div class="pi-price">'+p.alias+'</div></div></div>'
        )

     });
            },
        dataType: "json",
        url: api2});


    console.log('asd',api2);

});

(function( $ ) {

    //Function to animate slider captions
	function doAnimations( elems ) {
		//Cache the animationend event in a variable
		var animEndEv = 'webkitAnimationEnd animationend';

		elems.each(function () {
			var $this = $(this),
				$animationType = $this.data('animation');
			$this.addClass($animationType).one(animEndEv, function () {
				$this.removeClass($animationType);
			});
		});
	}

	//Variables on page load
	var $myCarousel = $('#carousel-example-generic'),
		$firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

	//Initialize carousel
	$myCarousel.carousel();

	//Animate captions in first slide on page load
	doAnimations($firstAnimatingElems);

	//Pause carousel
	$myCarousel.carousel('pause');


	//Other slides to be animated on carousel slide event
	$myCarousel.on('slide.bs.carousel', function (e) {
		var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
		doAnimations($animatingElems);
	});
    $('#carousel-example-generic').carousel({
        interval:3000,
        pause: "false"
    });

})(jQuery);

</script>
