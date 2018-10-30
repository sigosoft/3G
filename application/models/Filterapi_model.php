<?php

class Filterapi_model extends CI_Model {

	public function _construct()
	{
		parent:: _contruct();
		$this->load->database();

	}

	
	
	public function getProductbybrand($brand_id)
	{
		$this->db->select('product.product_id,product.UID,product.product_name,product.model_no,product.price,product.video,product.image,brand.brand_name,brand.brand_id');
		$this->db->from('product');
		$this->db->join('brand', 'product.brand_id = brand.brand_id', 'inner');
		$this->db->where('product.brand_id',$brand_id);
		return $this->db->get()->result();

		
	}

	public function getProductbyprice($from,$to)
	{
		$this->db->select('product.product_id,product.UID,product.product_name,product.model_no,product.price,product.video,product.image,brand.brand_name,brand.brand_id');
		$this->db->from('product');
		$this->db->join('brand', 'product.brand_id = brand.brand_id', 'inner');
		$this->db->where('price>=',$from);
		$this->db->where('price<=',$to);
		return $this->db->get()->result();

		
	}
}



?>