<?php

class Brand_model extends CI_Model {

	public function _construct()
	{
		parent:: _contruct();
		$this->load->database();

	}

	
	
	public function insertbrand($brand)
	{
		return $this->db->insert('brand', $brand);
	}

	function getBrands()
	{
		$this->db->select('*');
		$this->db->from('brand');
		$this->db->where('status','active');
		return $this->db->get()->result();
	}	
	function getBrands1()
	{
		$this->db->select('*');
		$this->db->from('brand');
		
		return $this->db->get()->result();
	}	
	function getBrandsbyid($param)
	{
		$this->db->select('*');
		$this->db->from('brand');
		$this->db->where('brand_id',$param);
		return $this->db->get()->row();
	}	

  public function updatebrand($brand,$brand_id)
  {
 
  	$this->db->where('brand_id',$brand_id);
  	return $this->db->update('brand',$brand);
  }

/*  public function deletebrand($brand_id)
  {
  	$this->db->where('brand_id',$brand_id);
  	return $this->db->delete('brand');
  }*/

}



?>