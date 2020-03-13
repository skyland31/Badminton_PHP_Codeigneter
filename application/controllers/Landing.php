<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends BD_Controller {
    
	public function index()
	{
		$this->load->view('guest/layout/head');
		$this->load->view('guest/layout/header');
		$this->load->view('guest/layout/left-menu');
		$this->load->view('guest/landing/content');
		$this->load->view('guest/layout/footer');
		$this->load->view('guest/layout/foot');
	}
}
