<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends Web_private {

	public function __construct()
  {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('app');
		$this->load->helper('cookie');
	//	$this->load->model('Login_model', 'login', TRUE);


		$this->atribut();
	}

	public function atribut(){

	}

	public function summary()
	{
		/*s: terbaru*/
		$this->data['token'] = $_COOKIE['x-auth'];
		$token = $_COOKIE['x-auth'];

		$options = ["http" => [
		"method" => "GET",
		"header" => ["token: " . $token,
		"Content-Type: application/json"],
		]];

		$context = stream_context_create($options);

		$api = "aduser/getaddress?addresstype=isbillto";
		$url = api_base_url($api);
		$konten = file_get_contents($url, false, $context);
		$hasil = json_decode($konten, true);

		//Data Billing
		$this->data['billing_address_id'] ='';
		foreach($hasil as $items){
			$this->data['billing_address_id'] = $items['id'];
		}
		$this->data['shipping_address_id'] ='';
		$get_shipping = get_cookie('shipping_address_id');
		if($get_shipping)
		{

		   $api = "aduser/getaddress?id=".$get_shipping;
		   $url = api_base_url($api);

		   $konten2 = file_get_contents($url, false, $context);
		   $hasil_ship = json_decode($konten2, true);

			//Data Shipping
			// $this->data['id_kelurahan'] = $hasil_ship['village_id'];
			 $this->data['shipping_address_id'] = $hasil_ship['id'];
			// $id_kelurahan = $hasil_ship['village_id'];

		}else{
			redirect('checkout/cart');
		}

		//payment
		//Transfer
		$api = "payment/myacicoaccount";
		$url = api_base_url($api);
		$konten = file_get_contents($url);
		$this->data['hasilTransfer'] = json_decode($konten, true);
		$hasilTransfer = json_decode($konten, true);

		//onlinepayment
		$api = "payment/onlinepayment?value=O";
		$url = api_base_url($api);

		$konten = file_get_contents($url);
		$this->data['hasilOnline'] = json_decode($konten, true);

		/*e: terbaru*/

		$this->data['token'] = $_COOKIE['x-auth'];
		$this->data['title_web'] = "Myacico.com";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/checkout/summary.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function summaryDetail()
	{
		/*s: terbaru*/
		$this->data['token'] = $_COOKIE['x-auth'];
		$token = $_COOKIE['x-auth'];
		$api = "order/cart/detail";
		$url = api_base_url($api);

		$options = ["http" => [
		"method" => "GET",
		"header" => ["token: " . $token,
		"Content-Type: application/json"],
		]];

		$context = stream_context_create($options);
		$konten = file_get_contents($url, false, $context);

		$this->data['hasil'] = json_decode($konten, true);

		$get_shipping = get_cookie('shipping_address_id');
		if($get_shipping)
		{

			 $api = "aduser/getaddress?id=".$get_shipping;
			 $url = api_base_url($api);

			 $konten2 = file_get_contents($url, false, $context);
			 $hasil_ship = json_decode($konten2, true);

			//Data Shipping
			$this->data['name'] = $hasil_ship['name'];
			$this->data['alamat_shipping'] =$hasil_ship['address_name'].", ".$hasil_ship['address1']." ".$hasil_ship['city_name']." ".$hasil_ship['postal'];

		}

		if($hasil = json_decode($konten, true)){
			$this->load->view('frontend/modules/checkout/summary_detail.php',$this->data);
		}else{
			echo"
			<input type='hidden' value='1' id='itemKosong'>
			<div class='alert alert-warning produk-kosong' style='border-radius:0px; border:0px; border-left:5px solid #dbd19e;'><img src='".base_url('images/general/empty.jpg')."' border='0'><br>Keranjang masih kosong</div>";
		}


	}

	public function selectKurir()
	{
		$id = $_GET['id'];

		$this->data['token'] = $_COOKIE['x-auth'];
		$token = $_COOKIE['x-auth'];

		$options = ["http" => [
		"method" => "GET",
		"header" => ["token: " . $token,
		"Content-Type: application/json"],
		]];
		$context = stream_context_create($options);

		$api = "aduser/getaddress?id=".$id;
		$url = api_base_url($api);

		$konten = file_get_contents($url, false, $context);
		$hasil_ship = json_decode($konten, true);
		$id_kelurahan = $hasil_ship['village_id'];

		$api = "freight/shipment/rates?to_village_id=".$id_kelurahan;
		$url = api_base_url($api);

		$konten = file_get_contents($url);
		$hasil_kurir = json_decode($konten, true);
	// echo"<pre>";	print_r($hasil_kurir);
		echo"<option value='kosong-kosong'>-Pilih-</option>";
		foreach($hasil_kurir as $dataKur){
			echo"<option value='".$dataKur['shipperId']."-".$dataKur['amount']."'>".$dataKur['shipperName']."</option>";
		}

	}

	public function cart()
	{

		//Data Billing akan menjadi data shipping
		$this->data['token'] = $_COOKIE['x-auth'];
		$token = $_COOKIE['x-auth'];
		$api = "aduser/getaddress?addresstype=isbillto";
		$url = api_base_url($api);

		$options = ["http" => [
		"method" => "GET",
		"header" => ["token: " . $token,
		"Content-Type: application/json"],
		]];

		$context = stream_context_create($options);
		$konten = file_get_contents($url, false, $context);
		$hasil = json_decode($konten, true);

		//load all data shipping
		$apiShip = "aduser/getaddress?token=".$token;
		$urlShip = api_base_url($apiShip);
		$kontenShip = file_get_contents($urlShip, false, $context);
		$this->data['hasil_ship'] = json_decode($kontenShip, true);

		$hasil_ship = json_decode($kontenShip, true);
//echo"<pre>"; print_r($hasil_ship);
    // Shipping Address
		$get_shipping ='';
		$get_shipping = get_cookie('shipping_address_id');
		if(isset($get_shipping))
		{
		   $api = "aduser/getaddress?id=".$get_shipping;
		   $url = api_base_url($api);

		   $konten2 = file_get_contents($url, false, $context);
		   $hasil_ship = json_decode($konten2, true);
			 $jml = count(json_decode($konten2, true));
		  //  //Data Shipping
			//  foreach($hasil as $items){
 			// 	$this->data['alamat_shipping'] =$items['name'].", ".$items['address_name'].", ".$items['address1']." ".$items['city_name']." ".$items['postal'];
 			// 	$this->data['id_kelurahan'] = $items['village_id'];
 			// 	$this->data['shipping_address_id'] = $items['id'];
      //
 			// 	$id_kelurahan = $items['village_id'];
 			// 	set_cookie('shipping_address_id',$items['id'],time() + (86400 * 30));
 			// }
			if($jml){
				$this->data['alamat_shipping'] =$hasil_ship['name'].", ".$hasil_ship['address_name'].", ".$hasil_ship['address1']." ".$hasil_ship['city_name']." ".$hasil_ship['postal'];
				$this->data['id_kelurahan'] = $hasil_ship['village_id'];
				$this->data['shipping_address_id'] = $hasil_ship['id'];
				$id_kelurahan = $hasil_ship['village_id'];
			}

		}else{
			// $api = "aduser/getaddress?id=".$get_shipping;
			// $url = api_base_url($api);
      //
			// $konten2 = file_get_contents($url, false, $context);
			// $hasil_ship = json_decode($konten2, true);
			// $this->data['alamat_shipping'] =$hasil_ship['name'].", ".$hasil_ship['address_name'].", ".$hasil_ship['address1']." ".$hasil_ship['city_name']." ".$hasil_ship['postal'];
			// $this->data['id_kelurahan'] = $hasil_ship['village_id'];
			// $this->data['shipping_address_id'] = $hasil_ship['id'];
			// $id_kelurahan = $hasil_ship['village_id'];


			//Data Shipping
			foreach($hasil as $items){
			 $this->data['alamat_shipping'] =$items['name'].", ".$items['address_name'].", ".$items['address1']." ".$items['city_name']." ".$items['postal'];
			 $this->data['id_kelurahan'] = $items['village_id'];
			 $this->data['shipping_address_id'] = $items['id'];

			 $id_kelurahan = $items['village_id'];
			 set_cookie('shipping_address_id',$items['id'],time() + (86400 * 30));
		 }

		}

		if(isset($id_kelurahan)){
			$api = "freight/shipment/rates?to_village_id=".$id_kelurahan;
			$url = api_base_url($api);

			$konten = file_get_contents($url);
			$this->data['hasil_kurir'] = json_decode($konten, true);
			$hasil_kurir = json_decode($konten, true);
			$ongkos_kurir = $hasil_kurir[0]['amount'];
			$shipperId = $hasil_kurir[0]['shipperId'];

			if(empty($this->session->userdata('ongkos_kurir'))){
				$data = array(
					'id_kurir' => $shipperId,
					'ongkos_kurir' => $ongkos_kurir,
				);
		    $this->session->set_userdata($data);
			}


		//echo"<pre>"; print_r($hasil_kurir); die();
    $domain = domain();
		$this->data['title_web'] = "Cart - ".$domain;

		}

		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		// $this->load->view('frontend/modules/cart/cart.php',$this->data);

		$this->load->view('frontend/modules/cart/cart_by_ci.php',$this->data);
		// $this->load->view('frontend/modules/cart/cart_by_token.php',$this->data);


		$this->load->view('frontend/footer',$this->data);
	}

	public function pilihKurir() {
		// $id_kurir = $this->uri->segment(3);
		// $ongkos_kurir = $this->uri->segment(4);


		$this->data['token'] = $_COOKIE['x-auth'];
		$token = $_COOKIE['x-auth'];
		$api = "order/cart/detail";
		$url = api_base_url($api);

		$options = ["http" => [
		"method" => "GET",
		"header" => ["token: " . $token,
		"Content-Type: application/json"],
		]];

		$context = stream_context_create($options);
		$konten = file_get_contents($url, false, $context);
		$hasil = json_decode($konten, true);
		$all = 0;
		foreach($hasil as $data){
				$all += $data['totalWeight'];
		}


		$id_kurir = $_GET['id'];
		$ongkos_kurir = $_GET['amount'];
		$name_kurir = $_GET['name'];

		$total_ongkir = $ongkos_kurir * $all;

		$data = array(
			'id_kurir' => $id_kurir,
			'ongkos_kurir_ori' => $ongkos_kurir,
			'ongkos_kurir' => $total_ongkir,
			'name_kurir' => $name_kurir,
		);
		$this->session->set_userdata($data);
		//ini diload pake ajak
		if(isset($total_ongkir)){echo money($total_ongkir);}else{echo"0";}

		//redirect('checkout/cart');
	}

	public function pilihKurir2() {
		$this->data['token'] = $_COOKIE['x-auth'];
		$token = $_COOKIE['x-auth'];
		$api = "order/cart/detail";
		$url = api_base_url($api);

		$options = ["http" => [
		"method" => "GET",
		"header" => ["token: " . $token,
		"Content-Type: application/json"],
		]];

		$context = stream_context_create($options);
		$konten = file_get_contents($url, false, $context);
		$hasil = json_decode($konten, true);
		$all = 0;
		foreach($hasil as $data){
				$all += $data['totalWeight'];
		}

		$id_kurir = $_GET['id'];
		$ongkos_kurir = $_GET['amount'];

		$total_ongkir = $ongkos_kurir * $all;

		$data = array(
			'ongkos_kurir' => $total_ongkir,
		);
		$this->session->set_userdata($data);
		if(isset($total_ongkir)){echo money($total_ongkir);}else{echo"0";}
	}

	public function pilihPaket() {
		/*
		myacico = 111
		jne = 1000002
		ninja = 1000003
		*/
		$id_kurir = $_GET['id'];
		$ongkos_kurir = $_GET['amount'];
		$name_kurir = $_GET['name'];
		if($id_kurir=='111'){
			echo"<option>Flat Rate</option>";
		}elseif($id_kurir=='1000002' || $id_kurir=='1000003'){
			echo"<option>Reguler</option>";
		}else{
			echo"<option>-</option>";
		}
	}

	public function pilihShip()
	{
		$id = $_GET['id'];
		set_cookie('shipping_address_id',$id,time() + (86400 * 30));

		$this->data['token'] = $_COOKIE['x-auth'];
		$token = $_COOKIE['x-auth'];
		$api = "aduser/getaddress?id=".$id;
		$url = api_base_url($api);
		$options = ["http" => [
		"method" => "GET",
		"header" => ["token: " . $token,
		"Content-Type: application/json"],
		]];

		$context = stream_context_create($options);
		$konten = file_get_contents($url, false, $context);
		$hasil_ship = json_decode($konten, true);

		//Data Shipping
		 $alamat_shipping =$hasil_ship['name'].", ".$hasil_ship['address_name'].", ".$hasil_ship['address1']." ".$hasil_ship['city_name']." ".$hasil_ship['postal'];
		 echo"$alamat_shipping";
		// redirect('checkout');
		//redirect('checkout/cart');
	}

	public function addressbook()
	{
    $domain = domain();
		$lang = get_cookie('lang');
		$flag = $this->uri->segment(3);
		if($flag=='1'){
			if($lang=='en'){
				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible animated bounceInDown" id="alertSubmit">
				<span class="glyphicon glyphicon-ok"></span> Add shipping success.</div>');
			}else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible animated bounceInDown" id="alertSubmit">
				<span class="glyphicon glyphicon-ok"></span> Tambah data penerima sukses.</div>');
			}
		}

		$this->data['token'] = $_COOKIE['x-auth'];
		$token = $_COOKIE['x-auth'];

		$options = ["http" => [
		"method" => "GET",
		"header" => ["token: " . $token,
		"Content-Type: application/json"],
		]];

		$context = stream_context_create($options);
		$apiShip = "aduser/getaddress?token=".$token;
		$urlShip = api_base_url($apiShip);
		$kontenShip = file_get_contents($urlShip, false, $context);
		//$this->data['hasil_ship'] = json_decode($kontenShip, true);
		$this->data['jmladrs'] = count(json_decode($kontenShip, true));
		$this->data['title_web'] = "Buku Alamat - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/cart/form_address_book.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}


	// public function addressbook()
	// {
  //
	// 	$this->data['token'] = $_COOKIE['x-auth'];
	// 	$token = $_COOKIE['x-auth'];
	// 	$api = "aduser/getaddress?addresstype=isbillto";
	// 	$url = api_base_url($api);
  //
	// 	$options = ["http" => [
	// 	"method" => "GET",
	// 	"header" => ["token: " . $token,
	// 	"Content-Type: application/json"],
	// 	]];
  //
	// 	$context = stream_context_create($options);
	// 	$konten = file_get_contents($url, false, $context);
	// 	$hasil = json_decode($konten, true);
  //
	// 	//Data Billing
	// 	foreach($hasil as $items){
	// 		$this->data['alamat_billing'] =$items['address_name'].", ".$items['address1']." ".$items['city_name']." ".$items['postal'];
	// 		$this->data['billing_address_id'] = $items['id'];
	// 	}
  //
  //   // Shipping Address
	// 	$get_shipping = get_cookie('shipping_address_id');
	// 	if($get_shipping)
	// 	{
  //
	// 	   $api = "aduser/getaddress?id=".$get_shipping;
	// 	   $url = api_base_url($api);
  //
  //
	// 	   $konten2 = file_get_contents($url, false, $context);
	// 	   $hasil_ship = json_decode($konten2, true);
  //
	// 	   //Data Shipping
	// 			$this->data['alamat_shipping'] =$hasil_ship['name'].", ".$hasil_ship['address_name'].", ".$hasil_ship['address1']." ".$hasil_ship['city_name']." ".$hasil_ship['postal'];
	// 			$this->data['id_kelurahan'] = $hasil_ship['village_id'];
	// 			$this->data['shipping_address_id'] = $hasil_ship['id'];
  //
	// 	}else{
	// 		foreach($hasil as $items){
	// 			$this->data['alamat_shipping'] =$items['name'].", ".$items['address_name'].", ".$items['address1']." ".$items['city_name']." ".$items['postal'];
	// 			$this->data['id_kelurahan'] = $items['village_id'];
	// 			$this->data['shipping_address_id'] = $items['id'];
	// 		}
	// 	}
  //
  //   //Metode Pembayaran
	// 	$apiMethod = "payment/method";
	// 	$urlMethod = api_base_url($apiMethod);
	// 	$kontenMethod = file_get_contents($urlMethod);
	// 	$this->data['hasilMethod'] = json_decode($kontenMethod, true);
  //
	// 	$this->data['token'] = $_COOKIE['x-auth'];
  //
	// 	$this->data['title_web'] = "Myacico.com";
	// 	$this->load->view('frontend/header',$this->data);
	// 	$this->load->view('frontend/nav.php',$this->data);
	// 	$this->load->view('frontend/modules/cart/address_book.php',$this->data);
	// 	$this->load->view('frontend/footer',$this->data);
	// }

	public function billing()
	{
            $domain = domain();
		$this->data['title_web'] = "Billing - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/cart/form_add_billing.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function shipping()
	{
            $domain = domain();
		$lang = get_cookie('lang');
		$flag = $this->uri->segment(3);
		if($flag=='1'){
			if($lang=='en'){
				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible animated bounceInDown" id="alertSubmit">
				<span class="glyphicon glyphicon-ok"></span> Add shipping success.</div>');
			}else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible animated bounceInDown" id="alertSubmit">
				<span class="glyphicon glyphicon-ok"></span> Tambah data penerima sukses.</div>');
			}
		}
		$this->data['title_web'] = "Shipping - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/cart/form_add_shipping.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function index()
	{
		$this->data['token'] = $_COOKIE['x-auth'];
		$token = $_COOKIE['x-auth'];
		$api = "aduser/getaddress?addresstype=isbillto";
		$url = api_base_url($api);

		$options = ["http" => [
		"method" => "GET",
		"header" => ["token: " . $token,
		"Content-Type: application/json"],
		]];

		$context = stream_context_create($options);
		$konten = file_get_contents($url, false, $context);
		$hasil = json_decode($konten, true);

		//Data Billing
		foreach($hasil as $items){
			$this->data['alamat_billing'] =$items['address_name'].", ".$items['address1']." ".$items['city_name']." ".$items['postal'];
			$this->data['billing_address_id'] = $items['id'];
		}

        // Shipping Address ~Samuel
		//checkoutget_cookie('shipping_address_id')
		$get_shipping = get_cookie('shipping_address_id');
		if($get_shipping)
		{

		   $api = "aduser/getaddress?id=".$get_shipping;
		   $url = api_base_url($api);


		   $konten2 = file_get_contents($url, false, $context);
		   $hasil_ship = json_decode($konten2, true);

		   //Data Shipping


				$this->data['alamat_shipping'] =$hasil_ship['address_name'].", ".$hasil_ship['address1']."  ".$hasil_ship['city_name']." ".$hasil_ship['postal'];

				$this->data['alamat_shipping'] =$hasil_ship['name'].", ".$hasil_ship['address_name'].", ".$hasil_ship['address1']." ".$hasil_ship['city_name']." ".$hasil_ship['postal'];

				$this->data['id_kelurahan'] = $hasil_ship['village_id'];


			   // $this->data['id_kelurahan'] = $hasil_ship['village_id'];



				$this->data['shipping_address_id'] = $hasil_ship['id'];
		//                   print_r($api); die();
		}else{
			foreach($hasil as $items){
				$this->data['alamat_shipping'] =$items['name'].", ".$items['address_name'].", ".$items['address1']." ".$items['city_name']." ".$items['postal'];
				$this->data['id_kelurahan'] = $items['village_id'];
				$this->data['shipping_address_id'] = $items['id'];
			}
		}

        //Metode Pembayaran
		$apiMethod = "payment/method";
		$urlMethod = api_base_url($apiMethod);
		$kontenMethod = file_get_contents($urlMethod);
		$this->data['hasilMethod'] = json_decode($kontenMethod, true);
                $domain = domain();
		$this->data['token'] = $_COOKIE['x-auth'];
		$this->data['title_web'] = "Checkout - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/checkout/checkout.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function test3()
	{
		$this->data['token'] = $_COOKIE['x-auth'];
		$token = $_COOKIE['x-auth'];
		$api = "order/cart/detail";
		$url = api_base_url($api);

		$options = ["http" => [
		"method" => "GET",
		"header" => ["token: " . $token,
		"Content-Type: application/json"],
		]];

		$context = stream_context_create($options);
		$konten = file_get_contents($url, false, $context);

		$hasil = json_decode($konten, true);
		// echo"<pre>"; print_r($hasil); die();
		$this->data['hasil'] = json_decode($konten, true);
		$this->data['title_web'] = "Myacico.com - Checkout";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/checkout/test3.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function paymentTransfer()
	{
		$api = "payment/myacicoaccount";
		$url = api_base_url($api);

		$konten = file_get_contents($url);
		$this->data['hasil'] = json_decode($konten, true);
		$this->load->view('frontend/modules/checkout/list_payment.php',$this->data);

	}

        public function paymentOnline()
	{
		$api = "payment/onlinepayment?value=O";
		$url = api_base_url($api);

		$konten = file_get_contents($url);
		$this->data['hasil'] = json_decode($konten, true);
		$this->load->view('frontend/modules/checkout/list_payment_online.php',$this->data);

	}

	public function listShipping()
	{
		$idkel = $this->input->post('idkel');
		$api = "freight/shipment/rates?to_village_id=".$idkel;
		$url = api_base_url($api);

		$konten = file_get_contents($url);
		$this->data['hasil'] = json_decode($konten, true);
		$hasil = json_decode($konten, true);

		$this->data['id_kelurahan'] = $idkel;
		$this->load->view('frontend/modules/checkout/list_shipping.php',$this->data);
	}

	public function getDataShipping()
	{
		$idkel = $this->input->post('idkel');
		$total_weight = $this->input->post('total_weight');
		$id = $this->input->post('shipperId');

		$api = "freight/shipment/rates?to_village_id=".$idkel."&total_weight=".$total_weight."&id=".$id;
		$url = api_base_url($api);

		$konten = file_get_contents($url);
		//$this->data['hasil'] = json_decode($konten, true);
		$hasil = json_decode($konten, true);

		header('Content-Type: application/json');
		echo json_encode( $hasil );

		//$this->load->view('frontend/modules/checkout/list_shipping.php',$this->data);
	}

	public function finishByTransfer()
	{
		$grandtotal = $this->input->post('grandtotal');
		$paymentMethod = $this->input->post('paymentMethod');
		$billing_address_id = $this->input->post('billing_address_id');
		$shipping_address_id = $this->input->post('shipping_address_id');
		$soncepickup = $this->input->post('soncepickup');
		$code = $this->input->post('code');
		$courier = $this->input->post('courier');
		$courier_amount = $this->input->post('courier_amount');

		$this->data['token'] = $_COOKIE['x-auth'];
		$token = $_COOKIE['x-auth'];

		$options = ["http" => [
		"method" => "GET",
		"header" => ["token: " . $token,
		"Content-Type: application/json"],
		]];

		$context = stream_context_create($options);

		$api = "order/checkout";
		$url = api_base_url($api);

		$konten = file_get_contents($url, false, $context);
		$this->data['hasil'] = json_decode($konten, true);
		$hasil = json_decode($konten, true);
		echo"<pre>"; print_r($hasil);
	//	$this->load->view('frontend/modules/checkout/list_shipping.php',$this->data);
	}

	public function formAddBillingNew()
	{
            $domain = domain();
		$this->data['title_web'] = "Checkout / Add Billing - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/checkout/form_add_billing.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function formAddShippingNew()
	{
            $domain = domain();
		$this->data['title_web'] = "Checkout / Add Shipping - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/checkout/form_add_shipping.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function dataShipping()
	{
             $domain = domain();
		$this->data['title_web'] = "Checkout / Show Shipping - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/checkout/data_shipping.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

    public function success()
	{
        $domain = domain();
		$this->data['title_web'] = "Checkout - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/checkout/success.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function switchLang()
    {
		$lang = $this->input->post('lang');
		set_cookie('lang',$lang,time() + (86400 * 30));
		echo $lang;
	}
	/*
	public function index() {
         set_cookie('cookie_name','cookie_value','3600');
         $this->load->view('Cookie_view');
      }
  */
	public function display_cookie() {
		echo get_cookie('lang');
	//   $this->load->view('Cookie_view');
	}

	public function deletecookie() {
		delete_cookie('lang');
	//    redirect('cookie/display');
	}

	public function pilihShipping() {
		$id = $this->uri->segment(3);
		// $data = array('shipping_address_id' => $id);
    // $this->session->set_userdata($data);
		$shipping_address_id = $id;
		set_cookie('shipping_address_id',$shipping_address_id,time() + (86400 * 30));

		$data = array(
			'id_kurir' => '',
			'ongkos_kurir' => '',
			'name_kurir' => '',
		);
		$this->session->set_userdata($data);

		// redirect('checkout');
		//redirect('checkout/addressbook');
		redirect('checkout/cart');
	}

	public function finish()
	{
            $domain = domain();
		$id=$this->uri->segment(3);

		$this->data['token'] = $_COOKIE['x-auth'];
		$token = $_COOKIE['x-auth'];

		$options = ["http" => [
		"method" => "GET",
		"header" => ["token: " . $token,
		"Content-Type: application/json"],
		]];

		$context = stream_context_create($options);

		$api = "transaction/list?id=".$id;
		$url = api_base_url($api);

		$konten = file_get_contents($url, false, $context);
		$this->data['field'] = json_decode($konten);
		$data = array('shipping_address_id' => '');
    $this->session->set_userdata($data);

		// $field = json_decode($konten);
		// echo"<pre>"; print_r($field); die();

		$this->data['title_web'] = "Checkout - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/checkout/finish.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function paymentByCreditCard()
	{
		$this->data['id'] = $this->uri->segment(3);
		$this->data['token'] = $this->uri->segment(4);
		$this->load->view('frontend/modules/checkout/payment_credit.php',$this->data);
	}

  public function paymentByOnline()
	{
		$this->data['id'] = $this->uri->segment(3);
		$this->data['token'] = $this->uri->segment(4);
		$this->load->view('frontend/modules/checkout/payment_online.php',$this->data);
	}

	public function finishByOnlineFailed()
	{
		$id=$this->uri->segment(3);
                $domain = domain();
		$this->data['token'] = $_COOKIE['x-auth'];
		$token = $_COOKIE['x-auth'];

		$options = ["http" => [
		"method" => "GET",
		"header" => ["token: " . $token,
		"Content-Type: application/json"],
		]];

		$context = stream_context_create($options);

		$api = "transaction/list?id=".$id;
		$url = api_base_url($api);

		$konten = file_get_contents($url, false, $context);
		$this->data['field'] = json_decode($konten);
		$field = json_decode($konten);

		$data = array('shipping_address_id' => '');
  	$this->session->set_userdata($data);

		$this->data['title_web'] = "Checkout - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);

//echo $field->transactionStatus; die();

		if($field->transactionStatus=='PAID'){
			$this->load->view('frontend/modules/checkout/finish_payment_online_success.php',$this->data);
		}else{
			$this->load->view('frontend/modules/checkout/finish_payment_online_error.php',$this->data);
		}
		$this->load->view('frontend/footer',$this->data);
	}

  public function finishByOnline()
	{

		$id=$_GET['id'];
//		echo"$id";
		$options = ["http" => [
		"method" => "GET",
		"Content-Type: application/json"],
		];

		$context = stream_context_create($options);

		$api = "transaction/status/".$id;
		$url = api_base_url($api);

		$konten = file_get_contents($url, false, $context);
		$this->data['field'] = json_decode($konten);
		$field = json_decode($konten);

    $domain = domain();
		$this->data['title_web'] = "Checkout - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);

		if($field->status=='1'){

			$id=$field->orderId;

			$this->data['token'] = $_COOKIE['x-auth'];
			$token = $_COOKIE['x-auth'];

			$options = ["http" => [
			"method" => "GET",
			"header" => ["token: " . $token,
			"Content-Type: application/json"],
			]];

			$context = stream_context_create($options);

			$api = "transaction/list?orderid=".$id;
			$url = api_base_url($api);

			$konten = file_get_contents($url, false, $context);
			$this->data['field'] = json_decode($konten);
			$field = json_decode($konten);

			$data = array('shipping_address_id' => '');
	  	$this->session->set_userdata($data);


			$this->load->view('frontend/modules/checkout/finish_payment_online_success.php',$this->data);

		}else{
			$this->load->view('frontend/modules/checkout/error_payment.php',$this->data);
		}
		$this->load->view('frontend/footer',$this->data);
	}

	public function finishByCreditCard()
	{
		$id=$this->uri->segment(3);

		$this->data['token'] = $_COOKIE['x-auth'];
		$token = $_COOKIE['x-auth'];

		$options = ["http" => [
		"method" => "GET",
		"header" => ["token: " . $token,
		"Content-Type: application/json"],
		]];

		$context = stream_context_create($options);

		$api = "transaction/list?id=".$id;
		$url = api_base_url($api);

		$konten = file_get_contents($url, false, $context);
		$this->data['field'] = json_decode($konten);
		$field = json_decode($konten);

		$data = array('shipping_address_id' => '');
  	$this->session->set_userdata($data);
		$domain = domain();
		$this->data['title_web'] = "Checkout - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);

//echo $field->transactionStatus; die();

		if($field->transactionStatus=='PAID'){
			$this->load->view('frontend/modules/checkout/finish_credit_cart_success.php',$this->data);
		}else{
			$this->load->view('frontend/modules/checkout/finish_credit_cart_error.php',$this->data);
		}
		$this->load->view('frontend/footer',$this->data);
	}
}
