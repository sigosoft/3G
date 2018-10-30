<?php

class FCM_model extends CI_Model {

	public function _construct()
	{
		parent:: _contruct();
		$this->load->database();

	}

	
	
	public function insertfcm($data)
	{
	return $this->db->update('fcm', $data);
		
	}

   public function fcm_msg()
   {
       	$this->db->select('fcm_id');
		$this->db->from('fcm');
	    //$this->db->where('product_id',$param);
		return $this->db->get()->row()->fcm_id;
   }
   
    
}



?>