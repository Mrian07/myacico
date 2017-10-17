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
		$this->load->library('jwt');
		
        $this->logedin=false;
        $this->auth();

		$lang = get_cookie('lang');
		$this->data['lang'] = $lang;
		if($lang=='en'){
			$this->load->language('header','english');
		}else{
			$this->load->language('header','indonesia');
		}

		$this->lang();
        $this->asset();
    }

    public function auth(){
	
		$secret = $this->config->config['jwt_secret'];
		//die(strtr(base64_encode($secret), '+/=', '._-'));

		if(isset($_COOKIE['x-auth']))
		{
			try {
				$this->data['user'] = JWT::decode($_COOKIE['x-auth'], $secret)->UserData;
		        $this->logedin=true;
			} catch (Exception $e) {
				//redirect('customer/signIn/'.$e);
			}

		}

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

		// signIn
		$this->data['lang_btn_SignIn'] = $this->lang->line('btn_kirim1');
		$this->data['lang_Field_lpPassword'] = $this->lang->line('field_lp_password');
		$this->data['lang_Field_ClickMe'] = $this->lang->line('field_ClickMe');
		//end of signIn

		//personal
		$this->data['lang_field_persoanAatas'] = $this->lang->line('field_Create');
		$this->data['lang_field_selamatDatang'] = $this->lang->line('field_selamat_datang');
		$this->data['lang_pesan'] = $this->lang->line('field_pesan2');
		$this->data['btn_pesan_personal'] = $this->lang->line('btn_kirim_personal');
		$this->data['field_sudahDaftar'] = $this->lang->line('field_daftar');
		//end of personal

		//bussines
		$this->data['lang_welcome'] = $this->lang->line('field_DaftarBisns');
		$this->data['lang_namaDepan'] = $this->lang->line('field_namadepan');
		$this->data['lang_namaBelakang1'] = $this->lang->line('field_namabelakang');
		$this->data['lang_CompanyInfo'] = $this->lang->line('field_CompanyInfo');
		$this->data['lang_comapnytype'] = $this->lang->line('field_Companytipe');
		$this->data['lang_addres'] = $this->lang->line('field_addres');
		$this->data['lang_Country'] = $this->lang->line('field_Contry');
		$this->data['lang_Provience'] = $this->lang->line('field_Provinsi');
		$this->data['lang_kota'] = $this->lang->line('field_city');
		$this->data['lang_Keca'] = $this->lang->line('field_kec');
		$this->data['lang_PostCode'] = $this->lang->line('field_PostCode');
		$this->data['lang_Passwpord'] = $this->lang->line('field_Passeword');
		$this->data['lang_Passwpord2'] = $this->lang->line('field_Passeword2');
		$this->data['lang_BtnSend'] = $this->lang->line('btn_login');
		//end of bussines

		$this->data['title_web'] = "Myacico.com - Login Admin";

	}

    public function asset(){

        //$this->data['baseApiUrl'] = "http://api.myacico.net:8080/myacico-service/api";
		$this->data['baseApiUrl'] = "http://api.myacico.co.id/myacico-service";
		$this->data['baseApiUrl2'] = "http://acc.myacico.co.id/myacico-account/account";
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

class Web_private extends web {

    public function __construct() {
        parent::__construct();

		if(!$this->logedin) redirect('customer/signIn?callback='.current_url());
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
