<?php

class Login_model extends CI_Model {

	public function _construct()
	{
		parent:: _contruct();
		$this->load->database();

	}

	
	
	public function login($user)
	{
		$this->db->select('*');
		$this->db->from('login');
		$this->db->where('user_type','admin');
		$this->db->where('username',$user['username']);
		$this->db->where('password',$user['password']);
		return $this->db->get();

		
	}
}



?>