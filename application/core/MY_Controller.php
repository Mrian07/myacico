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
          $this->load->language('home','english');
          $this->load->language('footer','english');
          $this->load->language('dashboard','english');
          $this->load->language('general','english');
          $this->load->language('body','english');
        }else{
          $this->load->language('header','indonesia');
          $this->load->language('home','indonesia');
          $this->load->language('footer','indonesia');
          $this->load->language('dashboard','indonesia');
          $this->load->language('general','indonesia');
          $this->load->language('body','english');
        }

        $this->lang();
        $this->asset();
        $this->categorySearch();
        $this->navigation();
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

	public function typeLogin(){
		$secret = $this->config->config['jwt_secret'];
		return JWT::decode($_COOKIE['x-auth'], $secret)->UserData;
	}

	public function lang(){
    //buttons
    $this->data['lang_btn_signin'] = $this->lang->line('btn_signin');

    $this->data['lang_btn_update'] = $this->lang->line('btn_update');


    //label
    $this->data['lang_lab_name'] = $this->lang->line('label_name');
    $this->data['lang_lab_rep_pass'] = $this->lang->line('label_rep_pass');


		//Lang
		$this->data['lang_daftar'] = $this->lang->line('daftar');
		$this->data['lang_masuk'] = $this->lang->line('masuk');
		$this->data['lang_ket_daftar_personal'] = $this->lang->line('ket_daftar_personal');
		$this->data['lang_ket_daftar_akunBisnis'] = $this->lang->line('ket_daftar_akunBisnis');
                $this->data['lang_reg_text'] = $this->lang->line('lang_new_reg');
                $this->data['lang_ket_daftar_gov'] = $this->lang->line('ket_daftar_akunGov');
		//button di daftar
		$this->data['lang_btn_personal'] = $this->lang->line('btn_daftar');
		$this->data['lang_btn_bisnis'] = $this->lang->line('btn_daftar_bisnis');
		$this->data['lang_btn_pemerintah'] = $this->lang->line('btn_daftar_pemerintah');

                $this->data['lang_daftar_text'] = $this->lang->line('das_regis');
		// akhir dari button daftar

		//field di contact
		$this->data['lang_field_ContAtas'] = $this->lang->line('field_atas');
		$this->data['lang_field_ContNama'] = $this->lang->line('field_name');
		$this->data['lang_field_ContEmail'] = $this->lang->line('field_email');
		$this->data['lang_field_ContKeperluan'] = $this->lang->line('field_keperluan');
		$this->data['lang_field_ContMessage'] = $this->lang->line('field_pesan');
		$this->data['lang_btn_Kirim'] = $this->lang->line('btn_kirim');
		//akkhir dari field di contact

    //dashboard
    $this->data['lang_dar'] = $this->lang->line('das_welcome');
    $this->data['lang_acc'] = $this->lang->line('das_acc');
    $this->data['lang_info'] = $this->lang->line('das_info');
    $this->data['lang_change'] = $this->lang->line('das_change');
    $this->data['lang_pay'] = $this->lang->line('das_change');
    $this->data['lang_you'] = $this->lang->line('das_you');
    $this->data['lang_news'] = $this->lang->line('das_news');
    $this->data['lang_add'] = $this->lang->line('das_addres');
    $this->data['lang_confirm'] = $this->lang->line('das_pay');
     $this->data['lang_history'] = $this->lang->line('das_history');
    //akhhir dari dashboard

    //informasi AKUN
       $this->data['lang_datkun'] = $this->lang->line('inf_datakun');
          $this->data['lang_gant'] = $this->lang->line('inf_gant');
            $this->data['lang_fyou'] = $this->lang->line('inf_you');
              $this->data['lang_bil'] = $this->lang->line('inf_bil');
                $this->data['lang_bils'] = $this->lang->line('inf_bils');
                      $this->data['lang_tamb'] = $this->lang->line('btn_tambah');


    //akhir dari informasi

		// signIn
    $this->data['lang_info_login'] = $this->lang->line('info_login');
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

    //headers
    $this->data['lang_promo1'] = $this->lang->line('lang_promo');
    $this->data['lang_promo2'] = $this->lang->line('field_fbo');
    $this->data['lang_aa'] = $this->lang->line('lang_wel');
    $this->data['lang_produck'] = $this->lang->line('lang_prod');
    $this->data['lang_sign'] = $this->lang->line('lang_signUp');

    //end of headers

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

    //s: footer
    $this->data['lang_f_moto'] = $this->lang->line('f_moto');
    $this->data['lang_f_guarantee1'] = $this->lang->line('f_guarantee1');
    $this->data['lang_f_guarantee2'] = $this->lang->line('f_guarantee2');
    $this->data['lang_f_guarantee3'] = $this->lang->line('f_guarantee3');
    $this->data['lang_f_guarantee4'] = $this->lang->line('f_guarantee4');
    $this->data['lang_f_guarantee5'] = $this->lang->line('f_guarantee5');
    $this->data['lang_f_info'] = $this->lang->line('f_info');
    $this->data['lang_ttangkami'] = $this->lang->line('f_ttangKami');
    $this->data['lang_Terms'] = $this->lang->line('f_syarat');
    $this->data['lang_karier'] = $this->lang->line('f_karier');
    $this->data['lang_kebj'] = $this->lang->line('f_kebij');
    $this->data['lang_hakCip'] = $this->lang->line('f_hakCip');
    $this->data['lang_carabeli'] = $this->lang->line('f_carabeli');
    $this->data['lang_pengemba'] = $this->lang->line('f_pengemba');
    $this->data['lang_guara'] = $this->lang->line('f_guara');
    $this->data['lang_orde'] = $this->lang->line('f_order');
    $this->data['lang_help'] = $this->lang->line('f_help');
    $this->data['lang_folow'] = $this->lang->line('f_folow');
    $this->data['lang_belr'] = $this->lang->line('f_berla');
    $this->data['lang_pay'] = $this->lang->line('f_pay');
    $this->data['lang_cour'] = $this->lang->line('f_courier');
    $this->data['lang_dunlud'] = $this->lang->line('f_dunlud');
    $this->data['lang_sea'] = $this->lang->line('f_sea');
    $this->data['lang_sel'] = $this->lang->line('F_SEL');
    $this->data['lang_house'] = $this->lang->line('f_house');
    $this->data['lang_komp'] = $this->lang->line('f_com');
    $this->data['lang_gad'] = $this->lang->line('f_gad');
    $this->data['lang_hob'] = $this->lang->line('f_hob');

    $this->data['lang_conta'] = $this->lang->line('f_contact');

    $this->data['lang_footer_info'] = $this->lang->line('footer_info');

    $this->data['lang_all_src'] = $this->lang->line('field_all_src');
    //e: footer
		$this->data['title_web'] = "Myacico.com - Login Admin";

	}

    public function navigation(){

      $url = "https://api.myacico.co.id/myacico-service/category/list";
      // $url = "http://192.168.0.109:8080/myacico-service/category/list";
  		$konten = file_get_contents($url, false);
  		$hasilNav = json_decode($konten, true);
      $this->data['hasilNav'] = $hasilNav;

    // echo"<pre>"; print_r($hasilNav); die();
    }

    public function asset(){


		$this->data['baseApiUrl'] = "https://api.myacico.co.id/myacico-service";
		$this->data['baseApiUrl2'] = "https://acc.myacico.co.id/myacico-account/account";

    // $this->data['baseApiUrl'] = "http://192.168.0.109:8080/myacico-service";
		// $this->data['baseApiUrl2'] = "https://acc.myacico.co.id/myacico-account/account";

    }

    public function categorySearch(){
  		$url = "https://api.myacico.co.id/myacico-service/category";
      // $url = "http://192.168.0.109:8080/myacico-service/category";
  		$konten = file_get_contents($url);
  		$this->data['catsearch'] = json_decode($konten, true);
      $catsearch = json_decode($konten, true);
      if($catsearch==''){
        redirect('maintenance');
      }

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

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */
