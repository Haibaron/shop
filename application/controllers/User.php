<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
  
   public function  login(){

   	  $this->load->library('form_validation');
      $this->form_validation->set_rules('username', '用户名', 'required|callback__username_check');
		  $this->form_validation->set_rules('password', '密码', 'required');
        if ($this->form_validation->run() == FALSE)
        {
           $this->load->view('user_login');
        }
        else
        {

            $this->session->set_userdata('user_is_login',true);
           // echo "登录成功";
            redirect('Front/index');
        }	

		
	}
	  public function _username_check() {

        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $this->load->model('admin_model');
        $admin= $this->admin_model->get_admin($username,$password);
        
        if ($admin) {
          $this->session->set_userdata('user',$username);
             return TRUE;

        }else{
            $this->form_validation->set_message('_username_check', '用户名或密码错误');
            return FALSE;
        }
    }
      
    public function  regedit(){
   	  $this->load->view('user_regedit');
   }
   public function  logout(){
      $this->session->sess_destroy();
      redirect("Front/front")
   }
   public function  vritify(){
      $this->load->view('user_regedit');
   }
}