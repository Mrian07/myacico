<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends Web {

	public function __construct()
    {
		parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('cookie');
	//	$this->load->model('Login_model', 'login', TRUE);


		$this->atribut();
	}

	public function atribut(){

	}

	public function index()
	{
		$this->data['title_web'] = "Myacico.com - Create Account Business";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/cart/cart.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}
	
	function addToCart()
	{ 
		$id_unik = $this->unik();
		$price = $this->input->post('pricelist');
		$m_product_id = $this->input->post('m_product_id');
		$imageurl = $this->input->post('imageurl');
		$data = array(
				'rowid'      => $id_unik,
				'id_product' => $m_product_id,
				'qty'     => 1,
				'price'   => $price,
				'image'    => $imageurl,
            );

		$this->cart->insert($data); 
		
		
		$hasil = $this->cart->contents();
		print_r($hasil); die();
		/*foreach ($this->cart->contents() as $items){
			print_r($items);
		
		}*/
	}
	
	function unik(){
		$the_char = array(
		 "1","2","3","4","5","6","7","8","9"
		);
		$max_elements = count($the_char) - 1;
		srand((double)microtime()*1000000);
		$c1 = $the_char[rand(0,$max_elements)];
		$c2 = $the_char[rand(0,$max_elements)];
		$c3 = $the_char[rand(0,$max_elements)]; 
		$c4 = $the_char[rand(0,$max_elements)];
		$c5 = $the_char[rand(0,$max_elements)];
		$c6 = $the_char[rand(0,$max_elements)]; 
		$c7 = $the_char[rand(0,$max_elements)];
		$c8 = $the_char[rand(0,$max_elements)];
		$c9 = $the_char[rand(0,$max_elements)]; 
		$ranc = "$c1$c2$c3$c4$c5$c6$c7$c8$c9";
		return $ranc;
	}
/*
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
  *//*
      public function display_cookie() {
         echo get_cookie('lang');
      //   $this->load->view('Cookie_view');
      }

      public function deletecookie() {
         delete_cookie('lang');
     //    redirect('cookie/display');

	 }*/
}
