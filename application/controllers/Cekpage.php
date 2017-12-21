<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cekpage extends web {

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
    // echo $this->logedin;
    // print_r($_SERVER['QUERY_STRING']);
    echo current_url(); echo '?'.$_SERVER['QUERY_STRING']; die();
  //  echo $this->uri->segment(1);

    if('95K2lisBpI'==$this->uri->segment(1)){
      $key = $_GET['key'];
      $url = base_url('/account/confirm/'.$key);
      if($this->logedin=='1'){
        redirect($url);
      }else{
        if(!$this->logedin) redirect('customer/signIn?callback='.$url);
      }

    }else{
      redirect('home');
    }

	}


}
