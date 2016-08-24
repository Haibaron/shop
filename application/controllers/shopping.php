<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class shopping extends CI_Controller {

  
   public function  lst(){
   $this->load->model("admin_model");
   $this->load->model('Products_model');
   $data=$this->admin_model->get_all_cart();
    $data=array(
      'carts'=>$data,
    
      );
     $this->load->view("lst",$data);
}
 public function addtocart(){
  $this->load->model("admin_model");
  $product_id=$this->input->post('product_id');
  $num=$this->input->post('num');
  $user_id=$this->session->userdata("user_id");
  if($this->admin_model->product_in_cart($user_id,$product_id)){
    $this->admin_model->upcart($user_id,$product_id,$num);
    redirect('');
  }else{
    $this->admin_model->add_to_cart($user_id,$product_id,$num);
  }
 }
 public function updatecart(){
  $this->load->model("admin_model");
  $id=$this->input->get('id');
  $num=$this->input->get('num');
  
  if($num>0){
     $this->admin_model->upcart_num($id,$num);
  }else{
    echo "<0";
  }
 
    echo "ok";
}
 
 
 public function  del(){
  $id=$this->input->get('id');
  $this->load->model("admin_model");
  $this->admin_model->get_del_cart($id);
}
public function  dels(){
$this->load->model("admin_model");
  $ids=$this->input->post('ids');
  
  $this->admin_model->get_dels_cart($ids);
  echo "ok";
}
}