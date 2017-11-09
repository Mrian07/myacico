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



  public function AboutUs()
  {
    $this->data['title_web'] = "Myacico.com - Home";
    $this->load->view('frontend/header',$this->data);
    $this->load->view('frontend/nav.php',$this->data);

    $this->load->view('frontend/modules/pages/aboutus.php',$this->data);
    $this->load->view('frontend/footer',$this->data);
  }
	public function SyaratDnKetentuan()
	{
		$this->data['title_web'] = "Myacico.com - Home";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);

		$this->load->view('frontend/modules/pages/syarat.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function kebijakanPrivasi()
	{
		$this->data['title_web'] = "Myacico.com - Home";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);

		$this->load->view('frontend/modules/pages/kebijakanprivas.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}
	public function faqCus()
	{
		$this->data['title_web'] = "Myacico.com - Home";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);

		$this->load->view('frontend/modules/pages/faqcus.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}
	public function Pemb()
	{
		$this->data['title_web'] = "Myacico.com - Home";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);

		$this->load->view('frontend/modules/pages/pemba.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function Pengembalian()
	{
		$this->data['title_web'] = "Myacico.com - Home";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);

		$this->load->view('frontend/modules/pages/pengembalian.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}
	public function Jaminan()
	{
		$this->data['title_web'] = "Myacico.com - Home";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);

		$this->load->view('frontend/modules/pages/jaminan.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function hakCipta()
	{
		$this->data['title_web'] = "Myacico.com - Home";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);

		$this->load->view('frontend/modules/pages/hakcipta.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function payment()
	{
		$this->data['title_web'] = "Myacico.com - Home";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);

		$this->load->view('frontend/modules/pages/payment.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function faq()
	{
		$id=$this->uri->segment(3);
		$this->data['title_web'] = "Myacico.com - Home";
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
