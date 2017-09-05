<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends Web {
	
	public function __construct()
    {
		parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
		$this->load->library('session');
	//	$this->load->model('Login_model', 'login', TRUE);

		
		$this->atribut();	
	}

	public function atribut(){
		
		$this->data['title_web'] = "Myacico.com - Login Admin";
	}
	
	public function create()
    {	
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/modules/customer/create/create.php',$this->data);
		$this->load->view('frontend/footer',$this->data);

	}
	
	public function signIn()
    {	
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/modules/customer/sign_in/sign_in.php',$this->data);
		$this->load->view('frontend/footer',$this->data);

	}
}
