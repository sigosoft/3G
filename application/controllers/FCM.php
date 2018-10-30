<?php
 
 class FCM extends CI_Controller {

 	public function __construct()
 	{
 		parent::__construct();
		$this->load->helper('url');
		$this->load->model('FCM_model');

 	}
 	public function fcm()
 	{

     $fcm_id=$this->input->post('fcm_id');
     $data['fcm_id']=$fcm_id;
     $fcm=$this->FCM_model->insertfcm($data);
   
     $return=[
      'message'=>'success'
      
     ];
    print_r(json_encode($return));
 	}

 
 
 }
?>