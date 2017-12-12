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
            $home_domain = domain2();
		//Slide slide_show
		$api = "home/view";
                $api_lvl1 ="product/banner";
                $url_lvl1 =api_base_url($api_lvl1);
                
		$url = api_base_url($api);

		$api2 = "home/topproductcategory";
		$url2 = api_base_url($api2);
		$konten2 = file_get_contents($url2);
		// echo $url2;
		// die();
		$konten = file_get_contents($url);
                $konten_lvl1 = file_get_contents($url_lvl1);
		$this->data['dathome'] = json_decode($konten, true);
		$this->data['dathome2'] = json_decode($konten2, true);
                $this->data['dathomeLvl'] = json_decode($konten_lvl1, true);
		 /*echo "<pre>";
		 print_r($this->data['dathomeLvl'] );
		 die();*/
		//$dathome2 = json_decode($konten2, true);
		//$this->data['dathome3'] = $dathome2['topProduct'][0]['topProduct']

// 				echo "<pre>";
// 				print_r ($dathome2['topProduct'][0]['topProduct']);
// // print_r($dathome2);
// die();
	// 	echo "<pre>";
	// 	print_r($dathome2['topProduct']);
	// //	print_r($dathome2[0]['category']);
	// echo "</pre>";
	// 	die();

		//$this->load->view('frontend/test',$this->data);
		$this->data['title_web'] = "myacico.co.id: ".$home_domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/slide_show.php',$this->data);
		$this->load->view('frontend/modules/home/home',$this->data);
		$this->load->view('frontend/banner-left.php',$this->data);
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
