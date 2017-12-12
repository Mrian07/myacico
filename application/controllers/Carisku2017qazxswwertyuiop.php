<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carisku2017qazxswwertyuiop extends Web {

	public function __construct()
    {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->helper('app');

		$this->atribut();
	}

	public function atribut(){

	}

	public function index()
	{
		$domain = domain();
		$this->data['title_web'] = "Create Account Business - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/private/sku.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}


	public function listItem()
	{

		// $this->data['pro_id']=$this->uri->segment(3);
		// $pro_id=$this->uri->segment(3);
    //
		$pro_id=$this->uri->segment(3);

		$apiMain = "product/detail?sku=".$pro_id;

		//$urlMain = "https://api.myacico.co.id/myacico-service/product/detail?sku=".$pro_id;

		$urlMain = api_base_url($apiMain);
		$kontenMain = file_get_contents($urlMain, false);
		$hasilMain = json_decode($kontenMain, true);
		// echo$hasilMain['m_product_id'];
		// echo"<pre>"; print_r($hasilMain); die();

		// $api = "product/productlist/detail?id=".$pro_id;
		// $url = api_base_url($api);

		$options = ["http" => [
		"method" => "GET",
		]];

		$context = stream_context_create($options);
		$konten = file_get_contents($urlMain, false, $context);
		$hasil = json_decode($kontenMain, true);


	if($hasil['isActive']=='Y'){

		$id_prod = $hasil['m_product_id'];
		//Komen
		$api_komen = "product/listreview?productid=".$id_prod;
		$url_komen = api_base_url($api_komen);
		$konten_komen = file_get_contents($url_komen, false, $context);
		$komen = json_decode($konten_komen, true);


		//e lalang

		 $this->data['komen']=$komen;

		 if(isset($hasil['sku'])){
			 $this->data['sku'] = $hasil['sku'];

		 }else{
			 $hasil['sku'] ='';

		 }


		$i=0;
		foreach ($hasil['specification'] as $speck)
		{
		 if(isset($speck)){
					$this->data['specification'][$i] = $speck['attribute'];
					$this->data['value'][$i] = $speck['value'];

		 }else{
				 $this->data['specification'][$i]='';
		 }

		 $i++;
		}

		$this->data['description'] = $hasil['description'];
		$this->data['specialPrice'] = $hasil['specialPrice'];
		$this->data['discount'] = $hasil['discount'];
		$this->data['highlight'] = $hasil['highlight'];
		$this->data['sku'] = $hasil['sku'];
		$this->data['asap_stat'] = $hasil['istodayshipping'];
		$this->data['isWishList']=$hasil['isWishList'];
		$this->data['category'] = $hasil['category'];
		$this->data['m_product_id'] = $hasil['m_product_id'];
		$this->data['rate'] = $hasil['rate'];
		$this->data['rating'] = $hasil['rating'];
		$this->data['alias'] = $hasil['alias'];
		$this->data['name'] = $hasil['name'];
		$this->data['pricelist'] = $hasil['pricelist'];

		$this->data['stock'] = $hasil['stock'];
		$this->data['volume'] = $hasil['volume'];
		$this->data['weight'] = $hasil['weight'];
		$this->data['rate'] = $hasil['rate'];
		// jika gambar tidak ada

		$this->data['local_strg'] =$pro_id;
		$i=0;
		 foreach ($hasil['imageurl'] as $gmb)
		 {
				 if(isset($gmb)){
			$this->data['img'][$i] = $gmb;
				 }else{
						 $this->data['img'][$i]=false;
				 }
				 $i++;
		 }
	}

	if($hasil['isActive']=='Y'){
		$this->load->view('frontend/modules/private/detail.php',$this->data);
	}else{
		$this->load->view('frontend/modules/product/empty_product.php',$this->data);
	}

	}


}
