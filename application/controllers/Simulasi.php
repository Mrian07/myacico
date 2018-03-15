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
		$item = $this->uri->segment(3);
		$this->data['sku'] = $item;	
        $api = "freight/ro?sku=".$item;

		$url = api_base_url($api);

		$konten = file_get_contents($url);
		$hasil = json_decode($konten, true);
		$status = $hasil['status'];
		if($status){
			$this->data['pricelist'] = money($hasil['product']['harga_pemerintah']);	
		}else{
			$this->data['pricelist'] = 0;
		}
		
		$this->data['title_web'] = "myacico.co.id - Simulasi Jasa Pengiriman";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/simulasi/simulasi.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

}
