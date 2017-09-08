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
		
		
	}
	
	public function create()
    {	
		$this->data['title_web'] = "Myacico.com - Create Account";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/customer/create/create.php',$this->data);
		$this->load->view('frontend/footer',$this->data);

	}
	
	public function personal()
    {	
		$this->data['title_web'] = "Myacico.com - Create Account Personal";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/customer/create/personal.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}
	
	public function business()
    {	
		$this->data['title_web'] = "Myacico.com - Create Account Business";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/customer/create/business.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}
	
	public function government()
    {	
		$this->data['title_web'] = "Myacico.com - Create Account Government";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/customer/create/government.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}
	
	public function lostPassword()
    {
		$this->data['title_web'] = "Myacico.com - Lupa Password";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/customer/lost_password/lost_password.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}
	
	public function signIn()
    {	
		$this->data['title_web'] = "Myacico.com - Login";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/customer/sign_in/sign_in.php',$this->data);
		$this->load->view('frontend/footer',$this->data);

	}
	
	public function logout()
    {
		$this->data['title_web'] = "Myacico.com - Login";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/customer/logout/logout.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}
}
