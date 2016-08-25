<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_addr extends CI_Controller {
   public function get_all(){
      $this->load->model('user_addr');
       $addr=$this->user_addr->get_all();
      $data=array(
         'addr'=>$addr
        );
      $this->load->view('pay_order',$data);
   }
}