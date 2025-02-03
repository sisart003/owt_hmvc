<?php

class School extends MY_Controller
{
    // public $travel;

    public function __construct()
    {
        parent::__construct();
        // $this->travel = $this->load->database('travel', TRUE);

    }

    public function get_school_name()
    {
        echo '<h4>Tala High School</h4>';
    }

    public function get_school_address()
    {
        echo 'Caloocan City, Philippines';
        
    }

    // public function get_all_categories()
    // {
    //     $this->travel->select('*');
    //     $this->travel->from('category');
    //     $query = $this->travel->get();

    //     $result = $query->result();
    //     echo '<pre>';
    //     print_r($result);
    //     echo '</pre>';
    // }
}