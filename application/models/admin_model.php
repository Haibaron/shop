<?php

class admin_model extends CI_Model {
	
   
    public function get_admin($username,$password){
        $array=array(
            'username' => $username,
            'password' =>$password,
            );
    	$query = $this->db->where($array)->get('admin');
    	return $query->row();
    }
  


}