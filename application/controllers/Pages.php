<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends Web {

	public function __construct()
    {
		parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
		$this->load->library('session');
	//	$this->load->helper('cookie');
	//	$this->load->model('Login_model', 'login', TRUE);


		$this->atribut();
	}

	public function atribut(){

	}

	public function newProduct(){

		$cat=$this->uri->segment(3);


		$id=$this->uri->segment(4);
		$short=$this->uri->segment(5);
  	$page=$this->uri->segment(6);

		$api_rec = "product/listproduct/all/new";


		$api = "product/listproduct/all/new";
		$url = api_base_url($api);
		$konten = file_get_contents($url);
		$url3 = api_base_url($api_rec);
		$options = ["http" => [
		      "method" => "GET",
           "header" => [
           "Content-Type: application/json"],
		]];
		$test = json_decode($konten, true);

// echo"<pre>"; print_r($jdata); die();
		/*
		$jmlslide2=count($dathome['level_2']);
	$n=1;
	foreach($dathome['level_2'] as $key => $itemslide2){
		*/


		if($short==''){$this->data['sort_id'] = '5'; }else{$this->data['sort_id'] =$short; }
		$this->data['pro'] = $id;

		$batas = '10';
		if(empty($cat)){
			$posisi = 0;
			$cat = 1;
		}else{
			$posisi = ($cat-1)*$batas;
		}

		$api2 = "product/listproduct/all/new?page=".$cat;

	$url4 = api_base_url($api2);

		$this->data['page'] = $cat;
		$this->data['posisi'] = $posisi;
		$this->data['pageCount'] = json_decode($konten, true);
		$options = ["http" => [
					"method" => "GET",
					 "header" => [
					 "Content-Type: application/json"],
		]];
			$context = stream_context_create($options);
		$konten1 = $this->data['pageCount'];
		$konten4 = file_get_contents($url4, false, $context);
		$this->data['productList'] = json_decode($konten4, true);
		$test = $this->data['productList'] = json_decode($konten4, true);




		$dathome = json_decode($konten, true);
	$konten3 = file_get_contents($url3, false, $context);
	$this->data['jumlahMenu']= 0;

		$jdata =$dathome['pageCount'];
		$jdata3 =$api2;
		$this->data['jpage'] = ceil($jdata/$batas);
		$this->data['jdata'] = $jdata;
		$this->data['productList'] = json_decode($konten4, true);

		$this->data['totalItem'] = $jdata;
		if($cat == ''){
			$this->data['dathome'] = json_decode($konten, true);
		}else{
			$this->data['dathome'] = json_decode($konten4, true);
		}


		$hasil = json_decode($konten, true);

		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/pages/new_product.php',$this->data);
		$this->load->view('frontend/footer',$this->data);

	}


  public function AboutUs()
  {$home_domain = domain2();
    $this->data['title_web'] = "Myacico.co.id - ".$home_domain;
    $this->load->view('frontend/header',$this->data);
    $this->load->view('frontend/nav.php',$this->data);
   $this->load->view('frontend/modules/pages/aboutus.php',$this->data);
    $this->load->view('frontend/footer',$this->data);
  }
	public function SyaratDnKetentuan()
	{
		$home_domain = domain2();
                $this->data['title_web'] = "Myacico.co.id - ".$home_domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);

		$this->load->view('frontend/modules/pages/syarat.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function caraBerbelanja()
	{
		$home_domain = domain2();
                $this->data['title_web'] = "Myacico.co.id - ".$home_domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);

		$this->load->view('frontend/modules/pages/cara_berbelanja.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}
        public function kebijakanPrivasi()
	{
		$home_domain = domain2();
                $this->data['title_web'] = "Myacico.co.id - ".$home_domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);

		$this->load->view('frontend/modules/pages/kebijakanprivas.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}
	public function faqCus()
	{
		$home_domain = domain2();
                $this->data['title_web'] = "Myacico.co.id - ".$home_domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);

		$this->load->view('frontend/modules/pages/faqcus.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}
	public function Pemb()
	{
		$home_domain = domain2();
                $this->data['title_web'] = "Myacico.co.id - ".$home_domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);

		$this->load->view('frontend/modules/pages/pemba.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function Pengembalian()
	{
		$home_domain = domain2();
                $this->data['title_web'] = "Myacico.co.id - ".$home_domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);

		$this->load->view('frontend/modules/pages/pengembalian.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}
	public function Jaminan()
	{
		$home_domain = domain2();
                $this->data['title_web'] = "Myacico.co.id - ".$home_domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);

		$this->load->view('frontend/modules/pages/jaminan.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function hakCipta()
	{
		$home_domain = domain2();
                $this->data['title_web'] = "Myacico.co.id - ".$home_domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);

		$this->load->view('frontend/modules/pages/hakcipta.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function payment()
	{
		$home_domain = domain2();
                $this->data['title_web'] = "Myacico.co.id - ".$home_domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);

		$this->load->view('frontend/modules/pages/payment.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}
	public function konfrimasi()
	{
		$this->data['title_web'] = "Myacico.com - Home";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);

		$this->load->view('frontend/modules/pages/konfrimasi.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function faq()
	{
		$id=$this->uri->segment(3);
		$home_domain = domain2();
                $this->data['title_web'] = "Myacico.co.id - ".$home_domain;
		$this->load->view('frontend/header',$this->data);
    $this->load->view('frontend/nav.php',$this->data);
		if($id){
			$this->load->view('frontend/modules/pages/faq_detail.php',$this->data);
		}else{
			$this->load->view('frontend/modules/pages/faq.php',$this->data);
		}

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
