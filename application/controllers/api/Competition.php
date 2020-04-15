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
        $data = $this->competitions->allCompetations();
        if($data != null){
            $j = 0;
            $sizeData = sizeof($data);
            for($i = 0 ; $i < $sizeData ;$i=$i+1){
                $compet_type =$data[$i]->compet_type;
                $compet_gen = $data[$i]->compet_gen;
                $compet_type_name = $this->competitions->searchType($compet_type);
                $compet_gen = $this->competitions->searchGen($compet_gen);
                if($i == 0){
                    $type[] = $compet_type_name->name;
                    if($compet_gen->type == 1){
                        $gen1[] = $compet_gen->name;
                    }
                    else{
                        $gen2[] = $compet_gen->name;
                    }
                    $a =$data[$i]->name;
                    $firstType = $compet_type_name->name;
                }
                else{
                    $b = $data[$i]->name;
                    if($i == ($sizeData-1)){
                        if($compet_gen->type == 1){
                            $gen1[] = $compet_gen->name;
                        }
                        else{
                            $gen2[] = $compet_gen->name;
                        }
                        $actual[] = array(
                            'name'  => $data[$i]->name,
                            'detail'  => $data[$i]->detail,
                            'place'  => $data[$i]->place,
                            'prize'  => $data[$i]->prize,
                            'compet_start'  => $data[$i]->compet_start,
                            'compet_end'  => $data[$i]->compet_end,
                            'start'  => $data[$i]->start,
                            'end'  => $data[$i]->end,
                            'pay_end'  => $data[$i]->pay_end,
                            'compet_type'  => $type,
                            'compet_gen1'  => $gen1,   
                            'compet_gen2'  => $gen2,  
                        ); 
                        $type = null;
                        $gen1 = null;
                        $gen2 = null;
                        
                    }
                    else{
                        if($a == $b){
                            $endType = $compet_type_name->name;
                            if($firstType != $endType){
                                $type[] = $compet_type_name->name;
                            }
                            $firstType = $compet_type_name->name;
                            if($compet_gen->type == 1){
                                $gen1[] = $compet_gen->name;
                            }
                            else{
                                $gen2[] = $compet_gen->name;
                            }
                        }
                        else{
                            $actual[] = array(
                                'name'  => $data[$i-1]->name,
                                'detail'  => $data[$i-1]->detail,
                                'place'  => $data[$i-1]->place,
                                'prize'  => $data[$i-1]->prize,
                                'compet_start'  => $data[$i-1]->compet_start,
                                'compet_end'  => $data[$i-1]->compet_end,
                                'start'  => $data[$i-1]->start,
                                'end'  => $data[$i-1]->end,
                                'pay_end'  => $data[$i-1]->pay_end,
                                'compet_type'  => $type,
                                'compet_gen1'  => $gen1,   
                                'compet_gen2'  => $gen2,   
                            ); 
                            $type = null;
                            $gen1 = null;
                            $gen2 = null;
                            $type[] = $compet_type_name->name;
                            if($compet_gen->type == 1){
                                $gen1[] = $compet_gen->name;
                            }
                            else{
                                $gen2[] = $compet_gen->name;
                            }
                            $a =$data[$i]->name;
                            $firstType = $compet_type_name->name;
                            }
                    }
                    
                }
                
                
            }
            echo json_encode($actual);
        }
        else{
            echo "<script>alert('ไม่มีข้อมูลใน Database')</script>";
            redirect(base_url('staff/Competition'),'refresh');
        }
    }

}
