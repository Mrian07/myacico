
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/slider/sliderResponsive.css');?>" />
		<link rel="stylesheet" href="<?php echo base_url('assets/css/style_sidenav.css');?>">

<!-- <div style='background:#dad8d8'> -->

<div class="container">
  <div class="row">
    <div class="col-xs-7" style='padding-right: 0'>
      <!-- Slider 1 -->
      <div class="slider" id="slider1"  style='height: 292px;'>
          <!-- Slides -->

          <?php
          $jmlslode=count($dathomeLvl);
          $n=1;
          foreach($dathomeLvl as $itemslide){
            if($n=="$jmlslode"){
              $active='active';
            }else{
              $active='';
            }
            ?>
            <div style='height: 292px;'>
                <!--<a href="<?php //echo base_url('product/detail/'. $itemslide['product_id'].'/'. $itemslide['alias']);?>"><img src='<?php //echo $itemslide['imageurl']; ?>'class="img-responsive">-->
                  <a href="<?php echo $itemslide['link'];?>"><img src='<?php echo $itemslide['imageurl']; ?>' class="img-responsive" style="height:292px; width: 100%;">
                   </a> </div>
              <!-- <div style="background-image:url(<?php // echo $itemslide['imageurl']; ?>)" class="img-responsive"></div></a> -->
            <?php $n++; } ?>

          <!-- The Arrows -->
          <i class="left" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path></svg></i>
          <i class="right" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) "></path></svg></i>
          <!-- Title Bar -->
          <!-- <span class="titleBar">
              <h1>This Slider has all default settings.</h1>
          </span> -->
      </div>

    </div>
    <div class="col-xs-5 padding-1">

      <a href="https://www.myacico.co.id/product/alllistItem/DELL%20Monitor">
      <div style='margin-bottom:5px; margin-left:-10px; paddig-left:0px'><img src="<?php echo base_url('images/demo/ini.jpg');?>" width="100%" height="auto"></div></a>
      <a href="https://www.myacico.co.id/product/alllistItem/Printer%20BROTHER">
      <div style='margin-bottom:5px; margin-left:-10px; paddig-left:0px'><img src="<?php echo base_url('images/demo/itu.jpg');?>" width="100%" height="auto"></div></a>
      <!-- <div style='margin-left:5px;'><img src="https://s1.postimg.org/6g8wm25b1r/ps4.png" width="100%" height="170"></div> -->


    </div>
  </div>
</div>



<script src="<?php echo base_url('assets/slider/sliderResponsive.js');?>"></script>
<script>
$(document).ready(function() {

  $("#slider1").sliderResponsive({
  // Using default everything
    // slidePause: 5000,
    // fadeSpeed: 800,
    // autoPlay: "on",
    // showArrows: "off",
    // hideDots: "off",
    // hoverZoom: "on",
    // titleBarTop: "off"
  });

  $("#slider2").sliderResponsive({
    fadeSpeed: 300,
    autoPlay: "off",
    showArrows: "on",
    hideDots: "on"
  });

  $("#slider3").sliderResponsive({
    hoverZoom: "off",
    hideDots: "on"
  });

});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
