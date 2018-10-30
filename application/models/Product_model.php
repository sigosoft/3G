<?php

class Product_model extends CI_Model {

	public function _construct()
	{
		parent:: _contruct();
		$this->load->database();

	}

	
	
	public function insertproduct($product)
	{
		return $this->db->insert('product', $product);
	}

	function getProducts()
	{
		$this->db->select('product.product_id,product.UID,product.product_name,product.model_no,product.price,product.video,product.image,brand.brand_name,brand.brand_id');
		$this->db->from('product');
		$this->db->join('brand', 'product.brand_id = brand.brand_id', 'inner');
		return $this->db->get()->result();
	}	
	function getProductsbyid($param)
	{
		$this->db->select('product.product_id,product.UID,product.product_name,product.model_no,product.price,product.video,product.image,brand.brand_name,brand.brand_id');
		$this->db->from('product');
		$this->db->join('brand', 'product.brand_id = brand.brand_id', 'inner');
		$this->db->where('product_id',$param);
		return $this->db->get()->row();
	}	
	public function updateproduct($product,$product_id)
	{
       $this->db->where('product_id',$product_id);
       return $this->db->update('product',$product);
	}
	public function updateimage($image,$product_id)
	{
		$this->db->where('product_id',$product_id);
       return $this->db->update('product',$image);
	}

	public function updatevideo($video,$product_id)
	{
		$this->db->where('product_id',$product_id);
       return $this->db->update('product',$video);
	}
	
	public function deleteproduct($product_id)
	{
	$this->db->where('product_id',$product_id);
  	return $this->db->delete('product');
	}
	
	public function getuid($array)
	{
       $this->db->select('UID');
	   $this->db->from('product');
	   $this->db->where('UID',$array['UID']);
		return $this->db->get();
	}
}



?>