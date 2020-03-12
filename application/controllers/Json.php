<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Json extends BD_Controller {

	public function index()
	{
		$data['test'] = 'Hello Json';
		// echo json_encode($data);

		$this->response($data);

		// $this->output->set_content_type('application/json')//transfer data to json
        // ->set_output(json_encode($data));
	}
}
