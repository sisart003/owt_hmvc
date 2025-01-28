<?php

class Signup extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function user_layout()
    {
        $this->load->view('signup/user_register_layout');
    }

    public function user_form_submit()
    {
        $this->form_validation->set_rules('txtname', 'Name', 'required|min_length[6]');
        $this->form_validation->set_rules('txtemail', 'Email', 'required|min_length[4]|valid_email');
        $this->form_validation->set_rules('txtmobile', 'Mobile', 'required|min_length[4]|max_length[30]');

        if($this->form_validation->run() === FALSE)
        {
            $this->load->view('signup/user_register_layout');
        }else{
            echo "<h4>Successfully</h4>";
            print_r($this->input->post());
        }
    }
}