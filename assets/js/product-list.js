var filterUrl = '';
var body = $("html, body");

// $url_share="https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
var namapotong = '';
var ctrl= base_url+'/product/detail';
var isFilterPriceActive = false;
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

// function filterSystem(minPrice, maxPrice) {
// 	$("#computers div.system").hide().filter(function () {
// 		var price = parseInt($(this).data("price"), 10);
// 		return price >= minPrice && price <= maxPrice;
// 	}).show();
// }

function buildPage(total, page) {
	// console.log('page: ', page);
	var limit = 10;
	var totalPage = Math.ceil(total / limit);
	var end = page * limit;

	page = parseInt(page);

	if(total < end) end = total;

	$('.my-paging').empty();
	$('#startItem').text(((page - 1) * limit) + 1);
	$('#endItem').text(end);
	$('#totalItem').text(total);

	if (page == 1) $('.my-paging').append('<span class="my-paging-off"><i class="fa fa-angle-left" aria-hidden="true"></i></span>');
	else $('.my-paging').append('<span onclick ="getListProduct(' + (page-1) + ')" class="my-paging-btn my-paging-list"><i class="fa fa-angle-left" aria-hidden="true"></i></span>');

	for (var i = 1; i <= totalPage; i++) {
		if(((i < page + 3) && (i > page - 3)) || (i == 1) || (i == totalPage)) {
			if(i == page)
				$('.my-paging').append(' <span class="my-paging-list-on">'+i+'</span>');
			else
				$('.my-paging').append('<span onclick ="getListProduct(' + i + ')" class="my-paging-btn my-paging-list">'+i+'</span>');
		}
		else if((i == page + 3) || (i == page - 3)) $('.my-paging').append(' ... ');
	}

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
			+ '<div class="item-card">'
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
		+ '</div>'
	)
}

function getListProduct(p) {
	$('#productlist').empty();
	var temp_url = list_url;
	var order = $('#order_by').val();
	var total;

	if(order) temp_url += 'ob=' + order + '&';

	if(filterUrl) temp_url += filterUrl;

	p = p || 1;
	temp_url += 'page=' + p + '&';

	body.stop().animate({scrollTop:0}, 250, 'swing', function() {
		
	});

	$("#product-list-unready").fadeIn(500);
	$('#productlist').hide();

	$.get(encodeURI(temp_url), function(res){
		console.log("konten:", res);

		if (res.productList.length == 0) {
			$("#product-list-unready").fadeOut(500);
			$('#productlist').fadeIn(500);
			$('.my-paging').empty();
			return $('#productlist').html('<center>Maaf item yang Anda cari belum tersedia.</center>');
		}
		
		res.productList.forEach(extract_list);
		$("#product-list-unready").fadeOut(500);
		$('#productlist').fadeIn(500);
		buildPage(res.productCount, parseInt(p));
	});
}

function getSidebar() {
	var priceMin = 0;
	var priceMax = 999999;
	$.get(sidebar_url,function(res){
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
					priceMin = d.min;
					priceMax = d.max;
					menu_body += `<div id="slider-container"></div>
							<div class="row" style="margin-top: 5px">
								<div class="col-xs-5">
									<input name="contentMinAmount" class="txtFilterPrice" id="priceMin" type="text">
								</div>

								<div class="col-xs-2 text-center">
									-
								</div>

								<div class="col-xs-5">
									<input name="contentMaxAmount" class="txtFilterPrice" id="priceMax" type="text">
								</div>
							</div>
							
							<div class="row" style="margin-top: 5px">
								<div class="col-xs-12">
									<button id="priceTrigger" type="button" class="btn btn-info btn-block" onclick="triggerPriceFilter()">Submit</button>
								</div>
							</div>`
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

		$('#slider-container').slider({
			range: true,
			min: priceMin,
			max: priceMax,
			values: [priceMin, priceMax],
			create: function() {
				$("#priceMin").val(formatMoney(priceMin));
				$("#priceMax").val(formatMoney(priceMax));
			},
			slide: function (event, ui) {
				var mi = ui.values[0];
				var mx = ui.values[1];
				$("#priceMin").val(formatMoney(mi));
				$("#priceMax").val(formatMoney(mx));
				// filterSystem(mi, mx);
			}
		})
	});
}

function triggerPriceFilter() {
	isFilterPriceActive = true;
	doFilter();
}

function doFilter() {
	
    var objFilter = {}
    objFilter.Others = [];

    var urlCategory = 'cat=(';
    var urlBrand = 'brand=(';
    var urlInstance = 'instance=(';
	var urlAttribute = 'attribute=(';
	var urlPrice = '';
	var urlOthers = '';

	if (isFilterPriceActive) {
		var from = $("#priceMin").val().split('.').join("");
		var to = $("#priceMax").val().split('.').join("");
		urlPrice = 'from=' + from + '&' + 'to=' + to + '&';
	}

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

var token = document.cookie.split('x-auth=')[1].split(';').shift();

function addWishlist(id,name,imageurl){
	var dataString = 'id='+id;

	if(token){

	$.ajax
		({
		type: "POST",
		url: api_base_url +'/product/addWishlist',
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
		window.location.replace(base_url+"customer/signin/"+id);
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
			url: api_base_url +'/cart/addToCart',
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
