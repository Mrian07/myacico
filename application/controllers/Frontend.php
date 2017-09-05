<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {
	
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
		
		/*$data_g = $this->general->load_data("1");
		foreach($data_g as $key => $value)
		{
			$this->data['data_g'][$key] = $value;
		}*/
		$this->data['title_web'] = "Myacico.com - Login Admin";
	}
	
	public function userLogin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
	
		$userOri = "admin";
		//$passOri = "P@ssword2017";
		$passOri = "12345";
		
		if($username==$userOri and $password==$passOri){
			$data = array('user_admin' => $username, 'pass_admin' => $password, 'login_admin' => TRUE);
            $this->session->set_userdata($data);
			redirect('backend/index');
			return TRUE;
		}else{
			return FALSE;
		}
	}
	
	public function index()
    {	
		if($this->input->post('submit'))
		{
			
			if($this->userLogin()==TRUE){
				echo"masuk";
			}else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible animated bounceInDown" id="alertSubmit">
				<span class="glyphicon glyphicon-remove"></span> <strong>Gagal!</strong> Kombinasi username dan password salah.</div>');
				redirect('frontend/index');
			}
		
		}else{
	
			$this->load->view('frontend/header');
			$this->load->view('frontend/slide_show.php');
			$this->load->view('frontend/form_login');
			$this->load->view('frontend/footer');
		
		}
	}
}
