<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style_home.css');?>" />


<!-- Owl Carousel Assets slide image collection -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/owl-carousel/owl.carousel.css');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/owl-carousel/owl.theme.css');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/arrow_nav.css');?>" />
<div>


<div class="container">

  <a href="https://www.myacico.co.id/product/alllistItem/laptop%20hp">
  <div style='float:left;width:376px; margin-right:5px'>
    <img src='https://storage.googleapis.com/myacico/image/banner/baruuArtboard%2029%40300x-100.jpg' border='0' width='100%'>
  </div></a>
  <a href="https://www.myacico.co.id/product/detail/1050740/DocuPrint-P455d---A4-Monochrome-Printer-(45-ppm)-Duplex,-Network">
  <div style='float:left;width:376px; margin-right:5px'>
    <img src='https://storage.googleapis.com/myacico/image/banner/3A.jpg' border='0' width='100%'>
  </div></a>
  <a href="https://www.myacico.co.id/product/alllistItem/asus%20zenfone">
  <div style='float:left;width:376px'>
    <img src='https://storage.googleapis.com/myacico/image/banner/1Artboard%2055.jpg' border='0' width='100%'>
  </div></a>
  <div style='clear:both'></div>

  <div class="row" style='margin-top:5px; margin-bottom:10px'>
    <div class="col-xs-12"><img src='https://storage.googleapis.com/myacico/image/banner/banner-58.png' border='0' width='100%'></div>
  </div>

  <div style='padding:15px; font-family:tahoma; font-size:20px; border-top: 3px solid #c40202; color:#535151'>
    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> NEW COLLECTION
  </div>
  <div class="span12" style='background:#ffffff; padding:10px;'>

    <div id="owl-demo" class="owl-carousel">
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

        <div class="item" align="center">

          <a href="<?php echo base_url('product/detail/'. $itemslide2['product_id'].'/'. $itemslide2['alias']);?>" class='link-p' style="color:#fff;">
          <span class="badgeNi">New</span>  <img src="<?php echo $itemslide2['imageurl']; ?>" class='' style='height:100px;'></a>

          <p class="link-nmp box-title" ><a href="<?php echo base_url('product/detail/'. $itemslide2['product_id'].'/'. $itemslide2['alias']);?>"><?php echo $itemslide2['name']; ?></a></p>
            <?php if ($itemslide2['specialprice'] == 0){
            ?> <p class="box-title27">Rp.<?php echo money($itemslide2['pricelist']); ?></p>
            <?php    } else{ ?>
           <p class="box-title2"><s>Rp.<?php echo money($itemslide2['pricelist']); ?></s></p><p><?php echo money($itemslide2['specialprice']); ?></p>

            <?php }
            if($itemslide2['istodayshipping'] == 'Y')
              {
              ?>
              <center>
              <img src="<?php echo base_url('images/general/asap.png');?>" style='height:20px; width: auto;'>
              </center>
              <?php }?>



              <hr>

      </div>
      <?php $n++;  } ?>
    </div>

  </div>

<div style='padding:15px; font-family:tahoma; font-size:20px; border-top: 3px solid #c40202; color:#535151; margin-top:0px; margin-bottom:20px;'>
  <i class="fa fa-dot-circle-o" aria-hidden="true"></i> FEATURED PRODUCT
</div>


	<div class="row" align="center">
      <?php

      foreach($dathome['level_3'] as $key => $itemslide3){ ?>

        <div class="col-md-3 col-sm-6" align="center">
      		<span class="thumbnail text-center" align="center">
              <a href="<?php echo base_url('product/detail/'.$itemslide3['product_id'].'/'. $itemslide3['alias']);?>"><img src="<?php echo $itemslide3['imageurl']; ?>" style='height:100px;'></a>
        			<div class="link-nmp box-title" style='height:40px'><a href="<?php echo base_url('product/detail/'.$itemslide3['product_id'].'/'. $itemslide3['alias']);?>"><?php $nmitem = substr($itemslide3['name'],0,70); echo $nmitem; ?></a></div>
                  <?php if($itemslide3['specialprice'] == 0){
                  ?>   <div class="box-title27" style='color: #8a0202'>Rp.<?php echo money($itemslide3['pricelist']); ?></div>
                <?php  }else{  ?>
                  <p class="box-title2"><s>Rp.<?php echo money($itemslide3['pricelist']); ?></s></p><div class="box-title2" style='color: #8a0202'><p>Rp.<?php echo money($itemslide3['specialprice']); ?></p></div>
              <?php } ?>
          <?php if($itemslide3['discount'] == 0){
            echo "";
          } else { ?>
            <span class="badgeNi3" style="color:white;">  <?php echo $itemslide3['discount']; ?> %</span>
          <?php } ?>


          <div class="ratings" style='text-align: center; color:#d98c13;'>
              <span class="glyphicon glyphicon-star"></span>
              <span class="glyphicon glyphicon-star"></span>
              <span class="glyphicon glyphicon-star"></span>
              <span class="glyphicon glyphicon-star"></span>
              <span class="glyphicon glyphicon-star-empty"></span>
          </div>
      <?php
          if($itemslide3['istodayshipping'] == 'Y')
          {
          ?>
            <center>
            <img src="<?php echo base_url('images/general/asap.png');?>" style='height:20px; width: auto;'>
            </center>
          <?php }?>
          </span>
        </div>

    <?php } ?>


  		<!-- END PRODUCTS -->
	</div>

  <div style='padding:15px; font-family:tahoma; font-size:20px; border-top: 3px solid #c40202; color:#535151; margin-top:0px; margin-bottom:10px;'>
    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> <?php echo $lang_gad; ?>
  </div>
  <a href="https://myacico.co.id/product/detail/1057595/APPLE-iPhone-7-Plus-%5b256GB%5d---Jet-Black">
  <div style='float:left;width:650px; height:auto; margin-right:5px'>
    <img src='<?php echo base_url('images/demo/banner-a1.jpg');?>' border='0' width='100%' height = '190px;'>
  </div></a>
  <a href="https://myacico.co.id/product/detail/1065088/XIAOMI-Mi-A1-64GB/4GB---Gold">
  <div style='float:left;width:auto; margin-right:5px'>
    <img src='<?php echo base_url('images/general/xiaomi_copy.jpg');?>' border='0' width='auto' height='190px'>
  </div></a>
  <div style='float:left;width:auto'>
    <img src='<?php echo base_url('images/general/oppo_copy.jpg');?>' border='0' width='auto' height='190px'>
  </div>
  <div style='clear:both'></div>

  <div class="span12" style='background:#e9f6fe; padding:10px; margin-top:10px'>

    <div class="promo-front owl-carousel" align="center">
      <?php

      $jmlslide0=count($dathome2['topProduct'][1]['topProduct']);
      $n=1;
      foreach($dathome2['topProduct'][1]['topProduct'] as $key => $itemslide0){
        if($n=="$jmlslide0"){
          $active='active';
        }else{
          $active='';
        }
        ?>

      <div class="item" style='background:#ffffff; padding:10px; height:240px; text-align:center'>

          <a href="<?php echo base_url('product/detail/'. $itemslide0['product_id'].'/'. $itemslide0['alias']);?>"><center><img src="<?php echo $itemslide0['imageurl']; ?>"  style="height:120px; width: auto"></center></a>

              <p class="box-title" style='color: #4b4b4b; height:35px'><?php
              $str1 = $itemslide0['name'];
              $str2 = substr($str1, 0, 41);
              $str = strlen($str2);
              if($str <= 40){
               echo $itemslide0['name'];
              }else{
                // $str = substr($str, 0, 49);
                 echo $str2."....";
              }
              ?></span></p>
              <?php if($itemslide0['specialprice'] == 0){
              ?>   <div class="box-title2" style='color: #8a0202'>Rp.<?php echo money($itemslide0['pricelist']); ?></div>
            <?php  }else{  ?>
              <p class="box-title2"><s >Rp.<?php echo money($itemslide0['pricelist']); ?></s></p><div class="box-title2" style='color: #8a0202; '><p >Rp.<?php echo money($itemslide0['specialprice']); ?></p></div>
          <?php } ?>
          <?php if($itemslide0['discount'] == 0){
            echo "";
          } else { ?>

            <span class="badgeNi34" style="color:white;">  <?php echo $itemslide0['discount']; ?> %</span>

          <?php }
          if($itemslide0['istodayshipping'] == 'Y')
            {
            ?>
            <center>
              <img src="<?php echo base_url('images/general/asap.png');?>" style='height:20px; width: auto;'>
           </center>
            <?php }?>
      </div>
      <?php $n++;  } ?>
    </div>

  </div>


  <div style='padding:15px; font-family:tahoma; font-size:20px; border-top: 3px solid #c40202; color:#535151; margin-top:20px; margin-bottom:10px;'>
    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> <?php echo $lang_komp; ?>
  </div>
  <a href="https://myacico.co.id/product/detail/1053255/GIGABYTE-Laptop-Gaming-Sabre-15-%5b9WP45K005-ID-A-003%5d">
  <div style='float:left;width:650px; height:auto; margin-right:5px'>
    <img src='<?php echo base_url('images/demo/banner-b31.jpg');?>' border='0' width='100%' height = '190px;'>
  </div></a>
  <a href="https://myacico.co.id/product/detail/1066350/CANON-Multifunction-Inkjet-Printer-%5bE410%5d---Black">
  <div style='float:left;width:auto; margin-right:5px'>
    <img src='<?php echo base_url('images/demo/banner-b2.jpg');?>' border='0' width='auto' height='190px'>
  </div></a>
  <a href="https://myacico.co.id/product/detail/1065832/DELL-Desktop-All-In-One-Inspiron-3264">
  <div style='float:left;width:auto'>
    <img src='<?php echo base_url('images/demo/banner-b3.jpg');?>' border='0' width='auto' height='190px'>
  </div></a>
  <div style='clear:both'></div>

  <div class="span12" style='background:#fdf0db; padding:10px; margin-top:10px'>

    <div class="promo-front owl-carousel" align="center">

      <?php

      $jmlslide1=count($dathome2['topProduct'][0]['topProduct']);
      $n=1;
      foreach($dathome2['topProduct'][0]['topProduct'] as $key => $itemslide1){
        if($n=="$jmlslide1"){
          $active='active';
        }else{
          $active='';
        }
        ?>
      <div class="item" style='background:#ffffff; padding:10px; height:240px;'>

    <a href="<?php echo base_url('product/detail/'. $itemslide1['product_id'].'/'. $itemslide1['alias']);?>"><img src="<?php echo $itemslide1['imageurl']; ?>"  style="height:120px; width: auto"></a>
        <p class="box-title" style='color: #4b4b4b; height:35px'><?php
            $str1 = $itemslide1['name'];
            $str2 = substr($str1, 0, 41);
            $str = strlen($str2);
            if($str <= 40){
            echo $itemslide1['name'];
            }else{
              // $str = substr($str, 0, 49);
              echo $str2."....";
            }
            ?></p>
            <?php if($itemslide1['specialprice'] == 0){
            ?>   <div class="box-title2" style='color: #8a0202'>Rp.<?php echo money($itemslide1['pricelist']); ?></div>
          <?php  }else{  ?>
          <p class="box-title2"><s >Rp.<?php echo money($itemslide1['pricelist']); ?></s></p><div class="box-title2" style='color: #8a0202; '><p >Rp.<?php echo money($itemslide1['specialprice']); ?></p></div>
          <?php } ?>
          <?php if($itemslide1['discount'] == 0){
          echo "";
          } else { ?>
          <span class="badgeNi34" style="color:white;">  <?php echo $itemslide1['discount']; ?> %</span>
          <?php }
          if($itemslide1['istodayshipping'] == 'Y')
              {
              ?>
              <center>
                <img src="<?php echo base_url('images/general/asap.png');?>" style='height:20px; width: auto;'>
             </center>
              <?php }?>

      </div>
      <?php $n++;  } ?>
    </div>

  </div>

  <div style='padding:15px; font-family:tahoma; font-size:20px; border-top: 3px solid #c40202; color:#535151; margin-top:20px; margin-bottom:10px;'>
    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> <?php echo $lang_house; ?>
  </div>
  <a href="https://myacico.co.id/product/detail/1072101/PANASONIC-Air-Conditioner-Split-%5bCS-YN9SKJ%5d">
  <div style='float:left;width:643px; height:auto; margin-right:5px'>
    <img src='<?php echo base_url('images/demo/banner-c1.jpg');?>' border='0' width='100%' height = '190px;'>
  </div></a>
  <a href="https://myacico.co.id/product/detail/1049309/SEVERIN-Coffee-Maker-%5bKV8090%5d---Stainless-steel">
  <div style='float:left;width:auto; margin-right:5px'>
    <img src='<?php echo base_url('images/demo/banner-c2.jpg');?>' border='0' width='auto' height='190px'>
  </div></a>
  <a href="https://myacico.co.id/product/detail/1056241/MASPION-Mastro-Grill-32-cm---Red">
  <div style='float:left;width:auto'>
    <img src='<?php echo base_url('images/demo/banner-c3.jpg');?>' border='0' width='auto' height='190px'>
  </div></a>
  <div style='clear:both'></div>

  <div class="span12" style='background:#f1fae7; padding:10px; margin-top:10px'>

    <div class="promo-front owl-carousel">
      <?php

      $jmlslide2=count($dathome2['topProduct'][4]['topProduct']);
      $n=1;
      foreach($dathome2['topProduct'][4]['topProduct'] as $key => $itemslide2){
        if($n=="$jmlslide2"){
          $active='active';
        }else{
          $active='';
        }
        ?>
      <div class="item" style='background:#ffffff; padding:10px; height:240px;'>

        <center><a href="<?php echo base_url('product/detail/'. $itemslide2['product_id'].'/'. $itemslide2['alias']);?>"><img src="<?php echo $itemslide2['imageurl']; ?>"  style="height:120px; width: auto"></a>
        </center>
            <p class="box-title" style='color: #4b4b4b; height:35px'><?php

                $str1 = $itemslide2['name'];
                $str2 = substr($str1, 0, 41);
                $str = strlen($str2);
                if($str <= 40){
                echo $itemslide2['name'];
                }else{
                  echo $str2."....";
                }
                ?></p>
                <?php if($itemslide2['specialprice'] == 0){
                ?>   <div class="box-title2" style='color: #8a0202'>Rp.<?php echo money($itemslide2['pricelist']); ?></div>
              <?php  }else{  ?>
              <p class="box-title2"><s >Rp.<?php echo money($itemslide2['pricelist']); ?></s></p><div class="box-title2" style='color: #8a0202; '><p >Rp.<?php echo money($itemslide2['specialprice']); ?></p></div>
              <?php } ?>
              <?php if($itemslide2['discount'] == 0){
              echo "";
              } else { ?>
              <span class="badgeNi34" style="color:white;">  <?php echo $itemslide2['discount']; ?> %</span>
              <?php }
              if($itemslide2['istodayshipping'] == 'Y')
              {
              ?>
              <center>
                <img src="<?php echo base_url('images/general/asap.png');?>" style='height:20px; width: auto;'>
             </center>
              <?php }?>


      </div>
      <?php $n++;  } ?>
    </div>

  </div>



  <div style='padding:15px; font-family:tahoma; font-size:20px; border-top: 3px solid #c40202; color:#535151; margin-top:20px; margin-bottom:10px;'>
    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> <?php echo $lang_hob; ?>
  </div>
  <a href="https://myacico.co.id/product/detail/1061320/DJI-Mavic-Pro---Grey">
  <div style='float:left;width:653px; height:auto; margin-right:5px'>
    <img src='<?php echo base_url('images/demo/banner-d1.jpg');?>' border='0' width='100%' height = '190px;'>
  </div></a>
  <a href="">
  <div style='float:left;width:auto; margin-right:5px'>
    <img src='<?php echo base_url('images/demo/banner-d2.jpg');?>' border='0' width='auto' height='190px'>
  </div></a>
  <div style='float:left;width:auto'>
    <img src='<?php echo base_url('images/demo/banner-d3.jpg');?>' border='0' width='auto' height='190px'>
  </div>
  <div style='clear:both'></div>

  <div class="span12" style='background:#fde3e0; padding:10px; margin-top:10px'>

    <div class="promo-front owl-carousel">
      <?php

      $jmlslide2=count($dathome2['topProduct'][3]['topProduct']);
      $n=1;
      foreach($dathome2['topProduct'][3]['topProduct'] as $key => $itemslide2){
        if($n=="$jmlslide2"){
          $active='active';
        }else{
          $active='';
        }
        ?>
      <div class="item" style='background:#ffffff; padding:10px; height:240px;'>

        <center><a href="<?php echo base_url('product/detail/'. $itemslide2['product_id'].'/'. $itemslide2['alias']);?>"><img src="<?php echo $itemslide2['imageurl']; ?>"  style="height:120px; width: auto"></a>
        </center>
        <p class="box-title" style='color: #4b4b4b; height:35px'><?php
                $str1 = $itemslide2['name'];
                $str2 = substr($str1, 0, 40);
                $str = strlen($str2);
                if($str <= 39){
                echo $itemslide2['name'];
                }else{
                  // $str = substr($str, 0, 49);
                  echo $str2."....";
                }
                ?></p>
        <p class="box-title3" style='color: #111111'>Rp.<?php echo money($itemslide2['pricelist']); ?></p>
        <?php if($itemslide2['istodayshipping'] == 'Y')
            {
            ?>
            <center>
              <img src="<?php echo base_url('images/general/asap.png');?>" style='height:20px; width: auto;'>
           </center>
            <?php }?>

      </div>
      <?php $n++;  } ?>
    </div>

  </div>



  <div style='padding:15px; font-family:tahoma; font-size:20px; border-top: 3px solid #c40202; color:#535151; margin-top:20px; margin-bottom:10px;'>
    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> AUDIO & VISUAL
  </div>
  <a href="https://myacico.co.id/product/detail/1053741/FUJIFILM-Body-Camera-Mirrorless-include-Lens-%5bX-PRO2-plus-Lens-XF35-f2/0%5d---Black">
  <div style='float:left;width:650px; height:auto; margin-right:5px'>
    <img src='<?php echo base_url('images/demo/banner-e1.jpg');?>' border='0' width='100%' height = '190px;'>
  </div></a>
  <a href="https://myacico.co.id/product/detail/1063937/SENNHEISER-Headphone-%5bHD-201%5d">
  <div style='float:left;width:auto; margin-right:5px'>
    <img src='<?php echo base_url('images/demo/banner-e2.jpg');?>' border='0' width='auto' height='190px'>
  </div></a>
  <a href="https://myacico.co.id/product/detail/1065654/SHARP-LCD-TV-40-inch-%5bLC-40LE185I%5d">
  <div style='float:left;width:auto'>
    <img src='<?php echo base_url('images/demo/banner-e3.jpg');?>' border='0' width='auto' height='190px'>
  </div></a>
  <div style='clear:both'></div>

  <div class="span12" style='background:#f1e0fd; padding:10px; margin-top:10px'>

    <div class="promo-front owl-carousel">
      <?php

      $jmlslide2=count($dathome2['topProduct'][2]['topProduct']);
      $n=1;
      foreach($dathome2['topProduct'][2]['topProduct'] as $key => $itemslide2){
        if($n=="$jmlslide2"){
          $active='active';
        }else{
          $active='';
        }
        ?>
      <div class="item" style='background:#ffffff; padding:10px; height:240px'>

        <center><a href="<?php echo base_url('product/detail/'. $itemslide2['product_id'].'/'. $itemslide2['alias']);?>"><img src="<?php echo $itemslide2['imageurl']; ?>"  style="height:120px; width: auto"></a>
        </center>
            <p class="box-title" style='color: #4b4b4b; height:35px'><?php
              $str1 = $itemslide2['name'];
              $str2 = substr($str1, 0, 39);
              $str = strlen($str2);
              if($str <= 38){
              echo $itemslide2['name'];
              }else{
                // $str = substr($str, 0, 49);
                echo $str2."....";
              }
              ?></p>
              <p class="box-title3" style='color: #111111'>Rp.<?php echo money($itemslide2['pricelist']); ?></p>
              <?php if($itemslide2['istodayshipping'] == 'Y')
            {
            ?>
            <center>
              <img src="<?php echo base_url('images/general/asap.png');?>" style='height:20px; width: auto;'>
           </center>
            <?php }?>
      </div>
      <?php $n++;  } ?>
    </div>

  </div>

  <div style='padding:15px; font-family:tahoma; font-size:20px; border-top: 3px solid #c40202; color:#535151; margin-top:20px; margin-bottom:10px;'>
    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> <?php echo $lang_sel; ?>
  </div>
	<div style='text-align: center; padding:15px 0px 15px 30px; border-radius:0px 0px 10px 0px; margin-bottom:20px;'>
    	<!-- BEGIN PRODUCTS -->
  <center>
<ul class="list-group" style="padding-left:0px;">

  <?php $bloop = 0; foreach($dathome['level_4'] as $datBrand){

    if($bloop <20){
    ?>
    <a href="<?php echo base_url(''.$datBrand['imageurl2'].'');?>"/><li class="list-group-item img-responsive"><img src="<?php echo $datBrand['imageurl'];?>" class="asd1" alt="Smiley face" height="80%" width="75"></li>
  <?php } $bloop++; } ?>

						</ul>
            <br>
            <?php echo anchor('brand',$lang_sea.' <span style="font-size:24px;"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>', array('class'=>'my-btn-brand')); ?>
         </center>
          </div>



  </div>

<!-- s: Slider Product -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/slider-product.css');?>">
<!-- e: Slider Product -->

<script>

$(document).ready(function() {
    var api2 = api_base_url +'/home/view';

    $.ajax({
        type:"GET",

        success: function(data){
          // console.log('data2',data.level_1)
					// console.log('data23',data.level_1[1])
					// 	console.log('data untuk level 2',data.level_2)
          //   console.log('data untuk level 22',data)
          //   console.log('data untuk level 2i',data.level_2[0])
            function formatNumber (num) {
                return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")
            }
            function currencyFormat (num) {
                return "Rp." + num.toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
            }

            function currencyFormatDE (num) {
                return num
                   .toFixed(2) // always two decimal digits
                   .replace(".", ",") // replace decimal point character with ,
                   .replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.") // use . as a separator
            }

						var lvl20 = $('.lvl20');
            var lvl20p = $('.lvl20p');
              var lvl20h = $('.lvl20h');
            lvl20.append(
            '<img src="'+data.level_2[0].imageurl+'" class="img-responsive center-block" alt="No Images Found">'
            )
            lvl20p.append(
              '<p>'+data.level_2[0].name+'</p>'
            )
            lvl20h.append(
              '<p>Rp.'+(formatNumber(data.level_2[0].pricelist))+'</p>'
            )

            var lvl21 = $('.lvl21');
            var lvl21p = $('.lvl21p');
              var lvl21h = $('.lvl21h');
              lvl21.append(
              '<img src="'+data.level_2[1].imageurl+'" class="img-responsive center-block" alt="No Images Found">'
              )
              lvl21p.append(
                '<p>'+data.level_2[1].name+'</p>'
              )
            lvl21h.append(
                '<p>Rp.'+(formatNumber(data.level_2[1].pricelist))+'</p>'
              )

              var lvl23 = $('.lvl23');
              var lvl23p = $('.lvl23p');
                var lvl23h = $('.lvl23h');
                console.log('data23', data.level_2[2])
                lvl23.append(
                '<img src="'+data.level_2[2].imageurl+'" class="img-responsive center-block" alt="No Images Found">'
                )
                lvl23p.append(
                  '<p>'+data.level_2[2].name+'</p>'
                )
              lvl23h.append(
                  '<p>Rp.'+(formatNumber(data.level_2[2].pricelist))+'</p>'
                )

                var lvl24 = $('.lvl24');
                var lvl24p = $('.lvl24p');
                  var lvl24h = $('.lvl24h');

                  lvl24.append(
                  '<img src="'+data.level_2[3].imageurl+'" class="img-responsive center-block" alt="No Images Found">'
                  )
                  lvl24p.append(
                    '<p>'+data.level_2[3].name+'</p>'
                  )
                lvl24h.append(
                    '<p>Rp.'+(formatNumber(data.level_2[3].pricelist))+'</p>'
                  )

                  var lvl25 = $('.lvl25');
                  var lvl25p = $('.lvl25p');
                    var lvl25h = $('.lvl25h');

                    lvl25.append(
                    '<img src="'+data.level_2[4].imageurl+'" class="img-responsive center-block" alt="No Images Found">'
                    )
                    lvl25p.append(
                      '<p>'+data.level_2[4].name+'</p>'
                    )
                  lvl25h.append(
                      '<p>Rp.'+(formatNumber(data.level_2[4].pricelist))+'</p>'
                    )

                    var lvl26 = $('.lvl26');
                    var lvl26p = $('.lvl26p');
                      var lvl26h = $('.lvl26h');

                      lvl26.append(
                      '<img src="'+data.level_2[5].imageurl+'" class="img-responsive center-block" alt="No Images Found">'
                      )
                      lvl26p.append(
                        '<p>'+data.level_2[5].name+'</p>'
                      )
                    lvl26h.append(
                        '<p>Rp.'+(formatNumber(data.level_2[5].pricelist))+'</p>'
                      )

                      var lvl3 = $('.lvl3');
                      var lvl3n = $('.lvl3n');
                        var lvl3h = $('.lvl3h');

                        lvl3.append(
                        '<img src="'+data.level_3[0].imageurl+'" class="img-responsive center-block" alt="No Images Found">'
                        )
                        lvl3n.append(
                          '<p>'+data.level_3[0].name+'</p>'
                        )
                      lvl3h.append(
                          '<p>Rp.'+(formatNumber(data.level_3[0].pricelist))+'</p>'
                        )

                        var lvl31 = $('.lvl31');
                        var lvl31n = $('.lvl31n');
                          var lvl31h = $('.lvl31h');

                          lvl31.append(
                          '<img src="'+data.level_3[1].imageurl+'" class="img-responsive center-block" alt="No Images Found">'
                          )
                          lvl31n.append(
                            '<p>'+data.level_3[1].name+'</p>'
                          )
                        lvl31h.append(
                            '<p>Rp.'+(formatNumber(data.level_3[1].pricelist))+'</p>'
                          )



     var rumah = $('.rumah');

$("#hapus").val(null);
            data.level_1.forEach(function(p){
     rumah.append(
			 '<p>'+p.imageurl+'</p>'
        )

     });
            },
        dataType: "json",
        url: api2});


    console.log('asd',api2);

});
/*slider product New Collection */
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

<script>
// slide produk
$('#myCarouselProduct').carousel({
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

function addWishlist(id,name,imageurl){
	var dataString = 'id='+id;

	if(token){

	$.ajax
		({
		type: "POST",
		url: "<?php echo site_url('product/addWishlist'); ?>",
		data: dataString,
		success:function(data){

				if(data==1){

					$.confirm({
						title: name,
						content: '<img src="'+imageurl+'" style="margin-bottom:10px">'+'<p>Item berhasil ditambahkan kedalam wishlist<p>',
						autoClose: 'close|3000',
						buttons: {
							close: function () {
								//$.alert('action is canceled');
							}
						},
						closeIcon: true,
						closeIconClass: 'fa fa-close'
					});
				}else{
					$.dialog({
						title: name,
						content: 'Item gagal ditambahkan!',
						autoClose: 'close|50000',
						buttons: {
							close: function () {
								//$.alert('action is canceled');
							}
						},
						closeIcon: true,
						closeIconClass: 'fa fa-close'
					});
				}
			}
		});

	}else{

    $.ajax(
      {
        type: "POST",
        url: "<?php echo site_url('customer/signin'); ?>",
        data: dataString,
        success:function(data){
          console.log('oooo',data);

        window.location.replace(base_url+"customer/signin/"+id);
      }

    });
	}
}

 function addToCart(m_product_id,pricelist,imageurl,name,stock,weight){

  var jmlItem = 1;
	var dataString = 'm_product_id='+ m_product_id+'&pricelist='+ pricelist+'&imageurl='+ imageurl+'&name='+ name+'&stock='+stock+'&jmlItem='+jmlItem+'&weight='+weight;

	if(jmlItem<=0){
		$.dialog({
			title: 'Alert!',
			content: '<img src="'+imageurl+'" style="margin-bottom:10px"><p>Silakan masukan jumlah item dengan benar</p>',
			autoClose: 'close|3000',
			buttons: {
				close: function () {
					//$.alert('action is canceled');
				}
			},
			closeIcon: true,
			closeIconClass: 'fa fa-close'
		});

	}else{

    //Jika sudah login
		var cookie = document.cookie.split('x-auth=');
		if(cookie.length > 1){
			var token = cookie[1].split(';').shift();
			var apiurl = api_base_url +'/order/cart/additem';
			var m_product_id = m_product_id;
			var qty = jmlItem;
			var pricelist = pricelist;
			var weight = weight;

			var success = function(r){

				$.confirm({
					title: name,
					content: '<img src="'+imageurl+'" style="margin-bottom:10px">'+'<p>'+jmlItem+' Item berhasil ditambahkan<p>',
					autoClose: 'close|3000',
					buttons: {
						close: function () {
							//$.alert('action is canceled');
						}
					},
					closeIcon: true,
					closeIconClass: 'fa fa-close'
				});

				//Buat update cart, fungsi ini ada di file header.php
				totalCart();
			};

			$.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify(
				{
					"productId":m_product_id,
					"qty":qty,
					"price":pricelist,
					"weightPerItem":weight
				}
			) , url: apiurl, headers: {"token":token}, success: success, error: error });

			var error = function(er){
			  console.log('OK:', er);
			  $.alert({
				title: 'Alert!',
				content: 'koneksi tidak berhasil, silahkan coba lagi!',
			  });
			};


		}else{

			$.ajax
			({
			type: "POST",
			url: "<?php echo site_url('cart/addToCart'); ?>",
			data: dataString,
			success:function(data){

					if(data=='stockkosong'){
						$.dialog({
							title: name,
							content: '<img src="'+imageurl+'" style="margin-bottom:10px">'+'<p>Item gagal ditambahkan, jumlah melebihi stock yang ada!</p>',
							autoClose: 'close|3000',
							buttons: {
								close: function () {
									//$.alert('action is canceled');
								}
							},
							closeIcon: true,
							closeIconClass: 'fa fa-close'
						});
					}else
					if(data!='gagal'){

						$(".totalCart").html(data);
						$.confirm({
							title: name,
							content: '<img src="'+imageurl+'" style="margin-bottom:10px"><p>'+jmlItem+' Item berhasil ditambahkan kedalam keranjang<p>',
							autoClose: 'close|3000',
							buttons: {
								close: function () {
									//$.alert('action is canceled');
								}
							},
							closeIcon: true,
							closeIconClass: 'fa fa-close'
						});
					}else{
						$.dialog({
							title: name,
							content: '<img src="'+imageurl+'" style="margin-bottom:10px"><p>Item gagal ditambahkan!</p>',
							autoClose: 'close|3000',
							buttons: {
								close: function () {
									//$.alert('action is canceled');
								}
							},
							closeIcon: true,
							closeIconClass: 'fa fa-close'
						});
					}
				}
			});


		}
	}
}

$(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    if (scroll > 100) {
      $('#banner-left').css('top', '150px');
    } else {
      $('#banner-left').css('top', '300px');
    }
    console.log('scroll: ', scroll);
});

</script>

<!-- Demo -->
<script src="<?php echo base_url('assets/owl-carousel/owl.carousel.js');?>"></script>
<script>
$(document).ready(function() {
  $("#owl-demo").owlCarousel({
    autoPlay: 3000,
    navigation: true,
    items : 6,
    itemsDesktop : [1199,3],
    itemsDesktopSmall : [979,3]
  });

  $(".promo-front").owlCarousel({
    autoPlay: 3000,
    items : 6,
    itemsDesktop : [1199,3],
    itemsDesktopSmall : [979,3]
  });
});
</script>
