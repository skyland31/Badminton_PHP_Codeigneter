<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data['test'] = 'Hello';
		$this->load->view('login', $data);
	}
}
