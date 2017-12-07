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
	width: 130px;
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
.item-box, .item-1, .item-2, .item-3 {
    box-sizing: border-box;
	padding-left: 15px;
	padding-right: 15px;
}
.item-box {
    padding: 8px;
    margin: 0 15px 10px;
}
.view-grid .item-box {
	width: 25%;
	float: left;
	border: 1px solid #ddd;
	margin-bottom: 10px;
	text-align: center;
}
.view-grid .item-box:hover {
	box-shadow: 0 1px 8px rgba(99,99,99,.5);
}
.view-grid .product-detail {
	display: none;
}
.item-3 {
	text-align: center;
}
.view-list .item-box::after {
    content: '';
    clear: both;
    display: block;
    border-top: 1px solid #e30c0c;
}
.view-list .item-1, .view-list .item-3 {
    float: left;
    width: 25%;
}
.view-list .item-2 {
    float: left;
    width: 50%;
}
.toggle-view {
	font-size:15px;
	cursor: pointer;
}
.view-list .view-list-btn, .view-grid .view-grid-btn {
	color:#e30c0c;
	cursor: default;
}
</style>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/pop_cart.css');?>" />

<div style='border-bottom:3px solid #c40202; padding:10px 0px 10px 0px; margin-bottom:20px;'>
	<div class="col-sm-6">
		<div class="row">
			<div class="col-sm-8">
				Items <span id="startItem"></span> to <span id="endItem"></span> of <span id="totalItem"> total</span>
			</div>
			<div class="col-sm-4">
				Tampilan
				<span class="toggle-view view-list-btn"><i class="fa fa-list" aria-hidden="true"></i></span>
				<span class="toggle-view view-grid-btn"><i class="fa fa-th-large" aria-hidden="true"></i></span>
			</div>
		</div>
	</div>

	<div class="col-sm-6">
		<div class="row">
			<div class="col-sm-12 text-right">
				<form class="form-inline">
					<div class="form-group text-right">
						<label for="atur">Atur berdasarkan:</label>
						<select id="order_by" class="form-control" style="font-size: 8pt;height: 30px;width: 140px;">
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

<div id="product-list-unready">
	<div class="row">
		<div class="col-xs-3">
			<div class="img-container-unready"></div>
		</div>

		<div class="col-xs-6">
			<span class="title-unready"></span>
			<ul class="highlight-unready">
				<li></li><li></li><li></li>
			</ul>
			<span class="readmore-unready"></span>
		</div>

		<div class="col-xs-3">
			<span class="price-unready"></span>
			<span class="stock-unready"></span>
			<div class="margin-top-button-unready">
				<span class="button-unready"></span>
				<span class="button-unready"></span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-3">
			<div class="img-container-unready"></div>
		</div>

		<div class="col-xs-6">
			<span class="title-unready"></span>
			<ul class="highlight-unready">
				<li></li><li></li><li></li>
			</ul>
			<span class="readmore-unready"></span>
		</div>

		<div class="col-xs-3">
			<span class="price-unready"></span>
			<span class="stock-unready"></span>
			<div class="margin-top-button-unready">
				<span class="button-unready"></span>
				<span class="button-unready"></span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-3">
			<div class="img-container-unready"></div>
		</div>

		<div class="col-xs-6">
			<span class="title-unready"></span>
			<ul class="highlight-unready">
				<li></li><li></li><li></li>
			</ul>
			<span class="readmore-unready"></span>
		</div>

		<div class="col-xs-3">
			<span class="price-unready"></span>
			<span class="stock-unready"></span>
			<div class="margin-top-button-unready">
				<span class="button-unready"></span>
				<span class="button-unready"></span>
			</div>
		</div>
	</div>
</div>

<div id="productlist" class='row'></div>

<div style="clear:both"></div>

<div class='my-paging'></div>

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
	$('.view-list-btn').click(function(){
		if($('#product-list').hasClass('view-list')) return false;
		$('#product-list').addClass('view-list').removeClass('view-grid');
	})
	$('.view-grid-btn').click(function(){
		if($('#product-list').hasClass('view-grid')) return false;
		$('#product-list').addClass('view-grid').removeClass('view-list');
	})

	$('#list').click(function(){event.preventDefault();$('#products .item').addClass('list-group-item');});
	$('#grid').click(function(){event.preventDefault();$('#products .item').removeClass('list-group-item');});
	$('[data-toggle="tooltip"]').tooltip();

	$("#viewGrid").click(function(){
		$("#btn_list").hide();
		$("#spinner_img").show();
		var dataString = 'id=grid';
		$.ajax ({
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
	for (var i = 0; i < 10; i++) {
		$('.highlight'+ i + ' ul li:gt(3)').hide();
	}
});
function filter(e){
	
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
