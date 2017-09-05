<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model {

    //public $db_tabel = 'user';
	
	public $userOri = "admin";
	public $passOri = "12345";
		
	public function login($username,$password)
    {
		if($username==$this->userOri and $password==$this->passOri){
			$data = array('user_admin' => $username, 'pass_admin' => $password, 'login_admin' => TRUE);
            $this->session->set_userdata($data);
			redirect('backend/index');
			return TRUE;
		}else{
			return FALSE;
		}
	}	
	
	public function cekLogin($username,$password)
    {
		if($username==$this->userOri and $password==$this->passOri){
			return TRUE;
		}else{
			return FALSE;
		}
	
	}


}
/* 	
Author: Lalang Gumirang 
*/