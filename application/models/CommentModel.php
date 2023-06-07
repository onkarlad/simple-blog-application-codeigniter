<?php
class CommentModel extends CI_Model{

    public function saveComments($id,$formarray)
    {
        $this->db->where('blog_id',$id);
        $this->db->insert('comments',$formarray);
    }

    public function getCommentById($id)
    {
        $this->db->order_by('comment_id','desc');
        $this->db->where('blog_id',$id);
        $this->db->where('status','Active');    
        $comments = $this->db->get('comments')->result_array();
        return $comments;
    }

    public function getAllComents(){
        return $this->db->get('comments')->result_array();
    }

    public function getcomment($id)
    {
        $this->db->where('comment_id',$id);
        return $this->db->get('comments')->row_array();
    }

    public function updateComment($id,$formarray)
    {
        $this->db->where('comment_id',$id);
        $this->db->update('comments',$formarray);
    }

    public function deleteComment($id)
    {
        $this->db->where('comment_id',$id);
        $this->db->delete('comments');
    }
}

?>