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
            'compet_gen'  => 0,   
            'auth' => 0,
            'poster' => 0
            
        );
        $valid = $this->competitions->searchCompetitionByName($name);

        if(empty($valid)){
            $this->competitions->insert($data);
            $dataCompet = $this->competitions->searchCompetitionByName($name);
            if($dataCompet != null){
                foreach($compet_type as $valuetype){
                    if($valuetype == 1){
                        foreach($compet_genY as $valueGenY){
                            $dataGen = array(
                                'compet_id' => $dataCompet->compet_id,
                                'type' => $valuetype,
                                'gen' => $valueGenY
                            );
                            $this->competitions->insertCompetgen($dataGen);
                        }
                    }
                    else{
                        foreach($compet_genP as $valueGenP){
                            $dataGen = array(
                                'compet_id' => $dataCompet->compet_id,
                                'type' => $valuetype,
                                'gen' => $valueGenP
                            );
                            $this->competitions->insertCompetgen($dataGen);
                        }
                    }
                }
            }
            echo "<script>alert('บันทึกข้อมูลเสร็จสิ้น')</script>";
            redirect(base_url('staff/Competition'),'refresh');
        }
        else {
            echo "<script>alert('ชื่อการแข่งขันมีแล้ว')</script>";
            redirect(base_url('staff/Competition/createCompetition'));
        }
       
    }

    public function allCompetation(){
        $data = $this->competitions->allCompetations();
        if($data != null){
            foreach($data as $dataValue){
                $compet_id = $dataValue->compet_id;
                $dataGen = $this->competitions->searchGenCompetations($compet_id);
                if($dataGen != null){
                    $i = 0;
                    foreach($dataGen as $value){
                       if($value->type == 1){
                        $gen= $this->competitions->searchGen($value->gen);
                        $gen1[] = $gen->name;
                       }
                       else{
                        $gen= $this->competitions->searchGen($value->gen);
                        $gen2[] = $gen->name;
                       }
                        if($i == 0){
                            $firstType = $value->type;
                            $typeName = $this->competitions->searchType($value->type);
                            $type[] = $typeName->name;
                            $i=$i+1;
                        }
                        else{
                            if($firstType != $value->type){
                                $typeName = $this->competitions->searchType($value->type);
                                $type[] = $typeName->name;
                                
                            }
                            $firstType = $value->type;
                            $i=$i+1;
                        }
                    }
                }
                else{
                    echo "<script>alert('ไม่มีข้อมูลรุ่นอายุบางการแข่งขันนี้ใน Database')</script>";
                }
                if(empty($gen)){
                    $gen1[] = "";
                }
                if( empty($gen2)){
                    $gen2[] = "";
                }
                $actual[] = array(
                    'id' => (int)$dataValue->compet_id,
                    'name'  => $dataValue->name,
                    'detail'  => $dataValue->detail,
                    'place'  => $dataValue->place,
                    'prize'  => $dataValue->prize,
                    'compet_start'  => $dataValue->compet_start,
                    'compet_end'  => $dataValue->compet_end,
                    'start'  => $dataValue->start,
                    'end'  => $dataValue->end,
                    'pay_end'  => $dataValue->pay_end,
                    'compet_type'  => $type,
                    'compet_gen1'  => $gen1,   
                    'compet_gen2'  => $gen2,   
                ); 
                $type =null;
                $gen1=null;
                $gen2=null;

            }
            echo json_encode($actual);
        }
        else{
            echo "<script>alert('ไม่มีข้อมูลใน Database')</script>";
            redirect(base_url('staff/Competition'),'refresh');
        }
        
        // echo "<script>alert('ไม่มีข้อมูลใน Database')</script>";
        //     redirect(base_url('staff/Competition'),'refresh');
    }
    public function delete($id){
        $datafindid = $this->competitions->searchCompetitionById($id);
        if($datafindid != null){
            $data = $this->competitions->searchGenCompetations($datafindid->compet_id);
            foreach($data as $dataGen){
                $this->competitions->deleteCompetitionGen($dataGen->id);
            }
            $this->competitions->deleteCompetition($datafindid->compet_id);
            echo "<script>alert('ลบแล้ว')</script>";
        }   
        redirect(base_url('staff/Competition'),'refresh');
    }

    public function searchCompetitionById($id){
        $data = $this->competitions->searchCompetitionById($id);
        $dataByname = $this->competitions->searchCompetitionByName($data->name);
        $i = 0;
        if($dataByname != null){
            foreach($dataByname as $data){
                $compet_gen[] = $data->compet_gen;
                if($i == 0){
                    $firstCompetType = $data->compet_type;
                    $compet_type[] = $data->compet_type;
                }
                else{
                    $secondCompetType = $data->compet_type;
                    if($firstCompetType != $secondCompetType){
                        $compet_type[] = $data->compet_type;
                        $firstCompetType = $data->compet_type;
                    }
                    if($i == sizeof($dataByname)-1){
                        $actual = array(
                            'id' => (int)$data->compet_id,
                            'name'  => $data->name,
                            'detail'  => $data->detail,
                            'place'  => $data->place,
                            'prize'  => $data->prize,
                            'compet_start'  => $data->compet_start,
                            'compet_end'  => $data->compet_end,
                            'start'  => $data->start,
                            'end'  => $data->end,
                            'pay_end'  => $data->pay_end,
                            'compet_type'  => $compet_type,
                            'compet_gen'  => $compet_gen,   
                        );
                    }
                }
                $i = $i+1;
            }
        }
        else{
            echo "<script>alert('Can not found in Database')</script>";
            redirect(base_url('staff/Competition'),'refresh');
        }
        echo json_encode($actual);
    }

    public function update(){
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
    }

}
