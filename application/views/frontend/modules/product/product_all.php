<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/owl-carousel/owl.carousel.css');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/owl-carousel/owl.theme.css');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/owl-carousel/style.css');?>" />
	<div class="container">
		<div class='my-bg-title'>

			<i class="fa fa-angle-right" aria-hidden="true"></i>HASIL PENCARIAN UNTUK '<span id="search-key"></span>'

		</div>
		<div class="row">
			<div style='width:230px; float:left; margin-right:10px;'>
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
		</div>

    <div id="recentView" style="display: none;">
        <div style='padding:8px; font-family:tahoma; font-size:12px; color:#535151'>
              <!-- $lang_recent_view -->
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i> Baru di lihat<hr>
          </div>
    </div>
  <div id="product" class="promo-front owl-carousel">



	</div>

	</div>
<script>
    var ctrl= "<?php echo base_url('/product/detail')?>";
    var namapotong = '';
    function currencyFormat (num) {
    return  "Rp." +num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")
}
var detail = JSON.parse(localStorage.getItem('product_detail'))
if(detail[0].name)
{
     $('#recentView').show();
}

for(var i=0;i<detail.length;i++)
{

    var str = detail[i].name;
    if(str.length >20)
    {
         namapotong = str.substring(0, 20)+' '+'...';
    }else{
          namapotong = detail[i].name;
    }

    $('#product').append('<p><a href="'+ctrl+'/'+detail[i].m_product_id+'/'+detail[i].alias+'" class="link-p" style="color:#fff;"><span class="badgeNi">New</span><img src="'+detail[i].imageurl[0]+'" class="" style="height:100px;"></a><br><a href="'+ctrl+'/'+detail[i].m_product_id+'/'+detail[i].alias+'">'+namapotong+' </a><br> '+currencyFormat(detail[i].pricelist)+'</p>')

}
</script>

<!-- Demo -->
<script src="<?php echo base_url('assets/owl-carousel/owl.carousel.js');?>"></script>

<script>
$(document).ready(function() {
  $("#owl-demo").owlCarousel({
    autoPlay: 3000,
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
