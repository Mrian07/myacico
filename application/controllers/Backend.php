<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends LogInAdmin {
	
	public function __construct()
    {
		parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('upload');
		$this->load->library('image_lib');
		$this->load->library('encrypt');
		$this->load->helper('app');
		$this->load->model('Kupon_model', 'kupon', TRUE);
		$this->load->model('Customer_model', 'customer', TRUE);
		$this->load->model('Quotation_model', 'quotation', TRUE);
		
		$this->atribut();	
	}
	
	public function atribut(){
		
		$this->data["active_dashboard"]="";		
		$this->data["active_kupon"]="";	
		$this->data["active_customer"]="";	
		$this->data["active_quotation"]="";	
		$this->data["url_customer"]= $this->url_customer();
		$this->data["keyUrl"]="myacico";
			
	}
	
	public function keyUrl($id)
    {	
		//Untuk decode
		return $this->encrypt->decode(getUrl($id),'myacico');
	}	
	
	public function enKeyUrl($id)
    {	//Untuk encode
		return setUrl($this->encrypt->encode($id,'myacico'));
	}
	
	public function url_customer()
	{
		return "http://localhost/myacico/customer";
	}
	
	public function index()
	{	
		$this->data["active_dashboard"]="active";		
		$this->data["title_page"]="Dashboard";
		$this->data["total_kupon"] = $this->kupon->kupon_no_used();
		$this->data["total_quota"] = $this->quotation->all_quota();
		$this->load->view('backend/header',$this->data);
		$this->load->view('backend/topbar',$this->data);
		$this->load->view('backend/sidebar',$this->data);
		$this->load->view('backend/sub_head',$this->data);
		$this->load->view('backend/modules/dashboard/dashboard',$this->data);
		$this->load->view('backend/footer');
	}
	
	public function kupon()
	{
		$this->data["active_kupon"]="active";		
		$this->data["title_page"]="Kupon";
		
		$this->data["hasil"] = $this->kupon->all_no_used();
		
		$this->load->view('backend/header',$this->data);
		$this->load->view('backend/topbar',$this->data);
		$this->load->view('backend/sidebar',$this->data);
		$this->load->view('backend/sub_head',$this->data);
		$this->load->view('backend/modules/kupon/kupon',$this->data);
		$this->load->view('backend/footer');
	}
	
	public function kuponKirim()
	{
		if($this->input->post('submit'))
		{
			if($this->kupon->kirim()==TRUE){
				
				$email_from="support@myacico.com";
				$nm_from="Myacico.com";
				$email_to=$this->input->post('email');
				$kode=$this->input->post('code');
				$tgl_expire=$this->input->post('expiration_date');
				$discount_amount=$this->input->post('discount_amount');
				$subject="Selamat Anda Mendapatkan Kupon Belanja Myacico.com";
				$message="Dear Customer,\n\n";
				$message.="Selamat Anda mendapatkan kupon belanja dari Myacico.com.\n\n";
				$message.="KODE KUPON: ".$kode."\n";
				$message.="POTONGAN BELANJA: ".$discount_amount."\n";
				$message.="Masa Berlaku Kupon Sampai ".tanggal($tgl_expire)."\n\n";
				$message.="Masukan kupon diatas untuk mendapatkan potongan harga saat belanja.\n\n";
				$message.="Terima kasih.\n\n";
				$this->sendMail($email_from,$nm_from,$email_to,$subject,$message);
				
				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible animated bounceInDown" id="alertSubmit"><span class="glyphicon glyphicon-ok"></span> Proses kirim kupon berhasil.</div>');
				redirect('backend/kupon');
			}else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible animated bounceInDown" id="alertSubmit">
				<span class="glyphicon glyphicon-remove"></span> <strong>Gagal!</strong> Proses kirim kupon gagal.</div>');
				redirect('backend/kupon');
			}
			
		}else{
	
			$coupon_id = $this->uri->segment(3);
			$hasil = $this->kupon->cari($coupon_id);
			foreach($hasil as $key => $value)
			{
				$this->data['form_value'][$key] = $value;
			}
			$this->data["btn_back"]="backend/kupon";	
			$this->data["nm_btn_back"]="Kembali";	
			
			$this->data["form_action"]="kuponKirim";	
			$this->data["active_kupon"]="active";		
			$this->data["title_page"]="Kupon";
			
			$this->load->view('backend/header',$this->data);
			$this->load->view('backend/topbar',$this->data);
			$this->load->view('backend/sidebar',$this->data);
			$this->load->view('backend/sub_head',$this->data);
			$this->load->view('backend/modules/kupon/form_kupon',$this->data);
			$this->load->view('backend/footer');
		
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
        $mail->send();
	}	
	
	public function logout()
	{
        $this->session->unset_userdata(array('username' => '', 'login_admin' => FALSE));
        $this->session->sess_destroy();
		redirect('frontend');
	}
	
	/* -----s: Customer -----*/

	function atribut_customer(){	
		$this->data["active_customer"]="active";		
		$this->data['title_page']='Customer';
		$this->data['btn_data']='backend/customer';
		$this->data['btn_form']='backend/addCustomer';
		$this->data['btn_user']='backend/users';
		$this->data['btn_customer']='backend/customer';
		$this->data['nm_btn_data']='Kembali';
		$this->data['nm_btn_form']='Tambah customer';
		$this->data['nm_btn_user']='Users';
		$this->data['nm_btn_customer']='customer';
	}
	
	function customer(){
		$allow_access='customer';
		$this->atribut_customer();
		$this->data['hasil'] = $this->customer->all();
		
		$this->data['form_action']='customer';
		
		$this->load->view('backend/header',$this->data);
		$this->load->view('backend/topbar',$this->data);
		$this->load->view('backend/sidebar',$this->data);
		$this->load->view('backend/sub_head',$this->data);
		$this->load->view('backend/modules/customer/customer',$this->data);
		$this->load->view('backend/footer');
	}
	
	function addCustomer(){
		
		$this->atribut_customer();
		// submit
		if($this->input->post('submit'))
		{
			if($this->customer->input()==TRUE){
				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible animated bounceInDown" id="alertSubmit">
				<span class="glyphicon glyphicon-ok"></span> <strong>Sukses!</strong> Proses tambah customer berhasil.</div>');
				redirect('backend/customer');
			}else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible animated bounceInDown" id="alertSubmit"><span class="glyphicon glyphicon-remove"></span> Proses tambah customer gagal.</div>');
				redirect('backend/customer');	
			}
		
		}else{			
			$allow_access='customer';
			$this->data['title_form']='Tambah customer';
			$this->data['nm_button_form']='Simpan';
			$this->data['nm_button_form2']='Batal';	
			$this->data['form_action']='backend/addCustomer';

			$this->load->view('backend/header',$this->data);
			$this->load->view('backend/topbar',$this->data);
			$this->load->view('backend/sidebar',$this->data);
			$this->load->view('backend/sub_head',$this->data);
			$this->load->view('backend/modules/customer/form_customer',$this->data);
			$this->load->view('backend/footer');
		}
	
	}
	
	function editCustomer(){
		
		$this->atribut_customer();
		// submit
		if($this->input->post('submit'))
		{	
			if($this->customer->edit($this->input->post('customer_id'))==TRUE){
				
				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible animated bounceInDown" id="alertSubmit">
				<span class="glyphicon glyphicon-ok"></span> <strong>Sukses!</strong> Proses ubah customer berhasil.</div>');
				redirect('backend/customer');
			}else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible animated bounceInDown" id="alertSubmit">
				<span class="glyphicon glyphicon-remove"></span> <strong>Gagal!</strong> Proses ubah customer gagal.</div>');
				redirect('backend/customer');
			}	
		
		}else{			
			$allow_access='customer';
			$id_customer = $this->uri->segment(3);
			$get_customer = $this->customer->cari($id_customer);
			foreach($get_customer as $key => $value)
			{
				$this->data['form_value'][$key] = $value;
			}

			$this->data['nm_button_form']='Update';
			$this->data['nm_button_form2']='Batal';
			$this->data['title_form']='Ubah customer';
			$this->data['form_action']='backend/editCustomer';

			$this->load->view('backend/header',$this->data);
			$this->load->view('backend/topbar',$this->data);
			$this->load->view('backend/sidebar',$this->data);
			$this->load->view('backend/sub_head',$this->data);
			$this->load->view('backend/modules/customer/form_customer',$this->data);
			$this->load->view('backend/footer');
		}
	
	}
	
	function deleteCustomer($id_customer){
		if($this->customer->delete($id_customer)){
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible animated bounceInDown" id="alertSubmit">
			<span class="glyphicon glyphicon-ok"></span> <strong>Sukses!</strong> Proses hapus customer berhasil.</div>');
			redirect('backend/customer');
		}else{
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible animated bounceInDown" id="alertSubmit">
			<span class="glyphicon glyphicon-remove"></span> <strong>Gagal!</strong> Proses hapus customer gagal.</div>');
			redirect('backend/customer');
		}
	}
	
	/* -----e: Customer -----*/
	
	/* -----s: Quotation -----*/

	function atribut_quotation(){	
		$this->data["active_quotation"]="active";		
		$this->data['title_page']='Quotation';
		$this->data['btn_data']='backend/quotation';
		$this->data['btn_form']='backend/addQuotation';
		$this->data['btn_user']='backend/users';
		$this->data['btn_quotation']='backend/quotation';
		$this->data['nm_btn_data']='Kembali';
		$this->data['nm_btn_form']='Tambah Quotation';
		$this->data['nm_btn_user']='Users';
		$this->data['nm_btn_quotation']='quotation';
	}
	
	function quotation(){
		$allow_access='quotation';
		$this->atribut_quotation();
		$this->data['hasil'] = $this->quotation->all();
		
		$this->data['form_action']='quotation';
		
		$this->load->view('backend/header',$this->data);
		$this->load->view('backend/topbar',$this->data);
		$this->load->view('backend/sidebar',$this->data);
		$this->load->view('backend/sub_head',$this->data);
		$this->load->view('backend/modules/quotation/quotation',$this->data);
		$this->load->view('backend/footer');
	}
	
	function deleteQuotationFeedback(){
		$id = $this->uri->segment(3);
		$id_sub = $this->uri->segment(4);
		
		$quotation_feedback_id = $this->keyUrl($id_sub);	
		$data_user = $this->quotation->cari_id($quotation_feedback_id);
		foreach($data_user as $data)
		{
			$quotation_feedback_file = $data->quotation_feedback_file;
		}
			
		if($quotation_feedback_file){ @unlink('./file/'.$quotation_feedback_file); }
		
		$this->quotation->delete_feedback($quotation_feedback_id);

		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible animated bounceInDown" id="alertSubmit">
		<span class="glyphicon glyphicon-ok"></span> <strong>Sukses!</strong> Proses hapus data berhasil.</div>');

		redirect('backend/detailQuotation/'.$id);
		
	}
	
	function detailQuotation(){
		
		$this->atribut_quotation();
		// submit
		if($this->input->post('submit'))
		{	
			if(isset($_FILES["image"]['name'])){$new_name = md5($_FILES["image"]['name']);}else{$new_name = null;}	
			$config = array(
				'upload_path' => './file',
				'allowed_types' => 'xls|xlsx|csv|png|gif|jpg|pdf|doc|docx|ppt|pptx',
				'max_size' => '60000',
				'overwrite' => 'FALSE',
				'remove_spaces' => 'TRUE',
				'encrypt_name' => 'TRUE', 
				'file_name' => $new_name
			);
			
			$this->upload->initialize($config);
			if($this->upload->do_upload('image')){
				$allData = $this->upload->data();
				$myFile = $allData['file_name'];
				$total = $this->quotation->total()+1;
				$jml_urut ="6";
				$number = sprintf("%0".$jml_urut."s",$total);

				$this->quotation->input($this->input->post('quotation_id'),$myFile);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible animated bounceInDown" id="alertSubmit"><span class="glyphicon glyphicon-ok"></span> Proses tambah file berhasil.</div>');	
				
				$number_first = $this->input->post('quotation_number');
				$email_from="support@myacico.com";
				$nm_from="Myacico.com";
				$email_to="lalang@myacico.com";

				$subject="Ada quotation baru";
				$message="Kepada\n";
				$message.="Yth. Customer,\n\n";
				$message.="Berikut ini balasan dari quotation yang Anda ajukan.\n\n";
				$message.="Nomor quotation pengajuan: ".$number_first."\n\n";
				$message.="Demikian informasi ini disampaikan.\n\n";
				$message.="Terima kasih.\n\n";
			
				$this->sendMail($email_from,$nm_from,$email_to,$subject,$message);
				
			}else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible animated bounceInDown" id="alertSubmit"><span class="glyphicon glyphicon-remove"></span> Proses tambah file gagal, pastikan file yang Anda upload sesuai dengan format yang telah ditentukan.</div>');
			}

			$id = $this->enKeyUrl($this->input->post('quotation_id'));
			redirect('backend/detailQuotation/'.$id);
			
			
		}else{			 
			$id_quotation = $this->uri->segment(3);
			$this->data['id_quotation']=$id_quotation;
			$id_quotation = $this->keyUrl($id_quotation);	
			$this->data['hasil'] = $this->quotation->cari_f_id($id_quotation);
			$hasil = $this->quotation->cari_by_id($id_quotation);
			foreach($hasil as $data){
				$this->data['username']= $data->username;
				$this->data['quotation_type']= $data->quotation_type;
				$this->data['quotation_number']= $data->quotation_number;
				$this->data['quotation_submit_date']= $data->quotation_submit_date;
				$this->data['quotation_file']= $data->quotation_file;
				$this->data['quotation_id']= $data->quotation_id;
			}
			$this->data['url_customer'] = $this->url_customer();	
			$allow_access='quotation';
			$this->data['title_form']='Tambah Quotation';
			
			$this->data['nm_button_form']='Simpan';
			$this->data['nm_button_form2']='Batal';	
			$this->data['form_action']='backend/detailQuotation';

			$this->load->view('backend/header',$this->data);
			$this->load->view('backend/topbar',$this->data);
			$this->load->view('backend/sidebar',$this->data);
			$this->load->view('backend/sub_head',$this->data);
			$this->load->view('backend/modules/quotation/form_quotation',$this->data);
			$this->load->view('backend/footer');
		}
	
	}
	
	/* -----e: Quotation -----*/
}
