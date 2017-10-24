<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends Web {

	public function __construct()
    {
		parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
		$this->load->library('session');
	//	$this->load->model('Login_model', 'login', TRUE);


		$this->atribut();
	}

	public function atribut(){


	}

	public function cart()
	{
		$this->data['title_web'] = "Myacico.com - Create Account Business";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/customer/cart/cart.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function successCreate()
    {
		$this->data['email'] = $this->uri->segment(3);
		$this->data['title_web'] = "Myacico.com - Create Account Personal";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/customer/create/success_create.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function create()
    {
		$this->data['title_web'] = "Myacico.com - Create Account";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/customer/create/create.php',$this->data);
		$this->load->view('frontend/footer',$this->data);

	}

	public function personal()
    {
		$this->data['title_web'] = "Myacico.com - Create Account Personal";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/customer/create/personal.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function business()
    {
		$this->data['title_web'] = "Myacico.com - Create Account Business";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/customer/create/business.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function contact()
	{	$this->load->helper(array('captcha','url'));

		$random_number = substr(number_format(time() * rand(),0,'',''),0,6);
		$vals = array(
			'word' => $random_number,
			'img_path'	 => './captcha/',
			'img_url'	 => base_url().'captcha/',
			'img_width'	 => '200',
			'img_height' => 32,
			'border' => 0,
			'expiration' => 7200
		);

		// create captcha image
		$cap = create_captcha($vals);

		// store image html code in a variable
		$this->data['image'] = $cap['image'];

		// store the captcha word in a session
		$this->session->set_userdata('mycaptcha', $cap['word']);

		$this->data['title_web'] = "Myacico.com - Create Account Business";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/customer/contact/contact.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function prosesContact()
	{	$nm_from = $this->input->post('nama');
		$email_from = $this->input->post('email');
		$subject = $this->input->post('keperluan');
		$message = $this->input->post('pesan');
		$secutity_code = $this->input->post('secutity_code');

		$email_to='lalang@myacico.com';

		if((strtolower($secutity_code) == strtolower($this->session->userdata('mycaptcha')))){

			if($this->sendMail($email_from,$nm_from,$email_to,$subject,$message)==true)
			{
				echo "terkirim";
			}else{
				echo "gagal";
			}
		}else{
			echo "gagal_captcha";
		}
	}

	public function messageSent()
	{
		$this->data['title_web'] = "Myacico.com - Create Account Business";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/customer/contact/success_contact.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function government()
    {
		$this->data['title_web'] = "Myacico.com - Create Account Government";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/customer/create/government.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function lostPassword()
	{
		$this->data['title_web'] = "Myacico.com - Lupa Password";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/customer/lost_password/lost_password.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function resetPassword()
	{
		$this->data['title_web'] = "Myacico.com - Reset Password";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/customer/lost_password/reset_password.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function signIn()
    {         
            $catId = $this->uri->segment(3);
          
//    die();
            if($catId){
                echo $catId;
            }
            echo "<script> console.log('$catId');</script>";
		$this->data['title_web'] = "Myacico.com - Login";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/customer/sign_in/sign_in.php',$this->data);
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
		$this->data['title_web'] = "Myacico.com - Login";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/customer/logout/logout.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function confirmation()
	{
		$this->data['title_web'] = "Myacico.com - Konfirmasi Pembayaran";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/customer/confirmation/confirmation.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}
}
