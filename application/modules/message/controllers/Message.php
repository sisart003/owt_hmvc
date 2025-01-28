<?php

class Message extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();        
    }

    public function show_message()
    {
        echo '<h3>This is the Message<h3>';
        $this->school->get_school_name();
        $this->school->get_school_address();
        echo '<br>';
        $str = 'Chrishart Estrada';

        echo $this->strings->my_uppercase($str);
        echo '<br>';
        echo $this->strings->strlength($str);
        
    }

    public function simpleMessage()
    {
        $content['message'] = 'Simple View Message';
        $this->load->view('message/simple-message', $content);
    }

}