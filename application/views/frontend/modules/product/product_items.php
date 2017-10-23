<script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<style>
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
font-size: 20px;

}
.yu1{
  font-family: 'Roboto Condensed', sans-serif;
  font-size: 20px;
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


</style>

<?php
	$sumber = $baseApiUrl.'/product/productlist?category='.$pro;
 //$sumber = 'http://myacico.net:8080/myacico-service/api/product/productlist?category='.$pro;
 $konten = file_get_contents($sumber);
 $data = json_decode($konten, true);

 //echo $data[1]["nama_lokasi"];

 echo "<br/>";
?>
<div class="row my-sort-product">
	<div class="col-sm-9">
		<?php echo "&nbspItems 1 to ".count($data).""; ?>

	</div>
	<div class="col-sm-3">

		<div class="form-group">
		<label for="usr">Urutkan:</label>
		<select name="urutkan" class="form-control">
		<option value='relevance'>Relevance</option>
		<option value='produk terlaris'>Produk Terlaris</option>
		<option value=''>Nama: A Ke Z</option>
		<option value=''>Nama: Z Ke A</option>
		<option value=''>Harga: Rendah Ke Tinggi</option>
		<option value=''>Harga: Tinggi Ke Rendah</option>
		</select>
		</div>


	</div>
</div>

<div class="container">
    <div class="well well-sm">
        <strong>Category Title</strong>
        <div class="btn-group">
            <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
            </span> List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                class="glyphicon glyphicon-th"></span> Grid</a>
        </div>
    </div>
    <div id="products" class="row list-group">

			<!---<div class="product">
			</div>-->

        <?php foreach($hasil as $data){
          if(isset($data['imageurl'])){
          ?>

		 <div class="item  col-xs-3 col-lg-3">
            <div class="thumbnail">
                <img class="group list-group-image" style='margin-top:10px;' src="<?php echo $data['imageurl']; ?>" alt="" />
                <div class="caption">
                    <h5 class="group inner list-group-item-heading" style='text-align:center;'><a href="<?php echo base_url('product/detail/'.$data['m_product_id']);?>"><?php echo $data['name']; ?></a>  </h5><br>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        <div class="panel panel-default">
            <div class="panel-body">
						<center>
						<p class="lead">
                                Rp.<?php echo money($data['pricelist']); ?></p>


						<h4>
              <?php if($cektoken){ ?>
              <a href='#' onClick="addWishlist('<?php echo$data['m_product_id'];?>','<?php echo$data['name'];?>','<?php echo$data['imageurl'];?>')"  title="Add To Wishlist!"><i class="color-wishlist fa fa-heart" aria-hidden="true"></i></a>
            <?php }else{?>
              <i class="color-wishlist-disabled fa fa-heart" aria-hidden="true"></i>
            <?php } ?>
            </h4>
                                                <input type='number' class='form-control' id='jmlItem<?php echo$data['m_product_id'];?>' style='width:70px' value='1' min='1'><br>
						<button class="dropbtnaddcar" onClick="addToCart('<?php echo$data['m_product_id'];?>','<?php echo$data['pricelist'];?>','<?php echo$data['imageurl'];?>','<?php echo$data['name'];?>','<?php echo$data['stock'];?>','<?php echo$data['weight'];?>')">ADD TO CART</button>

          </div></div>
						 </center>

                </div>
            </div>
        </div>

		<?php } } ?>
       <!---
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Product title</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		-->

		</div>



    </div>
</div>


<script type="text/javascript">
var token = document.cookie.split('x-auth=')[1].split(';').shift();
function addWishlist(id,name,imageurl){
	var dataString = 'id='+ id;

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

		$.dialog({
			title: 'Alert!',
			content: 'Untuk menambahkan item kedalam wishlist Anda wajib login terlebih dulu',
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
