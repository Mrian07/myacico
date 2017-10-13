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
.asd{
	color:#FE4365;
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

			<div class="product">
			</div>
        </div>

        <!-- <div class="item  col-xs-4 col-lg-4">
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
        </div> -->





    </div>
</div>


<script type="text/javascript">
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
		//'<div id="products" class="row list-group"><div class="item  col-xs-4 col-lg-4"><div class="thumbnail"><img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" /><div class="caption"><h4 class="group inner list-group-item-heading">Product title</h4><p class="group inner list-group-item-text">Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><div class="row"><div class="col-xs-12 col-md-6"><p class="lead">$21.000</p></div><div class="col-xs-12 col-md-6"><a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a></div></div></div></div></div></div>'
		//'<div class="col-md-3 col-sm-6"><span class="thumbnail"><img src="'+p.imageurl+'" alt="..." style:border="0" height="100"><h4><a href="'+base_url+'product/detail/'+p.m_product_id+'">'+p.name+'</a></h4><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p><hr class="line"><div class="row"><div class="col-md-6 col-sm-6"><p class="price">Rp.'+(formatNumber(p.pricelist))+'</p></div><div class="col-md-6 col-sm-6"><button class="btn btn-success right" > BUY ITEM</button></div></div></span></div>'
		//'<div class="col-sm-6"><div class="row my-b-product"><div class="col-sm-2"><img src="'+p.imageurl+'" alt="..." style:border="0" height="100"></div><div class="col-sm-7"><h5 class="title-product" align="center"><a href="'+base_url+'product/detail/'+p.m_product_id+'">'+p.name+'</a></h5></div><div class="col-sm-3"><span class="product-price"> Rp. '+(formatNumber(p.pricelist))+'</span><br><p class="product-stock">Stock&nbspSisa&nbsp'+p.stock+'</p><p class="product-stock">Product&nbspAkan&nbspdikirim&nbsphari&nbspini&nbsp<br/>atau&nbspbesok</p><input type="hidden" id="jmlItem" value="1"><button class="dropbtnaddcar" id="addToCard'+p.m_product_id+'">ADD TO CART</button><td><a href="'+base_url+'product/wishlist/'+p.m_product_id+'" class="btn btn-link" '+disable+'>Add To Wishlist</a></td></div></div></div>'





	)

	//ADD TO CART
	$("#addToCard"+p.m_product_id).click(function(e){
    e.preventDefault();
	var cookie = document.cookie.split('x-auth=');
	var jmlItem = $('#jmlItem').val();


	if(cookie.length > 1){
		var token = cookie[1].split(';').shift();
		//var apiurl = api_base_url +'/order/cart/additem?token='+token;
		var apiurl = api_base_url +'/order/cart/additem';
		var m_product_id = p.m_product_id;
		var qty = jmlItem;
		var pricelist = p.pricelist;
		var weight = p.weight;

		var success = function(r){

			$.confirm({
				title: p.name,
				content: '<img src="'+p.imageurl+'" style="margin-bottom:10px">'+'<p>1 Item berhasil ditambahkan<p>',
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
		var dataString = 'm_product_id='+ p.m_product_id+'&pricelist='+ p.pricelist+'&imageurl='+ p.imageurl+'&name='+ p.name+'&stock='+p.stock+'&jmlItem='+jmlItem+'&weight='+p.weight;

		$.ajax
		({
		type: "POST",
		url: "<?php echo site_url('cart/addToCart'); ?>",
		data: dataString,
		success:function(data){

				if(data=='stockkosong'){
					$.dialog({
						title: p.name,
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
						title: p.name,
						content: '<img src="'+p.imageurl+'" style="margin-bottom:10px">'+'<p>1 Item berhasil ditambahkan<p>',
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
						title: p.name,
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


	});


		box.append(
				$(document.createElement('div')).attr("class","container").append(
				$(document.createElement('div')).attr("class","row my-b-product").append(
				$(document.createElement('div')).attr("class","col-sm-2").append(
				'<img src="'+p.imageurl+'" alt="..." style:border="0" height="100">',
				$(document.createElement('div')).attr("class","col-sm-7").append(
				'<h5 class="title-product" align="center"><a href="'+base_url+'product/listItem/'+p.name+'">'+p.name+'</a></h5>',
				$(document.createElement('div')).attr("class","col-sm-3").append(
				$(document.createElement('span')).attr("class","product-price").append(
				'<span class="product-price"> Rp.'+p.pricelist+'</span>',
				$(document.createElement('span')).attr("class","product-stock").append(
				'<p class="product-stock" align="right">Stock&nbspSisa&nbsp'+p.stock+ '</p>',
				'<p class="asd">Product&nbspAkan&nbspdikirim&nbsphari&nbspini&nbsp<br/>atau&nbspbesok</p>',
				$(document.createElement('div')).attr("class","btnaddcart").append(
				'<button class="btn btn-warning">ADD TO CART</button>'
			)
		)
		)
		)
		)
		)

		)
		)
		);
  });

  product.append('</div>')

});



</script>
