<style>
/***
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
***/

body {
    background: #f1f1f1;
}

.product-item {
    padding: 15px;
    background: #fff;
    margin-top: 20px;
    position: relative;
}
.product-item:hover {
    box-shadow: 5px 5px rgba(234, 234, 234, 0.9);
}
.product-item:after {
    content: ".";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden;
    font-size: 0;
    line-height:0;
}
.sticker {
    position: absolute;
    top: 0;
    left: 0;
    width: 63px;
    height: 63px;
}
.sticker-new {
    background: url(http://keenthemes.com/assets/bootsnipp/new.png) no-repeat;
    left: auto;
    right: 0;
}
.pi-img-wrapper {
    position: relative;
}
.pi-img-wrapper div {
    background: rgba(0,0,0,0.3);
    position: absolute;
    left: 0;
    top: 0;
    display: none;
    width: 100%;
    height: 100%;
    text-align: center;
}
.product-item:hover>.pi-img-wrapper>div {
    display: block;
}
.pi-img-wrapper div .btn {
    padding: 3px 10px;
    color: #fff;
    border: 1px #fff solid;
    margin: -13px 5px 0;
    background: transparent;
    text-transform: uppercase;
    position: relative;
    top: 50%;
    line-height: 1.4;
    font-size: 12px;
}
.product-item .btn:hover {
    background: #e84d1c;
    border-color: #c8c8c8;
}

.product-item h3 {
    font-size: 14px;
    font-weight: 300;
    padding-bottom: 4px;
    text-transform: uppercase;
}
.product-item h3 a {
    color: #3e4d5c;
}
.product-item h3 a:hover {
    color: #E02222;
}
.pi-price {
    color: #e84d1c;
    font-size: 18px;
    float: left;
    padding-top: 1px;
}
.product-item .add2cart {
    float: right;
    color: #a8aeb3;
    border: 1px #ededed solid;
    padding: 3px 6px;
    text-transform: uppercase;
}
        .product-item .add2cart:hover {
            color: #fff;
            background: #e84d1c;
            border-color: #e84d1c;
        }
div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
@import url("http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css");

.panel-pricing {
  -moz-transition: all .3s ease;
  -o-transition: all .3s ease;
  -webkit-transition: all .3s ease;
}
.panel-pricing:hover {
  box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.2);
}
.panel-pricing .panel-heading {
  padding: 20px 10px;
}
.panel-pricing .panel-heading .fa {
  margin-top: 10px;
  font-size: 58px;
}
.panel-pricing .list-group-item {
  color: #777777;
  border-bottom: 1px solid rgba(250, 250, 250, 0.5);
}
.panel-pricing .list-group-item:last-child {
  border-bottom-right-radius: 0px;
  border-bottom-left-radius: 0px;
}
.panel-pricing .list-group-item:first-child {
  border-top-right-radius: 0px;
  border-top-left-radius: 0px;
}
.panel-pricing .panel-body {
  background-color: #f0f0f0;
  font-size: 40px;
  color: #777777;
  padding: 20px;
  margin: 0px;
}

</style>



<div class='my-bg-title'>
	<div class="container">
		<div class="row">
		  <div class="col-sm-9">

			<i class="fa fa-angle-right" aria-hidden="true"></i> WISHLIST

		  </div>
		</div>
	</div>
</div>



<div class="container">




	<div class="row">
		<div class="col-sm-3">
			<?php $this->load->view('frontend/modules/account/sidebar_menu'); ?>
		</div>
		<div class="col-sm-9">



		<div class="rumah"></div>

	<br>
	<br>


</div>


		</div>


	</div>


	<center>

	</center>
	<br>
	<br>
<!-- asdasd -->

<script type="text/javascript">
// $(document).ready(function() {
// 			var token = document.cookie.split('x-auth=')[1].split(';').shift();
// 			console.log('a',token);
// 			  $.get(api_base_url+'/product/getwishlist?token='+token,
// 			});
// });


//
//   $(document).ready(function() {
// 	var token = document.cookie.split('x-auth=')[1].split(';').shift();
//
//     $.get(api_base_url+'/product/addwishlist?token='+token+'&item_id=<?php $wishid ?>',
//
//   function(data){
// })
//   });
$(document).ready(function() {
	var token = document.cookie.split('x-auth=')[1].split(';').shift();
	var filter =0;
	var asd =   $.get(api_base_url+'/product/deletewishlist?token='+token)
	console.log('s',asd);
console.log('a',token);

    $.get(api_base_url+'/product/getwishlist?token='+token,


	function(data){


	// console.log('test',token);


		var rumah = $('.rumah');
		var id = $("#id").val();

		$("#hapus").val(null);


		if(data.length == 0) return rumah.append('<p>Data tidak ditemukan</p>');

		 data.forEach(function(p){
			 rumah.append(
				 '<div class="col-md-4"><div class="product-item"><div class="pi-img-wrapper"><img src="'+p.imageUrl+'" alt="..."width="300" height="100" class="img-responsive" alt="Berry Lace Dress"><div></div></div><h3><a href="'+base_url+'product/detail/'+p.productID+'">'+p.name+'</a></h3><div class="pi-price">'+p.wishListDate+'</div><a href="'+api_base_url+'/product/deletewishlist?token='+token+'&item_id='+p.productID+'" class="btn add2cart">Hapus</a></div></div>'
				//'<div class="col-md-4 text-center"><div class="panel panel-danger panel-pricing"><div class="panel-heading"><img src="'+p.imageUrl+'" alt="..."width="100" height="100"><h3><a href="'+base_url+'product/detail/'+p.productID+'">'+p.name+'</a><br/><br/><a href="'+api_base_url+'/product/deletewishlist?token='+token+'&item_id='+p.productID+'">hapus</a></h3></div></div></div>'
				 //'<div class="gallery"><img src="'+p.imageUrl+'" alt="..."width="300" height="100"><center><a href="'+base_url+'product/detail/'+p.productID+'">'+p.name+'</a></center><div class="desc"><a href="'+api_base_url+'/product/deletewishlist?token='+token+'&item_id='+p.productID+'">hapus</a></div></div>'
		// '<div class="col-sm-6"><div class="row my-b-product"><div class="col-sm-2"><img src="'+p.imageUrl+'" alt="..." style:border="0" height="100"></div><div class="col-sm-7"><h5 class="title-product" align="center"><a href="'+base_url+'product/detail/'+p.m_product_id+'">'+p.name+'</a></h5></div></div>'
	)

	console.log('asdasd',data)
			 $("#hapus"+p.id).click(function(e){

				var id = $("#id"+p.id).val();
				var apiurl1 = api_base_url +'/aduser/deleteaddress?token='+token;
		  		e.preventDefault();
		 		$.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify({"id":p.id}) , url: apiurl1 });

		  	});


		});
    });
	});



</script>
