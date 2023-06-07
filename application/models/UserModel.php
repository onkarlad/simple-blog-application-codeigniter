<?php

class UserModel extends CI_Model
{
    function doLogin($username,$password)
    {   
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $query = $this->db->get('users');
        $user = $query->row_array();
        return $user;
    }
}


?>