<?php

class product_img_model extends CI_Model {
	private $table_name = "product_img";
    public function get_all_img($id){
		$query = $this->db->where('product_id',$id)->limit(4)->get($this->table_name);
		return $query->result();
    }

}