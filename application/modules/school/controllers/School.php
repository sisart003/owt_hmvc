<?php

class School extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

    public function get_school_name()
    {
        echo '<h4>Tala High School</h4>';
    }

    public function get_school_address()
    {
        echo 'Caloocan City, Philippines';
    }
}