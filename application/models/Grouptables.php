<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grouptables extends CI_Model {
    public function searchRegisterCompetationsById($compet_id){
        $this->db->from('register');
        $this->db->where('compet_id ='.$compet_id);
        $this->db->join('member', 'member.member_id = register.member_id');
        $query = $this->db->get();
        return $query->result();
    }
    public function searchMember($member_id){
        $this->db->from('member');
        $this->db->where('member_id ='.$member_id);
        $query = $this->db->get();
        return $query->row();
    }

}
