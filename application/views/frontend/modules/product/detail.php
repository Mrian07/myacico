<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/pop_cart.css');?>" />
<style>
    .melayang:hover {
    color: hotpink;
}
.xzoom{
  width: 278px;
  /*top: -41.2038px;
  left: 0px;
  position: absolute;*/
}
.xzoom-source{
  margin-left: 7px;

}

</style>
        <!-- style="width: 100%!important position: absolute; width: 284px; top: -41.2038px; left: 0px;" -->
<?php
$url_share="https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

      //$text = str_replace("/[^A-Za-z0-9\-\']/", '', $url_share);
        $string = str_replace('(', '_', $url_share);
        $string = str_replace(')', '_', $string);
        $string = str_replace('[', '_', $string);
        $string = str_replace(']', '_', $string);
     // die(print_r($string));
?>

      <?php
          $totalRate= $rating['star1']+$rating['star2']+$rating['star3']+$rating['star4']+$rating['star5'];
      ?>
      <!--Star-->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

<script type="text/javascript" src="<?php echo base_url('assets/productpopup/dist/xzoom.min.js');?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/productpopup/css/xzoom.css');?>" media="all" />
<link type="text/css" rel="stylesheet" media="all" href="<?php echo base_url('assets/productpopup/magnific-popup/css/magnific-popup.css');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/owl-carousel/owl.carousel.css');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/owl-carousel/owl.theme.css');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/detail-product.css');?>">
<script type="text/javascript" src="<?php echo base_url('assets/productpopup/magnific-popup/js/magnific-popup.js');?>"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<div class="container font2">
<div class='my-bg-title'>
    <i class="fa fa-angle-right" aria-hidden="true"></i> DETAIL PRODUCT
</div>




<div ng-controller="detailCnt">

<div class="row">

  <div class="col-sm-3">
<!-- style="width: 100% position: absolute; width: 284px; top: -41.2038px; left: 0px;" -->
    <?php if (isset($img[0])) { ?>
      <img id="xzoom-magnific" class="xzoom"

          src="<?php echo $img[0]; ?>"
          onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';"
          xoriginal="<?php echo $img[0]; ?>" />
    <?php } else {
      $img[0] = '';
    } ?>

    <div class="xzoom-thumbs">
      <?php
        if (isset($img[0])) {
          foreach ($img as $gmbr) {
      ?>
        <a href="<?php echo $gmbr;?>">
          <img class="xzoom-gallery" width="80"
              src="<?php echo $gmbr;?>"
              onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';"
              xpreview="<?php echo $gmbr;?>" title="">
        </a>
      <?php
          }
        }
      ?>
    </div>
  </div>

  <div class="col-sm-6">
    <h5 style="margin-bottom: 0px;">
      <?php echo $name; ?>
    </h5>
<!--    <span> Dijual Oleh : </span> <span style="color:red"> myACICO </span>-->
    <div class="ratting-container">
      <div id="rateYo" class="detail-prod-rating"></div><span class="ratting-text">(<?php echo$totalRate;?>) <a href=""><i class="fa fa-pencil" aria-hidden="true"></i> Tulis ulasan</a></span>

      <div class="clearfix"></div>
    </div>

    <table class="table table-detail-prod" border="0">
      <tbody>
        <?php
          if($specialPrice == 0 ){
            echo "
              <tr>
                <td>Harga:</td>
                <td><span class='price-list'>Rp ".money($pricelist)."</span></td>
              </tr>";
          }else{
            echo "
              <tr>
              <td>Harga:</td>
              <td>
                <span class='price-list'>Rp ".money($specialPrice)."</span>
                <span class='discount'>".money($discount)."% OFF</span>
                <span>Hemat: <span style='color: #8a0202; font-weight: bold'>Rp ".money($pricelist - $specialPrice)."</span></span>
              </td>
            </tr>
            <tr>
              <td>Harga Awal:</td>
              <td><s>Rp ".money($pricelist)."</s></td>
            </tr>";
          }
        ?>
        <tr>
          <td>Status:</td>
          <td style="color: #4ba240">Tersedia.</td>
        </tr>
        <tr>
          <td></td>
          <td>Ingin barang anda sampai dalam <span style="color:red;">2 hari</span>?<br>Pilih myacico courier bagi anda yang tinggal di jakarta </td>
        </tr>
        <!-- <tr>
          <td>Warna:</td>
          <td><div class="opt-color black"></div></td>
        </tr>
        <tr>
          <td>Kapasitas:</td>
          <td><span class="capacity">128GB</span></td>
        </tr> -->
        <tr>
          <td>Product Highlight:</td>
          <td class="hook-clear-ul"><?php echo $highlight;  ?></td>
        </tr>
        <tr>
          <td></td>
          <td>
            <span style="border-bottom: 1px solid #c81423; font-weight: bold">Butuh bantuan?</span>
            <ul style="list-style:none; margin-top: 10px; padding: 0">
              <a class="link-need-help" href=""><li><i class="fa fa-envelope-o color-red" aria-hidden="true"></i> Hubungi Kami</li></a>
              <a class="link-need-help" href=""><li><i class="fa fa-comment-o color-red" aria-hidden="true"></i> Live Chat</li></a>
              <a class="link-need-help" href=""><li><i class="fa fa-phone color-red" aria-hidden="true"></i> Layanan Pelanggan</li></a>
            </ul>
          </td>
        </tr>
      </tbody>
    </table>

    <!-- <table>
      <tr>
        <td style="padding:0px;">
          <font size="0"><b>Produk Highlight:</b> <?php echo $highlight;  ?></font>
        </td>
      </tr>
    </table> -->
  </div>

  <div class="col-sm-3">
    <div class="social-media-sharing-container text-center">
      <b>Bagikan :</b>
      <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url_share;?>" target="_blank" style="text-decoration: none!important">
        <i class="fa fa-facebook icon-share" aria-hidden="true"></i>
      </a>

      <a target="_blank" href="https://twitter.com/home?status=<?php echo $url_share;?>"><i class="fa fa-twitter icon-share" aria-hidden="true"></i>
      </a>
      <a target="_blank" href="https://plus.google.com/share?url=<?php echo $string;?>"><i class="fa fa-google-plus icon-share" aria-hidden="true"></i>
      </a>
       <a href="mailto:?&subject=<?php echo $name;?>&body=<?php echo $url_share;?>" style="text-decoration: none!important">
        <i class="fa fa-envelope-o icon-share" aria-hidden="true"></i>
      </a>
    </div>
    <div class='detail-add-wishlist' style="display: block; background: #ffff; border:1px solid; border-radius: 5px; padding:10px;">
      <div><b>Kebijakan</b></span><br/>
      <div style="text-align: left;">
        <b>Pengembalian: </b>jika barang yang dikirim mengalami kerusakan atau tidak sesuai deskripsi, Anda dapat mengembalikan barang tersebut kepada kami dalam jangka waktu 7 hari
      </div>
<!--      <div>
        <b>Cicilan: </b>Cicilan 0% mulai dari Rp 431,250 / bulan
      </div>
      <div>
        <select name="" id="">
          <option value="12">12</option>
          <option value="24">24</option>
        </select>
        <a href="">3 bank</a>
      </div>-->
      <div>
        <b>Pembayaran: </b><br>
        <img class="img-payment-method" src="https://dev.myacico.co.id/images/general/p-visa-small.jpg">
        <img class="img-payment-method" src="https://dev.myacico.co.id/images/general/ico_bank_02.png">
        <img class="img-payment-method" src="https://dev.myacico.co.id/images/general/ico_bank_03.png">
        <img class="img-payment-method" src="https://dev.myacico.co.id/images/general/ico_bank_04.png">
        <img class="img-payment-method" src="https://dev.myacico.co.id/images/general/ico_bank_06.png">
        <img class="img-payment-method" src="https://dev.myacico.co.id/images/general/p-bcaklikpay.jpg">
      </div>
      <div>
        <b>Garansi: </b>1 TAHUN GARANSI
      </div>
      <div style="margin-bottom: 20px;">
        <span class="pull-left"><b>Jumlah: </b></span>
        <select class='form-control pull-left' id='jmlItem' style='width: 70px; margin-left: 5px; height: 30px;'>
          <?php $nJml=1; while($nJml<=3){
            echo"<option value=".$nJml.">".$nJml."</option>";
          $nJml++; }?>
        </select>

        <!-- <input type='number' class='form-control pull-left' id='jmlItem' style='width: 70px; margin-left: 5px; height: 30px;' value='1' min='1'/> -->
        <div class="clearfix"></div>
      </div>

      <button type="button"style="margin-bottom: 7px; margin-left:-8px; background: transparent;
    border: 1px"  onClick="addToCart('<?php echo$m_product_id;?>','<?php echo$pricelist;?>','<?php echo$img[0];?>','<?php echo$name;?>','<?php echo$stock;?>','<?php echo$weight;?>')"<b style="font-size:15px;"><img src="https://s8.postimg.org/w01my4un9/Artboard_3-100.jpg"></button>
      <button type="button"style="margin-bottom: 7px; margin-left:-8px; background: transparent;
    border: 1px"  onClick="addToCart1('<?php echo$m_product_id;?>','<?php echo$pricelist;?>','<?php echo$img[0];?>','<?php echo$name;?>','<?php echo$stock;?>','<?php echo$weight;?>')"<b style="font-size:15px;"><img src="https://s8.postimg.org/dx8k77wb9/Artboard_5-100.jpg"></button>


      <?php
        if($isWishList =='Y')
          {
      ?>
        <button type="button" class="btn btn-link" style="border-radius: 25px; padding: 8px 34px;" onClick="addWishlist('<?php echo$m_product_id;?>','<?php echo$name;?>','<?php echo$img[0];?>')"><i class="fa fa-heart-o" style="color:#dffd54;" aria-hidden="true"></i> Tambahkan Ke favorites</button>
      <?php } else { ?>
        <button type="button" class="btn btn-link" style="border-radius: 25px; padding: 8px 34px;" onClick="addWishlist('<?php echo$m_product_id;?>','<?php echo$name;?>','<?php echo$img[0];?>')"><i class="fa fa-heart-o" aria-hidden="true"></i> Tambahkan Ke favorites</button>
      <?php } ?>

      <div>
        <span> <b>Jasa Pengiriman</b> </span>
        <table class="table" border="0" style="margin: 0">
          <tr>
            <td><img src="https://dev.myacico.co.id/images/general/s-myacicocourier.jpg"></td>
            <td>Gratis pengiriman* untuk wilayah jakarta dan jaminan pengiriman dalam 2 hari</td>
          </tr>
          <tr>
            <td><img src="https://dev.myacico.co.id/images/general/s-ninjaxpress.jpg"></td>
            <td>jaminan pengiriman dalam 3 hari</td>
          </tr>
          <tr>
            <td><img src="https://dev.myacico.co.id/images/general/s-jne.jpg"></td>
            <td>jaminan pengiriman dalam 2-5 hari</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>


  <div class="row lead">


<script src="jquery.js"></script>

<!--			<div class="ratings" style='text-align: center; color:#d98c13;'>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star-empty"></span>
    </div>-->

                          <br>

    <!-- <div class="row lead">
       <center>

      <div id="hearts-existing" class="starrr" data-rating='4'></div>

      You gave a rating of <span id="count-existing">4</span> heart(s)
      </center>

    </div>

  </div>
  <div class="col-sm-3" style='font-size:20px; text-align: center;'>
  Bagikan <i class="fa fa-facebook" aria-hidden="true"></i> <i class="fa fa-twitter" aria-hidden="true"></i> <i class="fa fa-envelope-o" aria-hidden="true"></i> <i class="fa fa-pinterest" aria-hidden="true"></i>
  <div class='detail-add-wishlist'>
    <div class="btn-group">Quantity: <input type='number' class='form-control' id='jmlItem' style='width:70px' value='1' min='1'></div><br>
    <div class="btnaddcart">
      <button class="dropbtnaddcar" onClick="addToCart('<?php echo$m_product_id;?>','<?php echo$pricelist;?>','<?php echo$img;?>','<?php echo$name;?>','<?php echo$stock;?>','<?php echo$weight;?>')">ADD TO CART</button>
    </div>

    </div> -->




  </div>

</div>




<ul class="nav nav-tabs" style='font-size:17px; margin-bottom:20px; border-top:0px'>

  <li class="active"><a data-toggle="tab" href="#menu1">Deskripsi</a></li>
        <li><a data-toggle="tab" href="#menu2">Spesifikasi</a></li>
  <li><a data-toggle="tab" href="#menu3">Ulasan</a></li>
	<li><a data-toggle="tab" href="#menu4">Pertanyaan</a></li>

</ul>

<div class="tab-content">
  <div id="menu1" class="tab-pane fade in active">

  <p><?php echo $description;  ?></p>
  </div>
        <div id="menu2" class="tab-pane fade">

  <table class="table table-striped">
    <tr>
      <th> Brand </th>
      <td> <?php echo $name; ?> </td>


    </tr>
    <tr>
      <th> Berat </th>
      <td> <?php echo $weight; ?> </td>
    </tr>
    <tr>
      <th> Category </th>
      <td> <?php echo $category; ?></td>
    </tr>
    <tr>
      <th>  Harga </th>
      <td> Rp.<?php echo money($pricelist);  ?></td>
    </tr>


         <!-- -->

     <?php
     $loop=0;
        if (isset($specification[1])) {
          foreach ($specification as $spek) {
      ?>
         <tr>
          <th>
      <?php echo $spek;?>
        </th>

        <td><?php echo $value[$loop].'</td>';
        $loop++;
        ?>
            </tr>
    <?php
        }

          }
      ?>


  </table>

  </div>
<!--          <div id="menu3" class="tab-pane fade">

  <p><?php //echo $highlight;  ?></p>
  </div>-->
           <div id="menu3" class="tab-pane fade">

  <p><?php $ik=0;
    $no=1;

                      if($komen){
              foreach($komen as $value)
                  {

                      $coment_date=$value['created'];
                      $coment_title=$value['title'];
                      $coment_isi=$value['review'];
                      $coment_rate =$value['star'];
                      ?>
                      <script>
                      $(function () {
                      var no = '<?php echo $no; ?>'
                      var rateV = '<?php echo $coment_rate; ?>';
                      $('#rateKoms'+no).rateYo({
                              // rating: $coment_rate,
         starWidth: "20px",											rating: rateV,
                              readOnly: true
                        });
                      });
                      </script>
                      <?php
                      $coment_user=$value['user'];
                      echo $coment_title." "."<div id='rateKoms".$no."'></div><br>".$coment_isi."<br> Oleh ".$coment_user."<br>";
                      $no++;
                  }
                      }
                      else{
                          echo "<div class='col-sm-6'><font size='2'> Belum Ada Ulasan Untuk ".$name." </font></div><br>";
                      }

              ?></p>
  </div>
  <div id="menu4" class="tab-pane fade">

<p></p>
</div>
</div>

</div>
</div>


</div>

<br><br>


<!--<div class="container">-->
  <div style='padding:15px; font-family:tahoma; font-size:20px; border-top: 3px solid #c40202; color:#535151'>
    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> PRODUK SEJENIS
  </div>

  <div class="span12" style='background:#ffffff; padding:10px;'>
    <div id="owl-demo" class="owl-carousel">
      <?php
        $jmlslide2=count($dathome);
      $n=1;$no=1;
      foreach($dathome as $key => $itemslide2){
        if($n=="$jmlslide2"){
          $active='active';
        }else{
          $active='';
        }
        ?>

      <!-- <div class="item" align="center"> -->
    <div class="item" align="center">

      <a style="font-size:10px; width: auto; font-weight: bold; color: #0066c0;" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='#0066c0'" href="<?php echo base_url('product/detail/'. $itemslide2['m_product_id'].'/'. $itemslide2['alias']);?>">
        <?php if($itemslide2['imageurl']){?>
        <img src="<?php echo $itemslide2['imageurl']; ?>" style='height:100px;'>
               <!--</a>-->
        <?php }else{
          echo"<img src='".base_url('images/general/noimage.png')."' style='height:100px;' border='0'>";
        } ?>
       <p style="height:50px; word-wrap: normal; line-height: 16px;">
            <!--<a style="font-size:10px; text-align: justify; width: auto; font-weight: bold; color: #0066c0;" onMouseOver="this.style.color='#c45500'" onMouseOut="this.style.color='#0066c0'" href="<?php // echo base_url('product/detail/'. $itemslide2['m_product_id'].'/'. $itemslide2['alias']);?>">-->
          <?php
          $str1 = $itemslide2['name'];
          $str2 = substr($str1, 0, 56);
          $str = strlen($str2);
          if($str <= 55){
          echo $itemslide2['name'];
          }else{
            // $str = substr($str, 0, 49);
            echo $str2."....";
          }
          ?>
            </p>

      </a>
        <script>

        $(function () {
             var no = '<?php echo $no; ?>';
                      var rateV = '<?php echo $itemslide2['rate']; ?>';
                $("#rateSejeniss"+no).rateYo({
                    rating: rateV,
                    starWidth: "15px",
                    readOnly: true,
                    normalFill: "#dddddd"
                });
                console.log(rateV);
              });

        </script>
      <div class="ratting-container"  style="margin-top: -25px;">
          <?php echo "<div id='rateSejeniss".$no."' class='detail-prod-rating'></div> <span class='ratting-text'></span>";?>

    </div>
      <p class="box-title2" style="color:red;margin-top: -5px;">Rp.<?php echo money($itemslide2['pricelist']); ?></p>
        <hr>
  </div>
  <?php $no++;$n++;  } ?>
   </div>
</div>

<div style='padding:15px; font-family:tahoma; font-size:20px; border-top: 3px solid #c40202; color:#535151'>
    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> PRODUK REKOMENDASI
  </div>

  <div class="span12" style='background:#ffffff; padding:10px;'>
    <div id="owl-demo1" class="owl-carousel">
      <?php
        $jmlslide2=count($dathome);
      $n=1;
      foreach($dathome as $key => $itemslide2){
        if($n=="$jmlslide2"){
          $active='active';
        }else{
          $active='';
        }
        ?>
      <!-- <div class="item" align="center"> -->
    <div class="item" align="center">

      <a style="font-size:10px; width: auto; font-weight: bold; color: #0066c0;" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='#0066c0'" href="<?php echo base_url('product/detail/'. $itemslide2['m_product_id'].'/'. $itemslide2['alias']);?>">
        <?php if($itemslide2['imageurl']){?>
        <img src="<?php echo $itemslide2['imageurl']; ?>" style='height:100px;'>
               <!--</a>-->
        <?php }else{
          echo"<img src='".base_url('images/general/noimage.png')."' style='height:100px;' border='0'>";
        } ?>
       <p style="height:50px; word-wrap: normal; line-height: 16px;">
            <!--<a style="font-size:10px; text-align: justify; width: auto; font-weight: bold; color: #0066c0;" onMouseOver="this.style.color='#c45500'" onMouseOut="this.style.color='#0066c0'" href="<?php // echo base_url('product/detail/'. $itemslide2['m_product_id'].'/'. $itemslide2['alias']);?>">-->
          <?php
          $str1 = $itemslide2['name'];
          $str2 = substr($str1, 0, 56);
          $str = strlen($str2);
          if($str <= 55){
          echo $itemslide2['name'];
          }else{
            // $str = substr($str, 0, 49);
            echo $str2."....";
          }
          ?>
            </p>

      </a>
         <script>

        $(function () {
             var no = '<?php echo $no; ?>';
                      var rateR = '<?php echo $itemslide2['rate']; ?>';
                $("#rateRekom"+no).rateYo({
                    rating: rateR,
                    starWidth: "15px",
                    readOnly: true,
                    normalFill: "#dddddd"
                });
                //console.log(rateV);
              });

        </script>
        <div class="ratting-container"  style="margin-top: -25px;">
          <?php echo "<div id='rateRekom".$no."' class='detail-prod-rating'></div> <span class='ratting-text'></span>";?>

    </div>
      <p class="box-title2" style="color:red;margin-top: -5px;">Rp.<?php echo money($itemslide2['pricelist']); ?></p>
        <hr>
  </div>
  <?php $no++; $n++;  } ?>
</div>
</div>

<div style='padding:15px; font-family:tahoma; font-size:20px; border-top: 3px solid #c40202; color:#535151'>
    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> PRODUK PELENGKAP
  </div>

  <div class="span12" style='background:#ffffff; padding:10px;'>
    <div id="owl-demo2" class="owl-carousel">
      <?php
        $jmlslide2=count($dathome);
      $n=1;
      foreach($dathome as $key => $itemslide2){
        if($n=="$jmlslide2"){
          $active='active';
        }else{
          $active='';
        }
        ?>
      <!-- <div class="item" align="center"> -->
    <div class="item" align="center">

      <a style="font-size:10px; width: auto; font-weight: bold; color: #0066c0;" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='#0066c0'" href="<?php echo base_url('product/detail/'. $itemslide2['m_product_id'].'/'. $itemslide2['alias']);?>">
        <?php if($itemslide2['imageurl']){?>
        <img src="<?php echo $itemslide2['imageurl']; ?>" style='height:100px;'>
               <!--</a>-->
        <?php }else{
          echo"<img src='".base_url('images/general/noimage.png')."' style='height:100px;' border='0'>";
        } ?>
       <p style="height:50px; word-wrap: normal; line-height: 16px;">
            <!--<a style="font-size:10px; text-align: justify; width: auto; font-weight: bold; color: #0066c0;" onMouseOver="this.style.color='#c45500'" onMouseOut="this.style.color='#0066c0'" href="<?php // echo base_url('product/detail/'. $itemslide2['m_product_id'].'/'. $itemslide2['alias']);?>">-->
          <?php
          $str1 = $itemslide2['name'];
          $str2 = substr($str1, 0, 56);
          $str = strlen($str2);
          if($str <= 55){
          echo $itemslide2['name'];
          }else{
            // $str = substr($str, 0, 49);
            echo $str2."....";
          }
          ?>
            </p>

      </a>


       <div class="ratting-container"  style="margin-top: -25px;">
      <div class="rateSejenis" class="detail-prod-rating"></div><span class="ratting-text"></span>

    </div>

     <script>

        $(function () {
             var no = '<?php echo $no; ?>';
                      var rateR = '<?php echo $itemslide2['rate']; ?>';
                $("#rateJenis"+no).rateYo({
                    rating: rateR,
                    starWidth: "15px",
                    readOnly: true,
                    normalFill: "#dddddd"
                });
                //console.log(rateV);
              });

        </script>
        <div class="ratting-container"  style="margin-top: -25px;">
          <?php echo "<div id='rateJenis".$no."' class='detail-prod-rating'></div> <span class='ratting-text'></span>";?>

    </div>
      <p class="box-title2" style="color:red;margin-top: -5px;">Rp.<?php echo money($itemslide2['pricelist']); ?></p>
        <hr>
  </div>
  <?php $no++;$n++;  } ?>
</div>
</div>
<!--</div>-->
<script type="text/javascript" src="<?php echo base_url('assets/productpopup/js/foundation.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/productpopup/js/setup.js');?>"></script>

<!-- Modal -->
<div id="cartModal" class="modal fade cartModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="width:680px">
      <!-- <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div> -->
      <div class="modal-body" >


        <?php $this->load->view('frontend/modules/cart/modal_cart.php',$this->data); ?>


      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> -->
    </div>

  </div>
</div>
<script src="jquery.rateyo.js"></script>

<script>

   var rate = "<?php  echo $rate;?>";
   var star_rate = "<?php  echo $ik;?>";
    var idss = "<?php echo $local_strg;?>";

  var detail = JSON.parse(localStorage.getItem('product_detail'))

   $.ajax({
  url: 'https://api.myacico.co.id/myacico-service/product/productlist/detail?id='+idss,
  success: function(data) {
      //if(data['m_product_id'])

       if(detail.length == 0)
       {
           detail.push(data)
       }
       else{
           var result = $.grep(detail, function(e){ return e.m_product_id == data['m_product_id']; });
           if (result.length == 0) {
                detail.push(data)
                // not found
              }

     /* for(var i=0;i<detail.length;i++)
{   console.log(detail[i].m_product_id);
    console.log("testst",data['m_product_id']);
    if(detail[i].m_product_id == data['m_product_id'])
    {
        console.log("masuk");
         detail.push(data)

    }
}*/
       }
      localStorage.setItem('product_detail', JSON.stringify(detail));


// Retrieve the object from storage m_product_id
var retrievedObject = localStorage.getItem('product_detail');

//console.log('retrievedObject: ', JSON.parse(retrievedObject));

  }})

//localStorage.setItem('product_detail', JSON.stringify(testObject));
// Retrieve the object from storage
//var retrievedObject = localStorage.getItem('testObject');

//console.log('retrievedObject: ', JSON.parse(testObject));

  $(function () {
    $("#rateYo").rateYo({
        rating: rate,
        starWidth: "15px",
        readOnly: true,
        normalFill: "#dddddd"
    });
  });


// Starrr plugin (https://github.com/dobtco/starrr)
var __slice = [].slice;

(function($, window) {
var Starrr;

Starrr = (function() {
  Starrr.prototype.defaults = {
    rating: void 0,
    numStars: 5,
    change: function(e, value) {}
  };

  function Starrr($el, options) {
    var i, _, _ref,
      _this = this;

    this.options = $.extend({}, this.defaults, options);
    this.$el = $el;
    _ref = this.defaults;
    for (i in _ref) {
      _ = _ref[i];
      if (this.$el.data(i) != null) {
        this.options[i] = this.$el.data(i);
      }
    }
    this.createStars();
    this.syncRating();
    this.$el.on('mouseover.starrr', 'span', function(e) {
      return _this.syncRating(_this.$el.find('span').index(e.currentTarget) + 1);
    });
    this.$el.on('mouseout.starrr', function() {
      return _this.syncRating();
    });
    this.$el.on('click.starrr', 'span', function(e) {
      return _this.setRating(_this.$el.find('span').index(e.currentTarget) + 1);
    });
    this.$el.on('starrr:change', this.options.change);
  }

  Starrr.prototype.createStars = function() {
    var _i, _ref, _results;

    _results = [];
    for (_i = 1, _ref = this.options.numStars; 1 <= _ref ? _i <= _ref : _i >= _ref; 1 <= _ref ? _i++ : _i--) {
      _results.push(this.$el.append("<span class='glyphicon .glyphicon-star-empty'></span>"));
    }
    return _results;
  };

  Starrr.prototype.setRating = function(rating) {
    if (this.options.rating === rating) {
      rating = void 0;
    }
    this.options.rating = rating;
    this.syncRating();
    return this.$el.trigger('starrr:change', rating);
  };

  Starrr.prototype.syncRating = function(rating) {
    var i, _i, _j, _ref;

    rating || (rating = this.options.rating);
    if (rating) {
      for (i = _i = 0, _ref = rating - 1; 0 <= _ref ? _i <= _ref : _i >= _ref; i = 0 <= _ref ? ++_i : --_i) {
        this.$el.find('span').eq(i).removeClass('glyphicon-star-empty').addClass('glyphicon-star');

      }
    }
    if (rating && rating < 5) {
      for (i = _j = rating; rating <= 4 ? _j <= 4 : _j >= 4; i = rating <= 4 ? ++_j : --_j) {
        this.$el.find('span').eq(i).removeClass('glyphicon-star').addClass('glyphicon-star-empty');
      }
    }
    if (!rating) {
      return this.$el.find('span').removeClass('glyphicon-star').addClass('glyphicon-star-empty');
    }
  };

  return Starrr;

})();
return $.fn.extend({
  starrr: function() {
    var args, option;

    option = arguments[0], args = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
    return this.each(function() {
      var data;

      data = $(this).data('star-rating');
      if (!data) {
        $(this).data('star-rating', (data = new Starrr($(this), option)));
      }
      if (typeof option === 'string') {
        return data[option].apply(data, args);
      }
    });
  }
});
})(window.jQuery, window);

$(function() {
return $(".starrr").starrr();
});

$( document ).ready(function() {

$('#hearts').on('starrr:change', function(e, value){
  $('#count').html(value);
});

$('#hearts-existing').on('starrr:change', function(e, value){
  $('#count-existing').html(value);
});
});
var token = document.cookie.split('x-auth=')[1].split(';').shift();
console.log('token',token)
function addWishlist(id,name,imageurl){
var dataString = 'id='+ id;

if(token){
$.ajax
  ({
  type: "POST",
              headers:{"token":token},
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

}else{
$.ajax({
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

var jmlItem = $('#jmlItem').val();
var dataString = 'm_product_id='+ m_product_id+'&pricelist='+ pricelist+'&imageurl='+ imageurl+'&name='+ name+'&stock='+stock+'&jmlItem='+jmlItem+'&weight='+weight;
// dsasdadas
if(jmlItem<=0){
  $.dialog({
    title: 'Alert!',
    content: 'Silakan masukan jumlah item dengan benar',
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


  var cookie = document.cookie.split('x-auth=');
  if(cookie.length > 1){
    var token = cookie[1].split(';').shift();

    var apiurl = api_base_url +'/order/cart/additem';
    var m_product_id = m_product_id;
    var qty = jmlItem;
    var pricelist = pricelist;
    var weight = weight;

    var success = function(r){

    //   $('.cartModal').modal('show');

      // $.confirm({
      //   title: name,
      //   content: '<img src="'+imageurl+'" style="margin-bottom:10px">'+'<p>'+jmlItem+' Item berhasil ditambahkan<p>',
      //   autoClose: 'close|3000',
      //   buttons: {
      //     close: function () {
      //     }
      //   },
      //   closeIcon: true,
      //   closeIconClass: 'fa fa-close'
      // });
      window.location.href = '<?php echo site_url('checkout/cart'); ?>';
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
            content: 'Item gagal ditambahkan, jumlah melebihi stock yang ada!',
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
          window.location.href = '<?php echo site_url('checkout/cart'); ?>';
        //   $('.cartModal').modal('show');

          // $.confirm({
          //   title: name,
          //   content: '<img src="'+imageurl+'" style="margin-bottom:10px">'+'<p>'+jmlItem+' Item berhasil ditambahkan kedalam keranjang<p>',
          //   autoClose: 'close|3000',
          //   buttons: {
          //     close: function () {
          //       //$.alert('action is canceled');
          //     }
          //   },
          //   closeIcon: true,
          //   closeIconClass: 'fa fa-close'
          // });

        }else{
          $.dialog({
            title: name,
            content: 'Item gagal ditambahkan!',
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

function addToCart1(m_product_id,pricelist,imageurl,name,stock,weight){

var jmlItem = $('#jmlItem').val();
var dataString = 'm_product_id='+ m_product_id+'&pricelist='+ pricelist+'&imageurl='+ imageurl+'&name='+ name+'&stock='+stock+'&jmlItem='+jmlItem+'&weight='+weight;
// dsasdadas
if(jmlItem<=0){
  $.dialog({
    title: 'Alert!',
    content: 'Silakan masukan jumlah item dengan benar',
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

  var cookie = document.cookie.split('x-auth=');
  if(cookie.length > 1){
    var token = cookie[1].split(';').shift();

    var apiurl = api_base_url +'/order/cart/additem';
    var m_product_id = m_product_id;
    var qty = jmlItem;
    var pricelist = pricelist;
    var weight = weight;

    var success = function(r){

       // $('.cartModal').modal('show');

      // $.confirm({
      //   title: name,
      //   content: '<img src="'+imageurl+'" style="margin-bottom:10px">'+'<p>'+jmlItem+' Item berhasil ditambahkan<p>',
      //   autoClose: 'close|3000',
      //   buttons: {
      //     close: function () {
      //     }
      //   },
      //   closeIcon: true,
      //   closeIconClass: 'fa fa-close'
      // });
      $('.cartModal').modal('show');
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
            content: 'Item gagal ditambahkan, jumlah melebihi stock yang ada!',
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
           $('.cartModal').modal('show');

          // $.confirm({
          //   title: name,
          //   content: '<img src="'+imageurl+'" style="margin-bottom:10px">'+'<p>'+jmlItem+' Item berhasil ditambahkan kedalam keranjang<p>',
          //   autoClose: 'close|3000',
          //   buttons: {
          //     close: function () {
          //       //$.alert('action is canceled');
          //     }
          //   },
          //   closeIcon: true,
          //   closeIconClass: 'fa fa-close'
          // });

        }else{
          $.dialog({
            title: name,
            content: 'Item gagal ditambahkan!',
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


/*
app.directive('onFinishRender', function ($timeout) {
  return {
      restrict: 'A',
      link: function (scope, element, attr) {
          if (scope.$last === true) {
              $timeout(function () {
                  scope.$emit(attr.onFinishRender);
              });
          }
      }
  }
});


app.controller('detailCnt', function($scope, $http, $mycart, toMoney){

$scope.quantity = 1;
$scope.toMoney = toMoney;
$scope.add_to_cart = function(){
  console.log('cur cart:', $mycart.data);
  var cart = {
    m_product_id:$scope.dat.m_product_id,
    name:$scope.dat.name,
    image_url:$scope.dat.imageurl[0],
    price:$scope.dat.pricelist,
    quantity:$scope.quantity
  }
  $mycart.data.push(cart);
  document.cookie = 'cart='+JSON.stringify($mycart.data)+'; path='+base_path;
  console.log('total cart:', $mycart.data);
}
$scope.check_quantity = function(){
  if(isNaN($scope.quantity))$scope.quantity=1;
}
$scope.get = function(){
  $http.get(api_base_url+"/product/productlist/detail?id=<?php echo $pro_id; ?>")
  .then(function(data, status, headers, config) {
    $scope.data = JSON.stringify(data);
    $scope.dat = data.data;
  }, function(e){
    console.log('error:',e);
  });
}
$scope.get();
$scope.$on('ngRepeatFinished', function(ngRepeatFinishedEvent) {
    $('.xzoom, .xzoom-gallery').xzoom({zoomWidth: 400, title: true, tint: '#333', Xoffset: 15});

    //Integration with hammer.js
    var isTouchSupported = 'ontouchstart' in window;

    if (isTouchSupported) {
        //If touch device
        $('.xzoom').each(function(){
            var xzoom = $(this).data('xzoom');
            xzoom.eventunbind();
        });

        $('.xzoom').each(function() {
            var xzoom = $(this).data('xzoom');
            $(this).hammer().on("tap", function(event) {
                event.pageX = event.gesture.center.pageX;
                event.pageY = event.gesture.center.pageY;
                var s = 1, ls;

                xzoom.eventmove = function(element) {
                    element.hammer().on('drag', function(event) {
                        event.pageX = event.gesture.center.pageX;
                        event.pageY = event.gesture.center.pageY;
                        xzoom.movezoom(event);
                        event.gesture.preventDefault();
                    });
                }

                xzoom.eventleave = function(element) {
                    element.hammer().on('tap', function(event) {
                        xzoom.closezoom();
                    });
                }
                xzoom.openzoom(event);
            });
        });

    } else {
        //If not touch device

        //Integration with magnific popup plugin
        $('#xzoom-magnific').bind('click', function(event) {
            var xzoom = $(this).data('xzoom');
            xzoom.closezoom();
            var gallery = xzoom.gallery().cgallery;
            var i, images = new Array();
            for (i in gallery) {
                images[i] = {src: gallery[i]};
            }
            $.magnificPopup.open({items: images, type:'image', gallery: {enabled: true}});
            event.preventDefault();
        });
    }
});
});*/
</script>
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

#owl-demo1 .item{
  margin: 3px;
  /*text-align:center;*/
}
#owl-demo1 .item img{
  display: block;
  width: auto;
  height: 150px;

}

#owl-demo2 .item{
  margin: 3px;
  /*text-align:center;*/
}
#owl-demo2 .item img{
  display: block;
  width: auto;
  height: 150px;

}
.owl-prev{
    position :absolute; top: 50px; left:32px; border-radius:50px; height:38px; width: 38px;
}
.owl-next{
    position :absolute; right:32px; top: 48px; border-radius:50px; height:38px; width: 38px;
}

</style>


    <script>



    $(document).ready(function() {
      $("#owl-demo").owlCarousel({
        autoPlay: 3000,
        navigation: true,
        items : 10,
//        float:left; margin-top: -150px; border-radius:50px; height:35px; width: 35px;padding-top:5px;
//        float:right; margin-top: -150px; border-radius:50px; height:35px; width: 35px;padding-top:5px;
        itemsDesktop : [1199,5],
        itemsDesktopSmall : [979,5]
      });

      $("#owl-demo1").owlCarousel({
        autoPlay: 3000,
        navigation: true,
        items : 10,
        itemsDesktop : [1199,5],
        itemsDesktopSmall : [979,5]
      });

      $("#owl-demo2").owlCarousel({
        autoPlay: 3000,
        navigation: true,
        items : 10,
        itemsDesktop : [1199,5],
        itemsDesktopSmall : [979,5]
      });

  });
  $('.xzoom, .xzoom-gallery').xzoom({zoomWidth: 400, title: true, tint: '#333', Xoffset: 15});

  //Integration with hammer.js
  var isTouchSupported = 'ontouchstart' in window;

  if (isTouchSupported) {
      //If touch device
      $('.xzoom').each(function(){
          var xzoom = $(this).data('xzoom');
          xzoom.eventunbind();
      });

      $('.xzoom').each(function() {
          var xzoom = $(this).data('xzoom');
          $(this).hammer().on("tap", function(event) {
              event.pageX = event.gesture.center.pageX;
              event.pageY = event.gesture.center.pageY;
              var s = 1, ls;

              xzoom.eventmove = function(element) {
                  element.hammer().on('drag', function(event) {
                      event.pageX = event.gesture.center.pageX;
                      event.pageY = event.gesture.center.pageY;
                      xzoom.movezoom(event);
                      event.gesture.preventDefault();
                  });
              }

              xzoom.eventleave = function(element) {
                  element.hammer().on('tap', function(event) {
                      xzoom.closezoom();
                  });
              }
              xzoom.openzoom(event);
          });
      });

  } else {
      //If not touch device

      //Integration with magnific popup plugin
      $('#xzoom-magnific').bind('click', function(event) {
          var xzoom = $(this).data('xzoom');
          xzoom.closezoom();
          var gallery = xzoom.gallery().cgallery;
          var i, images = new Array();
          for (i in gallery) {
              images[i] = {src: gallery[i]};
          }
          $.magnificPopup.open({items: images, type:'image', gallery: {enabled: true}});
          event.preventDefault();
      });
  }
  </script>
