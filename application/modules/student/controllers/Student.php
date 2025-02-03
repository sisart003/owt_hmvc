<?php

class Student extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->database();
        $this->load->library('migration');
    }

    public function run_migrations()
    {
        // echo 'This is the Migrations';
        if(!$this->migration->current()){
            print_r($this->migration->error_string());
        }else{
            echo '<h3>Migration Success!</h3>';
        }

    }
}