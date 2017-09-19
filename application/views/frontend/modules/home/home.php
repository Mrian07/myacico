



<style type="text/css">
.pa-bottom {
  padding-bottom: 30px;
}

.pos-top {
  position: absolute;
  top:50%;
  margin-top:-14px;
}

@media (min-width: 140px) and (max-width: 480px){
.carousel-indicators {
bottom: -5px;
}
}

@media (min-width: 481px) and (max-width: 767px){
.carousel-indicators {
bottom: 5px;
}
}
#slider-text{
  padding-top: 40px;
  display: block;
}
#slider-text .col-md-6{
  overflow: hidden;
}

#slider-text h2 {
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 400;
  font-size: 30px;
  letter-spacing: 3px;
  margin: 30px auto;
  padding-left: 40px;
}
#slider-text h2::after{
  border-top: 2px solid #c7c7c7;
  content: "";
  position: absolute;
  bottom: 35px;
  width: 100%;
  }

#itemslider h4{
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 400;
  font-size: 12px;
  margin: 10px auto 3px;
}
#itemslider h5{
  font-family: 'Josefin Sans', sans-serif;
  font-weight: bold;
  font-size: 12px;
  margin: 3px auto 2px;
}
#itemslider h6{
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 300;;
  font-size: 10px;
  margin: 2px auto 5px;
}
.badge {
  background: #b20c0c;
  position: absolute;
  height: 40px;
  width: 40px;
  border-radius: 50%;
  line-height: 31px;
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 300;
  font-size: 14px;
  border: 2px solid #FFF;
  box-shadow: 0 0 0 1px #b20c0c;
  top: 5px;
  right: 25%;
}
#slider-control img{
  padding-top: 60%;
  margin: 0 auto;
}
@media screen and (max-width: 992px){
#slider-control img {
  padding-top: 70px;
  margin: 0 auto;
}
}

.carousel-showmanymoveone .carousel-control {
  width: 4%;
  background-image: none;
}
.carousel-showmanymoveone .carousel-control.left {
  margin-left: 5px;
}
.carousel-showmanymoveone .carousel-control.right {
  margin-right: 5px;
}
.carousel-showmanymoveone .cloneditem-1,
.carousel-showmanymoveone .cloneditem-2,
.carousel-showmanymoveone .cloneditem-3,
.carousel-showmanymoveone .cloneditem-4,
.carousel-showmanymoveone .cloneditem-5 {
  display: none;
}
@media all and (min-width: 768px) {
  .carousel-showmanymoveone .carousel-inner > .active.left,
  .carousel-showmanymoveone .carousel-inner > .prev {
    left: -50%;
  }
  .carousel-showmanymoveone .carousel-inner > .active.right,
  .carousel-showmanymoveone .carousel-inner > .next {
    left: 50%;
  }
  .carousel-showmanymoveone .carousel-inner > .left,
  .carousel-showmanymoveone .carousel-inner > .prev.right,
  .carousel-showmanymoveone .carousel-inner > .active {
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner .cloneditem-1 {
    display: block;
  }
}
@media all and (min-width: 768px) and (transform-3d), all and (min-width: 768px) and (-webkit-transform-3d) {
  .carousel-showmanymoveone .carousel-inner > .item.active.right,
  .carousel-showmanymoveone .carousel-inner > .item.next {
    -webkit-transform: translate3d(50%, 0, 0);
    transform: translate3d(50%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.active.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev {
    -webkit-transform: translate3d(-50%, 0, 0);
    transform: translate3d(-50%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev.right,
  .carousel-showmanymoveone .carousel-inner > .item.active {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    left: 0;
  }
}
@media all and (min-width: 992px) {
  .carousel-showmanymoveone .carousel-inner > .active.left,
  .carousel-showmanymoveone .carousel-inner > .prev {
    left: -16.666%;
  }
  .carousel-showmanymoveone .carousel-inner > .active.right,
  .carousel-showmanymoveone .carousel-inner > .next {
    left: 16.666%;
  }
  .carousel-showmanymoveone .carousel-inner > .left,
  .carousel-showmanymoveone .carousel-inner > .prev.right,
  .carousel-showmanymoveone .carousel-inner > .active {
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner .cloneditem-2,
  .carousel-showmanymoveone .carousel-inner .cloneditem-3,
  .carousel-showmanymoveone .carousel-inner .cloneditem-4,
  .carousel-showmanymoveone .carousel-inner .cloneditem-5,
  .carousel-showmanymoveone .carousel-inner .cloneditem-6  {
    display: block;
  }
}
@media all and (min-width: 992px) and (transform-3d), all and (min-width: 992px) and (-webkit-transform-3d) {
  .carousel-showmanymoveone .carousel-inner > .item.active.right,
  .carousel-showmanymoveone .carousel-inner > .item.next {
    -webkit-transform: translate3d(16.666%, 0, 0);
    transform: translate3d(16.666%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.active.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev {
    -webkit-transform: translate3d(-16.666%, 0, 0);
    transform: translate3d(-16.666%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev.right,
  .carousel-showmanymoveone .carousel-inner > .item.active {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    left: 0;
  }
}

h3{
  font-weight: 300;
}


.media-carousel-xs, .media-carousel-up {
margin-bottom: 0;
padding: 15px;
border: 1px solid #e5e5e5;
}



#media-up .thumbnail,
#media-xs .thumbnail{
margin-bottom:0;
}

.media-carousel-xs,
.media-carousel-up
{
  margin-bottom: 0;
  padding: 15px;
  border: 1px solid #e5e5e5;
}
/* Previous button  */
.media-carousel-xs .carousel-control.left,
.media-carousel-up .carousel-control.left
{
  left: -12px;
  background-image: none;
  background: none repeat scroll 0 0 #eee;
  border: 0 solid #FFFFFF;
  border-radius: 23px 23px 23px 23px;
  height: 22px;
  width : 22px;
  top: 50%;
  margin-top: -10px;
}
/* Next button  */
.media-carousel-xs .carousel-control.right,
.media-carousel-up .carousel-control.right
{
  right: -12px !important;
  background-image: none;
  background: none repeat scroll 0 0 #eee;
  border: 0 solid #FFFFFF;
  border-radius: 23px 23px 23px 23px;
  height: 22px;
  width : 22px;
  top: 50%;
  margin-top: -10px;
}

#media-xs .carousel-control,
#media-up .carousel-control{
position: absolute;
bottom: 0;
font-size: 14px;
color: #808080;
text-shadow: 0 0 0;
opacity: 1;
filter: alpha(opacity=100);
}

.media-carousel-xs .carousel-control:hover,.media-carousel-xs .carousel-control:focus,
.media-carousel-up .carousel-control:hover,.media-carousel-up .carousel-control:focus{
color: #808080;
}
    .col{
 margin: 10px;
  min-height:500px; max-height:700px; min-width:280px; max-width: 300px;
}
    .shoort-div {
  min-height:220px; max-height:300px;
  min-width:280px;max-width: 300px;

}
.short-div {
  min-height:250px; max-height:300px;
  min-width:280px;max-width: 300px;

}
.embed-responsive {
  position: relative;
  display: block;
  height: 0;
  padding: 0;
  overflow: hidden;
}

.img{
  max-width: 74%;
}
.komentar
{

     text-align:left;

     color:red;

}

.embed-responsive .embed-responsive-item,
.embed-responsive iframe,
.embed-responsive embed,
.embed-responsive object,
.embed-responsive video {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}
/*.test {
  text-align: center !important;
  padding-left: 30px;
}*/
.embed-responsive-16by9 {
  padding-bottom: 80%;
}
.embed-responsive-4by3 {
  padding-bottom: 50%;
}


@include media-breakpoint-up(sm) {
  html {
    font-size: 16px;
  }
}

@include media-breakpoint-up(md) {
  html {
    font-size: 20px;
  }
}

@include media-breakpoint-up(lg) {
  html {
    font-size: 28px;
  }
}
ul.list-group:after {
  clear: both;
  display: block;
  content: "";
}

.list-group-item {
    float: left;
}

</style>

<script>
$(document).ready(function(){

$('#itemslider').carousel({ interval: 3000 });

$('.carousel-showmanymoveone .item').each(function(){
var itemToClone = $(this);

for (var i=1;i<6;i++) {
itemToClone = itemToClone.next();

if (!itemToClone.length) {
itemToClone = $(this).siblings(':first');
}

itemToClone.children(':first-child').clone()
.addClass("cloneditem-"+(i))
.appendTo($(this));
}
});
});


</script>

<div class='home-banner'>
	<div class="row">
		<div class="col-sm-3 col-xs-6 my-img-small">
			<a href="#"><img u="image" width='100%' src='<?php echo base_url('images/banner/banner_kecil1.jpg');?>' border='0'/></a>
		</div>
		<div class="col-sm-3 col-xs-6 my-img-small">
			<a href="#"><img u="image" width='100%' src='<?php echo base_url('images/banner/banner_kecil2.jpg');?>' border='0' /></a>
		</div>
		<div class="col-sm-3 col-xs-6 my-img-small">
			<a href="#"><img u="image" width='100%' src='<?php echo base_url('images/banner/banner_kecil3.jpg');?>' border='0' /></a>
		</div>
		<div class="col-sm-3 col-xs-6 my-img-small">
			<a href="#"><img u="image" width='100%' src='<?php echo base_url('images/banner/banner_kecil4.jpg');?>' border='0' /></a>
		</div>

	</div>
</div>
<div class='border-myacico'>
	<span class='myacico-title'><h3>MYACICO FOR YOU</h3></span>
	<span class='myacico-title-small'>Our Official Store</span>
</div>
<hr>


<div class="container">
<img src="<?php echo base_url('images/banner/backgroundBaruObi2.png');?>" class="img-responsive" width='100%'>
</div>
<center>
<ul class="list-group">
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/TL-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src='<?php echo base_url('images/banner/aaa01.png');?>'  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src='<?php echo base_url('images/banner/IP-small.png');?>'  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/SD-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/SY-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/MS-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/FJ-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/TS-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/SG-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/LT-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/HX-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/small-iphon-icon.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/DI-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/TC-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/WM-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/BP-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/XV-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/GA-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/XO-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/GT-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/HW-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/LS-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/KA-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/AC-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/AS-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/DL-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/PO-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/KI-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/LK-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/SR-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/SH-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/SK-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/BG-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/lg_logo_white_250x.JPG');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/EM-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/NN-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/RI-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/cisco.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/IA-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/NS-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/TP-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/LV-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/teaserbox_894662862.jpg');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/nokia.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/ZM-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/EA-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/DG-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/VZ-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/MY-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/WS-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/ML-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/TT-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/WF-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/JB-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/NE-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/XA-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/JM-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/TZ-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/KQ-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/KY-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/SV-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/HM-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/EV-small.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/6BbKRrk7.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/playdoh.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/alife.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/razer-logo.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/madcatzlogo.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/bantex1.png');?>"  alt="Smiley face" height="50" width="97"></li>
<li class="list-group-item img-responsive"><img src="<?php echo base_url('images/banner/canon.png');?>"  alt="Smiley face" height="50" width="97"></li>

						</ul></center>
            <hr>
            <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700&subset=latin-ext" rel="stylesheet">



  <!--Item slider text-->
      <center>
        <h3> New Collection </h3>
        <hr>
      </center>

  <!-- Item slider-->
  <div class="container-fluid">

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="carousel carousel-showmanymoveone slide" id="itemslider">
          <div class="carousel-inner">

            <div class="item active">
              <div class="col-xs-12 col-sm-6 col-md-2">
                <a href="#"><img src="https://s12.postimg.org/655583bx9/item_1_180x200.png" class="img-responsive center-block"></a>
                <h4 class="text-center">MAYORAL SUKNJA</h4>
                <h5 class="text-center">4000,00 RSD</h5>
              </div>
            </div>

            <div class="item">
              <div class="col-xs-12 col-sm-6 col-md-2">
                <a href="#"><img src="https://s12.postimg.org/41uq0fc4d/item_2_180x200.png" class="img-responsive center-block"></a>
                <h4 class="text-center">MAYORAL KOŠULJA</h4>
                <h5 class="text-center">4000,00 RSD</h5>
              </div>
            </div>

            <div class="item">
              <div class="col-xs-12 col-sm-6 col-md-2">
                <a href="#"><img src="https://s12.postimg.org/dawwajl0d/item_3_180x200.png" class="img-responsive center-block"></a>
                <span class="badge">10%</span>
                <h4 class="text-center">PANTALONE TERI 2</h4>
                <h5 class="text-center">4000,00 RSD</h5>
                <h6 class="text-center">5000,00 RSD</h6>
              </div>
            </div>

            <div class="item">
              <div class="col-xs-12 col-sm-6 col-md-2">
                <a href="#"><img src="https://s12.postimg.org/5w7ki5z4t/item_4_180x200.png" class="img-responsive center-block"></a>
                <h4 class="text-center">CVETNA HALJINA</h4>
                <h5 class="text-center">4000,00 RSD</h5>
              </div>
            </div>

            <div class="item">
              <div class="col-xs-12 col-sm-6 col-md-2">
                <a href="#"><img src="https://s12.postimg.org/e2zk9qp7h/item_5_180x200.png" class="img-responsive center-block"></a>
                <h4 class="text-center">MAJICA FOTO</h4>
                <h5 class="text-center">4000,00 RSD</h5>
              </div>
            </div>

            <div class="item">
              <div class="col-xs-12 col-sm-6 col-md-2">
                <a href="#"><img src="https://s12.postimg.org/46yha3jfh/item_6_180x200.png" class="img-responsive center-block"></a>
                <h4 class="text-center">MAJICA MAYORAL</h4>
                <h5 class="text-center">4000,00 RSD</h5>
              </div>
            </div>

          </div>

          <div id="slider-control">
          <a class="left carousel-control" href="#itemslider" data-slide="prev"><img src="https://s12.postimg.org/uj3ffq90d/arrow_left.png" alt="Left" class="img-responsive"></a>
          <a class="right carousel-control" href="#itemslider" data-slide="next"><img src="https://s12.postimg.org/djuh0gxst/arrow_right.png" alt="Right" class="img-responsive"></a>
        </div>
        </div>
      </div>
    </div>
  </div>
