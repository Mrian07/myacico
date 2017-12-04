<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class subscribe extends Web {

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


public function index()
{
    $domain = domain();
  $this->data['title_web'] = "subscribe - ".$domain;
  $this->load->view('frontend/header',$this->data);
  $this->load->view('frontend/nav.php',$this->data);
  $this->load->view('frontend/modules/subscribe/subscribe.php',$this->data);
  $this->load->view('frontend/footer',$this->data);
}
}
