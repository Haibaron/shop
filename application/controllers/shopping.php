<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class shopping extends CI_Controller {
  
   public function  lst(){
    $data=array(
      'data'=>$this->input->post()
      );
     $this->load->view("lst",$data);
}
}