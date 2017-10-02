<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends Web_private {

	public function __construct()
    {
		parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
		/*$this->load->library('session');
		$this->load->library('session');*/
		$this->load->helper('cookie');
	//	$this->load->model('Login_model', 'login', TRUE);


		$this->atribut();
	}

	public function atribut(){
		//$this->data['title_web'] = "Myacico.com - Account";

		$this->data['active_dashboard'] = "";
		$this->data['active_informasiAkun'] = "";
		$this->data['active_bukuAlamat'] = "";
		$this->data['active_riwayatStatusPesanan'] = "";
		$this->data['active_returnManagementAuthority'] = "";
		$this->data['active_berlanggananNewsletter'] = "";
		$this->data['active_wishlist'] = "";
	}

	public function index()
    {
		$this->data['active_dashboard'] = "class='active'";
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
		$this->data['active_informasiAkun'] = "class='active'";
		$this->data['title_web'] = "Myacico.com - Informasi Akun";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/informasi_akun',$this->data);
		$this->load->view('frontend/footer',$this->data);

	}

	public function berlanggananNewsletter()
    {
		$this->data['active_berlanggananNewsletter'] = "class='active'";
		$this->data['title_web'] = "Myacico.com - Informasi Akun";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/berlanggananNewsletter',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function bukuAlamat()
    {
		$this->data['active_bukuAlamat'] = "class='active'";
		$this->data['title_web'] = "Myacico.com - Buku Alamat";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/bukuAlamat',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function TambahBukuAlamat()
    {
		$this->data['active_bukuAlamat'] = "class='active'";
		$this->data['title_web'] = "Myacico.com - Buku Alamat";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/TambahBukuAlamat',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function riwayatStatusPesanan()
    {
		$this->data['active_riwayatStatusPesanan'] = "class='active'";
		$this->data['title_web'] = "Myacico.com - Riwayat Status Pasaran";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/riwayatStatusPesanan',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function returnManagementAuthority()
    {
		$this->data['active_returnManagementAuthority'] = "class='active'";
		$this->data['title_web'] = "Myacico.com - Return Management Authority";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/riwayatStatusPesanan',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function Wishlist()
    {
		$this->data['active_wishlist'] = "class='active'";
		$this->data['title_web'] = "Myacico.com - Wishlist";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/Wishlist',$this->data);
		$this->load->view('frontend/footer',$this->data);
			// $this->load->view('frontend/footer',$this->data);
	}
	
	public function formAccount()
    {
		$this->data['active_informasiAkun'] = "class='active'";
		$this->data['title_web'] = "Myacico.com - Return Management Authority";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/form_account',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}
	
	public function formBilling()
    {
		$this->data['active_informasiAkun'] = "class='active'";
		$this->data['title_web'] = "Myacico.com - Return Management Authority";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/form_billing',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}
	
	public function formPassword()
    {
		$this->data['active_informasiAkun'] = "class='active'";
		$this->data['title_web'] = "Myacico.com - Return Management Authority";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/form_password',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function logout()
    {
		$data = array('cust_email' => '', 'cust_pass' => '', 'cust_login' => '');
		$this->session->set_userdata($data);
		redirect('customer/signIn');
	}
}
