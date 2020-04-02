<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Competition extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('competitions');
    }

	public function create()
	{
        $name = $this->input->post('name');
        $compet_start = $this->input->post('compet_start');
        $compet_end = $this->input->post('compet_end');
        $palce = $this->input->post('palce');
        $start = $this->input->post('start');
        $end = $this->input->post('end');
        $price = $this->input->post('payCost'); // prize in database
        $endPay = $this->input->post('endPay'); //pay_end in database
        $detail = $this->input->post('details');
        $compet_type = $this->input->post('compet_type');
        $compet_gen = $this->input->post('compet_gen');

        $data = array(
            'name'  => $name,
            'detail'  => $detail,
            'compet_type'  => $compet_type,
            'compet_gen'  => $compet_gen,
            'place'  => $palce,
            'prize'  => $price,
            'compet_start'  => $compet_start,
            'compet_end'  => $compet_end,
            'start'  => $start,
            'end'  => $end,
            'pay_end'  => $endPay,
            
        );
       $this->competitions->insert($data);
       echo "<script>alert('บันทึกข้อมูลเสร็จสิ้น')</script>";
       redirect(base_url('staff/Competition'),'refresh');
       
    }

}
