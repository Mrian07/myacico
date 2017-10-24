<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends Web {

	public function __construct()
    {
		parent::__construct();
        $this->load->helper('form');
		$this->load->helper('app');
        $this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('cart');

		$this->atribut();
	}

	public function atribut(){

	}


	public function listItem()
	{       $token = null;
                $adaToken =0;
		$this->data['pro']=$this->uri->segment(3);
                if(isset($_COOKIE['x-auth'])){
                    $token = $_COOKIE['x-auth'];
                    $adaToken =1;
                }
		$id_cat=$this->uri->segment(3);
		$ob=$this->uri->segment(4);
		if($ob){
			$api = "product/productlist?category=".$id_cat."&ob=".$ob;
		}else{
			$api = "product/productlist?category=".$id_cat;
		}
                $api2 = "product/productlist/".$id_cat;
		$url = api_base_url($api);
                $url2 = api_base_url($api2);
		$options = ["http" => [
		"method" => "GET",
                   "header" => ["token: " . $token,
                        "Content-Type: application/json"],  
		]];

		$context = stream_context_create($options);
		$konten = file_get_contents($url, false, $context);
                
		$this->data['hasil'] = json_decode($konten, true);
              //  die(print_r($this->data['hasil']['isWishList']));
		if($adaToken == 1){
			$this->data['cektoken'] = '1';
                        //$this->data['wish'] 
                     
		}else{
			$this->data['cektoken'] = '0';
		}

//die(print_r($this->data['hasil']));
		$this->data['title_web'] = "Myacico.com - Home";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		// $this->load->view('frontend/slide_show.php',$this->data);
		$this->load->view('frontend/modules/product/product.php',$this->data);

		$this->load->view('frontend/footer',$this->data);
	}


	public function index()
    {
		//$this->load->view('frontend/test',$this->data);
		$this->data['title_web'] = "Myacico.com - Home";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		// $this->load->view('frontend/slide_show.php',$this->data);
		$this->load->view('frontend/modules/product/product.php',$this->data);

		$this->load->view('frontend/footer',$this->data);
	}

	public function category()
	{
		$this->data['cat_id']=$this->uri->segment(3);

		$cat_id=$this->uri->segment(3);
		$api = "category/listc3?c2id=".$cat_id;
		$url = api_base_url($api);

		$options = ["http" => [
		"method" => "GET",
		]];

		$context = stream_context_create($options);
		$konten = file_get_contents($url, false, $context);

		$this->data['hasil'] = json_decode($konten, true);


		//$this->load->view('frontend/test',$this->data);
		$this->data['title_web'] = "Myacico.com - Home";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		// $this->load->view('frontend/slide_show.php',$this->data);
		$this->load->view('frontend/modules/product/category.php',$this->data);

		$this->load->view('frontend/footer',$this->data);
	}

	public function detail()
    {
		$this->data['pro_id']=$this->uri->segment(3);
		$pro_id=$this->uri->segment(3);
		$api = "product/productlist/detail?id=".$pro_id;
		$url = api_base_url($api);

		$options = ["http" => [
		"method" => "GET",
		]];

		$context = stream_context_create($options);
		$konten = file_get_contents($url, false, $context);

		$hasil = json_decode($konten, true);

		$this->data['category'] = $hasil['category'];
		$this->data['m_product_id'] = $hasil['m_product_id'];
		$this->data['name'] = $hasil['name'];
		$this->data['pricelist'] = $hasil['pricelist'];
		//$this->data['sku'] = $hasil['sku'];
		$this->data['stock'] = $hasil['stock'];
		$this->data['volume'] = $hasil['volume'];
		$this->data['weight'] = $hasil['weight'];

		$this->data['img'] = $hasil['imageurl'][0];
		$this->data['img1'] = $hasil['imageurl'][1];
		$this->data['img2'] = $hasil['imageurl'][2];
		$this->data['img3'] = $hasil['imageurl'][3];
		$this->data['title_web'] = "Myacico.com - Home";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/product/detail.php',$this->data);

		$this->load->view('frontend/footer',$this->data);
	}

	public function addWishlist()
	{
		$id = $this->input->post('id');
		$this->data['token'] = $_COOKIE['x-auth'];
		$token = $_COOKIE['x-auth'];
		$api = "product/addwishlist?item_id=".$id;
		$url = api_base_url($api);

		$options = ["http" => [
		"method" => "GET",
		"header" => ["token: " . $token,
		"Content-Type: application/json"],
		]];

		$context = stream_context_create($options);
		$konten = file_get_contents($url, false, $context);
		$hasil = json_decode($konten, true);
		echo $hasil['status'];
	}

	public function product2()
    {
		//$this->load->view('frontend/test',$this->data);
		$this->data['title_web'] = "Myacico.com - Home";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		// $this->load->view('frontend/slide_show.php',$this->data);
		$this->load->view('frontend/modules/product/product2.php',$this->data);

		$this->load->view('frontend/footer',$this->data);
	}

	public function product3()
    {
		//$this->load->view('frontend/test',$this->data);
		$this->data['title_web'] = "Myacico.com - Home";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		// $this->load->view('frontend/slide_show.php',$this->data);

		$this->load->view('frontend/modules/product/product3.php',$this->data);
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
