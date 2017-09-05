<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
}

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
	
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */