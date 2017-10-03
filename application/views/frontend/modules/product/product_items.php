<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>

<style>
.price{
		font-size: 30px;
    	margin: 0 auto;
    	color: #333;
	}


	.thumbnail{

		opacity:0.70;
		-webkit-transition: all 0.5s;
		transition: all 0.5s;
		text-align:center;
	}
	.thumbnail:hover{
		opacity:1.00;
		box-shadow: 0px 0px 10px #4bc6ff;
	}
	.line{
		margin-bottom: 5px;
	}
	@media screen and (max-width: 770px) {
		.right{
			float:left;
			width: 100%;
		}
	}


	span.thumbnail {
        border: 1px solid #c40202 !important;
    border-radius: 0px !important;
    -webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.16);
    -moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.16);
    box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.16);
	padding: 10px;
}


.container h4{ color: grey; font-size: 20px; font-family: 'Abel';}

.right {
    float: right;
    border-bottom: 2px solid #0a5971;
}




/*-------*/

.carousel-inner .active.left { left: -25%; }
.carousel-inner .next        { left:  25%; }
.carousel-inner .prev		 { left: -25%; }
.carousel-control 			 { width:  4%; }
.carousel-control.left,.carousel-control.right {margin-left:15px;background-image:none;}
</style>
<?php
 $sumber = 'http://myacico.net:8080/myacico-service/api/product/productlist?category='.$pro;
 $konten = file_get_contents($sumber);
 $data = json_decode($konten, true);

 //echo $data[1]["nama_lokasi"];

 echo "<br/>";
?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

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




<hr size='1'>
<p id="tes"></p>

<h4>Bestseller Products</h4>
</html>


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

	'<div class="col-sm-6"><div class="row my-b-product"><div class="col-sm-2"><img src="'+p.imageurl+'" alt="..." style:border="0" height="100"></div><div class="col-sm-7"><h5 class="title-product" align="center"><a href="'+base_url+'product/detail/'+p.m_product_id+'">'+p.name+'</a></h5></div><div class="col-sm-3"><span class="product-price"> Rp.'+p.pricelist+'</span><br><p class="product-stock">Stock&nbspSisa&nbsp'+p.stock+'</p><p class="product-stock">Product&nbspAkan&nbspdikirim&nbsphari&nbspini&nbsp<br/>atau&nbspbesok</p><button class="dropbtnaddcar">ADD TO CART</button></div></div></div>'
)




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
