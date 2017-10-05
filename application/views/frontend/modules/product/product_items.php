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


<!-- END PRODUCTS -->


<!-- <div class="row my-b-product">
	<div class="col-sm-2"><img src="<?php echo base_url('images/demo/oppo-f3plus-gold.jpg'); ?>" border="0" height="100"></div>
		<div class="col-sm-7"><h5 class='title-product'><?php echo anchor('product/detail', 'ASUS Zenfone Go [ZB500KL] [2/16GB] - Silver Blue');?></h5>
	</div>
	<div class="col-sm-3"><span class='product-price'>Rp 1.399.000</span><br><span class='product-stock'>Stock sisa 3<br>Dikirim hari ini/besok<br></span>
		<div class="btnaddcart">
		<?php echo anchor('customer/contact', '<button class="dropbtnaddcar">ADD TO CART</button>');?>
		</div>
	</div>
</div>

<div class="row my-b-product">
	<div class="col-sm-2"><img src="<?php echo base_url('images/demo/oppo-f3plus-gold.jpg'); ?>" border="0" height="100"></div>
	<div class="col-sm-7"><h5 class='title-product'><?php echo anchor('product/detail', 'ASUS Zenfone Go [ZB500KL] [2/16GB] - Silver Blue');?></h5>
	</div>
	<div class="col-sm-3"><span class='product-price'>Rp 1.399.000</span><br><span class='product-stock'>Stock sisa 3<br>Dikirim hari ini/besok<br></span>
		<div class="btnaddcart">
		<?php echo anchor('customer/contact', '<button class="dropbtnaddcar">ADD TO CART</button>');?>
		</div>
	</div>
</div>

<div class="row my-b-product">
	<div class="col-sm-2"><img src="<?php echo base_url('images/demo/oppo-f3plus-gold.jpg'); ?>" border="0" height="100"></div>
	<div class="col-sm-7"><h5 class='title-product'><?php echo anchor('product/detail', 'ASUS Zenfone Go [ZB500KL] [2/16GB] - Silver Blue');?></h5>
	</div>
	<div class="col-sm-3"><span class='product-price'>Rp 1.399.000</span><br><span class='product-stock'>Stock sisa 3<br>Dikirim hari ini/besok<br></span>
		<div class="btnaddcart">
		<?php echo anchor('customer/contact', '<button class="dropbtnaddcar">ADD TO CART</button>');?>
		</div>
	</div>
</div> -->

<script type="text/javascript">



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

	'<div class="col-sm-6"><div class="row my-b-product"><div class="col-sm-2"><img src="'+p.imageurl+'" alt="..." style:border="0" height="100"></div><div class="col-sm-7"><h5 class="title-product" align="center"><a href="'+base_url+'product/detail/'+p.m_product_id+'">'+p.name+'</a></h5></div><div class="col-sm-3"><span class="product-price"> Rp.'+p.pricelist+'</span><br><p class="product-stock">Stock&nbspSisa&nbsp'+p.stock+'</p><p class="product-stock">Product&nbspAkan&nbspdikirim&nbsphari&nbspini&nbsp<br/>atau&nbspbesok</p><button class="dropbtnaddcar" id="addToCard'+p.m_product_id+'">ADD TO CART</button></div></div></div>'
)

	$("#addToCard"+p.m_product_id).click(function(e){
    e.preventDefault();
	
	var jmlItem = $('#jmlItem').val();	
	var dataString = 'm_product_id='+ p.m_product_id+'&pricelist='+ p.pricelist+'&imageurl='+ p.imageurl+'&name='+ p.name;

	$.ajax
	({
	type: "POST",
	url: "<?php echo site_url('cart/addToCart'); ?>",
	data: dataString,
	success:function(data){
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
	
	
	
	/*$.confirm({
		title: 'Confirm!',
		content: 'Anda yakin akan logout?',
		buttons: {
			confirm: function () {
				document.cookie='x-auth=;path=/;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
				location.href='<?php echo base_url("customer/signIn");?>';
			},
			cancel: function () {
				//$.alert('Canceled!');
			}
		}
	});*/

	});


		// product.append(
		// 	"<div class='row my-b-product'><div class='col-sm-2'>gambar</div><div class='col-sm-7'>0</div><div class='col-sm-3'>1</div>"
		// );
// product.append(
// 	"<div class='row my-b-product'><div class='col-sm-2'>gambar</div><div class='col-sm-7'><h5 class='title-product'>ASUS Zenfone Go [ZB500KL] [2/16GB] - Silver Blue</h5></div><div class='col-sm-3'><span class='product-price'>Rp 1.399.000</span><br><span class='product-stock'>Stock sisa 3<br>Dikirim hari ini/besok<br></span><div class='btnaddcart'><button class="dropbtnaddcar">ADD TO CART</button></div></div></div>"
// );
// product.append(
// 		$(document.createElement('div')).attr("class","row my-b-product").append(
// 		$(document.createElement('div')).attr("class","col-sm-2").append(
// 			'<img src="<?php echo base_url('images/demo/oppo-f3plus-gold.jpg'); ?>" border="0" height="100">'
// 			,
// 			$(document.createElement('div')).attr("class","col-sm-7").append(
// 			'<h5 class="title-product" align="center"><a href="'+base_url+'product/listItem/'+p.name+'">'+p.name+'</a></h5>',
// 			$(document.createElement('div')).attr("class","col-sm-3").append(
// 				'<span class="product-price">Rp 1.399.000</span><br><span class="product-stock">Stock sisa 3<br>Dikirim hari ini/besok<br></span><div class="btnaddcart"><button class="dropbtnaddcar">ADD TO CART</button></div>',
// 			)
// 	)
//
//
// )
//
// )
// );

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
