<style>
    .melayang:hover {
    color: hotpink;
}
.xzoom{
  width: 279px;
  /*top: -41.2038px;
  left: 0px;
  position: absolute;*/
}
.xzoom-source{
  margin-left: 8px;

}

</style>

<?php
$url_share="https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$string = str_replace('(', '_', $url_share);
$string = str_replace(')', '_', $string);
$string = str_replace('[', '_', $string);
$string = str_replace(']', '_', $string);
?>

<?php  $totalRate= $rating['star1']+$rating['star2']+$rating['star3']+$rating['star4']+$rating['star5']; ?>
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


<div ng-controller="detailCnt">

<div class="row">

  <div class="col-sm-3">
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

  <div class="col-sm-9">
    <h5 style="margin-bottom: 0px;">
      <?php echo $name; ?>
    </h5>

    <div class="ratting-container">
      <div id="rateYo" class="detail-prod-rating"></div><span class="ratting-text">(<?php echo$totalRate;?>) <a href=""><i class="fa fa-pencil" aria-hidden="true"></i> Tulis ulasan</a></span>

      <div class="clearfix"></div>
    </div>

    <table class="table table-detail-prod" border="0">
      <tbody>
        <?php
        if($asap_stat =='Y')
        {
        $asap = "<a style='height:20px; margin-left:5px;' target='_blank' href='".base_url('customer/asap')."'><img src='".base_url("images/general/asap.png")."'class='test01'></a>";
        $asap_bawah= "Ingin barang anda sampai dalam <span style='color:red;'>2 hari</span>?<br>Pilih Layanan".$asap." bagi anda yang tinggal di jakarta ";

        }
        else
        {
            $asap='';
            $asap1 = "<a style='height:20px; margin-left:5px;' target='_blank' href='".base_url('customer/asap')."'><img src='".base_url("images/general/asap.png")."'class='test01'></a>";
            $asap_bawah= "Belanja online murah, gratis pengiriman area Jakarta*<br>Pilih barang dengan layanan" .$asap1."Untuk pengiriman <span style='color:red;'>Pasti 2 hari</span>";

        }
        if($specialPrice == 0 ){
            echo "
              <tr>
                <td>Harga:</td>
                <td><span class='price-list'>Rp ".money($pricelist)."</span><span>".$asap."</span></td>
              </tr>";
          }else{
            echo "
              <tr>
              <td>Harga:</td>
              <td>
                <span class='price-list'>Rp ".money($specialPrice)."</span>
                <span class='discount'>".money($discount)."% OFF</span>
                <span>Hemat: <span style='color: #8a0202; font-weight: bold'>Rp ".money($pricelist - $specialPrice)."</span></span><span>".$asap."</span>
              </td>
            </tr>
            <tr>
              <td>Harga Awal:</td>
              <td><s>Rp ".money($pricelist)."</s>
              </td>
            </tr>";
          }
        ?>


        <tr>
          <td>Status:</td>
          <td style="color: #4ba240">Tersedia</td>
        </tr>
        <tr>
          <td></td>
          <style>
          .test01{
            width: 55px;
          }
          </style>

  <td> <?php echo$asap_bawah;?>    </td>
    </tr>
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

  </div>



  <div class="row lead">


<script src="jquery.js"></script>


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
<!--    <tr>
      <th> Brand </th>
      <td> <?php // echo $name; ?> </td>


    </tr>
    <tr>
      <th> Berat </th>
      <td> <?php // echo $weight; ?> </td>
    </tr>
    <tr>
      <th> Category </th>
      <td> <?php // echo $category; ?></td>
    </tr>
    <tr>
      <th>  Harga </th>
      <td> Rp.<?php // echo money($pricelist);  ?></td>
    </tr>-->


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

<tr>
      <th> Berat </th>
      <td> <?php echo $weight; ?> </td>
    </tr>
  </table>

  </div>

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





<script type="text/javascript" src="<?php echo base_url('assets/productpopup/js/foundation.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/productpopup/js/setup.js');?>"></script>


<script src="jquery.rateyo.js"></script>

<script>
var jdata1 = "<?php echo$jmlslide1;?>";
var jdata2 = "<?php echo$jmlslide2;?>";
var jdata3 = "<?php echo$jmlslide3;?>";
var rate = "<?php  echo $rate;?>";
var star_rate = "<?php  echo $ik;?>";
var idss = "<?php echo $local_strg;?>";

if(jdata1<10)
{
    $('#sld1').hide();
}
if(jdata2<10)
{
    $('#sld2').hide();
}
if(jdata3<1)
{
    $('#sld3').hide();
}

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
              }


       }
      localStorage.setItem('product_detail', JSON.stringify(detail));


// Retrieve the object from storage m_product_id
var retrievedObject = localStorage.getItem('product_detail');

  }})

  $(function () {
    $("#rateYo").rateYo({
        rating: rate,
        starWidth: "15px",
        readOnly: true,
        normalFill: "#dddddd"
    });
  });


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
