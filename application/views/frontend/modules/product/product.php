<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/owl-carousel/owl.carousel.css');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/owl-carousel/owl.theme.css');?>" />
<div class="container">
	<div class='my-bg-title'>
	<i class="fa fa-angle-right" aria-hidden="true"></i> LIST PRODUCT 
	</div>

<div style='width:230px; float:left; margin-right:10px;'><?php $this->load->view('frontend/modules/product/sidebar_left',$this->data); ?></div>


<div style='width:890px; float:left'>
	<?php
	foreach($listMenu as $menu_list){
	//echo $menu_list['name'].'>';
		--$jumlahMenu;
	?>
		<a href="<?php echo base_url('product/listItem/'.$menu_list['categoryId'].'/'.$menu_list['alias']);?>"><?php echo $menu_list['name']; ?></a>
	<?php
		if($jumlahMenu >0){
		echo '>';
		}
	}
	?>
	<?php
	if($this->session->userdata('itemView')=='grid'){
	$this->load->view('frontend/modules/product/product_items',$this->data);
	}else{
	$this->load->view('frontend/modules/product/product_items_list',$this->data);
	}
	?>
</div>
<!-- <div class="col-sm-2"><?php // $this->load->view('frontend/modules/product/sidebar_right',$this->data); ?></div>-->
<div style='padding:8px; font-family:tahoma; font-size:12px; border-top: 3px solid #c40202; color:#535151'>
      <!-- $lang_recent_view -->
    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> Baru di lihat
  </div>
  <div class="promo-front owl-carousel">
       <div id="product" align="center" style="float:left; width: 100px;" ></div>
      <div class="item" style='background:#ffffff; padding:10px; height:210px'>

            
           
            <!-- <div class="ratings" style='text-align: center; color:#d98c13;'>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div> -->
      </div>
    
    </div>


            <hr>

</div>
<script>
//    $url_share="https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    var ctrl= "<?php echo base_url('/product/detail')?>";
var detail = JSON.parse(localStorage.getItem('product_detail'))
console.log(detail);
for(var i=0;i<detail.length;i++)
{

//   $('#product').append('<a href="'+ctrl+'/'+detail[i].m_product_id+'/'+detail[i].alias+'" class="link-p" style="color:#fff;"><span class="badgeNi">New</span><img src="'+detail[i].imageurl[0]+'" class="" style="height:100px;"></a><p><a href="'+ctrl+'/'+detail[i].m_product_id+'/'+detail[i].alias+'">'+detail[i].name+'</a></p>')
  
}
//detail.forEach(p){
//    
//     product.append('<tr><td>'+p.m_product_id+'</td><td>')
//}

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
