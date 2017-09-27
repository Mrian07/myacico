<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
<style>
.price{
		font-size: 30px;
    	margin: 0 auto;
    	color: #333;
	}
.product-stock{
	color: green;
	font-size:15px;
  font-family: 'Abel';
}
.asd{
	color: red;
	font-size:15px;
	font-family: 'Abel';
	margin-bottom: 10px;
	margin-top: -40px;
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


.container h4{margin-top:20px; margin-bottom:30px; color: grey; font-size: 20px; float: left; margin:-10px 20px 30px 500px;  font-family: 'Abel';}

.right {
    float: right;
    border-bottom: 2px solid #0a5971;
}
h2{
	color: black;
	font-size: 15px;
	margin:-5px 20px 40px 968px;
}
.btn-info {
    color: #fff;
    background-color: #19b4e2;
    border-color: #19b4e2;
	font-size:7px;
	font-weight:600;
}
p{
	font-size:8px;
	color: green;
		margin:0px 20px 40px 970px;
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
<div class="row my-sort-product">
	<div class="col-sm-9">
		<?php echo "&nbspItems 1 to 10 of ".count($data).""; ?>

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
<div class="row" id="title-product">
</div>
<!-- END PRODUCTS -->
</div>

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

<script type="text/javascript">

$.get(api_base_url+"/product/productlist?category=<?php echo $pro; ?>",
function(data){
console.log('data nya adalah:', data);
	var box = $('#title-product');


	if(data.length == 0) return box.append('<p>Data tidak ditemukan</p>');


	data.forEach(function(p){

		box.append(


				$(document.createElement('div')).attr("class","row my-b-product").append(
					$(document.createElement('div')).attr("class","col-sm-2").append(
					$(document.createElement('div')).attr("class","title-product").append(
						$(document.createElement('h5')).attr("class","title-product").append(
							$(document.createElement('span')).attr("class","title-product").append(
							$(document.createElement('div')).attr("class","col-sm-3").append(

								$(document.createElement('span')).attr("class","product-stock").append(
					'<img src="'+p.imageurl+'" alt="...">',

					'<a href="'+base_url+'product/listItem/'+p.name+'"><h4 align="center">'+p.name+'</h4><br/></a>',
					'<h2> Rp.'+p.pricelist+'</h2>',
					'<p class="product-stock">Stock&nbspSisa&nbsp'+p.stock+ '</p>',
					'<p class="asd">Product&nbspAkan&nbspdikirim&nbsphari&nbspini&nbsp<br/>atau&nbspbesok</p>',
			'<button class="btn btn-warning" style=" margin-left: 960px;">ADD TO CART</button>'

			)
			)
				)
				)
				)
        )
      )
    );
  });
});
</script>
