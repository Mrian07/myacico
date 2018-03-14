<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simulasi extends Web {

	public function __construct()
    {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('app');
    }
    
    public function index()
    {
        redirect('simulasi/jasapengiriman');
    }

	public function jasapengiriman()
    {
        // $home_domain = domain2();
        // $api = "home/view";
        // $api_lvl1 ="product/banner";
        // $url_lvl1 =api_base_url($api_lvl1);

		// $url = api_base_url($api);

		// $api2 = "home/topproductcategory";
		// $url2 = api_base_url($api2);
		// $konten2 = file_get_contents($url2);

		// $konten = file_get_contents($url);
        // $konten_lvl1 = file_get_contents($url_lvl1);
        // $this->data['dathome'] = json_decode($konten, true);
        // $this->data['dathome2'] = json_decode($konten2, true);
        // $this->data['dathomeLvl'] = json_decode($konten_lvl1, true);


		//$this->load->view('frontend/test',$this->data);
		$this->data['title_web'] = "myacico.co.id - Simulasi Jasa Pengiriman";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/simulasi/simulasi.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

}
