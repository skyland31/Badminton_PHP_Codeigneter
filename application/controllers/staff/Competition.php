<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Competition extends BD_Controller {
	public function __construct()
    {
        parent::__construct();
	}

	public function index()
	{
		$this->load->view('staff/layout/head');
		$this->load->view('staff/layout/header');
		$this->load->view('staff/layout/left-menu');
		$this->load->view('staff/competition/content');
		$this->load->view('staff/layout/footer');
		$this->load->view('staff/layout/foot');
	}

	public function createCompetition()
	{
		$this->load->view('staff/layout/head');
		$this->load->view('staff/layout/header');
		$this->load->view('staff/layout/left-menu');
		$this->load->view('staff/competition/create/content');
		$this->load->view('staff/layout/footer');
		$this->load->view('staff/layout/foot');
		$this->load->view('staff/competition/create/script');
	}

	public function editCompetition()
	{
		$this->load->view('staff/layout/head');
		$this->load->view('staff/layout/header');
		$this->load->view('staff/layout/left-menu');
		$this->load->view('staff/competition/edit/content');
		// $this->load->view('staff/competition/edit/script');
		$this->load->view('staff/layout/footer');
		$this->load->view('staff/layout/foot');
	}
}
