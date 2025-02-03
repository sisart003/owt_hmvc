<?php

class MY_Controller extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();        
        $this->load->module(array('school', 'strings', 'template'));
        // $this->load->libary('fpdf');
    }
}