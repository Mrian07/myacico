var base_url = '<?php echo base_url();?>';
var base_path = base_url.split(location.host).pop();

var login = 'http://acc.myacico.co.id/myacico-account/account/masuk';
// var login_base_url_api = 'acc.myacico.co.id/myacico-service';
var adduser = 'http://acc.myacico.co.id/myacico-account/account/';

//
//var api_base_url2 = <?php echo $baseApiUrl; ?>;
//var api_base_url = 'http://myacico.net:8080/myacico-service/api';
var api_base_url = "<?php echo $baseApiUrl; ?>";
var token;

(function(){
	console.log('cek token');
	var cookie = document.cookie.split('x-auth=');
	if(cookie.length > 1){
		token = cookie[1].split(';').shift()
	}
})()
