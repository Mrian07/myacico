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
}
.highlight-list a.title-product {
	color: #4b4b4b!important;
	font-weight: bold;
	font-size: 1.22em;
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

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/pop_cart.css');?>" />

    <div style='border-bottom:3px solid #c40202; padding:10px 0px 10px 0px; margin-bottom:20px;'>
       <div class="col-sm-6">
         <div class="row">
           <div class="col-sm-8">
           Items <span id="startItem"></span> to <span id="endItem"></span> of <span><?php echo $totalItem; ?> total</span>
         </div>
          <div class="col-sm-4">
             Tampilan <span style='font-size:15px; color:#e30c0c'><i class="fa fa-list" aria-hidden="true"></i></span> <span style='font-size:15px'><a href='#' class='list-item' data-toggle="tooltip" title="Grid View" id='viewGrid'><i class="fa fa-th-large" aria-hidden="true" id='btn_list'>
             </i></a><img src="<?php echo base_url('images/general/Spinner2.gif');?>" id="spinner_img" style="display:none">
             </span>
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
      foreach($dathome['productList'] as $key => $data){
				$i++;
        //die(print_r($data['imageurl']));
        if(isset($data['imageurl'])){
        	$img_url= $data['imageurl'];
        }
        else{
        	$img_url= null;
        }
      ?>


      <div class="col-xs-12" style='margin-bottom:10px;'>
        <div class='row' style="padding-bottom: 15px">
            <div class="col-xs-3">
              <a href="<?php echo base_url('product/detail/'.$data['m_product_id'].'/'.$data['alias']);?>">
                <img class="img-thumbnail clear-border" src="<?php echo $img_url; ?>" alt="<?php echo $data['name']; ?>" style="height:200px; width: auto;" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';"/>
              </a>
            </div>
            <div class="col-xs-6">
              <div class='highlight-list' style='text-align:left;'>
              	<a class="title-product" href="<?php echo base_url('product/detail/'.$data['m_product_id'].'/'.$data['alias']);?>"><?php echo $data['name']; ?></a>

								<a href="<?php echo base_url('product/detail/'.$data['m_product_id'].'/'.$data['alias']);?>" style="color: #4b4b4b!important; font-weight: bold">SELENGKAPNYA</a>
              </div>
            </div>
            <div class="col-xs-3">
              <span class="lead dark-red pricelist">
								Rp <?php echo money($data['pricelist']); ?>
              </span>


							<?php

									echo "<div class='yu1'><i class='fa fa-info-circle' aria-hidden='true'></i> Stock: Tersedia</div>";

							?>
							<div class="text-left" style="margin-top: 20px;">
								<input type='hidden' class='form-control text-center' id='jmlItem<?php echo$data['m_product_id'];?>' style='width: 50px; font-size: 9pt; margin-bottom: 8px; height: 29px;' value='1' min='1'>

								<div>
									<div style="width: 130px;">
										<button type="button" class="btn btn-danger btn-add-to-cart" onClick="addToCart('<?php echo$data['m_product_id'];?>','<?php echo$data['pricelist'];?>','<?php echo$img_url;?>','<?php echo$data['name'];?>','<?php echo$data['stock'];?>','<?php echo$data['weight']; ?>')"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</button>
									</div>

								</div>
							</div>
            	</center>
          </div>
        </div>

        <div class="col-xs-12" style='border-top:1px solid #e30c0c'>
        </div>
      </div>
    <?php }} ?>
      </div>







      <div style="clear:both"></div>
      <?php
      		$id_cat=$this->uri->segment(3);
      $page=$page;


       ?>
      <div class='my-paging'>
        <?php
          if($page>1){
            $previous=$page-1;

                $first =  site_url('pages/newProduct/'.'1');
                $prev =  site_url('pages/newProduct/'.$previous);

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
              // $hal =  site_url('pages/newProduct/'.$i);
              $hal =  site_url('pages/newProduct/'.$page.'/'.$i);
              $angka .="<a href=$hal class='my-paging-list'>$i</a>";

          }

          //angka tengah
          $angka.="<span class='my-paging-list-on'>$page</span>";
          for($i=$page+1;$i<($page+3);$i++){
            if($i>$jpage)
              break;

              $hal =  site_url('pages/newProduct/'.$i);
              $angka .="<a href=$hal class='my-paging-list'>$i</a>";
          }

          //angka akhir
              $hal =  site_url('pages/newProduct/'.$jpage);

          $angka .=($page+2<$jpage ? "...<a href=$hal class='my-paging-list'>$jpage</a>":"");

          //cetak semua angka
          echo "$angka";

          //next
          if($page<$jpage){
            $next = $page+1;
            $next =  site_url('pages/newProduct/'.$next);
            $last =  site_url('pages/newProduct/'.$jpage);

            echo " <a href=$next class='my-paging-btn'>Next >></a>";
            echo " <a href=$last class='my-paging-btn'>Last ></a>";
          }else{
            echo"Next >  Last >>";
          }

        ?>
      </div>





      <div class='my-paging'>

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

	var path = '<?php echo $_SERVER['REQUEST_URI']; ?>';
	var arrPath = path.split('/');

	 var cari = arrPath[3];
                cari = cari.replace(/%20/g," ");

		$('#search-key').html(cari);
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

								}
							},
							closeIcon: true,
							closeIconClass: 'fa fa-close'
						});
					}else
					if(data!='gagal'){

						$(".totalCart").html(data);
						$('.cartModal').modal('show');

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
