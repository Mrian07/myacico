<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/owl-carousel/owl.carousel.css');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/owl-carousel/owl.theme.css');?>" />
	<div class="container">
		<div class='my-bg-title'>

			<i class="fa fa-angle-right" aria-hidden="true"></i>HASIL PENCARIAN UNTUK '<span id="search-key"></span>'

		</div>
	<div class="row">
	  <div id="sidebar-left-filter" style='width:230px; float:left; margin-right:10px;'>
			<?php  $this->load->view('frontend/modules/product/sidebar_left',$this->data); ?>
	   </div>
	  <div style='width:890px; float:left'>
			<?php
		if($this->session->userdata('itemView')=='grid'){
			$this->load->view('frontend/modules/product/product_items_all',$this->data);
		}else{
			$this->load->view('frontend/modules/product/product_items_all_list',$this->data);
		}
		 ?>
	 </div>
	  <!-- <div class="col-sm-2"><?php // $this->load->view('frontend/modules/product/sidebar_right',$this->data); ?></div>-->
	</div>

        <div id="recentView" style="display: none;">
        <div style='padding:8px; font-family:tahoma; font-size:12px; color:#535151'>

              <!-- $lang_recent_view -->
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i> Baru di lihat<hr>
          </div>
    </div>
  <div id="product" class="promo-front owl-carousel">


<!--       <div id="product" align="center" ></div>
      <div class="item" style='background:#ffffff; padding:10px; height:210px'>-->



            <!-- <div class="ratings" style='text-align: center; color:#d98c13;'>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div> -->
<!--      </div>

    </div>-->




</div>

</div>
<script>
//    $url_share="https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    var ctrl= "<?php echo base_url('/product/detail')?>";
    var namapotong = '';
    function currencyFormat (num) {
//    return "Rp." + num.toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")
    return  "Rp." +num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")
}
var detail = JSON.parse(localStorage.getItem('product_detail'))
if(detail[0].name)
{
     $('#recentView').show();
}
//console.log(detail);
for(var i=0;i<detail.length;i++)
{

    var str = detail[i].name;
//            a = a.length;
            if(str.length >20)
            {
                 namapotong = str.substring(0, 20)+' '+'...';
            }else{
                  namapotong = detail[i].name;
            }
//            console.log(currencyFormat(detail[i].pricelist));
//      $('#product').append('<div class="pull-left" style="width: 100px;"><a href="'+ctrl+'/'+detail[i].m_product_id+'/'+detail[i].alias+'" class="link-p" style="color:#fff;"><span class="badgeNi">New</span><img src="'+detail[i].imageurl[0]+'" class="" style="height:100px;"></a><p><a href="'+ctrl+'/'+detail[i].m_product_id+'/'+detail[i].alias+'">'+detail[i].name+'</a></p></div>')
    $('#product').append('<p><a href="'+ctrl+'/'+detail[i].m_product_id+'/'+detail[i].alias+'" class="link-p" style="color:#fff;"><span class="badgeNi">New</span><img src="'+detail[i].imageurl[0]+'" class="" style="height:100px;"></a><br><a href="'+ctrl+'/'+detail[i].m_product_id+'/'+detail[i].alias+'">'+namapotong+' </a><br> '+currencyFormat(detail[i].pricelist)+'</p>')

}
//detail.forEach(p){
//
//     product.append('<tr><td>'+p.m_product_id+'</td><td>')
//}

$(document).ready(function() {
    
    getListProduct();
    getSidebar();
})

function getListProduct() {
    var url = api_base_url + '/product/filter/<?php echo $pro ?>';
    var page = '<?php echo $page; ?>';
    var sort = '<?php echo $sort; ?>';
    var searchKey = '<?php echo $pro; ?>';
    var sort = '<?php echo $sort; ?>';
    var api = '';
    var api2 = '';

    if(page){
        api = "/product/productall/"+searchKey+"?itemperpage=10&page="+page+"&ob="+sort;
        api2 = "/product/productall/"+searchKey+"?itemperpage=10&page="+page+"&show=productcount";
    }else if(sort){
        api = "/product/productall/"+searchKey+"?itemperpage=10&ob="+sort;
        api2 = "/product/productall/"+searchKey+"?itemperpage=10&page=1&show=productcount";
    }else{
        api = "/product/productall/"+searchKey+"?itemperpage=10";
        api2 = "/product/productall/"+searchKey+"?itemperpage=10&page=1&show=productcount";
    }

    $.get(api_base_url + api,function(res){
        // alert("finish");
        console.log("konten:", res);
        // console.log(res);
        if (res.length == 0) return $('#productlist').html('<center>Maaf item yang Anda cari belum tersedia.</center>');
        
        var i = 0;
        res.forEach(function(data) {

            var specialPriceComponent = '';
            var addWishlistComponent = '';

            if (data.specialPrice != 0 || data.specialPrice != '0') {
                specialPriceComponent += '<span class="strike-throgh">Rp ' + data.pricelist + '</span>'
                                            + '<span class="lead dark-red pricelist" style="font-size: 1.4em;">'
                                                + 'Rp ' + data.specialPrice
                                            + '</span>'
                                            + '<div> Hemat'
                                                + '<span class="lead dark-red pricelist" style="font-size: 1.2em;">'
                                                    + 'Rp ' +  data.pricelist - data.specialPrice + ' (' + data.discount + '%)'
                                                + '</span>'
                                            + '</div>';
            } else {
                specialPriceComponent += '<span class="lead dark-red pricelist">'
                                    + 'Rp ' + data.pricelist
                                + '</span>';
            }

            if (data.isWishList == 'Y') {
                addWishlistComponent += '<a class="btn btn-warning btn-add-to-whishlist whishlist-active" onClick="addWishlist(' + data.m_product_id + ',' + data.name + ',' + data.imageurl + ')">'
                        + '<i class="fa fa-heart"  style="font-size:15px;color:grey;"  aria-hidden="true"></i>Wishlist'
                    + '</a>'
            } else {
                addWishlistComponent += '<a class="btn-add-to-whishlist" onClick="addWishlist(' + data.m_product_id + ',' + data.name + ',' + data.imageurl + ')">Add to Wishlist</a>'
            }

            $('#productlist').append(
                '<div class="col-xs-12" style="margin-bottom:10px;">'
                    + '<div class="row" style="padding-bottom: 15px">'
                        + '<div class="col-xs-3">'
                            + '<a href="' + base_url + 'product/detail/' + data.m_product_id + '/' + data.alias + '">'
                            + '<img class="img-thumbnail clear-border" src="' + data.imageurl + '" alt="' +  data.name + '" style="height:200px; width: auto;" onerror="this.onerror=null;this.src="' + base_url + '/images/general/noimage.png"/>'
                            + '</a>'
                        + '</div>'
                        + '<div class="col-xs-6">'
                            + '<div class="highlight-list" style="text-align:left;">'
                                + '<a class="title-product" href="' + base_url + 'product/detail/' + data.m_product_id + '/' + data.alias + '">' + data.name + '</a>'
                                    + '<div class="highlight' + i + '">'
                                        + data.highlight
                                    + '</div>'
                                    + '<a href="' + base_url + 'product/detail/' + data.m_product_id + '/'  + data.alias + '" style="color: #4b4b4b!important; font-weight: bold">SELENGKAPNYA</a>'
                            + '</div>'
                        + '</div>'
                        + '<div class="col-xs-3">'
                            + specialPriceComponent
                                + '<div class="yu1"><i class="fa fa-info-circle" aria-hidden="true"></i> Stock: Tersedia</div>'
                                + '<div class="text-left" style="margin-top: 20px;">'
                                    + '<input type="hidden" class="form-control text-center" id="jmlItem' + data.m_product_id + '" style="width: 50px; font-size: 9pt; margin-bottom: 8px; height: 29px;" value="1" min="1">'

                                    + '<div>'
                                        + '<div style="width: 130px;">'
                                            + '<button type="button" class="btn btn-danger btn-add-to-cart" onClick="addToCart(' + data.m_product_id + ',' + data.pricelist + ',' + data.imageurl + ',' + data.name + ',' + data.stock + ',' + data.weight + ')"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</button>'
                                        + '</div>'
                                        + '<div class="text-center" style="width: 130px;">'
                                            + addWishlistComponent
                                        + '</div>'
                                    + '</div>'
                                + '</div>'
                            + '</center>'
                        + '</div>'
                    + '</div>'

                    + '<div class="col-xs-12" style="border-top:1px solid #e30c0c"> </div>'
                + '</div>'
            )
            i++;
        });
    });

    // $.get(api_base_url + api2,function(res){
    //     console.log("konten2:", res);
    // });
}

function getSidebar() {
    var url = api_base_url + '/product/filter/<?php echo $pro ?>';
        // console.log("url: ", url);
        $.get(url,function(res){
            console.log("result ajax list");
            // console.log(res);
            

            res.forEach(function(m) {

                var menu_body = '';

                m.data.forEach(function(d) {
                    menu_body += '<div class="checkbox">'
                        + '<label>'
                            + '<input name="" type="checkbox" value="' + d.valueAlias + '">'
                            + '<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>'
                            + d.value
                            + '(' + d.count + ')'
                        + '</label>'
                    + '</div>'
                })

                $('#sidebar-left-filter').append(
                    $(document.createElement('div')).attr({'id': m.filterAlias,'class': 'menu_list'}).append(
                        $(document.createElement('p')).text(m.filter).attr({'class': 'menu_head plus'}).click(function() {
                            console.log("clicked lhooo");
                            $(this).toggleClass("plus minus").next("div.menu_body").slideToggle(300);
                        }),
                        // '<p class="menu_head plus">' +  + '</p>' "#" + m.filterAlias + " > p.menu_head"
                        '<div class="menu_body">' + menu_body + '</div>'
                    )
                )
            });
        });
}
</script>


<!-- Demo -->
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
