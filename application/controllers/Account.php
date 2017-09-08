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
		$this->load->view('frontend/nav',$this->data);
		$this->load->view('frontend/modules/account/info_login',$this->data);
		$this->load->view('frontend/modules/account/dashboard',$this->data);
		$this->load->view('frontend/footer',$this->data);

	}

	public function informasiAkun()
    {
		$this->data['title_web'] = "Myacico.com - Informasi Akun";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav',$this->data);
		$this->load->view('frontend/modules/account/informasi_akun',$this->data);
		$this->load->view('frontend/footer',$this->data);

	}
	// a

	public function logout()
    {
		redirect('customer/logout');
	}

}
