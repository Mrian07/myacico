<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends Web {
	
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
		
		//$this->data['title_web'] = "Myacico.com - Account";
	}
	
	public function index()
    {	
		$this->data['title_web'] = "Myacico.com - Dashboard";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/dashboard.php',$this->data);
		$this->load->view('frontend/footer',$this->data);

	}
	

}
