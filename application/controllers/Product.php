<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function detail($id)
	{
		$this->load->model('Products_model');
		$this->load->model('product_img_model');

		$data = array(
			'product'=>$this->Products_model->get_one($id),
			'imgs'=>$this->product_img_model->get_all_img($id)
		);
		$this->load->view('product_detail',$data);
	}
	public function getlistone($id)
	{
		$this->load->model('Products_catalog_model');
		$catal=$this->Products_catalog_model->get_one($id);
		
		if($catal->parent_id==0){
		    $cata=$this->Products_catalog_model->get_all_catalog($id);
		    //var_dump($cata);
		    redirect("Product/getlistone/".$cata[0]->id);
		}
		
		$this->load->model('Products_model');
		$this->load->model('product_img_model');
		$child_cata=$this->Products_catalog_model->get_all_catalog($catal->id);
		


	//	var_dump($child_cata);
        /*$where=array($catal->id);*/
      /*  $where[]=$catal->id;
        foreach ($child_cata as  $v) {
        	
        	$where[]=$v->id;
        	
        }*/
       // var_dump($where);


        $brand_id = $this->input->get('brand_id');	

		$data = array(
			"data"=>$catal,
			'id'=>$this->Products_catalog_model->get_one($catal->parent_id),
			'parent'=>$this->Products_catalog_model->get_all_catalog($catal->parent_id),
			'products'=>$this->Products_model->get_product_by_cata_id($id,$brand_id),
			'products1'=>$this->Products_model->get_brand_by_cata_id($id),
			
		);
		$this->load->view('getlistone',$data);
	}
}
