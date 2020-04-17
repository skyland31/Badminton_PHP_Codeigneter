<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Competitions extends CI_Model {
	function insert($data){
        return $this->db->insert('competition',$data);
    }
    function insertCompetgen($data){
        return $this->db->insert('compet_gen',$data);
    }
    function allCompetations(){
        $query = $this->db->get("competition");
        return $query->result();
    }
    function searchGenCompetations($competId){
        $this->db->from("compet_gen");
        $this->db->where("compet_id = ".$competId);
        $result = $this->db->get();
        return $result->result();
    }
    function searchType($type){
        $this->db->select("name");
        $this->db->from("type");
        $this->db->where("type_id = ".$type);
        $result = $this->db->get();
        return $result->row();
    }
    function searchGen($gen){
        $this->db->select("name");
        $this->db->from("generation");
        $this->db->where("gen_id = ".$gen);
        $result = $this->db->get();
        return $result->row();
    }
    function deleteCompetition($id){
        return $this->db->delete('competition', array('compet_id' => $id));
    }
    function deleteCompetitionGen($id){
        return $this->db->delete('compet_gen', array('id' => $id));
    }
    function searchCompetitionById($id){
        $this->db->from("competition");
        $this->db->where("compet_id = ".$id);
        $result = $this->db->get();
        return $result->row();
    }
    //-------------------------------------------
    function searchCompetitionByName($name){
        $this->db->from("competition");
        $this->db->where("name = '".$name."'");
        $result = $this->db->get();
        return $result->row();
    }
    //------------------------------------------------
    function update($data){
        $this->db->where('compet_id', $data['compet_id']);
        $result = $this->db->update('competition', $data);
        return $result;
    }
}
