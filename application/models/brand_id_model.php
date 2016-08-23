<?php

class Products_model extends CI_Model {
  public function get_all(){
      $query=$this->db->get('brand_id');
      $query->result();
  }
}