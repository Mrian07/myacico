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

        $this->data['baseApiUrl'] = "http://192.168.0.102:3030/myacico-service/api";

    }
	
	function sendMail($email_from,$nm_from,$email_to,$subject,$message){
		
		// load library email
        $this->load->library('PHPMailerAutoload');
        
        $mail = new PHPMailer();
		
		/*
		$mail->SMTPDebug = 2; // enables SMTP debug information (for testing)
		// 1 = errors and messages
		// 2 = messages only
		*/
        $mail->SMTPDebug = 0;
        $mail->Debugoutput = 'html';
        
        // set smtp
        $mail->isSMTP();
		
		$mail->SMTPSecure = 'tls';
		$mail->SMTPAuth = true;
		
        $mail->Host = 'sipau2-16.nexcess.net';
        $mail->Port = '587';
        $mail->SMTPAuth = true;
        $mail->Username = 'support@myacico.com';
		$mail->Password = 'TotalShoppingExperiences5';
	
        $mail->WordWrap = 50;  
        // set email content
        $mail->setFrom($email_from, $nm_from);
        $mail->addAddress($email_to);
        $mail->Subject = $subject;
        $mail->Body = $message;
        $mail->send();
	}	

}

class Account_private extends web {

    public function __construct() {
        parent::__construct();
		$this->load->library('jwt');

        $this->auth();

    }

    public function auth(){

		$secret = $this->config->config['jwt_secret'];
		//die(strtr(base64_encode($secret), '+/=', '._-'));

		if(!isset($_COOKIE['x-auth'])) redirect('customer/signIn');

		else {
			try {

				$this->data['user'] = JWT::decode($_COOKIE['x-auth'], $secret);

			} catch (Exception $e) {
				print_r($e);die();

				//redirect('customer/signIn/'.$e);

			}

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