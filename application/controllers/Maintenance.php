<?php

class Maintenance extends CI_Controller {
	public function index()
    {

			$url = "https://api.myacico.co.id/myacico-service/category";
      // $url = "http://192.168.0.109:8080/myacico-service/category";
  		$konten = file_get_contents($url);
  		$this->data['catsearch'] = json_decode($konten, true);
      $catsearch = json_decode($konten, true);
      if($catsearch==''){
				$this->data['active_dashboard'] = "class='active'";
				$this->data['title_web'] = "Myacico.com - Dashboard";
				$this->load->view('frontend/maintenance',$this->data); 
      }else{
				redirect('home');
			}


	}
}
