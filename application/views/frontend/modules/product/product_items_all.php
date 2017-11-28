<style>
.yu{
	color: #c40202;
	  font-family: 'Roboto Condensed', sans-serif;
	  font-size: 10pt;
  }
  .yu1{
	font-family: 'Roboto Condensed', sans-serif;
	font-size: 10pt;
	color: #4ba240;
  }
  .dark-red {
	  color: #8a0202;
  }
  .clear-border {
	  border: 0;
  }
  .highlight-list {
	  color: #4b4b4b!important;
	  overflow: hidden;
      height: 50px;
  }
  .highlight-list a.title-product {
	  color: #4b4b4b!important;
	  font-weight: bold;
	  font-size: 1.22em;
	  text-decoration: none!important;
  }
  .btn-add-to-cart {
	  border-radius: 25px!important;
	  padding: 7px 10px;
	  margin-bottom: 7px;
	  background-color: #c40202;
	  font-size: 8pt;
	  width: 100%;
  }
  .btn-add-to-cart:hover {
	  background-color: #8a0202;
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
  .btn-add-to-whishlist.whishlist-active {
	  background-color: #d9840c;
  }
  .pricelist {
	  font-weight: bold;
	  font-family: 'Open Sans', sans-serif !important;
	  font-size: 1.6em;
  }
  .strike-throgh {
	  text-decoration: line-through;
  }
  input[type=number]::-webkit-inner-spin-button, 
  input[type=number]::-webkit-outer-spin-button { 
	-webkit-appearance: none; 
	  appearance: none; 
	margin: 0; 
  }
</style>

    <?php

 //    if ($pro == 1000003)  {
 //    echo "<div class='jumbotron jumbotron-billboard'>
 //      <div class='img'></div>
 //        <div class='my-container'>
 //            <div class='row'>
 //                <div class='col-lg-12'>
 //                    <h1 class='po1'>Laptop Gaming</h1>
 //                    <br/>
 //                    <p>
 //
 //                    </p>
 //
 //                </div>
 //            </div>
 //        </div>
 //    </div>";
 //  } else if ($pro == 1000038) {
 //
 //    echo "<div class='jumbotron jumbotron-billboard'>
 //      <div class='img'></div>
 //        <div class='my-container'>
 //            <div class='row'>
 //                <div class='col-lg-12'>
 //                    <h1 class='po1'>Laptop 2 in  1</h1>
 //                    <br/>
 //                    <p>
 //
 //                    </p>
 //
 //                </div>
 //            </div>
 //        </div>
 //    </div>";
 //  } else if ($pro == 1000015) {
 //    echo "<div class='jumbotron jumbotron-billboard'>
 //      <div class='img'></div>
 //        <div class='my-container'>
 //            <div class='row'>
 //                <div class='col-lg-12'>
 //                    <h1 class='po1'>Laptop Apple</h1>
 //                    <br/>
 //                    <p>
 //
 //                    </p>
 //
 //                </div>
 //            </div>
 //        </div>
 //    </div>";
 //
 //  }  else if ($pro == 1000431)  {
 //    echo "<div class='w3l_banner_nav_right_banner7'>
 //
 //    </div>";
 //  } else if ($pro == 1000009) {
 //    echo "<div class='jumbotron jumbotron-billboard'>
 //      <div class='img'></div>
 //        <div class='my-container'>
 //            <div class='row'>
 //                <div class='col-lg-12'>
 //                    <h1 class='po1'>Laptop Bisnis</h1>
 //                    <br/>
 //                    <p>
 //
 //                    </p>
 //
 //                </div>
 //            </div>
 //        </div>
 //    </div>";
 //  }else if($pro == 1000231) {
 //    echo "<div class='jumbotron jumbotron-billboard'>
 //      <div class='img'></div>
 //        <div class='my-container'>
 //            <div class='row'>
 //                <div class='col-lg-12'>
 //                    <h1 class='po1'>Toner Printer</h1>
 //                    <br/>
 //                    <p>
 //
 //                    </p>
 //
 //                </div>
 //            </div>
 //        </div>
 //    </div>";
 //  } else if($pro == 1000235) {
 //    echo "<div class='jumbotron jumbotron-billboard'>
 //      <div class='img'></div>
 //        <div class='my-container'>
 //            <div class='row'>
 //                <div class='col-lg-12'>
 //                    <h1 class='po1'>Printer Inkjet</h1>
 //                    <br/>
 //                    <p>
 //
 //                    </p>
 //
 //                </div>
 //            </div>
 //        </div>
 //    </div>";
 //  } else if($pro == 1000236) {
 //    echo "<div class='jumbotron jumbotron-billboard'>
 //      <div class='img'></div>
 //        <div class='my-container'>
 //            <div class='row'>
 //                <div class='col-lg-12'>
 //                    <h1 class='po1'>Printer All In One</h1>
 //                    <br/>
 //                    <p>
 //
 //                    </p>
 //
 //                </div>
 //            </div>
 //        </div>
 //    </div>";
 // } else if($pro == 1000237){
 //   echo "<div class='jumbotron jumbotron-billboard'>
 //     <div class='img'></div>
 //       <div class='my-container'>
 //           <div class='row'>
 //               <div class='col-lg-12'>
 //                   <h1 class='po1'>Printer Laser</h1>
 //                   <br/>
 //                   <p>
 //
 //                   </p>
 //
 //               </div>
 //           </div>
 //       </div>
 //   </div>";
 //  } else if ($pro == 1000473) {
 //    echo "<div class='jumbotron jumbotron-billboard'>
 //      <div class='img'></div>
 //        <div class='my-container'>
 //            <div class='row'>
 //                <div class='col-lg-12'>
 //                    <h1 class='po1'>Laptop Consumer</h1>
 //                    <br/>
 //                    <p>
 //
 //                    </p>
 //
 //                </div>
 //            </div>
 //        </div>
 //    </div>";
 //  }  else {
 //
 //    echo "<div class='jumbotron jumbotron-billboard2'>
 //      <div class='img'></div>
 //        <div class='my-container'>
 //            <div class='row'>
 //                <div class='col-lg-12'>
 //        <br/>
 //                    <br/>
 //                    <p>
 //
 //                    </p>
 //
 //                </div>
 //            </div>
 //        </div>
 //    </div>";
 //    }


     ?>

	<div style='border-bottom:3px solid #c40202; padding:10px 0px 10px 0px; margin-bottom:20px;'>
       <div class="col-sm-6">
         <div class="row">
           	<div class="col-sm-8">
            Items <span id="startItem"></span> to <span id="endItem"></span> of <span><?php echo $totalItem; ?> total</span>
          </div>
          <div class="col-sm-4">
		  Tampilan <span style='font-size:15px'><a href='#' class='list-item' data-toggle="tooltip" title="List View" id='viewList'><i class="fa fa-list" aria-hidden="true" id='btn_list'></i></a>
			<img src="<?php echo base_url('images/general/Spinner2.gif');?>" id="spinner_img" style="display:none"></span> <span style='font-size:15px; color:#e30c0c'><i class="fa fa-th-large" aria-hidden="true"></i></span>
			</div>
         </div>
       </div>

			<div class="col-sm-6">
        <div class="row">
				<div class="col-sm-12 text-right">
					<form class="form-inline">
						<div class="form-group text-right">
							<label for="atur">Atur berdasarkan:</label>
							<select name="atur" class="form-control" onchange='filter(this)' style="font-size: 8pt;height: 30px;width: 140px;">
								<option value='5' <?php if($sort_id=='5'){echo"selected";}?>>Produk Terbaru</option>
								<option value='1' <?php if($sort_id=='1'){echo"selected";}?>>Nama: A Ke Z</option>
								<option value='2' <?php if($sort_id=='2'){echo"selected";}?>>Nama: Z Ke A</option>
								<option value='3' <?php if($sort_id=='3'){echo"selected";}?>>Harga: Rendah Ke Tinggi</option>
								<option value='4' <?php if($sort_id=='4'){echo"selected";}?>>Harga: Tinggi Ke Rendah</option>
							</select>
						</div>
					</form>
        <!-- <div class="col-sm-6"> -->
					<!-- <strong>Atur berdasarkan: </strong> -->
        <!-- </div> -->
					<!-- <div class="row my-sort-product">
							
					</div> -->
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
	  $i = -1;
      foreach($hasil as $data){
		$i++;
        //die(print_r($data['imageurl']));
        if(isset($data['imageurl'])){
        $img_url= $data['imageurl'];
        }
        else{
        $img_url= null;
        }
      ?>


        <!-- <div class="tmp-product"> -->
        <div class="col-xs-3">
          <div class='tmp-product'>
            <a href="<?php echo base_url('product/detail/'.$data['m_product_id'].'/'.$data['alias']);?>">
              <img class="img-thumbnail clear-border" src="<?php echo $img_url; ?>" alt="<?php echo $data['name']; ?>" style="width: 100%; min-height: 188px;" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';"/>
            </a>
          <div class='highlight-list text-center'>
          <a class="title-product" href="<?php echo base_url('product/detail/'.$data['m_product_id'].'/'.$data['alias']);?>"><?php echo $data['name']; ?></a><br>
          </div>

          <?php
			// if($data['stock'] < 1) {
			// 	echo "<div class='yu'><i class='fa fa-info-circle' aria-hidden='true'></i> Stock: Tidak tersedia</div>";
			// } else {
				echo "<div class='yu1 text-center'><i class='fa fa-info-circle' aria-hidden='true'></i> Stock: Tersedia</div>";
			// }
		  ?>

          <!-- <p class="dark-red pricelist text-center">
          Rp.<?php echo money($data['pricelist']); ?></p> -->
			<div style="height: 50px">
				<?php if ($i == 0) {?>
					<span class="strike-throgh">Rp <?php echo money($data['pricelist']); ?></span>
					<span class="lead dark-red pricelist" style="font-size: 1.1em;">
						Rp <?php echo money($data['pricelist'] - ($data['pricelist'] * 10 / 100)); ?>
					</span>
					<div>Hemat 
						<span class="lead dark-red pricelist" style="font-size: 1.1em;">
							Rp <?php echo money($data['pricelist'] * 10 / 100); ?> (10%)
						</span>
					</div>
				<?php } else if ($i == 4 || $i == 9) { ?>
					<span class="strike-throgh">Rp <?php echo money(999999999); ?></span>
					<span class="lead dark-red pricelist" style="font-size: 1.1em;">
						Rp <?php echo money(999999999 - (999999999 * 10 / 100)); ?>
					</span>
					<div>Hemat 
						<span class="lead dark-red pricelist" style="font-size: 1.1em;">
							Rp <?php echo money(999999999 * 10 / 100); ?> (10%)
						</span>
					</div>
				<?php } else { ?>
					<div>
						<span class="lead dark-red pricelist">
							Rp <?php echo money($data['pricelist']); ?>
						</span>
					</div>
				<?php } ?>
			</div>

          <input type='hidden' class='form-control' id='jmlItem<?php echo $data['m_product_id'];?>' style='width:70px' value='1' min='1'>


        <div class="btn-group">
        <button type="button" style="border-radius: 25px; padding: 7px 34px; margin-bottom:7px;"  class="btn btn-danger"  onClick="addToCart('<?php echo$data['m_product_id'];?>','<?php echo$data['pricelist'];?>','<?php echo$img_url;?>','<?php echo$data['name'];?>','<?php echo$data['stock'];?>','<?php echo$data['weight']; ?>')"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</button>

        <?php
        //if($cektoken){}
        if($data['isWishList'] =='Y')
        {
        ?>
		<div>
        <button type="button" style="border-radius: 25px;  padding: 8px 55px; margin-bottom:7px;"  class="btn btn-warning" onClick="addWishlist('<?php echo$data['m_product_id'];?>','<?php echo$data['name'];?>','<?php echo$img_url;?>')"><i class="fa fa-heart"  style="font-size:15px;color:grey;"  aria-hidden="true"></i> Wishlist</button>
		</div>
        <?php }else{
        ?>
        <div>
        <a class="btn-add-to-whishlist" onClick="addWishlist('<?php echo$data['m_product_id'];?>','<?php echo$data['name'];?>','<?php echo$img_url;?>')">Add to Wishlist</a>
		</div>
        <?php }
        ?>

        </div>

      </div>
      </div>
    <?php }} ?>
      </div>





<div style="clear:both"></div>

<div class='my-paging'>
  <?php
    if($page>1){
      $previous=$page-1;
      $first =  site_url('product/alllistItem/'.$pro.'/'.$sort_id.'/1');
      $prev =  site_url('product/alllistItem/'.$pro.'/'.$sort_id.'/'.$previous);
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
        $hal =  site_url('product/alllistItem/'.$pro.'/'.$sort_id.'/'.$i);
        $angka .="<a href=$hal class='my-paging-list'>$i</a>";

    }

    //angka tengah
    $angka.="<span class='my-paging-list-on'>$page</span>";
    for($i=$page+1;$i<($page+3);$i++){
      if($i>$jpage)
        break;
        $hal =  site_url('product/alllistItem/'.$pro.'/'.$sort_id.'/'.$i);
        $angka .="<a href=$hal class='my-paging-list'>$i</a>";
    }

    //angka akhir
    $hal =  site_url('product/alllistItem/'.$pro.'/'.$sort_id.'/'.$jpage);
    $angka .=($page+2<$jpage ? "...<a href=$hal class='my-paging-list'>$jpage</a>":"");

    //cetak semua angka
    echo "$angka";

    //next
    if($page<$jpage){
      $next = $page+1;
      $next =  site_url('product/alllistItem/'.$pro.'/'.$sort_id.'/'.$next);
      $last =  site_url('product/alllistItem/'.$pro.'/'.$sort_id.'/'.$jpage);
      echo " <a href=$next class='my-paging-btn'>Next >></a>";
      echo " <a href=$last class='my-paging-btn'>Last ></a>";
    }else{
      echo"Next >  Last >>";
    }

  ?>
</div>


<script type="text/javascript">
$(document).ready(function() {
    $('#list').click(function(){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(){event.preventDefault();$('#products .item').removeClass('list-group-item');});
		$('[data-toggle="tooltip"]').tooltip();

    $("#viewList").click(function(){
      $("#btn_list").hide();
      $("#spinner_img").show();
      var dataString = 'id=list';
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

	var path = '<?php echo $_SERVER['PATH_INFO'] ?>';
	var arrPath = path.split('/');
	console.log(path);
	console.log(arrPath);
	console.log(arrPath[3]);
	$('#search-key').html(arrPath[3]);
	if (arrPath.length == 4) {
		console.log("arrPath = 4");
		$('#startItem').html(1);
		$('#endItem').html(10);
	} else {
		console.log("> 4");
		if (arrPath.length == 6) {

			if (arrPath[5] == 1) {
				console.log("== 1");
				$('#startItem').html(1);
				$('#endItem').html(10);
			} else {
				console.log("!= 1");
				$('#startItem').html((arrPath[5] * 10) - 9);
				$('#endItem').html((arrPath[5] * 10));
			}
		}
	}
});
function filter(id){
  window.location.replace("<?php echo site_url('product/alllistItem/'.$pro.'/'); ?>"+id.value);
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
/*
		$.dialog({
			title: 'Alert!',
			content: 'Untuk menambahkan item kedalam wishlist Anda wajib login terlebih dulu',
			autoClose: 'close|3000',

			},
			closeIcon: true,
			closeIconClass: 'fa fa-close'
		});
*/

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
						$.confirm({
							title: name,
							content: '<img src="'+imageurl+'" style="margin-bottom:10px">'+'<p>'+jmlItem+' Item berhasil ditambahkan kedalam keranjang<p>',
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


		}
	}
}










/*
$(document).ready(function() {
    $('#list').click(function(){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(){event.preventDefault();$('#products .item').removeClass('list-group-item');});
		$('[data-toggle="tooltip"]').tooltip();
});
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

console.info(formatNumber(2665));      // 2,665
console.info(formatNumber(102665));    // 102,665
console.info(formatNumber(111102665)); // 111,102,665
var myNumeral = numeral(1000);
var pro = "<?php echo $pro; ?>";

console.log('asd13',pro);
var value = myNumeral.value();
// 1000

var myNumeral2 = numeral('1,000');

var value2 = myNumeral2.value();
console.log('data1', value2);

var price = 1;
var filter = {
	category:'<?php echo $pro; ?>'
}
filter.price= $('#merk').val();
$.get(api_base_url+"/product/productlist", filter,

function(data){
console.log('data nya adalah:', data);
	var box = $('#title-product');
	var product = $('.product');


	if(data.length == 0) return box.append('<p>Data tidak ditemukan</p>');

	product.append('<div class="row">')
	data.forEach(function(p){

		if(p.stock < 1  )
		          {
		              var disable = 'disabled';
                  var tidakTsd = '<div class="yu">Stock : Tidak Tersedia</div>';

		          }else{
                var tidakTsd = '<div class="yu1">Stock : Tersedia</div>';
              }

							// asd

	product.append(

			'<div class="item  col-xs-4 col-lg-4"><div class="thumbnail"><img class="group list-group-image" src="'+p.imageurl+'" alt="..." style:border="0" height="100"><div class="caption"><h4 class="group inner list-group-item-heading"><a href="'+base_url+'product/detail/'+p.m_product_id+'">'+p.name+'</a>  <a href="'+base_url+'product/wishlist/'+p.m_product_id+'" data-toggle="tooltip" title="Add To Wishlist!"><i class="asd fa fa-heart" aria-hidden="true"></i></a>  </h4><p class="group inner list-group-item-text">'+tidakTsd+'</p> asd <div class="row"><div class="col-xs-12 col-md-6"><p class="lead">Rp.'+(formatNumber(p.pricelist))+'</p></div><div class="col-xs-12 col-md-6"><input type="hidden" id="jmlItem" value="1"><button class="dropbtnaddcar" '+disable+' id="addToCard'+p.m_product_id+'">ADD TO CART</button></div></div></div></div></div>'







	)



  });

  product.append('</div>')

});

*/

</script>
