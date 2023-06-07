<?php

class BlogModel extends CI_Model
{
    public function insert($formarray)
    {
        $this->db->insert('blogs',$formarray);
    }

    public function getAllData()
    {
        $this->db->order_by('blog_id','desc');
        $blogs=$this->db->get('blogs')->result_array();
        return $blogs;
    }

   public function getAuthorRecord($id)
   {    
        $this->db->where('blog_id',$id);
        return $this->db->get('blogs')->row_array();
   }

   public function SaveUpdateData($id,$formarray)
   {
        $this->db->where('blog_id',$id);
        $this->db->update('blogs',$formarray);
   }

   public function deleteBlog($id)
   {
        $this->db->where('blog_id',$id);
        $this->db->delete('blogs');
   }

   public function getFeaturedBlogs()
   {
        $this->db->limit('2');
        $this->db->order_by('blog_id','desc');
        $this->db->where('special','featured');
        $blogs=$this->db->get('blogs')->result_array();
        return $blogs;
   }
   public function getpromoBlogs()
   {
        $this->db->order_by('blog_id','desc');
        $this->db->where('special','promo');
        $this->db->limit(1);
        $blogs=$this->db->get('blogs')->row_array();
        return $blogs;
   }
}


?>