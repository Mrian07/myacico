<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends Account_private {

	public function __construct()
    {
		parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('session');
		$this->load->helper('cookie');
	//	$this->load->model('Login_model', 'login', TRUE);


		$this->atribut();
	}

	public function atribut(){

		//$this->data['title_web'] = "Myacico.com - Account";
	}

	public function index()
    {

		$this->data['title_web'] = "Myacico.com - Dashboard";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/dashboard.php',$this->data);
		$this->load->view('frontend/footer',$this->data);

	}
	
	public function test()
    {	$this->load->helper('cookie');
		/*$cookie = array(
				'name'   => 'remember_me',
				'value'  => 'test',                            
				'expire' => '300',                                                                                   
				'secure' => TRUE
				);
		set_cookie($cookie);     */      

	/*	$cookie = array(
			'name'   => 'home_set',
			'value'  => 'home page Change',
			'expire' => time()+86500,
			'domain' => '.localhost',
			'path'   => '/',
			'prefix' => 'arjun_',
        );
 
		//set_cookie($cookie);
		$this->input->set_cookie($cookie);
		$this->input->get_cookie($cookie);
	//	echo"ini"; print_r(get_cookie($cookie));*/
	
		set_cookie('cookie_name','cookie_value','3600'); 
	
	}
	
	public function test2()
    {	$this->load->helper('cookie');
		echo get_cookie('cookie_name'); die();
		echo"<pre>"; print_r($this->input->get_cookie($cookie));
	}
	
	public function test3()
    {
		delete_cookie('cookie_name'); 
	}
	
	
	
	public function informasiAkun()
    {
		$this->data['title_web'] = "Myacico.com - Informasi Akun";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/info_login',$this->data);
		$this->load->view('frontend/modules/account/informasi_akun',$this->data);
		$this->load->view('frontend/footer',$this->data);

	}

	public function berlanggananNewsletter()
    {
		$this->data['title_web'] = "Myacico.com - Informasi Akun";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/info_login',$this->data);
		$this->load->view('frontend/modules/account/berlanggananNewsletter',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function bukuAlamat()
    {
		$this->data['title_web'] = "Myacico.com - Buku Alamat";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/info_login',$this->data);
		$this->load->view('frontend/modules/account/bukuAlamat',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}
	
	public function riwayatStatusPesanan()
    {
		$this->data['title_web'] = "Myacico.com - Riwayat Status Pasaran";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/info_login',$this->data);
		$this->load->view('frontend/modules/account/riwayatStatusPesanan',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function returnManagementAuthority()
    {
		$this->data['title_web'] = "Myacico.com - Return Management Authority";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/info_login',$this->data);
		$this->load->view('frontend/modules/account/riwayatStatusPasaran',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function Wishlist()
    {
		$this->data['title_web'] = "Myacico.com - Wishlist";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/info_login',$this->data);
		$this->load->view('frontend/modules/account/Wishlist',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

}
