<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Converter_model extends CI_Model 
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_users()
    {
        return $this->db->get('mytable')->result();
    }
}