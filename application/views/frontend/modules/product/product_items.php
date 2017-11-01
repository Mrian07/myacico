<?php
$curr = (int)$this->uri->segment(6);
?>
<script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

</style>

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

 echo "<br/>";
?>


    <?php

    if ($pro == 1000003)  {
    echo "<div class='jumbotron jumbotron-billboard'>
      <div class='img'></div>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12'>
                    <h1 class='po1'>Laptop Gaming</h1>
                    <br/>
                    <p>

                    </p>

                </div>
            </div>
        </div>
    </div>";
  } else if ($pro == 1000038) {

    echo "<div class='jumbotron jumbotron-billboard'>
      <div class='img'></div>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12'>
                    <h1 class='po1'>Laptop 2 in  1</h1>
                    <br/>
                    <p>

                    </p>

                </div>
            </div>
        </div>
    </div>";
  } else if ($pro == 1000015) {
    echo "<div class='jumbotron jumbotron-billboard'>
      <div class='img'></div>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12'>
                    <h1 class='po1'>Laptop Apple</h1>
                    <br/>
                    <p>

                    </p>

                </div>
            </div>
        </div>
    </div>";

  }  else if ($pro == 1000431)  {
    echo "<div class='w3l_banner_nav_right_banner7'>

    </div>";
  } else if ($pro == 1000009) {
    echo "<div class='jumbotron jumbotron-billboard'>
      <div class='img'></div>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12'>
                    <h1 class='po1'>Laptop Bisnis</h1>
                    <br/>
                    <p>

                    </p>

                </div>
            </div>
        </div>
    </div>";
  }else if($pro == 1000231) {
    echo "<div class='jumbotron jumbotron-billboard'>
      <div class='img'></div>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12'>
                    <h1 class='po1'>Toner Printer</h1>
                    <br/>
                    <p>

                    </p>

                </div>
            </div>
        </div>
    </div>";
  } else if($pro == 1000235) {
    echo "<div class='jumbotron jumbotron-billboard'>
      <div class='img'></div>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12'>
                    <h1 class='po1'>Printer Inkjet</h1>
                    <br/>
                    <p>

                    </p>

                </div>
            </div>
        </div>
    </div>";
  } else if($pro == 1000236) {
    echo "<div class='jumbotron jumbotron-billboard'>
      <div class='img'></div>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12'>
                    <h1 class='po1'>Printer All In One</h1>
                    <br/>
                    <p>

                    </p>

                </div>
            </div>
        </div>
    </div>";
 } else if($pro == 1000237){
   echo "<div class='jumbotron jumbotron-billboard'>
     <div class='img'></div>
       <div class='container'>
           <div class='row'>
               <div class='col-lg-12'>
                   <h1 class='po1'>Printer Laser</h1>
                   <br/>
                   <p>

                   </p>

               </div>
           </div>
       </div>
   </div>";
  } else if ($pro == 1000473) {
    echo "<div class='jumbotron jumbotron-billboard'>
      <div class='img'></div>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12'>
                    <h1 class='po1'>Laptop Consumer</h1>
                    <br/>
                    <p>

                    </p>

                </div>
            </div>
        </div>
    </div>";
  }  else {

    echo "<div class='jumbotron jumbotron-billboard2'>
      <div class='img'></div>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12'>
        <br/>
                    <br/>
                    <p>

                    </p>

                </div>
            </div>
        </div>
    </div>";
    }


     ?>

<div class="row my-sort-product">
	<div class="col-sm-9">
		<?php echo "&nbspItems 1 to ".count($data).""; ?>

	</div>
	<div class="col-sm-3">

		<div class="form-group">
		<label for="usr">Urutkan:</label>
		<select name="urutkan" class="form-control" onchange='filter(this)'>
		<option value='5'>Produk Terbaru</option>
		<option value='1'>Nama: A Ke Z</option>
		<option value='2'>Nama: Z Ke A</option>
		<option value='3'>Harga: Rendah Ke Tinggi</option>
		<option value='4'>Harga: Tinggi Ke Rendah</option>
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
                    <div  style='height:80px'>
                    <h5 class="group inner list-group-item-heading" style='text-align:center;'><a href="<?php echo base_url('product/detail/'.$data['m_product_id'].'/'.$data['alias']);?>"><?php echo $data['name']; ?></a>  </h5><br>
                    </div>
                        <div class="panel panel-default">
            <div class="panel-body">
						<center>
              <?php
              //if($cektoken){}
                if($data['stock'] < 1)
         echo "<div class='yu'>Stock : Tidak Tersedia</div>";
                else{
                 echo "<div class='yu1'>Stock :  Tersedia</div>";
                }
            ?>
						<p class="lead">
                                Rp.<?php echo money($data['pricelist']); ?></p>


		<h4>

            </h4>
                                                <input type='number' class='form-control' id='jmlItem<?php echo$data['m_product_id'];?>' style='width:70px' value='1' min='1'><br>


            <center>
              <div class="btn-group">
                <button type="button" class="btn btn-danger"  onClick="addToCart('<?php echo$data['m_product_id'];?>','<?php echo$data['pricelist'];?>','<?php echo$data['imageurl'];?>','<?php echo$data['name'];?>','<?php echo$data['stock'];?>','<?php echo$data['weight']; ?>')"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</button>

                <?php
                //if($cektoken){}
                  if($data['isWishList'] =='Y')
                  {
              ?>

               <button type="button" class="btn btn-warning" onClick="addWishlist('<?php echo$data['m_product_id'];?>','<?php echo$data['name'];?>','<?php echo$data['imageurl'];?>')"><i class="fa fa-heart"  style="font-size:15px;color:grey;"  aria-hidden="true"></i> Wishlist</button>
            <?php }else{
           ?>







               <button type="button" class="btn btn-success" onClick="addWishlist('<?php echo$data['m_product_id'];?>','<?php echo$data['name'];?>','<?php echo$data['imageurl'];?>')"><i class="fa fa-heart" style="color:#dffd54;" aria-hidden="true"></i> Wishlist</button>




            <?php }
            ?>


           </center>

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

<div class="text-center">
    <ul class="pagination">
   <!--<li class=prev><a href=# aria-label=Previous><span aria-hidden=true>&laquo;</span></a></li>-->

       <?php
         //die(print_r("sam".$curr));
        if($curr == null)
        {
            $curr2=2;
        }else {
            $curr2=1;
        }
//        die(print_r("sam".$curr));
       if($curr > 1){
           $prevCr=$curr;
           $prev =  site_url('product/listItem/'.$pro.'/'.$alias.'/'.$sort_id.'/'.$prevCr-=1);

            echo "<li class=prev><a href=$prev aria-label=Previous><span aria-hidden=true>&laquo;</span></a></li>";
       }
    $i=1;
   //die(print_r($max_page));
        for($i;$i<=$max_page;$i++){
   ?>
  <li><a href="<?php echo site_url('product/listItem/'.$pro.'/'.$alias.'/'.$sort_id.'/'.$i); ?>"  value="<?php echo $i;?>"><?php echo $i;?></a></li>

        <?php }
        if($curr < $max_page){
             $nextCr=$curr;
          $next =  site_url('product/listItem/'.$pro.'/'.$alias.'/'.$sort_id.'/'.$nextCr+=$curr2);

           //die(print_r("sam".$curr));
            echo "<li class=next><a href=$next aria-label=Previous><span aria-hidden=true>&raquo;</span></a></li>";
       }
        ?>

   <!--<li class=next><a href="<?php// echo site_url('product/listItem/'.$pro.'/'.$sort_id.'/'.$i+=1); ?>" aria-label=Previous><span aria-hidden=true>&raquo;</span></a></li>-->
    </ul>
</div>

</ul>
</div>

<script type="text/javascript">


$(document).ready(function() {
    $('#list').click(function(){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(){event.preventDefault();$('#products .item').removeClass('list-group-item');});
		$('[data-toggle="tooltip"]').tooltip();

});

function filter(id){
 //  console.log('sam',$('#sort_id').val(id.value));
  window.location.replace("<?php echo site_url('product/listItem/'.$pro.'/'.$alias.'/'); ?>"+id.value);

}
$('.pagination').on('click', 'li:not(.prev):not(.next)', function() {

    $('.pagination li').removeClass('active');
    $(this).not('.prev,.next').addClass('active');
});

//    nuOfpage dari total item / (perpage=> 10)
/*
function drawPagination(numOfPages) {
    $('#pag_nav ul').empty();
    $('#pag_nav ul').append('<li class=prev><a href=# aria-label=Previous><span aria-hidden=true>&laquo;</span></a></li>');
   for (var i = 1; i <= numOfPages; i++) {
      $('#pag_nav ul').append('<li><a href=#>' + i + '</a></li>');
   }
   $('#pag_nav ul').append('<li class=next><a href=# aria-label=Previous><span aria-hidden=true>&raquo;</span></a></li>');
}
*/
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
