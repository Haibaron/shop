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
     public function get_all_cart(){
        
        $query = $this->db->get('user_cart');
        return $query->result();
    }
    public function product_in_cart($user_id,$product_id){
        $array=array(
            'user_id' => $user_id,
            'product_id' =>$product_id,
            );
    	$query = $this->db->where($array)->get('user_cart');
    	return $query->row();
    }
     public function get_cart($user_id){
       
        $query=$this->db->where('user_id',$user_id)->get('user_cart');
        $query->row();
    }
    public function get_count($user_id){
       
       return $this->db->where('user_id',$user_id)->count_all("user_cart");
        
    }
     public function add_to_cart($user_id,$product_id,$num){
        $array=array(
        	'user_id'=>$user_id,
        	'product_id'=>$product_id,
        	'num'=>$num
        	);
        $query=$this->db->insert('user_cart',$array);
    }

     public function upcart($user_id,$product_id,$num){
      $this->db->query("update `user_cart` set `num`=`num`+$num where  `user_id` =$user_id and `product_id`=$product_id");
    }
     public function upcart_num($id,$num){
      $this->db->where('id',$id)->update('user_cart',array('num'=>$num));
    }
    public function get_del_cart($id){
        $this->db->where('id',$id)->delete('user_cart');
    }
    public function get_dels_cart($ids){
        $this->db->where_in('id',$ids)->delete('user_cart');
    }

 public function get_cart_order($data){
       
        $query=$this->db->where($data)->get('user_cart');
        $query->row();
    }
  


}