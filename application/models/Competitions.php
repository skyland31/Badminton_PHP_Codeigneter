<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Competitions extends CI_Model {
	function insert($data){
        return $this->db->insert('competition',$data);
    }
    function allCompetations(){
        $query = $this->db->get("competition");
        return $query->result();
    }
    function searchType($type){
        
        $this->db->from("type");
        $this->db->where("type_id = ".$type);
        $result = $this->db->get();
        return $result->row();
    }
    function searchGen($gen){
        
        $this->db->from("generation");
        $this->db->where("gen_id = ".$gen);
        $result = $this->db->get();
        return $result->row();
    }
    function delete($id,$gen){
        return $this->db->delete('competition', array('compet_id' => $id,'compet_gen' => $gen));
    }
    function searchCompetitionById($id){
        $this->db->from("competition");
        $this->db->where("compet_id = ".$id);
        $result = $this->db->get();
        return $result->row();
    }
    function searchCompetitionByName($name){
        $this->db->from("competition");
        $this->db->where("name = '".$name."'");
        $result = $this->db->get();
        return $result->result();
    }
    function update($data){
        $this->db->where('compet_id', $data['compet_id']);
        $result = $this->db->update('competition', $data);
        return $result;
    }
}
