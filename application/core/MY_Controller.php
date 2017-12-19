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
        $this->load->helper('app');

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
          $this->load->language('checkout','english');
          $this->load->language('another','english');
        }else{
          $this->load->language('header','indonesia');
          $this->load->language('home','indonesia');
          $this->load->language('footer','indonesia');
          $this->load->language('dashboard','indonesia');
          $this->load->language('general','indonesia');
          $this->load->language('body','indonesia');
           $this->load->language('checkout','indonesia');
           $this->load->language('another','indonesia');
        }
        $this->maintan();
        $this->lang();
        $this->asset();
        $this->categorySearch();
        $this->navigation();
        $this->avatarCust();

        $this->clearIdCat();
        $this->pushCartToToken();
    }

    public function clearIdCat(){
      $data = array('id_main_src' => '');
  		$this->session->set_userdata($data);
    }

    public function pushCartToToken(){

      if(isset($_COOKIE['x-auth']))
      {

        $jmlCart = count($this->cart->contents());
        if($jmlCart){
          $token = $_COOKIE['x-auth'];
          $api = "order/cart/additem";
          $url = api_base_url($api);

        //  echo $url; die();
          $loop = 1;
          foreach ($this->cart->contents() as $items){ ?>
          <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
          <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
          <script type="text/javascript">
          var m_product_id = '<?php echo $items['id']; ?>';
          var qty = '<?php echo $items['qty']; ?>';
          var pricelist = '<?php echo $items['price']; ?>';
          var weight = '<?php echo $items['weight']; ?>';
          var jmlArr = '<?php echo $jmlCart; ?>';
          var jmlLoop = '<?php echo $loop; ?>';
        //  var apiurl = api_base_url +'/order/cart/additem';
          var apiurl = '<?php echo $url; ?>';
          $.ajax({
          type: 'POST',
          contentType: 'application/json',
          url: apiurl,
          dataType: 'json',
          data: JSON.stringify({
            "productId":m_product_id,
            "qty":qty,
            "price":pricelist,
            "weightPerItem":weight,
          }),
          headers:{"token":"<?php echo $token; ?>"},
          success:function(html){
            // console.log(html);
             if(jmlLoop==jmlArr){
               location.reload();
             }

            }
          });
          </script>

        <?php $loop++;
          }

           $this->cart->destroy();
           die();
        }


      }else{

      }

    }

    public function avatarCust(){
      $token3 = null;
  		$adaToken3 =0;

  		if(isset($_COOKIE['x-auth'])){
  		    $token3 = $_COOKIE['x-auth'];
  		    $adaToken3 =1;
  		}

      $api3 = "aduser/avatar/file?key=".$token3;

      $url3 = api_base_url($api3);

      $options3 = ["http" => [
  		      "method" => "GET",

  		]];
      $context3 = stream_context_create($options3);

  		$konten3 = file_get_contents($url3, false, $context3);
      // $this->data['myavatar'] = "halo nih";
      $this->data['myavatar'] = $url3;
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
    $this->data['lang_btn_delete'] = $this->lang->line('btn_delete');
    $this->data['lang_btn_update'] = $this->lang->line('btn_update');
    $this->data['lang_btn_more'] = $this->lang->line('btn_more');

    //label
    $this->data['lang_lab_name'] = $this->lang->line('label_name');
    $this->data['lang_lab_rep_pass'] = $this->lang->line('label_rep_pass');
//    ubah password akun
    $this->data['lang_password_tittle'] = $this->lang->line('password_tittle');
    $this->data['lang_password_now'] = $this->lang->line('password_now');
    $this->data['lang_msg_pswd1'] = $this->lang->line('msg_pswd1');
    $this->data['lang_msg_pswd2'] = $this->lang->line('msg_pswd2');

//    Forgot Password
    $this->data['lang_password_text'] = $this->lang->line('lost_password_text');
    $this->data['lang_password_tittle'] = $this->lang->line('lost_password_tittle');
    $this->data['lang_password_button'] = $this->lang->line('lost_password_button');
    $this->data['lang_password_msg1'] = $this->lang->line('lost_password_msg1');
    $this->data['lang_password_msg2'] = $this->lang->line('lost_password_msg2');
    $this->data['lang_password_msg3'] = $this->lang->line('lost_password_msg3');
    $this->data['lang_reset_password_msg'] = $this->lang->line('reset_password');

     $this->data['lang_reset_password1'] = $this->lang->line('reset_password_tittle');
    $this->data['lang_reset_password_txt'] = $this->lang->line('reset_password_text');
    $this->data['lang_reset_password_form1'] = $this->lang->line('reset_password_form1');
    $this->data['lang_reset_password_form2'] = $this->lang->line('reset_password_form2');
    $this->data['lang_reset_password_msg1'] = $this->lang->line('reset_password_msg1');
    $this->data['lang_reset_password_msg2'] = $this->lang->line('reset_password_msg2');
    $this->data['lang_reset_pswd_info'] = $this->lang->line('reset_pswd_info');
    $this->data['lang_reset_pswd_info2'] = $this->lang->line('reset_pswd_info2');
    $this->data['lang_reset_pswd_info3'] = $this->lang->line('reset_pswd_info3');

    //Lang
		$this->data['lang_daftar'] = $this->lang->line('daftar');
		$this->data['lang_masuk'] = $this->lang->line('masuk');
		$this->data['lang_ket_daftar_personal'] = $this->lang->line('ket_daftar_personal');
		$this->data['lang_ket_daftar_akunBisnis'] = $this->lang->line('ket_daftar_akunBisnis');
    $this->data['lang_reg_text'] = $this->lang->line('lang_new_reg');
    $this->data['lang_ket_daftar_gov'] = $this->lang->line('ket_daftar_akunGov');
    $this->data['lang_msg_login1'] = $this->lang->line('msg_login1');
    $this->data['lang_msg_login2'] = $this->lang->line('msg_login2');
    $this->data['lang_msg_login3'] = $this->lang->line('msg_login3');
    $this->data['lang_msg_login4'] = $this->lang->line('msg_login4');
    $this->data['lang_msg_regis'] = $this->lang->line('msg_regis');
    $this->data['lang_msg_regis2'] = $this->lang->line('msg_regis2');
// cara belanja
    $this->data['lang_how_buy_tittle'] = $this->lang->line('how_buy_tittle');
    $this->data['lang_how_buy_tittle2'] = $this->lang->line('how_buy_tittle2');
    $this->data['lang_how_buy_tittle3'] = $this->lang->line('how_buy_tittle3');
    $this->data['lang_how_buy_tittle4'] = $this->lang->line('how_buy_tittle4');
    $this->data['lang_how_buy_tittle5'] = $this->lang->line('how_buy_tittle5');
    $this->data['lang_how_buy1'] = $this->lang->line('how_buy1');
    $this->data['lang_how_buy2'] = $this->lang->line('how_buy2');
    $this->data['lang_how_buy3'] = $this->lang->line('how_buy3');
    $this->data['lang_how_buy4'] = $this->lang->line('how_buy4');
    $this->data['lang_how_buy5'] = $this->lang->line('how_buy5');
    $this->data['lang_how_buy1_1'] = $this->lang->line('how_buy1_1');

		//button di daftar
		$this->data['lang_btn_personal'] = $this->lang->line('btn_daftar');
		$this->data['lang_btn_bisnis'] = $this->lang->line('btn_daftar_bisnis');
		$this->data['lang_btn_pemerintah'] = $this->lang->line('btn_daftar_pemerintah');

    $this->data['lang_daftar_text'] = $this->lang->line('das_regis');
		// akhir dari button daftar

    //checkout field_atas

    $this->data['lang_tamb3'] = $this->lang->line('lang_tamb123');
    $this->data['lang_another'] = $this->lang->line('Field_Another');
    $this->data['lang_coursss'] = $this->lang->line('lang_courier');
    $this->data['lang_paket'] = $this->lang->line('field_paket');
    $this->data['lang_biaya'] = $this->lang->line('field_biaya');
    $this->data['lang_ongk'] = $this->lang->line('field_ongk');
    $this->data['lang_alamatTr'] = $this->lang->line('field_alamatTu');
    $this->data['lang_cata'] = $this->lang->line('field_catatan');
    $this->data['lang_byr1'] = $this->lang->line('field_byr1');
    $this->data['lang_byr2'] = $this->lang->line('field_byr2');


    //akhir checkout

		//field di contact
		$this->data['lang_field_ContAtas'] = $this->lang->line('field_atas');
		$this->data['lang_field_ContNama'] = $this->lang->line('field_name');
		$this->data['lang_field_ContEmail'] = $this->lang->line('field_email');
		$this->data['lang_field_ContKeperluan'] = $this->lang->line('field_keperluan');
		$this->data['lang_field_ContMessage'] = $this->lang->line('field_pesan');
		$this->data['lang_btn_Kirim'] = $this->lang->line('btn_kirim');
		//akkhir dari field di contact

    //lang di summaryDetail
    $this->data['lang_ringkasa'] = $this->lang->line('field_ringkasan');
    $this->data['lang_hargaDi'] = $this->lang->line('field_harga');
    $this->data['lang_catatan'] = $this->lang->line('field_catatan');
    $this->data['lang_alamatTujuan'] = $this->lang->line('field_alamatTujuan');
    $this->data['lang_asuransi'] = $this->lang->line('field_asuransi');
    $this->data['lang_ttaol'] = $this->lang->line('field_total');
    $this->data['lang_asuransi'] = $this->lang->line('field_asuransi');
    $this->data['lang_tagihan'] = $this->lang->line('field_totalTagihan');
    $this->data['lang_totalShipping'] = $this->lang->line('field_totalShippingGfee');
    $this->data['lang_mulai'] = $this->lang->line('field_mulaitest');
    //akhir dari summary

    //lang di PaymentCheckout
    $this->data['lang_thx'] = $this->lang->line('field_thx');
    $this->data['lang_onkas'] = $this->lang->line('field_ongkos');

    //akhirdari lang paymentcheckout

    //dashboard
    $this->data['lang_dar'] = $this->lang->line('das_welcome');
    $this->data['lang_acc'] = $this->lang->line('das_acc');
    $this->data['lang_info'] = $this->lang->line('das_info');
    $this->data['lang_change'] = $this->lang->line('das_change');
    $this->data['lang_pay'] = $this->lang->line('das_change');
    $this->data['lang_you'] = $this->lang->line('das_you');
    $this->data['lang_news'] = $this->lang->line('das_news');
    $this->data['lang_news2'] = $this->lang->line('das_news2');
    $this->data['lang_add'] = $this->lang->line('das_addres');
    $this->data['lang_confirm'] = $this->lang->line('das_pay');
    $this->data['lang_history'] = $this->lang->line('das_history');
    //akhhir dari dashboard

    //language di headers
    $this->data['lang_tentangkami'] = $this->lang->line('lang_pages_aboutUs');
    $this->data['lang_isinya'] = $this->lang->line('lang_isiaboutUS');
    $this->data['lang_hist'] = $this->lang->line('lang_pages_history');
    $this->data['lang_page'] = $this->lang->line('lang_pages_acico');
    $this->data['lang_pages_vis'] = $this->lang->line('lang_pages_vis');
    $this->data['lang_vis'] = $this->lang->line('lang_pages_vis');
    $this->data['lang_mis'] = $this->lang->line('lang_pages_miss');
    $this->data['lang_isi_vis'] = $this->lang->line('lang_pagesisi_vis');
    $this->data['lang_isi_mis'] = $this->lang->line('lang_pagesisi_mis');
    $this->data['lang_isi_oru'] = $this->lang->line('lang_pages_oru');
    $this->data['lang_isi_peng'] = $this->lang->line('lang_pages_peng');
    $this->data['lang_isi_al'] = $this->lang->line('lang_pages_alw');
    $this->data['lang_isi_harg'] = $this->lang->line('lang_pages_ch');


    //akhir langauge di header

    //informasi AKUN

    $this->data['lang_datkun'] = $this->lang->line('inf_datakun');
    $this->data['lang_inf_name'] = $this->lang->line('inf_name');
    $this->data['lang_gant'] = $this->lang->line('inf_gant');
    $this->data['lang_fyou'] = $this->lang->line('inf_you');
    $this->data['lang_bil'] = $this->lang->line('inf_bil');
    $this->data['lang_bils'] = $this->lang->line('inf_bils');
    $this->data['lang_info_akun'] = $this->lang->line('field_info_akun');


    //akhir dari informasi

    //label label yang ada di privacy police
    $this->data['lang_pri'] = $this->lang->line('label_privacy');
    $this->data['lang_isiPri1'] = $this->lang->line('label_isi_pri1');
    $this->data['lang_isiPri2'] = $this->lang->line('label_isi_pri2');
    $this->data['lang_isiPri3'] = $this->lang->line('label_isi_pri3');
    $this->data['lang_isiPri4'] = $this->lang->line('label_isi_pri4');
    $this->data['lang_isiPri5'] = $this->lang->line('label_isi_pri5');
    $this->data['lang_isiPri6'] = $this->lang->line('label_isi_pri6');
    $this->data['lang_isiPri7'] = $this->lang->line('label_isi_pri7');
    $this->data['lang_isiPri8'] = $this->lang->line('label_isi_pri8');
    $this->data['lang_isiPri9'] = $this->lang->line('label_isi_pri9');

    //akhir dari label yang ada di privacy police

    //buku Alamat
    $this->data['lang_addDres'] = $this->lang->line('add_info');
    $this->data['lang_dibwh'] = $this->lang->line('add_dibawah');
    $this->data['lang_Pen'] = $this->lang->line('add_rec');
    $this->data['lang_alam'] = $this->lang->line('add_alamat');
    $this->data['lang_pho'] = $this->lang->line('add_pho');

    //tambah buku Alamat
    $this->data['field_back'] = $this->lang->line('field_kembali');
    $this->data['field_lengkap'] = $this->lang->line('field_sila');
    $this->data['field_name'] = $this->lang->line('field_name');
    $this->data['field_atasnama'] = $this->lang->line('field_byname');
    $this->data['field_save'] = $this->lang->line('field_save');
    $this->data['field_alamatLain'] = $this->lang->line('field_alamat');
    $this->data['field_kel'] = $this->lang->line('field_kel');
    $this->data['field_telpon'] = $this->lang->line('field_telp');
    // $this->data['lang_add_book'] = $this->lang->line('add_book');
    $this->data['lang_add_edit'] = $this->lang->line('add_edit_button');

    //end of tambah
    //riwayat PESANAN
    $this->data['lang_riw'] = $this->lang->line('field_riwayyat');
    $this->data['lang_tgl'] = $this->lang->line('field_tgl');
    $this->data['lang_tota'] = $this->lang->line('field_total');
    $this->data['lang_metod'] = $this->lang->line('field_metod');
    $this->data['lang_order_no'] = $this->lang->line('field_order');
    $this->data['lang_to_date'] = $this->lang->line('field_to_date');
    $this->data['lang_start_date'] = $this->lang->line('field_start_date');
    $this->data['lang_btn_search'] = $this->lang->line('field_btn_search');
    $this->data['lang_field_confirmation'] = $this->lang->line('field_confirmation');
    $this->data['lang_btn_confirm'] = $this->lang->line('field_btn_confirm');
    $this->data['lang_gambar'] = $this->lang->line('field_gambar');
    $this->data['lang_nama_barang'] = $this->lang->line('field_nama_barang');
    $this->data['lang_invoice'] = $this->lang->line('field_invoice');
    $this->data['lang_detail_order'] = $this->lang->line('field_detail_pesanan');
    $this->data['lang_ket_konfirm'] = $this->lang->line('field_ket_konfirm');
    $this->data['lang_msg_upload'] = $this->lang->line('msg_upload');
    $this->data['lang_msg_upload2'] = $this->lang->line('msg_upload2');
    $this->data['lang_label_upload'] = $this->lang->line('label_upload');


          //end pesanan

    //ennd of buku alamat

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
    $this->data['lang_daftar_info_point1'] = $this->lang->line('daftar_info_point1');
    $this->data['lang_daftar_info_point2'] = $this->lang->line('daftar_info_point2');
    $this->data['lang_daftar_info'] = $this->lang->line('daftar_info');
    $this->data['lang_daftar_info2'] = $this->lang->line('daftar_info2');
//                Wishlist
    $this->data['lang_ket_wishlist'] = $this->lang->line('ket_wishlist');
    $this->data['lang_wishlist_name'] = $this->lang->line('wishlist_name');
    $this->data['lang_wishlist_del'] = $this->lang->line('wishlist_del');
    $this->data['lang_wishlist_tittle'] = $this->lang->line('wishlist_tittle');
     $this->data['lang_wishlist_pic'] = $this->lang->line('wishlist_pic');
//                 Avatar
    $this->data['lang_avatar_tittle'] = $this->lang->line('avatar_tittle');
    $this->data['lang_avatar_tittle2'] = $this->lang->line('avatar_tittle2');
    $this->data['lang_avatar_tittle3'] = $this->lang->line('avatar_tittle3');
    $this->data['lang_avatar_back'] = $this->lang->line('avatar_back');
    $this->data['lang_avatar_button'] = $this->lang->line('avatar_button');
    $this->data['lang_avatar_browse'] = $this->lang->line('avatar_browse');


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
    $this->data['lang_field_tittle'] = $this->lang->line('field_tittle');
    $this->data['lang_txt_address'] = $this->lang->line('txt_address');
    $this->data['lang_nama_penerima'] = $this->lang->line('nama_penerima');

		$this->data['lang_BtnSend'] = $this->lang->line('btn_login');
		//end of bussines
//    CHECKOUT
    $this->data['lang_finish'] = $this->lang->line('finish');
    $this->data['lang_thanks'] = $this->lang->line('thanks');
    $this->data['lang_status_order'] = $this->lang->line('status_order');
    $this->data['lang_detail_order'] = $this->lang->line('detail_order');
    $this->data['lang_no_order'] = $this->lang->line('no_order');
    $this->data['lang_no_invoice'] = $this->lang->line('no_invoice');
    $this->data['lang_payment_method'] = $this->lang->line('payment_method');
    $this->data['lang_transaction_date'] = $this->lang->line('transaction_date');
    $this->data['lang_transaction_status'] = $this->lang->line('transaction_status');
    $this->data['lang_sender_checkout'] = $this->lang->line('sender');
    $this->data['lang_reciever_checkout'] = $this->lang->line('reciever');
    $this->data['lang_cart_detail'] = $this->lang->line('cart_detail');
    $this->data['lang_total_payment'] = $this->lang->line('total_payment');

    $this->data['lang_msg1_checkout'] = $this->lang->line('msg1_checkout');
    $this->data['lang_msg2_checkout'] = $this->lang->line('msg2_checkout');
    $this->data['lang_msg3_checkout'] = $this->lang->line('msg3_checkout');
    $this->data['lang_msg4_checkout'] = $this->lang->line('msg4_checkout');
    $this->data['lang_msg5_checkout'] = $this->lang->line('msg5_checkout');
    $this->data['lang_msg6_checkout'] = $this->lang->line('msg6_checkout');
    $this->data['lang_msg_bca'] = $this->lang->line('msg_bca');
    $this->data['lang_msg_cimb'] = $this->lang->line('msg_cimb');
    $this->data['lang_msg_online_payment'] = $this->lang->line('msg_online_payment');

    $this->data['lang_sender_receiver_data'] = $this->lang->line('sender_receiver_data');
    $this->data['lang_data_bill'] = $this->lang->line('data_bill');
    $this->data['lang_data_receiver'] = $this->lang->line('data_receiver');
    $this->data['lang_payment_type'] = $this->lang->line('payment_type');
    $this->data['lang_shiping_method'] = $this->lang->line('shiping_method');
    $this->data['lang_shoping_cart'] = $this->lang->line('shoping_cart');
    $this->data['lang_shoping_method_cart'] = $this->lang->line('shoping_method_cart');
    $this->data['lang_cart_note_text'] = $this->lang->line('cart_note_text');
    $this->data['lang_cart_note'] = $this->lang->line('cart_note');
    $this->data['lang_shiping_fare'] = $this->lang->line('shiping_fare');
    $this->data['lang_finish_button'] = $this->lang->line('finish_button');
    $this->data['lang_address_note'] = $this->lang->line('address_note');
    $this->data['lang_txt_btn_address'] = $this->lang->line('txt_btn_address');
    $this->data['lang_btn_update_receiver'] = $this->lang->line('btn_update_receiver');
    $this->data['lang_payment_confirm'] = $this->lang->line('payment_confirm');
    $this->data['lang_voucher_code'] = $this->lang->line('voucher_code');

//   ASAP
    $this->data['lang_inf_asap'] = $this->lang->line('inf_asap');

//  jaminan
    $this->data['lang_jaminan_tittle'] = $this->lang->line('jaminan_tittle');
    $this->data['lang_jaminan'] = $this->lang->line('jaminan');
    $this->data['lang_isi_jaminan'] = $this->lang->line('isi_jaminan');
    $this->data['lang_isi_jaminan2'] = $this->lang->line('isi_jaminan2');


    //btn tambah  informasi akun
      $this->data['btn_nih'] = $this->lang->line('btn_tambah');
    //akhir dari btn tambah di informasi akun

    //s: footer
    $this->data['lang_f_moto'] = $this->lang->line('f_moto');
    $this->data['lang_f_guarantee1'] = $this->lang->line('f_guarantee1');
    $this->data['lang_f_guarantee2'] = $this->lang->line('f_guarantee2');
    $this->data['lang_f_guarantee3'] = $this->lang->line('f_guarantee3');
    $this->data['lang_f_guarantee4'] = $this->lang->line('f_guarantee4');
    $this->data['lang_f_guarantee5'] = $this->lang->line('f_guarantee5');
    $this->data['lang_f_info'] = $this->lang->line('f_info');
    $this->data['lang_ttangkami'] = $this->lang->line('f_ttangKami');
    $this->data['lang_f_balik'] = $this->lang->line('f_balik');
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
// After sales
    $this->data['lang_conta'] = $this->lang->line('f_contact');
    $this->data['lang_after_sales'] = $this->lang->line('f_after_sales');
    $this->data['lang_a_sales'] = $this->lang->line('f_a_sales');
    $this->data['lang_aftersales_cont'] = $this->lang->line('f_aftersale_cont');
    $this->data['lang_subjek'] = $this->lang->line('f_subjek');
    $this->data['lang_email_add'] = $this->lang->line('f_email_add');
    $this->data['lang_name'] = $this->lang->line('f_name');
    $this->data['lang_phone'] = $this->lang->line('f_phone');
    $this->data['lang_order_id'] = $this->lang->line('f_order_id');
    $this->data['lang_company'] = $this->lang->line('f_company');
    $this->data['lang_msg'] = $this->lang->line('f_msg');
    $this->data['lang_btn_send'] = $this->lang->line('f_btn_send');
    $this->data['lang_aftersale_baner'] = $this->lang->line('f_aftersale_baner');
    $this->data['lang_aftersale_bawah'] = $this->lang->line('f_aftersale_bawah');
    $this->data['lang_aftersale_keterangan'] = $this->lang->line('after_sale_keterangan');
    $this->data['lang_msg1'] = $this->lang->line('f_msg1');
    $this->data['lang_msg2'] = $this->lang->line('f_msg2');
    $this->data['lang_msg3'] = $this->lang->line('f_msg3');
    $this->data['lang_msg4'] = $this->lang->line('f_msg4');
    $this->data['lang_msg5'] = $this->lang->line('f_msg5');
    $this->data['lang_msg6'] = $this->lang->line('f_msg6');
    $this->data['lang_msg7'] = $this->lang->line('f_msg7');
    $this->data['lang_msg8'] = $this->lang->line('f_msg8');
    $this->data['lang_msg9'] = $this->lang->line('f_msg9');
// Hak Cipta
    $this->data['lang_hak_cipta'] = $this->lang->line('hak_cipta');
    $this->data['lang_hakcipta_tittle'] = $this->lang->line('hakcipta_tittle');
    $this->data['lang_hakcipta_text'] = $this->lang->line('hakcipta_text');

    $this->data['lang_footer_info'] = $this->lang->line('footer_info');

    $this->data['lang_all_src'] = $this->lang->line('field_all_src');
    //e: footer
		$this->data['title_web'] = "Myacico.com - Login Admin";

    //alert CART
    $this->data['lang_alert_cart_empty'] = $this->lang->line('alert_cart_empty');
    $this->data['lang_alert_cart_shipping'] = $this->lang->line('alert_cart_shipping');
    $this->data['lang_alert_cart_kurir'] = $this->lang->line('alert_cart_kurir');
    $this->data['lang_alert_cart_paket'] = $this->lang->line('alert_cart_paket');
    $this->data['lang_alert_cart_hapus'] = $this->lang->line('alert_cart_hapus');
	}

  public function urlApi(){
    //$url = "https://api.myacico.co.id/myacico-service";
    $url = "https://api.myacico.co.id/dev";
    return $url;
  }
  public function urlApi2(){

    $url = "https://acc.myacico.co.id/myacico-account";


    return $url;
  }

  public function navigation(){
    $api = $this->urlApi();
    $url = $api."/category/list";
		$konten = file_get_contents($url, false);
		$hasilNav = json_decode($konten, true);
    $this->data['hasilNav'] = $hasilNav;
  }

  public function asset(){
    $api = $this->urlApi();
      $api2 = $this->urlApi2();
    $this->data['baseApiUrl'] = $api;

    $this->data['baseApiUrl2'] = $api2."/account";
  }


    public function maintan(){
      $api = $this->urlApi();
      $url = $api."/check/server";
  		$konten = file_get_contents($url);
      $hasil = json_decode($konten, true);

      if($hasil['status'] != '1'){
        redirect('maintenance');
      }

    }
    public function categorySearch(){
      $api = $this->urlApi();
      $url = $api."/category";
  		//$url = "https://api.myacico.co.id/myacico-service/category";
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

      $this->cekTokenExpired();
    }


    public function cekTokenExpired(){
  		    $token = $_COOKIE['x-auth'];
          $url = "https://acc.myacico.co.id/myacico-account/account/checktoken/".$token;
          $konten = file_get_contents($url);
          $hasil = json_decode($konten, true);
          if($hasil['status']=='0'){
            redirect('customer/signIn/');
          }
    }
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */
