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
}
