<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Harbolnas extends Web {

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

		$api = "https://api.myacico.co.id/myacico-service/product/listproduct/all/harbolnas";
		$url = "https://api.myacico.co.id/myacico-service/product/listproduct/all/harbolnas";
		$url3 = "https://api.myacico.co.id/myacico-service/product/listproduct/all/travelessential";

		$api2 = "product/listproduct/all/momsfavorite";
		$url2 = "https://api.myacico.co.id/myacico-service/product/listproduct/all/momsfavorite";
		$konten2 = file_get_contents($url2);
		$konten3 = file_get_contents($url3);
		$konten = file_get_contents($url);


		$this->data['dathome'] = json_decode($konten, true);
	$this->data['dathome2'] = json_decode($konten2, true);
	$this->data['dathome3'] = json_decode($konten3, true);
		//$this->load->view('frontend/test',$this->data);
		$this->data['title_web'] = "myacico.co.id - ".$home_domain;



		$this->load->view('frontend/modules/harbonas/harbonas.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}
	public function HarbolnasPartners()
    {
				$this->data['id'] = $this->uri->segment(3);

            $home_domain = domain2();
		//Slide slide_show
		$api = "https://api.myacico.co.id/myacico-service/product/listproduct/all/harbolnas";
		$url = "https://api.myacico.co.id/myacico-service/product/listproduct/all/harbolnas";
		$url3 = "https://api.myacico.co.id/myacico-service/product/listproduct/all/travelessential";

		$api2 = "product/listproduct/all/momsfavorite";
		$url2 = "https://api.myacico.co.id/myacico-service/product/listproduct/all/momsfavorite";
		$konten2 = file_get_contents($url2);
		$konten3 = file_get_contents($url3);
		$konten = file_get_contents($url);


		$this->data['dathome'] = json_decode($konten, true);
	$this->data['dathome2'] = json_decode($konten2, true);
	$this->data['dathome3'] = json_decode($konten3, true);
		//$this->load->view('frontend/test',$this->data);
		$this->data['title_web'] = "myacico.co.id - ".$home_domain;


		$this->load->view('frontend/modules/harbonas/harbonasCimb.php',$this->data);
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
