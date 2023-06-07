<?php

defined('BASEPATH') OR exit("direct access cant allowed");
class Blog extends CI_Controller
{
//function index
    public function index()
    {
       if(!empty($this->session->userdata('user'))){
            $this->load->model('BlogModel');
            $data=array();
            $data['blogs']=$this->BlogModel->getAllData();
        
            $this->load->view('admin/blog/list',$data);
       }else{
        redirect(base_url().'login/index');
       }
    }


//function add
    public function add()
    {
        if(!empty($this->session->userdata('user'))){
            $this->load->model('BlogModel');
            $this->load->library('form_validation');

            $this->form_validation->set_rules('title',"Title",'trim|required');
            $this->form_validation->set_rules('description',"Description",'trim|required');
            $this->form_validation->set_rules('author',"Author",'trim|required');

        
            if($this->form_validation->run() == true)
            {
                $formarray=array();
                $formarray['title']=$this->input->post('title');
                $formarray['description']=$this->input->post('description');
                $formarray['author']=$this->input->post('author');
                $formarray['special']=$this->input->post('special');
                $formarray['created_at']=date('Y-m-d');

                $this->BlogModel->insert($formarray);
                $this->session->set_flashdata('success','Blog created successfully!');
                redirect(base_url().'blog/index');

            }else
            {
                $this->load->view('admin/blog/add');
            }
        }else
        {
            redirect(base_url().'login/index');
        }
    }


//function edit
    public function edit($id)
    {
        if(!empty($this->session->userdata('user')))
        {
            $this->load->model('BlogModel');
            $data['blog']=$this->BlogModel->getAuthorRecord($id);

            $this->load->library('form_validation');

            $this->form_validation->set_rules('title','Title','trim|required');
            $this->form_validation->set_rules('description','Description','trim|required');
            $this->form_validation->set_rules('author','Author','trim|required');

            if($this->form_validation->run() == true)
            {
                $formarray=array();
                $formarray['title']=$this->input->post('title');
                $formarray['description']=$this->input->post('description');
                $formarray['author']=$this->input->post('author');
                $formarray['special']=$this->input->post('special');

                $this->BlogModel->SaveUpdateData($id,$formarray);
                $this->session->set_flashdata('update_status','Blog updated successfully.');
                
                redirect(base_url().'blog/index');
            }else
            {
                $this->load->view('admin/blog/edit',$data);
            }
        }else
        {
        redirect(base_url().'login/index');
        }

    }


//function delete
    public function delete($id)
    {
        if(!empty($this->session->userdata('user'))){
            $this->load->model('BlogModel');
            $this->BlogModel->deleteBlog($id);
            redirect(base_url().'blog/index');
        }else
        {
            redirect(base_url().'login/index');
        }
    }


//function manage_comments
    public function manage_comments()
    {
        if(!empty($this->session->userdata('user'))){
            $this->load->model('CommentModel');
            $data=array();
            $data['comments']=$this->CommentModel->getAllComents();
            $this->load->view('admin/blog/comments',$data);
        }else{
            redirect(base_url().'login/index');
        }
    }



//function edit_comment
    public function edit_comment($id)
    {
        if(!empty($this->session->userdata('user'))){
            $this->load->model('CommentModel');
            $this->load->library('form_validation');
            $data=array();
            $data['comments']= $this->CommentModel->getcomment($id);

            $this->form_validation->set_rules('name','Name','trim|required');
            $this->form_validation->set_rules('comment','Comment','trim|required');

            if($this->form_validation->run() == true)
            {
                $formarray=array();
                $formarray['name']=$this->input->post('name');
                $formarray['comment']=$this->input->post('comment');
                $formarray['status']=$this->input->post('status');
                $formarray['created_at']=date('Y-m-d');
            
                $this->CommentModel->updateComment($id,$formarray);
                redirect(base_url().'blog/manage_comments');
            }
            else
            {
                $this->load->view('admin/blog/edit_comment',$data);
            }
        }else
        {
            redirect(base_url().'login/index');
        }
    }

    

//function delete_comment
    public function delete_comment($id)
    {
        $this->load->model('CommentModel');
        $this->CommentModel->deleteComment($id);
        redirect(base_url().'blog/manage_comments');
    }
}


?>