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
        $compet_genY = $this->input->post('compet_genY');
        $compet_genP = $this->input->post('compet_genP');
        $data = array(
            'name'  => $name,
            'detail'  => $detail,
            'place'  => $palce,
            'prize'  => $price,
            'compet_start'  => $compet_start,
            'compet_end'  => $compet_end,
            'start'  => $start,
            'end'  => $end,
            'pay_end'  => $endPay,
            'compet_type'  => 0,
            'compet_gen'  => 0,   
            
        );
        if(sizeof($compet_type) == 1){
            if($compet_type[0] == 1){
                foreach($compet_genY as $value){
                    $data['compet_type'] = $compet_type[0];
                    $data['compet_gen'] = $value;
                    $this->competitions->insert($data);
                }
            }
            else{
                foreach($compet_genP as $value){
                    $data['compet_type'] = $compet_type[0];
                    $data['compet_gen'] = $value;
                    $this->competitions->insert($data);
                }
            }
            
        }
        else{
            for($i = 0 ; $i < sizeof($compet_type) ; $i++){
                if($compet_type[$i] == 1){
                    foreach($compet_genY as $value){
                        $data['compet_type'] = $compet_type[$i];
                        $data['compet_gen'] = $value;
                        $this->competitions->insert($data);
                    }
                }
                else{
                    foreach($compet_genP as $value){
                        $data['compet_type'] = $compet_type[$i];
                        $data['compet_gen'] = $value;
                        $this->competitions->insert($data);
                    }
                }
            }
        }
       echo "<script>alert('บันทึกข้อมูลเสร็จสิ้น')</script>";
       redirect(base_url('staff/Competition'),'refresh');
    }
    public function allCompetation(){
        redirect(base_url('staff/Competition'),'refresh');
    }

}
