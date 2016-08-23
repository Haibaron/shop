<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	public function index()
	{
		$this->load->model('Products_model');
		$this->load->model('Articles_model');
		$this->load->model('Products_catalog_model');
		$data = array(
			'products'=>$this->Products_model->get_all(),
			'notice'=>$this->Articles_model->get_lastest(5,0),
			'new'=>$this->Articles_model->get_lastest(5,1),
			'catalogs'=>$this->Products_catalog_model->get_all(),
			

		);
		$this->load->view('front_index',$data);
	}
}
