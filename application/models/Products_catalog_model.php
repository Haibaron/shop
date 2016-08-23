<?php

class Products_catalog_model extends CI_Model {
	private $table_name = "product_catalog";


    public function get_all(){
		$query = $this->db->where('parent_id',0)->get($this->table_name);
		return $query->result();
    }

   
    public function get_one($id){
    	$query = $this->db->where("id",$id)->get($this->table_name);
    	return $query->row();
    }
    public function get_all_catalog($id){
		$query = $this->db->where('parent_id',$id)->get($this->table_name);
		return $query->result();
    }
    
  


}