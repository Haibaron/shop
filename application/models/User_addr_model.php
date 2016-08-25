<?php
class User_addr_model extends CI_Model {
  public function get_all_addr($user_id){
      $query=$this->db->where('user_id',$user_id)->get('user_address');
      $query->result();
  }
}