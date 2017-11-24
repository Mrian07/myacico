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
		$this->data['title_web'] = "Myacico.co.id - Dashboard";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/dashboard.php',$this->data);
    $this->load->view('frontend/sidenav',$this->data);
		$this->load->view('frontend/footer',$this->data);

	}

	// public function test()
  //   {	$this->load->helper('cookie');
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

	// 	set_cookie('cookie_name','cookie_value','3600');
  //
	// }
  //
	// public function test2()
  //   {	$this->load->helper('cookie');
	// 	echo get_cookie('cookie_name'); die();
	// 	echo"<pre>"; print_r($this->input->get_cookie($cookie));
	// }
  //
	// public function test3()
  //   {
	// 	delete_cookie('cookie_name');
	// }
  //
  //

	public function informasiAkun()
  {

		$lang = get_cookie('lang');
		$flag = $this->uri->segment(3);
		if($flag=='1'){
			if($lang=='en'){
				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible animated bounceInDown" id="alertSubmit2">
				<span class="glyphicon glyphicon-ok"></span> Add billing success.</div>');
			}else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible animated bounceInDown" id="alertSubmit2">
				<span class="glyphicon glyphicon-ok"></span> Tambah data billing sukses.</div>');
			}
		}elseif($flag=='2'){
			if($lang=='en'){
				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible animated bounceInDown" id="alertSubmit2">
				<span class="glyphicon glyphicon-ok"></span> Update billing success.</div>');
			}else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible animated bounceInDown" id="alertSubmit2">
				<span class="glyphicon glyphicon-ok"></span> Ubah data billing sukses.</div>');
			}
		}

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
		$this->data['title_web'] = "Myacico.co.id - Informasi Akun";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/informasi_akun',$this->data);
		$this->load->view('frontend/footer',$this->data);

	}

	public function berlanggananNewsletter()
    {
		$this->data['active_berlanggananNewsletter'] = "class='active'";
		$this->data['title_web'] = "Myacico.co.id - Informasi Akun";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/berlanggananNewsletter',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}
	public function avatar()
    {
		$this->data['active_avatar'] = "class='active'";
		$this->data['title_web'] = "Myacico.co.id - Informasi Akun";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/avatar',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function bukuAlamat()
  {
		$lang = get_cookie('lang');
		$flag = $this->uri->segment(3);
		if($flag=='1'){
			if($lang=='en'){
				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible animated bounceInDown" id="alertSubmit2">
				<span class="glyphicon glyphicon-ok"></span> Add address book success.</div>');
			}else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible animated bounceInDown" id="alertSubmit2">
				<span class="glyphicon glyphicon-ok"></span> Tambah buku alamat sukses.</div>');
			}
		}elseif($flag=='2'){
			if($lang=='en'){
				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible animated bounceInDown" id="alertSubmit2">
				<span class="glyphicon glyphicon-ok"></span> Update address book success.</div>');
			}else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible animated bounceInDown" id="alertSubmit2">
				<span class="glyphicon glyphicon-ok"></span> Ubah buku alamat sukses.</div>');
			}
		}

		$this->data['active_bukuAlamat'] = "class='active'";
		$this->data['title_web'] = "Myacico.co.id - Buku Alamat";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/buku_alamat',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function listBukuAlamat()
    {
		$this->data['token'] = $_COOKIE['x-auth'];
		$token = $_COOKIE['x-auth'];
		$api = "aduser/getaddress?addresstype";
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
    $idadd=$this->uri->segment(3);
    $token = $_COOKIE['x-auth'];

		$api = "aduser/getaddress/".$idadd;
		$url = api_base_url($api);

		$options = ["http" => [
		"method" => "GET",
		"header" => ["token: " . $token,
		"Content-Type: application/json"],
		]];
		$context = stream_context_create($options);
		$konten = file_get_contents($url, false, $context);
    $this->data['hasil'] = json_decode($konten, true);
		$this->data['active_bukuAlamat'] = "class='active'";
		$this->data['title_web'] = "Myacico.co.id - Buku Alamat";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/form_shipping_edit',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function TambahBukuAlamat()
  {
		$this->data['active_bukuAlamat'] = "class='active'";
		$this->data['title_web'] = "Myacico.co.id - Buku Alamat";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/form_add_buku_alamat',$this->data);
    $this->load->view('frontend/sidenav',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function riwayatStatusPesanan()
  {
		$this->data['active_riwayatStatusPesanan'] = "class='active'";
		$this->data['title_web'] = "Myacico.co.id - Riwayat Status Pasaran";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/riwayatStatusPesanan',$this->data);
                $this->load->view('frontend/sidenav',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function listRiwayatStatusPesanan()
    {
		$this->data['token'] = $_COOKIE['x-auth'];
		$token = $_COOKIE['x-auth'];
		$api = "transaction/list";

		$url = api_base_url($api);

		$options = ["http" => [
		"method" => "GET",
		"header" => ["token: " . $token,
		"Content-Type: application/json"],
		]];


		$context = stream_context_create($options);
		$konten = file_get_contents($url, false, $context);

		$this->data['hasil'] = json_decode($konten, true);
		$hasil = json_decode($konten, true);
                //die(print_r($hasil));
//                $options2 = ["http" => [
//		"method" => "GET",
//		"headers" => ["token: " .$token,
//		"Content-Type: image/png"],
//		]];
              /*
                $idtrans= $hasil[0]['idTransaksi'];
                $api2 = "transaction/file/".$idtrans;
                $url2 = api_base_url($api2);
                $context2 = stream_context_create($options2);
		$konten2 = file_get_contents($url2, false, $context2);
//                echo"<img class='group list-group-image' src='$konten2' alt='...' style:border='0' height='100'>";
                $hasil2 = json_decode($konten2, true);
            */

//                die(print_r($konten2));
//		echo"<pre>"; print_r($konten2); die();

		if($hasil = json_decode($konten, true)){
			$this->load->view('frontend/modules/account/list_riwayat_status_pesanan',$this->data);
		}else{
			echo"<div class='alert alert-warning produk-kosong' style='border-radius:0px; border:0px; border-left:5px solid #dbd19e;'>List riwayat status pesanan masih kosong Silahkan Belanja <a href='https://dev.myacico.co.id/'>Visit Home</a></div>";
		}

	}


	public function confirm()
		{

			$this->data['token'] = $_COOKIE['x-auth'];
			$token = $_COOKIE['x-auth'];
			$api = "transaction/list";
			$url = api_base_url($api);

			$options = ["http" => [
			"method" => "GET",
			"header" => ["token: " . $token,
			"Content-Type: application/json"],
			]];

			$context = stream_context_create($options);
			$konten = file_get_contents($url, false, $context);

			$this->data['hasil'] = json_decode($konten, true);
			$hasil = json_decode($konten, true);

			$this->data['konf'] = $this->uri->segment(3);
			$this->data['active_riwayatStatusPesanan'] = "class='active'";
			$this->data['title_web'] = "Myacico.co.id - Buku Alamat";
			$this->load->view('frontend/header',$this->data);
			$this->load->view('frontend/nav.php',$this->data);
			$this->load->view('frontend/modules/account/form_confirm.php',$this->data);
                        $this->load->view('frontend/sidenav',$this->data);
			$this->load->view('frontend/footer',$this->data);
	}

	public function returnManagementAuthority()
    {
		$this->data['active_returnManagementAuthority'] = "class='active'";
		$this->data['title_web'] = "Myacico.co.id - Return Management Authority";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/riwayatStatusPesanan',$this->data);
		$this->load->view('frontend/footer',$this->data);
                $this->load->view('frontend/sidenav',$this->data);
	}

	public function Wishlist()
    {
		$this->data['active_wishlist'] = "class='active'";
		$this->data['title_web'] = "Myacico.co.id - Wishlist";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/wishlist',$this->data);
		$this->load->view('frontend/footer',$this->data);
                $this->load->view('frontend/sidenav',$this->data);
			// $this->load->view('frontend/footer',$this->data);
	}
        public function review()
    {
            $this->data['token'] = $_COOKIE['x-auth'];
		$token = $_COOKIE['x-auth'];
		$api = "transaction/list";

		$url = api_base_url($api);

		$options = ["http" => [
		"method" => "GET",
		"header" => ["token: " . $token,
		"Content-Type: application/json"],
		]];


		$context = stream_context_create($options);
		$konten = file_get_contents($url, false, $context);

		$this->data['hasil'] = json_decode($konten, true);
		$hasil = json_decode($konten, true);
                $this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
                $this->load->view('frontend/modules/account/form_review',$this->data);
                $this->load->view('frontend/sidenav',$this->data);
		$this->load->view('frontend/footer',$this->data);



			// $this->load->view('frontend/footer',$this->data);
	}

	public function wishListItem()
    {

			$this->data['token'] = $_COOKIE['x-auth'];
			$token = $_COOKIE['x-auth'];
			$api = "product/getwishlist";
			$url = api_base_url($api);

			$options = ["http" => [
			"method" => "GET",
			"header" => ["token: " . $token,
			"Content-Type: application/json"],
			]];

			$context = stream_context_create($options);
			$konten = file_get_contents($url, false, $context);

			$this->data['hasil'] = json_decode($konten, true);
			$hasil = json_decode($konten, true);
                        $this->load->view('frontend/sidenav',$this->data);
		$this->load->view('frontend/modules/account/wishlist_item',$this->data);

			// $this->load->view('frontend/footer',$this->data);
	}

	public function formAccount()
  {
		$this->data['active_informasiAkun'] = "class='active'";
		$this->data['title_web'] = "Myacico.co.id - Return Management Authority";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/form_account',$this->data);
    $this->load->view('frontend/sidenav',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function formBilling()
    {
		$type = $this->typeLogin();
                $idadd=$this->uri->segment(3);
//                die(print_r($idadd));
                $token = $_COOKIE['x-auth'];

		$api = "aduser/getaddress/".$idadd;
		$url = api_base_url($api);

		$options = ["http" => [
		"method" => "GET",
		"header" => ["token: " . $token,
		"Content-Type: application/json"],
		]];
		$context = stream_context_create($options);
		$konten = file_get_contents($url, false, $context);
                $this->data['hasil'] = json_decode($konten, true);


		$this->data['active_informasiAkun'] = "class='active'";
		$this->data['title_web'] = "Myacico.co.id - Return Management Authority";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);

		if($type->role=='B2B'){
			$this->load->view('frontend/modules/account/form_billing_b2b',$this->data);
		}else{
			$this->load->view('frontend/modules/account/form_billing_new',$this->data);
		}
                $this->load->view('frontend/sidenav',$this->data);
		$this->load->view('frontend/footer',$this->data);

	}

  public function formAddBilling()
  {
		$this->data['active_informasiAkun'] = "class='active'";
		$this->data['title_web'] = "Myacico.co.id - Return Management Authority";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/form_add_billing',$this->data);
    $this->load->view('frontend/sidenav',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function formPassword()
    {
		$this->data['active_informasiAkun'] = "class='active'";
		$this->data['title_web'] = "Myacico.co.id - Return Management Authority";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/form_password',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

    public function formTransactionDetail()
    {
			$id=$this->uri->segment(3);
			$this->data['token'] = $_COOKIE['x-auth'];
			$token = $_COOKIE['x-auth'];
			$api = "transaction/list?id=".$id;
			$url = api_base_url($api);

			$options = ["http" => [
			"method" => "GET",
			"header" => ["token: " . $token,
			"Content-Type: application/json"],
			]];

			$context = stream_context_create($options);
			$konten = file_get_contents($url, false, $context);

			$this->data['hasil'] = json_decode($konten, true);

			$this->data['active_riwayatStatusPesanan'] = "class='active'";
			$this->data['title_web'] = "Myacico.co.id - Return Management Authority";
			$this->load->view('frontend/header',$this->data);
			$this->load->view('frontend/nav.php',$this->data);
			$this->load->view('frontend/modules/account/form_transaction_detail',$this->data);
			$this->load->view('frontend/footer',$this->data);
                        $this->load->view('frontend/sidenav',$this->data);
	}

	public function logout()
    {
		$data = array('cust_email' => '', 'cust_pass' => '', 'cust_login' => '');
		$this->session->set_userdata($data);
		redirect('customer/signIn');
	}
}
