<?php

class Upload extends Web {
	public function index()
    {
    $this->data['active_dashboard'] = "class='active'";
		$this->data['title_web'] = "Myacico.com - Dashboard";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/upload/upload.php',$this->data);
		$this->load->view('frontend/footer',$this->data);

	}

	public function doc()
    {
            $home_domain = domain2();
		$this->data['active_dashboard'] = "class='active'";
		$this->data['title_web'] = "Myacico.co.id - ".$home_domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/upload/upload.php',$this->data);
		$this->load->view('frontend/footer',$this->data);

	}
        public function success()
    {
            $home_domain = domain2();
		$this->data['active_dashboard'] = "class='active'";
		$this->data['title_web'] = "Myacico.co.id - ".$home_domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/upload/upload_success.php',$this->data);
		$this->load->view('frontend/footer',$this->data);

	}

}