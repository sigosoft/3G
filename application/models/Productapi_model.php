<?php

class Productapi_model extends CI_Model {

	public function _construct()
	{
		parent:: _contruct();
		$this->load->database();

	}

	
	
	public function getProduct()
	{
		$this->db->select('product.product_id,product.UID,product.product_name,product.model_no,product.price,product.video,product.image,brand.brand_name,brand.brand_id');
		$this->db->from('product');
		$this->db->join('brand', 'product.brand_id = brand.brand_id', 'inner');
		return $this->db->get()->result();

		
	}
	public function getProductLowest()
	{
		$this->db->select('price');
		$this->db->from('product');
		$this->db->order_by("price", "asc");
		$this->db->limit(1);
		return $this->db->get()->row()->price;

		
	}
	public function getProductHighest()
	{
		$this->db->select('price');
		$this->db->from('product');
		$this->db->order_by("price", "desc");
		$this->db->limit(1);
		return $this->db->get()->row()->price;

		
	}
}



?>