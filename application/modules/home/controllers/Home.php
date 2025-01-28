<?php

class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function call_homepage()
    {
        $home_page = 'home/home_view';
        $this->template->loadTemplate($home_page);
    }
}