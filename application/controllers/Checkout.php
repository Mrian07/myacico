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
	//	$this->load->helper('cookie');
	//	$this->load->model('Login_model', 'login', TRUE);


		$this->atribut();
	}

	public function atribut(){

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
			$this->data['alamat_billing'] =$items['address_name'].", ".$items['address1']." ".$items['address2']." ".$items['city_name']." ".$items['postal'];
			$this->data['billing_address_id'] = $items['id'];
		}

        // Shipping Address ~Samuel
		if($this->session->userdata('shipping_address_id'))
		{

		   $api = "aduser/getaddress/".$this->session->userdata('shipping_address_id');
		   $url = api_base_url($api);


		   $konten2 = file_get_contents($url, false, $context);
		   $hasil_ship = json_decode($konten2, true);

		   //Data Shipping
		   $this->data['alamat_shipping'] =$hasil_ship['address_name'].", ".$hasil_ship['address1']." ".$hasil_ship['address2']." ".$hasil_ship['city_name']." ".$hasil_ship['postal'];
           $this->data['id_kelurahan'] = $hasil_ship['village_id'];
		   $this->data['shipping_address_id'] = $hasil_ship['id'];
		}

        //Metode Pembayaran
		$apiMethod = "payment/method";
		$urlMethod = api_base_url($apiMethod);
		$kontenMethod = file_get_contents($urlMethod);
		$this->data['hasilMethod'] = json_decode($kontenMethod, true);

		$this->data['token'] = $_COOKIE['x-auth'];
		$this->data['title_web'] = "Myacico.com - Checkout";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/checkout/checkout.php',$this->data);
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
		$this->data['title_web'] = "Myacico.com - Checkout / Add Billing";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/checkout/form_add_billing.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function formAddShippingNew()
	{
		$this->data['title_web'] = "Myacico.com - Checkout / Add Shipping";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/checkout/form_add_shipping.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function dataShipping()
	{
		$this->data['title_web'] = "Myacico.com - Checkout / Show Shipping";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/checkout/data_shipping.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

    public function success()
	{
		$this->data['title_web'] = "Myacico.com - Checkout";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/checkout/success.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function switchLang()
    {
		$lang = $this->input->post('lang');
		set_cookie('lang',$lang,'3600');
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
		$data = array('shipping_address_id' => $id);
        $this->session->set_userdata($data);
		redirect('checkout');
	}

	public function finish()
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
		$data = array('shipping_address_id' => '');
        $this->session->set_userdata($data);

		$this->data['title_web'] = "Myacico.com - Checkout";
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

		$this->data['title_web'] = "Myacico.com - Checkout";
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
