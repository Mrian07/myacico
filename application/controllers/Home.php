<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Web {

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

	public function maintenance()
  {
		$this->load->view('frontend/maintenance.php');
	}

	public function index()
    {

		//Slide slide_show
		$api = "home/view";
		$url = api_base_url($api);

		$konten = file_get_contents($url);
		$this->data['dathome'] = json_decode($konten, true);

		//$this->load->view('frontend/test',$this->data);
		$this->data['title_web'] = "Myacico.com - Home";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/slide_show.php',$this->data);
		$this->load->view('frontend/modules/home/home',$this->data);
    $this->load->view('frontend/sidenav',$this->data);
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
}
