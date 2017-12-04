<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends Web {

	public function __construct()
    {
		parent::__construct();
    $this->load->helper('form');
    $this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('app');

		$this->atribut();
	}

	public function atribut(){


	}

	public function cart()
	{
            $domain = domain();
		$this->data['title_web'] = "Create Account Business - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/customer/cart/cart.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function successCreate()
    {
            $domain = domain();
		$this->data['email'] = $this->uri->segment(3);
		$this->data['title_web'] = "Create Account Personal - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/customer/create/success_create.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function create()
    {
            $domain = domain();
		$this->data['title_web'] = "Create Account - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/customer/create/create.php',$this->data);
		$this->load->view('frontend/footer',$this->data);

	}

	public function personal()
    {$domain = domain();
		$this->data['title_web'] =  "Create Account Personal - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/customer/create/personal.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function business()
    {
            $domain = domain();
		$this->data['title_web'] = "Create Account Business - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/customer/create/business.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function contact()
	{	$this->load->helper(array('captcha','url'));
                 $domain = domain();
		$random_number = substr(number_format(time() * rand(),0,'',''),0,6);
		$vals = array(
			'word' => $random_number,
			'img_path'	 => './captcha/',
			'img_url'	 => base_url().'captcha/',
			'img_width'	 => '200',
			'img_height' => 52,
			'border' => 0,
			'expiration' => 7200
		);

		// create captcha image
		$cap = create_captcha($vals);

		// store image html code in a variable
		$this->data['image'] = $cap['image'];

		// store the captcha word in a session
		$this->session->set_userdata('mycaptcha', $cap['word']);

		$this->data['title_web'] = " Create Account Business - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/customer/contact/contact.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

      public function afterSales()
	{
                 $domain = domain();
		$this->data['title_web'] = "After Sales - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/customer/contact/after_sales.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function messageSent()
	{
            $domain = domain();
		$this->data['title_web'] = "Massage - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/customer/contact/success_contact.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}
        public function AfterSalesSent()
	{
            $domain = domain();
		$this->data['title_web'] = "Massage - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/customer/contact/after_sales_sukses.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function government()
    {
            $domain = domain();
		$this->data['title_web'] = "Create Account Government - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/customer/create/government.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function lostPassword()
	{
            $domain = domain();
		$this->data['title_web'] = "Password - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/customer/lost_password/lost_password.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function resetPassword()
	{
             $domain = domain();
		$this->data['title_web'] = "Password - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/customer/lost_password/reset_password.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function registrationCompleted()
	{
		$key = $_GET['key'];
		$api = "account/accountactivation";
		$url = api_base_url2($api);

		$data= array(
		  'key' => $key,
		);

		$options = ["http" => [
			"method" => "POST",
			"content" => json_encode( $data ),
			"header"=>  "Content-Type: application/json\r\n" .
                "Accept: application/json\r\n"
		]];

		$context = stream_context_create($options);
		$konten = file_get_contents($url, false, $context);
		$this->data['hasil'] = json_decode($konten, true);
// echo"<pre>"; print_r($hasil['status']); die();
                $domain = domain();
		$this->data['title_web'] = "Activation - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/customer/create/registration_completed.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function signIn()
    {
				$catId = $this->uri->segment(3);

				//    die(); dpt nihid itemnya
				//            if($catId){
				//                echo $catId;
				//            }
				$domain = domain();
				set_cookie('shipping_address_id','',time() + (86400 * 30));

				echo "<script> console.log('$catId');</script>";
				$this->data['title_web'] = "Login - ".$domain;
				$this->load->view('frontend/header',$this->data);
				$this->load->view('frontend/nav.php',$this->data);
				$this->load->view('frontend/modules/customer/sign_in/sign_in.php',$this->data);
				$this->load->view('frontend/sidenav',$this->data);
				$this->load->view('frontend/footer',$this->data);

	}

	public function SuccessSignIn()
    {
		$nama = $this->uri->segment(3);
		//$password = $this->uri->segment(4);
		//$nama = $this->uri->segment(4);

/*
		$this->input->post('email');
		$this->input->post('password');
		$this->input->post('nama');
	*/
		$data = array('cust_name' => $nama, 'cust_login' => TRUE);
		$this->session->set_userdata($data);
		redirect('account');
	}

	public function logout()
    {
            $domain = domain();
		$this->data['title_web'] = "Login - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/customer/logout/logout.php',$this->data);
                $this->load->view('frontend/sidenav',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function confirmation()
	{
            $domain = domain();
		$this->data['title_web'] = "Payment - ".$domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/customer/confirmation/confirmation.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}
}
