<?php

class Maintenance extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->helper('app');
	}
	public function index()
    {
            $homedomain = domain2();
		$this->data['active_dashboard'] = "class='active'";
		$this->data['title_web'] = "Dashboard - ".$homedomain;
		$this->load->view('frontend/maintenance',$this->data);

	}
}
