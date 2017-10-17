<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends Web_private {

	public function __construct()
    {
		parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
		$this->load->helper('app');

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
		$this->data['token'] = $_COOKIE['x-auth'];
		$token = $_COOKIE['x-auth'];
		$api = "aduser/getaddress?addresstype=isbillto";
		$url = api_base_url($api);

		$options = ["http" => [
		"method" => "GET",
		"header" => ["token: " . $token,
		"Content-Type: application/json"],
		]];
		
		$context = stream_context_create($options);
		$konten = file_get_contents($url, false, $context);
		$hasil = json_decode($konten, true);

		//Data Billing
		foreach($hasil as $items){
			$this->data['alamat_billing'] =$items['address_name'].", ".$items['address1']." ".$items['address2']." ".$items['city_name']." ".$items['postal'];
			$this->data['id_billing'] =$items['id'];
		}
		
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
		$this->load->view('frontend/modules/account/buku_alamat',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}
	
	public function listBukuAlamat()
    {	
		$this->data['token'] = $_COOKIE['x-auth'];
		$token = $_COOKIE['x-auth'];
		$api = "aduser/getaddress?addresstype=isshipto";
		$url = api_base_url($api);
		
		$options = ["http" => [
		"method" => "GET",
		"header" => ["token: " . $token,
		"Content-Type: application/json"],
		]];
		
		$context = stream_context_create($options);
		$konten = file_get_contents($url, false, $context);

		$this->data['hasil'] = json_decode($konten, true);

		if($hasil = json_decode($konten, true)){
			$this->load->view('frontend/modules/account/list_buku_alamat',$this->data);
		}else{
			echo"<div class='alert alert-warning produk-kosong' style='border-radius:0px; border:0px; border-left:5px solid #dbd19e;'>List buku alamat masih kosong</div>";
		}
	}

	public function editBukuAlamat()
    {
		$this->data['id'] = $this->uri->segment(3);
		$this->data['active_bukuAlamat'] = "class='active'";
		$this->data['title_web'] = "Myacico.com - Buku Alamat";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/form_shipping_edit',$this->data);
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
	
	public function confirm()
		{
		$this->data['konf'] = $this->uri->segment(3);
		$this->data['active_riwayatStatusPesanan'] = "class='active'";
		$this->data['title_web'] = "Myacico.com - Buku Alamat";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/form_confirm.php',$this->data);
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
		$this->load->view('frontend/modules/account/wishlist',$this->data);
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

    public function formAddBilling()
    {
		$this->data['active_informasiAkun'] = "class='active'";
		$this->data['title_web'] = "Myacico.com - Return Management Authority";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/form_add_billing',$this->data);
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
        public function formTransactionDetail()
    {
                $this->data['detId']=$this->uri->segment(3);
		$this->data['active_informasiAkun'] = "class='active'";
		$this->data['title_web'] = "Myacico.com - Return Management Authority";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/form_transaction_detail',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function logout()
    {
		$data = array('cust_email' => '', 'cust_pass' => '', 'cust_login' => '');
		$this->session->set_userdata($data);
		redirect('customer/signIn');
	}
}
