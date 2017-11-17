<?php

class Maintenance extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->helper('app');
	}
	public function index()
    {

			$url = api_base_url('category');
  		$konten = file_get_contents($url);
			if($konten){
  		$this->data['catsearch'] = json_decode($konten, true);
      $catsearch = json_decode($konten, true);
      if($catsearch==''){
				$this->data['active_dashboard'] = "class='active'";
				$this->data['title_web'] = "Myacico.com - Dashboard";
				$this->load->view('frontend/maintenance',$this->data);
      }else{
				redirect('home');
			}
		}else{
			redirect('home');
		}

	}
}
