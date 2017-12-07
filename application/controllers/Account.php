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
		$this->data['active_avatar'] = "";
	}


	public function index()
    {
             $domain = domain();
		$this->data['active_dashboard'] = "class='active'";
		$this->data['title_web'] = "Dashboard - ".$domain;
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
                $domain = domain();
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
		$this->data['title_web'] = "Informasi Akun - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/informasi_akun',$this->data);
		$this->load->view('frontend/footer',$this->data);

	}

	public function berlanggananNewsletter()
    {
            $domain = domain();
		$this->data['active_berlanggananNewsletter'] = "class='active'";
		$this->data['title_web'] = "Informasi Akun - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/berlanggananNewsletter',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}
	public function avatar()
    {
            $domain = domain();
		$this->data['active_avatar'] = "class='active'";
		$this->data['title_web'] = "Informasi Akun - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/avatar',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function bukuAlamat()
  {
            $domain = domain();
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

		//untuk cek expired token
		$hasil = json_decode($konten, true);
		if(isset($hasil['status'])){
			$this->logout();
		}else{
			$this->data['hasil'] = json_decode($konten, true);
		}

		if($hasil = json_decode($konten, true)){
			$this->data['jmlData'] = '1';
		}else{
			$this->data['jmlData'] = '0';
		}

		$this->data['active_bukuAlamat'] = "class='active'";
		$this->data['title_web'] = "Buku Alamat - ".$domain;
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

		//untuk cek expired token
		$hasil = json_decode($konten, true);
		if(isset($hasil['status'])){
			$this->logout();
		}else{
			$this->data['hasil'] = json_decode($konten, true);
		}

		if($hasil = json_decode($konten, true)){
			$this->load->view('frontend/modules/account/list_buku_alamat',$this->data);
		}else{
			echo"<div class='alert alert-warning produk-kosong' style='border-radius:0px; border:0px; border-left:5px solid #dbd19e;'>List buku alamat masih kosong</div>";
		}
	}

	public function editBukuAlamat()
    {
            $domain = domain();
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
		$this->data['title_web'] = "Buku Alamat - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/form_shipping_edit',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function TambahBukuAlamat()
  {
            $domain = domain();
		$this->data['active_bukuAlamat'] = "class='active'";
		$this->data['title_web'] = "Buku Alamat - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/form_add_buku_alamat',$this->data);
    $this->load->view('frontend/sidenav',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function riwayatStatusPesanan()
  {
    $domain = domain();
		$page=$this->uri->segment(3);
		$startDate=$this->uri->segment(4);
		$endDate=$this->uri->segment(5);

    $token = $_COOKIE['x-auth'];
		$this->data['startDate'] ='';
		$this->data['endDate'] = '';

		if($startDate!='' and $endDate!=''){
			$api2 ="transaction/list?startdate=".$startDate."&enddate=".$endDate."&show=transactioncount";
			$api3 ="transaction/list?itemperpage=5&startdate=".$startDate."&enddate=".$endDate."&page=".$page;
			$this->data['startDate'] = $startDate;
			$this->data['endDate'] = $endDate;
		}elseif($page){
			$api2 ="transaction/list?show=transactioncount";
			$api3 ="transaction/list?page=".$page;
		}else{
			$api2 ="transaction/list?show=transactioncount";
			$api3 = "transaction/list";
		}

    $url2 = api_base_url($api2);
    $url3 = api_base_url($api3);

    $options = ["http" => [
    "method" => "GET",
    "header" => ["token: " . $token,
    "Content-Type: application/json"],
    ]];


    $context = stream_context_create($options);
    $konten2 = file_get_contents($url2, false, $context);
		$jmlData = count(json_decode($konten2));
    $jdata =json_decode($konten2)->transactionCount;



     $batas = '5';
		if(empty($page)){
			$posisi = 0;
			$page =1;
		}else{
			$posisi = ($page-1)*$batas;
		}
		$this->data['page'] = $page;
		$this->data['total_list'] = $jdata;
    $this->data['posisi'] = $posisi;
    $this->data['jpage'] = ceil($jdata/$batas);
    $konten3 = file_get_contents($url3, false, $context);

		$this->data['hasil'] = json_decode($konten3, true);

		$this->data['active_riwayatStatusPesanan'] = "class='active'";
		$this->data['title_web'] = "Riwayat Status Pesanan - ".$domain;
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

              /*  if($page){
			$api = "product/productall/".$id."?itemperpage=8&page=".$page."&ob=".$short;
			$api2 = "product/productall/".$id."?itemperpage=8&page=".$page."&show=productcount";
		}elseif($short){
			$api = "product/productall/".$id."?ob=".$short;
			$api2 = "product/productall/".$id."?itemperpage=8&page=1&show=productcount";
		}else{
			$api = "product/productall/".$id;
			$api2 = "product/productall/".$id."?itemperpage=8&page=1&show=productcount";
		}
		*/
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
                        $domain = domain();
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
			$this->data['title_web'] = "Konfirmasi - ".$domain;
			$this->load->view('frontend/header',$this->data);
			$this->load->view('frontend/nav.php',$this->data);
			$this->load->view('frontend/modules/account/form_confirm.php',$this->data);
                        $this->load->view('frontend/sidenav',$this->data);
			$this->load->view('frontend/footer',$this->data);
	}

	public function returnManagementAuthority()
    {
            $domain = domain();
		$this->data['active_returnManagementAuthority'] = "class='active'";
		$this->data['title_web'] = "Return Management Authority - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/riwayatStatusPesanan',$this->data);
		$this->load->view('frontend/footer',$this->data);
    $this->load->view('frontend/sidenav',$this->data);
	}

	public function Wishlist()
    {
            $domain = domain();
		$this->data['active_wishlist'] = "class='active'";
		$this->data['title_web'] = "Wishlist - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/wishlist',$this->data);
		        $this->load->view('frontend/sidenav',$this->data);
		$this->load->view('frontend/footer',$this->data);

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
            $domain = domain();
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
		$this->data['title_web'] = "Billing - ".$domain;
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
      $domain = domain();
		$this->data['active_informasiAkun'] = "class='active'";
		$this->data['title_web'] = "Billing - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/form_add_billing',$this->data);
    $this->load->view('frontend/sidenav',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function formPassword()
    {
            $domain = domain();
		$this->data['active_informasiAkun'] = "class='active'";
		$this->data['title_web'] = "Akun - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/account/form_password',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

    public function formTransactionDetail()
    {
        $domain = domain();
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
				$this->data['title_web'] = "Transaksi - ".$domain;
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
