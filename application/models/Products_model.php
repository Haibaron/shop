<?php

class Products_model extends CI_Model {
	private $table_name = "product";


    public function get_all(){
		$query = $this->db->limit(4)->get($this->table_name);
		return $query->result();
    }

   
    public function get_one($id){
    	$query = $this->db->where("id",$id)->get($this->table_name);
    	return $query->row();
    }
    public function get_by_catalog_ids($where){
        $query = $this->db->where_in('cata_id',$where)->get($this->table_name);
        return $query->result();
    }
  
  	public function get_by_catalog($cata_id){
		$query = $this->db->where(array('cata_id'=>$cata_id,'recommend'=>0))->limit(6)->get($this->table_name);
		return $query->result();
    }

    /*获取推荐产品*/
    public function get_recommend($cata_id){
		$query = $this->db->where(array('cata_id'=>$cata_id,'recommend'=>1))->get($this->table_name);
		return $query->row();
    }
  
    public function get_product_by_cata_id($cata_id,$brand_id){
          $query=$this->db->where('parent_id',$cata_id)->get('product_catalog');
          $child_catalog=$query->result();
         // var_dump($child_catalog);
          $where["cata_id"]=$cata_id;
          foreach ($child_catalog as  $p) {
              $where[]=$p->id;
          }
          //  var_dump($where);
          $query = $this->db->where_in('cata_id',$where)->where('brand_id',$brand_id)->get($this->table_name);
          return $query->result();
    }
public function get_brand_by_cata_id($cata_id){
          $query=$this->db->where('parent_id',$cata_id)->get('product_catalog');
          $child_catalog=$query->result();
         // var_dump($child_catalog);
          $where["cata_id"]=$cata_id;
          foreach ($child_catalog as  $p) {
              $where[]=$p->id;
          }
          //  var_dump($where);
          $query = $this->db->select('brand_id')->where_in('cata_id',$where)->distinct()->get($this->table_name);
          $query1=$query->result();
         foreach ($query1 as  $value) {
            $brand_ids[]=$value->brand_id;
         }
         $query=$this->db->where_in('id',$brand_ids)->get('product_barnd');
         return $query->result();
    }
}