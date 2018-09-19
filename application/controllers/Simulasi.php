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
	
	public function ged()
    {

		if($this->uri->segment(3)){
			$item = $this->uri->segment(3);
		}else{
			$item = "kosong";
		}

		$this->data['sku'] = $item;	
        $api = "freight/ro?sku=".$item;

		$url = api_base_url($api);

		$konten = file_get_contents($url);
		$hasil = json_decode($konten, true);

		$status = $hasil['status'];
		if($status){
			$this->data['pricelistOri'] = $hasil['product']['harga_pemerintah'];
			// $this->data['tot_asuransi'] = $hasil['product']['asuransi'];
			$this->data['pricelist'] = money($hasil['product']['harga_pemerintah']);	
		}else{
			$this->data['pricelist'] = 0;
			// $this->data['tot_asuransi'] = 0;
			$this->data['pricelistOri'] = 0;
		}
		$this->data['berat'] = "0";
		$url = "https://netcr.myacico.co.id/api/geddestcities/1";

		$konten = file_get_contents($url);
		$this->data['hasil'] = json_decode($konten, true);
		
		$this->data['title_web'] = "myacico.co.id - GED";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/ged/ged.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function loadGed(){

		if($this->uri->segment(3)){
			$start = $this->uri->segment(3);
		}else{
			$start = "kosong";
		}

		if($start){
			$url = "https://netcr.myacico.co.id/api/geddestcities/".$start;
			$konten = file_get_contents($url);
			$result = json_decode($konten, true);

			foreach($result as $data){
				echo'<div class="item-city" onClick="pilihCity(\''.$data["directcityname"].'\')">'.$data["directcityname"].'</div>';
			}

		}
	}

	public function srcGed(){
		if($this->uri->segment(3)){
			$key = $this->uri->segment(3);
			$url = "https://netcr.myacico.co.id/api/geddestcitiesbycityname/".$key;
		}else{
			$url = "https://netcr.myacico.co.id/api/geddestcities/1";
			$key="";
		}
	
		$konten = file_get_contents($url);
		$result = json_decode($konten, true);

		foreach($result as $data){
			echo'<div class="item-city" onClick="pilihCity(\''.$data["directcityname"].'\')">'.$data["directcityname"].'</div>';
		}

		
	}

	public function jasapengiriman()
    {	
		
		if($this->uri->segment(3)){
			$item = $this->uri->segment(3);
		}else{
			$item = "kosong";
		}

		
		
		$this->data['sku'] = $item;	
        $api = "freight/ro?sku=".$item;

		$url = api_base_url($api);

		$konten = file_get_contents($url);
		$hasil = json_decode($konten, true);
		$status = $hasil['status'];
		if($status){
			$this->data['pricelistOri'] = $hasil['product']['harga_pemerintah'];
			$this->data['pricelist'] = money($hasil['product']['harga_pemerintah']);	
		}else{
			$this->data['pricelist'] = 0;
			$this->data['pricelistOri'] = 0;
		}
		
		$this->data['title_web'] = "myacico.co.id - Simulasi Jasa Pengiriman";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/simulasi/simulasi.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

}
