<script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>


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


<div class="product">
</div>
<script type="text/javascript">
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
	product.append(

		'<div class="col-sm-6"><div class="row my-b-product"><div class="col-sm-2"><img src="'+p.imageurl+'" alt="..." style:border="0" height="100"></div><div class="col-sm-7"><h5 class="title-product" align="center"><a href="'+base_url+'product/detail/'+p.m_product_id+'">'+p.name+'</a></h5></div><div class="col-sm-3"><span class="product-price"> Rp. '+(formatNumber(p.pricelist))+'</span><br><p class="product-stock">Stock&nbspSisa&nbsp'+p.stock+'</p><p class="product-stock">Product&nbspAkan&nbspdikirim&nbsphari&nbspini&nbsp<br/>atau&nbspbesok</p><input type="hidden" id="jmlItem" value="1"><button class="dropbtnaddcar" id="addToCard'+p.m_product_id+'">ADD TO CART</button><button class="dropbtnaddcar" id="addToCard'+p.m_product_id+'">ADD TO CART</button></div></div></div>'


	)

	//ADD TO CART
	$("#addToCard"+p.m_product_id).click(function(e){
    e.preventDefault();
	var cookie = document.cookie.split('x-auth=');
	var jmlItem = $('#jmlItem').val();


	if(cookie.length > 1){
		var token = cookie[1].split(';').shift();
		var apiurl = api_base_url +'/order/cart/additem?token='+token;

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
		) , url: apiurl, success: success, error: error });

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
