<?php

class Upload extends Web_private {
	public function index()
    {
    	redirect('index');
	}

	public function doc()
    {
		$this->data['active_dashboard'] = "class='active'";
		$this->data['title_web'] = "Myacico.com - Dashboard";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/upload/upload.php',$this->data);
		$this->load->view('frontend/footer',$this->data);

	}

}