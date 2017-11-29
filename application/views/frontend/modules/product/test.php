

<html>
	<head>
		<style type="text/css">
			.img-src{
				height: 30px;
				width: auto;
				overflow: hidden;
			}
			.img-con{
				height: 50px;
				border-bottom : 1px solid #ccc;
			}
			.search-name{
				font-size: 12px;
				color: #666;
				font-family: 'arial';
			}
			.links{
				text-decoration: none;
			}
			a:link {
    text-decoration: none;
}

a:visited {
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

a:active {
    text-decoration: underline;
}
		</style>
<!-- <script src="https://code.jquery.com/jquery-1.10.2.js"></script> -->
	</head>
<body>

<form>
    <input id="searchDesk" type="text">
<button id="other">
  search
</button>
</form>
<div class="" id="productSrc">
	<p id='loading'>loading</p>
	<div id="top"></div>
	<div id="list"></div>
</div>

<script>
$('#loading').hide()
var typingTimer;
var doneTypingInterval = 5000;
$("#searchDesk").keyup(function( event ) {
	var key = $(this).val()
	$('#list').empty();
	$('#top').empty();
	$('#loading').show()
	clearTimeout(typingTimer);
  	typingTimer = setTimeout(topProduct(key), doneTypingInterval);
    typingTimer = setTimeout(searchProduct(key), doneTypingInterval);
}).keydown(function( event ) {
  	if ( event.which == 13 ) {
    	event.preventDefault();
  	}
}).click(function() {
	//handle yg click

}).focus(function(){
	topProduct('');
	$('#list').empty();
}).blur(function(){

	setTimeout(function(){
		$('#top').empty();
		$('#list').empty();
	},3000)
})



function searchProduct(key){

	$.ajax({
		url: 'https://api.myacico.co.id/myacico-service/product/productlist/'+key,
		success: function(data) {
			//console.log(data)
			$('#loading').hide()
			for (var i = 0; i < data.length; i++) {
				var result = '<div class="img-con">list:<img class="img-src" src="'+data[i].imageurl+'">'+'<span class="searh-name">'+data[i].name+'</span></div>'
				$('#list').append(result)
			}
			//searchProduct(key);
		}
	});
}


function topProduct(key){
	//console.log('top')
	$.ajax({
		url: 'https://api.myacico.co.id/myacico-service/product/topsearch?keyword='+key,
		success: function(data) {
			$('#loading').hide()
			//console.log(data)
			for (var i = 0; i < data.length; i++) {
				var result = '<div class="img-con" onclick="javascript:showData('+data[i].product_id+');">top:<img class="img-src" src="'+data[i].image_thumbnail+'">'+'<span class="searh-name" onclick="showData("dfdaf")">'+data[i].product_name+'</span>testing</div>'
				$('#top').append(result)
			}
		}
	});
}

// $('#top').click(function(){
// 	alert('fdaf')
// })



function showData(q){
	console.log(q)
}
</script>
</body>

</html>
