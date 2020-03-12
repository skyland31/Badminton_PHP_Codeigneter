<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model {
	public function get_user_data($username)
    {
        $this->db->select('id, username, password');
        $this->db->from('users');
        $this->db->where('username', $username);

        $query = $this->db->get();
        return $query->row(); //Return Object
        // return $query->result(); //Return array (many result)
    }
}
