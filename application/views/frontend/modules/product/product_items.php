<?php
$curr = (int)$this->uri->segment(6);
?>
<script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url('assets/css/pagination.css');?>">
<script type="text/javascript" src="<?php echo base_url('assets/js/pagination.js');?>"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
<style>
.thumbnail
{
    margin-bottom: 20px;
    padding: 0px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;
}
.pricelist {
  font-weight: bold;
  font-family: 'Open Sans', sans-serif !important;
  font-size: 1.6em;
  color : #8A0202;
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
</style>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/pop_cart.css');?>" />
<?php
	$sumber = $baseApiUrl.'/product/productlist?category='.$pro;
 //$sumber = 'http://myacico.net:8080/myacico-service/api/product/productlist?category='.$pro;
 $konten = file_get_contents($sumber);

 $data = json_decode($konten, true);
$saw=$this->uri->segment(5);
if($saw==Null)
{
    $sort_id ="all";
}else{
    $sort_id = $saw;
}
//echo $data[1]["nama_lokasi"];

?>



    <div style='border-bottom:3px solid #c40202; padding:10px 0px 10px 0px; margin-bottom:20px;'>
       <div class="col-sm-8" style='text-align:left; padding:0px; margin:0px'>
         <div class="row">
           <div class="col-sm-3">
             Total items <?php echo $totalItem; ?>
          </div>
          <div class="col-sm-9">
            Tampilan <span style='font-size:15px'><a href='#' class='list-item' data-toggle="tooltip" title="List View" id='viewList'><i class="fa fa-list" id='btn_list' aria-hidden="true"></i></a><img src="<?php echo base_url('images/general/Spinner2.gif');?>" id="spinner_img" style="display:none">
            </span> <span style='font-size:15px; color:#e30c0c'><i class="fa fa-th-large" aria-hidden="true"></i></span>
          </div>
        </div>

       </div>
        <div class="col-sm-4">
          <div class="row">
          <div class="col-sm-3">
              <strong>Urutkan: </strong>
          </div>
          <div class="col-sm-9">
               <div class="row my-sort-product">
                   <select name="urutkan" class="form-control" onchange='filter(this)'>
                   <option value='5' <?php if($sort_id=='5'){echo"selected";}?>>Produk Terbaru</option>
                   <option value='1' <?php if($sort_id=='1'){echo"selected";}?>>Nama: A Ke Z</option>
                   <option value='2' <?php if($sort_id=='2'){echo"selected";}?>>Nama: Z Ke A</option>
                   <option value='3' <?php if($sort_id=='3'){echo"selected";}?>>Harga: Rendah Ke Tinggi</option>
                   <option value='4' <?php if($sort_id=='4'){echo"selected";}?>>Harga: Tinggi Ke Rendah</option>
                   </select>
                </div>
              </div>
          </div>


      </div>
        <div style="clear:both"></div>
    </div>


    <div class='row'>
      <?php

      if($totalItem==0){
        echo"<center>Maaf item yang Anda cari belum tersedia.</center>";
      }else{

      $no = $posisi+1;
          $test1 = 1;
      foreach($hasil as $data){
          $coment_rate =$data['rate'];
        if(isset($data['imageurl'])){
        $img_url= $data['imageurl'];
        }
        else{
        $img_url= null;
        }
      ?>
      <script>


        $(function () {
          var rate = "<?php  echo  $coment_rate;?>";
          var test1 =  "<?php echo $test1; ?>";
        $("#rateYo"+test1).rateYo({
            rating: rate,
            starWidth: "15px",
            readOnly: true,

          });
        });
      </script>

        <div class="col-xs-3">
          <div class='tmp-product'>
            <a href="<?php echo base_url('product/detail/'.$data['m_product_id'].'/'.$data['alias']);?>">
              <img class="group list-group-image" src="<?php echo $img_url; ?>" alt="<?php echo $data['name']; ?>" style="height:120px; width: auto;" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';"/>
            </a>
          <div class='nm-product-detail'>
          <a href="<?php echo base_url('product/detail/'.$data['m_product_id'].'/'.$data['alias']);?>"><?php echo $data['name']; ?></a><br>
        </div><br/>
        <div style="padding-left:50px">
        <div class="ratting-container">

          <?php echo "<div id='rateYo".$test1."' class='detail-prod-rating' style='z-index:-1'></div><span class='ratting-text'></span>" ?>


          <!-- <div id="rateYo"  class="detail-prod-rating"></div><span class="ratting-text">(<?php echo $data['rate'];?>) -->
          <div class="clearfix"></div>
        </div>

      </div>

          <?php
          echo "<div class='yu1'><i class='fa fa-info-circle' aria-hidden='true'></i> Stock: Tersedia</div>";
          //validasi untuk mengecek stock
          // if($data['stock'] < 1)
          // echo "<div class='yu'>Stock : Tidak Tersedia</div>";
          // else{
          // echo "<div class='yu1'>Stock :  Tersedia</div>";
          // }
          //akhir dari validasi

          ?>
          <p class="lead">
           <?php if ($data['specialPrice'] > 0) { ?>
					<span class="strike-throgh">Rp <?php echo money($data['pricelist']); ?></span>
					<span class="lead dark-red pricelist" style="font-size: 1.1em;">
						Rp <?php echo money(($data['specialPrice'])); ?>
					</span>
					<div>Hemat
						<span class="lead dark-red pricelist" style="font-size: 1.1em;">
							Rp <?php echo money($data['pricelist'] - ($data['specialPrice'])); ?>
                                                                                (<?php echo $data['discount']; ?>%)
						</span>
					</div>
				<?php } else { ?>
					<div>
						<span class="lead dark-red pricelist">
							Rp <?php echo money($data['pricelist']); ?>
						</span>
					</div>
				<?php } ?>

          </p>
          <center><input type='hidden' class='form-control' id='jmlItem<?php echo$data['m_product_id'];?>' style='width:70px' value='1' min='1'></center><br>


        <div class="btn-group"><center>
          <button type="button" class="btn btn-danger" style="border-radius: 25px; padding: 7px 34px; margin-bottom:7px;"  onClick="addToCart('<?php echo$data['m_product_id'];?>','<?php echo$data['pricelist'];?>','<?php echo$img_url;?>','<?php echo$data['name'];?>','<?php echo$data['stock'];?>','<?php echo$data['weight']; ?>')"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</button></center>

          <?php
          if($data['isWishList'] =='Y')
          {
          ?>
          <center>
            <div style=" margin-left:2px;">
          <a class="btn-add-to-whishlist" onClick="addWishlist('<?php echo$data['m_product_id'];?>','<?php echo$data['name'];?>','<?php echo$img_url;?>')">Add to Wishlist</a></center>
        </div>
          <?php }else{
          ?>
          <div style=" margin-left:2px;">
          <a class="btn-add-to-whishlist" onClick="addWishlist('<?php echo$data['m_product_id'];?>','<?php echo$data['name'];?>','<?php echo$img_url;?>')">Add to Wishlist</a>
        </div>

          <?php }
          ?>

        </div>

      </div>
      </div>
    <?php  $test1++; } } ?>
      </div>





<div style="clear:both"></div>

<div class='my-paging'>
  <?php
    if($page>1){
      $previous=$page-1;
      $first =  site_url('product/listItem/'.$pro.'/'.$alias.'/'.$sort_id.'/1');
      $prev =  site_url('product/listItem/'.$pro.'/'.$alias.'/'.$sort_id.'/'.$previous);
      echo "<a href=$first class='my-paging-btn'><< First</a> ";
      echo "<a href=$prev class='my-paging-btn'>< Previous</a> ";
    }else{
      echo"<< First < Previous ";
    }

    //angka awal
    $angka = ($page > 3 ? "...":"");
    for($i=$page-1;$i<$page;$i++){
      if($i<1)
        continue;
        $hal =  site_url('product/listItem/'.$pro.'/'.$alias.'/'.$sort_id.'/'.$i);
        $angka .="<a href=$hal class='my-paging-list'>$i</a>";

    }

    //angka tengah
    $angka.="<span class='my-paging-list-on'>$page</span>";
    for($i=$page+1;$i<($page+3);$i++){
      if($i>$jpage)
        break;
        $hal =  site_url('product/listItem/'.$pro.'/'.$alias.'/'.$sort_id.'/'.$i);
        $angka .="<a href=$hal class='my-paging-list'>$i</a>";
    }

    //angka akhir
    $hal =  site_url('product/listItem/'.$pro.'/'.$alias.'/'.$sort_id.'/'.$jpage);
    $angka .=($page+2<$jpage ? "...<a href=$hal class='my-paging-list'>$jpage</a>":"");

    //cetak semua angka
    echo "$angka";

    //next
    if($page<$jpage){
      $next = $page+1;
      $next =  site_url('product/listItem/'.$pro.'/'.$alias.'/'.$sort_id.'/'.$next);
      $last =  site_url('product/listItem/'.$pro.'/'.$alias.'/'.$sort_id.'/'.$jpage);
      echo " <a href=$next class='my-paging-btn'>Next >></a>";
      echo " <a href=$last class='my-paging-btn'>Last ></a>";
    }else{
      echo"Next >  Last >>";
    }



  ?>
</div>


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

    $("#viewList").click(function(){
      var dataString = 'id=list';
      $("#btn_list").hide();
      $("#spinner_img").show();
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

function filter(id){
 //  console.log('sam',$('#sort_id').val(id.value));
  window.location.replace("<?php echo site_url('product/listItem/'.$pro.'/'.$alias.'/'); ?>"+id.value);

}


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


function addToCart(m_product_id,pricelist,imageurl,name,stock,weight){

	var jmlItem = $('#jmlItem'+m_product_id).val();
	var dataString = 'm_product_id='+ m_product_id+'&pricelist='+ pricelist+'&imageurl='+ imageurl+'&name='+ name+'&stock='+stock+'&jmlItem='+jmlItem+'&weight='+weight;

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
