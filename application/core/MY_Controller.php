<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
}

class Web extends MY_Controller {

    public function __construct() {
        parent::__construct();
		$this->load->language('header','indonesia');
		
		$this->lang();
        $this->asset();
    }
	
	public function lang(){
		
		//Lang
		$this->data['lang_daftar'] = $this->lang->line('daftar');
		$this->data['lang_masuk'] = $this->lang->line('masuk');
		
		$this->data['title_web'] = "Myacico.com - Login Admin";
		
	}

    public function asset(){

        $this->data['baseApiUrl'] = "http://192.168.1.103:8080/myacico-service/api";

    }

}

class Account_private extends web {

    public function __construct() {
        parent::__construct();
		$this->load->library('jwt');

        //$this->auth();

    }

    public function auth(){

		$secret = $this->config->config['jwt_secret'];

		if(!isset($_COOKIE['x-auth'])) redirect('customer/signIn');

		try {

			$this->data['user'] = JWT::decode($_COOKIE['x-auth'], $secret);

		} catch (Exception $e) {

			redirect('customer/signIn');

		}
    }
	
}
/*
class LogInAdmin extends MY_Controller {

    public function __construct() {
        parent::__construct();
		$this->load->model('Users_model', 'users');
		
		if($this->users->cekLogin($this->session->userdata('user_admin'),$this->session->userdata('pass_admin'))==False){
			redirect('frontend/index');
		}elseif ($this->session->userdata('user_admin') == "" and $this->session->userdata('pass_admin')=="")
        {
			redirect('frontend/index');

        }

    }
	
}*/

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */