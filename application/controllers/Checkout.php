<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends Web_private {

	public function __construct()
    {
		parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
		$this->load->library('session');
	//	$this->load->helper('cookie');
	//	$this->load->model('Login_model', 'login', TRUE);


		$this->atribut();
	}

	public function atribut(){

	}

	public function index()
	{
		$this->data['title_web'] = "Myacico.com - Checkout";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/checkout/checkout.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
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
}
