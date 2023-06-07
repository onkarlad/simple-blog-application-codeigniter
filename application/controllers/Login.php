<?php

defined('BASEPATH') OR exit("directly access not allowed");

class Login extends CI_Controller
{
    public function index()
    {
        $this->load->model('UserModel');
        $this->load->library('form_validation');

        $this->form_validation->set_rules("username","username","required");
        $this->form_validation->set_rules("password","password","required");

        if($this->form_validation->run() == true)
        {
           $username=$this->input->post('username');
           $password=$this->input->post('password');
           $user = $this->UserModel->doLogin($username,$password);


           if(!empty($user)){
                $this->session->set_userdata('user',$user);
                redirect('AdminDashboard');
           }
           else
           {
            $err=  $this->session->set_flashdata('errorMsg','Either username/password is incorrect.');
              redirect(base_url().'login/index');
           }

        }
        else
        {
            $this->load->view('admin/loginview');
        }
    }
}


?>