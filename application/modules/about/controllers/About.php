<?php

class About extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function call_about()
    {
        $about_page = 'about/about_view';
        $this->template->loadTemplate($about_page);
    }
}