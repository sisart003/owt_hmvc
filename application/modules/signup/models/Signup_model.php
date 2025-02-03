<?php

class Signup_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function create_user($data = array())
    {
        if($this->db->insert('tbl_users', $data)){
            return true;
        }else{
            return false;
        }
    }

    public function get_users()
    {
        $this->db->select('*');
        $this->db->from('tbl_users');
        $query = $this->db->get();
        
        return $query->result();
    }

}