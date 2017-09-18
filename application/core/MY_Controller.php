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
		$this->load->helper('cookie');

		$lang = get_cookie('lang');
		if($lang=='en'){
			$this->load->language('header','english');
		}else{
			$this->load->language('header','indonesia');
		}

		$this->lang();
        $this->asset();
    }

	public function lang(){

		//Lang
		$this->data['lang_daftar'] = $this->lang->line('daftar');
		$this->data['lang_masuk'] = $this->lang->line('masuk');
		$this->data['lang_ket_daftar_personal'] = $this->lang->line('ket_daftar_personal');
$this->data['lang_ket_daftar_akunBisnis'] = $this->lang->line('ket_daftar_akunBisnis');
//button di daftar
$this->data['lang_btn_personal'] = $this->lang->line('btn_daftar');
$this->data['lang_btn_bisnis'] = $this->lang->line('btn_daftar_bisnis');
$this->data['lang_btn_pemerintah'] = $this->lang->line('btn_daftar_pemerintah');
// akhir dari button daftar

//field di contact
$this->data['lang_field_ContAtas'] = $this->lang->line('field_atas');
$this->data['lang_field_ContNama'] = $this->lang->line('field_name');
$this->data['lang_field_ContEmail'] = $this->lang->line('field_email');
$this->data['lang_field_ContKeperluan'] = $this->lang->line('field_keperluan');
$this->data['lang_field_ContMessage'] = $this->lang->line('field_pesan');
$this->data['lang_btn_Kirim'] = $this->lang->line('btn_kirim');
//akkhir dari field di contact

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
        if($mail->send()){
			return true;
		}else{
			return false;
		}


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

				$this->data['user'] = JWT::decode($_COOKIE['x-auth'], $secret)->UserData;

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
