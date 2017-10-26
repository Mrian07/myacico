<?php

class Maintenance extends CI_Controller {
	public function index()
    {
    $this->data['active_dashboard'] = "class='active'";
		$this->data['title_web'] = "Myacico.com - Dashboard";
		$this->load->view('frontend/maintenance',$this->data);

	}
}
