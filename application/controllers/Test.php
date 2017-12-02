<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('cart');
		$this->load->helper('app');
	//	$this->load->helper('cookie');

		$this->atribut();
	}

	public function atribut(){

	}


	public function shipping()
	{
		$this->data['title_web'] = "Myacico.com";
		$this->load->view('frontend/header',$this->data);
	//	$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/cart/form_add_shipping.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

}
