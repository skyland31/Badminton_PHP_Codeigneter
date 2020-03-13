<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends BD_Controller {
	public function __construct()
    {
        parent::__construct();
	}

	public function index()
	{
		$this->load->view('staff/layout/head');
		$this->load->view('staff/layout/header');
		$this->load->view('staff/layout/left-menu');
		$this->load->view('staff/staffhome/content');
		$this->load->view('staff/layout/footer');
		$this->load->view('staff/layout/foot');
	}
	public function createCompetation()
	{
		$this->load->view('staff/layout/head');
		$this->load->view('staff/layout/header');
		$this->load->view('staff/layout/left-menu');
		$this->load->view('staff/createCompetition/content');
		$this->load->view('staff/createCompetition/script');
		$this->load->view('staff/layout/footer');
		$this->load->view('staff/layout/foot');
	}
}
