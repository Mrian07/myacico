<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends Web {

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



  public function AboutUs()
  {
    $this->data['title_web'] = "Myacico.com - Home";
    $this->load->view('frontend/header',$this->data);
    $this->load->view('frontend/nav.php',$this->data);

    $this->load->view('frontend/modules/Pages/aboutus.php',$this->data);
    $this->load->view('frontend/footer',$this->data);
  }

	public function payment()
	{
		$this->data['title_web'] = "Myacico.com - Home";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);

		$this->load->view('frontend/modules/Pages/payment.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}
	public function faq()
	{
		$this->data['title_web'] = "Myacico.com - Home";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);

		$this->load->view('frontend/modules/Pages/faq.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}
// aaa
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