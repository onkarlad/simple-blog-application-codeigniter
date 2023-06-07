<?php
defined('BASEPATH') OR exit("direct access not allowed");
class Home extends CI_Controller
{
//function index
   public function index()
   {
        $this->load->model('BlogModel');
        $this->load->helper('text');

        $allblogs = $this->BlogModel->getAllData();
        $promoblog = $this->BlogModel->getpromoBlogs();
        $featuredblogs =  $this->BlogModel->getFeaturedBlogs();

        $data=array();
        $data['allblogs']=$allblogs;
        $data['promoblog']=$promoblog;
        $data['featuredblogs']=$featuredblogs;

        $this->load->view('home',$data);
   }


//function blogDetail
   public function blogDetail($blog_id)
   {    
        $this->load->model('BlogModel');
        $this->load->model('CommentModel');
        $this->load->library('form_validation');
        $data=array();
        $data['blog'] = $this->BlogModel->getAuthorRecord($blog_id);
        $comments= $this->CommentModel->getCommentById($blog_id);
        $data['comments']=$comments;
       
        $this->form_validation->set_rules('name','Name','trim|required');
        $this->form_validation->set_rules('comment','Comment','trim|required');

        if($this->form_validation->run() == true){
            $formarray=array();
            $formarray['name']=$this->input->post('name');
            $formarray['comment']=$this->input->post('comment');
            $formarray['status']='Active';
            $formarray['blog_id']=$blog_id;
            $formarray['created_at']=date('Y-m-d');

            $this->CommentModel->saveComments($blog_id,$formarray);
            $this->session->set_flashdata('msg','Comment saved successfully');
            redirect(base_url().'home/blogdetail/'.$blog_id);          
        }
        else
        {
            $this->load->view('blogdetail',$data);
        } 
   }
}



?>