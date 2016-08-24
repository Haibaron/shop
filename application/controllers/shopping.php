<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class shopping extends CI_Controller {

  
   public function  lst(){
    $data=array(
      'data'=>$this->input->post()
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
  }else{
    $this->admin_model->add_to_cart($user_id,$product_id,$num);
  }
 }
}