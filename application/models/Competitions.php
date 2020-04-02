<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Competitions extends CI_Model {
	function insert($data){
        return $this->db->insert('competition',$data);
    }
}
