<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grouptable extends BD_Controller {
	public function __construct()
    {
        parent::__construct();
	}

	public function index($compet_id)
	{
		$data['compet_id'] = $compet_id;
		$this->load->view('staff/layout/head');
		$this->load->view('staff/layout/header');
		$this->load->view('staff/layout/left-menu');
		$this->load->view('staff/grouptable/content',$data);
		$this->load->view('staff/layout/footer');
		$this->load->view('staff/layout/foot');
	}

}
