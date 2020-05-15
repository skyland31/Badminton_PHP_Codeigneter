<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grouptable extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('grouptables');
    }
    public function showgroupTable($compet_id){
        $groupTabel = $this->grouptables->searchRegisterCompetationsById($compet_id);
        $group = 1;
        $dataTemp = [];
        $dataGroup = [];
        foreach($groupTabel as $datatable){
            $member2 = $this->grouptables->searchMember($datatable->member2);
            $dataTemp[] = array(
                'Gen' => $datatable->gen_id,
                'Group' => $group,
                'team' => $datatable->team,
                'member1' => $datatable->name,
                'member2' => $member2->name,
                'club' => $datatable->club
            );
            // $member2 = $this->grouptables->searchMember($datatable->member2);
            // if($dataTemp == null){
            //     $dataTemp[] = array(
            //         'Gen' => $datatable->gen_id,
            //         'Group' => $group,
            //         'team' => $datatable->team,
            //         'member1' => $datatable->name,
            //         'member2' => $member2->name,
            //         'club' => $datatable->club
            //     );
            // }
            // else{
            //     $i = 0;
            //     foreach($dataTemp as $dataValue){
            //         if($group == $dataValue['Group'] && $dataValue['Gen'] == $datatable->gen_id){
            //             $i =$i+1;
            //         }
            //     }
            //     if($i <= 5){
            //         $temp =$group;
            //         foreach($dataTemp as $dataValue){
            //             if($dataValue['club'] == $datatable->club && $dataValue['Gen'] == $datatable->gen_id){
            //                 $temp = $temp + 1;
            //             }
            //             if($dataValue['Gen'] != $datatable->gen_id){
            //                 $group = 1;
            //                 $temp = $group;
            //             }
            //         }
            //         $dataTemp[] = array(
            //             'Gen' => $datatable->gen_id,
            //             'Group' => $temp,
            //             'team' => $datatable->team,
            //             'member1' => $datatable->name,
            //             'member2' => $member2->name,
            //             'club' => $datatable->club
            //         );
            //     }
            //     else{
            //         $group = $group +1;
            //     }
            // }
        }
        echo json_encode($dataTemp);
        echo "<script>alert('Welcome".$compet_id."')</script>";
    }
}
