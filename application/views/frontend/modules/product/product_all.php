<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/owl-carousel/owl.carousel.css');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/owl-carousel/owl.theme.css');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/product-list.css');?>">
<div class="container">
	<div class='my-bg-title'>
		<i class="fa fa-angle-right" aria-hidden="true"></i>HASIL PENCARIAN UNTUK '<span id="search-key"></span>'
	</div>
	<div class="row">
		<div id="sidebar-left-filter" class="col-xs-3">
			<?php $this->load->view('frontend/modules/product/sidebar_left',$this->data); ?>
		</div>
		<div id="product-list" class="col-xs-9 view-list">
				<?php $this->load->view('frontend/modules/product/product_list',$this->data); ?>
			<?php
		if($this->session->userdata('itemView')=='grid'){
			// $this->load->view('frontend/modules/product/product_items_all',$this->data);
		}else{
			// $this->load->view('frontend/modules/product/product_items_all_list',$this->data);
		}
		 ?>
		</div>
		<!-- <div class="col-sm-2"><?php // $this->load->view('frontend/modules/product/sidebar_right',$this->data); ?></div>-->
	</div>

	<div id="recentView" style="display: none;">
		<div style='padding:8px; font-family:tahoma; font-size:12px; color:#535151'>
			<!-- $lang_recent_view -->
			<i class="fa fa-dot-circle-o" aria-hidden="true"></i> Baru di lihat<hr>
		</div>
	</div>
	<div id="product" class="promo-front owl-carousel"></div>

</div>
<script>

	var filterUrl = '';
	var body = $("html, body");

	// $url_share="https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	var ctrl= "<?php echo base_url('/product/detail')?>";
	var namapotong = '';
	function currencyFormat (num) {
		// return "Rp." + num.toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")
		return	"Rp." +num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")
	}
	var detail = JSON.parse(localStorage.getItem('product_detail'))
	if(detail.length > 0) $('#recentView').show();
	//console.log(detail);
	for(var i=0;i<detail.length;i++) {

		var str = detail[i].name;
		// a = a.length;
		if(str.length >20)namapotong = str.substring(0, 20)+' '+'...';
		else namapotong = detail[i].name;
		// console.log(currencyFormat(detail[i].pricelist));
		// $('#product').append('<div class="pull-left" style="width: 100px;"><a href="'+ctrl+'/'+detail[i].m_product_id+'/'+detail[i].alias+'" class="link-p" style="color:#fff;"><span class="badgeNi">New</span><img src="'+detail[i].imageurl[0]+'" class="" style="height:100px;"></a><p><a href="'+ctrl+'/'+detail[i].m_product_id+'/'+detail[i].alias+'">'+detail[i].name+'</a></p></div>')
		$('#product').append('<p><a href="'+ctrl+'/'+detail[i].m_product_id+'/'+detail[i].alias+'" class="link-p" style="color:#fff;"><span class="badgeNi">New</span><img src="'+detail[i].imageurl[0]+'" class="" style="height:100px;"></a><br><a href="'+ctrl+'/'+detail[i].m_product_id+'/'+detail[i].alias+'">'+namapotong+' </a><br> '+currencyFormat(detail[i].pricelist)+'</p>')

	}
	// detail.forEach(p){

	// 	 product.append('<tr><td>'+p.m_product_id+'</td><td>')
	// }

$(document).ready(function() {
	getListProduct();
	getSidebar();
	
	$('#order_by').change(function(){
		getListProduct();
	});
})

function buildPage(total, page) {
	console.log('page: ', page);
	page = parseInt(page);
	if(!total) return false;
	var limit = 10;
	var totalPage = Math.ceil(total / limit);
	$('.my-paging').empty();

	if (page == 1) $('.my-paging').append('<span class="my-paging-off"><i class="fa fa-angle-left" aria-hidden="true"></i></span>');
	else $('.my-paging').append('<span onclick ="getListProduct(' + (page-1) + ')" class="my-paging-btn my-paging-list"><i class="fa fa-angle-left" aria-hidden="true"></i></span>');

	// if(total > limit){

		for (var i = 1; i <= totalPage; i++) {
			if(((i < page + 3) && (i > page - 3)) || (i == 1) || (i == totalPage)) {
				if(i == page)
					$('.my-paging').append(' <span class="my-paging-list-on">'+i+'</span>');
				else
					$('.my-paging').append('<span onclick ="getListProduct(' + i + ')" class="my-paging-btn my-paging-list">'+i+'</span>')/*.append(' ',
						$(document.createElement('a')).attr({v:i, href:'#', 'class':'my-paging-list'})
							.click(function (e) {
								e.preventDefault();
								getListProduct($(this).attr('v'));
							})
							.text(i)
						)*/;
			}
			else if((i == page + 3) || (i == page - 3)) $('.my-paging').append(' ... ');
		}
	// }

	if (page < totalPage){
		$('.my-paging').append('<span onclick ="getListProduct(' + (page+1) + ')" class="my-paging-btn my-paging-list"><i class="fa fa-angle-right" aria-hidden="true"></i></span>');
	}
	else $('.my-paging').append('<span class="my-paging-off"><i class="fa fa-angle-right" aria-hidden="true"></i></span>');
}
function extract_list(data, i){
	var specialPriceComponent = '';
	var addWishlistComponent = '';

	if (data.specialPrice != 0 || data.specialPrice != '0') {
		specialPriceComponent += '<span class="strike-throgh">Rp ' + formatMoney(data.pricelist) + '</span>'
			+ '<span class="lead dark-red pricelist" style="font-size: 1.4em;">'
				+ 'Rp ' + formatMoney(data.specialPrice)
			+ '</span>'
			+ '<div> Hemat'
				+ '<span class="lead dark-red pricelist" style="font-size: 1.2em;">'
					+ 'Rp ' +	formatMoney(data.pricelist - data.specialPrice) + ' (' + data.discount + '%)'
				+ '</span>'
			+ '</div>';
	} else {
		specialPriceComponent += '<span class="lead dark-red pricelist">'
			+ 'Rp ' + formatMoney(data.pricelist)
		+ '</span>';
	}

	if (data.isWishList == 'Y') {
		addWishlistComponent += '<a class="btn btn-warning btn-add-to-whishlist whishlist-active" onClick="addWishlist(' + data.m_product_id + ',' + data.name + ',' + data.imageurl + ')">'
				+ '<i class="fa fa-heart"	style="font-size:15px;color:grey;"	aria-hidden="true"></i>Wishlist'
			+ '</a>'
	} else {
		addWishlistComponent += '<a class="btn-add-to-whishlist" onClick="addWishlist(' + data.m_product_id + ',' + data.name + ',' + data.imageurl + ')">Add to Wishlist</a>'
	}

	$('#productlist').append(
		'<div class="item-box">'
			+ '<div class="item-1">'
				+ '<a href="' + base_url + 'product/detail/' + data.m_product_id + '/' + data.alias + '">'
				+ '<img class="img-thumbnail clear-border" src="' + data.imageurl + '" alt="' +	data.name + '" style="height:200px; width: auto;" onerror="this.onerror=null;this.src="' + base_url + '/images/general/noimage.png"/>'
				+ '</a>'
			+ '</div>'
			+ '<div class="item-2">'
				+ '<div class="highlight-list">'
					+ '<a class="title-product" href="' + base_url + 'product/detail/' + data.m_product_id + '/' + data.alias + '">' + data.name + '</a>'
					+ '<div class="product-detail highlight' + i + '">'
						+ data.highlight
						+ '<a href="' + base_url + 'product/detail/' + data.m_product_id + '/'	+ data.alias + '" style="color: #4b4b4b!important; font-weight: bold">SELENGKAPNYA</a>'
					+ '</div>'
				+ '</div>'
			+ '</div>'
			+ '<div class="item-3">'
				+ specialPriceComponent
				+ '<div class="yu1"><i class="fa fa-info-circle" aria-hidden="true"></i> Stock: Tersedia</div>'
				+ '<div style="margin-top: 20px;">'
					+ '<input type="hidden" class="form-control text-center" id="jmlItem' + data.m_product_id + '" style="width: 50px; font-size: 9pt; margin-bottom: 8px; height: 29px;" value="1" min="1">'

					+ '<div>'
						+ '<div>'
							+ '<button type="button" class="btn btn-danger btn-add-to-cart" onClick="addToCart(' + data.m_product_id + ',' + data.pricelist + ',' + data.imageurl + ',' + data.name + ',' + data.stock + ',' + data.weight + ')"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</button>'
						+ '</div>'
						+ '<div>'
							+ addWishlistComponent
						+ '</div>'
					+ '</div>'
				+ '</div>'
			+ '</div>'
		+ '</div>'
	)
}
function getListProduct(p) {
	$('#productlist').empty();
	var url = api_base_url + '/product/productall/<?php echo $pro ?>?itemperpage=10&';
	var order = $('#order_by').val();
	var total;

	if(order) url += 'ob=' + order + '&';

	if(filterUrl) url += filterUrl;

	p = p || 1;
	url += 'page=' + p + '&';

	body.stop().animate({scrollTop:0}, 250, 'swing', function() {
		
	});

	console.log("112312312");
	$("#product-list-unready").fadeIn(500);
	$('#productlist').hide();
	$.get(url + 'show=productcount', function(res){
		console.log('get total:', res);
		total = res.productCount;
	});

	$.get(encodeURI(url), function(res){
		console.log("konten:", res);
		
		if (res.length == 0) {
			$("#product-list-unready").fadeOut(500);
			$('#productlist').fadeIn(500);
			$('.my-paging').empty();
			return $('#productlist').html('<center>Maaf item yang Anda cari belum tersedia.</center>');
		}
		
		res.forEach(extract_list);
		$("#product-list-unready").fadeOut(500);
		$('#productlist').fadeIn(500);
		buildPage(total, parseInt(p));
	});
}

function getSidebar() {
	var url = api_base_url + '/product/filter/<?php echo $pro ?>';
	$.get(url,function(res){
		$("#sidebar-left-filter").hide();
		console.log('sidebar res: ', res);
		res.forEach(function(m) {
			var menu_body = '', key = '', value = '';

			m.data.forEach(function(d) {
				if (m.filterAlias != 'Price') {
					if (typeof m.filterId == 'undefined') {
						key = m.filterAlias;
						value = d.valueId;
					} else {
						key = m.filterId;
						value = d.valueAlias;
					}

					menu_body += '<div class="checkbox">'
						+ '<label>'
							+ '<input name="checkbox-filter" type="checkbox" value="' + key + '~' + value + '" onclick="doFilter()">'
							+ d.value
							+ ' (' + d.count + ')'
						+ '</label>'
					+ '</div>';
				} else {

				}
			});

			$('#sidebar-left-filter').append(
				$(document.createElement('div')).attr({'id': m.filterAlias,'class': 'menu_list'}).append(
					$(document.createElement('p')).text(m.filter).attr({'class': 'menu_head plus'}).click(function() {
						console.log("clicked lhooo");
						$(this).toggleClass("plus minus").next("div.menu_body").slideToggle(250);
					}),
					// '<p class="menu_head plus">' +	+ '</p>' "#" + m.filterAlias + " > p.menu_head"
					'<div class="menu_body">' + menu_body + '</div>'
				)
			)
		});
		$("#sidebar-animation-unready").fadeOut(250);
		$("#sidebar-left-filter").fadeIn(500);
	});
}

function doFilter() {

    var objFilter = {}
    objFilter.Others = [];

    var urlCategory = 'cat=(';
    var urlBrand = 'brand=(';
    var urlPrice = '';
    var urlInstance = 'instance=(';
    var urlAttribute = 'attribute=(';
    var urlOthers = '';
    
    $('#sidebar-left-filter input[name=checkbox-filter]:checked').each(function() {
        var valraw = $(this).val();
        var arrVal = valraw.split('~');
        var key = arrVal[0].trim();
        var val = arrVal[1].trim();

        if (key == 'Category' || key == 'Brand') {
            if(typeof objFilter[key] == 'undefined') objFilter[key] = [];
            objFilter[key].push(val);
        } else {
            if (objFilter.Others.length == 0) {
                var tempObj = {};
                tempObj[key] = [val];
                objFilter.Others.push(tempObj);
            } else {
                objFilter.Others.forEach(function(item) {
                    console.log('item: ', item);
                    if(typeof item[key] == 'undefined') item[key] = [];
                    item[key].push(val);
                });
            }
        }
    })

    console.log('objFilter: ', objFilter);

    if (objFilter.Category) {
        objFilter.Category.forEach(function(item, index) {
            urlCategory += item;
			urlCategory += (objFilter.Category.length == (index + 1)) ? '' : ',';
        });
		urlCategory += ')&';
    } else {
		urlCategory = '';
	}
    if (objFilter.Brand) {
        objFilter.Brand.forEach(function(item, index) {
			urlBrand += item;
			urlBrand += (objFilter.Brand.length == (index + 1)) ? '' : ',';
        });
		urlBrand += ')&';
    } else {
		urlBrand = '';
	}
    if (objFilter.Others.length != 0) {
        objFilter.Others.forEach(function(items, index) {
            for (var key in items) {
				urlInstance += key + ',';

                items[key].forEach(function(val, index) {
                    urlAttribute += val + ',';
                });
            }
			urlInstance = urlInstance.slice(0, -1);
			urlAttribute = urlAttribute.slice(0, -1);
			urlInstance += ')&';
			urlAttribute += ')&';
            urlOthers += urlInstance + urlAttribute;
        });
    } else {
		urlOthers = ''
	}
	console.log("urlOthers: ", urlOthers);

    filterUrl = urlCategory + urlBrand + urlPrice + urlOthers;

    console.log('filterUrl: ', filterUrl);

    getListProduct();
}

function formatMoney(num) {
	var	number_string = num.toString(),
	sisa 	= number_string.length % 3,
	rupiah 	= number_string.substr(0, sisa),
	ribuan 	= number_string.substr(sisa).match(/\d{3}/g);
		
	if (ribuan) {
		separator = sisa ? '.' : '';
		rupiah += separator + ribuan.join('.');
	}

	return rupiah;
}
</script>


<!-- Demo -->
<script src="<?php echo base_url('assets/owl-carousel/owl.carousel.js');?>"></script>

<style>
	#owl-demo .item{
		margin: 3px;
		/*text-align:center;*/
	}
	#owl-demo .item img{
		display: block;
		width: auto;
		height: 150px;

	}
	.promo-front .item{
		margin: 3px;
	}
	.promo-front .item img{
		display: block;
		width: 100%;
		height: auto;
	}
</style>


<script>
	$(document).ready(function() {
		$(".promo-front").owlCarousel({
			autoPlay: 3000,
			items : 6,
			itemsDesktop : [1199,3],
			itemsDesktopSmall : [979,3]
		});

		$("#owl-demo").owlCarousel({
			autoPlay: 3000,
			items : 6,
			itemsDesktop : [1199,3],
			itemsDesktopSmall : [979,3]
		});

	});
</script>
