<?php

class Articles_model extends CI_Model {
	private $table_name = "article";


    public function get_all(){
		$query = $this->db->get($this->table_name);
		return $query->result();
    }

    public function get_lastest($limit,$type){
    	$query = $this->db->where('type',$type)->limit($limit)->get($this->table_name);
		return $query->result();
    }

   
    public function get_one($id){
    	$query = $this->db->where("id",$id)->get($this->table_name);
    	return $query->row();
    }
  


}