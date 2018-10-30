<?php

class FCMlink_model extends CI_Model {

	public function _construct()
	{
		parent:: _contruct();
		$this->load->database();

	}

	
	
	public function insertfcm($data)
	{
	return $this->db->update('fcm_link', $data);
		
	}
  
  public function fcm_msg1()
   {
       	$this->db->select('link');
		$this->db->from('fcm_link');
	    //$this->db->where('product_id',$param);
		return $this->db->get()->row()->link;
   }


}



?>