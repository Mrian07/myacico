
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/slider/sliderResponsive.css');?>" />
<style>

#slider2 {
    max-width: 30%;
    margin-right: 20px;
}

.row2Wrap {
    display: flex;
}

.content {
    padding: 50px;
    margin-bottom: 100px;
}

html {
    height: 100%;
    box-sizing: border-box;
}
*, *:before, *:after {
    box-sizing: inherit;
}
h1, h2, h3 {
    font-family: 'Crimson Text', sans-serif;
    font-weight: 100;
}
/*body {
    font: 15px 'Titillium Web', Arial, sans-serif;
    height: 100%;
    color: #aaa;
    margin: 0;
    padding: 0;
}*/

.content {
    padding: 10px 15vw;
}

.padding-0{
    padding-right:0;
    padding-left:0;
}

.padding-1{
    padding-right:0;
    padding-left:0;
}
</style>

<div style='background:#dad8d8'>
<div class="container">
  <div class="row">
    <div class="col-sm-8 padding-0">
      <!-- Slider 1 -->
      <div class="slider" id="slider1">
          <!-- Slides -->

          <?php
          $jmlslode=count($dathome['level_1']);
          $n=1;
          foreach($dathome['level_1'] as $key => $itemslide){
            if($n=="$jmlslode"){
              $active='active';
            }else{
              $active='';
            }
            ?>
              <div style="background-image:url(<?php echo $itemslide['imageurl']; ?>)"></div>
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
    <div class="col-sm-4 padding-1">
      <!-- <div class="row">
        <div class="col-sm-12" style="background:#f1f1f1; margin-left:-2px; padding:0px;">

        <img src="https://s1.postimg.org/4zblqmyx27/Artboard_3.jpg"  alt="Smiley face" width="50%" height="200">
    <img src="https://s1.postimg.org/7u49wfhja7/Artboard_4.jpg"  alt="Smiley face" width="48%" height="200">
        </div>


    </div> -->

      <div style='margin-bottom:5px; margin-left:5px;'><img src="https://s1.postimg.org/2m0533n5en/Iphone.png" alt="Smiley face" width="100%" height="160"></div>
      <div style='margin-bottom:5px; margin-left:5px;'><img src="https://s1.postimg.org/1mk1pxk6j3/cctv.png" alt="Smiley face" width="100%" height="160"></div>
      <div style='margin-left:5px;'><img src="https://s1.postimg.org/6g8wm25b1r/ps4.png" alt="Smiley face" width="100%" height="170"></div>


  </div>
</div>
</div>
</div>
<br><br>


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
