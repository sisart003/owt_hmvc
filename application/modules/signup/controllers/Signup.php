<?php

class Signup extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'session', 'mylibrary'));
        $this->load->helper('custom');
        $this->load->model('signup_model');
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
            // echo "<h4>Successfully</h4>";
            // print_r($this->input->post());

            $form_data = $this->input->post();

            $insert_data = array(
                'name' => $form_data['txtname'],
                'email' => $form_data['txtemail'],
                'mobile' => $form_data['txtmobile'],
                'designation' => $form_data['txtdesignation']
            );

            // insert data
            if($this->signup_model->create_user($insert_data))
            {
                $this->session->set_flashdata('success', 'Data has been saved Successfully!');
                redirect('signup/user');
            }else{
                $this->session->set_flashdata('error', 'Failed to save data.');
                redirect('signup/user');
            }
        }
    }

    public function get_all_users()
    {
        $result = $this->signup_model->get_users();
        // echo '<pre>';
        // print_r($result);
        // echo '</pre>';
        if(count($result) > 0){
            foreach($result as $index => $user)
            {
                $name = $user->name;
                $email = $user->email;
                $mobile = $user->mobile;
                $designation = $user->designation;
                $name_length = $this->mylibrary->my_length($user->name);

                echo "<h3>Name : {$name}";
                echo "<h3>Email : {$email}";
                echo "<h3>Mobile : {$mobile}";
                echo "<h3>Designation : {$designation}";
                echo "<h4>Total Length: {$name_length}</h4>";
                echo "<hr>";
            }
        }else{
            echo "no result found!";
        }
    }

    public function string_fn()
    {
        $string = 'chrishart estrada';

        echo $this->mylibrary->convert_words($string);
    }

    public function run_my_helpers()
    {
        $string = 'chrishart estrada';
        echo 'Length of the string: '. find_my_length($string);
        echo "<br>";

        $student_score = 100;
        echo 'Level: ' . find_my_level($student_score);
    }


}