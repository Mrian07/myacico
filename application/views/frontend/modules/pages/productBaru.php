
<script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url('assets/css/pagination.css');?>">
<script type="text/javascript" src="<?php echo base_url('assets/js/pagination.js');?>"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
<style>
.pricelist {
  font-weight: bold;
  font-family: 'Open Sans', sans-serif !important;
  font-size: 1.6em;
}
.thumbnail
{
    margin-bottom: 20px;
    padding: 0px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;
}
.thumbnail>img, .thumbnail a>img{
height: 100px;
}
.color-wishlist{
	color:#FE4365;
}
.color-wishlist-disabled{
	color:#dddddd;
}
.yu{
  color: red;
font-family: 'Roboto Condensed', sans-serif;
font-size: 16px;

}
.yu1{
  font-family: 'Roboto Condensed', sans-serif;
  font-size: 16px;
  color: green;
}
.item.list-group-item
{
    float: none;
    width: 100%;
    background-color: #fff;
    margin-bottom: 10px;
}
.item.list-group-item:nth-of-type(odd):hover,.item.list-group-item:hover
{
    background: #428bca;
}

.item.list-group-item .list-group-image
{
    margin-right: 10px;
}
.item.list-group-item .thumbnail
{
    margin-bottom: 0px;
}
.item.list-group-item .caption
{
    padding: 9px 9px 0px 9px;
}
.item.list-group-item:nth-of-type(odd)
{
    background: #eeeeee;
}

.item.list-group-item:before, .item.list-group-item:after
{
    display: table;
    content: " ";
}

.item.list-group-item img
{
    float: left;
}
.item.list-group-item:after
{
    clear: both;
}
.list-group-item-text
{
    margin: 0 0 11px;
}
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

@media only screen and (max-width: 768px) {
    /* For mobile phones: */
    [class*="col-"] {
        width: 100%;
    }
}
.jumbotron-billboard .img {
    margin-bottom: 0px;
    opacity: 0.5;
    color: #fff;
    background: #000 url("https://myacico.com/media/bannerslider/lel1.jpg") center center;
    width: 100%;
    height: 100%;
    background-size: cover;
    overflow: hidden;


  position:absolute;
  top:0;left:0;
  z-index:1;
}
.jumbotron-billboard2 .img {
    margin-bottom: 0px;
    opacity: 0.5;
    color: #fff;
    background: #000 url("https://s1.postimg.org/40i0xfe8sf/banner_atas.png") center center;
    width: 100%;
    height: 100%;
    background-size: cover;
    overflow: hidden;


  position:absolute;
  top:0;left:0;
  z-index:1;
}
h1.po1{
  color: White;
}
.jumbotron {position:relative;padding:50px;}
.jumbotron .container {z-index:2;
 position:relative;
  z-index:2;
}
.pagination {
    display: inline-block;
}

.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
}

.pagination a.active {
    background-color: #4CAF50;
    color: white;
    border-radius: 5px;
}

.pagination a:hover:not(.active) {
    background-color: #ddd;
    border-radius: 5px;
}
.strike-throgh {
	text-decoration: line-through;

}
.lead{
  color: #8A0202;
}
.btn-add-to-whishlist {
  border-radius: 25px!important;
  /* padding: 7px 10px; */
  margin-bottom: 7px;
  /* background-color: #006600; */
  font-size: 8pt;
  width: 100%;
  font-weight: bold;
  cursor: pointer;
  text-decoration: none!important;
}
</style>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/pop_cart.css');?>" />


    <div class='row'>



      <?php
      $totalItem = 1;
      if($totalItem==0){
        echo"<center>Maaf item yang Anda cari belum tersedia.</center>";
      }else{

        $test1 = 1;
        $jmlslide2=count($dathome['level_2']);
      $n=1;
      foreach($dathome['level_2'] as $key => $itemslide2){
        if($n=="$jmlslide2"){
          $active='active';
        }else{
          $active='';
        }

      ?>

        <div class="col-xs-12" style='margin-bottom:10px;'>
          <div class='row'>
              <div class="col-xs-2">
                <a href="<?php echo base_url('product/detail/'.$itemslide2['product_id'].'/'.$itemslide2['alias']);?>">
                  <img class="group list-group-image" src="<?php echo $itemslide2['imageurl']; ?>" alt="<?php echo $itemslide2['name']; ?>" style="height:200px; width: auto;" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';"/>
                </a>
              </div>
              <div class="col-xs-7">
                <div class='nm-product-detail' style='text-align:left;margin-left:20px'>
                <b><a href="<?php echo base_url('product/detail/'.$itemslide2['product_id'].'/'.$itemslide2['alias']);?>"><?php echo $itemslide2['name']; ?></a></b>
                  <br/>
                  <div style="padding-left:30px">


                </div>
                  </div>
              </div>


              <div class="col-xs-3"><center>


					<span class="strike-throgh">Rp <?php echo money($itemslide2['pricelist']); ?></span>
					<span class="lead dark-red pricelist" style="font-size: 1.1em;">

					</span>
					<div>Hemat
						<span class="lead dark-red pricelist" style="font-size: 1.4em;">

                                                                                (<?php echo $itemslide2['discount']; ?>%)
						</span>

					</div>

					<div>
						<span class="lead dark-red pricelist">
							Rp <?php echo money($itemslide2['pricelist']); ?>
						</span>
					</div>


                <?php echo "<div class='yu1'>Stock :  Tersedia</div>";
                //validasi untuk cek stok jika tidak ada
                  // echo "ini ".$itemslide2['stock'];
                // if($itemslide2['stock'] < 1){
                //   echo "<div class='yu'>Stock : Tidak Tersedia</div>";
                // }else{
                //   echo "<div class='yu1'>Stock :  Tersedia</div>";
                // }
                //akhir dari validasi stock
                ?>
                <br>
                <center><input type='hidden' class='form-control' id='jmlItem<?php echo $itemslide2['product_id'];?>' style='width:70px' value='1' min='1'></center><br>



              <div class="btn-group">
                <center>
                <button type="button" class="btn btn-danger" style="border-radius: 25px;  padding: 8px 34px; margin-bottom:7px;"    onClick="addToCart('<?php echo $itemslide2['product_id'];?>','<?php echo $itemslide2['pricelist'];?>','<?php echo $itemslide2['imageurl']; ?>','<?php echo $itemslide2['name'];?>','<?php echo $itemslide2['stock'];?>','<?php echo$itemslide2['weight']; ?>')"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</button></center>



                <button type="button" class="btn-add-to-whishlist" style="border-radius: 25px;  padding: 8px 45px; margin-bottom:7px;"  onClick="addWishlist('<?php echo$itemslide2['product_id'];?>','<?php echo$itemslide2['name'];?>','<?php echo $itemslide2['imageurl']; ?>')"><i class="fa fa-heart"  style="font-size:15px;color:grey;"  aria-hidden="true"></i> Wishlist</button>


              </div></center>
            </div>
          </div>

          <div class="col-xs-12" style='border-top:1px solid #e30c0c'>
          </div>
        </div>
      <?php    $test1++;} } ?>
      </div>





<div style="clear:both"></div>


<!-- Modal -->
<div id="cartModal" class="modal fade cartModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content" style="width:680px">
      <div class="modal-body">
        <?php $this->load->view('frontend/modules/cart/modal_cart.php',$this->data); ?>
      </div>
    </div>
  </div>
</div>
<script src="jquery.rateyo.js"></script>
<script type="text/javascript">


$(document).ready(function() {
    $('#list').click(function(){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(){event.preventDefault();$('#products .item').removeClass('list-group-item');});
		$('[data-toggle="tooltip"]').tooltip();
    $("#viewGrid").click(function(){
      $("#btn_list").hide();
      $("#spinner_img").show();
      var dataString = 'id=grid';
      $.ajax
    		({
    		type: "POST",
    		url: "<?php echo site_url('product/changeView'); ?>",
    		data: dataString,
    		success:function(data){
          window.location.reload();
    			}

    		});

    });
});




var token = document.cookie.split('x-auth=')[1].split(';').shift();
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


        $.ajax({
                type: "POST",
		url: "<?php echo site_url('customer/signin'); ?>",
		data: dataString,
                success:function(data){
                    console.log('oooo',data);

                 window.location.replace(base_url+"customer/signin/"+id);
                }

        })
	}
}


function addToCart(product_id,pricelist,imageurl,name,stock,weight){

	var jmlItem = $('#jmlItem'+product_id).val();
	var dataString = 'product_id='+ product_id+'&pricelist='+ pricelist+'&imageurl='+ imageurl+'&name='+ name+'&stock='+stock+'&jmlItem='+jmlItem+'&weight='+weight;

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
			var product_id = product_id;
			var qty = jmlItem;
			var pricelist = pricelist;
			var weight = weight;

			var success = function(r){

        $('.cartModal').modal('show');
				// $.confirm({
				// 	title: name,
				// 	content: '<img src="'+imageurl+'" style="margin-bottom:10px">'+'<p>'+jmlItem+' Item berhasil ditambahkan<p>',
				// 	autoClose: 'close|3000',
				// 	buttons: {
				// 		close: function () {
				// 			//$.alert('action is canceled');
				// 		}
				// 	},
				// 	closeIcon: true,
				// 	closeIconClass: 'fa fa-close'
				// });

				//Buat update cart, fungsi ini ada di file header.php
				totalCart();

			};

			$.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify(
				{
					"productId":product_id,
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
						// 	title: name,
						// 	content: '<img src="'+imageurl+'" style="margin-bottom:10px">'+'<p>'+jmlItem+' Item berhasil ditambahkan kedalam keranjang<p>',
						// 	autoClose: 'close|3000',
						// 	buttons: {
						// 		close: function () {
						// 			//$.alert('action is canceled');
						// 		}
						// 	},
						// 	closeIcon: true,
						// 	closeIconClass: 'fa fa-close'
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





</script>
