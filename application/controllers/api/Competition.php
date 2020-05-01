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
        echo "<script>alert('ชื่อการแข่งขันมีแล้ว')</script>";
        redirect(base_url('staff/Competition/createCompetition'),'refresh');
        
       
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
        //$data = $this->competitions->searchCompetitionById($id);
        $dataById = $this->competitions->searchCompetitionById($id);
        $i = 0;
        if($dataById != null){
            $dataGen = $this->competitions->searchGenCompetations($id);
            $i = 0;
            foreach($dataGen as $gen){
                $compet_gen[] = $gen->gen;
                if($i == 0){
                    $firstType = $gen->type;
                    $compet_type[] = $gen->type;
                    $i=$i+1;
                }
                else{
                    if($firstType != $gen->type){
                        $compet_type[] = $gen->type;
                        
                    }
                    $firstType = $gen->type;
                    $i=$i+1;
                }
            }
            $actual = array(
                'id' => (int)$dataById->compet_id,
                'name'  => $dataById->name,
                'detail'  => $dataById->detail,
                'place'  => $dataById->place,
                'prize'  => $dataById->prize,
                'compet_start'  => $dataById->compet_start,
                'compet_end'  => $dataById->compet_end,
                'start'  => $dataById->start,
                'end'  => $dataById->end,
                'pay_end'  => $dataById->pay_end,
                'compet_type'  => $compet_type,
                'compet_gen'  => $compet_gen,   
            );
        }
        echo json_encode($actual);
    }

    public function update(){
        $id = $this->input->post('id');
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
            'id' => $id,
            'name'  => $name,
            'detail'  => $detail,
            'place'  => $palce,
            'prize'  => $price,
            'compet_start'  => $compet_start,
            'compet_end'  => $compet_end,
            'start'  => $start,
            'end'  => $end,
            'pay_end'  => $endPay, 
            
        );
        $compet_gen = [];
        $valid = $this->competitions->searchCompetitionById($id);
        if($valid != null){
            foreach($compet_genY as $genY){
                $gen = $this->competitions->searchGen($genY);
                $compet_gen[] = array(
                    'compet_id' => $id,
                    'type' => $gen->type,
                    'gen' => $gen->gen_id

                );
            }
            foreach($compet_genP as $genP){
                $gen = $this->competitions->searchGen($genP);
                $compet_gen[] = array(
                    'compet_id' => $id,
                    'type' => $gen->type,
                    'gen' => $gen->gen_id

                );
            }
            $data = $this->competitions->searchGenCompetations($id);
            if($data != null){
                foreach($data as $dataGen){
                    $this->competitions->deleteCompetitionGen($dataGen->id);
                }
                foreach($compet_gen as $data){
                    $this->competitions->insertCompetgen($data);
                }
                echo "<script>alert('บันทึกข้อมูลเสร็จสิ้น')</script>";
                redirect(base_url('staff/Competition'),'refresh');
            } 
            else{
                echo "<script>alert('ไม่พบข้อมูลรุ่นอายุของการแข่งขันนี้')</script>";
            }
        }
        else{
            echo "<script>alert('ไม่พบข้อมูลของการแข่งขันนี้')</script>";
        }
    }

}
