<?php

defined('BASEPATH') OR exit("direct access not allowed");
class AdminDashboard extends CI_Controller
{
    public function index()
    { 
        if(empty($this->session->userdata('user'))){
            redirect('login/index');
        }else{
            $this->load->view('admin/dashboard');
        }
    }

    public function signout()
    {
        $this->session->unset_userdata('user');
        redirect('login/index');
    }
}

?>